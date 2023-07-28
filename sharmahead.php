
<?php
include('balbirconnect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sharma</title>
</head>
<body>
         
    <div class="container">
        <form action="#" method = "POST">
        <div class="title">

        Registeration form
        </div>
            <div class="form">
                <div class="input_field">
                   <label>   Name</label>
                   <input name="name" type="text" class="input" required > 
                </div>
        <br>
                <div class="input_field">
                <label> number</label>
                <input name="phonenum" type="text" class="input" required > 
            </div>
            <br>
            <div class="input_field">
            <label> pincode</label>
            <input name="pincode" type="text" class="input" required > 
        </div>
        <br>
                <div class="input_field">
                <label> adres</label>
                <input name="address" type="text" class="input" required > 
            </div>
            <br>
                <div class="input_field">
                <label>password</label>
                <input name="pass" type="text" class="input" required > 
            </div>
            <br>
                <div class="input_field">
                <label>confirm password</label>
                <input name="cpass" type="text" class="input" required > 
            </div>
            <br>
            <div class="input_field">
                <input type="submit" value="register" class="btn" name="register"  > 

      </div>
        </div>
  
</form>

</div>

<?php  
if($_POST['register']){
$name = $_POST['name'];
$phone =   $_POST['phonenum'];
$code = $_POST['pincode'];
$adrs = $_POST['address'];
$ps =  $_POST['pass'];
$cps =  $_POST['cpass'];

      $query = "INSERT INTO sharma 
VALUES ('$name','$phone','$code','$adrs','$ps','c$ps')";

$data = mysqli_query($connn, $query);
if($data){
echo "Data inserted";
}
else{
echo "failed";
}
}
?>

</body>
</html>