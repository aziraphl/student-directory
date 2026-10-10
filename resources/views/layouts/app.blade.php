// Angel Delmo

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Student Directory')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f8;
            color: #333;
        }

        header {
            background: #1f2937;
            color: white;
            padding: 25px;
        }

        header h1 {
            margin: 0;
        }

        nav {
            background: #111827;
            padding: 15px 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 25px;
            font-weight: bold;
        }

        nav a:hover {
            color: #60a5fa;
        }

        main {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        footer {
            background: #1f2937;
            color: white;
            text-align: center;
            padding: 18px;
            margin-top: 40px;
        }

        @media (max-width: 600px) {
            nav a {
                display: block;
                margin-bottom: 10px;
            }

            main {
                padding: 0 10px;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>RMMC Student Directory</h1>
        <p>Student Services</p>
    </header>

    <nav>
        <a href="{{ route('students.index') }}">Students</a>
        <a href="{{ route('students.create') }}">Register Student</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>RMMC Student Services</p>
    </footer>

</body>
</html>