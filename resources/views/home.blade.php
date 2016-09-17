@extends('layouts.app')

@section('content')
@if($post_numbers!=0)
@foreach($posts as $post)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><img src="images/PostImages/{{$post->post_pic}}" height="100px" width="100px"></div>

                <div class="panel-body">
                    {{$post->post_content}}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
@if($post_numbers==0)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Oops!!</div>

                <div class="panel-body">
                    <h3>There are currently no posts</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
