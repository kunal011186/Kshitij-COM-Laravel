<! DOCTYPE html>
<html>
<head>
<meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="SHORTCUT ICON" href="https://colourofmoney.kshitij.com/wp-content/themes/kshitij/img/kshitij-favicon.ico">
        <meta property="og:title" content="Color of Money | Currency Forecasts and Hedging Strategies Forex Risk Advisors" />
        <meta property="og:url" content="https://colourofmoney.kshitij.com" />
        <meta property="og:image" content="https://colourofmoney.kshitij.com/wp-content/themes/kshitij/img/kshtijlogo.png"/>
        <meta property="og:description" content="We provide Currency Forecasts and Hedging Strategies, Forex Risk Management Aadvisory services for forex traders worldwide and corporates in India." />
        <meta property="og:site_name" content="Kshitij.com" />
        <meta name="twitter:title" content="Color of Money">
        <meta name="twitter:description" content="Currency Forecasts and Hedging Strategies Forex Risk Advisors">
        <!-- Twitter Summary card images must be at least 120x120px -->
        <meta name="twitter:image" content="https://colourofmoney.kshitij.com/wp-content/themes/kshitij/img/kshtijlogo.png">
        <link rel="canonical" href="https://colourofmoney.kshitij.com/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:domain" content="Kshitij Color of Money"/>
    <style type="text/css">
        .dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    position: absolute;
    top: 0;
    left: 100% !important;
    margin-left: 155px;
    margin-top: -30px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: right;
}

.dropdown-submenu.pull-left >.dropdown-menu {
    left: 100%;
    -webkit-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
        
    </style>


<title>@yield('title')</title>

    {{ HTML::script('js/jquery-1.11.1.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/bootstrap-hover-dropdown.min.js') }}
    {{ HTML::script('js/readmore.js') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/kshitij.css') }}
    {{ HTML::style('css/font.css') }}
    {{ HTML::style('css/theme.css') }}
    {{ HTML::style('css/bootstrap.min.css') }}
    

 @yield('anything-else-in-html-head')
</head>
<body>
    @section('header')
        @include('templates.header')
    @show
    @section('breadcrumbs')
        @include('templates.breadcrumbs')
    @show
    @section('content')
        <!-- MAIN BODY AREA -->
        <div class="container"> 
            <div class="row no-padding">
                <!-- show error message -->
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Error</strong> {{$message}}
                    </div>
                @endif
                <!-- show error message -->
                <!-- CONTENT AREA -->
                <div class="col-md-9">
                    <div class="page-title-area">
                        @yield('custom-area-enter')
                        <span class="page-title">@yield('content-title')</span>
                        @yield('custom-area-exit') 
                    </div>
                    @yield('content-body')
                </div>
                <!-- END CONTENT AREA -->
                <!-- SIDEBAR -->
                <div class="col-md-3">
                    @yield('sidebar')
                    
        <div class="d-widget3 d-sidebar"><div class="list-group"><a class="list-group-item active">CATEGORY</a><a href="{{url('category/top-stories')}}" class="list-group-item ">Recently Added</a><a href="{{url('category/risk-management')}}" class="list-group-item ">Forex Risk Management</a><a href="{{url('category/investment-psychology')}}" class="list-group-item ">Investment Psychology</a><a href="{{url('category/research')}}" class="list-group-item ">Research</a><a href="{{url('category/global-equities')}}" class="list-group-item ">Global Equities</a><a href="{{url('category/longterm-forex-forecasts')}}" class="list-group-item ">Longterm Forex Forecasts</a></div></div>

        <div class="d-widget8 d-sidebar"><h3 class="text-muted" style="text-align:center">TWEETS</h3><p align="center"><a class="twitter-follow-button" href="https://twitter.com/Kshitijfx">Follow @Kshitijfx</a></p><hr>
        </div>

        <?php
    $sidebarContent = config('kshitij.sidebar-widgets');
?>
                        
                 <!--    DISPLAY RIGHT SIDE WIDGETS -->
                        @foreach($sidebarContent as $item)
                            @if($item['type'] == 'view')
                                @if($item['view-name']=='widgets.slider')
                                @widget('slider',[],$item['name'],$item['settings'],$item['time'])
                                <hr style="border-top: 1px solid #807e7e;" />
                                @elseif($item['view-name']=='widgets.slider-two')
                                @widget('sliderwhats',[],$item['name'],$item['settings'],$item['time'])
                                <hr style="border-top: 1px solid #807e7e;" />
                                @else
                                 @include($item['view-name'])
                                 <hr style="border-top: 1px solid #807e7e;" />
                                @endif
                            @else
                                  <?php $file_name = "widget-codes/".$item['code']; ?> 
                                   {!!file_get_contents($file_name) !!}
                                   <hr style="border-top: 1px solid #807e7e;" />
                             @endif
                        @endforeach

         </div>
            </div>
        </div>
        @show


    @section('footer')
    <!-- FOOTER --> 
        <div>
                <div style="text-align: center;margin-bottom: 10px;margin-top: 5px;">
                        <a href="https://kshitij.com/inr/usdinr-forecasts">Indian Rupee Market</a> |
                        <a href="https://kshitij.com/forecasts">Long-term Forecasts</a> | 
                        <a href="https://kshitij.com/economic-calendar">Economic Calendar</a> | 
                        <a href="https://kshitij.com/graph-gallery">Graph Gallery</a> | 
                        <a href="https://colourofmoney.kshitij.com/">Colour of Money</a> | 
                    <a href="https://kshitij.com/freedata">Free Data</a> | 
                    <a href="https://kshitij.com/testimonials">Testimonials</a> | 
                    <a href="https://kshitij.com/about-us">About Us</a> | 
                    <a href="https://kshitij.com/sitemap.shtml">Site Map</a>                    
                </div>
                
            </div>
        <div class="footer">
        <font color="white" style="margin-left: 10px;">Copyright © 2020 Kshitij, All Rights Reserved</span>
        <ul class="list-inline">
    <li> Kshitij Consultancy Services</li>
    <li> Email: <a href="mailto:info@kshitij.com">info@kshitij.com</a></li>
    <li> Ph: 00-91-33-24892010 / 24892012</li>
     </ul></font>
        </div>

        @yield('anything-else-in-footer')
    @show
</body>
</html>