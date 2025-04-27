<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
if (strlen($_SESSION['lduid']==0)) {
  header('location:logout.php');
} else {

if(isset($_POST['submit'])) {
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['topwear'] = $_POST['topwear'];
    $_SESSION['bottomwear'] = $_POST['bottomwear'];
    $_SESSION['woolencloth'] = $_POST['woolencloth'];
    $_SESSION['jeans'] = $_POST['jeans'];  // Jeans quantity is now being captured
    $_SESSION['curtains'] = $_POST['curtains'];  // Curtains quantity is now being captured
    $_SESSION['bedsheets'] = $_POST['bedsheets'];  // Bedsheets quantity is now being captured
    $_SESSION['service'] = $_POST['service'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['contactperson'] = $_POST['contactperson'];
    $_SESSION['description'] = $_POST['description'];
    echo "<script>window.location.href='payment.php'</script>";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LMS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
 <script type="text/javascript">
$(document).ready(function () {
$('#pickupaddress').hide();
$('#service').change(function () {
var v = $("#service").val();


if(v=='dropservice')
{
$('#pickupaddress').hide();
}

if(v=='pickupservice')
{
$('#pickupaddress').show();
}
});
});

function submitform()
{

  document.getElementById("laundry").submit();
}


</script>

</head>

<body id="page-top">

  

    <!-- Navbar -->
    
<?php include('include/header.php');?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('include/sidebar.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
 <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
        <!-- Icon Cards-->
        
        <!-- Area Chart Example-->
        

        <!-- DataTables Example -->
        <form name="laundry" id="laundry" method="post" >
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="date" name="date" class="form-control"  required="required" autofocus="autofocus">
                  <label for="date">Pick up / Drop Date </label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="topwear" name="topwear" class="form-control"  required="required" pattern="[0-9]+" title="only numbers">
                  <label for="lastName">Topwear(Tshirt,Top,Shirt. Ex: 2)</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="bottomwear" name="bottomwear" class="form-control" required="required" pattern="[0-9]+" title="only numbers">
              <label for="inputEmail">Bottomwear(Lower,Jeans,Leggins. Ex: 2)</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="woolencloth" name="woolencloth" class="form-control" required="required"  pattern="[0-9]+" title="only numbers">
                  <label for="inputPassword">Woolen Cloth (Ex: 2)</label>
                </div>
              </div>
              
            </div>
          </div>

          <div class="form-group">
  <div class="form-row">
    <div class="form-label-group">
      <input type="text" id="jeans" name="jeans" class="form-control" required="required" pattern="[0-9]+" title="only numbers">
      <label for="jeans">Jeans</label>  <!-- Ensure the label matches the field -->
    </div>
  </div>
</div>

<div class="form-group">
  <div class="form-row">
    <div class="form-label-group">
      <input type="text" id="curtains" name="curtains" class="form-control" required="required" pattern="[0-9]+" title="only numbers">
      <label for="curtains">Curtains</label>  <!-- Correct input for Curtains -->
    </div>
  </div>
</div>

<div class="form-group">
  <div class="form-row">
    <div class="form-label-group">
      <input type="text" id="bedsheets" name="bedsheets" class="form-control" required="required" pattern="[0-9]+" title="only numbers">
      <label for="Bedsheets">Bedsheets</label>  <!-- Correct input for Bedsheets -->
    </div>
  </div>
</div>



          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">

<select id="service" name="service" class="form-control">
  <option value="">Select Service type</option>
 <option value="pickupservice">Pickup Service</option> 
 <option value="dropservice">Drop Service</option> 
</select>

                  <label for="inputPassword"></label>
                </div>
              </div>
              
            </div>
          </div>

<div id="pickupaddress" >
          <div class="form-group" >
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="address" name="address" class="form-control"  >
                  <label for="inputPassword">Pickup Address</label>
                </div>
              </div>
              
            </div>
          </div>
        </div>
<div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="contactperson" name="contactperson" class="form-control"  required="required">
                  <label for="inputPassword">Contact Person</label>
                </div>
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="description" name="description" class="form-control">
                  <label for="inputPassword">Description(if any)</label>
                </div>
              </div>
              
            </div>
          </div>

<button type="submit" name="submit" class="btn btn-info btn-lg"  >Proceed for Payment</button>



     
        </form>

      </div>
    </div>
  </div>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include('include/footer.php');?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
<?php }  ?>