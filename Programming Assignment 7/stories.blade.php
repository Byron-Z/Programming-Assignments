<html>
	<body>
		@foreach ($stories as $story)
		<p>Story Title: {{ $story->title }}</p>
		<p>Story: {{ $story->story }}</p>
		<ol>Story Tags: 
			@foreach($story->tags as $tag) 
			<li>{{ $tag->value }}</li>
			@endforeach 
		</ol>
		@endforeach
	</body>
</html>