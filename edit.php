<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body style="">
  <?php
include 'conn/connn.php';
$no_pesanan = $_GET['no_pesanan']; //get the no which will updated
$query = mysql_query("SELECT * FROM reservasi WHERE no_pesanan ='$no_pesanan'"); //get the data that will be updated
$data  = mysql_fetch_array($query);
?>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-center"> <a class="navbar-brand" href="#">
        <b> WISMA PPSDM APARATUR</b>
      </a> </div>
  </nav>
  <div class="py-3" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 p-4">
          <h3 class="mb-3 text-center">Edit Data Booking</h3>
          <form action="cedit.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-12"> <input type="text"  disabled="disabled" class="form-control" id="form36" name="no_pesanan" value="<?php echo $data['no_pesanan']; ?>"> </div>
            </div>
            <div class="form-group"> <input type="date" class="form-control" id="form38" name="check_in" required="required" value="<?php echo $data['check_in']; ?>"> 
            </div>
            <div class="form-group"> <input type="date" class="form-control" id="form39" name="check_out" required="required" placeholder="check_out" value="<?php echo $data['check_out']; ?>"> 
            </div>
            <div class="form-row">
              <div class="form-group col-md-12"> <input type="text" class="form-control" name="jumlah" id="form40" placeholder="Jumlah Kamar" required="required" value="<?php echo $data['jumlah']; ?>"> 
              </div>
            </div>
            <div class="form-group">
              <select type="text" class="form-control" id="form42" name="type_kamar" required="required" value="<?php echo $data['type_kamar']; ?>">
                <option>Type Kamar</option>
                <option>Standar</option>
                <option>Delux</option>
                <option>VIP</option>
              </select>
            </div>
            <input type="hidden" name="no_pesanan" value="<?php echo $data['no_pesanan']; ?>">
            <input type="SUBMIT" name="SUBMIT" class="btn btn-primary" value="Save">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 p-3">
          <h5> <b>Main</b> </h5>
          <ul class="list-unstyled">
            <li> <a href="index.html">Home</a> </li>
            <li> <a href="login.html">Login</a> </li>
          </ul>
        </div>
        <div class="col-lg-3 col-6 p-3">
          <h5> <b>Others</b> </h5>
          <ul class="list-unstyled">
            <li> <a href="#">FAQ</a> </li>
            <li> <a href="#">Resources</a> </li>
            <li> <a href="#">Career</a> </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
          <h5> <b>About</b> </h5>
          <p class="mb-0"> I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls.</p>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
          <h5> <b>Follow us</b> </h5>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-between my-2"> <a href="#">
                <i class="d-block fa fa-facebook-official text-muted fa-lg mr-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-google-plus-official text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-pinterest-p text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-reddit text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
              </a> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0 mt-2">© 2014-2018 Pingendo. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>