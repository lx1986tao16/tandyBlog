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
                <li class="active">Article Manage</li>
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
                            {{ csrf_field() }}

                            <div class="box-body">
                                <div class="form-group">
                                    <label>Article Title</label>
                                    <input type="text" class="form-control" placeholder="Article Title">
                                </div>
                                <div class="form-group">
                                    <label>Article Author</label>
                                    <input type="text" class="form-control" placeholder="Article Author">
                                </div>
                                <div class="form-group">
                                    <label>Article Source</label>
                                    <input type="text" class="form-control" placeholder="Article Source">
                                </div>
                                <div class="form-group">
                                    <label>Catepory Parent</label>
                                    <select multiple class="form-control">
                                        <option selected="selected" value="0">NONE</option>
                                        @foreach($categories as $category)
                                            @if($category->parent_id === 0)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @include('shared.select_tree', ['children' => $category->children])
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Article Tags</label>
                                    <input type="text" class="form-control" placeholder="Article Tags">
                                </div>
                                <div class="form-group">
                                    <label>Article Content</label>
                                    <div id="mdeditor">
                                        <textarea class="form-control" name="content" style="display:none;"></textarea>
                                    </div>
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