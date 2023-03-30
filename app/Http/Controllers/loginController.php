<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\companies;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;



class loginController extends Controller
{
    public function login(){
      // $user = auth()->user()->name;
      //  return $user;

      // \Auth::logout();
        return view('auth.login');
    }
    public function registration(){
        return view('auth.registration');
        
    }
    public function registreentreprise(Request $request){


        
       
        // return  $request->file;

       $request->validate([
        'name'=>'required',
        'password'=>'required',
        'email'=>'required|email'
        ]);
        $user=new User();
        if($request->hasFile("file")){
            $img = $request->file;
            $name =time().$img->getClientOriginalName();
            $img->storeAs('logo',$name,'public');
            $user->file=$name;
            
            
        }
        $user->name = $request->name;
        $user->password = bcrypt($request->password) ;  
        $user->email= $request->email;
        $res=$user->save();
        // return $user;

// $user->password = Hash::make($request->password) ;
        // $ent=new entreprise();
        // $ent->bisness_Name= $request->name;
        // $ent->bisness_email= $request->email;
        // $ent->bisness_password= FacadesHash::make($request->password);
        // $ent->bisness_password=$request-> ;
        
        
        if($res){
            return back()->with('success','regestred');
        }else{
        }
        
    }
    public function loginentreprise(Request $request){
       
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (Auth::attempt(["email"=>$request->email,"password"=>$request->password])) {       
             return   redirect('home'); 
           // return redirect()->intended('dashboard');
        }else{
        return redirect('/login')->with('fail','email or password incorrect');
        }


        
        // return $request->all();


           
            
        
        //  if($entr){
        //     if (Hash::check($request->password,$entr->password) ) {
        //          $request->session()->put('id',$entr);
        //         return   redirect('dachbord');
        //     }
        //     else{ 
        //         return back()->with('fail','password incorrect');
        //     }
            
              
        //  }
        //  else{return back()->with('fail','email incorrect');}

       
        
    }
    public function dachbord(Request $request){
       //($request->session()->get('id'))
     
    //    if($request->session()->has('id') ){
    //     $data=User::where('email','=',$request->email);
    //    }
       return view('dachbord') ;
    }
    public function logout(Request $request){
            Auth::logout();
            return redirect("login");
    }
    public function index(Request $request){
       return view('pages.index');
        
    }



   /*  profil */



 public function profil(){
       return view('profil');
}
 public function home(){
      $data=companies::orderByRaw('RAND()')->limit(6)->get();

      $London=companies::where('ville','=','London')->get();
      $Paris=companies::where('ville','=','Paris')->get();
      $Tokyo=companies::where('ville','=','Tokyo')->get();
        
       return view('home',['data'=>$data ,'London'=>$London,'Paris'=>$Paris,'Tokyo'=>$Tokyo]);
        
    }

 public function updateprofil(Request $request){
      
     $user= User::find(auth()->user()->id);
     if($request->hasFile('file')){
           $img= $request->file ;
           $name=time().$img->getClientOriginalName();
           $img->storeAs('logo',$name,'public');
          $user->file=$name;
     }   
     
     $user->name=$request->name;   
     $user->email=$request->email;   
     $user->password=bcrypt($request->password); 
     $resl=$user->save();
     if($resl){
        return back()->with('success','updated');
      
      }
      else{
        return back()->with('fail','not updated');
     }

    }

