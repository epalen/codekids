<article class="blog-post">
    @foreach ($posts as $post)
        <div class="post-thumbnail">
            <img src="{{ URL::asset('uploads/posts/' . $post->avatar) }}" alt="">
        </div>
        <div class="post-content">
            <h5 class="post-title">
                <a href="{{ route('blog.show',$post->slug) }}">
                    {{ $post->title }}
                </a>
            </h5>
            <ul class="event-meta">
                <li>
                    <a href="#">
                        <i class="fa fa-tag"></i>
                        {{ $post->category->name }}
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-calendar"></i>
                        {{ Carbon::parse($post->created_at)->format('d M Y') }}
                    </a>
                </li>
                <li>
                    <p align="justify">
                        {!!substr($post->content, 0,262)!!}...
                    </p>
                </li>
            </ul>
            <a class="text-link" href="{{ route('blog.show',$post->slug) }}">Leer más</a>
        </div>
    @endforeach   
</article>

