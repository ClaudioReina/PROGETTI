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



{{-- SEZIONE ARTICLE --}}

    {{-- Delete Article --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('articleDeleted'))
                <div class="alert alert-danger alert-dismissible fade show border-start border-end" role="alert">
                    {{session('articleDeleted')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Create Article --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('articleCreated'))
                <div class="alert alert-danger alert-dismissible fade show border-start border-end" role="alert">
                    {{session('articleCreated')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Update Article --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('articleUpdated'))
                <div class="alert alert-danger alert-dismissible fade show border-start border-end" role="alert">
                    {{session('articleUpdated')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

{{-- FINE SEZIONE ARTICLE --}}
