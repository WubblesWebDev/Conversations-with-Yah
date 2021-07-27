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
                    <div class="box">
                        <form action="CyWPosts.php" method="post" class="new-post">
                            <h3>Create New Post</h3>
                              <input type="text" name="title" size="40" value="Title">
                              <br>
                              <br> 
                              <textarea name="post" id="" cols="100" rows="20">Write your post here</textarea>
                              <br>
                          <input type="submit" value="Post">
                        </form>
                    </div>
                <section class="post">
                    <div class="box">                            
                        <h3>This is not yet a post</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam earum voluptas molestiae repellat ullam sint necessitatibus, omnis dolor fugit sapiente! Commodi expedita aliquam voluptas iste aperiam accusantium nostrum veniam consequuntur?</p>
                    </div>
                </section>
            </div>
            <?php include "includes/footer.html"?>
        </div> <!-- end of body-background -->
    </body>
</html>