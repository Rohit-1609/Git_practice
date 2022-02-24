<!DOCTPE html>
<html>
<head>
<title>Employees Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>
<td>Designation</td>
<td>Salary</td>

</tr>
@foreach ($employees as $employee)
<tr>
<td>{{ $employee->id }}</td>
<td>{{ $employee->firstname }}</td>
<td>{{ $employee->lastname }}</td>
<td>{{ $employee->email }}</td>
<td>{{ $employee->designation }}</td>
<td>{{ $employee->salary }}</td>
</tr>
@endforeach
</table>
</body>
</html>