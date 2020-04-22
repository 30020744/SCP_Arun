
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <?php include 'template/header.php'; ?>
  </head>
  <style> 
body {
        font-family: sans-serif;
		background:url("images/1iSItF.jpg")no-repeat;		
		background-size: cover;
        background-attachment: fixed;
		
	}
    .main {
  margin-top: 0px;
  margin-left:60px;
  margin-right:30px;
 
}
    </style>
  <body class="container"> 
    

     <div class="main">  
    <div class="row" style="background-color:rgb(120, 120, 120)">
        <div  class="col">
        <h1 style='color:rgb(60, 60, 60);' >Enter new SCP Subject Form</h1>
        <form name="insert" method="POST" action="connection.php" class="form-group" enctype="multipart/form-data">
            <label>Enter Subject Number</label>
            <br>
            <input type="text" name="item_no" class="form-control" placeholder="Use the following format SCP-###" required>
            <br>
            <label>Enter Subject Class Type</label>
            <br>
            <input type="text" name="object_class" class="form-control" placeholder="Class types: Euclid, Safe, Keter, Thaumiel, Neutralized" required>
            <br>            
            <label>Enter link to subject image (if any available)</label>
            <br>
            <input type="file" name="fileToUpload"  class="form-control">
            <br> 
            <br>
            <label>Enter Containment Procedures </label>
            <br>
            <textarea name="procedures" rows="10" class="form-control" requried>Separate Paragraphs with \n</textarea>
            <br>
            <br>
            <label>Enter Subject Description</label>
            <br>
            <textarea name="description" rows="10" class="form-control" required>Separate Paragraphs with \n</textarea>
            <br>
            <br>
            <label>Enter Subject Reference</label>
            <br>
            <textarea name="reference" rows="10" class="form-control" ></textarea>
            <br>         
            <br>
            <input type="submit" class="btn btn-dark" name="submit" value="Submit Subject Data">
            </form>
        </div>
    </div>
    </div>
   <hr width="100%">
   <?php include 'template/footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Display DATA entry form below -->
</body>
</html>