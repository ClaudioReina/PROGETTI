{{-- Access Denied --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session()->has('accessDenied'))
            <div class="alert alert-danger alert-dismissible fade show border-start border-end" role="alert">
                {{session('accessDenied')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
</div>

{{-- Access Denied --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session()->has('accessDenied'))
            <div class="alert alert-danger alert-dismissible fade show border-start border-end" role="alert">
                {{session('accessDenied')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
</div>

