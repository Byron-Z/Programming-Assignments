<html>
	<body>
		@foreach ($stories as $story)
		<p>{{ $story->title }}</p>
		<p>{{ $story->story }}</p>
		<p>{{ $story->published }}</p>
		@endforeach
	</body>
</html>