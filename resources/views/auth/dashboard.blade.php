<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Student Directory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Student Directory Dashboard</h4>
        </div>

        <div class="card-body">
            <h5>Welcome, {{ Auth::user()->name }}!</h5>

            <p>You have successfully logged in.</p>

            <hr>

            <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Role:</strong> {{ Auth::user()->role }}</p>

            <a href="/students" class="btn btn-primary">View Students</a>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>

</body>
</html>
