@extends('admin.layouts.default')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Catepory Manage
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Catepory Manage</li>
                <li class="active">Post Catepory</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Post Catepory</h3>
                        </div>

                        @include('shared.messages')
                        @include('shared.errors')

                        <form role="form" method="POST" action="{{ route('category.store') }}">
                            {{ csrf_field() }}

                            <div class="box-body">
                                <div class="form-group">
                                    <label>Catepory Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Catepory Name">
                                </div>
                                <div class="form-group">
                                    <label>Catepory Parent</label>
                                    <select multiple class="form-control" name="parent_id">
                                        <option selected="selected" value="0">NONE</option>
                                        @foreach($categories as $category)
                                            @if($category->parent_id === 0)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @include('shared.tree', ['children' => $category->children])
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Catepory Describe</label>
                                    <input type="text" name="describe" class="form-control" placeholder="Catepory Describe">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary fa fa-save"> Save</button>
                                <form action="">
                                    <button type="submit" class="btn btn-primary fa fa-remove"> Delete</button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection