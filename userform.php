<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
let register_form = document.getElementById('register-form')
register_form.addeventlistener('submit', (e)=>{
  e.preventDefault();

  let data = new FormData();
  data.append('name',register_form.elements['name'].value);
  data.append('email',register_form.elements['email'].value);
  data.append('phonenum',register_form.elements['phonenum'].value);
 
  data.append('address',register_form.elements['address'].value);
  data.append('pincode',register_form.elements['pincode'].value);
  data.append('dob',register_form.elements['dob'].value);
  data.append('pass',register_form.elements['pass'].value);
  data.append('cpass',register_form.elements['cpass'].value);
  data.append('profile',register_form.elements['profile'].files[0]);
  data.append('register','');
  var myModal = document.getElementById('Registermodel');
  var modal = bootstrap.Modal.getInstance(myModal);
  modal.hide();

  let xhr = new XMLHttpRequest();
      xhr.open("POST", "ajax/login_register.php", true);
      xhr.onload =function(){
      }
    xhr.send(data);
    
})

setActive();
  
</body>
</html>