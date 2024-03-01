<?php
session_start();
$ses=$_SESSION['name'];
include("database.php");
$id=$_GET['id'];

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
             <a href="index.html"><i class="fa-solid fa-right-from-bracket"></i> logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div id="st_container">

  <div id="st_left_section">

   


   <div id="st_left_content">

     <h1>BIDDING FOR YOUR PRODUCT</h1>

     <form action="bidding_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
       <table width="100%" border="0">
     <?php  
       $s=mysqli_query($con,"select * from add_products where p_id=$id ");
while($row=mysqli_fetch_array($s))
{
		 ?>
         <tr>
           <td>IMAGE</td>
           <td>:</td>
           <td><img name="file" src="upload/<?php echo $row['image']; ?>" alt="" width="130" height="121" /></td>
         </tr>
         <tr>
           <td>BIDDING DATE</td>
           <td>:</td>
           <td><label for="textfield"></label>
            <input type="date" name="date" id="date" /></td>
         </tr>
         <tr>
           <td width="26%">PRODUCT NAME</td>
           <td width="7%">:</td>
           <td width="67%"><label for="p_name"></label>
            <input name="p_name" type="text" id="p_name" value="<?php echo $row['p_name']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>CATEGORIES</td>
           <td>:</td>
           <td><input name="catry" type="text" id="catry" value="<?php echo $row['category']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>PRICE</td>
           <td>:</td>
           <td><input name="price" type="text" id="price" value="<?php echo $row['price']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>BIDDING COST</td>
           <td>:</td>
           <td><input name="bid_price" type="text" id="bid_price" size="30" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td colspan="3"><h1>Personal Info</h1></td>
          </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <!-- <tr>
           <td>NAME</td>
           <td>:</td>
           <td><input name="name" type="text" id="name" size="30" /></td>
         </tr> -->
         <tr>
           <td>E-MAIL</td>
           <td>:</td>
           <td><input name="mail" type="text" id="mail" size="30" /></td>
         </tr>
         <!-- <tr>
           <td>ADDRESS</td>
           <td>:</td>
           <td><label for="add"></label>
            <textarea name="add" id="add" cols="24" rows="3"></textarea></td>
         </tr>
         <tr>
           <td>PONE NO</td>
           <td>:</td>
           <td><input name="ph" type="text" id="ph" size="30" /></td>
         </tr> -->
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td><input type="submit" name="button" id="button" value="Submit" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         
         <?php
}
?>		
       </table>
     </form>
     <p>&nbsp;</p>
   </div>

  </div>

  <div id="st_right_section">

    

    <div id="st_contact"><h2>Contact Us</h2>

      <p>📞 9900770099<br />

        ✉️ help@bitit.com<br />

    </p>

    </div>

  </div>

   

</div>
</body>
</html>