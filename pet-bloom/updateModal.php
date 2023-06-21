<!-- Modal -->
<div class="modal fade" id="updateModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Update Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <form class="form-horizontal w-100 text-center" enctype="multipart/form-data" method="post" action="">

            <div class="modal-body">
				<div class="form-group">
				<label for="exampleInputPassword1">Product name*:</label>
				<input type="text" name="name" required class="form-control" id="exampleInputPassword1" value="<?php echo $name; ?>">
				<input type="hidden" class="form-control" id="fdid" name="fdid" value="<?php echo $id;?>" >
				</div>
				<div class="form-group">
				<label for="exampleInputPassword2">Amount*:</label>
				<input type="number" step="any" class="form-control" name="prize" id="exampleInputPassword2" value="<?php echo $prize;?>">
				</div>
				<div class="form-group">
				<label for="exampleInputPassword3">Description*:</label>
				<textarea class="form-control" name="des" id="exampleInputPassword3" rows="2"><?php echo $des; ?></textarea>
				</div>
				<div class="form-group">
				<label for="exampleFormControlFile1">Image*:</label>
				<img src="<?php echo $image;?>" width="120px;" class="img-responsive img-rounded" style="margin-bottom:5px;">
				<input type="file" class="form-control-file" id="image" name="image">
				</div>
				<div class="form-group">
				<label for="exampleInputPassword4">Status*:</label>
				<select class="form-control" id="exampleInputPassword4"name="stat" required>
				<option selected value="<?php echo $stat;?>"><?php echo $stat;?></option>
				<option value="Available">Available</option>
				<option value="Un-Available">Un-Available</option>
				</select>
				</div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-info" name="savechanges">Save changes</button>	
				</div>
            </form>
        </div>
    </div>
</div>
<?php include('includes/dbconn.php');
if(isset($_POST['savechanges'])){
		$id = $_POST['fdid'];
		$name = $_POST['name'];
		$des = $_POST['des'];
		$stat = $_POST['stat'];
		$prize = $_POST['prize'];
		
		//image
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
		move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
		$location = "upload/" . $_FILES["image"]["name"];
								
		$sql = ("UPDATE tblcnp set name = '$name',
		description = '$des',
		status = '$stat',
		prize = '$prize',
		image = '$location' WHERE id = '$id'") or die (mysqli_error());
        $result=mysqli_query($con, $sql);
		if($result==true){
			echo '<script>alert("Update successfully!");
				  window.location.href="update_cnp.php"</script>';
			}
			else{
				echo '<script>alert("Sorry unable to process your request!");
					  window.location.href="update_cnp.php"</script>';
			}
	
	
	}
	mysqli_close($con);
	?>