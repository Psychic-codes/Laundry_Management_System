<?php
session_start();
//error_reporting(0);
include('include/dbconnection.php');
if (strlen($_SESSION['lduid']==0)) {
  header('location:logout.php');
} else {

if(isset($_POST['submitpay'])) {
    $lmsuid = $_SESSION['lduid'];
    $dol = $_SESSION['date'];
    $topwear = $_SESSION['topwear'];
    $bottomwear = $_SESSION['bottomwear'];
    $woolencloth = $_SESSION['woolencloth'];
    $jeans = $_SESSION['jeans'];  // Jeans quantity is now being captured
    $curtains = $_SESSION['curtains'];  // Curtains quantity is now being captured
    $Bedsheets = $_SESSION['bedsheets'];  // Bedsheets quantity is now being captured
    // $others = $_SESSION['others'];
    $service = $_SESSION['service'];
    $pkadd = $_SESSION['address'];
    $contperson = $_SESSION['contactperson'];
    $dec = $_SESSION['description'];
    $ptype = $_POST['paymenttype'];
    $status = 0;

    $query = mysqli_query($con, "INSERT INTO tbllaundryreq 
    (UserID, DateofLaundry, TopWear, BottomWear, WoolenCloth, Jeans, Curtains, Bedsheets, Service, PickupAddress, ContactPerson, Description, Status, PaymentType) 
    VALUES ('$lmsuid','$dol','$topwear','$bottomwear','$woolencloth','$jeans','$curtains','$Bedsheets','$service','$pkadd','$contperson','$dec','$status','$ptype')");


    if ($query) {
      echo '<script>alert("Laundry request has been sent.")</script>';
      echo "<script>window.location.href='new-request.php'</script>";
    } else {
      $msg="Something Went Wrong. Please try again";
    }
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
          <li class="breadcrumb-item active">Payment</li>
        </ol>
        <!-- Icon Cards-->
        
        <!-- Area Chart Example-->
        
<form method="post">
        <!-- DataTables Example -->
       <?php

$ret=mysqli_query($con,"select * from tblpricelist");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
      
<h3 style="text-align: center;">Laundry Price(Per Unit)</h3>
       <table border="1" class="table table-bordered mg-b-0">
       	<tr>
      
       		<th>Particular</th>
       		<th>Price</th>
       		<th>Qty</th>
       		<th>Total</th>
       	</tr>
<tr>
    <th>Top Wear Laundry Price</th>
    <td><?php  echo $a=$row['TopWear'];?></td>
    <td><?php  echo $b=$_SESSION['topwear'];?></td>
    <td><?php  echo $ga=$b*$a?></td>
  </tr>


   <tr>
    <th>Bootom Wear Laundry Price</th>
    <td><?php  echo $a1=$row['BottomWear'];?></td>
        <td><?php  echo $b1=$_SESSION['bottomwear'];?></td>
    <td><?php  echo $gb=$b1*$a1?></td>
  </tr>
 
<tr>
    <th>Woolen Cloth Laundry Price</th>
    <td><?php  echo $a2=$row['Woolen'];?></td>
        <td><?php  echo $b2=$_SESSION['woolencloth'];?></td>
    <td><?php  echo $gc=$b2*$a2?></td>
  </tr>
  
  
  <tr>
    <th>Jeans Laundry Price</th>
    <td><?php  echo $a3=$row['Jeans'];?></td>
    <td><?php echo $b3 = isset($_SESSION['jeans']) ? $_SESSION['jeans'] : 0; ?></td>
    <td><?php  echo $g3=$b3*$a3?></td>
  </tr>

  <tr>
    <th>Curtains Cloth Laundry Price</th>
    <td><?php  echo $a4=$row['Curtains'];?></td>
    <td><?php echo $b4 = isset($_SESSION['curtains']) ? $_SESSION['curtains'] : 0; ?></td>
    <td><?php  echo $g4=$b4*$a4?></td>
  </tr>

  <tr>
    <th>Bedsheets Cloth Laundry Price</th>
    <td><?php  echo $a5=$row['Bedsheets'];?></td>
    <td><?php echo $b5 = isset($_SESSION['bedsheets']) ? $_SESSION['bedsheets'] : 0; ?></td>
    <td><?php  echo $g5=$b5*$a5?></td>
  </tr>
  
  
  
  <!-- <tr>

    <th>Other Price</th>
    <td>Other Price depend upon cloth variety(other than above three category)</td>
     <td><?php  echo $b3=$_SESSION['others'];?></td>
     <td>It will add at the time of delivery</td>
  </tr> -->
  <tr>
   <th colspan="3" style="text-align:center"> Approx Grand Total</th>
   <td><?php echo $ga+$gb+$gc+$g3+$g4+$g5;?></td>
  </tr>
  
  <tr>
   <th colspan="3" style="text-align:center"> Discounted Grand Total</th>
   <td><?php echo ($ga+$gb+$gc+$g3+$g4+$g5-(($ga+$gb+$gc+$g3+$g4+$g5)*10/100));?></td>
  </tr>

<tr>
  <th>Payment Mode</th>
  <!-- payment selection -->
  <td>
    <input type="radio" name="paymenttype" checked="true" value="Cash on Delivery"> Cash on Delivery (COD)<br>
    <input type="radio" name="paymenttype" value="Online Payment" id="onlinePayment"> Online Payment
</td>
   <!-- payment selection -->
</tr>
</table>

  <!-- QR Code HTML -->
  <div id="qrCodeSection" style="display: none; text-align: center; margin-top: 20px;">
    <h4>Scan this QR Code to make your payment:</h4>
     <div id="qrCode" style="display: inline-block;"></div>
</div>
 <!-- QR Code HTML -->


<?php } ?>
<button type="submit" name="submitpay" class="btn btn-primary btn-block">Submit</button>
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

   <!-- QR Code Script -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[name="paymenttype"]').change(function() {
                if ($(this).val() === 'Online Payment') {
                    $('#qrCodeSection').show();
                    $('#qrCode').empty().qrcode({
                        text: 'YOUR_PAYMENT_URL', // Replace with your actual payment URL
                        width: 200,
                        height: 200
                    });
                } else {
                    $('#qrCodeSection').hide();
                }
            });
        });
    </script>

  <!-- QR Code Script -->

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