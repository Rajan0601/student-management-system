<!DOCTYPE html>
<html>
<head>

<title>Student List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4">Students List</h2>

<a href="/students/create" class="btn btn-primary mb-3">Add New Student</a>
<form method="GET" action="/students" class="mb-3">
    <input type="text" name="search" class="form-control" placeholder="Search student...">
</form>

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
<th>Action</th>

</tr>

</thead>

<tbody>

@foreach($students as $student)

<tr>

<td>{{ $student->id }}</td>
<td>{{ $student->name }}</td>
<td>{{ $student->email }}</td>
<td>{{ $student->course }}</td>

<td>

<a href="/students/{{ $student->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

<form action="/students/{{ $student->id }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">Delete</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

<a href="/" class="btn btn-secondary">Back Home</a>

</div>

</body>
</html>