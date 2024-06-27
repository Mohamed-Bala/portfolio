<!-- Navbar Start -->
<nav class="navbar fixed-top shadow-sm navbar-expand-lg  py-lg-0 px-lg-5" style="padding-top: 0px;padding-bottom: 0px;
background:#fff;">
        <a href="{{route('home')}}" class="navbar-brand ml-lg-3" style="margin-right: -2rem;">
            <img class="img-fluid rounded " id="imagenavbar" style="width:110px; height:75px; " src="{{asset('/assets/img/logo3.jpg')}}" alt="">

        </a>
           
   


        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">{{trans('main.Home')}}</a>
                <a href="#about" class="nav-item nav-link">{{trans('main.About')}}</a>
                <a href="#qualification" class="nav-item nav-link">{{trans('main.Quality')}}</a>
                <a href="#skill" class="nav-item nav-link">{{trans('main.Skill')}}</a>
               
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
