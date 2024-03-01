<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title> BidIt!</title>

<meta name="keywords" content="photo blog template, free website layout, CSS, download HTML" />

<meta name="description" content="Photo Blog Template, Free xHTML/CSS Layout, Free Website Template from TemplateMo.com" />

<link href="st_style.css" rel="stylesheet" type="text/css" />
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
              <a class="nav-link active" aria-current="page" href="index.html"
                ><i class="fa-solid fa-house"></i> 
  Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.php"><i class="fa-solid fa-user-plus"></i> 
 Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php"><i class="fa-brands fa-product-hunt"></i> Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php"><i class="fa-brands fa-black-tie"></i> Admin Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div id="st_container" class="gap-1">
  <div id="st_left_section" class="card p-2">

   <div id="st_left_content">

   <h1><i class="fa-solid fa-user-plus"></i> Sign Up</h1>

     <form class="p-3" id="form3" name="form3" method="post" action="user_register_code.php">
    <div class="mb-1">
        <label for="f_name" class="form-label">FIRST NAME</label>
        <input type="text" class="form-control" id="f_name" name="f_name" required pattern="[a-zA-Z ]+">
    </div>
    <div class="mb-1">
        <label for="l_name" class="form-label">LAST NAME</label>
        <input type="text" class="form-control" id="l_name" name="l_name" required pattern=".{6,15}[a-zA-Z ]">
    </div>
    <div class="mb-1">
        <label for="mail" class="form-label">E-MAIL ID</label>
        <input type="text" class="form-control" id="mail" name="mail" required>
    </div>
    <div class="mb-1">
        <label for="pwd" class="form-label">PASSWORD</label>
        <input type="password" class="form-control" id="pwd" name="pwd" required>
    </div>
    <div class="mb-1">
        <label for="dob" class="form-label">DATE OF BIRTH</label>
        <input type="text" class="form-control" id="dob" name="dob">
    </div>
    <div class="mb-1">
        <label class="form-label">GENDER</label>
        <div>
            <input type="radio" name="gen" id="male" class="form-check-input" value="male" required>
            <label for="male" class="form-check-label">MALE</label>
        </div>
        <div>
            <input type="radio" name="gen" id="female" class="form-check-input" value="female" required>
            <label for="female" class="form-check-label">FEMALE</label>
        </div>
    </div>
    <div class="mb-1">
        <label for="add" class="form-label">ADDRESS</label>
        <textarea class="form-control" id="add" name="add" rows="4"></textarea>
    </div>
    <div class="mb-1">
        <label for="ph" class="form-label">PHONE NO</label>
        <input type="text" class="form-control" id="ph" name="ph">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>
     <p>&nbsp;</p>
   </div>

  </div>
<div class="global-container">
      <div class="card login-form">
          <div class="card-body">
              <h2 class="card-title text-center">MEMBER LOGIN</h2>
              <div class="card-text">
                  <form id="form2" name="form2" method="post" action="user_login_code.php">
                      <div class="mb-3">
                          <label for="exampleInputEmail1">E-Mail</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" required>
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
                      </div>
                      <button type="submit" class="btn btn-primary btn-block" name="button3">Login</button>
                      <p class="mt-3">New Member? <a href="user.php">Register Now!</a></p>
                  </form>
              </div>
          </div>
      </div>
  </div><div id="st_contact"><h2>Contact Us</h2>

      <p>📞 9900770099<br />

        ✉️ help@bitit.com<br />

     </p>

      </div>

  </div>



</div>
</body>
</html>