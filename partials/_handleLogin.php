<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];
    $sql = "SELECT * FROM users WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);

    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['user_pass'])) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user_email'] = $email;
            header("Location: /forum/index.php");
            exit();
        } else {
            header("Location: /forum/index.php?loginsuccess=false&error=Invalid+credentials");
            exit();
        }
    } else {
        header("Location: /forum/index.php?loginsuccess=false&error=User+not+found");
        exit();
    }
}
?>
