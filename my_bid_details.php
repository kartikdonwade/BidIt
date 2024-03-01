<?php
session_start(); 
include("database.php");
$id_name=$_GET['id'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title> BidIt!</title>

<meta name="keywords" content="photo blog template, free website layout, CSS, download HTML" />

<meta name="description" content="Photo Blog Template, Free xHTML/CSS Layout, Free Website Template from TemplateMo.com" />

<link href="st_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#st_container #st_left_section #st_left_content #form3 table {
	text-align: center;
}
</style>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/aee62cfba8.js" crossorigin="anonymous"></script></head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 p-3" id="go">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><img src="images/BidIT-removebg-preview.png" height="80px" alt=""
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-md-auto gap-3">
           
            <li class="nav-item">
             <a href="user_profile.php" ><i class="fa-solid fa-house"></i> 
  Home</a>
            </li>
            <li class="nav-item">
             <a href="add_product.php">Add Product</a>
            </li>
            <li class="nav-item">
              <a href="my_bid.php" ><i class="fa-solid fa-stamp"></i>My Bids</a>
            </li>
             <li class="nav-item">
            <a href="index.html"><i class="fa-solid fa-right-from-bracket"></i> logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div id="st_container">

  <div id="st_left_section">

  

  

   <div id="st_left_content">

     <h1>BIDDING DETAILS</h1>

     <form id="form3" name="form3" method="post" action="">
       <table width="100%" border="0" cellspacing="5">
         <tr>
         <?php
		
		$s=mysqli_query($con,"select * from bidding Where product_name='$id_name'");
while($row=mysqli_fetch_array($s))
{
		 ?>
         
         
            <?php
}

?>
       </table>
     </form>
     <table width="90%" border="0">
       <tr>
       <td width="24%"><h4>Product Name</h4></td>
         <td width="24%"><h4>BEDDER NAME</h4></td>
         <td width="24%"><h4>BIDDING PRICE</h4></td>
         <td width="28%"><h4>E-MAIL</h4></td>
       </tr>
        <?php
		 include('database.php');
		$s=mysqli_query($con,"select * from bidding where product_name='$id_name' ");
while($row=mysqli_fetch_array($s))
{
		 ?>
         <tr>
          <td><?php echo $row['product_name']; ?></td>
         <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['bid_price']; ?></td>
           <td><?php echo $row['email']; ?></td>
         </tr>
<?php
// $row++;
}
?>
     </table>
     <p>&nbsp;</p>
   </div>

  </div>

  <div id="st_right_section">

    <div id="st_right_top"></div>

    <div id="st_right_search">

      <form id="form1" name="form1" method="post" action="">

        <label>

        <input type="text" name="search_item" id="search_item" />

        </label>

            <label>

            <input type="submit" name="search_btn" id="search_btn" value="Search" />

        </label>

      </form>

    </div>
    <div id="st_contact"><h2>Contact Us</h2>

      <p>📞 9900770099<br />

        ✉️ help@bitit.com<br />

     </p>

    </div>

  </div>

   

</div>
</body>
</html>