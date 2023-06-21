<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/icon.png" rel="shortcut icon">
    <title>Pety Paws</title>
    <!-- core CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link href="css/animate.min.css" rel="stylesheet" />
    <link href="css/prettyPhoto.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
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
            <li class="nav-item">
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
            <li class="nav-item active">
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

<?php 
    include('includes/updateavailables.php');
   
?>

<br>

</script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/nav1.js"></script>
</body>
</html>