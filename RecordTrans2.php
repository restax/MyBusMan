<!DOCTYPE html>
<html>
<head>
    <title>Transaction</title>
    <link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div class="header">
    <h1>
        <div class="container" onclick="toggleNav(this)">
          <div class="bar1"></div><div class="bar2"></div><div class="bar3"></div>
        </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-briefcase"></i> My Business Manager
      <div  style="float: right; margin-right: 100px;">
        <i class="far fa-user"></i>&nbsp;&nbsp;<a class="logout" href="login.php">Logout</a>
      </div>
    </h1>
  </div>
    <div id="mySidenav" class="sidenav">
  <button class="dropdown-btn">Tasks<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="AddTask1.html">Schedule Task</a>
    <a href="TasksList.php">View Tasks</a>
  </div>
    <button class="dropdown-btn">Transactions<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="RecordTrans1.php">Record Transaction</a>
    <a href="TransactionLog.php">Transaction Log</a>
  </div>
    <button class="dropdown-btn">Taxes<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="FileTax1.php">File Task</a>
    <a href="TaxHistory.php">Tax History</a>
  </div>
    <button class="dropdown-btn">Products<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="#">View Products</a>
  </div>
</div>
<script>
function toggleNav(x) {
      x.classList.toggle("change");
     if(document.getElementById("mySidenav").style.width === "320px")
        document.getElementById("mySidenav").style.width = "0px";
     else
        document.getElementById("mySidenav").style.width ="320px";
}
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.height === "110px") {
  dropdownContent.style.height = "0px";
  }
  else {
  dropdownContent.style.height="110px";
  }
  });
}
</script>
    <?php
        include_once 'dbConnection.php';
        $trans_id = md5(uniqid(rand(), true));
        $product = $_POST['product'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $cost = mysqli_query($con,"SELECT Cost FROM products WHERE Product_Name='$product'") or die('Error');
        if($row=mysqli_fetch_array($cost))
        {
        $cost=$row['Cost'];
        }
        $profit = $price - ($cost*$quantity);
        $ins=mysqli_query($con, "INSERT INTO transactions VALUES ('$trans_id', '$_POST[name]','$_POST[date]','$product', '$quantity', '$price', '$profit', '$_POST[notes]')");
    ?>

<h2><center>Transaction Recorded</center></h2>
    <br><br><br>
    <div align="center">
            <button class="btn">Home</button>
            <a href="Transactionlog.php"><button class="submit">View Log</button></a>
    </div>
    </body>
    </html>