<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Connexion </title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
</head>
<body>
<header>

<nav   class="navbar navbar-expand-lg navbar-dark  rgba-black-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
   <!-- <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" height="30" alt="mdb logo">-->
  </a>
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Acceuil
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul> 
    </div>
  </div>
</nav>
<div id="intro1" class="view">
<div class=" mask  rgba-black-light">
<div id="centered" class="container-fluid d-flex align-items-center justify-content-center h-100">
<div class="card rgba-black-light " style="width: 25rem; border-radius:30px;">
    <h5 class="card-header white-text text-center py-3 rgba-brown-light " style=" border-radius:30px 30px  00px 00px  ;" >
        <strong>Connexion</strong>
    </h5>
    <div class="card-body px-lg-5">
        <form method="POST" action="{{route('login')}}" class="text-center" style="color: #757575;">
            @csrf
            <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-left" style="color: #ffffe5;">{{ __('E-Mail ') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="  form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus style="border-radius:20px;">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" >
                                        <strong style="color: #e53935;">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="password" class="col-md-3 col-form-label text-md-left" style="color: #ffffe5;">{{ __('Mot De Passe') }}</label>

                            <div class="col-md-9 mt-2">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required  style="border-radius:20px;">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" >
                                        <strong style="color: #e53935;">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="password" class="col-md-3 col-form-label text-md-left" style="color: #ffffe5;">{{ __('Choix') }}</label>

                            <div class="col-md-9 mt-2">
 <select class="mdb-select form-control"  style="border-radius:50px;">
  <option value="" disabled selected> Vous êtes :</option>
  <option value="1">Administrateur</option>
  <option value="2">Enseignant</option>
  <option value="3">Etudiant</option>
</select>
</div>
                        </div>
                        <!--liste déroulante 
                    <select name="type" class="browser-default custom-select" onchange="if(this.value!=''){document.location.href=this.value}">
                    <option value="0">Vous etes : </option>
                    <option value=" /choix_prof" >Administration</option>
                    <option value="/login">Enseignant</option>
                    <option value="/login">Etudiant</option>
                    </select>
                    </div>

                    liste déroulante -->
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color: #ffffe5;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-0 offset-md-4">
                                <button type="submit" class="btn" style="background-color:#054451;border-radius:20px;">
                                    {{ __('Connecter') }}
                                </button>

                               
                            </div>
                        </div>
                       

        </form>
    </div>
</div>
</div> 
</div>
</div>
</header>
<!--footer-->
<footer style="background-color:#014955 ;">
<div class="container mt-5 py-2 mb-4 text-center text-md-left" >
    <div class="row mt-4">
        <div class="col-md-4">
            <h6 class="text-uppercase font-weight-bold" style="color: #f7f6f6;">
                <strong>Présentation</strong>
            </h6>
            <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 135px; background-color: #c0c0c0;">
            <p style="color: #f7f6f6; text-align: justify;">L'École nationale supérieure d'informatique (ESI), ancinnement Institut national de formation en informatique (INI).est un établissement d'enseignement supérieur algérien formant des ingénieurs d’État en informatique. Elle est située à Oued Smar, à environ 15 km du centre-ville de la capitale Alger, en Algérie.</p>
        </div>
        <div class="col-md-4" style="color: #f7f6f6;">
            <h6 class="text-uppercase font-weight-bold">
                <strong>Contact</strong>
            </h6>
            <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; background-color: #c0c0c0;">
            <p>
                <i class="fas fa-home  mr-3"></i> BP 68M OUED SMAR 16309</p>
            <p>
                <i class="fas fa-envelope mr-3"></i> www.esi.dz</p>
            <p>
                <i class="fas fa-phone mr-3"></i> TEL : 00 213 23 93 91 32</p>
            <p>
                <i class="fas fa-print mr-3"></i>FAX :00 213 23 93 91 32 </p>
        </div>
        <div class="col-md-4" style="color: #f7f6f6;">
            <h6 class="text-uppercase font-weight-bold">
                <strong>Résaux Sociaux </strong>
            </h6>
            <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; background-color: #c0c0c0;">
            <p>
                <i class="fab fa-facebook-f  mr-3"></i>Esi-Ecole Supérieure d'Informatique</p>
            <p>
                <i class="fab fa-youtube mr-3"></i>Esi </p>
            
            <p>
                <i class="fab fa-twitter mr-3"></i>Esi Alger </p>
        </div>
    </div>
</div>
    <div class="footer-copyright text-center py-3 grey-text" style="background :#013B46; font-family: marmelad;"> ESI © 2018-2019  
      <a href="https://esi.dz"></a>
    </div>
  </footer>
 <!--footer-->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/61B06F2F-20D3-684D-93B7-80817323A324/main.js" charset="UTF-8"></script>
</body>

</html>