<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="#">logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
      <ul class="navbar-nav  mb-2  mb-lg-0 m-auto">
        <li class="nav-item">
          <a class="nav-link" href="">Lavora con noi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Indice Prodotti</a>
        </li>
      </ul>
      {{-- GUEST --}}
      <div class="nav-item dropdown text-black">
        <a class="nav-link dropdown-toggle me-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-fill"></i> 
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="">Registrati</a></li>
          <li><a class="dropdown-item" href="">Accedi</a></li>
        </ul>
      </div>
      
    
    </div>
  </div>
</nav>