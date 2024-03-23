<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the LRN and password are provided
    if (isset($_POST['student_lrn']) && isset($_POST['password'])) {
        // Retrieve LRN and password from the form
        $student_lrn = $_POST['student_lrn'];
        $password = $_POST['password'];

        // Check if the LRN and password match the admin credentials
        if ($student_lrn == 'admin' && $password == 'admin') {
            // Redirect to the dashboard for admin
            header('Location: dashboard.php');
            exit;
        } else {
            // Redirect to the error page for wrong credentials
            header('Location: error.php');
            exit;
        }
    } else {
        // Redirect to the error page as LRN or password is missing
        header('Location: error.php');
        exit;
    }
}
?>
