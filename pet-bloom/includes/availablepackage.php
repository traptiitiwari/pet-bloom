<div class="container">
<div class="jumbotron">
  <h1 class="display-5 text-center">Add Product</h1>
  <hr class="my-4">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputPassword1">Product name*:</label>
        <input type="text" name="cnpname" required class="form-control" id="exampleInputPassword1" placeholder="Product name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword2">Amount*:</label>
        <input type="number" step="any" class="form-control" name="prize" id="exampleInputPassword2" required placeholder="Amount">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword3">Description*:</label>
        <textarea class="form-control" name="des" required id="exampleInputPassword3" placeholder="Description" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Image*:</label>
        <input type="file" class="form-control-file" name="image" required id="exampleFormControlFile1">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword4">Status*:</label>
        <select class="form-control" id="exampleInputPassword4"name="stat" required>
            <option selected disabled>Select</option>
            <option value="Available">Available</option>
            <option value="Un-Available">Un-Available</option>
          </select>
      </div>
      <button class="btn btn-success" type="submit" name="save">Add Product</button>
  </form>
</div>
</div>

<?php 
include('includes/dbconn.php');
if(isset($_POST['save'])){
			$name = $_POST['cnpname'];
			$prize = $_POST['prize'];
			$des = $_POST['des'];
			$stat = $_POST['stat'];
			 //image
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];
			if(empty($name) || empty($prize) || empty($des) || empty($stat)){
					echo '<script>alert("Fields must be empty.");
								 window.location.href="addcnp.php";
					</script>';
				
				}else {
					$sql = ("INSERT INTO tblcnp VALUES(NULL,'$name','$prize','$des','$location','$stat')") or die (mysql_error());
                    $result=mysqli_query($con, $sql);
					if($result==true){
						echo '<script>alert("Save Successfully!");
									window.location.href="addcnp.php";</script>';}else {
										echo '<script>alert("Sory unable to process your request!");
									window.location.href="addcnp.php";</script>';
										}
						
					}
		}
?>

