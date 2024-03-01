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
	text-align: left;
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
           <a href="admin_profile.php">MEMBERS</a>
            </li>
            <li class="nav-item">
         <a href="view_product.php"><i class="fa-brands fa-product-hunt"></i> Products</a>
            </li>
            <li class="nav-item">
    <a href="bidding_details.php">BIDDING DETAILS</a>
            </li>
                 <li class="nav-item">
  <a href="report.php">REPORTS</a>
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



   <div id="st_left_menu">

    

   </div>

   <div id="st_left_content">

     <h1>PRODUCT  LIST</h1>

     <form action="add_product_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
       <table width="100%" border="0">
         <tr>
           <td width="109"><a href="a">IMAGE</a></td>
           <td width="107"><a href="a">PRODUCT NAME</a></td>
           <td width="88"><a href="category.php">CATEGORIES</a><a href="a"></a></td>
           <td width="50"><a href="a">PRICE</a></td>
           <TD width="50"><a href="a">DELETE</a></td>
           
          </tr>
           <?php
include 'database.php';

					
$ress="select * from add_products";
$ret=mysqli_query($con,$ress) or die(mysqli_error());
   $i=0;
   $x=mysqli_num_rows($ret);
  
while($row=mysqli_fetch_array($ret)) 
{
?>
    <tr>
    
	<td ><img src="upload/<?php echo $row['image']; ?>" alt="" width="50" height="50" /></td>
   
    <td><?php echo $row['p_name']; ?></td>
    <td><?php echo $row['category']; ?></td>
	<td><?php echo $row['price']; ?></td>
   	
    </tr>
     
     
    <?php
	$i++;
	}
	?>
       </table>
     </form>
     <p>&nbsp;</p>
   </div>

  </div>

  <div id="st_right_section">

    <div id="st_right_top"></div>

 
 

    <div id="st_contact"><h2>Contact Us</h2>

      <p>📞 9900770099<br />

        ✉️ help@bitit.com<br />

   </p>

    </div>

  </div>

 

</div>
</body>
</html>