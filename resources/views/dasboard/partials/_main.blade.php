<html lang="en">
<head>
	@include('dasboard.partials.head');
</head>
<body>

<div class="wrapper">
  @include('dasboard.partials.sidebar');
	<!-- Main -->
@yield('main');
</div>


</body>
  @include('dasboard.partials.footer');

</html>
