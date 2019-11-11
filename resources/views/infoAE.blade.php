<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{$titre}} </title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/mdb.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link type="text/css" href="/css/argon.css" rel="stylesheet">
  <body style ="background-color:#FDF9F1;">

<!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md  " id="sidenav-main" >
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0">
        <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- Divider -->
        <hr class="my-3">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav"  >
          <li class="nav-item " >
            <a class="nav-link" href="{{URL::to('/acceuilE')}}" id="lis">
              <i class="fas fa-home"></i>Acceuil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/showetd')}}" id="lis">
              <i class="fas fa-user-circle" ></i> Mon Profil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/showprojetetud')}}" id="lis">
              <i class="fas fa-project-diagram"></i> Mes Projets
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/deconnexion')}}"id="lis">
              <i class="fas fa-sign-out-alt  " ></i> Déconnecter
            </a>
          </li>
          
        </ul>
        <!-- Divider -->
        <hr class=" my-3" style="background-color: #f4f5f7;">   
      </div>
    </div>
  </nav>
<div class="main-content">
 <nav class="navbar navbar-top navbar-expand-md " id="navbar-main">
      <div class="container-fluid">

<span class="avatar avatar-sm rounded-circle">
                <img  src="/photos/{{Session::get('image')}}"  
                  style="overflow:hidden;
                  -webkit-border-radius:80px;
                   -moz-border-radius:80px;
                   border-radius:80px;
                   width:50;
                   height:50px;"> 
                </span>
</a>
        <ul class="navbar-nav align-items-center d-none d-md-flex">
        <li class="  dropdown mr--2">
             <a   id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             <i  class="fas fa-bell fa-2x" style="color:#111721;"></i> 
                  <span class=" badge badge-danger ml-2" id="badge-notify"> </span> 
              </a>
             <ul class="dropdown-menu  dropdown-menu-arrow  " aria-labelledby="notificationsMenu" id="notificationsMenu" >
                    <li class="dropdown-header"  > <a href ="#"><span>No notifications</span> </a></li>
                 </ul>
          </li>
          <li class="">
          <a >
             <i  class="fas fa-question-circle fa-2x" style="color:#111721;" data-toggle="modal" data-target="#modal-default"></i> 
              </a> 
           
           
    </nav> 
    <div class="col-xl-8 order-xl-2  mt-5 ml-9 ">
          <div class="card bg-secondary shadow justify-center" >
          <div class="card-header border-2  white-text"  style="background-color:#111721;" >
   
              <div class="row align-items-center" >
                <div class="col-8 ">
                <h3 class="mb-0 " style="color: white; fontsize:24px;">Détails sur la réunion  </h3>
                </div>
                
              </div>
            </div>
            <div class="container-fluid mt-3" style="background-color:#FDF9F1; " >
<div class="row" >
        <div class="col-12">
          <div class="card mb-3"  >

               <div class="card-body"   >
               
               <div class="row form-group">
                    <div class="col-lg-3">
                        <label class="text-nowrap" style="color:#777474;" for="input-first-name">Titre</label></div>
                        <div class="col-lg-8">
                        <input name="text" type="text" id="input-first-name" class="form-control "style="border-radius:30px; border-color:dark; background-color:#eeeeee;"placeholder="{{ $titre }}" disabled >
                        
                    </div>
                  </div>

                    <div class="row form-group">
                    <div class="col-lg-3">
                        <label  class="text-nowrap" style="color:#777474;" for="input-first-name">Lieu</label></div>
                        <div class="col-lg-8">
                        <input name="text" type="text" id="input-first-name" class="form-control "style="border-radius:30px; border-color:dark; background-color:#eeeeee;"placeholder="{{ $lieu }}" disabled >
                        
                    </div>
                  </div>
                  
<div class="row form-group">
                    <div class="col-lg-3">
                        <label class="text-nowrap" style="color:#777474;" for="input-first-name">Projet</label></div>
                        <div class="col-lg-8">
                        <input name="text" type="text" id="input-first-name" class="form-control "style="border-radius:30px; border-color:dark; background-color:#eeeeee;"placeholder="{{ $projet }}" disabled >
                        
                    </div>
                  </div>

                    <hr>
                    <div class="row form-group">
                        <div class="col-9">
                        @if($pv == 0)
                        <label >Télécharger le pv:</label>
                        Aucun pv remis. 
                    </div>
                    </div>

                       @else
                       <div class="row form-group">
                       <div class="col-lg-8 ml-8">
                        <label >Télécharger le pv :</label> 
                     
                        <a href="{{route('downloadpv',$idreunion)}}"  class="button" >   
                         Télécharger
                         </a>  
         
                       @endif
                       </div>
                       </div>
                       

                    <div class="row ">
                        <div class="col-md-2 ml-auto mr-auto ">
                       <a href="/acceuilE" class="btn  btn-file" style="background-color:#1F7369;">
                Revenir 
            </a>
            </div>
                    </div>
                    


       

        </div>
        </div>
   
  


  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
   <script type="text/javascript" src="js/.js"></script>
</body>

</html>
