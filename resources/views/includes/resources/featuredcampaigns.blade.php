<div class="donet-section theme-section theme-section-ex-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="area-heading text-center">
                    <h3 class="area-title">Campaña destacada</h3>
                    <p>Nuestras campañas nos permiten impulsar a temprana edad el concepto de la introducción a las ciencias de la computación, incentiva la creatividad y competitividad en los niños participantes en estos eventos.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="donate-feature-list navigation-style-1">
                    @foreach($qcampaigns as $campaign)
                        <div class="single-donet">
                            <div class="donet-thumbnail">
                                <img src="{{ URL::asset('uploads/campaigns/' . $campaign->avatar) }}" width="570" height="400" alt="">
                            </div>
                            <div class="donet-content">
                                <div class="donet-content-heading">
                                    <h3><a href="#">{{ $campaign->title }}</a></h3>
                                    <ul class="event-meta">
                                        <li>
                                            <a href="#"><i class="fa fa-tag"></i>
                                                {{ $campaign->grp_name }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-calendar"></i>{{ Carbon::parse($campaign->start_date)->format('d M Y') }}</a>
                                        </li>
                                    </ul>
                                    <p align="justify">{{ $campaign->description }}</p>
                                </div>
                                <div class="donet-bar">
                                    <p>
                                        Alcanzado: ${{ $campaign->total }} <span class="project-goal">Meta: ${{ $campaign->goal }}</span>
                                    </p>
                                    <div class="progress-bar-area">
                                        <div class="single-progress-bar">
                                            <div class="progress ">
                                                <div class="progress-bar wow fadeInLeft" role="progressbar" aria-valuenow="{{ $campaign->total }}" aria-valuemin="{{ $campaign or 0 }}" aria-valuemax="{{ $campaign or 100 }}" style="width: {{ number_format((($campaign->total/$campaign->goal) * 100), 2) }}%; visibility: visible; animation-duration: 3s; animation-delay: .5s;">
                                                    <span>{{ number_format((($campaign->total/$campaign->goal) * 100)) }} % Alcanzado</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-default" href="{{ route('campaign.edit',$campaign->id) }}">auspiciar evento</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>