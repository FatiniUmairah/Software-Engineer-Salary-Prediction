<!-- process_login.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["Emp_Username"];
    $password = $_POST["Emp_Pass"];

    // Add your validation logic here
    // For simplicity, let's assume the login is successful
    $isLoginSuccessful = true;

    if ($isLoginSuccessful) {
        // Redirect to SuccessLoginAdmin.php
        header("Location: SuccessLoginUser.php");
        exit();
    } else {
        // If login fails, you may want to redirect back to the login page with an error message
        header("Location: loginCustomer.php?error=1");
        exit();
    }
} else {
    // If someone tries to access this file directly without submitting the form, redirect them to the login page
    header("Location: LoginCustomer.php");
    exit();
}
?>
