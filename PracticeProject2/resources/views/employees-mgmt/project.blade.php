<!DOCTPE html>
<html>
<head>
<title>Project Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>Name</td>

</tr>
@foreach ($projects as $project)
<tr>
<td>{{ $project->id }}</td>
<td>{{ $project->name }}</td>

</tr>
@endforeach
</table>
</body>
</html>