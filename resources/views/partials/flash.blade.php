@if (Session::has('flash_message'))
    <div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-imporant' : ''}}">
        @if (Session::has('flash_message_important'))
            <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">&times;</button>
        @endif
        {{ session('flash_message') }}
    </div>
@endif


@if (Session::has('flash_message_delete'))
    <div class="alert alert-danger {{ Session::has('flash_message_important') ? 'alert-imporant' : ''}}">
        @if (Session::has('flash_message_important'))
            <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">&times;</button>
        @endif
        {{ session('flash_message_delete') }}
    </div>
@endif
