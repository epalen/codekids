<div class="theme-section breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h3 class="breadcrumb-title">Candidatos</h3>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="breadcrumb-wrap">
                    <ul class="breadcrumb-list">
                        <li><a href="{{ url('/') }}">Inicio </a></li>
                        <li>Candidatos</li>
                        <li>{{ $candidates->name }} {{ $candidates->last_name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>