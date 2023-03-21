<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
           
            <div class="col-6 mt-5">
                <form class="shadow p-3 rounded-4" action="">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Es.. mario.rossi@thingmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="name" placeholder="Mario Rossi">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-info">Invia</button>      
                </form>
            </div>

        </div>
    </div>

    
</x-layout>