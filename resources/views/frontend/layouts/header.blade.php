

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo mr-auto"><a href="index.html">Live Stream</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->

     <a href="{{route('home')}}" class="logo mr-auto"><img src="{{ asset('frontend/assets/logo/logo.png')}}" alt=""></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Live Stream</a></li>
          <li><a href="{{route('faq')}}">FAQs</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
          <li><a href="#liveChat">Live Chat</a></li>
      </nav><!-- .nav-menu -->
      <div class="d-flex text-white mt-2">
        <a class="btn btn-primary mr-2" href="{{route('signin')}}">SIGN IN</a>
        <a class="btn btn-danger" href="#">SUBSCRIBE</a>
    </div>
  
    </div>
  </header>