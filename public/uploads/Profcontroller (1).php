<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Reunion;
use Auth;
use app;
use Redirect;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
class Profcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }


     // affichage du calendrier avec les reunion des projets du prof au id $idprof

     public function index()
     { 
        
         $idprof=Auth::user()->id;

         $img=DB::table('enseignant')->whereid($idprof)->select('URLimg')->value('URLimg');
         Session::put('image',$img);
       
         // recuperer les reunions que ce prof a confirmées
         $Reuns = DB::table('presence')
         ->where('IDPresent1', $idprof)
         ->orWhere('IDPresent2', $idprof)       
         ->orWhere('IDPresent3', $idprof)       
         ->orWhere('IDPresent4', $idprof)  
         ->select('IDReunion')            
         ->get();

         $t=0;
         $m=0;
         $eventt=[];
         $eventss=[];
         
        for($j=0 ; $j < sizeof($Reuns); $j++){
         $event=[];

         //selection des reunions de la table reunion
         $events = Reunion::select('Reunion.*')
          ->where('id', $Reuns[$j]->IDReunion)       
          ->get();

         //affichage de chaque reunion

         foreach($events as $row){
             $enddate=$row->date."24.00.00";

             //recupreation de la colonne du premier etudiant
                $etud1=DB::table('presence')->where('IDReunion',$row->id)->select('IDPresent5')->get();
                $etud1=$etud1[0]->IDPresent5;

            //recupreation de la colonne du deuxieme etudiant
                $etud2=DB::table('presence')->where('IDReunion',$row->id)->select('IDPresent6')->get();
                $etud2=$etud2[0]->IDPresent6;

                 //stocker le lieu, le titre de la reunion, et le nom du projet dans des variables pour les afficher
               $lieu=$row->lieu;

               $titre=$row->titre;
             
               if($row->PV == Null) 
               {
                   $pv=0;
               }
               else
               {
                   $pv=1;
               }

            

              $projet= DB::table('phase')
              ->join('reunion', 'reunion.IDPHASE', '=', 'phase.ID')
              ->where('reunion.id', $row->id ) 
              ->select('IDPROJET')
              ->value('IDPROJET');
              $projet=DB::table('projet')->where('ID',$projet)->select('TITRE')->value('TITRE');

                //si l'un des deux etudiants est present

                if (($etud1 != NULL)||($etud2!=NULL)){
              $event[]=\Calendar::event(
                  $row->titre,
                  true,
                  new \Datetime($row->date),
                  new \Datetime($row->date),
                  $row->id,
                  [
                      'color'=>'#114B5F',
                      'lieu'=> $row->lieu,
                      'textColor'=>'#ffffff',
                      'contentHeight'=>100,
                      'url'=>route('infoAP',[$titre,$lieu,$projet,$row->id,$pv])
                  ]
                  
              );
            }
            // sinon (les deux etudiants ne sont pas "encore" presents)
            else{
                $event[]=\Calendar::event(
                    $row->titre,
                    true,
                    new \Datetime($row->date),
                    new \Datetime($row->date),
                    $row->id,
                    [
                        'color'=>'#FFA500',
                        'lieu'=> $row->lieu,
                        'textColor'=>'#ffffff',
                        'contentHeight'=>100,
                        'url'=>route('infoAP',[$titre,$lieu,$projet,$row->id,$pv])
                    ]
                    
                );

            }
              


         }
         
         for($k=0 ; $k < sizeof($event); $k++){
             $eventt[$t]=$event[$k];
             $t++;
         }

         for($l=0 ; $l < sizeof($events); $l++){
             $eventss[$m]=$events[$l];
             $m++;
         }
         
      }

         $calendar = \Calendar::addEvents($eventt);
         $nom=DB::table('users')->where('id',$idprof)->select('name')->value('name');
         $prenom=DB::table('users')->where('id',$idprof)->select('surname')->value('surname');


      //selection des livrables non corrigés par le prof
$livnoncorr=[]; $projnon=[];$projets=[];$l=0;
$nbprojets=DB::table('listeencadrant')
->where('IDENCADRANT1',$idprof)
->orWhere('IDENCADRANT2',$idprof)
->orWhere('IDENCADRANT3',$idprof)
->orWhere('IDENCADRANT4',$idprof)
->count();
$projets=DB::table('listeencadrant')
->where('IDENCADRANT1',$idprof)
->orWhere('IDENCADRANT2',$idprof)
->orWhere('IDENCADRANT3',$idprof)
->orWhere('IDENCADRANT4',$idprof)
->get();
if($nbprojets!=0){
for($m=0;$m<count($projets);$m++){
    $phases=DB::table('phase')
    ->where('IDPROJET',$projets[$m]->IDPROJET)
    ->get();
    for($y=0;$y<sizeof($phases);$y++){
        $liv=DB::table('livrable')
        ->where('ID',$phases[$y]->IDLIVRABLE)
        ->get();
        if($liv[0]->CORRIGE==0){
            $titre=$liv[0]->TITRE;
            $livnoncorr[$l]=$titre;
           
           $projnon[$l]=$projets[$m]->IDPROJET;
          
        $l++;
    }
    }
}
}

         //renvoyer le calendrier avec les reunions au view acceuilprof
      return view('acceuilprof',compact('eventss','calendar','nom','prenom','livnoncorr','projnon'));
     

   }



