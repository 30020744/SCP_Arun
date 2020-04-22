<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<style> 

body {
    font-family: sans-serif;
		background:url("images/1iSItF.jpg")no-repeat;		
		background-size: cover ;
		background-attachment: fixed;	
	}
    .main {
  margin-top: 0px;
  margin-left:60px;
  margin-right:30px;
 
}

</style>
<body background="images/1iSItF.jpg" background-size= "cover" 
		background-attachment= "fixed" background-repeat="no-repeat">

<!-- include header.php this contains html code above our main content -->
<?php include 'template/header.php'; ?>
<!-- Display record in div below -->
    <div class="row" style="background-color:rgb(120, 120, 120)" >
        <div  class="col">
        <div class="main">
        <?php
        // check if the subject get value exits
        if(isset($_GET['subject']))
        {
            // remove single quotes from subject get value
            $item_number = trim($_GET['subject'], "'");

            // run sql command to select record based on get value
            $record = $connection->query("select * from subject where item_no='$item_number'") or die($connection->error());

            // convert $record into an array for us to echo out on screen
            $row = $record->fetch_assoc();
            
            // create variables that hold data from db fields
            $item = $row['item_no'];
            $object_class = $row['object_class'];
            $procedures = $row['procedures'];
            $description = $row['description'];
            $subject_image = $row['subject_image'];
            $reference =$row['reference'];
            // strip out \n and replace with linebreaks
            $procedures = str_replace('\n', '<br><br>', $procedures);
            $description = str_replace('\n', '<br><br>', $description);
            $reference = str_replace('\n', '<br><br>', $reference);
            // if subject does not have an image
            
                            echo "<h1 style='color:rgb(0, 0, 0)'>SCP Subject Database</h1>
                            <h2 style='color:rgb(0, 0, 0)'>Item_#: {$item}</h2>
                            <h3 style='color:rgb(0, 0, 0)'>Class: {$object_class}</h3>";
                            if(!empty($subject_image))
                            {
                            echo "<p><img src='$subject_image'></p>";
                            }
                            echo "<h3 style='color:rgb(0, 0, 0)'>Description</h3>
                            <p style='color:rgb(0, 0, 0)'>{$description}</p>
                            <h3 style='color:rgb(0, 0, 0)'>Procedures</h3>
                            <p style='color:rgb(0, 0, 0)'>{$procedures}</p>";
                            if(!empty($reference)){
                             echo "<h3 style='color:rgb(0, 0, 0)'>Reference</h3>
                              <p style='color:rgb(0, 0, 0)'>{$reference}</p>";
                            }
                
           
            
        }
       else
        {
          // if this is the first time index.php is accessed, display the content below
          
          echo "<h1 style='color:rgb(0, 0, 0)'>SCP Subject Database</h1>
              <p class='text-center' style='color:rgb(0, 0, 0)'>Welcome Agent, use the links above to view subject files or enter/delete subject data</p>
              <p><img src='images/scp_logo.jpg' width= '1000' height ='1900'class='img-fluid rounded mx-auto d-block'></p>";
              
        }
        ?>
        </div>
    </div>
    </div>

    <?php include 'template/footer.php'; ?>
    </body>
</html>
