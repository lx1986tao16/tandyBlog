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
            <li class="active">Article List</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Articles List</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="s·ubmit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        @include('shared.messages')
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Source</th>
                                    <th>Tag</th>
                                    <th>Category</th>
                                    <th>Hits</th>
                                    <th>Status</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td>{{ str_limit($article->title, 10, '...') }}</td>
                                    <td>{{ $article->author}}</td>
                                    <td>{{ str_limit($article->source, 10, '...') }}</td>
                                    <td>{{ str_limit($article->tag, 10, '...') }}</td>
                                    <td>{{ $article->category }}</td>
                                    <td>{{ $article->hits }}</td>
                                    <td>
                                        <form method="post" action="{{ route('update_publish', $article->id) }}">
                                            {{ method_field('PATCH') }}
                                            {{ csrf_field() }}
                                            @if($article->is_publish == 1)
                                            <input type="text" value="0" name="publish" hidden>
                                            <button type="submit" class="btn btn-block btn-success btn-xs">Publish</button>
                                            @else
                                            <input type="text" value="1" name="publish" hidden>
                                            <button type="submit" class="btn btn-block btn-danger btn-xs">No Publish</button>
                                            @endif
                                            </form>
                                    </td>
                                    <td>{{ strstr($article->created_at, " ", true) }}</td>
                                    <td>{{ strstr($article->updated_at, " ", true) }}</td>
                                    <td>
                                        <form action="{{ route('article.edit', $article->id) }}" style="display: inline;">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-warning btn-xs">Edit</button>
                                        </form>
                                        <form action="{{ route('article.destroy', $article->id) }}" method="POST" style="display: inline;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<script>
    $(function () {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
@endsection