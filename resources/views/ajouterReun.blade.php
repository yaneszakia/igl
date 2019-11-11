<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ajouter Réunion</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/mdb.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link type="text/css" href="/css/argon.css" rel="stylesheet">
  <!-- JQuery -->
  
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
<body>
<!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md  " id="sidenav-main">
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
            <a class="nav-link" href="{{URL::to('/acceuilP')}}" id="lis">
              <i class="fas fa-home"></i>Acceuil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/showprof')}}" id="lis">
              <i class="fas fa-user-circle" ></i> Mon Profil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/showprojetprof')}}" id="lis">
              <i class="fas fa-project-diagram"></i> Mes Projets
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/creerproj')}}" id="lis">
              <i class="fas fa-plus-square"></i>Créer Un Projet
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
 <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
<a class="h4 mb-0  text-uppercase d-none d-lg-inline-block" href="#index.html" style="color:#172b4d
;">Grad Space</a>
 <!-- User -->
 <li class=" dropdown">
             <a href="#" class="dropdown-toggle" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <div id="notificationsTitle">  <i class="fas fa-bell"></i> Notifications <span class="badge"> </span></div>
              </a>
             <ul class="dropdown-menu  dropdown-menu-arrow  " aria-labelledby="notificationsMenu" id="notificationsMenu" >
                    <li class="dropdown-header"  > <a href ="#"><span>No notifications</span> </a></li>
                 </ul>
                            </li>
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                <img  src="/photos/{{Session::get('image')}}"  
                  style="overflow:hidden;
                  -webkit-border-radius:80px;
                   -moz-border-radius:80px;
                   border-radius:80px;
                   width:50;
                   height:50px;"> 
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold" style="color :#172b4d
;">Profil</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="{{URL::to('/showprof')}}" class="dropdown-item">
                <i class="fas fa-user-circle"></i>
                <span>Mon profil</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="fas fa-bell"></i>
                <span>notifications</span>
              </a>
              <a href="#aide" class="dropdown-item">
                <i class="fas fa-question-circle"></i>
                <span>Aide</span>
              </a>
          </li>
        </ul>
      </div>
    </nav>   
    <br/>
    <br/>
    <br/>
    <br/>
            <div class="col-xl-8 order-xl-1 ml-8">
          <div class="card bg-secondary shadow justify-center">
            <div class="card-header  border-0"  style="background-color:#247BA0;">
              <div class="row align-items-center" >
                <div class="col-8">
                  <h3 class="mb-0" style="color: #f7f6f6; ">Ajouter réunion </h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">

               <form method="GET" action="{{URL::to('/store')}}">
                 {{csrf_field()}}
                  <div class="row">
                    <div class="col-lg-10">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Nom de la réunion</label>
                        <input required="required" type="text" id="input-first-name" name="titre" class="form-control form-control-alternative" placeholder="entrer le nom" value="">
                          @if ($errors->has('titre'))
                          <p>{{$errors->first('titre')}}</p>
                        @endif
                      </div>
                    </div>
                  </div>
                 

                  <div class="row">
                    <div class="col-lg-10">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Lieu de la réunion </label>
                        <input required="required" type="text" id="input-first-name" name="lieu" class="form-control form-control-alternative" placeholder="entrer le lieu" value="">
                      </div>
                    </div>
                  </div>


<div class="row">
                    <div class="col-lg-10">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Date de la réunion</label>
                        <input  type="date" id="input-first-name" value="{{ old('date')}}"required="required" name="date" class="form-control form-control-alternative" placeholder="jj/mm/aaaa" >
                        @if ($errors->has('date'))
                          <p>{{$errors->first('date')}}</p>
                        @endif
                      </div>
                    </div>                    
                  </div>

                  <div class="row">
                    <div class="col-lg-10">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name" >La phase </label>
                      <select name="ph"  class="form-control form-control-alternative" required="required">
                                       @foreach($phases as $phase)
                                       <option> <?php  echo $phase; ?> </option>
                                       @endforeach                                     
                                       </select>
                      </div>
                    </div>
                  </div>



                 
    
                <br/>

                   <hr class="my-4" />


                <br/>
                 <br/>

                 <div class="col-11 text-center">
                   <button type="submit" class="btn btn-lg " style="background-color: #114B5F;">Enregistrer</button>
                </div>
                

               </form>
               <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" >
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document"  >
        <div class="modal-content" style="background-color:#F29703; opacity= 0.5;">
        	
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title-default" style="color:#111721;"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
               
            </div>
          
            <div class="modal-body">
            <div class="row">
          
                  <div class=" col-10 text-LEFT"><h4 style="color:#111721;" >Bienvenue cher encadrant,</h4></div>
                  <div class=" col-10 text-LEFT mb-4"><h4 style="color:#111721;">Vous pouvez :</h4></div>
                  <br/>
                 
   <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721; ">- Créer un compte pour un étudiant ( et son binome ) en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-user-circle fa-2x"  style="color: #111721;" ></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Créer un projet en cliquant sur : <br/></h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-plus-square fa-2x " style="color: #111721;"></a>
            </div>

            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Consulter tous les projets en cliquant sur :</v></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-project-diagram fa-2x"style="color: #111721;" ></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Définir un planning en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-edit fa-2x " style="color: #111721;" ></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Consulter l'avancement du projet en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-chart-line fa-2x "style="color: #111721;" ></a>
            </div>
            
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Programmer une réunion en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-tasks fa-2x "style="color: #111721;" ></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Ajouter un commentaire en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-comment-dots fa-2x " style="color: #111721;"></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Finaliser une phase en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-check-circle fa-2x "style="color: #111721;" ></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Modifier votre profil en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-cogs fa-2x "style="color: #111721;" ></a>
            </div>
            </div>

             
 
</body>

</html>
