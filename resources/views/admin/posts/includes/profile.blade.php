<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-info"></i>Información de publicación
          </div>
          <div class="card-body">
            <div class="row">
              <!-- left column -->
              <div class="col-sm-4">
                <div class="text-justify">
                  <div class="form-group">
                    <h4>{{ $posts->title }}</h4>
                  </div>
                  <div class="form-group">
                    <img src="{{ URL::asset('uploads/posts/' . $posts->avatar) }}" class="avatar-lg img-circle img-thumbnail" alt="avatar">                               
                  </div>
                  <div class="form-group">
                    <strong>Slug:</strong>
                    {{ $posts->slug }}
                  </div>
                  <div class="form-group">
                    <strong>Categoría:</strong>
                    {{ $posts->category->name }}
                  </div>
                  <div class="form-group">
                    <strong>Publicado por:</strong>
                    {{ $posts->user->name }} <img src="{{ URL::asset('uploads/avatars/' . $posts->user->avatar) }}" class="img-avatar" width="10%" height="10%" alt="avatar">
                  </div>
                  <div class="form-group">
                    <strong>Publicado:</strong>
                    {{ Carbon::parse($posts->created_at)->format('d M Y') }}
                  </div>
                  <div class="form-group">
                    <strong>Actualizado:</strong>
                    {{ Carbon::parse($posts->updated_at)->format('d M Y') }}
                  </div>
                </div>
              </div>
              <!-- right column -->
              <div class="col-sm-8">
                <div class="text-justify">
                  <strong>Contenido:</strong>
                  <p>
                    {!! $posts->content !!}
                  </p>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group" align="center">
                  <a class="btn btn-warning" href="{{ route('publicacion.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
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