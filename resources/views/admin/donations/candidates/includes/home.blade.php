<div class="container-fluid">
  @if ($message = Session::get('success'))
    <div class="alert text-white bg-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <p>{{ $message }}</p>
    </div>
  @endif

  <div class="animated fadeIn">
    <div class="row">
      <div class="col-6 col-lg-3">
        <div class="card">
          <div class="card-body p-0 d-flex align-items-center">
            <i class="fa fa-cogs bg-primary p-4 font-2xl mr-3"></i>
            <div>
              <div class="text-value-sm text-primary">{{ $count }}</div>
              <div class="text-muted text-uppercase font-weight-bold small">Total transacciones</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="card">
          <div class="card-body p-0 d-flex align-items-center">
            <i class="fa fa-paypal bg-primary p-4 font-2xl mr-3"></i>
            <div>
              <div class="text-value-sm text-primary">US$ {{ number_format(($balance),2) }}</div>
              <div class="text-muted text-uppercase font-weight-bold small">Monto transacciones</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="card">
          <div class="card-body p-0 d-flex align-items-center">
            <i class="fa fa-paypal bg-warning p-4 font-2xl mr-3"></i>
            <div>
              <div class="text-value-sm text-primary">US$ {{ number_format(($fee),2) }}</div>
              <div class="text-muted text-uppercase font-weight-bold small">Monto comisión</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="card">
          <div class="card-body p-0 d-flex align-items-center">
            <i class="fa fa-paypal bg-success p-4 font-2xl mr-3"></i>
            <div>
              <div class="text-value-sm text-primary">US$ {{ number_format(($balance - $fee),2) }}</div>
              <div class="text-muted text-uppercase font-weight-bold small">Monto total</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header col-lg-12">
            <div class="col-lg-3">
              <a>
                <i class="icon-credit-card"></i>
                &nbsp; Transacciones de candidatos
              </a>
            </div>                      
            <div class="card-actions col-lg-3">
              {!! Form::open(['route' => 'donaciones.candidatos.index', 'method' => 'GET']) !!}
                <div class="input-group input-group-sm">
                <span class="input-group-addon">
                  <i class="fa fa-search"></i>
                </span>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar donaciones...']) !!}
                </div>
              {!! Form::close() !!}
            </div>
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm table-striped table-sm">
              <thead>
                <tr>
                  <th style="width: 2%">#</th>
                  <th style="width: 10%; text-align: left;">Fecha</th>
                  <th style="width: 22%">ID transacción</th>
                  <th style="width: 20%">Nombre candidato</th>                  
                  <th style="width: 10%; text-align: center;">ID Payer</th>
                  <th style="width: 10%; text-align: center;">Payer Name</th>                  
                  <th style="width: 10%; text-align: right;">Monto</th>
                  <th style="width: 10%; text-align: right;">Total</th>                  
                  <th style="width: 20%; text-align: center">Acción</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $donations)
                  <tr>
                    <td style="width: 2%">{{ ++$i }}</td>
                    <td style="width: 10%; text-align: left;">
                      {{ Carbon::parse($donations->created_at)->format('d M Y') }}
                    </td>
                    <td style="width: 22%">
                      {{ $donations->payment_id }}
                    </td>
                    <td style="width: 20%">
                      {{ $donations->candidate->name }} {{ $donations->candidate->last_name }}
                    </td>                   
                    <td style="width: 10%" align="center">
                      {{ $donations->payer_id }}
                    </td>
                    <td style="width: 10%; text-align: center;">
                      {{ $donations->payer_name }} {{ $donations->payer_last_name }}
                    </td>     
                    <td style="width: 10%; text-align: right;">
                      ${{ $donations->transaction_total }}
                    </td>
                    <td style="width: 10%; text-align: right;">
                      ${{ number_format($donations['transaction_total'] - $donations['transaction_fee'],2) }}
                    </td>
                    <td style="width: 20%" align="center">
                      <a class="btn btn-info btn-sm" href="{{ route('donacion.candidatos.show',$donations->id) }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Detalle de la campaña"> 
                        <i class="icon-info"></i> 
                      </a>
                    </td>
                  </tr>
                @endforeach
                </tr>
              </tbody>
            </table>
            <nav>
              @if (count($data) == 1)
                {!! $data->count() !!} donación registrada
              @else (count($data) < 1)
                {!! $data->count() !!} donaciones de {!! $data->total() !!}
              @endif
            </nav>
            <nav>
              <ul class="pagination pagination-sm no-margin pull-right">
                {!! $data->setPath('')->render("pagination::bootstrap-4") !!}
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->
  </div>
</div>