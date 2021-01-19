@extends('master')
@section('content')
	<div class="container-fluid">
		<div class="animate fadeIn">
			<div class="row">				
				@include('panel.includes.cards')      
		    </div>
		    <!--/.row-->
		</div>
	</div>
@endsection
<!-- /.conainer-fluid -->

@section('myscript')
  <script src="{{ asset('js/views/main.js') }}"></script>
@endsection