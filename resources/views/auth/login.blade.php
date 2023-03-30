<x-layout>
    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
    


<div class="container-fluid createBackground">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 mt-2">
            <x-loginForm />
        </div>
    </div>
</div>

</x-layout>
