@foreach(['ban' => 'danger', 'info' => 'info', 'warning' => 'warning', 'check' => 'success'] as $icon => $msg)
    @if(session()->has($msg))
        <div class="alert alert-{{ $msg }} alert-dismissible" sytle="width:90%">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session()->get($msg) }}
        </div>
    @endif
@endforeach