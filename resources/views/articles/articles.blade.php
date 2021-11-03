@extends('layouts.layout')


@section('body')



<div class="container">
    <a href="{{route('articles.create')}}" class="btn btn-dark">Add Article</a>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">author</th>
                <th scope="col">category</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
           
            @foreach($articles as $article)
            <tr>
                <th>{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->user->name}}</td>
                <td><a href="{{route('categories',$article->category_id)}}">{{$article->category->title}}</a></td>
                <td>
                    <a href="" class="btn btn-primary">view</a>
                    <a href="" class="btn btn-primary">edit</a>
                    <a href="" class="btn btn-primary">delete</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection