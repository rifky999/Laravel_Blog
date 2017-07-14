@extends('blog.partials._main')
@section('post')

@foreach ($article as $showArticle)
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="#">{{ $showArticle->judul }}</a></h2>
				<p>{{ $showArticle->isi }}</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2015-11-01">{{ $showArticle->tanggal}}</time>
				<a href="#" class="author"><span class="name">{{ $showArticle->author_id }}</span><img src="assets/blog/images/avatar.jpg" alt="" /></a>
			</div>
		</header>
		<a href="#" class="image featured"><img src="assets/blog/images/pic01.jpg" alt="" /></a>
		<p>{{ $showArticle->isi }}</p>
		<footer>
			<ul class="actions">
				<li><a href="#" class="button big">Continue Reading</a></li>
			</ul>
			<ul class="stats">
				<li><a href="#">General</a></li>
				<li><a href="#" class="icon fa-heart">28</a></li>
				<li><a href="#" class="icon fa-comment">128</a></li>
			</ul>
		</footer>
	</article>
	<ul class="actions pagination">
		<li><a href="" class="disabled button big previous">Previous Page</a></li>
		<li><a href="#" class="button big next">Next Page</a></li>
	</ul>

@endforeach
@endsection
