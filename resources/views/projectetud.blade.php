
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

<div class="header  pb-8 pt-5 pt-md-8 "  >
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-3"> </div>
            <div class=" col-lg-6 justify-center ">
              <div class="card card-stats mb-4 mb-xl-0 ">
                <div class="card-body">
                  <div class="row">
                    <div class="col">

                    @if (!empty ($projet1))
                      <h5 class="h2 font-weight-bold mb-0">Projet :{{ $infoprojet1[0]->TITRE }}</h5>
                      
                      <span class="h3">Type: {{ $infoprojet1[0]->TYPE}}</span>
                      <br>
                       <span class="h3">Date Debut: {{ $infoprojet1[0]->DateDebut}}</span>
                      <br>
                       <span class="h3">Date fin: {{ $infoprojet1[0]->DateFin}}</span>
                      <br>
                       <span class="h3">Pourcentage: {{ $pourcentage[0]}}</span>
                      <br>
                      
                      <span class="h3">Encadrants :{{$proj1nomencadrant1}} {{$proj1prenomencadrant1}},{{$proj1nomencadrant2}} {{$proj1prenomencadrant2}}
                   <?php if (!empty($proj1nomencadrant3))  { echo ",".$proj1nomencadrant3." ".$proj1prenomencadrant3;}  if (!empty($proj1nomencadrant4))  { echo ",".$proj1nomencadrant4." ".$proj1prenomencadrant4;} ?></span>
                      <br>
                      <?php if(!empty($proj1nometudiant2)){?>
                      <span class="h3">Binome: {{$proj1nometudiant2}} {{$proj1prenometudiant2}}</span>
                   <?php } ?>
                     
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape  text-white rounded-circle shadow" style="background-color: #d0cedb;">
                        <i class="fas fa-user-circle"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt--7">
  
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0" style="background-color:#111721;">
              <h3 class="mb-0 text-white">Liste des tâches </h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Phase</th>
                    <th scope="col">Date Début </th>
                    <th scope="col">Date fin </th>
                    <th scope="col">Description</th>
                    <th scope="col">Avancement</th>
                    <th scope="col">Livrable</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">TERMINE</th>

                   
                    
                  </tr>
                </thead>
                
                <tbody>
                <?php for($i=0;$i<sizeof($phase1);$i++):?>
                  <tr>
                    <th scope="row">
                      <h3>
                      <?php echo $phase1[$i]->TITRE ;  ?><span class="font-weight-light"></span>
                    </h3>
                    </th>
                    <td>
                     <?php echo $phase1[$i]->DateDebut ?>
                    </td>
                    <td>
                    <?php echo $phase1[$i]->DateFin ?>
                    </td>
                    <td>  <?php echo $phase1[$i]->DESCRIPTION  ?> </td>
                    <td >
                    @if(($phase1[$i]->TERMINE)==0)
                      <form method="POST" action="{{ route('Sauvavancement',['idphase'=>$phase1[$i]->ID,'id'=>$id])}}"> 
                         {{csrf_field()}}
                         
                         <div class="d-flex align-items-center mt-4">
                        <input name="avan" type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="{{$phase1[$i]->AVANCEMENT}}"value="" >
                      </div>
                     </form>
                      <br>
                     <form method="POST" action="{{ route('Sauvcomment',['idphase'=>$phase1[$i]->ID,'id'=>$id])}}"> 
                         {{csrf_field()}}
                         
                          <div class="d-flex align-items-center">
                        <input name="comment" type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="{{$phase1[$i]->COMMENT}}" value="" >
                      </div>
                     </form>

                     @else
                     <?php echo $phase1[$i]->AVANCEMENT ; ?>
                     <br>
                     <?php echo $phase1[$i]->COMMENT ; ?>
                      @endif
                    </td>
                    
                     
                      
                    @if($tabidlivrable[$i]==Null)    
                       <td> 
                      
 
 
                       <form action="{{route('uploadlivrable',['idphase'=>$phase1[$i]->ID,'id'=>$id])}}"   enctype="multipart/form-data"  method="post">
                      {{ csrf_field() }}
                       
                        <input type="file"  name="livrable" > 
                      
                        <button class="btn btn-outline-dark btn-sm mt-2">Envoyer</button> 
                      </form>
       
                      </td>
       

                     @else
                        <td> 
                        <a href="{{route('downloadlivrable',$tabidlivrable[$i])}}"   >   
                        <?php echo $tabtitre[$i] ;?>
                        </a>
                        </td>
                      @endif
                        

                      @if($tabcomment[$i]=="NON")
                      <td> Aucun Commentaire.</td>
                      @else
                      <td><a href="{{route('downloadcommentaire',$tabidlivrable[$i])}}"   >   
                       <button >Télécharger</button>
                       </a> </td> 
                       @endif</td>

                       
                      <td><?php echo $tabcor[$i]  ?> </td>                       
                      
                      
                  </tr>
                  <?php endfor ?>
  
                </tbody>
                </table>
                  
                <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="row mt-5"></div>
          @endif





          
 @if (!empty ($projet2))
