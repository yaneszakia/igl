<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $users->nom."  ".$users->prenom?></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/mdb.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link type="text/css" href="/css/argon.css" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}"></script>  

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
 
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
   <script type="text/javascript" src="js/.js"></script>
  
 <!-- Scripts -->
 <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- This makes the current user's id available in javascript -->
    @if(!auth()->guest())
        <script>
            window.Laravel.userId = <?php echo auth()->user()->id; ?>
        </script>
@endif
        </head>
<body style ="background-color:#FDF9F1;">

<!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md  " id="sidenav-main" >
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a >
              
                <img src="/img/logo1.png"  width="220 " height="230 ">
              
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
            <a class="nav-link" href="{{URL::to('/prof')}}" id="lis">
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
      
<ul class="navbar-nav align-items-center d-none d-md-flex ">
        <li class="dropdown-notification-all ">
             <a   id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             <i  class="fas fa-bell fa-2x " style="color:#111721;"></i> 
             <span class=" badge badge-danger ml-2" id="badge-notify"> </span>
              </a>
             <ul class="dropdown-menu  dropdown-menu-arrow" aria-labelledby="notificationsMenu" id="notificationsMenu" >
                    <li class="dropdown-header"  > <a href ="#"><span>No notifications</span> </a></li>
                 </ul>
          </li>
          </ul> 
         
          <a >
             <i  class="fas fa-question-circle fa-2x" style="color:#111721;" "></i> 
              </a> 
           
    </nav> 
  
  <div class="header  pb-3 pt-5 pt-md-8"  >
</div>
    
<div class:="container-fluid mt--7  ">
<div class:="row  ">
<div class="col-9 ml-8 mb-5"  >
<div class="card bg shadow justify-center " style="background-color:#fffffc;" >
<div class="card-header  border-0"  style="background-color:#111721;">
              <div class="row align-items-center" >
                <div class="col-10">
                <label class="  mb-1 display-4 text-white text-centered " >Fonctionnalités </label>
                </div>
              </div>
            </div>
 
<div class="row mt-3" >
<div class="col-9 ml-4" >
    <h2>foctionnalité 1</h2>
    </div>  
      <div class="col-1 mr-6" >
      <a href="#" class=" btn btn-outline-dark"> voir plus  </a>
      </div>
      </div>  
      <hr class=" my-2" style="background-color: #f4f5f7;">

      <div class="row mt-3" >
<div class="col-9 ml-4" >
    <h2>foctionnalité 2</h2>
    </div>  
      <div class="col-1 mr-6" >
      <a href="#" class=" btn btn-outline-dark"> voir plus  </a>
      </div>
      </div>  
      <hr class=" my-2" style="background-color: #f4f5f7;">

      <div class="row mt-3" >
<div class="col-9 ml-4" >
    <h2>foctionnalité 3</h2>
    </div>  
      <div class="col-1 mr-6" >
      <a href="#" class=" btn btn-outline-dark"> voir plus  </a>
      </div>
      </div>  
      <hr class=" my-2" style="background-color: #f4f5f7;">

      <div class="row mt-3" >
<div class="col-9 ml-4" >
    <h2>fonctionalité 4</h2>
    </div>  
      <div class="col-1 mr-6" >
        <a href="#"data-toggle="modal" data-target="#modal-default" class=" btn btn-outline-dark"> voir plus  </a>
      </div>
      </div>  
      <hr class=" my-2" style="background-color: #f4f5f7;">
      @if($users->type=='0')
      <div class="row mt-3" >
<div class="col-9 ml-4" >
    <h2>deposer planning</h2>
    </div>  
      <div class="col-1 mr-6" >
     
        <h5 class="modal-title text-white" id="exampleModalLabel">voir </h5>
        <button type="button" class=" btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal1" >
          <span aria-hidden="true">Voir plus</span>
        </button>
      </div>
      </div>
      @endif


 @if($users->type=='1')
      <div class="row mt-3" >
