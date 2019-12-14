
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
include_once ('../vendor/autoload.php');
use weDeves\Product\Product;
$obj = new Product();
$data = $obj->index();
?>

<?php
if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<div class="container">

    <?php
    if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
	<h1 class="text-center mt-3">List of Product</h1>
	<table class="table table-striped table-bordered mt-4">
	    <tr>
	        <th>Name</th>
	        <th>Slug</th>
	        <th>Description</th>
	        <th>Price</th>
	        <th colspan="2">Action</th>
	    </tr>
	    <?php
	        foreach ($data as $item){ ?>
	            <tr>
	                <td><?php echo ($item['Name']); ?></td>
	                <td><?php echo ($item['Slug']); ?></td>
	                <td><?php echo ($item['Description']); ?></td>
	                <td><?php echo ($item['Price']); ?></td>
	                <td><a href="edit.php?Id=<?php echo $item['Id']; ?>">Edit</a></td>
	                <td><a href="delete.php?Id=<?php echo $item['Id']; ?>">Delete</a></td>
	            </tr>
	    <?php } ?>
	</table>
<a href="create.php">Add New</a>
</div>
