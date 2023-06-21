<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/icon.png" rel="shortcut icon">
    <title>Petty Paws</title>
    
    <!-- core CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css" />

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
</head><!--/head-->
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-custom navbar-mainbg sticky-top">
      <div class="container">
        <a class="navbar-brand navbar-logo" id="link-hover" href="index.php"
          ><strong>Pety <i class="fas fa-spin fa-paw"></i> Paws Admin Panel</strong></a
        >
        <button
          class="navbar-toggler"
          type="button"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <div class="hori-selector">
              <div class="left"></div>
              <div class="right"></div>
            </div>
            <li class="nav-item active">
              <a class="nav-link" href="index.php"
                ><strong>Orders</strong></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="addcnp.php"
                ><strong> Add Product</strong></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="update_cnp.php"
                ><strong> Update Product</strong></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" 
              id="logoutbtn" 
              href='<?php echo "logout_process.php?logout=1"?>'
                ><strong><i class="fas fa-sign-out-alt"></i>Logout</strong></a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br>

<div class="container">

    <div class="row">
        <div class="col-sm-4 mt-3 text-center">
        <form id="formFilter" name="formFilter" action="admin_reservefilter.php" method="POST" class="">       
        <div class="form-horizontal wow fadeInDown">            
        <h5>View Records</h5>
          <select name="filter" id="filter" class="form-control">
              <option value="New">New</option>
              <option value="cancel">Cancel</option>
              <option value="completed">Completed</option>
          </select>
        </div>
    </form>
        </div>
        <div class="col-sm-4 mt-3 text-center">
            <a href="" onClick="window.print();return false" class="btn btn-info pull-right hidden-print wow fadeInDown"><i class="fas fa-print"></i> Print</a>
        </div>
        <div class="col-sm-4 mt-3 text-center">
            <a href="index.php" class="btn btn-success pull-right hidden-print wow fadeInDown" style="margin-right:10px;"><i class="fas fa-sync-alt"></i> Refresh</a>
        </div>
    </div>
    <br>
    <br>
<div class="table-responsive">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Status</th>
      <th scope="col">From</th>
      <th scope="col">Product</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody id="tablebody">
  <?php include('includes/dbconn.php');



$stat = 'new';
$total = 0;
$sql = ("SELECT tblcnp.*,tblorders.* 
FROM tblorders LEFT JOIN 
tblcnp ON tblorders.cnpoid = tblcnp.id WHERE tblorders.ostatus = 'New' order by tblorders.id LIMIT 0,30 ") or die (mysqli_error());

$result=mysqli_query($con, $sql);
 if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_assoc($result)){
         $total = $row['prize'] * $row['oqty'];?>


    <tr>
      <th scope="row"><a href="#viewModal<?php echo $row['id']?>" data-toggle="modal" data-target="#viewModal<?php echo $row['id']?>" class="btn btn-outline-secondary"><i class="fas fa-search"></i> View</a></th>
      <td><?php echo $row['cname'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['address'];?></td>
      <td><?php echo $row['contact'];?></td>
      <td><?php echo $row['timestamp'];?></td>
    </tr>
                   <!-- Modal -->
<div class="modal fade" id="viewModal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title w-100 text-center">Order Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </div>
      <form method="post" action="">
      <div class="modal-body" id="div1">
        <input type="hidden" name="fdid" value="<?php echo $row['id']?>">
            <h4><strong><u>Order Details:</u></strong></h4>
             <p><?php echo $row['name'].' ';?></p>
            <h5>Description:</h5> <p><?php echo $row['description'];?></p>
            <h5>Price:</h5> <p><?php echo 'Rs. '.$row['prize'];?></p>
            <h5>Quantity:</h5> <p><?php echo $row['oqty'];?></p>
            <h5>Total:</h5> <p><?php echo 'Shs. '.number_format($total,2,'.',',');?></p>
            <hr style="border-top: 1px dashed #8c8b8b;
	border-bottom: 1px dashed #fff;">
    		<h4 ><b><u>Customer Details:</u></b></h4>
            <h5>Ordered by:</h5> <p><?php echo $row['cname'].' ';?></p>
            <h5>Ordered Type:</h5> <p><?php echo $row['otype'].' ';?></p>
            <h5>Date Pick-up:</h5> <p><?php echo $row['datepickup'].' ';?></p>
            <h5>Date Order:</h5> <p><?php echo $row['timestamp'];?></p>
            <h5>Address:</h5> <p><?php echo $row['address'];?></p>
            <h5>Contact:</h5> <p><?php echo $row['contact'];?></p>
            <h5>Status:</h5> <p><?php echo $row['ostatus'];?></p>
        </dl>
  
      </div>
      <em style="font-size:12px;color:red; margin-left:20px;">Note: Updated Order status here</em>
      <div class="modal-footer"> 
        <button type="button" onClick="printContent('div1');" class="btn btn-info wow fadeInDown"><i class="glyphicon glyphicon-print"></i> Download Receipt</button>
        <button type="submit" class="btn btn-danger wow fadeInDown" name="cancel"><i class="glyphicon glyphicon-ban-circle"></i> Cancel</button>
        <button type="submit" class="btn btn-success wow fadeInDown" name="deliver"><i class="glyphicon glyphicon-send"></i> Delivered</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php }}?>
  </tbody>
</table>
</div>
 
 <!-------------------------------------------------------OPEN MODAL MESSAGE---------------------------------------------------------------->
       <?php include('includes/dbconn.php');
	   if(isset($_POST['deliver'])){
		   $id = $_POST['fdid'];
		   $sql =("UPDATE tblorders set ostatus = 'Completed' WHERE id = '$id'") or die (mysqli_error());
		   
        $result=mysqli_query($con, $sql);
       if($result==true){
			   header("location:index.php");}
		   
		   }
		 else if(isset($_POST['cancel'])){
			 $id = $_POST['fdid'];
			 $sql = ("UPDATE tblorders set ostatus = 'Cancel' WHERE id = '$id'") or die (mysqli_error());
			 $result=mysqli_query($con, $sql);
			 }
		   ?>
       
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
    <script src="js/nav1.js"></script>
<script type="text/javascript">
    $('#filter').change(function() {
    $.post( $("#formFilter").attr("action"),
                 $("#formFilter :input").serializeArray(),
                 function(filter) { 
                    //alert (filter);
                    $("#tablebody").empty();
                    $("#tablebody").html(filter);
                 });    
        $("#formFilter").change( function() {
           return false;    
        });
    });
</script>

    
</body>
</html>