 public function addingcompanie(Request $request){
    

    $comp=new companies;
    if($request->has('file')){
        $img= $request->file ;
        $name=time().$img->getClientOriginalName();
        $img->storeAs('logo',$name,'public');
        $comp->file=$name;
  }         	
    $comp->phone =$request->phone;         	
    $comp->name =$request->name;                   	
    $comp->email =$request->email;                   	
    $comp->siren =$request->siren;                   	
    $comp->siren_formate =$request->siren_formate  ;                 
    $comp->nom_entreprise=$request->nom_entreprise ;                  
    $comp->personne_morale=$request->personne_morale; 
    $comp->denomination 	=$request->denomination    ;         
    $comp->date_creation 	=$request->date_creation ;                 
    $comp->date_creation_formate  =$request->date_creation_formate   ;                 	
    $comp->entreprise_cessee 	=$request->entreprise_cessee   ;
    $comp->date_cessation 	=$request->date_cessation    ;
    $comp->entreprise_employeuse=$request->entreprise_employeuse   ;
    $comp->categorie_juridique=$request->categorie_juridique   ;
    $comp->forme_juridique 	=$request->forme_juridique     ;
    $comp->effectif 	=$request-> effectif   ;
    $comp->effectif_min 	=$request->effectif_min     ;
    $comp->effectif_max =$request-> effectif_max    ;	
    $comp->tranche_effectif =$request->tranche_effectif    ;	
    $comp->annee_effectif 	=$request-> annee_effectif ;
    $comp->capital 	=$request-> capital    ;
    $comp->complement_adresse =$request->complement_adresse     ;	
    $comp->code_postal 	=$request->code_postal     ;
    $comp->ville 	=$request->  ville   ;
    $comp->nb_dirigeants_total =$request->nb_dirigeants_total   ;	
    $comp->nb_beneficiaires_total=$request-> nb_beneficiaires_total    ; 	
    $comp->nb_documents_avec_mentions =$request->     nb_documents_avec_mentions;	
    $comp->nb_documents_total 	=$request->nb_documents_total     ;
    $comp->nb_publications_avec_mentions=$request->   nb_publications_avec_mentions  ; 	
    $comp->nb_publications_total =$request->nb_publications_total     ;	
    $comp->total=$request->total; 
    $comp->page=$request->page;
    $comp->curseurSuivant=$request->curseurSuivant; 	
    $comp->chiffre_affaires =$request->chiffre_affaires;	
    $comp->resultat =$request->resultat;	
    $comp->effectifs_finances=$request->effectifs_finances; 	
    $comp->annee_finances=$request->annee_finances; 
    $comp->iframe=$request->iframe; 
    if ( auth()->user()->id ) {
        $comp->user_id=auth()->user()->id; 
    }else{
        return back()->with('fail','not added');
    }
    $res=$comp->save();
    if($res){
        return back()->with('success','companie added');   
    }else{
        return back()->with('fail','not added');
    }

        
    }



 public function addcampanie(){ 
        return view('addcampanie');        
    }


 public function yourcampanies(){ 
    if(auth()->check()){
        $data=User::find(auth()->user()->id)->campanies;
        return view('yourcampanies',['data'=>$data] ); 
    }
    return view('yourcampanies' ); 

              
    }