/////////////////////////////////////////////////////////////////////////////


   

 /************************************************************/

    // affichage du formulaire d'ajout d'une reunion

    public function display($idprojet){ 

        //choix des phases du projet
        $phases= DB::table('phase')->where('IDPROJET',$idprojet)->orderBy('DateDebut','asc')->select('TITRE')->get();
        for ($i = 0; $i < sizeof($phases); $i += 1)
        {
         $phases[$i]= $phases[$i]->TITRE  ;
        }

        return view ('ajouterReun',compact('phases'));
        
    }


  /************************************************************/


    // inserer les données du formulaire d'ajout reunion a la BDD

    public function store(Request $request)
    {
        $today=Carbon::today();
      
        $date=$request->input('date'); 
       
         $validator = Validator::make($request->all(),[
            'date'=> 'required|date|after:today',
         ]); 

      if ($validator->fails()){
   return Redirect::back()->withErrors($validator)->withInput();}
  
  //le nom doit etre unique
  $titr=$request->input('titre');
   $even=DB::table('reunion')->where('titre',$titr)->count();
   if ($even!=0)
   {
       $validator->getMessageBag()->add('titre', 'Ce titre existe déjà! essayer de concatener le n° de projet et le n° de phase pour avoir un nom unique. @ex : ReunionPh02Pr05');
       return Redirect::back()->withErrors($validator)->withInput();
   }
      
      //recuperer l'id de la phase que l'utilisateur a entré de la BDD 
        $stop=0; $j=0;
    $phas=$request->get('ph');
    $idphas=DB::table('phase')->where('TITRE',$phas)->get();
    $idphase= $idphas[0]->ID;
    $idprojet =$idphas[0]->IDPROJET;
    $ddp=DB::table('phase')->where('ID',$idphase)->select('DateDebut')->value('DateDebut');
    $finp=DB::table('phase')->where('ID',$idphase)->select('DateFin')->value('DateFin');
  
    // la date de la reunion doit etre superieure a la date debut de la phase choisie
    if($ddp > $date){ $validator->getMessageBag()->add('date','la date doit etre aprés la date debut de la phase! ('.$ddp.')');
        return Redirect::back()->withErrors($validator)->withInput();} 
     
         // la date de la reunion doit etre inferieure a la date debut de la phase suivante si elle existe
         // sinon a la date fin de la phase choisie
    $phases= DB::table('phase')->where('IDPROJET',$idprojet)->orderBy('DateDebut','asc')->get(); 
    while(($j < sizeof($phases))&& (!$stop)){
        if($phases[$j]->TITRE == $phas){ $stop=1;}
        $j++;
    }
    //s'il ya une phase suivante
    if($j < sizeof($phases)){ $dfp=$phases[$j]->DateDebut;
                if($date > $dfp){$validator->getMessageBag()->add('date','la date doit etre avant la date debut de la phase prochaine! ('.$dfp.')');
                    return Redirect::back()->withErrors($validator)->withInput();}
    }
    //s'il ya pas une phase suivante
    else{
        if($date > $finp){$validator->getMessageBag()->add('date','la date doit etre avant la date fin de la phase choisie! ('.$finp.')');
            return Redirect::back()->withErrors($validator)->withInput();}
    }




        // sauvegarder les données de la reunion
       $events=new Reunion;
        $events->titre=$titr;
        $events->lieu=$request->input('lieu');
        $events->date=$date; 
        $events->TERMINEE='0';
        $events->IDPHASE=$idphase;
        $events->save();
        $idreun=$events->id;
        $iduser=Auth::user()->id;
        //ajouter le prof dans la liste presence de la reunion dans la table presence
        DB::table('presence')->insert([
            'IDReunion'=> $idreun,
            'NBPresent'=>1,
            'IDPresent1'=> $iduser,      
         ]);
         $prof=auth()->user();
         $idprof=Auth::user()->id;
         $idprojet=DB::table('phase')->where('ID',$idphase)->select('IDPROJET')->value('IDPROJET');
         $reunion= Reunion::find( $idreun);
            $idencadrant1=DB::table('listeencadrant')->select('IDENCADRANT1')->where('IDPROJET', $idprojet)->value('IDENCADRANT1');
        if ( $idencadrant1!= $idprof)
        {
            $encadr1=\App\User::find($idencadrant1);
        }
        else
        {
         $encadr1=null;
        }
        $idencadrant2=DB::table('listeencadrant')->select('IDENCADRANT2')->where('IDPROJET', $idprojet)->value('IDENCADRANT2');
        if ( $idencadrant2!= $idprof)
        {
            $encadr2=\App\User::find($idencadrant2);
        }
        else
        {
         $encadr2=null;
        }
       
        $idencadrant3=DB::table('listeencadrant')->select('IDENCADRANT3')->where('IDPROJET', $idprojet)->value('IDENCADRANT3'); 
        if ( $idencadrant3!= $idprof)
        {
            $encadr3=\App\User::find($idencadrant3);
        }
        else
        {
         $encadr3=null;
        }
        $idencadrant4=DB::table('listeencadrant')->select('IDENCADRANT4')->where('IDPROJET', $idprojet)->value('IDENCADRANT4');
        if ( $idencadrant4!= $idprof)
        {
            $encadr4=\App\User::find($idencadrant4);
        }
        else
        {
         $encadr4=null;
        }
        $idetudiant1=DB::table('projetetudiant')->select('IDETUDIANT')->where('IDPROJET1',$idprojet)->orwhere('IDPROJET2',$idprojet)->value('IDETUDIANT');
        
        $idetudiant2=DB::table('projetetudiant')->select('IDETUDIANT')->where('IDETUDIANT','!=', $idetudiant1 )->where('IDPROJET1',$idprojet)->orwhere('IDETUDIANT','!=', $idetudiant1)->where('IDPROJET2',$idprojet)->value('IDETUDIANT');
        
        // $titrproj=DB::table('projet')->select('TITRE')->where('ID', $idprojet)->value('TITRE');
        // $titrephase=DB::table('phase')->select('TITRE')->where('ID', $idphase)->value('TITRE');
        // $encadr1=\App\User::find($idencadrant1);
       // $encadr2=\App\User::find($idencadrant2);
       // $encadr3=\App\User::find($idencadrant3);
       // $encadr4=\App\User::find($idencadrant4);
        $etud1=\App\User::find($idetudiant1);
        $etud2=\App\User::find($idetudiant2);
        if ($encadr1!= null)
        {
            $encadr1-> notify(new \App\Notifications\nevreunion($prof,$reunion,$idreun) );
        }
        if ($encadr2!= null)
        {
            $encadr2-> notify(new \App\Notifications\nevreunion($prof,$reunion,$idreun) );
        }
        if ($encadr3!= null)
        {
            $encadr3-> notify(new \App\Notifications\nevreunion($prof,$reunion,$idreun) );
        }
        if ($encadr4 != null)
        {
            $encadr4 -> notify(new \App\Notifications\nevreunion($prof,$reunion,$idreun) );
        }
        if ($etud1!= null)
        {
            $etud1-> notify(new \App\Notifications\nevreunionetud($prof,$reunion,$idreun) );
        }
        if ($etud2!= null)
        {
            $etud2-> notify(new \App\Notifications\nevreunionetud($prof,$titreproj,$idreun) );
        }

         return \Redirect::route('projet',$idprojet); 
         // envoi d'une notif au coencadrants (listeencadrants) et au etudiant (projetetudiant)
    }


    /************************************************************/



     // affichage du formulaire de suppression d'une reunion

     public function delete($idprojet){ 

        //selection des reunions du projet dont l'id est idprojet
        $reuni=Reunion::select('Reunion.*')
        ->join('phase', 'phase.ID', '=', 'Reunion.IDPHASE')
        ->where('phase.IDPROJET', $idprojet )        
        ->get();

        //recuperer l'id du prof
        $userId= Auth::user()->id;

        $reunions=[];
        for ($j=0 ; $j < sizeof($reuni) ; $j++)
        {
            $id=$reuni[$j]->id;
            $pr1=DB::table('presence')->where('IDReunion',$id)->select('IDPresent1')->value('IDPresent1');
            $pr2=DB::table('presence')->where('IDReunion',$id)->select('IDPresent2')->value('IDPresent2');
            $pr3=DB::table('presence')->where('IDReunion',$id)->select('IDPresent3')->value('IDPresent3');
            $pr4=DB::table('presence')->where('IDReunion',$id)->select('IDPresent4')->value('IDPresent4');

            //on affiche seulement les reunions qu'a confirmées le prof
        if(($pr1==$userId)||(($pr2)==$userId)||(($pr3)==$userId)||(($pr4)==$userId)){
         $reunions[]= $reuni[$j]->titre  ;
        }
        }
        //s'il n'existe pas de reunion a afficher on retourne a la page projet
        if(count($reunions)==0){return \Redirect::route('projet',$idprojet);  }
        
        //sinon
        else{
        return view ('suppReun',compact('reunions','idprojet'));
        }
    }

    /************************************************************/

    //fonction de suppression de la reunion de la BDD
  
    public function supp(Request $request,$idprojet){
        $this->validate($request,[
            'supReun'=>'required',
        ]);
        $Reun=$request->get('supReun');
        $prof=auth()->user();
        $idprof=Auth::user()->id;
        // selection de la reunion au titre supreun
        $idreun=DB::table('reunion')->where('titre',$Reun)->select('id')->value('id');

            //on supprime le prof de la liste presence de la reunion
        $row=DB::table('presence')->where('IDReunion',$idreun)->get();

            //si le prof est le present1
            if(($row[0]->IDPresent1)==$idprof){
                DB::table('presence')->where('IDReunion',$idreun)->update(array(
                'IDPresent1'=>NULL,
                'NBPresent'=>($row[0]->NBPresent)-1,
                ));
            }

            //si le prof est le present2
            if(($row[0]->IDPresent2)==$idprof){
                DB::table('presence')->where('IDReunion',$idreun)->update(array(
                'IDPresent2'=>NULL,
                'NBPresent'=>($row[0]->NBPresent)-1,
                ));
            }

             //si le prof est le present3
            if(($row[0]->IDPresent3)==$idprof){
                DB::table('presence')->where('IDReunion',$idreun)->update(array(
                'IDPresent3'=>NULL,
                'NBPresent'=>($row[0]->NBPresent)-1,
                ));
            }

             //si le prof est le present4
            if(($row[0]->IDPresent4)==$idprof){
                DB::table('presence')->where('IDReunion',$idreun)->update(array(
                'IDPresent4'=>NULL,
                'NBPresent'=>($row[0]->NBPresent)-1,
                ));
            }
            $reunion= Reunion::find( $idreun);
            $idencadrant1=DB::table('listeencadrant')->select('IDENCADRANT1')->where('IDPROJET', $idprojet)->value('IDENCADRANT1');
        if ( $idencadrant1!= $idprof)
        {
            $encadr1=\App\User::find($idencadrant1);
        }
        else
        {
         $encadr1=null;
        }
        $idencadrant2=DB::table('listeencadrant')->select('IDENCADRANT2')->where('IDPROJET', $idprojet)->value('IDENCADRANT2');
        if ( $idencadrant2!= $idprof)
        {
            $encadr2=\App\User::find($idencadrant2);
        }
        else
        {
         $encadr2=null;
        }
       
        $idencadrant3=DB::table('listeencadrant')->select('IDENCADRANT3')->where('IDPROJET', $idprojet)->value('IDENCADRANT3'); 
        if ( $idencadrant3!= $idprof)
        {
            $encadr3=\App\User::find($idencadrant3);
        }
        else
        {
         $encadr3=null;
        }
        $idencadrant4=DB::table('listeencadrant')->select('IDENCADRANT4')->where('IDPROJET', $idprojet)->value('IDENCADRANT4');
        if ( $idencadrant4!= $idprof)
        {
            $encadr4=\App\User::find($idencadrant4);
        }
        else
        {
         $encadr4=null;
        }
        $idetudiant1=DB::table('projetetudiant')->select('IDETUDIANT')->where('IDPROJET1',$idprojet)->orwhere('IDPROJET2',$idprojet)->value('IDETUDIANT');
        
        $idetudiant2=DB::table('projetetudiant')->select('IDETUDIANT')->where('IDETUDIANT','!=', $idetudiant1 )->where('IDPROJET1',$idprojet)->orwhere('IDETUDIANT','!=', $idetudiant1)->where('IDPROJET2',$idprojet)->value('IDETUDIANT');
        
        // $titrproj=DB::table('projet')->select('TITRE')->where('ID', $idprojet)->value('TITRE');
        // $titrephase=DB::table('phase')->select('TITRE')->where('ID', $idphase)->value('TITRE');
        // $encadr1=\App\User::find($idencadrant1);
        /* $encadr2=\App\User::find($idencadrant2);
        $encadr3=\App\User::find($idencadrant3);
        $encadr4=\App\User::find($idencadrant4);*/
        $etud1=\App\User::find($idetudiant1);
        $etud2=\App\User::find($idetudiant2);
        if ($encadr1!= null)
        {
            $encadr1-> notify(new \App\Notifications\annreunion($prof,$reunion) );
        }
        if ($encadr2!= null)
        {
            $encadr2-> notify(new \App\Notifications\annreunion($prof,$reunion) );
        }
        if ($encadr3!= null)
        {
            $encadr3-> notify(new \App\Notifications\annreunion($prof,$reunion) );
        }
        if ($encadr4 != null)
        {
            $encadr4 -> notify(new \App\Notifications\annreunion($prof,$reunion) );
        }
        if ($etud1!= null)
        {
            $etud1-> notify(new \App\Notifications\annreunionetud($prof,$reunion) );
        }
        if ($etud2!= null)
        {
            $etud2-> notify(new \App\Notifications\annreunionetud($prof,$reunion) );
        }

            return \Redirect::route('projet',$idprojet);  
    }
    
}