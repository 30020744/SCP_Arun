<?php

    // Create Database credential variables
    $user = "a3002074_arun";
    $password = "9496621963@arun";
    $db = "a3002074_scp";

    // Create php db connection object
    $connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));

    // Get all data from the table and save in a variable for use on our page application
    $result = $connection->query("select * from subject") or die($connection->error);

    
    // Check if form has been filled out by checking POST value, then insert form contents into database.
    if(isset($_POST['item_no']))
    {
        // save all $_POST values from form into separate variables
        $item_no = $_POST['item_no'];
        $object_class = $_POST['object_class'];        
        $description = addslashes($_POST['description']);
        $procedures =  addslashes($_POST['procedures']);
        $reference = addslashes($_POST['reference']);
        $check= $_FILES['fileToUpload']['name'];
        $subject_image="";
        
        //uploading image into the cpanel directory
        if($check){
            $target_dir = "images/";
            $subject_image = $target_dir . basename($_FILES["fileToUpload"]["name"]);             
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $subject_image)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file. $check";
            }

        }
        // create insert command
        $sql = "insert into subject(item_no, object_class, subject_image, description, procedures,reference) values('$item_no', '$object_class', '$subject_image', '$description', '$procedures','$reference')";

            if ($connection->query($sql) === TRUE) {
                echo "<script>location='message.php' </script>";
               } 
               else 
               {
                   include 'template/insert_header.php';
                   echo "<h1>Error creating record: {$connection->error}</h1>
                   <p><a href='insert.php' class='btn btn-warning'>Back to form</a></p>";
                   include 'template/footer.php';
               }

    } 
    if(isset($_GET['delete']))
        {
           
            $id =$_GET['delete'];
            $delete_sql = $connection->query("delete from subject where item_no='$id'") or die($connection->error);
                                                                             
            // redirect back to delete.php
            header("Location: delete.php");
            
        
        }
   

?>