<div class="col-9 ml-4" >
    <h2>afficher  planning</h2>
    </div>  
      <div class="col-1 mr-6" >
     
        <h5 class="modal-title text-white" id="exampleModalLabel">voir </h5>
        <button type="button" class=" btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal1" >
          <span aria-hidden="true">Voir plus</span>
        </button>
      </div>
      </div>
      @endif


       @if($users->type=='-1')
      <div class="row mt-3" >
<div class="col-9 ml-4" >
    <h2>afficher planning</h2>
    </div>  
      <div class="col-1 mr-6" >
     
        <h5 class="modal-title text-white" id="exampleModalLabel">voir </h5>
        <button type="button" class=" btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal1" >
          <span aria-hidden="true">Voir plus</span>
        </button>
      </div>
      </div>
      @endif


      <hr class=" my-2" style="background-color: #f4f5f7;">
</div>



<!-- essai -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div  class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color:#fffffc;" >
      <div class="modal-header"  style="background-color:#111721;">
        <h5 class="modal-title text-white" id="exampleModalLabel">Annuler Réunion </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
                    <form >
                
                 

                  <div class="row form-group">
                    <div class="col-lg-4">
                      
                        <label class="text-nowrap text-dark "  style="font-size:20px;" for="input-first-name">La reunion  </label>    </div>
                        <div class="col-lg-8">
                      <select name="supReun"  style="border-radius:30px;" class="form-control" >
                                                               
                                       </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-4"></div>
                  <button type="submit" class="btn btn " style="background-color:#111721;">Enregistrer</button>
                  </div>


      </div>
      
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div  class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"style="background-color:#fffffc;" >
      <div class="modal-header"  style="background-color:#111721;">
        <h5 class="modal-title text-white" id="exampleModalLabel">Ajouter planning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" action="{{route('addplan')}}" method="POST">
      {{csrf_field()}}

                
         <div class="row form-group">
                    <div class="col-lg-4">
                        <label class="text-nowrap text-dark" for="input-first-name">Groupe</label></div>
                        <div class="col-lg-8">
                        <input required="required" type="text" style="border-radius:30px;" id="input-first-name" name="grp" class="form-control " placeholder="entrer le groupe" value="">

              
              
                <p class="mb-3"></p>

                   
                      </div>
                  
                  </div>
                 

         <div class="row form-group">
                    <div class="col-lg-4">
                     
                        <label class="text-nowrap text-dark" for="input-first-name">Section </label></div>
                         <div class="col-lg-8">
                        <input required="required" style="border-radius:30px;" type="text" id="input-first-name" name="lieu" class="form-control " placeholder="entrer la section" value="">
                     
                    </div>
                  </div>


 <div class="row form-group">
  <div class="col-lg-4">
   <label class="text-nowrap text-dark" for="file">Planning</label></div>
   <div class="col-lg-8">
   <div class="custom-file">
  <input type="file"  class="custom-file-input " id="customFileLang" lang="es" name="grp">
  <label class="custom-file-label" for="customFileLang">Selectionner un fichier</label>
</div>
<button>Envoyer</button>
</div>

   
 
 </div>

</div>
 


                  <div class="row">
                  <div class="col-4"></div>
   <button type="submit" class="btn btn " style="background-color:#111721;">Enregistrer</button></div>
               </form>
             

      </div>
      
    </div>
  </div>
</div>
<!--

          <div class="row mt-2"></div>
           <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" >
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document"  >
        <div class="modal-content" >
          
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title-default" style="color:#111721;"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
               
            </div>
          
                   
           <div class="modal-body">
           
            <div class="row form-group">
                    <div class="col-lg-4">
                        <label class="text-nowrap text-dark" for="input-first-name">Nom de la réunion</label></div>
                        <div class="col-lg-8">
                        <input required="required" type="text" style="border-radius:30px;" id="input-first-name" name="titre" class="form-control " placeholder="entrer le nom" value="">
                  
                        </div>
                  
                  </div>  
                  -->

</body>
</html>
