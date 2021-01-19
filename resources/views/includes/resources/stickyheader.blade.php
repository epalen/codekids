<div id="sticky-header" class="menu-full-width color">
    <div class="container">
        <div class="row">
            <div class="col-md-10 hidden-xs hidden-sm">
                <div class="menu-area">
                    <nav class="template-menu">
                        <ul class="main-menu">
                            <li>
                                <a href="{{ url('/') }}">inicio</a>
                            </li>
                            <li>
                                <a href="{{ url('campanas') }}">campañas</a>
                            </li>
                            <li>
                                <a href="{{ url('candidatos') }}">candidatos</a>
                            </li>                            
                            <li>
                                <a href="{{ url('blog') }}">blog</a>
                            </li>
                            <li>
                                <a href="{{ url('nosotros') }}">nosotros</a>
                            </li>
                            <li>
                                <a href="{{ url('contacto') }}">contacto</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Mobile menu area start -->
            <div class="mobile-menu-area clearfix hidden-md">
                <nav class="mobile-menu">
                    <ul class="mobile-menu-nav">
                        <li>
                            <a href="{{ url('/') }}">inicio</a>
                        </li>
                        <li>
                            <a href="{{ url('campanas') }}">campañas</a>
                        </li>
                        <li>
                            <a href="{{ url('candidatos') }}">candidatos</a>
                        </li>                            
                        <li>
                            <a href="{{ url('blog') }}">blog</a>
                        </li>
                        <li>
                            <a href="{{ url('nosotros') }}">nosotros</a>
                        </li>
                        <li>
                            <a href="{{ url('contacto') }}">contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Mobile menu area end -->
            <!--<div class="col-md-2">
                <div class="header-search text-right">
                    <a class="search-toggle-button" href="#"><i class="fa fa-search"></i></a>
                </div>
            </div>-->
        </div>
    </div>
</div>