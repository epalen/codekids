<section class="content">
    <!-- Single event area start -->
    <div class="event-section theme-section white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-heading text-center">
                        <h2 class="area-title">Nuestros Candidatos</h2>
                        <p>Son niños de escasos recursos a quienes integramos para que con el impulso y la ayuda de personas interesas en crear oportunidades, puedan recibir formación básica en ciencias de la computación con nuestros cursos.</p>
                    </div>
                </div>
            </div>                    
            <div class="row">
                @foreach($candidates as $candidate)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <article class="single-event">
                            <div class="event-thumb">
                                <a href="#">
                                    <img src="{{ URL::asset('uploads/candidates/' . $candidate->avatar) }}" alt="" width="370" height="250">
                                </a>
                            </div>
                            <div class="event-content event-content-2">
                            <h5 class="single-event-title"><a href="#">{{ $candidate->name }} {{ $candidate->last_name }}</a></h5>
                                <ul class="event-meta">
                                    <li>
                                        <a href="#"><i class="fa fa-tag"></i>
                                            {{ $candidate->c_name }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-calendar"></i>
                                            {{ Carbon\Carbon::parse($candidate->birthdate)->addDays(10)->diffForHumans() }}
                                        </a>
                                    </li>
                                </ul>
                                <p>
                                    {{ substr($candidate->description, 0,100) }}
                                </p>
                                <div class="donet-bar">
                                    <p>
                                        Alcanzado: ${{ $candidate->total }} <span class="project-goal">Meta: ${{ $candidate->goal }}</span>
                                    </p>
                                    <div class="progress-bar-area">
                                        <div class="single-progress-bar">
                                            <div class="progress ">
                                                <div class="progress-bar wow fadeInLeft" role="progressbar" aria-valuenow="{{ $candidate->total }}" aria-valuemin="{{ $candidate or 0 }}" aria-valuemax="{{ $candidate or 100 }}" style="width: {{ number_format((($candidate->total/$candidate->goal) * 100), 2) }}%; visibility: visible; animation-duration: 3s; animation-delay: .5s;">
                                                        <span>{{ number_format((($candidate->total/$candidate->goal) * 100)) }} % Alcanzado</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div align="center">
                                    <a class="btn btn-default" href="{{ route('candidate.edit',$candidate->id) }}">impulsalo</a>
                                    <a class="btn btn-default" href="#">más información</a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
            <div align="center">
                {{ $candidates->links() }}
            </div>
        </div>
    </div>  
    <!-- Single event area end -->
    <!-- sponsor area start -->
    @include('includes.resources.sponsors')
    <!-- sponsor area end -->
</section>