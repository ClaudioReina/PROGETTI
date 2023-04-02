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
        <div class="col-12 col-md-6 col-lg-4 mt-4">
            <form class="form formLogin p-4" method="POST" action="{{route('register')}}">
                @csrf
                <p id="heading">{{__('ui.signIn')}}</p>
                <div class="field">
                    <label for="name">{{__('ui.name')}}</label>
                    <input type="name" name="name" id="name" class="form-control input-field" placeholder="Mario Rossi" />
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" placeholder="mario@rossi.it" name="email" id="email" class="form-control input-field" />
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control input-field" />
                </div>
                <div class="field">
                    <label for="password">{{__('ui.confirmPwd')}}</label>
                    <input type="password" name="password_confirmation" id="password" class="form-control input-field" />
                </div>
                <div class="btnLogin">
                    <button type="submit" class="buttonLogin1 text-center">
                        <span class="mx-3">{{__('ui.signIn')}}</span>
                    </button>
                    <a href="{{route('login')}}">
                        <button type="button" class="buttonLogin2">{{__('ui.logIn')}}!</button>
                    </a>
                </div>
                {{-- <button class="buttonLogin3">Password Dimenticata?</button> --}}
            </form>            
        </div>
    </div>
    <div class="container-fluid spaced">
        
    </div>
</div>


</x-layout>
