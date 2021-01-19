<div class="sponsor-section theme-section-2 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <div class="sponsor-thumbnail-wrapper">
                    @foreach($partners as $partner)
                        <div class="single-sponsor-thumb">
                            <img src="img/sponsor/conversant.png" width="220" height="105" alt="{{ $partner->name }}">
                        </div>
                    @endforeach
                </div>                
            </div>
        </div>
    </div>
</div>
