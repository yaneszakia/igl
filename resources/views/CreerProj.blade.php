<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Créer projet</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('css/argon.css')}}" rel="stylesheet">
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
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md  
"   id="sidenav-main" >
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
        <hr class="my-3" >
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
          <div class="card bg shadow justify-center" style="background-color:#fffffc;">
            <div class="card-header  border-0" style="background-color:#111721;" >
              <div class="row align-items-center" >
                <div class="col-10">
                <label class="  mb-4 display-4 text-white" >Créer un nouveau projet</label>
                </div>
              </div>
            </div>
            
            <div class="card-body">
            <form  action="{{URL::to('/stockageproj')}}"  enctype="multipart/form-data" method ="post"  >
              {{ csrf_field() }}
                  <div class="row form-group">
                    <div class="col-lg-2">
                        <label class=" text-nowrap "style="color:#000000;" for="input-first-name">Nom du projet</label></div>
                        <div class="col-lg-10">
                        <input name="titre" type="text" id="input-first-name" class="form-control " style="border-radius:30px; border-color:dark;" value="{{ old('titre')}}" required="required">
                        @if ($errors->has('titre'))
                          <p>{{$errors->first('titre')}}</p>
                        @endif
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-2">
                        <label class="text-nowrap" style="color:#000000;"for="input-first-name">Type du projet </label> </div>
                        <div class="col-lg-10">
                        <select name="type" class="form-control " style="border-radius:30px;border-color:dark;" required="required" >
                          <option >PFE </option>
                          <option >MASTER</option>
                           </select>
                           @if ($errors->has('type'))
                          <p>{{$errors->first('type')}}</p>
                        @endif
                      </div> 
                  </div>
                     <div class="row form-group">
                    <div class="col-lg-2">
                        <label class="text-nowrap"style="color:#000000;" for="input-first-name">Date début</label></div>
                        <div class="col-lg-10">
                        <input name="datedebut" type="Date" id="input-first-name" class="form-control "  style="border-radius:30px;border-color:dark;" required="required" value="{{ old('datedebut')}}">
                        @if ($errors->has('datedebut'))
                          <p>{{$errors->first('datedebut')}}</p>
                        @endif
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-lg-2">
                        <label class="text-nowrap"  style="color:#000000;" for="input-first-name">Date fin</label></div>
                        <div class="col-lg-10">
                        <input name="datefin" type="Date" id="input-first-name" class="form-control " style="border-radius:30px;border-color:dark;" required="required" value="{{ old('datefin')}}">
                        @if ($errors->has('datefin'))
                          <p>{{$errors->first('datefin')}}</p>
                        @endif
                    </div>
                  </div>
                 
                  </div>
                  </div>
                  </div>
                  <div class="col-1"></div>
                  </div>
                  </div>
                  <div class="container-fluid mt-3 ">
              <div class="row ">
           <div class="col-1 "></div>
               <div class="col-10 ">
               <div class="card bg- shadow justify-center" style="background-color:#fefdfc;">
               <div class="card-body">
                  <div class="row form-group">
                      <div class="col-lg-12">
                      <label class="  mb-4 display-4" style=" color:#263238;">Liste des co-encadrants</label>
                        <br/>
                        </div>
                  </div>
                        <div class="row ">
                        <label class=" col-2 text-nowrap mt-3 mb-3" style="color:#000000;" for="input-first-name" >Encadrant 1</label>
                         <select name="prof2" style="border-radius:30px; border-color:dark;" class=" col-10 form-control " onchange="callSave(this)">
                         <?php   foreach($profs as $prof) :  ?>
                         <option> <?php  echo $prof; ?>
                         </option>
                          <?php endforeach; ?>  
                          </select> 
                          <label class=" col-lg-2 text-nowrap  mt-3 mb-3" style="color:#000000;" for="input-first-name">Encadrant 2</label>
                        <select name="prof3"  style="border-radius:30px; border-color:dark;" class="  col-lg-10 form-control  " onchange="callSave(this)">

                        <option >Aucun</option>
                       <?php   foreach($profs as $prof) :  ?>
                       <option> <?php  echo $prof; ?> </option>
                       <?php endforeach; ?>                               
                        </select>
                        <label class=" col-lg-2 text-nowrap mt-3 mb-3 "  style="color:#000000;" for="input-first-name">Encadrant 3</label>
                      
                        <select name="prof4"  style="border-radius:30px; border-color:dark;" class=" col-lg-10 form-control " onchange="callSave(this)">
                        <option >Aucun</option>
                         <?php   foreach($profs as $prof) :  ?>
                         <option> <?php  echo $prof; ?> </option>
                         <?php endforeach; ?>  
                        
                        </select>
                        </div>
                      <hr>
                      <div class="row form-group">
                      <div class="col-lg-12">
                      <label class="  mb-4 display-4" style=" color:#263238;">Liste des étudiants</label>
                        <br/>
                        </div>
                       </div>
                        <div class="row ">
                        
                        <label class=" col-lg-2 text-nowrap mt-3 mb-3"  style="color:#000000;" for="input-first-name">Etudiant 1</label> 
                        
                       <select name="etd1"  style="border-radius:30px; border-color:dark;"  class=" col-lg-10 form-control" onchange="callSave(this)">
                    
                      <?php   foreach($etds as $etd) :  ?>
                      <option> <?php  echo $etd; ?> </option>
                       <?php endforeach; ?>
                          </select>
                         @if ($errors->has('etd1'))
                          <p>{{$errors->first('etd1')}}</p>
                        @endif
                    
                        <label class=" col-lg-2 text-nowrap mt-3 mb-3"  style="color:#000000;" for="input-first-name">Etudiant 2</label>                       
                        <select name="etd2" style="border-radius:30px; border-color:dark;"  class=" col-lg-10 form-control " onchange="callSave(this)">
                       
                         <option >Aucun</option>
                         <?php   foreach($etds as $etd):   ?>
                         <option> <?php   echo $etd ;  ?> </option>
                         <?php endforeach; ?>
                        </select>
                        @if ($errors->has('etd2'))
                          <p>{{$errors->first('etd2')}}</p>
                        @endif
                       
                      </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-1 "></div>
                    </div>
                    </div>
               <!-- Description -->
               <div class="container-fluid mt-3 mb-3">
              <div class="row ">
           <div class="col-1 "></div>
               <div class="col-10 ">
               <div class="card bg- shadow justify-center" style="background-color:#fefdfc;">
               <div class="card-body">
                  <div class="row form-group">
                  <div class="col-12 ">
                  <label class="  mb-4 display-4" style=" color:#263238;">Description du projet</label></div>
                        <div class="col-12 ">
                        <textarea name="description" rows="4" class="form-control " style="border-radius:30px; border-color:dark;" required="required" > {{ old('description')}}</textarea>
                      </div>
                    </div>
                  <div class="row form-group"> 
              <div class="col-md-4">
              
                  <a href="{{route('etud',0)}}" class="btn btn-outline-dark  col-10" >Créer compte étudiant</a>
                </div> 

                   <div class="col-md-5"></div>
                <div class="col-md-3 ">
                <button class="btn btn-outline-dark  col-6" > Suivant </button>
            </div>
             </div>
             </div></div>
             </div>
                  <div class="col-1 "></div>
                  </div></form>
                  
                 </div>
  <script>
    function callSave(select) {
    // get reference to parent div
    var parent = select.parentNode;
    
    // map to store already selected values; key is the selected option value, and value is the select itself
    var usedValues = {};
    
    // iterate through selects
    for (var i = 0; i < parent.children.length; ++i) {
        // add value to the usedValues map it's not empty
        if (parent.children[i].value != '') {
            usedValues[ parent.children[i].value ] = parent.children[i];
        }
    }
    
    // iterate through selects again
    for (var i = 0; i < parent.children.length; ++i) {
        // select at index i
        var s = parent.children[i];
        
        // iterate through select options
        for (var j = 0; j < s.children.length; ++j) {
            // option at index j
            var o = s.children[j];
            
            // get select from usedValues for value of option o; if option is the empty one return undefined
            var p = o.value == '' ? undefined : usedValues[o.value];
            
            // if p is undefined it means option is unselected
            // if p == s it means option is selected in select s
            // if either of this conditions is met, option should be visible
            if (p == undefined || p == s) {
                o.style.display = '';
            }
            // option otherwise
            else {
                o.style.display = 'none';
            }
        }
    }
}
 </script>

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


  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
 <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
   <script type="text/javascript" src="js/.js"></script>
</body>

</html>
