<!-- Page content area start -->
<section class="content">
    <!-- Single event area start -->
    <div class="single-event-section theme-section gray-bg">
        <div class="container">
            <div class="row">                
                <div class="col-md-8 col-sm-12">
                    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('addmoneycampaign.paypal') !!}" >
                        <input type="hidden" id="id" name="id" value="{{ $campaigns->id }}">
                        <input type="hidden" id="name" name="name" value="{{ $campaigns->title }}">
                        <input type="hidden" id="type" name="type" value="campaña">
                        {{ csrf_field() }}
                        <article class="single-event">
                        <div class="event-thumb">
                            <a href="#">
                                <img src="{{ URL::asset('uploads/campaigns/' . $campaigns->avatar) }}" alt="" width="380" height="340">
                            </a>
                            <p class="event-post-date">
                                {{ Carbon::parse($campaigns->created_at)->format('d') }}
                                <span>
                                    {{ Carbon::parse($campaigns->created_at)->format('M') }}
                                </span>
                            </p>
                        </div>
                        <div class="event-content">
                            <h5 class="single-event-title">
                                {{ $campaigns->title }}
                            </h5>
                            
                            <div class="donate-information">
                                @foreach($balances as $balance)
                                    <div class="single-donate-information">
                                        <p><span>{{ number_format((($balance->total/$campaigns->goal) * 100)) }} %</span>Alcanzado</p>
                                    </div>
                                    <div class="single-donate-information">
                                        <p><span>US$ {{ $balance->total }}</span>Sobre meta de ${{ $campaigns->goal }}</p>
                                    </div> 
                                @endforeach                              
                            </div>
                            <div class="donate-information">
                                <div class="progress-bar-area">
                                    <div class="single-progress-bar">
                                        <div class="progress">
                                        @foreach($balances as $balance)
                                            <div class="progress-bar wow fadeInLeft progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $balance->total }}" aria-valuemin="{{ $campaigns or 0 }}" aria-valuemax="{{ $campaigns or 100 }}" style="width: {{ number_format((($balance->total/$campaigns->goal) * 100), 2) }}%; visibility: visible; animation-duration: 3s; animation-delay: .5s; ">
                                                <span>{{ number_format((($balance->total/$campaigns->goal) * 100)) }} % Alcanzado</span>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="donate-information">
                                <div class="single-donate-information">
                                    <p><span>Grupo</span>{{ $campaigns->group->name }}</p>
                                </div>
                                <div class="single-donate-information">
                                    <p><span>Curso</span>{{ $campaigns->course->name }}</p>
                                </div>
                            </div>
                            <div class="donate-information">
                                <p align="justify"><span>Descripción</span>{{ $campaigns->description }}</p>
                            </div>
                            <br>
                            <div class="donate-information{{ $errors->has('amount') ? ' has-error' : '' }}">
                                <div class="donor-information">
                                    <p><span>Cantidad a donar</span></p>

                                    <div class="donor-amount">
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="10">
                                                <label for="first-amount">10 USD</label>
                                            </div>
                                        </div>
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="20">
                                                <label for="third-amount">20 USD</label>
                                            </div>
                                        </div>
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="30">
                                                <label for="third-amount">30 USD</label>
                                            </div>
                                        </div>
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="40">
                                                <label for="third-amount">40 USD</label>
                                            </div>
                                        </div>
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="50">
                                                <label for="second-amount">50 USD</label>
                                            </div>
                                        </div>
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="60">
                                                <label for="third-amount">60 USD</label>
                                            </div>
                                        </div>
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="70">
                                                <label for="third-amount">70 USD</label>
                                            </div>
                                        </div>
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="80">
                                                <label for="third-amount">80 USD</label>
                                            </div>
                                        </div>
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="90">
                                                <label for="third-amount">90 USD</label>
                                            </div>
                                        </div>
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="100">
                                                <label for="third-amount">100 USD</label>
                                            </div>
                                        </div>
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="200">
                                                <label for="third-amount">200 USD</label>
                                            </div>
                                        </div>
                                        <div class="single-donor-amount">
                                            <div class="single-donor-amount-wrapper">
                                                <input id="amount" type="radio" name="amount" value="300">
                                                <label for="third-amount">300 USD</label>
                                            </div>
                                        </div>
                                    </div>

                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">
                                impulsar campaña
                            </button>
                        </div>
                        </article>
                    </form>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="sidebar-widgets">
                        <aside class="single-widget">
                            <div class="search-widget">
                                <form action="#" class="search-form">
                                    <input type="text" placeholder="Search.....">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </aside>
                        <aside class="single-widget">
                            <h4>Categories</h4>
                            <div class="categories">
                                <ul class="post-category-list">
                                    <li><a href="#"><i class="fa fa-angle-right"></i>travel <span>[8]</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Development <span>[6]</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Programming <span>[7]</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Branding <span>[5]</span></a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="single-widget">
                            <h4>popular events</h4>
                            <div class="popular-news">
                                <div class="single-popular-news">
                                    <div class="popular-news-thumb">
                                        <a href="#"><img src="" alt=""></a>
                                    </div>
                                    <div class="popular-news-content">
                                        <h6><a href="#">food campaigning for children</a></h6>
                                        <p><a href="#">4 Aug 2017</a></p>
                                    </div>
                                </div>
                                <div class="single-popular-news">
                                    <div class="popular-news-thumb">
                                        <a href="#"><img src="g" alt=""></a>
                                    </div>
                                    <div class="popular-news-content">
                                        <h6><a href="#">food campaigning for children</a></h6>
                                        <p><a href="#">5 Aug 2017</a></p>
                                    </div>
                                </div>
                                <div class="single-popular-news">
                                    <div class="popular-news-thumb">
                                        <a href="#"><img src="" alt=""></a>
                                    </div>
                                    <div class="popular-news-content">
                                        <h6><a href="#">food campaigning for children</a></h6>
                                        <p><a href="#">6 Aug 2017</a></p>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="single-widget">
                            <h4>Tags</h4>
                            <div class="tags">
                                <a href="#">charity</a>
                                <a href="#">event</a>
                                <a href="#">education</a>
                                <a href="#">health</a>
                                <a href="#">food</a>
                                <a href="#">home</a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single event area end -->
</section>
<!-- Page content area end -->