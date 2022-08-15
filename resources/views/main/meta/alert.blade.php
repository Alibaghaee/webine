@if(\Illuminate\Support\Facades\Session::has('message'))


    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{\Illuminate\Support\Facades\Session::get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
