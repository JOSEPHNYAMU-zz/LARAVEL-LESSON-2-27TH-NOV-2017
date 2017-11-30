@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Category</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                            <form class="form-horizontal" method="POST" action="{{ url('/addCategory') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input id="category" placeholder="New Category Name" type="text" class="form-control" name="category" value="{{ old('category') }}" required autofocus>

                                        @if ($errors->has('category'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            <span style="font-size: 25px;" class="glyphicon glyphicon-plus"></span>&nbsp;ADD NEW CATEGORY
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
