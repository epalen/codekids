<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-info"></i>Información de candidato
          </div>
          <div class="card-body">
            <div class="row">
              <!-- left column -->
              <div class="col-sm-4">
                <div class="text-justify">
                  <div class="panel-heading">
                      <h4 class="panel-title">{{ $candidates->name }} {{ $candidates->last_name }}</h4> 
                  </div>
                    <img src="{{ URL::asset('uploads/candidates/' . $candidates->avatar) }}" class="avatar-lg img-circle img-thumbnail" alt="avatar">
                  </div>
              </div>
              <!-- right column -->
              <div class="col-sm-3">
                <div class="form-group">
                  <strong>Sexo:</strong>
                  @if ($candidates->gender == 1)
                  Femenino
                  @else ($candidates->gneder == 0)
                  Masculino
                  @endif
                </div>
                <div class="form-group">
                  <strong>Edad:</strong>
                  {{ Carbon\Carbon::parse($candidates->birthdate)->addDays(10)->diffForHumans() }}
                </div>
                <div class="form-group">
                  <strong>Gustos:</strong>
                  {{ $candidates->likes }}
                </div>
                <div class="form-group">
                  <strong>Talentos:</strong>
                  {{ $candidates->talent }}
                </div>
                <div class="form-group">
                  <strong>Deseos:</strong>
                  {{ $candidates->wishes }}
                </div>
                <div class="form-group">
                  <strong>Nombre del padre:</strong>
                  {{ $candidates->father_name }}
                </div>
                <div class="form-group">
                  <strong>Nombre de la madre:</strong>
                  {{ $candidates->mother_name }}
                </div>
                <div class="form-group">
                  <strong>Ingreso familiar:</strong>
                  RD$ {{ number_format($candidates->family_income, 2) }}
                </div>  
                <!--<div class="form-group">
                  <strong>Provincia:</strong>
                  
                </div>
                <div class="form-group">
                  <strong>Teléfono:</strong>
                  
                </div>--> 
              </div>
              <div class="col-sm-5"> 
                <form class="form-group" role="form">
                  <div class="form-group">
                    <strong>Dirección:</strong>
                    {{ $candidates->address }}
                  </div>
                  <div class="form-group">
                      <strong>Ciudad:</strong>
                      {{ $candidates->city }}
                    </div>
                  <div class="form-group">
                      <strong>Descripción:</strong>
                      <br>
                      <p align="justify">{{ $candidates->description }}</p>
                  </div> 
                  <div class="form-group">
                    <strong>Grupo:</strong>
                    {{ $candidates->group->name }}
                  </div>
                  <div class="form-group">
                      <strong>Curso:</strong>
                      {{ $candidates->course->name }}
                    </div>
                  <div class="form-group">
                    @foreach($balances as $balance)
                      <strong>Avances:</strong>
                      <br>
                      Cantidad recaudada ${{ $balance->total }} de ${{ $candidates->goal}}
                      <div class="progress-bar-area">
                        <div class="single-progress-bar">
                          <div class="progress" style="height:30px">
                            <div class="progress-bar wow fadeInLeft progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $balance->total }}" aria-valuemin="{{ $candidates or 0 }}" aria-valuemax="{{ $candidates or 100 }}" style="width: {{ number_format((($balance->total/$candidates->goal) * 100), 2) }}%; visibility: visible; animation-duration: 3s; animation-delay: .5s; ">
                              <span>{{ number_format((($balance->total/$candidates->goal) * 100)) }} % Alcanzado</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>                 
                </form>
              </div>
              <div class="col-sm-12">
                <div class="form-group" align="center">
                  <a class="btn btn-warning" href="{{ route('candidatos.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
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