<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Projet</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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
      <a class="">
        <img src="img/logo.png"  height=220" width="200">
      </a>
      <!-- Divider -->
        <hr class="my-3">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              
                <img src="/img/logo.png" width="50" height="75">
              
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
  
<div class="header  pb-8 pt-5 pt-md-8"  >
</div>
     

<div class="container-fluid mt--9">

        
     
    <div class="row">
       
    <div class="col-7">
   <div class="card shadow mb-2" >
   <div class="card-header border-0  white-text" style="background-color:#111721;" >
   <h3 class="mb-0 text-center " style="color: white; fontsize:24px;">Agenda </h3>
   </div>
          <div class="card body mt-3 ml-4 mr-4 mb-3">
         
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
              {!! $calendar->calendar() !!}
              {!! $calendar ->script() !!}
          </div>
        </div>
      </div>

  <div class="col-5">
  <div class="card"style="background-color:#FAFAFA;" > 
  <div class="card-header"style="background-color:#fAFAFA;">
                <h2 class="card-title text-muted  text-grey mb--3 " >Etudiants</h2>
              </div>
              <div class="card-body">
  <?php   for($i=0;$i<sizeof($nom);$i++):?>
              <div class="card shadow mt-3 " >
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Etudiant {{$i+1}}</h5>
                      <span class="h2 font-weight-bold mb-0">{{$nom[$i]}}</span>
                      <br>
                      <span class="h2 font-weight-bold mb-0">{{$prenom[$i]}}</span>
                      <br>
                      <span class="h2 font-weight-bold mb-0">{{$spec[$i]}} </span>
                    </div>
                </div>
                </div>
              </div>
            
            <!-- -->
        <?php endfor; ?>
           
        </div>  
           

              </div>
              <div class="row mt-2">
              <div class="col-5 mr-2"> 
              <a href="#"  class="btn " style="background-color:#1F7369;" data-toggle="modal" data-target="#exampleModal1"  > Ajouter une Reunion</a>
              </div><div class="col-6"> 
        <a href="#" class="btn"  style="background-color:#1F7369;" data-toggle="modal" data-target="#exampleModal"> supprimer une Reunion</a>
            </div>
            </div>
            </div>
            </div>
            </div>

              <!--Supprimer reunion -->
            

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div  class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color:#fffffc;" >
      <div class="modal-header"  style="background-color:#111721;">
        <h5 class="modal-title text-white" id="exampleModalLabel">Supprimer Réunion </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if(!empty($reunions))
                    <form method="GET" action="{{route('supp',$idprojet)}}">
                 {{csrf_field()}}
                 

                  <div class="row form-group">
                    <div class="col-lg-4">
                      
                        <label class="text-nowrap text-dark "  style="font-size:20px;" for="input-first-name">La reunion  </label>    </div>
                        <div class="col-lg-8">
                      <select name="supReun"  style="border-radius:30px;" class="form-control" >
                                      @foreach($reunions as $reun)
                                       <option> <?php  echo $reun; ?> </option>
                                       @endforeach                            
                                       </select>
                  
                    </div>
                  </div>
                  <button type="submit" class="btn btn " style="background-color:#111721;">Enregistrer</button>
               </form>

@else
<?php  echo "pas de reunions a supprimer"; ?>
@endif
      </div>
      <div class="modal-footer">
               
        <button type="button" class="btn "  style="background-color: #111721;" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>


                         <!--/Supprimer reunion -->


 


                         <!--Ajouter reunion -->



<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div  class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"style="background-color:#fffffc;" >
      <div class="modal-header"  style="background-color:#111721;">
        <h5 class="modal-title text-white" id="exampleModalLabel">Ajouter Réunion </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="GET" action="{{URL::to('/store')}}">
                 {{csrf_field()}}
         <div class="row form-group">
                    <div class="col-lg-4">
                        <label class="text-nowrap text-dark" for="input-first-name">Nom de la réunion</label></div>
                        <div class="col-lg-8">
                        <input required="required" type="text" style="border-radius:30px;" id="input-first-name" name="titre" class="form-control " placeholder="entrer le nom" value="">
                      </div>
                  
                  </div>
                 

         <div class="row form-group">
                    <div class="col-lg-4">
                     
                        <label class="text-nowrap text-dark" for="input-first-name">Lieu de la réunion </label></div>
                         <div class="col-lg-8">
                        <input required="required" style="border-radius:30px;" type="text" id="input-first-name" name="lieu" class="form-control " placeholder="entrer le lieu" value="">
                     
                    </div>
                  </div>


