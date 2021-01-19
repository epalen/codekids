<div class="theme-section theme-section-ex-padding testimonial-section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="area-heading text-center">
                    <h2 class="area-title">¿Qué dicen nuestros auspiciadores?</h2>
                    <p>Estos son los comentarios de algunas de las personas que han confiado en nosotros, y gracias a su contribución hacen posible esta realidad.</p>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <div class="testimonial-wrapper navigation-style-1">
                    @foreach($sponsors as $sponsor)
                        <div class="single-testimonial ">
                            <blockquote>
                                <img src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" width="100" height="100" alt=" " class="client-image">
                                <p class="client-name ">{{ $sponsor->name }} {{ $sponsor->last_name }} <span class="designation ">{{ $sponsor->job_title }}</span></p>
                                <p>
                                    {{substr($sponsor->description, 0,74)}}
                                </p>
                            </blockquote>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>