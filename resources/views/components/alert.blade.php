@if (Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ Session::get('message') }}</strong>
    <button type="button" class="btn-close text-end"
        style="justify-content: space-between; right: 95%;
top: -4px;"
        data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger">
        {{session()->get('error')}}
    </div>
@endif
@if (session()->has('warning'))
    <div class="alert alert-warning">
        {{session()->get('warning')}}
    </div>
@endif
@if (session()->has('info'))
    <div class="alert alert-info">
        {{session()->get('info')}}
    </div>
@endif
