<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    @php
        $tableau=['tawrirt','agadir','casa']
    @endphp
  @include('headfoot.header')

  @if (auth()->check())
  <style>body{color: #000;overflow-x: hidden;background-image: url("https://i.imgur.com/GMmCQHC.png"); background-repeat: no-repeat;background-size: 100% 60%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}</style>
  <section >
                
        <form action="{{route('addingcompanie')}}" method="post" enctype="multipart/form-data">  
                  @if (Session::has('success'))
                    <div class="alert alert-success " style="text-align: center;">
                       {{Session::get('success')}}   
                   </div>
                     
                 @endif
                 @if (Session::has('fail'))
                    <div class="alert alert-danger" style="text-align: center;">
                       {{Session::get('fail')}}   
                       
                   </div>
                     
                 @endif
                          
 	     @csrf
          <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    <h3>Add company</h3>
                    <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for you.</p>
                    <div class="card">
                        <h5 class="text-center mb-4">Powering world-class companies</h5>
                        
                            
                                <div style="border-radius: 50px; width:50%; padding:10%;margin-left:170px;"  >
                                    <div class="upload">
                                    <img src="storage/logo/utilisateur.png"  class=" mx-auto" style="width:100% ; height:200%;position:relative;right:19px; "> 
                                        <div class="round" style="align-content: center;align-item: center; padding-top:15px;padding-left:3px;">
                                        <i class="bi bi-pen " style="width: 50px;"></i>
                                        <input type="file" name="file" >
                                        <i class = "fa fa-camera" style = "color: #fff;"></i> 
                                    </div>
                                    </div>
                                </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3"> name<span class="text-danger"> *</span></label> <input type="text"  required id="fname" name="name" placeholder="" onblur="validate(1)"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Business email<span class="text-danger"> *</span></label> <input type="email" required id="email" name="email" placeholder="" onblur="validate(3)"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="number"   nin='6'id="mob" name="phone" placeholder="" onblur="validate(4)"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">siren<span class="text-danger"> *</span></label> <input type="text"  name="siren" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">siren_formate<span class="text-danger"> *</span></label> <input type="text"  name="siren_formate" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">nom entreprise<span class="text-danger"> *</span></label> <input type="text"  name="nom_entreprise" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">personne morale<span class="text-danger"> *</span></label> <input type="text"  name="personne_morale" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">denomination<span class="text-danger"> *</span></label> <input type="text"  name="denomination" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">datecreation<span class="text-danger"> *</span></label> <input type="text"  name="date_creation" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">date creation formate<span class="text-danger"> *</span></label> <input type="text"  name="date_creation_formate" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">entreprise cessee<span class="text-danger"> *</span></label> <input type="text"  name="entreprise_cessee" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">date cessation<span class="text-danger"> *</span></label> <input type="text"  name="date_cessation" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">entreprise employeuse<span class="text-danger"> *</span></label> <input type="text"  name="entreprise_employeuse" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">categorie juridique<span class="text-danger"> *</span></label> <input type="text"  name="categorie_juridique" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">annee finances<span class="text-danger"> *</span></label> <input type="text"  name="annee_finances" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">forme juridique<span class="text-danger"> *</span></label> <input type="text"  name="forme_juridique" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">effectif<span class="text-danger"> *</span></label> <input type="text"  name="effectif" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">effectif min<span class="text-danger"> *</span></label> <input type="text"  name="effectif_min" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">effectif max<span class="text-danger"> *</span></label> <input type="text"  name="effectif_max" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">tranche effectif<span class="text-danger"> *</span></label> <input type="text"  name="tranche_effectif" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">annee effectif<span class="text-danger"> *</span></label> <input type="text"  name="annee_effectif" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">capital<span class="text-danger"> *</span></label> <input type="text"  name="capital" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">complement adresse<span class="text-danger"> *</span></label> <input type="text"  name="complement_adresse" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">code postal<span class="text-danger"> *</span></label> <input type="text"  name="code_postal" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">date debut<span class="text-danger"> *</span></label> <input type="text"  name="date debut" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                 <div class="form-group col-sm-6 flex-column d-flex p-2 "> <label class="form-control-label px-3">ville<span class="text-danger"> *</span></label><select class="p-2 bg-white border rounded " name="ville" id="">@foreach ($tableau as $el)<option value="{{$el}}">
                                    {{$el}}
                                    </option>@endforeach</select>  
                                 </div> 
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">nb dirigeants total<span class="text-danger"> *</span></label> <input type="text"  name="nb_dirigeants_total" placeholder="" > </div>
                            </div>
                             	                                                  	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">nb beneficiaires total<span class="text-danger"> *</span></label> <input type="text"  name="nb_beneficiaires_total" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">nb documents avec mentions<span class="text-danger"> *</span></label> <input type="text"  name="nb_documents_avec_mentions" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">nb documents avec mentions<span class="text-danger"> *</span></label> <input type="text"  name="nb_documents_avec_mentions" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">nb documents total<span class="text-danger"> *</span></label> <input type="text"  name="nb_documents_total" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">nb publications avec mentions<span class="text-danger"> *</span></label> <input type="text"  name="nb_publications_avec_mentions" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">nb publications total<span class="text-danger"> *</span></label> <input type="text"  name="nb_publications_total" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">total<span class="text-danger"> *</span></label> <input type="text"  name="total" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">page<span class="text-danger"> *</span></label> <input type="text"  name="page" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">activity<span class="text-danger"> *</span></label> <input type="text"  name="curseurSuivant" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">chiffre affaires<span class="text-danger"> *</span></label> <input type="text"  name="chiffre_affaires" placeholder="" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">resultat<span class="text-danger"> *</span></label> <input type="text"  name="resultat" placeholder="" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">effectifs finances<span class="text-danger"> *</span></label> <input type="text"  name="effectifs_finances" placeholder="" > </div>
                            </div>
                           
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">localisation<span class="text-danger"> *</span></label> <textarea name="iframe" id="" cols="30" rows="10"></textarea> </div>
                            </div>
                           
                            
                            

                            <div class="row justify-content-center p-100 m-100">
                                   <div class="form-group col-sm-6"> <button type="submit" class="btn w-100 btn-success">add campany</button> </div>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form> 
        
        
        
        
        
        
        
    </section>
      
  @else

  <section id="contact" class="contact" >
    <div class="col-lg-8" style="margin-left: 200px; position :relative; bottom:40px;">
         <div class="alert alert-warning">
             <h1 style="margin: 50px;">You have to login </h1>
              <h4>steps:</h4>
              <ul>
                <li> hover nav sign up</li>
                <li> click on registration</li>
                <li> enter your information </li>
                <li> click on register</li>
              </ul>
        </div> 
       
    </div>
   </section> 
   
  @endif
  
   
      @include('headfoot.footer')
    
      <style>
           .upload{
  
  
  position: relative;
  margin: auto;
}

.upload img{
  border-radius: 50%;
  border: 6px solid #eaeaea;
 
}

.upload .round{
  position: absolute;
  bottom: 3px;
  
  
  right: 4px;
  background: #2eac90;
  width: 60px;
  height: 60px;
  line-height: 33px;
  text-align: center;
  border-radius: 50%;
  overflow: hidden;
}

.upload .round input[type = "file"]{
  position: absolute;
  transform: scale(2);
  opacity: 0;
}

input[type=file]::-webkit-file-upload-button{
    cursor: pointer;
}
      </style>
</body>
</html>