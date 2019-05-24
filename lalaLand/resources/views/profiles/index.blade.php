@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 p-4">
            <img src="/img/lion.png"
                class="rounded-circle"
                width="250px" height="250px"
            >
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>123</strong> posts</div>
                <div class="pr-5"><strong>45k</strong> followers</div>
                <div class="pr-5"><strong>678</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4">
                <img src="/storage/{{ $post->image}}" class="w-100"> 
            </div>
        @endforeach
        
        {{-- <div class="col-4">
            <img src="http://i2.linkoooo.com/1903/20190322221128_73271d8f5f7a987179cddc7b66ffd9fa_ztrp.jpg" class="w-100"> 
        </div>
        <div class="col-4">
            <img src="https://www.bitcoissue.com/uploads/post/2018/09/913912d825496b58b70fd7aa3f3ceb5e.jpg" class="w-100"> 
        </div> --}}
    </div>
</div>
@endsection