<div class="row form-group">
                    <div class="col-lg-4">
                        <label class="text-nowrap text-dark" for="input-first-name">Date de la réunion</label> </div>
                        <div class="col-lg-8">
                        <input required="required" style="border-radius:30px;" type="date" id="input-first-name" name="date" class="form-control " placeholder="jj/mm/aaaa" value="">
                     
                    </div>
                  </div>
<div class="row form-group">
                    <div class="col-lg-4">
                        <label class="text-nowrap text-dark" for="input-first-name">La phase </label></div>
                        <div class="col-lg-8">
                      <select name="ph" style="border-radius:30px;" class="form-control " >
                                       @foreach($petani as $petan)
                                       <option> <?php  echo $petan->TITRE; ?> </option>
                                       @endforeach                                     
                                       </select>
                     
                    </div>
                  </div>
   <button type="submit" class="btn btn " style="background-color:#111721;">Enregistrer</button>
               </form>
             

      </div>
      <div class="modal-footer">
             
        <button type="button" class="btn "  style="background-color:#111721;" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>



                              <!--/Ajouter reunion -->


            <div class="container-fluid mt-3">    
 <!-- Table -->
 <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header  border-0"  style="background-color:#111721;">
              <h3 class="mb-0 text-white">Liste des tâches </h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Phase</th>
                    <th scope="col">Date Début </th>
                    <th scope="col">Date fin </th>
                    <th scope="col">Avancement</th>
                    <th scope="col">Livrable</th>
                    <th scope="col">Commentaires</th>
                    <th scope="col">CORRIGE</th>
                    <th scope="col">Description</th>
                    <th scope="col">Termine</th>
                    <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
               
   <?php for($i=0;$i<sizeof($petani);$i++):?>

   <tr>
   <td> <?php echo $petani[$i]->TITRE;  ?></td> 
   <td> <?php echo $petani[$i]->DateDebut;  ?></td> 
   <td > <?php echo $petani[$i]->DateFin;  ?></td> 
   <td> <?php echo $petani[$i]->AVANCEMENT;  ?>
       <br> <?php echo $petani[$i]->COMMENT;  ?>
   </td>
    @if($tabidlivrable[$i]==null)
     <td> n'est pas encore remis.</td>
    @else
    <td><a href="{{route('downloadlivrable',$tabidlivrable[$i])}}"   > 

    <?php echo $tabtitre[$i]; ?>
    </a> </td> 
   @endif

    
   @if (($tabidlivrable[$i]!=Null)&&($tabcomment[$i]=="NON"))
   <td> 
   <form action="{{route('uploadcommentaire',['tabidlivrable'=>$tabidlivrable[$i],'idprojet'=>$idprojet])}}"   enctype="multipart/form-data"  method="post">
        {{ csrf_field() }}
         Ajouter un commmentaire : <br> 
         <input type="file" name="commentaire" > 
        <button>Envoyer</button> 
    </form>
    </td>
    @else
      @if($tabidlivrable[$i]==Null)
         <td>
           Vous ne pouvez pas envoyer un commentaire sur un livrable non remis.
         </td>
      @else
        @if($tabcomment[$i]=="OUI")
         <td>
        il existe déjà un commentaire pour cette phase livrable. <br> 
        <a href="{{route('downloadcommentaire',$tabidlivrable[$i])}}"   >   
        Cliquez ici
        </a> pour le télécharger. </td> 
         
         @endif
      @endif   
    @endif

   <td> <?php   echo $tabcor[$i]; ?> </td>  
   <td> <?php echo $petani[$i]->DESCRIPTION;  ?></td>
   <td> <?php if( $petani[$i]->TERMINE==0)
     {
      echo "Non"; 
      if($valid[$i]==1){?>
      <br>
      <a href="{{route('validation',$petani[$i]->ID)}}" class="btn"  style="background-color:#1F7369;">Valider </a>
     <?php } } 
    else
     {
       echo "Oui";
     } ?></td>
   
   <td></td>
   

                    </tr> 
                    <?php endfor; ?>


 
</tbody>
</table>
                </div>
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

</body>

</html>
