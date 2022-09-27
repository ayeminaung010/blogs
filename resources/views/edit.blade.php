@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 offset-3 mt-5">
            <div class=" my-3">
                <a href="{{ route('post#updatePage',$post['id'])}}" class="text-decoration-none">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Back</span>
                </a>
            </div>
            <form action="{{ route('post#update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="title">Post title(ခေါင်းစဉ်)</label>
                <input type="hidden" name="postId" value="{{ $post['id']}}">
                <div class="my-2">
                    <input type="text" class="form-control @error('postTitle') is-invalid @enderror" name="postTitle" placeholder="Enter post title.."" value="{{ $post['title'],old('postTitle') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <label for="">Image</label>
                <div class="">
                        @if ($post['image'] == null )
                        <img src=" {{ asset('/storage/'.'404image.jpg')}}" class=" img-thumbnail shadow-sm" alt="" style="width: 100%">
                        @else
                            <img src="{{ asset('/storage/'.$post['image'])}}" class=" img-thumbnail shadow-sm"  alt="" style="width: 100%">
                        @endif
                </div>
                <input type="file" name="postImage" id="" class="form-control my-1 @error('postImage') is-invalid @enderror">
                @error('postImage')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <div class="my-2">
                    <label for="description">Post Description(စာပိုဒ်)</label>
                    <textarea name="postDescription" id="" cols="30" rows="10" class="form-control  @error('postDescription') is-invalid @enderror" placeholder="Enter post description" > {{ $post['description'],old('postDescription')}}</textarea>
                    @error('postDescription')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- new added --}}
                <div class="text-group mb-1">
                    <label for="">Post Image</label>
                    <input type="file" name="updateImage" id="" class="form-control @error('updateImage') is-invalid @enderror"  value="{{ old('updateImage')}}">
                    @error('updateImage')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-group mb-3">
                        <label for="">Location</label>
                        <select class="form-select " id="validationCustom04" name="updateLocation" >
                            <option selected disabled >{{ $post['address'],old('updateLocation')}}</option>
                            <option value="yangon">yangon</option>
                            <option value="mandalay">mandalay</option>
                            <option value="pyay">pyay</option>
                            <option value="bago">bago</option>
                            <option value="pyin oo lwin">pyin oo lwin</option>
                            <option value="taung gyi">taung gyi</option>
                            <option value="inn lay">inn lay</option>
                            <option value="mawlamyine">mawlamyine</option>
                        </select>
                    @error('updateLocation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-group mb-3">
                    <label for="">Price</label>
                    <input type="text" name="updatePrice" id="" class="form-control @error('updatePrice') is-invalid @enderror" placeholder="Enter price" value="{{ $post['price'],old('updatePrice')}}">
                    @error('updatePrice')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                <div class="text-group mb-3">
                    <label for="">Rating</label>
                    <input type="text" name="updateRating" id="" class="form-control @error('updateRating') is-invalid @enderror" placeholder="Enter Rating eg-1,2,3,4,5..." value="{{ $post['rating'],old('updateRating')}}">
                    @error('updateRating')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- new added end --}}
                <input type="submit" value="Update" class="btn btn-success float-end">
            </form>


        </div>

    </div>

</div>
@endsection
