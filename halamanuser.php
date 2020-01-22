<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body style="">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid"> <a class="navbar-brand" href="#">
        <b><b> PPSDM APARATUR</b></b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar11">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar11">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="admin.php">Dashboard</a> </li>
          <li class="nav-item"> <a class="nav-link" href="databook.php">Data Booking</a> </li>
          <li class="nav-item"> <a class="nav-link" href="datauser.php">Data User</a> </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        </ul> <a class="btn btn-primary navbar-btn ml-md-2" href="logout.php">Logout</a>
      </div>
    </div>
  </nav>
  <div class="py-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <h1 class="text-center" style=""><b>Data Tabel Kamar&nbsp;</b></h1>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12"><a class="btn btn-primary" href="input.html"><i class="fa fa-download fa-fw"></i>&nbsp;Tambah Data</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive text-center">
            <table class="table">
              <thead>
                <tr>
                  <th>Type</th>
                  <th class="text-left">Kamar Kosong</th>
                </tr>
              </thead>
              <?php
              include 'conn/conn.php';
              $select = mysql_query("SELECT * FROM hotel") or die(mysql_error());
              while ($data = mysql_fetch_array($select)){
              ?>
              <tbody>
                <tr>
                  <td>
                    <?php echo $data['type']; ?>
                  </td>
                  <td>
                    <?php echo $data['stock']; ?>
                  </td>
                </tr>
              </tbody>
              <?php
      }
    ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center" style="">
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link active" href="index.php">Home</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Services</a> </li>
          </ul> <i class="d-block fa mx-auto text-primary fa-3x" style="	background-image: url(image/logo-wide-white.png);	background-position: top left;	background-size: 100%;	background-repeat: repeat;"></i>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>