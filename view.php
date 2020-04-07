
<html>
<head>
<title>php page</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style3.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" type="text/css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include "menu.php" ?>
<div class="container">
	
	<div class="bird-container bird-container--one">
		<div class="bird bird--one"></div>
	</div>
	
	<div class="bird-container bird-container--two">
		<div class="bird bird--two"></div>
	</div>
	
	<div class="bird-container bird-container--three">
		<div class="bird bird--three"></div>
	</div>
	
	<div class="bird-container bird-container--four">
		<div class="bird bird--four"></div>
	</div>
	
</div>

<section class="my-5">
<div class="py-4">
<h2 class="text-center"><u> About Us</u></h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-70">
<img src="images/logo.png" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-70">
<h2>THE EXIQUISITE FAMILY</h2>
<p class="py-2"> <h4>Family refers to the group of individuals, connected to each other either by birth or by relationships like marriage,adoption,etc.
My family is small nuclear family belonging to the middle class category.There are 5 members in my family.The members of my family are my father,mother,elder brother,younger brother and me.
My father is a teacher and my mother is a housewife.My elder brother and I are B.tech engineers from the branch of Electronics and communication engineering.My younger brother studies in class 10.My father is the head of the family and primarily takes all the important decisions.</h4>
</p>
<a href="about.php" class="btn btn-success">CHECK ABOUT THE FAMILY MORE</a>
</div>
</div>
</div>
</section>
<section class="my-5">
<div class="py-4">
<h2 class="text-center">OUR MEMBERS</h2>
</div>
<div class="container-fluid">
  <div class= "row">
    <div class="col-sm-3">
    <div class="card">
    <img class="card-img-top" src="images/papa2.png" alt="Card image">
    <div class="card-body">
      <h4 class="card-title"><b>SURESH BARNWAL</h4></b>
      <a href="cardhover.php" class="btn btn-primary">See Profile</a>
    </div>
</div>
</div>
    <div class="col-sm-3">
    <div class="card">
    <img class="card-img-top" src="images/ma.png" alt="Card image">
    <div class="card-body">
      <h4 class="card-title"><b>SHITAL BARNWAL</h4></b>
      <a href="cardhover.php" class="btn btn-primary">See Profile</a>
    </div>
</div>
</div>
<div class="col-sm-3">
    <div class="card">
    <img class="card-img-top" src="images/shubham.png" alt="Card image">
    <div class="card-body">
      <h4 class="card-title"><b>SHUBHAM CHANDRA</h4></b>
      
      <a href="cardhover.php" class="btn btn-primary">See Profile</a>
    </div>
</div>
</div>  
<div class="col-sm-3">
    <div class="card">
    <img class="card-img-top" src="images/shivam2.png" alt="Card image">
    <div class="card-body">
      <h4 class="card-title"><b>SHIVAM CHANDRA</h4></b>
       <a href="cardhover.php" class="btn btn-primary">See Profile</a>
    </div>
</div>
</div>
</div>
</section>
<section class="my-5">
<div class="py-4">
<h2 class="text-center"><b>GALLERY</b></h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
  <a href="cardhover.php">
<img src="images/bhabhi.jpg" class="img-fluid pb-4">
</a>



</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/love.png" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/nishamausi.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/prayush.png" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/mami.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/chotemausi.png" class="img-fluid pb-4">
</div>
</div>
</div>
</section>
<section class="my-5">
<div class="py-4">
<h2 class="text-center"><b>DETAILS</b></h2>
</div>
<div class="w-50 m-auto">
  <form action="user_info.php" method="post">
    <div class="form-group">
      <label>USERNAME</label>
      <input type="text" name="user" autocomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>EMAIL ID</label>
      <input type="text" name="email" autocomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>MOBILE NO.</label>
      <input type="text" name="mobile" autocomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>COMMENTS</label>
      <textarea class="form-control" name="comment">
</textarea>
</div>
<button type="submit"  class="btn btn-success">SUBMIT</button>
</form>
</div>
</section>
<div>
                                      <div class="spinner-border text-muted"></div>
                                        <div class="spinner-border text-primary"></div>
                                        <div class="spinner-border text-success"></div>
                                        <div class="spinner-border text-info"></div>
                                        <div class="spinner-border text-warning"></div>
                                        <div class="spinner-border text-danger"></div>
                                        <div class="spinner-border text-secondary"></div>
                                        <div class="spinner-border text-dark"></div>
                                        <div class="spinner-border text-light"></div>
                                      </div>
                                      
<footer>
  <p class="p-3 bg-dark text-white text-center">@ISHU KA PURA PARIVAR</p>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </body>

</html>