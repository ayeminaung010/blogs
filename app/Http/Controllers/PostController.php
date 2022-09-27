<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    // customer create page
    public function create(){
        $posts = Post::when(request('searchKey'),function($query){
                    $key = request('searchKey');
                    $query->orWhere('title','like','%'.$key.'%')
                          ->orWhere('description','like','%'.$key.'%');
                })
                ->orderBy('created_at','desc')
                ->paginate(4);
        return view('create',compact('posts'));
    }

    // post create
    public function postCreate(Request $request){
        $this->postValidationCheck($request);
        $data = $this->getPostData($request);


        if($request->hasFile('postImage')){
            $fileName = uniqid() . '_' . $request->file('postImage')->getClientOriginalName();
            $request->file('postImage')->storeAs('public',$fileName);
            $data['image'] = $fileName;
        }
        // dd($data);
        Post::create($data);
        return redirect()->route('post#createPage')->with(['insertSuccess'=>'Post ဖန်တီးခြင်းအောင်မြင်ပါသည်']);
    }

    // post delete
    public function postDelete($id){
        Post::find($id)->delete();
        return back();
    }

    // direct update page
    public function updatePage($id){
        $post = Post::where('id',$id)->first();
        return view('update',compact('post'));
    }

    // edit page
    public function editPage($id){
        $post = Post::where('id',$id)->first()->toArray();
        // dd($post);
        return view('edit',compact('post'));
    }

    // update post
    public function update(Request $request){

       $this->postValidationCheck($request);
       $updateData = $this->getPostData($request); // array
       $id = $request->postId;
    //    dd($updateData);


       if($request->hasFile('postImage')){

            // delete
            $oldImageName = Post::select('image')->where('id',$request->postId)->first()->toArray();
            $oldImageName = $oldImageName['image'];

            if($oldImageName != null){
                Storage::delete('public/'.$oldImageName);
            }

            $fileName = uniqid() . '_' . $request->file('postImage')->getClientOriginalName();
            $request->file('postImage')->storeAs('public',$fileName);
            $updateData['image'] = $fileName;
        }

       Post::where('id',$id)->update($updateData);
       return redirect()->route('post#createPage')->with(['updateSuccess'=>'Update လုပ်ခြင်းအောင်မြင်ပါသည်']);
    }

    // get post data
    private function getPostData($request){
        $data = [
            'title' => $request->postTitle ,
            'description' => $request->postDescription ,
            // 'image' => $request->postImage ,
        ];
        // $data['image'] = $request->postImage == null ? null : $request->postImage;
        $data['price'] = $request->postPrice == null ? 2000 : $request->postPrice;
        $data['address'] = $request->postLocation == null ? 'pyay' : $request->postLocation;
        $data['rating'] = $request->postRating == null ? 5 : $request->postRating;

        return $data;
    }

    // post validation check
    private function postValidationCheck($request){
            $validationRules = [
                'postTitle' => 'required|min:5|unique:posts,title,'.$request->postId,
                'postDescription' => 'required|min:5' ,
                'postImage' => 'mimes:jpg,jpeg,png|file',

            ];

        $validationMessage = [
            'postTitle.required' => 'Post Title ဖြည့်ရန်လိုအပ်ပါသည်။' ,
            'postTitle.min' => 'အနည်းဆံုး ၅ လံုးအထက်ရှိရပါမည်။' ,
            'postTitle.unique' => 'Post Title ခေါင်းစဉ်တူနေပါသည်။ ထပ်မံ ရိုက်ကြည့်ပါ ။' ,
            'postDescription.required' => 'Post Description ဖြည့်ရန်လိုအပ်ပါသည်။' ,
            'postDescription.min' => 'အနည်းဆံုး ၅ လံုးအထက်ရှိရပါမည်။',
            // 'postPrice.required' => 'Post Price ဖြည့်ရန်လိုအပ်ပါသည်။' ,
            // 'postLocation.required' => 'Post address ဖြည့်ရန်လိုအပ်ပါသည်။' ,
            // 'postRating.required' => 'Post Rating ဖြည့်ရန်လိုအပ်ပါသည်။' ,
            'postImage.mimes' => 'Image သည် PNG JPEG JPG type သာဖြစ်ရပါမည်။' ,
            'postImage.file' => 'Image သည် File သာဖြစ်ရပါမည်။'
        ];

        Validator::make($request->all(),$validationRules,$validationMessage)->validate();
    }

}
