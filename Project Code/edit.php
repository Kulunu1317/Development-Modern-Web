<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4 aaa">
  <h2 class="fw-bold h-font text-center">EDIT ADMIN PANNEL  ROOMS</h2>

  <div class="h-line bg-dark"></div>
 
</div>

  </div>
</nav>
</div>



<!DOCTYPE html>
<html lang="en">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>


<body>
    <section>

        <div class="container">
            <form action="bookdb.php" method="post">
               <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group  col-lg-3">
                        <label for="">Room Type</label>
                        <select name="room_type" id="room_type" class="form-control" required>
                            <option value="">Select a Room Type</option>
                            <option value="super class">Super class</option>
                            <option value="simple class">Simple Class</option>
                            <option value="law class">Law class</option>
                           
                            
                        </select>
                    </div>
                   
					
					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-in</label>
 						<input type="date" name="check_in"class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-out</label>
 						<input type="date"name="check_out" class="form-control shadow-none">
 					</div>
					
					                    <div class="form-group  col-lg-3">
                        <label for="">Quantity</label>
                        <select name="quentity" id="quentity" class="form-control" required>
                            <option value="">Select Quentity of room</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
							 <option value="4">4</option>
							  <option value="5">5</option>
							   <option value="6">6</option>
							    <option value="7">7</option>
								 <option value="8">8</option>
								  <option value="9">9</option> <br>
								  <br>
                    <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
               </div>
            </form>
        </div>
    </section>
</body>

</html><!DOCTYPE html>
<html lang="en">
<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<script>
.aaa{
align: CENTER;

PADDING:LEFT;}
</scripr>