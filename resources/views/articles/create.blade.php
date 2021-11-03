@extends('layouts.layout')


@section('body')

<div class="container w-75 p-5">
    <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control my-3" name="title" placeholder="title">
        <input type="text" class="form-control my-3" name="content" placeholder="content">
        <input type="file" class="form-control my-3" name="image" placeholder="image">
        <button class="btn btn-dark">Send</button>
    </form>
</div>

@endsection