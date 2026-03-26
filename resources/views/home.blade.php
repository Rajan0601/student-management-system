@extends('layout')

@section('content')

<h2 class="mb-4">📊 Dashboard</h2>

<div class="row mb-4">

    <div class="col-md-4">
        <div class="card-box bg-blue">
            <h5>Total Students</h5>
            <h2>{{ $totalStudents }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-box bg-green">
            <h5>Courses</h5>
            <h2>{{ $totalCourses }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-box bg-orange">
            <h5>Active Users</h5>
            <h2>{{ $totalStudents }}</h2>
        </div>
    </div>

</div>

<!-- Chart -->
<div class="glass">
    <h4 class="mb-3">Students by Course</h4>
    <canvas id="myChart"></canvas>
</div>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($courses->keys()) !!},
            datasets: [{
                label: 'Students',
                data: {!! json_encode($courses->values()) !!},
                borderWidth: 1
            }]
        }
    });
</script>

@endsection