{{-- Access Denied --}}
<div class="container-fluid py-2">
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
    <div class="container-fluid py-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('articleDeleted'))
                <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                    {{session('articleDeleted')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Create Article --}}
    <div class="container-fluid py-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('articleCreated'))
                <div class="alert alert-warning alert-dismissible fade show border-start border-end" role="alert">
                    {{session('articleCreated')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Update Article --}}
    <div class="container-fluid py-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('articleUpdated'))
                <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                    {{session('articleUpdated')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

{{-- FINE SEZIONE ARTICLE --}}


{{-- SEZIONE CATEGORY --}}

    {{-- Delete Category --}}
    <div class="container-fluid py-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('categoryDeleted'))
                <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                    {{session('categoryDeleted')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Create Category --}}
    <div class="container-fluid py-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('categoryCreated'))
                <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                    {{session('categoryCreated')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Update Category --}}
    <div class="container-fluid py-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('categoryUpdated'))
                <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                    {{session('categoryUpdated')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

{{-- FINE SEZIONE CATEGORY --}}


{{-- SEZIONE REVISOR --}}

{{-- Revision Accepted --}}

    <div class="container-fluid py-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('revisionAccepted'))
                <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                    {{session('revisionAccepted')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Revision Rejected --}}
    <div class="container-fluid py-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('revisionDeleted'))
                <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                    {{session('revisionDeleted')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- become Revisor --}}
    <div class="container-fluid py-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('becomeRevisor'))
                <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                    {{session('becomeRevisor')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Make Revisor --}}
    <div class="container-fluid py-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session()->has('makeRevisor'))
                <div class="alert alert-danger alert-dismissible fade show border-start border-end" role="alert">
                    {{session('makeRevisor')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>

{{-- FINE SEZIONE ARTICLE --}}