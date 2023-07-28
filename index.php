<?php
require('incl/dbconn.php');
require('incl/important.php');


session_start();

if((isset( $_SESSION['adminlogin']) && $_SESSION['adminlogin'] == true)){
    redirect('dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login Panel</title>
    <?php require('incl/link.php'); ?> 
    <style>
    div.login-form{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
    } </style>
</head>
<body class = "bg-light text-center rounded">
<div class="login-form">
<form method="POST">
  <h4 class="bg-dark text-white py-3">Admin login Panel</h4> 
  <div class="p-4">
  <div class="mb-3">
                    <input name="admin_name"  required type="text" class="form-control shadow-none text-center" placeholder="Admin Name" >
                  </div>
                  <div class="mb-4">
                    
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="password" >
                  </div>
                  <button  name="login" type="submit"  class="btn text-white bg-dark shadow-none">login</button>
  </div>
</form>

</div>
<?php
 

if(isset($_POST['login'])){
    $frm_data =filteration($_POST);
    $query ="SELECT * FROM `admin_cred` where `admin_name`=? AND `admin_pass`=? ";
    $values= [$frm_data['admin_name'],$frm_data['admin_pass']];
   
    $res = select($query,$values,"ss");
      if($res->num_rows==1){
        $row = mysqli_fetch_assoc($res);
        $_SESSION['adminlogin']=true;
        $_SESSION['adminId']=$row['sr_no'];
        redirect('dashboard.php');
     }
     else{
       alert('error','login failed - Invalid credentials');
     }
}
?>
</body>
</html>