<!-- Navbar Start -->
<nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light  py-lg-0 px-lg-5" style="padding-top: 0px;padding-bottom: 0px;
">
        <a href="{{route('home')}}" class="navbar-brand ml-lg-3" style="margin-right: -2rem;">
            <img class="img-fluid rounded " id="imagenavbar" style="width:110px; height:75px; " src="{{asset('/assets/img/logo3.jpg')}}" alt="">

        </a>
           
   

<div class="dropdown" id="idropdownNavbar">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" style="background-color:#fff;border-color:#fff; margin-bottom:-6px; padding: 10px 6px;" aria-expanded="false">
             <h6 style="display: inline;    font-family: 'fonts/Janna LT Regular.', serif;'">
                @if (App::getLocale() == 'ar')
              <?php 
              if(LaravelLocalization::getCurrentLocaleName()=='Arabic'){
echo"العربية";
              } else{
                echo "English";
              }
              
              
              ?>
             </h6>
             <img src="{{ URL::asset('flags/sudan.png') }}" style="width: 18px;height:18px" alt="">
              @else
              {{ LaravelLocalization::getCurrentLocaleName() }}
              <img src="{{ URL::asset('flags/US.png') }}" alt="">
              @endif
              </button>
            <div class="dropdown-menu">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                @endforeach
                
            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">{{trans('main.Home')}}</a>
                <a href="#about" class="nav-item nav-link">{{trans('main.About')}}</a>
                <a href="#qualification" class="nav-item nav-link">{{trans('main.Quality')}}</a>
                <a href="#skill" class="nav-item nav-link">{{trans('main.Skill')}}</a>
                <a href="#service" class="nav-item nav-link">{{trans('main.Service')}}</a>
                <a href="#portfolio" class="nav-item nav-link">{{trans('main.Portfolio')}}</a>
                <a href="#testimonial" class="nav-item nav-link">{{trans('main.Review')}}</a>
                <a href="#blog" class="nav-item nav-link">{{trans('main.Blog')}}</a>
                <a href="#contact" class="nav-item nav-link">{{trans('main.Contact')}}</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
