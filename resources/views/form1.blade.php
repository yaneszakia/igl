<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Planning</title>
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
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md  " id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="">
       
      </a>
      <!-- Divider -->
        <hr class="my-3">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              
                <img src="img/logo.png" width="50" height="75">
              
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
          <a  >
             <i class="fas fa-question-circle fa-2x" style="color:#111721;"></i> 
              </a>
           
    </nav> 

<div class="header  pb-8 pt-5 pt-md-8" >
</div>  
<div class="container-fluid mt--7 ">
<div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card  shadow mb-3" style="background-color:#fffffc;">
            <div class="card-header  border-0" style="background-color:#111721;">
              <div class="row align-items-center" >
                <div class="col-12">
                  <h3 class=" display-5 text-white" >Planning</h3>
                </div> 
              </div>
            </div>
            <div class="card-body">
              <form method="post" action="{{route('SauvPlanning',['idprojet'=>$idprojet])}}">
              {{ csrf_field() }}
                
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label text-nowrap text-dark" for="input-first-name" >Nom de la phase </label>
                        <input  style="border-radius:30px;border-color:dark;"type="text" id="nom " name="TitrePhase" class="form-control " value="{{ old('TitrePhase') }}" required="required">
                         @if ($errors->has('TitrePhase'))
                          <p>{{$errors->first('TitrePhase')}}</p>
                        @endif
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label text-nowrap text-dark" for="input-last-name" >Date début </label>
                        <input   style="border-radius:30px;border-color:dark;"type="Date" id="date1" name="DebutPhase" class="form-control " value="{{ old('DebutPhase') }}" required="required">
                        @if ($errors->has('DebutPhase'))
                          <p>{{$errors->first('DebutPhase')}}</p>
                        @endif
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label  text-nowrap text-dark" for="input-username" >Date fin </label>
                        <input style="border-radius:30px;border-color:dark;" type="Date" id="date2" name="FinPhase" class="form-control " value="{{ old('FinPhase') }}" required="required">
                        @if ($errors->has('FinPhase'))
                          <p>{{$errors->first('FinPhase')}}</p>
                        @endif
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label text-nowrap text-dark " for="input-username" >Description</label>
                    <textarea style="border-radius:30px;border-color:dark;" value="{{ old('Desc') }}" id="date3" rows="4" name="Desc" class="form-control "required="required" ></textarea>
                  </div>
                </div>
                <div class="row">
                <div class="col-9 text-left">
                  <button type="submit" class="btn btn-outline-dark" style="background-color: #456990;"  value="ajouter">Ajouter Phase</button>
                </div>
                  </form>
                  @if($nbdata != 0)
                  <div class="col-3 text-left">    
            <a href="{{route('mesProjets')}}" class=" btn btn-outline-dark">Terminer </a>
            </div>
          
            <div class="container-fluid mt-3 ">
<div class="row">
        <div class="col-xl-12 order-xl-1">
        <div class="card  shadow mb-3" style="background-color:#fffffc;">
            <div class="table-responsive mt-3">
              <table class="table " id="matable">
                <thead style="background-color:#111721;">
                  <tr>
                    <th scope="col " class="text-white">Phase</th>
                    <th scope="col" class="text-white">Date Début </th>
                    <th scope="col" class="text-white">Date fin </th>
                    <th scope="col" class="text-white">Description </th>
                  </tr>
                </thead>  
                <tbody>

                @foreach($data as $row)
                    <tr>
                    <td><?php echo $row->TITRE?> </td>
                    <td> <?php echo $row->DateDebut?> </td>
                    <td> <?php echo $row->DateFin?> </td>
                    <td> <?php echo $row->DESCRIPTION?></td>
                    </tr>
                @endforeach

                </tbody>
               </table>
            </div>
            @endif
          </div>
        </div>
      </div>
   



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
