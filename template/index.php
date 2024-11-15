<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>SOFTWARE ENGINEERING SALARY PREDICTION SYSTEM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='static/css/style.css') }}">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ url_for('static', filename='img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{ url_for('static', filename='lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url_for('static', filename='lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url_for('static', filename='lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url_for('static', filename='css/style.css') }}" rel="stylesheet">
</head>

<body>
    

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
 
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <!-- Update this line -->
                    <a href="{{ url_for('index') }}" class="nav-item nav-link active">Home</a>
                    
                  
                    <div class="nav-item dropdown">

                        <a href="{{ url_for('login_admin') }}" class="nav-link active dropdown-toggle" data-toggle="dropdown">Login</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ url_for('login_admin') }}" class="dropdown-item">Admin</a>
                            <a href="{{ url_for('login_customer') }}" class="dropdown-item">User</a>
                        </div>

                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->

    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="w-100" src="{{ url_for('static', filename='img/background1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!--<h3 class="text-white mb-3 d-none d-sm-block">WELCOME TO SOFTWARE ENGINEER CENTER</h3>-->
                            <h1 class="display-3 text-white mb-3">PREDICT YOUR SALARY HERE</h1>
                           <h5 class="text-white mb-3 d-none d-sm-block">SOFTWARE ENGINEER CENTER </h5>
                            <!--<a href="loginCustomer.php" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>-->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                   
                <img class="w-100" src="{{ url_for('static', filename='img/background2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                           <!-- <h3 class="text-white mb-3 d-none d-sm-block">Klinik Veterinar Dr Hawa</h3>-->
                            <h1 class="display-3 text-white mb-3">Looking for job? </h1>
                            <h1 class="text-white mb-3 d-none d-sm-block">FIND YOUR JOB WITH US</h1>
                            <!--<a href="loginCustomer.php" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>-->
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>