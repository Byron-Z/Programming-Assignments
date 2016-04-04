<!doctype	html>
<html	lang="en">
	<head>
		<meta	charset="utf-8"	/>
		<title></title>
		<link	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
			rel="stylesheet"	integrity="sha384-
			1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"	crossorigin="anonymous">
		</head>
		<body>
			<form action="/story/store" method="POST">
				Location:<br>
				<select	name="location_id" class="form-control">
					@foreach ($locations as $location)
					<option	value="{{$location->id}}">{{$location->value}}</option>
					@endforeach
				</select><br>
				Title:<br>
				<input type="text" name="title" placeholder="Title"><br><br>
				Story:<br>
				<textarea class="form-control" rows="3" name="story" type="textarea" placeholder="Story"></textarea><br>
				Published:<br>
				<select	name="published">
					<option	value="True">Yes</option>
					<option	value="False">No</option>
				</select><br><br>
				<input type="submit" value="Submit" class="btn btn-primary btn-lg">
			</form>
			<script	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
			integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
			crossorigin="anonymous"></script>
		</body>
	</html>