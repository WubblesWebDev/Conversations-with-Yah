<?php
	$state = [
		'current' => 'posts'
	];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CwY Posts</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="body-bg">
            <?php include "includes/header.html.php" ?>
            <div class="container posts">
                 <?php include "includes/postingclass.php"?>
                    <div class="box">
                        <form action="CyWPosts.php" method="get" class="new-post">
                            <i>Enter the title you would like to name your post:</i>
                              <input type="text" name="title" id="post-title">
                            <i>Please enter your username:</i>
                              <input type="text" name="userId" id="author">
                            <i>Write your post:</i> <br>
                              <input type="textbox" name="postBody" id="newPost">
                          <input type="submit" value="Post">
                        </form>
                    </div>
                <section class="post">
                    <div class="box">                            
                        <h3>This is a post</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam earum voluptas molestiae repellat ullam sint necessitatibus, omnis dolor fugit sapiente! Commodi expedita aliquam voluptas iste aperiam accusantium nostrum veniam consequuntur?</p>
                    </div>
                </section>
            </div>
            <?php include "includes/footer.html"?>
        </div> <!-- end of body-background -->
    </body>
</html>