<section class="content">
    <!-- Single event area start -->
    <div class="single-blog-section theme-section white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <img src="{{ URL::asset('uploads/posts/' . $posts->avatar) }}" alt="">
                        </div>
                        <div class="post-content">
                            <h5 class="post-title">{{ $posts->title }}</h5>
                            <ul class="event-meta">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-tag"></i>
                                        {{ $posts->category->name }}
                                    </a>
                                </li>                                
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar"></i>
                                        {{ $posts->created_at->format('d M Y') }}
                                    </a>
                                </li>
                            </ul>
                            <p>
                                {!! $posts->content !!}
                            </p>
                            <div class="post-share">
                                <div class="post-tags">
                                    <img src="{{ URL::asset('uploads/avatars/' . $posts->user->avatar) }}" class="avatar-lg img-circle img-thumbnail" width="8%" height="8%" alt="avatar"> 
                                </div>
                                <div class="post-tags">
                                    Por: <strong>{{ $posts->user->name }}</strong>                                    
                                </div>
                                <div class="post-tags">
                                    <span>Tags: </span>
                                    <ul class="post-tag-list">
                                        <li><a href="#">Eduction</a></li>
                                        <li><a href="#">children</a></li>
                                    </ul>
                                </div>
                                <div class="post-menu">
                                    <ul class="post-menu-list">
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6">
                   @include('blog.includes.sidebar') 
                </div>
            </div>
        </div>
    </div>
    <!-- Single event area end -->
</section>