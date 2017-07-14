<!DOCTYPE HTML>
<html>
	<head>
		@include('blog.partials.head');
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
        @include('blog.partials.header')

				<!-- Menu -->
        @yield('post');

				<!-- Pagination -->
					<ul class="actions pagination">
						<li><a href="" class="disabled button big previous">Previous Page</a></li>
						<li><a href="#" class="button big next">Next Page</a></li>
					</ul>

				</div>
				<!-- Main -->
				@include('blog.partials.menu')

				<!-- Sidebar -->
				@include('blog.partials.sidebar');


        <!-- Footer -->
        @include('blog.partials.footer')

        <!-- post-->
        @yield('content');
        </div>

        <!-- Scripts -->
          <script src="assets/blog/assets/js/jquery.min.js"></script>
          <script src="assets/blog/assets/js/skel.min.js"></script>
          <script src="assets/blog/assets/js/util.js"></script>
          <!--[if lte IE 8]><script src="assets/blog/assets/js/ie/respond.min.js"></script><![endif]-->
          <script src="assets/blog/assets/js/main.js"></script>

        </body>
        </html>
