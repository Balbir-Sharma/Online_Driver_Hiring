 <?php
require('incl/important.php');
adminlogin();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel--Setting</title>
    <?php require('incl/link.php');
     ?>
     <style>
        #dashboard-menu{
            height: 100%;
            height: 100%;
            position: fixed;
        }
        @media screen and (max-width:979px) {
            #dashboard-menu{
            height:auto;
            width: 100%;
        } 
        #main-content{
            margin-top: 60px;
        }
        }
     </style>
</head>
<body class="bg-white">

<div class="container-fluid bg-dark  text-light p-3 d-flex align-items-center justify-content-between sticky-top" >
    <h3 class= "mb-0 h-font"> kbsdrive4U </h3>
    <a href="logout.php" class= "btn btn-light btn-sm">Log out</a> 
</div>

<div  class = " col-lg-2 bg-dark border-top border-3 border-secondary " id = "dashboard-menu"> 
    <nav class="navbar navbar-expand-lg navbar-dark ">             
      <div class="container-fluid flex-lg-column align-items-stretch ">
        <h4 class="mt-2 text-light">ADMIN PANEL</h4>
         <button class = "navbar-toggler shadow none"  type = "button" data-bs-toggle = "collapse" data-bs-target = "#admindropdown" aria-controls="">
                    <span class = "navbar-toggler-icon"></span>
                </button>
               <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id = #admindropdown>
              
            
               <ul class="nav nav-underline flex-column">
               <li class="nav-item">
                 <a class="nav-link  text-white " href="dashboard.php">Dashboard</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link  text-white " href="#">Drivers</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link text-white " href="#">Users</a>
               </li>  
               <li class="nav-item">
                 <a class="nav-link  text-white" href="settings.php">Setting</a>
               </li>
                  </ul>
            </div>
            </div>
      </nav>
</div>


<div class="container-fluid" id = "main-content">
<div class="row">
<div class="col-lg-10 ms-auto p-4 overflow-hidden">
    <h3 class ="mb-4">Setting</h3>
    <!--General Setting section-->
    <div class="card border-0 shadow-sm mb-4" >
  <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h5 class="card-title m-0">General Setting</h5>
      <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
  Edit
</button>
    </div>
   
    <h6 class="card-subtitle mb-1 fw-bold"> Site title</h6>
    <p class="card-text" id = "site_title"></p>
     <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
     <p class="card-text" id = "site_about"></p>
   </div>

     </div>


        <!--General Setting model-->
     <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id ='general_s_form' >
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">General Setting</h1>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label fw-bold">Site Title</label>
          <input type="text" name="site_title" id="site_title_inp" class = "form-control shadow none" require>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold">About us</label>
          <textarea name="site_about" id="site_about_inp" class = "form-control shadow none" rows = "6" require></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn custom-bg  shadow-none">submit</button>
      </div>
    </div>
    </form>
    
  </div>
</div>


 <!-- Shutdown section-->
 <div class="card border-0 shadow-sm" >
  <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h5 class="card-title m-0">Shutdown Website</h5>
      <div class = "form-check form-switch">
        <form>
        <input onchange="upd_shutdown(this.value)" class = "form-check-input" type = "checkbox" id = "shutdown">
        </form>
       

      </div>
    </div>
   
    
     <p class="card-text"> No customers are allowed to hire a driver When shutdown is turned on>
   </div>

     </div>



</div>
    </div>
</div>
   


   <?php require('incl/scripts.php'); ?> 

   <script>
    let general_data;

  let general_s_form=document.getElementById('general_s_form');
   let site_title_inp = document.getElementById('site_title_inp');
      let site_about_inp =document.getElementById('site_about_inp');
      
    function get_general(){
      let site_title = document.getElementById('site_title');
      let site_about =document.getElementById('site_about');

     
      let Shutdown_toggle =document.getElementById('shutdown-toggle');
      let xhr = new XMLHttpRequest();
      xhr.open("POST", 'ajax/settings_crud.php', true)
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      
      xhr.onload =function(){
       // general_data = this.responseText
       general_data = JSON.parse(this.responseText);

        site_title.innerText =general_data.site_title;
        site_about.innerText =general_data.site_about;

        site_title_inp.value =general_data.site_title;
        site_about_inp.value =general_data.site_about;

        if(general_data.shutdown ==0){
          Shutdown_toggle.checked = false;
          Shutdown_toggle.value = 0;
        }
        else{
          if(general_data.shutdown ==0){
          Shutdown_toggle.checked = true;
          Shutdown_toggle.value = 1;
        
        }
      }
    // console.log(general_data);
    
      xhr.send('get_general');
    }
       general_s_form.addEventListener('submit',function(e){
        e.preventDefault();
        upd_general(site_title_inp.value, site_about_inp.value) ;
       })

    function upd_general(site_title_val, site_about_val){
      let xhr = new XMLHttpRequest();
      xhr.open("POST", 'ajax/settings_crud.php', true)
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      
      xhr.onload =function(){
        var myModal =document.getElementById('general-s')
        var modal =bootsrap.Modal.getInstance(myModal);
        modal.hide();
       if(this.responseText == 1){
       alert('success', 'Changes saved');
        get_general();       }
      }
      else{
        alert('success', 'No Changes saved');
      }
    
      xhr.send('site-title =' +site_title_val+ '&site_about =' +site_about_val+ '&upd_general');
    
    }

    function upd_shutdown(val){

      let xhr = new XMLHttpRequest();
      xhr.open("POST", 'ajax/settings_crud.php', true)
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      
      xhr.onload =function(){
      
       if(this.responseText == 1 && general_data.shutdown==0){
       alert('success','site has been shutdown');
        get_general();       }
      }
      else{
        alert('success', 'shutdown mode off');
      }
    
      xhr.send('upd_shutdown=' +val);
    
    
    }

    window.onload= function(){
      get_general();
    }
    if($settings_r['shutdown']){
      echo<<<alertbar
      <div class = 'bg-danger text-center p-2 fw-bold'>
      Booking are closed now</div>
      alertbar;
    }
    </script>
</body>
</html>