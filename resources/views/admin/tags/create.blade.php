@extends('admin.layouts.default')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Tags Manage
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Tags Manage</li>
                <li class="active">Post Tags</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Post Tags</h3>
                        </div>

                        @include('shared.messages')
                        @include('shared.errors')

                        <form role="form" method="POST" action="{{ route('tags.store') }}">
                            {{ csrf_field() }}

                            <div class="box-body">
                                <div class="form-group">
                                    <label>Tags Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Tags Name">
                                </div>
                                <div class="form-group">
                                    <label>Tags Describe</label>
                                    <input type="text" name="describe" class="form-control" placeholder="Tags Describe">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary fa fa-floppy-o"> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection