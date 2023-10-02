<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/css/toastr.css') }}" rel="stylesheet">

	</head>
	<body class="img js-fullheight" style="background-image: url({{ asset('assets/images/bg.jpg') }});">
	{{ $slot }}

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/toastr.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <script>

    // success message popup notification

    @if(Session::has('success'))

        toastr.success("{{ Session::get('success') }}");

    @endif


    // info message popup notification

    @if(Session::has('info'))

        toastr.info("{{ Session::get('info') }}");

    @endif


    // warning message popup notification

    @if(Session::has('warning'))

        toastr.warning("{{ Session::get('warning') }}");

    @endif


    // error message popup notification

    @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif

    @foreach($errors->all() as $error)
        toastr.error("{{ $error }}")
    @endforeach



</script>
	</body>
</html>

