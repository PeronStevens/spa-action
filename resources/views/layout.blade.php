<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" href="css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">        

    </head>
    <body>
        <header class="container-fluid pos-lg-fixed pos-t-0 pos-x-0 bg-white pb-2">
            <div class="d-flex pt-2 pt-md-3 justify-content-between">
                <div class="d-flex">
                    <a href="http://dkbmed.com" class="align-self-center" target="_blank">
                        <img src="/images/dkbmed-logo-green-blue.png" alt="DKBmed" class="dkbmed-logo">
                    </a>
                    <div class="mb-0 ml-2 d-none d-sm-none d-md-inline-block align-self-end">
                        Closing Practice Gaps to<br>
                        Optimize Patient Care
                    </div>
                </div>
                <div class="text-smaller">
                    @auth
                        <p class="strong em mb-1">Welcome, <br class="d-sm-none">  {{ auth()->user()->first_name }}  </p>
                        <a href="/logout" class="btn btn-outline-secondary br-n d-none d-sm-block dkb_log_out">Sign Out</a>
                    @elseguest
                        <p class="em mb-1">Log-in or register here</p>
                        <a href="/login" class="btn btn-dkb-green d-block br-n dkb_log_in">Sign On</a>
                    @endauth
                </div>
            </div>
            <div class="row mt-2 mt-md-3">
                <div class="col">
                    <nav class="navbar navbar-expand-sm bg-dkb-navi">
                        <button class="navbar-bars btn btn-dkb-green br-n d-sm-none"
                                type="button"
                                data-toggle="collapse"
                                data-target="#navbar"
                                aria-controls="navbar"
                                aria-expanded="false"
                                aria-label="Menu">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav py-2 py-sm-0 mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="http://dkbmed.com/programs" target="_blank">ALL PROGRAMS</a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#home" role="tab" >HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#cme" role="tab"  >CME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#faculty" role="tab"   >FACULTY</a>
                                </li>
                                @auth
                                    <div class="d-xs-block d-sm-none " >
                                        <!-- Auth tabs ( Monograph, Webcast, Sign-out etc... )-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://dkbmed.com/programs" target="_blank">MONOGRAPH</a>
                                        </li>
                                        <div class="dropdown-divider"></div>                                                              
                                        <li class="nav-item">
                                            <a class="nav-link dkb_log_out" href="/logout">SIGN OUT</a>
                                        </li>                                
                                    </div>                                    
                                @endauth
                            </ul>
                        </div>
                        <form class="search-form" action="/search">
                            <div class="input-group">
                                <input type="text"
                                    name="search"
                                    class="form-control br-n bg-dkb-navi text-white border-left border-white"
                                    placeholder="search...">
                                <div class="input-group-btn">
                                    <button class="btn btn-dkb-green br-n" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            <!-- Sub Navigation -->
            <div class="sub-nav pos-lg-fixed d-none d-sm-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <ul class="nav nav-tabs nav-fill pb-2 bg-white no-bottom-border" role="tablist" >
                                <li class="nav-item">
                                    <a class="nav-link start-program-btn btn btn-secondary"  id="monograph-tab" data-toggle="tab" :href="tabID" role="tab" aria-controls="monograph" aria-selected="true"> <span class="d-sm-none d-md-block" >MONOGRAPH</span><i class="d-sm-block d-md-none fab fa-readme"></i> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-secondary active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span class="d-sm-none d-md-block" >HOME</span> <i class="d-sm-block d-md-none fas fa-home"></i> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-secondary" id="faculty-tab" data-toggle="tab" href="#faculty" role="tab" aria-controls="faculty" aria-selected="true">
                                        <span class="d-sm-none d-md-block" >FACULTY</span> <i class="d-sm-block d-md-none fas fa-users"></i>
                                    </a>
                                </li>                              
                                <li class="nav-item">
                                    <a class="nav-link btn btn-secondary" id="cme-tab" data-toggle="tab" href="#cme" role="tab" aria-controls="cme" aria-selected="true">
                                        <span class="d-sm-none d-md-block">CME</span> <i class="d-sm-block d-md-none fas fa-file-contract"></i>
                                    </a>
                                </li>                                        
                            </ul>
                        </div>
                    </div>
                </div>            
            </div> 
            
            <!-- Left Side -->
            <div class="left-side pos-lg-fixed d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <img src="https://dkbmed.com/lghflu/img/FLU_2018_Portrait.jpg" class="mh-100">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side -->
            <div class="right-side">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="tab-content">
                                {{-- <mobile-banner-component></mobile-banner-component>

                                <monographtab-component></monographtab-component>
        
                                <hometab-component></hometab-component>

                                <cmetab-component></cmetab-component>
                                
                                <facultytab-component></facultytab-component> --}}

                                @foreach ($data as $d)
                                    {{ $d }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="bg-white pos-absolute pos-lg-fixed pos-b-0 pos-x-0 pt-2">
                <div class="bg-dkb-navi py-2">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="socials col-sm text-sm-left text-center">
                                <a href="https://www.youtube.com/user/DKBmedLLC"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/company/dkbmed?trk=tyah"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.facebook.com/DKBmed"><i class="fab fa-facebook"></i></a>
                                <a href="https://twitter.com/DKBmed"><i class="fab fa-twitter"></i></a>
                            </div>
                            <div class="privacy col-sm text-sm-right text-center">
                                <p class="m-0">
                                    <a class="open-privacy" href="#privacy-modal">privacy</a> | &copy;
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>             
        </main>

        {{-- <div id="app"  >
            <header-component></header-component>
            <subnav-component></subnav-component>
            <leftside-component></leftside-component>
            <rightside-component></rightside-component>
            <footer-component></footer-component>
            @include ('footer')
        </div> --}}

        @sso_inject()
        
        <script src="{{ mix('/js/app.js') }}"></script>

        {!! file_get_contents('https://dkbmed.com/privacy.php') !!}

    </body>
</html>
