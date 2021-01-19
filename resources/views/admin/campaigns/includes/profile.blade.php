<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-info"></i>Información de campaña
          </div>
          <div class="card-body">
            <div class="row">
              <!-- left column -->
              <div class="col-sm-4">
                <div class="text-justify">
                  <img src="{{ URL::asset('uploads/campaigns/' . $campaigns->avatar) }}" class="avatar-lg img-circle img-thumbnail" alt="avatar">                               
                </div>
              </div>
              <!-- right column -->
              <div class="col-sm-3">
                <div class="form-group">
                  <strong>Nombre de campaña:</strong>
                  {{ $campaigns->title }}
                </div>
                <div class="form-group">
                  <strong>Subtítulo:</strong>
                  {{ $campaigns->subtitle }}
                </div>
                <div class="form-group">
                  <strong>Grupo:</strong>
                  {{ $campaigns->group->name }}
                </div>
                <div class="form-group">
                  <strong>Curso:</strong>
                  {{ $campaigns->course->name }}
                </div>
                <div class="form-group">
                  <strong>Recaudado:</strong>
                  $ {{ $campaigns->raised }}
                </div>
                <div class="form-group">
                  <strong>Meta:</strong>
                  $ {{ $campaigns->goal }}
                </div>
                <div class="form-group">
                  <strong>Fecha inicio:</strong>
                  {{ Carbon::parse($campaigns->start_date)->format('d M Y') }}
                </div>
                <div class="form-group">
                  <strong>Fecha finalización:</strong>
                  {{ Carbon::parse($campaigns->end_date)->format('d M Y') }}
                </div> 
              </div>
              <div class="col-sm-5">
                <div class="form-group">
                  <strong>Descripción:</strong>
                  <p align="justify">{{ $campaigns->description }}</p>
                  <h5>Esta campaña inicia
                    <span class="badge badge-info">{{ Carbon::parse($campaigns->end_date)->diffForHumans() }}</span>
                  </h5>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group" align="center">
                  <a class="btn btn-warning" href="{{ route('campanas.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
                      <i class="fa fa-arrow-left"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
  </div>
</div>