<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php
    
    if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <div class="container">
    <h1>Product Insert</h1>
    
        <form action="store.php" method="POST">
          <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" name="Name">
          </div>
          <div class="form-group">
            <label for="Slug">Slug</label>
            <input type="text" class="form-control" id="Slug" name="Slug">
          </div>
          <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" id="Description" name="Description">
          </div>
          <div class="form-group">
            <label for="Price">Price</label>
            <input type="text" class="form-control" id="Price" name="Price">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  



<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>