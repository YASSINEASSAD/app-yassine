<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your campanies</title>
</head>

<style>
.card{
   justify-content: center;
     margin: 5% 5% ; 
  
    
    
 
}
.col-2{
    align-content: center;
    align-items:center; 
    text-align:center;
}
.bi-buildings{
  width: 100%;
  height: 100%;
}
</style>
<body>

@include('headfoot.header')
@if (auth()->check())
    
 
     
 
    @if ( Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}   
        </div>       
    @endif
    @if ( Session::has('fail'))
          <div class="alert alert-danger">
            {{Session::get('fail')}}   
        </div>   
    @endif
        
 @if (count($data)!=0)  

    @foreach ($data as $item)
      <form >
        @csrf
        <div class="card">
            <div class="card-header  ">
                  <div class="d-flex " >
                      <img width="200" height="200" style=" margin:5px;"  src="{{asset('storage/logo/'.$item->file)}}" alt="">
                      <div class="">
                          <h1 class="px-5 "> {{$item->name}}</h1>
                          <div class="d-flex py-3">
                              <p class="px-5"> {{$item->email}}</p>
                              <p class="px-5" >  {{$item->phone }}</p>
                          </div>
                          <p class="px-5">capital : {{$item->capital}}</p>
                          <p class="px-5">adress : {{$item->complement_adresse }}</p>
                          <p class="px-5">activity : {{$item->curseurSuivant  }}</p>
                      </div>
                  </div>
                    
            </div>
            <h5 class="card-title m-3"    >More information about {{$item->name}} </h5>
            <div class="card-body " style=" margin-left: 40px;">
              <div >
                <div id="idOfcontent">
                 
                  <table class="table table-striped " style="">
                    <tr><td style='color:#95BDFF; width:500Px;'> siren </td><td style='color:#86C8BC; margin-left:0; '>{{$item->siren}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> siren formate  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->siren_formate}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> nom entreprise  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->nom_entreprise}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> personne morale  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->personne_morale}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> denomination  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->denomination}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> date creation  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->date_creation}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> date creation formate  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->date_creation_formate}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> entreprise cessee  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->entreprise_cessee}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> date cessation </td><td style='color:#86C8BC; margin-left:0; '>{{$item->date_cessation}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> entreprise employeuse  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->entreprise_employeuse}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> categorie juridique  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->categorie_juridique}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> forme juridique  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->forme_juridique}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> effectif  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->effectif}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> effectif min  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->effectif_min}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> effectif max  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->effectif_max}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> tranche effectif  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->tranche_effectif}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> annee effectif  </td><td style='color:#86C8BC; margin-left:0; '>{{$item->annee_effectif}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> capital  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->capital}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> complement adresse  </td><td style='color:#71c0b2;'>{{$item->complement_adresse}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> code postal  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->code_postal}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> nb dirigeants total  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->nb_dirigeants_total}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> ville  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->ville}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> nb beneficiaires total  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->nb_beneficiaires_total}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> nb documents avec_mentions  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->nb_documents_avec_mentions}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> nb documents total  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->nb_documents_total}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> nb publications avec_mentions  </td><td>{{$item->nb_publications_avec_mentions}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> nb publications total  </td style='color:#86C8BC; margin-left:0;'><td>{{$item->nb_publications_total}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> total  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->total}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> page  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->page}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> curseurSuivant  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->curseurSuivant}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> chiffre affaires  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->chiffre_affaires}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> resultat  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->resultat}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> effectifs finances  </td><td style='color:#86C8BC; margin-left:0;'>{{$item->effectifs_finances}}</td></tr>
                    <tr><td style='color:#95BDFF; width:500Px;'> annee finances </td><td style='color:#86C8BC; margin-left:0;'>{{$item->annee_finances}}</td></tr>   
                  </table>
                  @php
                   echo $item->iframe;
                  @endphp                   
                <div style=" "class='row m-auto' >
                        <div class="col-2"></div>
                        <a class="btn btn-danger p-1  col-2 mx-3" href="{{route('deletecampanie',['id'=>$item->id])}}" > <img src="trash.svg" alt=""> delete</a>
                        <div class="col-3"></div>
                        <a  class="btn btn-success p-1 col-2 mx-3"  href="{{route('updatecampanie',['id'=>$item->id])}}" > <img src="pen.svg" alt=""> update</a>
                        <div class="col-3"></div>
                  </div> 
                </div>
              </div>
             

            </div>
          </div> 
                        </div>
                </div>  
            </div>
      </div>    
         
          <input type="hidden" name="idcampanie" value="{{$item->id}}">

    </form>
   
    @endforeach   
  @else
            <section id="contact" class="contact" >
                <div class="col-lg-8" style="margin-left: 200px; position :relative; bottom:40px;">
                    <div class="alert alert-warning">
                        <h1 style="margin: 50px;">You don't have any campany </h1>
                       
                    </div> 
                
                </div>
            </section> 
     
  @endif
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
</body>
</html>