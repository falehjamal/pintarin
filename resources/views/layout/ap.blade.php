<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styleberanda.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <nav class="navbar navbar-light fixed" style="color: #fff;">
      <div class="container">
        <a class="navbar-brand" href="{{ url('') }}" style="color: #fff;">PINTARIN</a>

            <div class="pull-right nav-desktop">
            @if (!Auth::check())
              {{-- expr --}}

                <a class="btn btn-default baken" href="{{ route('login') }}" style="color: #fff;" >Login</a>
                <a class="btn btn-default baken" href="{{ route('register') }}" style="color: #fff;">Daftar</a>
              @else
                <a class="btn btn-default baken" href="{{ url('/panel') }}" style="color: #fff;">Panel</a>
              
            @endif
                <a class="btn btn-default baken" href="{{ url('berita') }}" style="color: #fff;">Berita</a>
            </div>
            <div class="pull-right open-wrapper">
                <button class="pull-right btn btn-outline-primary btn-nav btn-open" >&#9776;</button>
            </div>
      </div>
    </nav>

    <div  class="nav-mobile">
      <button class="btn btn-default btn-close pull-right" style="margin: 10px;"><i class="fa fa-times"></i></button>
      <ul>
         @if (!Auth::check())
              {{-- expr --}}
        <li><a href="{{ route('login') }}" style="color: #777;" >Login</a></li>
        <li><a href="{{ route('register') }}" style="color: #777;" >Daftar</a></li>
        @else
        <li><a href="{{ url('panel') }}" style="color: #777;" >Panel</a></li>

        @endif
        <li><a class="" href="{{ url('berita') }}" style="color: #777;" >Berita</a></li>
      </ul>
  </div>
    @yield('content')


    <div class="footer-bottom">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <div class="copyright">

          © 2018 PINTARIN UFA

        </div>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <div class="design">

           Suported By  |  <a target="_blank" href="http://www.smktiufa.sch.id">Web Designer SMK Umar Fatah Rembang</a>
        </div>
      </div>
    </div>
  </div>
</div>


<style type="text/css">
  
</style>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
  $(document).on('click','.btn-open',function(){
    $(".nav-mobile").toggleClass('slide');
  });
  $(document).on('click','.btn-close',function(){
    $(".nav-mobile").toggleClass('slide');
  });
</script>
    <script type="text/javascript">
        window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
    </script>
</body>
</html>