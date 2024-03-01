<?php
$bid_date=$_POST['date'];
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
	text-align: left;
}
</style>
<script src="https://kit.fontawesome.com/aee62cfba8.js" crossorigin="anonymous"></script></head>

<body>

<div id="st_container">

  <div id="st_left_section">

   <div id="st_left_header">

     <div id="st_left_title">  BidIt! </div>

     <div id="st_left_slogan"> Enjoy With Bidding Application...</div>

     <div id="st_latest"><a href="#"> <i class="fa-brands fa-black-tie"></i> Admin Login </a></div>

   </div>

   <div id="st_left_menu">

     <div class="st_topmenu">

       <ul>
         <li><a href="admin_profile.php">MEMBERS</a></li>
         <li ><a href="view_product.php"><i class="fa-brands fa-product-hunt"></i> Products</a> </li>
         <li class="current"><a href="bidding_details.php">BIDDING DETAILS</a></li>
        
          <li><a href="index.html"><i class="fa-solid fa-right-from-bracket"></i> logout</a></li>
       </ul>

      </div>

   </div>

   <div id="st_left_content">

     <h1>Daywise Report</h1>

       <table width="100%" border="0">
         <tr>
           <td width="91"><a href="a">DATE</a></td>
           <td width="120"><a href="a">PRODUCT NAME</a></td>
           <td width="88"><a href="category.php">CATEGORIES</a><a href="a"></a></td>
           <td width="74"><a href="a">PRICE</a></td>
            <td width="85"><a href="a">BID PRICE</a></td>
           
           
          </tr>
           <?php
include 'database.php';

					
$ress="select * from bidding WHERE date='$bid_date'";
$ret=mysqli_query($con,$ress) or die(mysqli_error());
   $i=0;
   $x=mysqli_num_rows($ret);
  
while($row=mysqli_fetch_array($ret)) 
{
?>
    <tr>
    
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['category']; ?></td>
	<td><?php echo $row['price']; ?></td>
    <td><?php echo $row['bid_price']; ?></td>
   	
    </tr>
     
     
    <?php
	$i++;
	}
	?>
       </table>

     <p>&nbsp;</p>
   </div>

  </div>

  <div id="st_right_section">

    <div id="st_right_top"></div>

    <div id="st_right_search">

     
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