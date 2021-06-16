<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>

<?php
    include_once("dbh.php");
    include("header.php");
?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST["gender"];

    if ($gender === "male") {
        $g = 0;
    } else if ($gender === "female") {
        $g = 1;
    }


    $sql_insert_author = "INSERT INTO authors(fname, lname, gender) VALUES ('$fname', '$lname', $g);";
    insertIntoDB($connection, $sql_insert_author);
    header('location: posts.php');
}

?>

<body>
    <div class = "wrap-form">
        <div class = "form-div">
            <form method = "POST">
                <hr>
                <h3>First-name:</h3> <input type = "text" name = "fname">
                <h3>Last-name:</h3> <input type = "text" name = "lname">
                <h3>Gender:</h3>
                <input type="radio" name="gender" value="male">
                <label for="male">Male</label><br>
                <input type="radio" name="gender" value="female">
                <label for="female">Female</label><br>
                <button class = "btn-button" type = "submit" name = "submit-author"> Submit </button>
            </form>
        </div>

        <?php
            include("sidebar.php");
        ?>
    </div>
</body>

<?php
    include("footer.php");
?>