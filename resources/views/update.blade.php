@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-5">
                <div class=" my-3">
                    <a href="{{ route('post#home')}}" class="text-decoration-none">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Back</span>
                    </a>
                </div>

                <h4>{{ $post['title']}}</h4>
                <div class="d-flex">
                    <span class="btn btn-primary bg-dark m-2"><i class="fa-solid fa-money-bills text-success"></i> {{ $post['price']}} </span>
                    <span class="btn btn-primary bg-dark m-2"><i class="fa-solid fa-location-dot text-danger"></i>  {{ $post['address']}} </span>
                    <span class="btn btn-primary bg-dark m-2"><i class="fa-solid fa-star text-warning"></i>  {{ $post['rating']}} </span>
                    <span class="btn btn-primary bg-dark m-2"> {{ $post['created_at']->format("d-M-y ")}} </span>
                    <span class="btn btn-primary bg-dark m-2">  {{ $post['created_at']->format(" m:i:A")}} </span>
                </div>
                <div class="">

                    @if ($post->image == null )
                        <img src=" {{ asset('/storage/'.'404image.jpg')}}" class=" img-thumbnail shadow-sm" alt="" style="width: 100%">
                    @else
                        <img src="{{ asset('/storage/'.$post['image'])}}" class=" img-thumbnail shadow-sm"  alt="" style="width: 100%">
                    @endif
                </div>
                <p class="my-3 text-dark">{{ $post['description']}} </p>
                <p class=" text-muted">{{ $post['created_at']->diffForHumans()}} </p>

            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-8">
                <a href="{{ route('post#editPage',$post['id']) }}">
                    <button class="btn btn-secondary"> <i class="fa-solid fa-pen-to-square"></i> Edit</button>
                </a>

            </div>
        </div>
    </div>
@endsection
