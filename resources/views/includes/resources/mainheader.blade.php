<div class="main-header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-12">
                <div class="logo-wrapper">
                    <a class="logo" href="#"><img src="/img/logo.png" class="logo-responsive"></a>
                </div>
            </div>
            @foreach($fcampaigns as $campaign)
                @if($campaign->status == 1)
                    <div class="col-md-8 col-sm-9 col-xs-12">
                        <div class="countdown-area">                            
                            <div class="countdown">
                                <div class="countdown-message">
                                    <h2>{{ $campaign->campaign->title }}</h2>
                                    <p>{{ $campaign->campaign->subtitle }}</p>
                                </div>
                                <div class="timer">
                                    <div class="time-wrapper">
                                        <h4 id="days">0</h4>
                                        <span>días</span>
                                    </div>
                                </div>
                                <div class="timer">
                                    <div class="time-wrapper">
                                        <h4 id="hours">0</h4>
                                        <span>horas</span>
                                    </div>
                                </div>
                                <div class="timer">
                                    <div class="time-wrapper">
                                        <h4 id="minutes">0</h4>
                                        <span>minutos</span>
                                    </div>
                                </div>
                                <div class="timer">
                                    <div class="time-wrapper">
                                        <h4 id="seconds">0</h4>
                                        <span>segundos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('includes.resources.tools.countdown')

                    <div class="col-md-2 hidden-sm hidden-xs">
                        <div class="header-btn">
                            <ul class="header-action">
                                <li>
                                    <a class="btn btn-default" href="{{ route('campaign.edit',$campaign->id) }}">auspiciar evento</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <div class="countdown-area">
                            <div class="countdown-message">
                                <h2>Actualmente no tenemos campañas activas</h2>
                                <p>Proximamente estaremos publicando nuevos eventos</p>
                            </div>
                            <div class="countdown">
                                <div class="timer">
                                    <div class="time-wrapper">
                                        <h4 id="days">0</h4>
                                        <span>campañas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif  
            @endforeach
        </div>
    </div>
</div>