<div class="header  pb-8 pt-5 pt-md-8 "  >
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-3"> </div>
            <div class=" col-lg-6 justify-center ">
              <div class="card card-stats mb-4 mb-xl-0 ">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="h2 font-weight-bold mb-0">Projet :{{ $infoprojet2[0]->TITRE }}</h5>
                      
                      <span class="h3">Type: {{ $infoprojet2[0]->TYPE}}</span>
                      <br>
                       <span class="h3">Date Debut: {{ $infoprojet2[0]->DateDebut}}</span>
                      <br>
                       <span class="h3">Date fin: {{ $infoprojet2[0]->DateFin}}</span>
                      <br>
                         <span class="h3">Pourcentage: {{ $pourcentage[1]}}</span>
                      <br>
                      
                      <span class="h3">Encadrants :{{$proj2nomencadrant1}} {{$proj2prenomencadrant1}},{{$proj2nomencadrant2}} {{$proj2prenomencadrant2}}
                   <?php if (!empty($proj2nomencadrant3))  { echo ",".$proj2nomencadrant3." ".$proj2prenomencadrant3;}  if (!empty($proj2nomencadrant4))  { echo ",".$proj2nomencadrant4." ".$proj2prenomencadrant4;} ?></span>
                      <br>
                      <?php if(!empty($proj2nometudiant2)){?>
                      <span class="h3">Binome: {{$proj2nometudiant2}} {{$proj2prenometudiant2}}</span>
                   <?php } ?>
                     
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape  text-white rounded-circle shadow" style="background-color: #d0cedb;">
                        <i class="fas fa-user-circle"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt--7">
  
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0" style="background-color:#111721;">
              <h3 class="mb-0 text-white">Liste des tâches </h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Phase</th>
                    <th scope="col">Date Début </th>
                    <th scope="col">Date fin </th>
                    <th scope="col">Description</th>
                    <th scope="col">Avancement</th>
                     <th scope="col">Livrable</th>
                     <th scope="col">Commentaire</th>
                     <th scope="col">TERMINE</th>  

                     
                  </tr>
                </thead>
                <tbody>
                @if (!empty($phase2))
                <?php for($i=0;$i<sizeof($phase2);$i++):?>
                  <tr>
                    <th scope="row">
                      <h3>
                      <?php echo $phase2[$i]->TITRE ;  ?><span class="font-weight-light"></span>
                    </h3>
                    </th>
                    <td>
                    <?php echo $phase2[$i]->DateDebut ;?>
                    </td>
                    <td>
                    <?php echo $phase2[$i]->DateFin ;?>
                    </td>
                    <td><?php echo $phase2[$i]->DESCRIPTION  ;?> </td>
                     
                    <td >
                     @if(($phase2[$i]->TERMINE)==0)
                      <form method="POST" action="{{ route('Sauvavancement',['idphase'=>$phase2[$i]->ID,'id'=>$id])}}"> 
                         {{csrf_field()}}
                         
                         <div class="d-flex align-items-center">
                        <input name="avan" type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="{{$phase2[$i]->AVANCEMENT}}" value="" >
                      </div>
                     </form>
                      <br>
                     <form method="POST" action="{{ route('Sauvcomment',['idphase'=>$phase2[$i]->ID,'id'=>$id])}}"> 
                         {{csrf_field()}}   
                         <div class="d-flex align-items-center">
                        <input name="comment" type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="{{$phase2[$i]->COMMENT}}" value="" >
                      </div>
                     </form>
                    
                     @else
                     <?php echo $phase2[$i]->AVANCEMENT ; ?>
                     <br>
                     <?php echo $phase2[$i]->COMMENT ; ?>

                     @endif


                      
                    
                    </td>
                     
                     @if($tabidlivrable2[$i]==Null)
                        
                 
                        <td> 
                        <form action="{{route('uploadlivrable',['idphase'=>$phase2[$i]->ID,'id'=>$id])}}"   enctype="multipart/form-data"  method="post">
                         {{ csrf_field() }}
                           Ajouter un livrable: <br> 
                           <input type="file" name="livrable" > 
                           <br>
                         <button>Envoyer</button> 
                         </form>
  
                         </td>
                        
                        
                       @else
                          <td> 
                         
                          <a href="{{route('downloadlivrable',$tabidlivrable2[$i])}}"   >   
                          <?php echo $tabtitre2[$i] ;?>
                          </a>
                        
                          </td>
  
                        @endif
 
                     @if($tabcomment2[$i]=="NON")
                       <td> Aucun Commentaire.</td>
                       @else
                       <td><a href="{{route('downloadcommentaire',$tabidlivrable2[$i])}}"   >   
                        <button>Télécharger</button>
                        </a> </td> 
                        @endif</td>
                        
                        <td><?php echo $tab2cor[$i] ; ?> </td>
 
                      
 
 
                   </tr>
 
 
 
                 
                   <?php endfor ?>
                   @endif
                 </tbody>
                
                 </table>
                  <div class="card-footer py-4">
               <nav aria-label="...">
                 <ul class="pagination justify-content-end mb-0">
                   <li class="page-item disabled">
                     <a class="page-link" href="#" tabindex="-1">
                       <i class="fas fa-angle-left"></i>
                       <span class="sr-only">Previous</span>
                     </a>
                   </li>
                   <li class="page-item">
                     <a class="page-link" href="#">
                       <i class="fas fa-angle-right"></i>
                       <span class="sr-only">Next</span>
                     </a>
                   </li>
                 </ul>
               </nav>
             </div>
                 </div>
               </div>
               </div>
             </div>
           </div>
           <div class="row mt-5"></div>
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
          
                  <div class=" col-10 text-LEFT"><h4 style="color:#111721;" >Bienvenue cher étudiant,</h4></div>
                  <div class=" col-10 text-LEFT mb-4"><h4 style="color:#111721;">Vous pouvez :</h4></div>
                  <br/>
  
            

            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Consulter vos projets en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-project-diagram fa-2x"style="color: #111721;" ></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Consulter vos réunions en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-edit fa-2x " style="color: #111721;" ></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Mettre votre avancement  en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-chart-line fa-2x "style="color: #111721;" ></a>
            </div>
          
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Consulter les commentaires en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-comment-dots fa-2x " style="color: #111721;"></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Déposer un livrable en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-check-circle fa-2x "style="color: #111721;" ></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Modifier votre profil en cliquant sur :</h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-cogs fa-2x "style="color: #111721;" ></a>
            </div>
            </div>

              



    @endif               
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
   <script type="text/javascript" src="js/.js"></script>
</body>

</html>
