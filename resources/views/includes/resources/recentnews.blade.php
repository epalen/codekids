<div class="theme-section blog-section white-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="area-heading text-center">
                    <h2 class="area-title">Noticias recientes</h2>
                    <p>Estas son algunas publicaciones de noticias y de los eventos que realizamos para poder ofrecerles nuestra oferta a más niños en nuestras comunidades.</p>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="testimonial-wrapper navigation-style-1">
                @foreach($posts as $post)
                    <div class="col-md-4 col-sm-6">
                        <article class="blog-post">
                            <div class="post-thumbnail">
                                <a href="{{ route('blog.show',$post->slug) }}">
                                    <img src="{{ URL::asset('uploads/posts/' . $post->avatar) }}" width="370" height="250" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <h5 class="post-title">
                                    <a href="{{ route('blog.show',$post->slug) }}">{{ $post->title }}</a>
                                </h5>
                                <ul class="event-meta">
                                    <li>
                                        <a>
                                            <i class="fa fa-bookmark-o"></i>{{ $post->category->name }}
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i class="fa fa-calendar"></i>{{ Carbon::parse($post->created_at)->format('d M Y') }}
                                        </a>
                                    </li>
                                </ul>
                                <a class="text-link" href="{{ route('blog.show',$post->slug) }}">Ver contenido</a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>