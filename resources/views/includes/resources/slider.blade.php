<div class="template-slider-area">
    <div class="slider-wrapper">
        @foreach($qcampaigns as $campaign)
        <div class="single-slider slide-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-8 col-sm-9">
                        <div class="slider-content text-left">
                            <div class="slider-content-wrapper">                                
                                <h2><a href="#">{{ $campaign->title }}</a></h2>
                                <h5><a>{{ $campaign->subtitle }}</a></h5>
                                <div class="progress-bar-area">
                                    <div class="single-progress-bar">
                                        <div class="progress ">
                                            <div class="progress-bar wow fadeInLeft" role="progressbar" aria-valuenow="{{ $campaign->total }}" aria-valuemin="{{ $campaign or 0 }}" aria-valuemax="{{ $campaign or 100 }}" style="width: {{ number_format((($campaign->total/$campaign->goal) * 100), 2) }}%; visibility: visible; animation-duration: 3s; animation-delay: .5s;">
                                                <span>{{ number_format((($campaign->total/$campaign->goal) * 100)) }} % Alcanzado</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-btn">
                                    <a class="btn btn-default" href="{{ route('campaign.edit',$campaign->id) }}">auspiciar evento</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>