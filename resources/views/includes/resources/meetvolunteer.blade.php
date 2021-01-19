<div class="theme-section theme-section-ex-padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="area-heading text-center">
                    <h2 class="area-title">conoce nuestro equipo</h2>
                    <p>Estas son algunas de las personas que día a día dedican sus esfuerzos para que cada niño de escasos recursos puedan recibir conocimientos que le sirvan de base para su desarrollo, entendimiento y bienestar.</p>
                </div>
            </div>
        </div>
        <div class="row">            
            <div class="col-md-9 col-lg-8">
                <div class="volunteer-member-list navigation-style-1 navigation-style-2">
                    @foreach($teammembers as $teammember)
                        <div class="single-volunteer-member">
                            <div class="volunteer-thumb">
                                <img src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="">
                            </div>
                            <div class="volunteer-content">
                                <h4><a href="#">{{ $teammember->name }} {{ $teammember->last_name }}</a></h4>
                                <p>{{ $teammember->job_title }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>            
            <div class="col-md-3 col-lg-4 hidden-sm hidden-xs">
                <div class="be-volunteer">
                    <div class="be-volunteer-content text-center">
                        <h4>se parte de nosotros</h4>
                        <p>Si tienes vocación de servicio y quieres colaborar junto a nosotros para que este proyecto pueda llegar a mas niños, únete a nuestro equipo.</p>
                        <a href="#" class="btn btn-default">Unete ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>