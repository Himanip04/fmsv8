<?php session_start();
    // require 'connectDB.php';
    $con = new mysqli('localhost', 'root', '', 'fms');
		
    $session = $_POST['session'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE USER_ID = '$username' AND PASSWORD = '$password';";
    $result = $con->query($sql);
    
    if (mysql_num_rows($result) != 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $row['FIRST_NAME'] . ' ' . $row['LAST_NAME'];
        $_SESSION['sessionId'] = $session;
        $_SESSION['thumbnail'] = $row['THUMBNAIL'];
        $_SESSION['userid'] = $row['USER_ID'];

        $result = $con->query("SELECT USER_TYPE FROM users, user_status WHERE users.USER_STATUS_ID = user_status.USER_STATUS_ID AND USER_ID = '$username';");
        
        $row = $result->fetch_assoc();

        $_SESSION['userstatus'] = $row['USER_TYPE'];

        if ($row['USER_TYPE'] == 'ADMIN') {
            $page = '../admin/index.php';
        }
        elseif ($row['USER_TYPE'] == 'MANAGEMENT') {
            $page = '../management/index.php';
        }
        elseif ($row['USER_TYPE'] == 'ACCOUNTS') {
            $page = '../accounts/index.php';
        }
    }
    else {
        $_SESSION['signinerror'] = 'Incorrect username or password.';
        $page = '../home page.php';
    }
    header("Location: $page");