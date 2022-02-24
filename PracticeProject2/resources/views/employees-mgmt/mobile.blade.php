<!DOCTPE html>
<html>
<head>
<title>Mobiles Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>Mobile No</td>

</tr>


@foreach ($mobiles as $mobile)
<tr>
<td>{{ $mobile->id }}</td>
<td>{{ $mobile->mobileNo }}</td>

</tr>
@endforeach
</table>
</body>
</html>