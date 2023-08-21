@extends('layouts.master')

@section('css')
<style type="text/css">

</style>
@stop

@section('content')

<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Login</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Login</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row justify-content-center g-0">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="box box-body">
						<div class="content-top-agile pb-0 pt-20">
							<h2 class="text-primary">Let's Get Started</h2>
							<p class="mb-0">Sign in to Web Admin</p>							
						</div>
						<div class="p-40">
                            <form action="POST" class="form-horizontal new-lg-form" id="form_login">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="text" class="form-control ps-15 bg-transparent" name="username" id="username" placeholder="Username" value="{{ old('username') }}">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
										<input type="password" class="form-control ps-15 bg-transparent" id="password" name="password" required autocomplete="current-password" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									{{-- <div class="col-6">
									  <div class="checkbox ms-5">
										<input type="checkbox" id="basic_checkbox_1">
										<label for="basic_checkbox_1" class="form-label">Remember Me</label>
									  </div>
									</div> --}}
									<!-- /.col -->
									<div class="col-6">
									 <div class="fog-pwd">
										<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot Password ?</a><br>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" id="login_enter" class="btn btn-info w-p100 mt-15">Sign In</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>	
							{{-- <div class="text-center">
								<p class="mt-15 mb-0">Don't have an account? <a href="register.html" class="text-warning ms-5">Register</a></p>
							</div>	 --}}
						</div>
					</div>								

				</div>
			</div>
		</div>
	</section>
@endsection
@section('page-script')

<script type="text/javascript">

$(document).keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
        $("#login_enter").click();
    }
});


$(document).ready(function() {
	  function startSpinner() {
	  $("#login_enter").prop("disabled", true);
	  $("#login_enter").html(
		  '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
	  );
	  }
	  
	  function stopSpinner() {
	  $("#login_enter").prop("disabled", false);
	  $("#login_enter").html('<i class="fas fa-sign-in-alt"></i> Sign In');
	  }
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

	  $('#form_login').on('submit', function(event) {
      event.preventDefault();
      var form_data = $(this).serialize();
      // var username = $("input[name=username]").val();
      // var password = $("input[name=password]").val();
      $.ajax({
          type: 'POST',
          url: "{{ route('login_action') }}",
          data: form_data,
          beforeSend: function() {
              startSpinner();
          },
          success: function(result) {

            if (result.error) {
			  showToastr('error', 'Error!', result.error);
			  //swal("Error !", result.error, "error");
            } else if (result.success) {
			  showToastr('success', 'Success!', result.success);
			  //swal("Success !", result.success, "success");
              console.log(result);
              document.location.href = "{{ route('dashboard') }}";
            }
              stopSpinner();
          }
      })
  });

  });
</script>

@stop