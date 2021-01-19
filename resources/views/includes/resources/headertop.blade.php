<div class="header-top-area red-header-top">
    <div class="container">
        @foreach($abouts as $about)
            <div class="row">
                <div class="col-sm-9 col-md-8">
                    <div class="header-top-left">
                        <ul class="email-phone">
                            <li><a href="#"><i class="fa fa-envelope"></i> Email: <span class="text-bold">{{ $about->email }}</span></a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> Llamanos: <span class="text-bold">+1 {{ substr_replace(substr_replace($about->phone,'-',3,0),'-',7,0) }}</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-4">
                    <div class="header-top-right">
                        <ul class="header-social-menu">
                            <li>
                                <a href="{{ $about->fb_link }}" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $about->tw_link }}" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $about->ins_link }}" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <!--<li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>-->
                            <li>
                                <a href="{{ $about->in_link }}" target="_blank">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>