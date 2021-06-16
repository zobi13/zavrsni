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

<body>

<?php include('header.php')?>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

        <?php 
            include_once('dbh.php');
            if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
                $id = $_POST["post_id"];
                $author = $_POST["author"];
                $text = $_POST["text"];
                $newComment = "INSERT INTO comments(post_id, comment_author, text) VALUES($id, '$author', '$text');";
                insertIntoDB($connection, $newComment);
                if($_POST['text'] != '' && $_POST['author'] != '') {
                    $newComment = "INSERT INTO comments(post_id, comment_author, text) VALUES($id, '$author', '$text');";
                    insertIntoDB($connection, $newComment);
                }

            } 
            else {

                $id = $_GET['post_id'];
            }
            $sql = "SELECT * FROM posts WHERE id = $id";
            $post = getSinglePostData($connection, $sql);

        ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><a href='single-post.php&'><?php echo $post['title'];?></a></h2>
                <p class="blog-post-meta"><?php echo $post['created_at']?> by <a href="#"><?php echo $post['author']?></a></p>

                <p><?php echo $post['body']?></p>
            </div><!-- /.blog-post -->


            <br><br><br>
            <?php include('comments.php'); ?>



        </div><!-- /.blog-main -->

        <?php include('sidebar.php'); ?>

    </div><!-- /.row -->

</main><!-- /.container -->

<?php include('footer.php'); ?>
</body>
</html>