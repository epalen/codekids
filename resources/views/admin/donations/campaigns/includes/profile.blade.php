<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-info"></i>Información de transacción
          </div>
          <div class="card-body">
            <div class="row">
              <!-- left column -->
              <div class="col-sm-4">
                <div class="text-justify">
                  <img src="{{ URL::asset('uploads/campaigns/' . $transactions->campaign->avatar) }}" class="avatar-lg img-circle img-thumbnail" alt="avatar">                            
                </div>
              </div>
              <!-- right column -->
              <div class="col-sm-4">
                <div class="form-group">
                  <strong>Nombre del candidato:</strong>
                  {{ $transactions->campaign->title }}
                </div>
                <div class="form-group">
                  <strong>Payment ID:</strong>
                  {{ $transactions->payment_id }}
                </div>
                <div class="form-group">
                  <strong>Intent:</strong>
                  {{ $transactions->intent }}
                </div>
                <div class="form-group">
                  <strong>Cart:</strong>
                  {{ $transactions->cart }}
                </div>
                <div class="form-group">
                  <strong>Método de pago:</strong>
                  {{ $transactions->payment_method }} 
                </div>
                <div class="form-group">
                  <strong>Estado:</strong>
                  <span class="badge badge-info">{{ $transactions->status }}</span>
                </div>  
                <div class="form-group">
                  <strong>Nombre del auspiciador:</strong>
                  {{ $transactions->payer_name }} {{ $transactions->payer_last_name }}
                </div> 
                <div class="form-group">
                  <strong>Email ausipiciador:</strong>
                  {{ $transactions->payer_email }}
                </div>             
                <div class="form-group">
                  <strong>Payer ID:</strong>
                  {{ $transactions->payer_id }}
                </div>                 
              </div>
              <div class="col-sm-4">  
                <div class="form-group">
                  <strong>Dirección auspiciador:</strong>
                  {{ $transactions->payer_address }}, {{ $transactions->payer_state }}, {{ $transactions->payer_country_code }}
                </div>
                <div class="form-group">
                  <strong>Código postal auspiciador:</strong>
                  {{ $transactions->payer_postal_code }}
                </div>              
                <div class="form-group">
                  <strong>Merchant ID:</strong>
                  {{ $transactions->merchant_id }}
                </div>
                <div class="form-group">
                    <strong>Merchant Email:</strong>
                    {{ $transactions->payee_email }}
                  </div>
                <div class="form-group">
                  <strong>Fecha de transacción:</strong>
                  {{ Carbon::parse($transactions->created_at)->format('d M Y') }}
                </div>
                <div class="form-group">
                  <strong>Tipo de moneda:</strong>
                  {{ $transactions->transaction_currency }}
                </div>
                <div class="form-group">
                  <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th style="text-align:right">Monto Transferido</th>
                          <th style="text-align:right">Cuota Paypal</th>
                          <th style="text-align:right">Total Recibido</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td align="right">
                            US$ {{ $transactions->transaction_total }}
                          </td>
                          <td align="right">
                            US$ {{ $transactions->transaction_fee }}
                          </td>
                          <td align="right">
                            US$ {{ number_format($transactions['transaction_total'] - $transactions['transaction_fee'],2) }}
                          </td>
                        </tr>
                      </tbody>
                  </table>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group" align="center">
                  <a class="btn btn-warning" href="{{ route('donaciones.campanas.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
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