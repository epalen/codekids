<section class="content">
    <!-- Single event area start -->
    <div class="single-blog-section theme-section white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    @include('blog.includes.article')
                    <div style="padding-bottom:-2px;">
                        {{ $posts->links() }}
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    @include('blog.includes.sidebar')
                </div>
            </div>
        </div>
    </div>
    <!-- Single event area end -->
    <!-- sponsor area start -->
    @include('includes.resources.sponsors')
    <!-- sponsor area end -->
</section>