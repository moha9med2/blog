@extends('layouts.layout')


@section('body')



<div class="container">
    <h1>{{$category->title}}</h1>
</div>

<div class="container">
    <div class="row">
        @foreach($category->articles as $article)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">{{$article->content}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection