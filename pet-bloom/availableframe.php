<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="images/icon.png" rel="shortcut icon">
<title>Petty Paws</title>
	
  <!-- core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/datepicker.css">


<!--*********************************************START OF NAVIGATION BAR****************************************--> 
      
			
<div class="row row-cols-1 row-cols-md-3" style="margin-left: 0; margin-right: 0;">


    <?php include('includes/dbconn.php');
  $count = 0;
  $id = 0;
  $sql = "SELECT * FROM tblcnp WHERE status = 'available' order by id desc" or die (mysqli_error($con));
  
  $result=mysqli_query($con, $sql) or die (mysqli_error($con));
  
  if(mysqli_num_rows($result)>=0){
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $count++;
  ?>

<div class="col mb-4">
    <div class="card card-cascade card-cascade-narrower mb-5">
      <img src="<?php echo $row['image'];?>" width="120px;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center"><u><?php echo $row['name'];?></u></h5>
        <p class="card-text"><?php echo $row['description'];?></p>
        <h5>Price:- <strong><?php echo $row['prize'];?></strong></h5>
      <a class="btn btn-block" style="border-radius: 0; background-color: black; color: white;" name="order" type="button" style="margin-top:25px;" data-toggle="modal" data-target="#orderModal<?php echo $id;?>"> Add to Cart</a>
      </div>
    </div>
  </div>


  <div class="modal fade mt-0" style="max-width: 100%;" id="orderModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title w-100 text-center" id="exampleModalLabel">CUSTOMER INFORMATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form class="w-100 text-center" action="" enctype="multipart/form-data" method="post" action="">
        <div class="form-group ">
          <label for="exampleInputText1">Name*</label>
          <input type="text" class="form-control" id="exampleInputText1" name="name" placeholder="Your name" required>
          <input type="hidden" class="form-control" id="fooddid" name="foodid"  value="<?php echo $id;?>" required>
        </div>
        <div class="form-group">
          <label for="exampleInputText2">Address*</label>
          <textarea name="address" id="exampleInputText2" class="form-control" required placeholder="Address"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputText3">Contact*</label>
          <input type="text" name="contact" id="exampleInputText3" class="form-control" required placeholder="Your number">
        </div>
        <div class="form-group">
          <label for="exampleInputText4">Quantity*</label>
          <input type="number" name="oqty" class="form-control" id="exampleInputText4" required placeholder="0">
        </div>
        <div class="form-group">
          <label for="exampleInputText5">Order Type*</label>
          <select name="otype" class="form-control" id="exampleInputTex5" required>
            <option disabled>Select</option>
            <option value="Deliver">Deliver</option>
            <option value="Pick-up">Pick-up</option>
          </select>
        </div>
        <div class="form-group" id="datepickup">
        <label for="date-pick">Date Pick up*</label>
        <input type="date" id="date-pick" name="datep" class="form-control" />
        </div>
        <div class="">
          <button type="submit" class="btn btn-primary" name="savechanges"><i class="glyphicon glyphicon-thumbs-up"></i> Order</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

 <?php }}

 else {echo '<strong style="color:red">No availables data in server</strong>'; } 

 ?>
</div>
            
         
 
<?php include('includes/dbconn.php');
if(isset($_POST['savechanges'])){
		$id = $_POST['foodid'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$qty = $_POST['oqty'];
		$otype = $_POST['otype'];
		$datep = $_POST['datep'];


		$sql =("SELECT * FROM tblorders WHERE cname = '$name'") or die (mysqli_error());
    $result=mysqli_query($con, $sql);
			if(mysqli_num_rows($result)==5){
					echo '<script>alert("You reach maximum order of 5");
								window.loaction.href="availableframe.php";</script>';
				}
				else{
				$sql = ("INSERT INTO tblorders VALUES(NULL,'$name','$address','$contact','$id','$qty','new',NULL,'$otype','$datep')") or die (mysqli_error());
        $result=mysqli_query($con, $sql);
        if($result==true){
          echo '<script>alert("Your order will be process.The system will follow up by contacting your number thankyou!");
            window.location.href="availableframe.php"</script>';}
            else{
              echo '<script>alert("Sorry unable to process your request. please try again later!");
              window.location.href="availableframe.php"</script>';
            }
    	}	}
?>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


 <script type="text/javascript">
    $("#datepickup").hide();
    

   $(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="Pick-up"){           
                $("#datepickup").show(200);            
            }
            else{
                $("#datepickup").hide();         
            }
        });
    }).change();
    });
  </script>
