<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Partitions</title>
</head>
<body>
	<h1>Partitions</h1>
	@foreach ($partitions as $partition)
		<a href="partitions/telecharger/{{ $partition->fichier }}"> {{ $partition->titre }} ({{ $partition->artiste }})</a><br />
	@endforeach
</body>
</html>



