<div>
    <form class="shadow p-5 mt-5 rounded" wire:submit.prevent="becomeRevisor">
        @csrf
        <div class="mb-3">
          <label wire:model="name" for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name">
        </div>

        <div class="mb-3">
          <label for="mail" wire:model="mail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Messaggio</label>
            <textarea wire:model="message" id="message" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
