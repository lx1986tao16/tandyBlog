@extends('admin.layouts.default')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/tagsinput/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/tagsinput/bootstrap-tagsinput-typeahead.css') }}">
{!! editor_css() !!}
@endsection

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

                        <div class="box-body">
                            @include('shared.messages')
                            @include('shared.errors')
                            
                            <form role="form" method="POST" action="{{ route('article.store') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Article Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Article Title" value="{{ $article->title }}">
                                </div>
                                <div class="form-group">
                                    <label>Article Author</label>
                                    <input type="text" name="author" class="form-control" placeholder="Article Author" value="{{ $article->author }}">
                                </div>
                                <div class="form-group">
                                    <label>Article Source</label>
                                    <input type="text" name="source" class="form-control" placeholder="Article Source" value="{{ $article->source }}">
                                </div>
                                <div class="form-group">
                                    <label>Catepory Parent</label>
                                    <select multiple class="form-control" name="category_id" id="category_id">
                                        <option value="0">NONE</option>
                                        @foreach($article->categories as $category)
                                            @if($category->parent_id === 0)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @include('shared.select_tree', ['children' => $category->children])
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Article Tags</label>
                                    <span class="form-group">
                                        <input type="text" name="tag_id" id="tags" class="form-control" placeholder="Article Tags">
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label>Article Content</label>
                                    <div id="mdeditor">
                                        <textarea class="form-control" name="content" style="display:none;"></textarea>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="{{ asset('assets/plugins/tagsinput/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('assets/plugins/tagsinput/typeahead.jquery.js') }}"></script>
    <script src="{{ asset('assets/plugins/tagsinput/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/tagsinput/angular.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tagsinput/bootstrap-tagsinput-angular.min.js') }}"></script>
    <script>
        "use strict";
        var tags = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: '{{ route("get_tags") }}'
        });
        tags.initialize();

        var tags_input = $("#tags");
        tags_input.tagsinput({
            itemValue: 'value',
            itemText: 'text',
            typeaheadjs: {
                name: 'tags',
                displayKey: 'text',
                source: tags.ttAdapter(),
            },
        });

        var data = {!! $article->tags !!};
        $.each(data, function(){
            var value = this.id;
            var text = this.name;
            console.log(this.name);
            tags_input.tagsinput('add', {'value': value, 'text': text});
        });

        $("#category_id option").each(function(){
            if($(this).val() == {{ $article->category_id }}){
                $(this).attr('selected', 'selected');
            }
        });
    </script>

    {!! editor_js() !!}
    {!! editor_config('mdeditor') !!}
@endsection