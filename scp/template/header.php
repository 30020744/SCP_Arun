<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SCP - Subject Files </title>
  </head>
  <body class="container">
  

  <?php include 'connection.php'; ?>
  
<!-- menu row -->
    <div class="row">

        <div  class="col">

          <ul class="nav navbar-dark bg-dark">  
            
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                <img src="images/logoscp.png" height="50" weight="50">
                </a>
                </li>

             <?php foreach($result as $menu_item): ?>
              

                <li class="nav-item active">
                    <a class="nav-link" href="index.php?subject='<?php echo $menu_item['item_no']; ?>'">
                    <?php echo $menu_item['item_no']; ?>
                    </a>
                </li>

              <?php endforeach; ?>

              <li class="nav-item active">
                    <a class="nav-link" href="insert.php">
                    ENTER NEW SUBJECT
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="delete.php">
                    DELETE SUBJECT
                    </a>
                </li>

            
         </ul>
            <hr width="100%">
        </div>
    </div>