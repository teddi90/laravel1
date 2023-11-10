@extends('layouts.main')
@section('content')
    <div class="mb-4">
        <div>{{$post->id}}.  {{$post->title}}</div>
        <div>{{$post->content}}</div>
    </div>
    <div>
        <a class="btn btn-warning mb-3" href="{{route('post.edit',$post->id)}}">Edit</a>
    </div>
    <div>
        <form action="{{route('post.delete',$post->id)}}" method="post">
            @csrf
            @method('delete')
            <input class="btn btn-danger mb-3" type="submit" value="Delete">
        </form>
    </div>
    <div>
        <a class="btn btn-primary mb-3" href="{{route('post.index')}}">Back</a>
    </div>

@endsection
