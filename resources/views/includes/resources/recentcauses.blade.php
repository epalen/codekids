<div class="portfolio-area theme-section white-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="area-heading text-center">
                    <h2 class="area-title">nuestros cursos</h2>
                    <p>Cada curso está didácticamente preparado para que el niño inicie conociendo los aspectos básicos de un computador, hasta llegar a crear proyectos complejos basados en su creatividad.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-filter">
                    <ul class="protfolio-filter">
                        <li class="active"><a href="#" data-filter="*">Todos</a></li>
                        <li><a href="#" data-filter=".cat-1">Arduino </a></li>
                        <li><a href="#" data-filter=".cat-2">Cinencias de la Computación</a></li>
                        <li><a href="#" data-filter=".cat-3">Desarrollo de Aplicaciones</a></li>
                        <li><a href="#" data-filter=".cat-4">Programación y Robótica</a></li>
                        <li><a href="#" data-filter=".cat-5">Kinder</a></li>
                    </ul>
                </div>
                
                <div class="portfolio-container">
                    @foreach($courses as $course)
                        <div class="cat-1 cat-3 portfolio-item">
                            <div class="item-content">
                                <div class="item-thumnail">
                                    <img src="img/portfolio/code-camp.png" width="370" height="250" alt="image">
                                    <div class="view-btn">
                                        <a class="view-gallery" data-gall="myGallery" href="img/portfolio/code-camp.png"><i class="bi bi-plus"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-description">
                                    <div class="description-content">
                                        <h4><a href="#">{{ $course->name }}</a></h4>
                                        <ul class="portfolio-cat">
                                            <li><a href="#">{{ $course->courseCategory->name }}</a></li>
                                            <li><a href="#">{{ $course->group->name }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--<div class="cat-4 cat-5 portfolio-item">
                        <div class="item-content">
                            <div class="item-thumnail">
                                <img src="img/portfolio/2.jpg" alt="image">
                                <div class="view-btn">
                                    <a class="view-gallery" data-gall="myGallery" href="img/portfolio/large/2.jpg"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <div class="description-content">
                                    <h4><a href="#">Education</a></h4>
                                    <ul class="portfolio-cat">
                                        <li><a href="#">Education</a></li>
                                        <li><a href="#">children</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-3 cat-5 portfolio-item">
                        <div class="item-content">
                            <div class="item-thumnail">
                                <img src="img/portfolio/3.jpg" alt="image">
                                <div class="view-btn">
                                    <a class="view-gallery" data-gall="myGallery" href="img/portfolio/large/3.jpg"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <div class="description-content">
                                    <h4><a href="#">Women's issues</a></h4>
                                    <ul class="portfolio-cat">
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">children</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-1 cat-4 portfolio-item">
                        <div class="item-content">
                            <div class="item-thumnail">
                                <img src="img/portfolio/4.jpg" alt="image">
                                <div class="view-btn">
                                    <a class="view-gallery" data-gall="myGallery" href="img/portfolio/large/4.jpg"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <div class="description-content">
                                    <h4><a href="#">Help elderly</a></h4>
                                    <ul class="portfolio-cat">
                                        <li><a href="#">elderly</a></li>
                                        <li><a href="#">Home</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-2 cat-5 portfolio-item">
                        <div class="item-content">
                            <div class="item-thumnail">
                                <img src="img/portfolio/5.jpg" alt="image">
                                <div class="view-btn">
                                    <a class="view-gallery" data-gall="myGallery" href="img/portfolio/large/5.jpg"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <div class="description-content">
                                    <h4><a href="#">Stop abortion</a></h4>
                                    <ul class="portfolio-cat">
                                        <li><a href="#">abortion</a></li>
                                        <li><a href="#">children</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-1 cat-4 portfolio-item">
                        <div class="item-content">
                            <div class="item-thumnail">
                                <img src="img/portfolio/6.jpg" alt="image">
                                <div class="view-btn">
                                    <a class="view-gallery" data-gall="myGallery" href="img/portfolio/large/6.jpg"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <div class="description-content">
                                    <h4><a href="#">Help disabled</a></h4>
                                    <ul class="portfolio-cat">
                                        <li><a href="#">disabled</a></li>
                                        <li><a href="#">Home</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-2 cat-3 portfolio-item hidden">
                        <div class="item-content">
                            <div class="item-thumnail">
                                <img src="img/portfolio/7.jpg" alt="image">
                                <div class="view-btn">
                                    <a class="view-gallery" data-gall="myGallery" href="img/portfolio/large/7.jpg"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <div class="description-content">
                                    <h4><a href="#">Save children</a></h4>
                                    <ul class="portfolio-cat">
                                        <li><a href="#">children</a></li>
                                        <li><a href="#">Food</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-1 cat-5 portfolio-item hidden">
                        <div class="item-content">
                            <div class="item-thumnail">
                                <img src="img/portfolio/4.jpg" alt="image">
                                <div class="view-btn">
                                    <a class="view-gallery" data-gall="myGallery" href="img/portfolio/large/4.jpg"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <div class="description-content">
                                    <h4><a href="#">Help elderly</a></h4>
                                    <ul class="portfolio-cat">
                                        <li><a href="#">children</a></li>
                                        <li><a href="#">Food</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-2 cat-4 portfolio-item hidden hidden-sm">
                        <div class="item-content">
                            <div class="item-thumnail">
                                <img src="img/portfolio/3.jpg" alt="image">
                                <div class="view-btn">
                                    <a class="view-gallery" data-gall="myGallery" href="img/portfolio/large/3.jpg"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-description">
                                <div class="description-content">
                                    <h4><a href="#">Help disabled</a></h4>
                                    <ul class="portfolio-cat">
                                        <li><a href="#">children</a></li>
                                        <li><a href="#">Food</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    
                </div>
                <div class="load-more text-center">
                    <a href="#" class="btn btn-default load-more-btn">Leer Más</a>
                </div>
            </div>
        </div>
        
    </div>
</div>