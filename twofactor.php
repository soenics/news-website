<?php



if(isset($_POST['sandotp'])){
   echo  "<script>window.alert('Your OTP CODE IS 7 8 6 0 0') </script>";
}
if(isset($_POST['submit'])){
    
$otpcodeone =$_POST['one'];
$otptwo =$_POST['two'];
$otpthree =$_POST['three'];
$otpfour =$_POST['four'];
$otpfive =$_POST['five'];
$otpcode =$otpcodeone.$otptwo.$otpthree.$otpfour.$otpfive;
$otp='78600';
if($otpcode == $otp){
    echo "<script>window.alert('Successful') </script>";
    header("LOCATION:home.php");
}
else {
  echo "<script>
window.alert('Wrong OTP CODE Please Try Again')
</script>";
    
}
 

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Factor</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="twofactor.php" method="post">
        <div class="otpcodemain">
            <p class="otptitle">Enter OTP</p>

        </div>

        <div class="twofbox">
            <input name="one" type=" text" class="onebox">
            <input name="two" type="text" class="twobox">
            <input name="three" type="text" class="threebox">
            <input name="four" type="text" class="forbox">
            <input name="five" type="text" class="fivbox">

        </div>
        <input class="btnotpsand" name="sandotp" type="submit" value="Send OTP">
        <input class="btnotpsub" name="submit" type="submit" value="Submit">
    </form>



</body>

</html>