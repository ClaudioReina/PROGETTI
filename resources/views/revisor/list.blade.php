<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                {{-- Componente LiveWire --}}
                @livewire('article-list') 

            </div>
        </div>
    </div>

    <div class="container-fluid spaced">
    </div>
    <script>
        Livewire.on('refresh', () => {
            // aggiorna la lista di articoli
            Livewire.emit('refresh');
        });
    </script>
</x-layout>