 public function deletecampanie(Request $request,$id){ 
    
    $comp=companies::find($id)->delete();
    if($comp){
       return back()->with('success',"deleted");
    }else{
        return back()->with('fail',"An error has happened");
    }
    

}
 public function updatecampanie(Request $request,$id){ 
    
    $data=companies::where('id',$id)->first();
 
     $user=companies::find($id)->User;

     if($user->id===auth()->user()->id){   
         return view('updatecampanie',['data'=>$data] ); 
     }else{
        return  abort(403);
     }

    
     
    
    

}
 public function updatingcampanie(Request $request){ 
    $comp=companies::where('id',$request->idcampanie)->first();
    
    if($request->has('file')){
        $img= $request->file ;
        $name=time().$img->getClientOriginalName();
        $img->storeAs('logo',$name,'public');
        $comp->file=$name;
  }   
                      	
    $comp->phone =$request->phone;                   	
    $comp->name =$request->name;                   	
    $comp->email =$request->email;                   	
    $comp->siren =$request->siren;                   	
    $comp->siren_formate =$request->siren_formate  ;                 
    $comp->nom_entreprise=$request->nom_entreprise ;                  
    $comp->personne_morale=$request->personne_morale; 
    $comp->denomination =$request->denomination    ;         
    $comp->date_creation =$request->date_creation ;                 
    $comp->date_creation_formate  =$request->date_creation_formate   ;                 	
    $comp->entreprise_cessee =$request->entreprise_cessee   ;
    $comp->date_cessation =$request->date_cessation    ;
    $comp->entreprise_employeuse=$request->entreprise_employeuse   ;
    $comp->categorie_juridique=$request->categorie_juridique   ;
    $comp->forme_juridique=$request->forme_juridique     ;
    $comp->effectif =$request-> effectif   ;
    $comp->effectif_min =$request->effectif_min     ;
    $comp->effectif_max =$request-> effectif_max    ;	
    $comp->tranche_effectif =$request->tranche_effectif    ;	
    $comp->annee_effectif 	=$request-> annee_effectif ;
    $comp->capital 	=$request-> capital    ;
    $comp->complement_adresse =$request->complement_adresse     ;	
    $comp->code_postal 	=$request->code_postal     ;
    $comp->ville 	=$request->  ville   ;
    $comp->nb_dirigeants_total =$request->nb_dirigeants_total   ;	
    $comp->nb_beneficiaires_total=$request-> nb_beneficiaires_total    ; 	
    $comp->nb_documents_avec_mentions =$request->     nb_documents_avec_mentions;	
    $comp->nb_documents_total 	=$request->nb_documents_total     ;
    $comp->nb_publications_avec_mentions=$request->   nb_publications_avec_mentions  ; 	
    $comp->nb_publications_total =$request->nb_publications_total     ;	
    $comp->total=$request->total; 
    $comp->page=$request->page;
    $comp->curseurSuivant=$request->curseurSuivant; 	
    $comp->chiffre_affaires =$request->chiffre_affaires;	
    $comp->resultat =$request->resultat;	
    $comp->effectifs_finances=$request->effectifs_finances; 	
    $comp->annee_finances=$request->annee_finances; 
    $comp->iframe=$request->iframe; 
    
    if ( auth()->user()->id ) {
        $comp->user_id=auth()->user()->id; 
    }else{
        return back()->with('fail','not added');
    }
    $res=$comp->save();
    if($res){
        return back()->with('success','companie added');   
    }else{
        return back()->with('fail','not added');
    }


}
public function search(Request $request){ 

    if($request->subject){
        $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->get();     
        if ($request->ville) {
            if ($request->email) {
                $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('ville', 'LIKE', '%'.$request->ville)->orWhere('ville', 'LIKE', $request->ville.'%')->where('email', 'LIKE', '%'.$request->email.'%')->orWhere('email', 'LIKE', '%'.$request->email)->orWhere('email', 'LIKE', $request->email.'%')->get();        
            } else {
               $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('ville', 'LIKE', '%'.$request->ville)->orWhere('ville', 'LIKE', $request->ville.'%')->get();        
            }
            
        }
        if ($request->email) {
            if ($request->ville) {
                $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('ville', 'LIKE', '%'.$request->ville)->orWhere('ville', 'LIKE', $request->ville.'%')->where('email', 'LIKE', '%'.$request->email.'%')->orWhere('email', 'LIKE', '%'.$request->email)->orWhere('email', 'LIKE', $request->email.'%')->get();        
            } else {
               $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('email', 'LIKE', '%'.$request->email.'%')->orWhere('email', 'LIKE', '%'.$request->email)->orWhere('email', 'LIKE', $request->email.'%')->get();        
            }
            
        }
        return  view('search',['data'=>$data]);

       
    }
    
    elseif($request->ville){
        $data = companies::where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('ville', 'LIKE', '%'.$request->ville)->orWhere('ville', 'LIKE', $request->ville.'%')->get();     
        if ($request->subject) {
            if ($request->email) {
                $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('ville', 'LIKE', '%'.$request->ville)->orWhere('ville', 'LIKE', $request->ville.'%')->where('email', 'LIKE', '%'.$request->email.'%')->orWhere('email', 'LIKE', '%'.$request->email)->orWhere('email', 'LIKE', $request->email.'%')->get();        
            } else {
               $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('ville', 'LIKE', '%'.$request->ville)->orWhere('ville', 'LIKE', $request->ville.'%')->get();        
            }
            
        }
        if ($request->email) {
            if ($request->subject) {
                $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('ville', 'LIKE', '%'.$request->ville)->orWhere('ville', 'LIKE', $request->ville.'%')->where('email', 'LIKE', '%'.$request->email.'%')->orWhere('email', 'LIKE', '%'.$request->email)->orWhere('email', 'LIKE', $request->email.'%')->get();        
            } else {
               $data = companies::where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('ville', 'LIKE', '%'.$request->ville)->orWhere('ville', 'LIKE', $request->ville.'%')->where('email', 'LIKE', '%'.$request->email.'%')->orWhere('email', 'LIKE', '%'.$request->ville)->orWhere('email', 'LIKE', $request->email.'%')->get();        
            }
            
        }
        return  view('search',['data'=>$data]);

       
    }

    elseif($request->email){
        $data = companies::where('email', 'LIKE', '%'.$request->email.'%')->orWhere('email', 'LIKE', '%'.$request->email)->orWhere('email', 'LIKE', $request->email.'%')->get();     
        if ($request->subject) {
            if ($request->ville) {
                $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('ville', 'LIKE', '%'.$request->ville)->orWhere('ville', 'LIKE', $request->ville.'%')->where('email', 'LIKE', '%'.$request->email.'%')->orWhere('email', 'LIKE', '%'.$request->email)->orWhere('email', 'LIKE', $request->email.'%')->get();        
            } else {
               $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('email', 'LIKE', '%'.$request->ville.'%')->orWhere('email', 'LIKE', '%'.$request->email)->orWhere('email', 'LIKE', $request->email.'%')->get();        
            }
            
        }
        if ($request->ville) {
            if ($request->subject) {
                $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('ville', 'LIKE', '%'.$request->ville)->orWhere('ville', 'LIKE', $request->ville.'%')->where('email', 'LIKE', '%'.$request->email.'%')->orWhere('email', 'LIKE', '%'.$request->email)->orWhere('email', 'LIKE', $request->email.'%')->get();        
            } else {
               $data = companies::where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('ville', 'LIKE', '%'.$request->ville)->orWhere('ville', 'LIKE', $request->ville.'%')->where('email', 'LIKE', '%'.$request->email.'%')->orWhere('email', 'LIKE', '%'.$request->email)->orWhere('email', 'LIKE', $request->email.'%')->get();        
            }
            
        }
        return  view('search',['data'=>$data]);

       
    }
    if(!$request->subject && $request->ville && $request->email){
        return  view('search',['data'=>[]]);
    }

    
    
    
    
    // elseif($request->ville){
    //     $data = companies::where('name', 'LIKE', '%'.$request->ville.'%')->orWhere('name', 'LIKE', '%'.$request->ville)->orWhere('name', 'LIKE', $request->ville.'%')->get();     
    //     if ($request->name) {
    //         $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('name', 'LIKE', '%'.$request->ville)->orWhere('name', 'LIKE', $request->ville.'%')->get();        
    //     }
    //     if ($request->email) {
    //         $data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->where('ville', 'LIKE', '%'.$request->ville.'%')->orWhere('name', 'LIKE', '%'.$request->ville)->orWhere('name', 'LIKE', $request->ville.'%')->get();        
    //     }

    // }
   
    
    
    
    
   
    
    //$data = companies::where('name', 'LIKE', '%'.$request->subject.'%')->orWhere('name', 'LIKE', '%'.$request->subject)->orWhere('name', 'LIKE', $request->subject.'%')->get();     
   
    // $data = companies::where('name', 'LIKE', '%'.$t.'%')->get();
  

}

public function profcamp(Request $request){ 
        
       $data=companies::find($request->profcamp);

       
       if ($data) {
           return view('profilcampanie',['data'=>$data]);
       }else{
        return back();
       }

}
public function profcomphome($id){ 
        
       $data=companies::find($id);
       if ($data) {
           return view('profilcampanie',['data'=>$data]);
       }else{
           return back();
       }

}
public function profilewhithoutinputs(Request $request){ 
        
     return view('profilewhithoutinputs');
}

public function affprofilecampanies(Request $request,$city){ 

    $data=companies::where('ville','=',$city)->get();
     return view('affprofilecampanies',['data'=>$data]);
}



}