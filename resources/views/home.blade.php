@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @if(count($errors) > 0 )
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            @endif
            @if(session('response'))
                <div class="alert alert-success">{{session('response')}}</div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Available Blogs</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($posts) > 0)
                        @foreach($posts->all() as $post)
                            <h4 style="color:#000000;">{{ $post->title }}</h4>
                            <img height="100px" width="100px" style="float:left;margin-right:10px;" src="{{ $post->image }}" alt="Image"/>
                            <p style="text-align: justify;">{{ $post->content }}</p><br/><br/>
                            @endforeach
                        @else
                        <p>No Posts Available!</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
