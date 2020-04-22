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
  <body>
  <?php include 'template/header.php'; ?>
    <!-- delete subject  -->
    <div class="main"> 
<div class= "row">
    <div class= "col">
    
        <hr width ="75%">
                    <h2 style='color:rgb(180, 180, 180);'>Delete Subject Form</h2>
                    <?php 
                    include 'connection.php'; 
                    ?>
                    <table class="table" style='color:rgb(180, 180, 180);'>
                    <thead><tr><th>Item_no</th><th>Class</th><th colspan="2">Action</th></tr></thead>
                    
                    <?php while($row = $result->fetch_assoc()): ?>
                       <tbody> 
                        <tr>
                            <td><?php echo $row['item_no']; ?></td>
                            <td><?php echo $row['object_class']; ?></td>
                            <td>
                            <a href="connection.php?delete=<?php echo $row['item_no'];?>" class="btn btn-dark">Delete</a> </td>
                                                
                    
                        </tr>
                        </tbody>
                        <?php endwhile; ?>
                        
                                            
                    </table>
    
</div>
</div>
</div>

<?php include 'template/footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  

</html>
