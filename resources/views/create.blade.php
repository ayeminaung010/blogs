@extends('master')

@section('content')
    <div class="container">

        <div class="row mt-5">
            <div class="col-5 ">
                <div class=" p-2">
                    @if (session('insertSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('insertSuccess') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('updateSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('updateSuccess') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                    <form action="{{ route('post#create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="text-group mb-1">
                            <label for="">Post Title(ခေါင်းစဉ်)</label>
                            <input type="text" name="postTitle" id="" class="form-control @error('postTitle') is-invalid @enderror" placeholder="Enter post title" value="{{ old('postTitle')}}">
                            @error('postTitle')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-group mb-1">
                            <label for="">Post Description(စာပိုဒ်)</label>
                            <textarea name="postDescription" id="" cols="30" rows="10" class="form-control  @error('postDescription') is-invalid @enderror" placeholder="Enter post description" >{{ old('postDescription')}}</textarea>
                            @error('postDescription')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- //new added --}}
                        <div class="text-group mb-1">
                            <label for="">Post Image</label>
                            <input type="file" name="postImage" id="" class="form-control @error('postImage') is-invalid @enderror"  value="{{ old('postImage')}}">
                            @error('postImage')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-group mb-1">

                                <label for="">Location</label>
                                <select class="form-select  @error('postLocation') is-invalid @enderror"  id="validationCustom04" name="postLocation" >
                                    <option selected disabled value="{{ old('postLocation')}}">Choose city</option>
                                    <option value="yangon">yangon</option>
                                    <option value="mandalay">mandalay</option>
                                    <option value="pyay">pyay</option>
                                    <option value="bago">bago</option>
                                    <option value="pyin oo lwin">pyin oo lwin</option>
                                    <option value="taung gyi">taung gyi</option>
                                    <option value="inn lay">inn lay</option>
                                    <option value="mawlamyine">mawlamyine</option>
                                </select>
                            @error('postLocation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-group mb-1">
                            <label for="">Price</label>
                            <input type="text" name="postPrice" id="" class="form-control @error('postPrice') is-invalid @enderror" placeholder="Enter price" value="{{ old('postPrice')}}">
                            @error('postPrice')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="text-group mb-1">
                            <label for="">Rating</label>
                            <input type="number" name="postRating" id="" class="form-control @error('postRating') is-invalid @enderror" placeholder="Enter Rating eg-1,2,3,4,5..." min="0" max="5" value="{{ old('postRating')}}">
                            @error('postRating')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- new added end --}}
                        <div class=" mb-1">
                            <input type="submit" value="Create" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-7 ">

                <h3 class="pb-3">
                    <form action="{{ route('post#createPage')}}" method="GET">
                        <div class="row">

                            <div class="col-5">Total- <span class="fw-bold">{{$posts->total()}}</span></div>
                            <div class="col-5 offset-2">
                                <div class="row">
                                    <input type="text" name="searchKey" value="{{ request('searchKey')}}" class="form-control col" placeholder="Search..." id="">
                                    <button type="submit" class="btn btn-outline-primary col-2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </h3>
                <div class="data-container">
                    @if (count($posts) != 0)
                        @foreach ($posts as $items )
                        <div class="post p-3 shadow-sm ">
                            <div class="d-flex justify-content-between">
                                <h5>{{ $items['title'] }}</h5>
                                <div class="text-muted">{{ $items['created_at']->diffForHumans()}}</div>
                            </div>

                            <p class="text-muted">{{ Str::words($items['description'],10, '...See more') }}</p>
                            <span>
                                <i class="fa-solid fa-money-bills text-success"></i> <small>{{ $items->price}} Kyats</small> |
                                <i class="fa-solid fa-location-dot text-danger"></i> <small>{{ $items->address}}</small> | <i class="fa-solid fa-star text-warning"></i> <small>{{ $items->rating}}</small>
                            </span>
                            <div class="text-end">
                                {{-- <form action="{{ route('post#delete',$items['id']) }}" method="POST" class="d-flex justify-content-end ">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i> အမှိက်ပုံး</button>
                                    <button class="btn btn-primary ms-2">အပြည့်စုံဖတ်ရန်...</i></button>
                                </form> --}}

                                <a href="{{ route('post#delete',$items['id'])}}" class=" text-decoration-none">
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i> အမှိက်ပုံး</button>
                                </a>
                                <a href="{{ route('post#updatePage',$items['id'])}}" class=" text-decoration-none">
                                    <button class="btn btn-primary">အပြည့်စုံဖတ်ရန်...</i></button>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <h5 class="mt-5 text-danger text-center">There is no Data...</h5>
                    @endif
                </div>
                <div class=" my-3">
                    {{$posts->appends(request()->query())->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
