<div id="top-bar" class="d-none d-lg-block">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md-auto d-none d-md-flex">
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="tel:+37167076200" style="display: flex;
									align-items: flex-end;
									gap: 5px;"><i class="bi-telephone"></i> +37167076200</a></li>
                        <li class="top-links-item"><a href="mailto:elipse@marinerlogistics.lv"
                                                      class="text-transform-none"><i
                                        class="bi-envelope"></i>elipse@marinerlogistics.lv</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-auto">
                <div class="top-links">
                    <ul class="top-links-container">
                        @if(App::currentLocale()==="lv")
                            <li class="top-links-item"><a href="#">LV</a>
                                <ul class="top-links-sub-menu">
                                    <li class="top-links-item">
                                        <a href="{{ route($route_name, ['lang' => 'en', 'slug' => $slug]) }}">
                                            <img src="{{asset('images/flagus.png')}}" alt="English"> EN
                                        </a>
                                    </li>
                        @elseif(App::currentLocale()==="en")
                                        <li class="top-links-item"><a href="#">EN</a>
                                            <ul class="top-links-sub-menu">
                                                <li class="top-links-item"><a
                                                            href="{{route($route_name, ['lang'=>'lv', 'slug'=>$slug])}}"><img
                                                                src="{{asset('images/flaglv.png')}}"
                                                                alt="English">LV</a></li>
                        @endif
                                            </ul>
                                        </li>
                                </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header
============================================= -->
<header id="header" class="border-bottom-0" data-sticky-shrink="false">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                        <a href="{{route('main', ['lang' => App::currentLocale()])}}">
                            <img class="img_logo" src="{{asset('images/mariner-logistics_white.png')}}"
                                 alt="Mariner Logo">
                        </a>
                </div><!-- #logo end -->


                <div class="menu-item d-md-block d-lg-none" style="border-color: #335489;">
                    <div class="dropdown">
                        @if(App::currentLocale()==="lv")
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">LV
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                       href="{{route($route_name, ['lang'=>'en', 'slug'=>$slug])}}">EN</a></li>
                                @else

                                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">EN
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                               href="{{route($route_name, ['lang'=>'lv', 'slug'=>$slug])}}">LV</a></li>
                                        @endif
                                    </ul>
                    </div>
                </div>
                <div class="primary-menu-trigger">
                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                        <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                    </button>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        @foreach ($pages as $page)
                            <li class="menu-item"><a class="menu-link"
                                                     href="{{route('page', ['lang'=>$page->lang, 'slug'=> $page->slug])}}">

                                    <div>{{$page->title}}</div>
                                </a></li>
                        @endforeach

                    </ul>
                </nav><!-- #primary-menu end -->
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->