<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <!-- Header -->
    <header class="bg-primary text-white py-3">
        <h2 class="sms">STUDENT MANAGEMENT SYSTEM</h2>
        <h6 class="logout"><a href="{{ route('logout') }}" class="text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off" aria-hidden="true"></i>&nbsp;Logout</a></h6>
    </header>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- Sidebar and Content Container -->
    <div class="container-fluid">
        <div class="row">
           

            <!-- Sidebar -->
            <aside class="col-md-3 col-lg-2 bg-light p-3  d-md-block">
                <ul class="nav flex-column">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Manage Students
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="studentDropdown">
                            <li><a class="dropdown-item" href="{{ route('student') }}">Add Student</a></li>
                            <li><a class="dropdown-item" href="{{ route('studentsList') }}">List Students</a></li>
                            
                        </ul>
                    </li>
                    
                </ul>
            </aside>

            <!-- Content Area -->
            <main class="col-md-9 col-lg-10 p-3">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-auto">
        <p>&copy; 2024 Student Management System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
