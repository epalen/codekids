<section class="content">
    <!-- Single event area start -->
    <div class="event-section theme-section white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-heading text-center">
                        <h2 class="area-title">Nuestras Campañas</h2>
                        <p>Las campañas y eventos que realizamos regularmente los realizamos como competencias para que los niños puedan participar y competir con sus ideas y proyectos con otros estudiantes y otras instituciones.</p>
                    </div>
                </div>
            </div>                    
            <div class="row">
                @foreach($campaigns as $campaign)
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <article class="single-event">
                            <div class="event-thumb">
                                <a href="#"><img src="{{ URL::asset('uploads/campaigns/' . $campaign->avatar) }}" alt=""></a>
                            </div>
                            <div class="event-content event-content-2">
                            <h5 class="single-event-title">
                                <a href="#">{{ $campaign->title }}</a>
                            </h5>
                                <ul class="event-meta">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-tag"></i>{{ $campaign->crs_name }}
                                    </a>
                                </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar"></i>{{ Carbon::parse($campaign->end_date)->format('d M Y') }}
                                        </a>
                                    </li>
                                </ul>
                                <p>
                                    {{ substr($campaign->description, 0,100) }}
                                </p>
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
                                <div align="center">
                                    <a class="btn btn-default" href="{{ route('campaign.edit',$campaign->id) }}">impulsar</a>
                                    <a class="btn btn-default" href="#">más información</a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Single event area end -->
    <!-- sponsor area start -->
    @include('includes.resources.sponsors')
    <!-- sponsor area end -->
</section>