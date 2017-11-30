@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Blog</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form class="form-horizontal" method="POST" action="{{ url('/addBlog') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input id="title" placeholder="Title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                                    @if ($errors->has('title'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <textarea id="content" placeholder="Content" type="text" class="form-control" name="content" value="{{ old('content') }}" required autofocus>

                                        </textarea>
                                        @if ($errors->has('content'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <select id="category_id" type="text" class="form-control" name="category_id" required autofocus>

                                            <option value="" hidden>Select Category</option>
                                            @if(count($categories) > 0)
                                                @foreach($categories->all() as $category)

                                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                                    @endforeach
                                                @endif

                                        </select>
                                        @if ($errors->has('category_id'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input type="file" id="image" type="text" class="form-control" name="image" required autofocus/>

                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            <span style="font-size: 25px;" class="glyphicon glyphicon-plus"></span>&nbsp;ADD NEW BLOG
                                        </button>
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
