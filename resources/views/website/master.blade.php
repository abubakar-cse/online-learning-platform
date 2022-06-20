<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{asset("/")}}website/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset("/")}}website/css/all.css"/>
    <link rel="stylesheet" href="{{asset("/")}}website/css/style.css"/>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
        <div class="container">
            <a href="" class="navbar-brand">MABE_S/W</a>
            <ul class="navbar-nav">
                <li><a href="{{route("home")}}" class="nav-link">Home</a></li>
                <li><a href="{{route("about")}}" class="nav-link">About Us</a></li>
                <li><a href="{{route("course")}}" class="nav-link">Courses</a></li>
                <li><a href="{{route("contact")}}" class="nav-link">Contact</a></li>
                <li><a href="{{route("login-registration")}}" class="nav-link">Login / Registration</a></li>
            </ul>
        </div>
    </nav>

    @yield("content")

    <footer>
        <section class="py-5 bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-body h-100">
                            <h4 class="text-center">Why Choice Us??</h4>
                            <hr/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, vitae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam architecto cum, deserunt dolorem illum itaque iusto maxime non officiis quaerat, quisquam quod ratione rem reprehenderit velit veritatis vitae.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-body h-100">
                            <h4 class="text-center">Popular Course</h4>
                            <hr/>
                            <ul class="navbar-nav">
                                <li><a href="" class="nav-link text-black">Web Development</a></li>
                                <li><a href="" class="nav-link text-black">Web Design</a></li>
                                <li><a href="" class="nav-link text-black">Android Development</a></li>
                                <li><a href="" class="nav-link text-black">Digital Marketing</a></li>
                                <li><a href="" class="nav-link text-black">Master in English</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-body h-100">
                            <h4 class="text-center">Contact with Us</h4>
                            <hr/>
                            <p>
                                House # 420, Road # 120, Dhanmondi, Dhaka-1209 <br/>
                                Email: info@mabe.com <br/>
                                Phone: +880 17705 68579
                            </p>
                            <hr/>
                            <ul class="nav mx-auto">
                                <li><a href="" class="nav-link text-black"><i class="fa-brands fa-2x fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link text-black"><i class="fa-brands fa-2x fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link text-black"><i class="fa-brands fa-2x fa-linkedin-in"></i></a></li>
                                <li><a href="" class="nav-link text-black"><i class="fa-brands fa-2x fa-github-square"></i></a></li>
                                <li><a href="" class="nav-link text-black"><i class="fa-brands fa-2x fa-google-plus-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=" py-2 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center text-white mb-0">Designed & Developed By - MABE_S/W </p>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script src="{{asset("/")}}website/js/jquery-3.6.0.js"></script>
    <script src="{{asset("/")}}website/js/bootstrap.js"></script>
</body>
</html>
