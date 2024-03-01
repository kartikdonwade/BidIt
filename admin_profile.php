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
              <a href="my_bid.php" ><i class="fa-solid fa-stamp"></i>My Bids</a>
            </li>
            <li class="nav-item">
             ><a href="bidding_details.php">BIDDING DETAILS</a>
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

     <div class="st_topmenu">


      </div>

   </div>

   <div id="st_left_content">

     <h1>MEMBERS LIST</h1>

     <form action="add_product_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
       <table width="100%" border="0">
         <tr>
           <td width="64"><a href="a">NAME</a></td>
           <td width="109"><a href="a">EMAIL</a></td>
           <td width="86"><a href="a">PHONE NO</a></td>
           <td width="81"><a href="a">ADDRESS</a></td>
           <td width="68"><a href="a">DELETE</a></td>
          </tr>
           <?php
include 'database.php';

$select="SELECT * FROM user_registration";
$qry=mysqli_query($con,$select);

$row=mysqli_num_rows($qry);
$i=0;
while ($row = $qry->fetch_assoc()) {
//   echo <<<EOS
//   <div class="collection" id="{$row['id']}">
//       <div class="collection-hover">{$row['collection']}</div>
//   </div>
// EOS
$id="{$row["user_id"]}";
$Name= "{$row["f_name"]}";

$email="{$row["email"]}";
$phone="{$row["phone"]}";
$add="{$row["address"]}";
// }

// while ($i<$row)
// {
// $id=mysqli_result($qry,$i,"user_id");	
// $Name=mysqli_result($qry,$i,"f_name");
// $email=mysqli_result($qry,$i,"email");
// $phone=mysqli_result($qry,$i,"phone");
// $add=mysqli_result($qry,$i,"address");
?>
    <tr>
    <?php echo "
	<td>$Name</td>
    <td> $email</td>
    <td>$phone</td>
	<td>$add</td>
	<td><a href='admin_delete.php?id=$id'>DELETE</a></td>
    
   	";?>
    </tr>
    <?php
	// $i++;
	}
	?>
       </table>
     </form>
     <p>&nbsp;</p>
   </div>

  </div>

  <div id="st_right_section">

 

    <div id="st_right_search">

      <form id="form1" name="form1" method="post" action="">
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