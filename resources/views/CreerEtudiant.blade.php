<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Créer etudiant</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/mdb.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link type="text/css" href="/css/argon.css" rel="stylesheet">
  <script src="/js/app.js"></script>
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
    <div class="header pb-4 pt-5 pt-md-8 " >
    
    </div>
    <div class="container-fluid mt--4 ">
    <div class="row ">
    <div class="col-1 "></div>
    <div class="col-10 ">
          <div class="card  shadow justify-center mb-3" style="background-color:#fffffc;">
            <div class="card-header  border-0"  style="background-color:#111721;">
              <div class="row align-items-center" >
                <div class="col-10">
                <label class="  mb-4 display-4 text-white" >Créer un compte d'étudiant</label>
                </div>
                
              </div>
            </div>
            <div class="card-body">
                    <form method="POST" action="{{URL::to('/SauvEtud')}}">
                    {{csrf_field()}}
                    @if (Session::has('msgg'))
                       <div class="alert alert-info">{{ Session::get('msgg') }}</div>
                     @endif

                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="name" class="form-label text-nowrap text-dark">{{ __('Nom') }}</label> </div>

                            <div class="col-lg-10">
                                <input required="required" value="{{ old('name') }}"  style="border-radius:30px;border-color:dark;"id="name" type="text" class="form-control" name="name">
                            </div>
                        </div>

                        
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="name" class="form-label text-nowrap text-dark">{{ __('Prenom') }}</label>   </div>

                            <div class="col-lg-10">
                                <input required="required" value="{{ old('surname') }}" style="border-radius:30px;border-color:dark;" id="name" type="text" class="form-control" name="surname">
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="email" class="form-label text-nowrap text-dark">{{ __(' Addresse E-Mail') }}</label> </div>
                            <div class="col-lg-10">
                                <input required="required" value="{{ old('email') }}" style="border-radius:30px;border-color:dark;" id="email" type="email" class="form-control" name="email"  > @if ($errors->has('email'))
                                  <p>{{$errors->first('email')}}</p>
                                @endif</div>

                               
                            </div>
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="email" class="form-label text-nowrap text-dark">{{ __(' Specialité') }}</label></div>
                            <div class="col-lg-10">
                                <input id="email"style="border-radius:30px;border-color:dark;" value="{{ old('spec') }}" type="text" class="form-control" name="spec"  required="required">
                            
                        </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="password" class="form-label text-nowrap text-dark">{{ __('Mot De Passe') }}</label></div>

                            <div class="col-lg-10">
                                <input id="password"  style="border-radius:30px;border-color:dark;" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required="required">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="password-confirm" class="form-label text-nowrap text-dark">{{ __('Confirmation') }}</label></div>

                            <div class="col-lg-10">
                                <input id="password-confirm" style="border-radius:30px;border-color:dark;" type="password" class="form-control" name="password_confirmation" required="required">
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-outline-dark " >
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                            
                
                <div class="col-md-3">
                  <a href="{{URL::to('/creerproj')}}" class="btn btn-outline-dark" >Suivant</a>
            </div>
            </div>
            <div class="row ">
            <div class="col-4"></div>
            @if($bin==0)
            
              <div class="col-4">
                  <a href="{{route('etud',1)}}" class="btn btn-outline-dark" >Créer un binome</a>
                </div>
                @endif
                </div>

                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>

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
            </div><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Créer etudiant</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/mdb.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link type="text/css" href="/css/argon.css" rel="stylesheet">
  <script src="/js/app.js"></script>
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
 <nav class="navbar navbar-top navbar-expand-md " id="navbar-main">
      <div class="container-fluid">

<span class="avatar avatar-sm rounded-circle">
                <img  src="/photos de prfl enseignant/{{Session::get('image')}}"  
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
    <div class="header pb-4 pt-5 pt-md-8 " >
    
    </div>
    <div class="container-fluid mt--4 ">
    <div class="row ">
    <div class="col-1 "></div>
    <div class="col-10 ">
          <div class="card  shadow justify-center mb-3" style="background-color:#fffffc;">
            <div class="card-header  border-0"  style="background-color:#111721;">
              <div class="row align-items-center" >
                <div class="col-10">
                <label class="  mb-4 display-4 text-white" >Créer un compte d'étudiant</label>
                </div>
                
              </div>
            </div>
            <div class="card-body">
                    <form method="POST" action="{{URL::to('/SauvEtud')}}">
                    {{csrf_field()}}

                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="name" class="form-label text-nowrap text-dark">{{ __('Nom') }}</label> </div>

                            <div class="col-lg-10">
                                <input required="required"   style="border-radius:30px;border-color:dark;"id="name" type="text" class="form-control" name="name">
                            </div>
                        </div>

                        
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="name" class="form-label text-nowrap text-dark">{{ __('Prenom') }}</label>   </div>

                            <div class="col-lg-10">
                                <input required="required" style="border-radius:30px;border-color:dark;" id="name" type="text" class="form-control" name="surname">
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="email" class="form-label text-nowrap text-dark">{{ __(' Addresse E-Mail') }}</label> </div>
                            <div class="col-lg-10">
                                <input required="required" style="border-radius:30px;border-color:dark;" id="email" type="email" class="form-control" name="email"  ></div>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="email" class="form-label text-nowrap text-dark">{{ __(' Specialité') }}</label></div>
                            <div class="col-lg-10">
                                <input id="email"style="border-radius:30px;border-color:dark;" type="text" class="form-control" name="spec"  required="required">
                            
                        </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="password" class="form-label text-nowrap text-dark">{{ __('Mot De Passe') }}</label></div>

                            <div class="col-lg-10">
                                <input id="password" style="border-radius:30px;border-color:dark;" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required="required">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-lg-2">
                            <label for="password-confirm" class="form-label text-nowrap text-dark">{{ __('Confirmation') }}</label></div>

                            <div class="col-lg-10">
                                <input id="password-confirm" style="border-radius:30px;border-color:dark;" type="password" class="form-control" name="password_confirmation" required="required">
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-outline-dark " >
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                            
                
                <div class="col-md-3">
                  <a href="{{URL::to('/creerproj')}}" class="btn btn-outline-dark" >Suivant</a>
            </div>
            </div>
            <div class="row ">
            <div class="col-4"></div>
            @if($bin==0)
            
              <div class="col-4">
                  <a href="{{route('etud',1)}}" class="btn btn-outline-dark" >Créer un binome</a>
                </div>
                @endif
                </div>

                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>

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
