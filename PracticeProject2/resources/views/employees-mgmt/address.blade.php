<!DOCTPE html>
<html>
<head>
<title>Address Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>Name</td>

</tr>
@foreach ($addresses as $address)
<tr>
<td>{{ $address->id }}</td>
<td>{{ $address->name }}</td>

</tr>
@endforeach
</table>
</body>
</html>