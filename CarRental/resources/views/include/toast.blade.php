@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
@if(Session::has('info'))
    <div class="alert alert-info" role="alert">
        {{ Session::get('info') }}
    </div>
@endif
@if(Session::has('status'))
    <div class="alert alert-secondary" role="alert">
        {{ Session::get('status') }}
    </div>
@endif
