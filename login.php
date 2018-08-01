<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Created by PhpStorm.
 * User: anton
 * Date: 7/31/2018
 * Time: 12:16 AM
 */
// put your code here
include './autoload.php';
include 'models/Accounts.php';
include 'models/Util.php';

$util = new Util();
$accounts = new Accounts();

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if ( $util->isPostRequest() ){
    $loginInfo = $accounts->login($username, $password);
    if ( $loginInfo === $username ){
        $_SESSION['username'] = $loginInfo;
        $util->redirect("admin.php");
        echo "test";
    } else {
        echo "please try again";
    }

}

include './views/login.html.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="css/register_css.css">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Google Fonts -->


</head>
<body>















<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>


