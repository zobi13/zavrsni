<!DOCTYPE html>
<html>

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
    include("header.php");
    include('dbh.php');
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errMessage='';
        if (isset($_POST['title']) && !empty($_POST['title'])) {
          $title = $_POST['title'];
        } else {
          $errMessage = "*Title is required!";
          // header("Location: create-post.php");
        }
        if (isset($_POST['body']) && !empty($_POST['body'])) {
          $body = $_POST['body'];
        } else {
          $errMessage = "*Text is required!";
          // header("Location: create-post.php");
        }
        if (isset($_POST['author']) && !empty($_POST['author'])) {
          $author = $_POST['author'];
        } else {
          $errMessage = "*Author is required!";
          // header("Location: create-post.php");
        }
        $sql = "INSERT INTO posts (title, body, author) VALUES ('$title', '$body', '$author')";
        if ($errMessage === "") {
          insertIntoDB($connection, $sql);
          header('location: posts.php');
        }
        $sql = "INSERT INTO posts (title, body, author) VALUES ('$title', '$body', '$author')";
    }
?>

<body class="va-l-page va-l-page--single">
  <main role="main" class="container">
    <div class="row">
      <div class="col-sm-8 blog-main">
        <form method="POST" action="create-post.php">

            <h3>Title:</h3>
            <input type="text" name="title">

            <h3>Content:</h3>
            <textarea name="body"></textarea>

            <h3>Author:</h3>
            <input name="author" type="text"> <br> <br>

            <button class="btn-button" type="submit" name="submit">Submit</button> <br><br><br><br>
            <p class="error-msg"> <?php echo($errMessage."<br>"); ?> </p>
        </form>
      </div>
      <?php
      include('sidebar.php');
      ?>
    </div>
  </main><!-- /.container -->
  <?php
  include('footer.php');
  ?>
</body>

</html>