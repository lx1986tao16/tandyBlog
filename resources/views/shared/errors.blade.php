@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible" sytle="width:90%;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif