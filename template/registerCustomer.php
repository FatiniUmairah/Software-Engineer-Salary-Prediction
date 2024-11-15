<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Customer | Software Engineer Salary Prediction</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url_for('static', filename='img/favicon.ico') }}" rel="icon">
    <!-- Flaticon Font -->
    <link href="{{ url_for('static', filename='lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ url_for('static', filename='lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url_for('static', filename='lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url_for('static', filename='static/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="registerCustomer.js"></script>
    <link rel="stylesheet" href="loginreg.css">
    <style media="screen">
        *,
  *:before,
  *:after{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
  }
  body{
      background-color: #080710;
  }
  .background{
      width: 430px;
      height: 520px;
      position: absolute;
      transform: translate(-50%,-50%);
      left: 50%;
      top: 50%;
  }
  .background .shape{
      height: 200px;
      width: 200px;
      position: absolute;
      border-radius: 50%;
  }
  .shape:first-child{
      background: linear-gradient(
          #1845ad,
          #23a2f6
      );
      left: -80px;
      top: -80px;
  }
  .shape:last-child{
      background: linear-gradient(
          to right,
          #ff512f,
          #f09819
      );
      right: -30px;
      bottom: -80px;
  }
  form{
      margin-top: 2%;
      height: 520px;
      width: 400px;
      background-color: rgba(255,255,255,0.13);
      position: absolute;
      transform: translate(-50%,-50%);
      top: 50%;
      left: 50%;
      border-radius: 10px;
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255,255,255,0.1);
      box-shadow: 0 0 40px rgba(8,7,16,0.6);
      padding: 50px 35px;
  }
  form *{
      font-family: 'Poppins',sans-serif;
      color: #ffffff;
      letter-spacing: 0.5px;
      outline: none;
      border: none;
  }
  form h3{
      font-size: 32px;
      font-weight: 500;
      line-height: 42px;
      text-align: center;
  }
  
  label{
      display: block;
      margin-top: 30px;
      font-size: 16px;
      font-weight: 500;
  }
  input{
      display: block;
      height: 50px;
      width: 100%;
      background-color: rgba(255,255,255,0.07);
      border-radius: 3px;
      padding: 0 10px;
      margin-top: 8px;
      font-size: 14px;
      font-weight: 300;
  }
  ::placeholder{
      color: #e5e5e5;
  }
  
  
      </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
 
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{ url_for('index') }}" class="nav-item nav-link active">Home</a>
                   
                    <div class="nav-item dropdown">

                        <a href="{{ url_for('login_admin') }}" class="nav-link active dropdown-toggle" data-toggle="dropdown">Login</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ url_for('login_admin') }}" class="dropdown-item">Admin</a>
                            <a href="{{ url_for('login_customer') }}" class="dropdown-item">User</a>
                        </div>
                    </div>
 <!-- <a href="teams.html" class="nav-item nav-link ">Teams Members</a>-->
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <form name="form" method="POST" action="loginCustomer.php"
        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <h3>REGISTER</h3>
        Username: <input type="text" name="OWNER_USER" placeholder="Enter Username"><br>
        Password: <input type="text" name="OWNER_PASS" placeholder="Enter Password"><br>
        Email: <input type="text" name="OWNER_EMAIL" placeholder="Enter Email"><br>
        <input type="submit" name="submit" value="Submit" onclick="return checkForm();">
    </form>

    <script type="text/javascript">
        function checkForm() {
            var username = document.getElementsByName('OWNER_USER')[0].value;
            var password = document.getElementsByName('OWNER_PASS')[0].value;

            if (username === "" || password === "") {
                alert("Please fill in all fields");
                return false;
            }

            // Additional checks if needed

            // Display success message
            alert("You have successfully registered!");

            // Redirect to the login page
            window.location.href = "loginCustomer.php";

            return true;
        }
    </script>
</body>

</html>

