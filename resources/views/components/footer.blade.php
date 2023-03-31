<footer class="footer pt-1 mt-3">
  <div class="waves">
    <div class="wave" id="wave1"></div>
    <div class="wave" id="wave2"></div>
    <div class="wave" id="wave3"></div>
    <div class="wave" id="wave4"></div>
  </div>
  
  <div class="">
    <ul class="d-flex ms-3 ">
      <li><i class="bi bi-facebook me-2 text-white fs-3"></i></li>
      <li><i class="bi bi-twitter mx-2 text-white fs-3"></i></li>
      <li><i class="bi bi-instagram mx-2 text-white fs-3"></i></li>
      <li><i class="bi bi-whatsapp mx-2 text-white fs-3"></i></li>
      <li><i class="bi bi-linkedin mx-2 text-white fs-3"></i></li>
      <li><i class="bi bi-github ms-2 text-white fs-3"></i></li>
      
    </ul>
    
    <ul class="small d-flex ms-2 fw-bold justify-content-center">
      <li><a class="text-white mx-2" href="{{route('homepage')}}">{{__('ui.Home')}}</a></li>
      <li><a class="text-white mx-2" href="{{ route('article.index') }}">{{__('ui.Index')}}</a></li>
      <li><a class="text-white mx-2" href="{{ route('login') }}">{{__('ui.subscribe')}}</a></li>
    </ul>
    
  </div>
  <p class="small fw-normal text-white text-center text-black robotoFont ">
  {{__('ui.footerText')}}</p>
</footer>

