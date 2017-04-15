@extends('admin.layouts.default')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Article Manage
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Post Article</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Post Article</h3>
                        </div>
                        <form role="form" method="POST" action="{{ route('article.store') }}">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Article Title</label>
                                    <input type="text" class="form-control" placeholder="Article Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Article Author</label>
                                    <input type="text" class="form-control" placeholder="Article Author">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Article Cat</label>
									<select class="form-control select2" style="width: 100%;">
										<option selected="selected">NONE</option>
										<option>Alaska</option>
									</select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Article Author</label>
                                    <input type="text" class="form-control" placeholder="Article Author">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection