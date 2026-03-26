<!DOCTYPE html>
<html>
<head>
    <title>Student System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            display: flex;
            min-height: 100vh;
            background: #0f172a;
            color: white;
        }

        .sidebar {
            width: 230px;
            background: #020617;
            padding: 20px;
        }

        .sidebar h4 {
            color: #38bdf8;
        }

        .sidebar a {
            display: block;
            color: #94a3b8;
            padding: 10px;
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background: #1e293b;
            color: white;
        }

        .content {
            flex: 1;
            padding: 30px;
        }

        .card-box {
            padding: 25px;
            border-radius: 15px;
            color: white;
            backdrop-filter: blur(10px);
            transition: 0.3s;
        }

        .card-box:hover {
            transform: scale(1.05);
        }

        .bg-blue { background: linear-gradient(135deg, #3b82f6, #1e40af); }
        .bg-green { background: linear-gradient(135deg, #10b981, #065f46); }
        .bg-orange { background: linear-gradient(135deg, #f59e0b, #92400e); }

        .glass {
            background: rgba(255,255,255,0.05);
            border-radius: 15px;
            padding: 20px;
        }
    </style>

</head>

<body>

<div class="sidebar">
    <h4>🎓 StudentSys</h4>

    <a href="/">🏠 Dashboard</a>
    <a href="/students">👨‍🎓 Students</a>
    <a href="/students/create">➕ Add Student</a>
</div>

<div class="content">

    <!-- Toast Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>