<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Bootstrap CSS -->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


     <!-- Custom CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .card {
            border-radius: 15px;
            transition: transform 0.2s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .sidebar .menu-links li a:hover, .sidebar .menu-links li a.active {
            background-color: #0E73DB;
            color: #fff;
        }

        .sidebar .bottom-content li a:hover {
            background-color: #0E73DB;
            color: #fff;
        }

        .dark-mode .sidebar .menu-links li a:hover, .dark-mode .sidebar .menu-links li a.active {
            background-color: #EDB50D;
            color: #fff;
        }

        .dark-mode .sidebar .bottom-content li a:hover {
            background-color: #EDB50D;
            color: #fff;
        }
    </style>

    
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="light-mode">
        <div class="margin">
            <nav class="sidebar close">
                <header>
                    <div class="image-text">

                        <div class="text logo-text">
                            <span class="name">Sales Management</span>
                        </div>
                    </div>

                    <i class='bx bx-chevron-right toggle'></i>
                </header>

                <div class="menu-bar">
                    <div class="menu">
                        <li class="search-box">
                            <i class='bx bx-search icon'></i>
                            <input type="text" placeholder="Search...">
                        </li>

                        <ul class="menu-links">
                            <li class="nav-lik">
                                <a href="{{ route('home') }}">
                                    <i class='bx bx-home-alt icon' ></i>
                                    <span class="text nav-text">Home</span>
                                </a>
                            </li>

                            <li class="nav-lik">
                                <a href="{{ route('products.index') }}">
                                <i class='bx bx-package icon'> </i>
                                    <span class="text nav-text">Products</span>
                                </a>
                            </li>

                            <li class="nav-lik">
                                <a href="{{ route('customers.index') }}">
                                <i class='bx bx-user icon'></i>
                                    <span class="text nav-text">Customers</span>
                                </a>
                            </li>

                            <li class="nav-lik">
                                <a href="{{route('report.index')}}">
                                    <i class='bx bx-file icon'></i>
                                    <span class="text nav-text">Report</span>
                                </a>
                            </li>
                            

                            <li class="nav-lik">
                                <a href="#">
                                    <i class='bx bx-heart icon' ></i>
                                    <span class="text nav-text">Likes</span>
                                </a>
                            </li>

                            <li class="nav-lik">
                                <a href="{{ route('settings') }}">
                                    <i class='bx bx-cog icon'></i> 
                                    <span class="text nav-text">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="bottom-content">
                        <li class="">
                            <a href="#">
                                <i class='bx bx-log-out icon' ></i>
                                <span class="text nav-text">Logout</span>
                            </a>
                        </li>

                        <li class="mode">
                            <div class="sun-moon">
                                <i class='bx bx-moon icon moon'></i>
                                <i class='bx bx-sun icon sun'></i>
                            </div>
                            <span class="mode-text text">Dark mode</span>

                            <div class="toggle-switch">
                                <span class="switch"></span>
                            </div>
                        </li>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- JavaScript to Handle Sidebar Toggle and Dark Mode -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        });

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");
            
            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";
            }
        });

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark-mode");
            body.classList.toggle("light-mode");

            if (body.classList.contains("dark-mode")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";
            }
        });

    </script>

</body>
</html>
