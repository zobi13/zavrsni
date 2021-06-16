<?php
    include_once("dbh.php");
?>

<div class="blog-post-comments"> 
    <h3>Komentari:</h3>
    <ul>
        
        <?php 
            $commentsql = "SELECT * FROM comments INNER JOIN posts ON comments.post_id=posts.id WHERE post_id = $id";
            $comments = getDataFromDatabase($connection, $commentsql);
            foreach ($comments as $comment) {
                ?>
                <li class="list-comment">
                    <span> Postavio: <strong><?php echo $comment['comment_author']?> </strong></span>
                    <div>
                        <?php echo $comment['text']?>
                    </div>
                    
            
                    </li>
                    <hr>
                <br>
        <?php } ?>
</div>