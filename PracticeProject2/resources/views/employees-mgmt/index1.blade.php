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
<td>Campany Name</td>
<td>Address</td>
<td>City</td>
<td>State</td>
<td>Country</td>

</tr>
@foreach ($employees as $employee)
<tr>
<td>{{ $employee->id }}</td>
<td>{{ $employee->firstname }}</td>
<td>{{ $employee->lastname }}</td>
<td>{{ $employee->email }}</td>
<td>{{ $employee->designation }}</td>
<td>{{ $employee->salary }}</td>
<td>{{ $employee->company_Name }}</td>
<td>{{ $employee->company_Address }}</td>
<td>{{ $employee->company_City }}</td>
<td>{{ $employee->company_State }}</td>
<td>{{ $employee->company_Country}}</td>
</tr>
@endforeach
</table>
</body>
</html>