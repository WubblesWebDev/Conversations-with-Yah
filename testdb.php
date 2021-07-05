<?php 
  include_once 'includes/db/database.php';
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>testing my db</title>
</head>
<body>
  <?php 
    $sql = "SELECT * FROM posts;";
    $results = mysqli_query($conn, $sql);
    $resultsCheck = mysqli_num_rows($results);
    
    if ($resultsCheck > 1){
      while ($row = mysqli_fetch_assoc($results)){
        echo $row['post-title'];
        echo '<hr>';
        echo $row['con-post'];
      }
    }
  ?>
</body>
</html>