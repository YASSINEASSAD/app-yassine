<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .card{
   justify-content: center;
    margin: 5% 20% ;
  
    
    
 
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

           <div class="card">
            <div class="card-header  ">
                  <div class="d-flex " >
                      <img width="200" height="200" style=" margin:5px;"  src="{{asset('storage/logo/'.$data->file)}}" alt="">
                      <div class="">
                          <h1 class="px-5 "> {{$data->name}}</h1>
                          <div class="d-flex py-3">
                              <p class="px-5"> {{$data->email}}</p>
                              <p class="px-5" >  {{$data->phone }}</p>
                          </div>
                          <p class="px-5">capital : {{$data->capital}}</p>
                          <p class="px-5">adress : {{$data->complement_adresse }}</p>
                          <p class="px-5">activity : {{$data->curseurSuivant  }}</p>
                      </div>
                  </div>
                    
            </div>
            <h5 class="card-title m-3"    >More information about {{$data->name}} </h5>
            <div class="card-body " style=" ">
              <div >
                <div id="idOfcontent">
                  <table class="table table-striped " style="">
                    <tr><td style='color:#95BDFF;  width:250Px; '> siren   </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->siren}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> siren formate  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->siren_formate}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> nom entreprise  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->nom_entreprise}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> personne morale  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->personne_morale}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> denomination  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->denomination}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> date creation  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->date_creation}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> date creation formate  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->date_creation_formate}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> entreprise cessee  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->entreprise_cessee}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> date cessation </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->date_cessation}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> entreprise employeuse  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->entreprise_employeuse}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> categorie juridique  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->categorie_juridique}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> forme juridique  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->forme_juridique}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> effectif  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->effectif}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> effectif min  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->effectif_min}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> effectif max  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->effectif_max}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> tranche effectif  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->tranche_effectif}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> annee effectif  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->annee_effectif}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> capital  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->capital}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> complement adresse  </td><td style='color:#71c0b2;padding-left:50px; ;'>{{$data->complement_adresse}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> code postal  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->code_postal}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> nb dirigeants total  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->nb_dirigeants_total}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> ville  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->ville}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> nb beneficiaires total  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->nb_beneficiaires_total}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> nb documents avec_mentions  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->nb_documents_avec_mentions}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> nb documents total  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->nb_documents_total}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> nb publications avec_mentions  </td><td>{{$data->nb_publications_avec_mentions}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> nb publications total  </td style='color:#86C8BC;padding-left:50px; ;'><td>{{$data->nb_publications_total}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> total  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->total}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> page  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->page}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> curseurSuivant  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->curseurSuivant}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> chiffre affaires  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->chiffre_affaires}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> resultat  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->resultat}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> effectifs finances  </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->effectifs_finances}}</td></tr>
                    <tr><td style='color:#95BDFF;  width:250Px;'> annee finances </td><td style='color:#86C8BC;padding-left:50px; ;'>{{$data->annee_finances}}</td></tr>
                     
                </table>
                  
                
              </div>
              </div>
              <a id="idOfshowmore" class="btn btn-success">Show More</a>
              
            </div>
          </div>

          <div class="card ">
            <h2 class="m-auto py-2">location</h2>
            @php
               echo '<div class="m-auto my-5">' .$data->iframe .'</div>'
           @endphp 
           
          </div>





     

          
      @include('headfoot.footer')       
 

   <script>
   let contentVar = document.getElementById("idOfcontent");
let buttonVar = document.getElementById("idOfshowmore");

buttonVar.onclick = function() {
  if (contentVar.className == "classOfopen") {
    // shrink the box
    contentVar.className = "";
    buttonVar.innerHTML = "Show More";
  } else {
    // expand the box
    contentVar.classList.add('classOfopen');  /* classList.add() is the correct way of adding classes */
    buttonVar.innerHTML = "Show Less";

  }
}
   </script>
      <style>
 
 body {
  background: #eee;
}

#idOfcontent {
 
  width: 90%;
  background: #ffff;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: 18px;
  color: #444;
  margin: 0 ;
  max-height: 100px;
  overflow: hidden;
  /* Set transitions up */
  -webkit-transition: max-height 0.7s;
  -moz-transition: max-height 0.7s;
  transition: max-height 0.7s;
}

#idOfcontent.classOfopen { /* <- removed the space */
  max-height: 1000px;
  /* Set transitions up */
  /* for smooth transition */
  -webkit-transition: max-height 0.7s;
  -moz-transition: max-height 0.7s;
  transition: max-height 0.7s;
}

#idOfshowmore {
 
 
  display: block;
  width: 140px;
  font-size: 17pxx;
  text-transform: uppercase;
  padding: 10px;
  text-align: center;
  margin: 20px auto;
  cursor: pointer;
}

        /**
* Template Name: Impact - v1.2.0
* Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# Set main reusable colors and fonts using CSS variables
# Learn more about CSS variables at https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties
--------------------------------------------------------------*/
/* Fonts */
:root {
  --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-primary: "Montserrat", sans-serif;
  --font-secondary: "Poppins", sans-serif;
}

/* Colors */
:root {
  --color-default: #222222;
  --color-primary: #008374;
  --color-secondary: #f85a40;
}

/* Smooth scroll behavior */
:root {
  scroll-behavior: smooth;
}

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: var(--font-default);
  color: var(--color-default);
}

a {
  color: var(--color-primary);
  text-decoration: none;
}

a:hover {
  color: #00b6a1;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: var(--font-primary);
}

/*--------------------------------------------------------------
# Sections & Section Header
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.sections-bg {
  background-color: #f6f6f6;
}

.section-header {
  text-align: center;
  padding-bottom: 60px;
}

.section-header h2 {
  font-size: 32px;
  font-weight: 600;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.section-header h2:after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: var(--color-primary);
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
}

.section-header p {
  margin-bottom: 0;
  color: #6f6f6f;
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs .page-header {
  padding: 60px 0 60px 0;
  min-height: 20vh;
  position: relative;
  background-color: var(--color-primary);
}

.breadcrumbs .page-header h2 {
  font-size: 56px;
  font-weight: 500;
  color: #fff;
  font-family: var(--font-secondary);
}

.breadcrumbs .page-header p {
  color: rgba(255, 255, 255, 0.8);
}

.breadcrumbs nav {
  background-color: #f6f6f6;
  padding: 20px 0;
}

.breadcrumbs nav ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
  font-size: 16px;
  font-weight: 600;
  color: var(--color-default);
}

.breadcrumbs nav ol a {
  color: var(--color-primary);
  transition: 0.3s;
}

.breadcrumbs nav ol a:hover {
  text-decoration: underline;
}

.breadcrumbs nav ol li+li {
  padding-left: 10px;
}

.breadcrumbs nav ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: var(--color-secondary);
  content: "/";
}

/*--------------------------------------------------------------
# Scroll top button
--------------------------------------------------------------*/
.scroll-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: -15px;
  z-index: 99999;
  background: var(--color-secondary);
  width: 44px;
  height: 44px;
  border-radius: 50px;
  transition: all 0.4s;
}

.scroll-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}

.scroll-top:hover {
  background: rgba(248, 90, 64, 0.8);
  color: #fff;
}

.scroll-top.active {
  visibility: visible;
  opacity: 1;
  bottom: 15px;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  inset: 0;
  z-index: 999999;
  overflow: hidden;
  background: #fff;
  transition: all 0.6s ease-out;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #fff;
  border-color: var(--color-primary) transparent var(--color-primary) transparent;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  -webkit-animation: animate-preloader 1.5s linear infinite;
  animation: animate-preloader 1.5s linear infinite;
}

@-webkit-keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
.topbar {
  background: #00796b;
  height: 40px;
  font-size: 14px;
  transition: all 0.5s;
  color: #fff;
  padding: 0;
}

.topbar .contact-info i {
  font-style: normal;
  color: #fff;
  line-height: 0;
}

.topbar .contact-info i a,
.topbar .contact-info i span {
  padding-left: 5px;
  color: #fff;
}

@media (max-width: 575px) {

  .topbar .contact-info i a,
  .topbar .contact-info i span {
    font-size: 13px;
  }
}

.topbar .contact-info i a {
  line-height: 0;
  transition: 0.3s;
}

.topbar .contact-info i a:hover {
  color: #fff;
  text-decoration: underline;
}

.topbar .social-links a {
  color: rgba(255, 255, 255, 0.7);
  line-height: 0;
  transition: 0.3s;
  margin-left: 20px;
}

.topbar .social-links a:hover {
  color: #fff;
}

.header {
  transition: all 0.5s;
  z-index: 997;
  height: 90px;
  background-color: var(--color-primary);
}

.header.sticked {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  height: 70px;
  box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.1);
}

.header .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.header .logo h1 {
  font-size: 30px;
  margin: 0;
  font-weight: 600;
  letter-spacing: 0.8px;
  color: #fff;
  font-family: var(--font-primary);
}

.header .logo h1 span {
  color: #f96f59;
}

.sticked-header-offset {
  margin-top: 70px;
}

section {
  scroll-margin-top: 70px;
}

/*--------------------------------------------------------------
# Desktop Navigation
--------------------------------------------------------------*/
@media (min-width: 1280px) {
  .navbar {
    padding: 0;
  }

  .navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }

  .navbar li {
    position: relative;
  }

  .navbar>ul>li {
    white-space: nowrap;
    padding: 10px 0 10px 28px;
  }

  .navbar a,
  .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 3px;
    font-family: var(--font-secondary);
    font-size: 16px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.6);
    white-space: nowrap;
    transition: 0.3s;
    position: relative;
  }

  .navbar a i,
  .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }

  .navbar>ul>li>a:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: -6px;
    left: 0;
    background-color: var(--color-secondary);
    visibility: hidden;
    width: 0px;
    transition: all 0.3s ease-in-out 0s;
  }

  .navbar a:hover:before,
  .navbar li:hover>a:before,
  .navbar .active:before {
    visibility: visible;
    width: 100%;
  }

  .navbar a:hover,
  .navbar .active,
  .navbar .active:focus,
  .navbar li:hover>a {
    color: #fff;
  }

  .navbar .dropdown ul {
    display: block;
    position: absolute;
    left: 28px;
    top: calc(100% + 30px);
    margin: 0;
    padding: 10px 0;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    transition: 0.3s;
    border-radius: 4px;
  }

  .navbar .dropdown ul li {
    min-width: 200px;
  }

  .navbar .dropdown ul a {
    padding: 10px 20px;
    font-size: 15px;
    text-transform: none;
    font-weight: 600;
    color: #006a5d;
  }

  .navbar .dropdown ul a i {
    font-size: 12px;
  }

  .navbar .dropdown ul a:hover,
  .navbar .dropdown ul .active:hover,
  .navbar .dropdown ul li:hover>a {
    color: var(--color-secondary);
  }

  .navbar .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navbar .dropdown .dropdown ul {
    top: 0;
    left: calc(100% - 30px);
    visibility: hidden;
  }

  .navbar .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
    visibility: visible;
  }
}

@media (min-width: 1280px) and (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

@media (min-width: 1280px) {

  .mobile-nav-show,
  .mobile-nav-hide {
    display: none;
  }
}

/*--------------------------------------------------------------
# Mobile Navigation
--------------------------------------------------------------*/
@media (max-width: 1279px) {
  .navbar {
    position: fixed;
    top: 0;
    right: -100%;
    width: 100%;
    max-width: 400px;
    bottom: 0;
    transition: 0.3s;
    z-index: 9997;
  }

  .navbar ul {
    position: absolute;
    inset: 0;
    padding: 50px 0 10px 0;
    margin: 0;
    background: rgba(0, 131, 116, 0.9);
    overflow-y: auto;
    transition: 0.3s;
    z-index: 9998;
  }

  .navbar a,
  .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    font-family: var(--font-primary);
    font-size: 15px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.7);
    white-space: nowrap;
    transition: 0.3s;
  }

  .navbar a i,
  .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }

  .navbar a:hover,
  .navbar .active,
  .navbar .active:focus,
  .navbar li:hover>a {
    color: #fff;
  }

  .navbar .getstarted,
  .navbar .getstarted:focus {
    background: var(--color-primary);
    padding: 8px 20px;
    border-radius: 4px;
    margin: 15px;
    color: #fff;
  }

  .navbar .getstarted:hover,
  .navbar .getstarted:focus:hover {
    color: #fff;
    background: rgba(0, 131, 116, 0.8);
  }

  .navbar .dropdown ul,
  .navbar .dropdown .dropdown ul {
    position: static;
    display: none;
    padding: 10px 0;
    margin: 10px 20px;
    transition: all 0.5s ease-in-out;
    background-color: #007466;
    border: 1px solid #006459;
  }

  .navbar .dropdown>.dropdown-active,
  .navbar .dropdown .dropdown>.dropdown-active {
    display: block;
  }

  .mobile-nav-show {
    color: rgba(255, 255, 255, 0.6);
    font-size: 28px;
    cursor: pointer;
    line-height: 0;
    transition: 0.5s;
    z-index: 9999;
    margin-right: 10px;
  }

  .mobile-nav-hide {
    color: #fff;
    font-size: 32px;
    cursor: pointer;
    line-height: 0;
    transition: 0.5s;
    position: fixed;
    right: 20px;
    top: 20px;
    z-index: 9999;
  }

  .mobile-nav-active {
    overflow: hidden;
  }

  .mobile-nav-active .navbar {
    right: 0;
  }

  .mobile-nav-active .navbar:before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0, 106, 93, 0.8);
    z-index: 9996;
  }
}

/*--------------------------------------------------------------
# About Us Section
--------------------------------------------------------------*/
.about h3 {
  font-weight: 700;
  font-size: 28px;
  margin-bottom: 20px;
  font-family: var(--font-secondary);
}

.about .call-us {
  left: 10%;
  right: 10%;
  bottom: 0;
  background-color: #fff;
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.08);
  padding: 20px;
  text-align: center;
}

.about .call-us h4 {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 5px;
}

.about .call-us p {
  font-size: 28px;
  font-weight: 700;
  color: var(--color-primary);
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding: 0 0 10px 30px;
  position: relative;
}

.about .content ul i {
  position: absolute;
  font-size: 20px;
  left: 0;
  top: -3px;
  color: var(--color-primary);
}

.about .content p:last-child {
  margin-bottom: 0;
}

.about .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(var(--color-primary) 50%, rgba(0, 131, 116, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: absolute;
  left: calc(50% - 47px);
  top: calc(50% - 47px);
  overflow: hidden;
}

.about .play-btn:before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(0, 131, 116, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

.about .play-btn:after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.about .play-btn:hover:before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}

.about .play-btn:hover:after {
  border-left: 15px solid var(--color-primary);
  transform: scale(20);
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Clients Section
--------------------------------------------------------------*/
.clients {
  padding: 40px 0;
}

.clients .swiper {
  padding: 10px 0;
}

.clients .swiper-slide img {
  transition: 0.3s;
}

.clients .swiper-slide img:hover {
  transform: scale(1.1);
}

.clients .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.clients .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  background-color: #ddd;
}

.clients .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--color-primary);
}

/*--------------------------------------------------------------
# Stats Counter Section
--------------------------------------------------------------*/
.stats-counter {
  padding: 40px 0;
}

.stats-counter .stats-item {
  padding: 20px 0;
  border-bottom: 1px solid #e4e4e4;
}

.stats-counter .stats-item .purecounter {
  min-width: 90px;
  padding-right: 15px;
}

.stats-counter .stats-item i {
  font-size: 44px;
  line-height: 0;
  margin-right: 15px;
}

.stats-counter .stats-item span {
  font-size: 40px;
  display: block;
  font-weight: 700;
  color: var(--color-primary);
  line-height: 40px;
}

.stats-counter .stats-item p {
  margin: 0;
  font-family: var(--font-primary);
  font-size: 14px;
}

/*--------------------------------------------------------------
# Call To Action Section
--------------------------------------------------------------*/
.call-to-action .container {
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../img/cta-bg.jpg") center center;
  background-size: cover;
  padding: 100px 60px;
  border-radius: 15px;
  overflow: hidden;
}

.call-to-action h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 20px;
}

.call-to-action p {
  color: #fff;
  margin-bottom: 20px;
}

.call-to-action .play-btn {
  width: 94px;
  height: 94px;
  margin-bottom: 20px;
  background: radial-gradient(var(--color-primary) 50%, rgba(0, 131, 116, 0.4) 52%);
  border-radius: 50%;
  display: inline-block;
  position: relative;
  overflow: hidden;
}

.call-to-action .play-btn:before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(0, 131, 116, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

.call-to-action .play-btn:after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.call-to-action .play-btn:hover:before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}

.call-to-action .play-btn:hover:after {
  border-left: 15px solid var(--color-primary);
  transform: scale(20);
}

.call-to-action .cta-btn {
  font-family: var(--font-primary);
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 48px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid #fff;
  color: #fff;
}

.call-to-action .cta-btn:hover {
  background: var(--color-primary);
  border: 2px solid var(--color-primary);
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Our Services Section
--------------------------------------------------------------*/
.services {
  padding: 60px 0;
}

.services .service-item {
  padding: 40px;
  background: #fff;
  height: 100%;
  border-radius: 10px;
}

.services .service-item .icon {
  width: 48px;
  height: 48px;
  position: relative;
  margin-bottom: 50px;
}

.services .service-item .icon i {
  color: var(--color-default);
  font-size: 56px;
  transition: ease-in-out 0.3s;
  z-index: 2;
  position: relative;
}

.services .service-item .icon:before {
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  background: #eeeeee;
  border-radius: 50px;
  z-index: 1;
  top: 10px;
  right: -20px;
  transition: 0.3s;
}

.services .service-item h3 {
  color: var(--color-default);
  font-weight: 700;
  margin: 0 0 20px 0;
  padding-bottom: 8px;
  font-size: 22px;
  position: relative;
  display: inline-block;
  border-bottom: 4px solid #eeeeee;
  transition: 0.3s;
}

.services .service-item p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .service-item .readmore {
  margin-top: 15px;
  display: inline-block;
  color: var(--color-primary);
}

.services .service-item:hover .icon:before {
  background: #00b6a1;
}

.services .service-item:hover h3 {
  border-color: var(--color-primary);
}

/*--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/
.testimonials .testimonial-wrap {
  padding-left: 10px;
}

.testimonials .testimonial-item {
  box-sizing: content-box;
  padding: 30px;
  margin: 30px 10px;
  box-shadow: 0px 0 15px rgba(0, 0, 0, 0.1);
  position: relative;
  background: #fff;
  border-radius: 10px;
}

.testimonials .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 50px;
  margin-right: 15px;
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #000;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0;
}

.testimonials .testimonial-item .stars {
  margin: 10px 0;
}

.testimonials .testimonial-item .stars i {
  color: #ffc107;
  margin: 0 1px;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
  color: #009d8b;
  font-size: 26px;
  line-height: 0;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  transform: scale(-1, -1);
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 15px auto 15px auto;
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(0, 0, 0, 0.2);
  opacity: 1;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--color-primary);
}

@media (max-width: 767px) {
  .testimonials .testimonial-wrap {
    padding-left: 0;
  }

  .testimonials .testimonial-item {
    padding: 30px;
    margin: 15px;
  }

  .testimonials .testimonial-item .testimonial-img {
    position: static;
    left: auto;
  }
}

/*--------------------------------------------------------------
# Portfolio Section
--------------------------------------------------------------*/
.portfolio .portfolio-flters {
  padding: 0 0 20px 0;
  margin: 0 auto;
  list-style: none;
  text-align: center;
}

.portfolio .portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 0;
  font-size: 18px;
  font-weight: 500;
  margin: 0 10px;
  line-height: 1;
  transition: all 0.3s ease-in-out;
}

.portfolio .portfolio-flters li:hover,
.portfolio .portfolio-flters li.filter-active {
  color: var(--color-primary);
}

.portfolio .portfolio-flters li:first-child {
  margin-left: 0;
}

.portfolio .portfolio-flters li:last-child {
  margin-right: 0;
}

@media (max-width: 575px) {
  .portfolio .portfolio-flters li {
    font-size: 14px;
    margin: 0 5px;
  }
}

.portfolio .portfolio-wrap {
  box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  height: 100%;
  overflow: hidden;
}

.portfolio .portfolio-wrap img {
  transition: 0.3s;
  position: relative;
  z-index: 1;
}

.portfolio .portfolio-wrap .portfolio-info {
  padding: 25px 20px;
  background-color: #fff;
  position: relative;
  border-top: 1px solid #f3f3f3;
  z-index: 2;
}

.portfolio .portfolio-wrap .portfolio-info h4 {
  font-size: 18px;
  font-weight: 600;
  padding-right: 50px;
}

.portfolio .portfolio-wrap .portfolio-info h4 a {
  color: var(--color-default);
  transition: 0.3s;
}

.portfolio .portfolio-wrap .portfolio-info h4 a:hover {
  color: var(--color-primary);
}

.portfolio .portfolio-wrap .portfolio-info p {
  color: #6c757d;
  font-size: 14px;
  margin-bottom: 0;
  padding-right: 50px;
}

.portfolio .portfolio-wrap:hover img {
  transform: scale(1.1);
}

/*--------------------------------------------------------------
# Portfolio Details Section
--------------------------------------------------------------*/
.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(255, 255, 255, 0.7);
  opacity: 1;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--color-primary);
}

.portfolio-details .swiper-button-prev,
.portfolio-details .swiper-button-next {
  width: 48px;
  height: 48px;
}

.portfolio-details .swiper-button-prev:after,
.portfolio-details .swiper-button-next:after {
  color: rgba(255, 255, 255, 0.8);
  background-color: rgba(0, 0, 0, 0.2);
  font-size: 24px;
  border-radius: 50%;
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
}

.portfolio-details .swiper-button-prev:hover:after,
.portfolio-details .swiper-button-next:hover:after {
  background-color: rgba(0, 0, 0, 0.6);
}

@media (max-width: 575px) {

  .portfolio-details .swiper-button-prev,
  .portfolio-details .swiper-button-next {
    display: none;
  }
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.portfolio-details .portfolio-info h3:after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: var(--color-primary);
  left: 0;
  bottom: 0;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li {
  display: flex;
  flex-direction: column;
  padding-bottom: 15px;
  font-size: 16px;
}

.portfolio-details .portfolio-info ul strong {
  text-transform: uppercase;
  font-weight: 400;
  color: #9c9c9c;
  font-size: 12px;
}

.portfolio-details .portfolio-info .btn-visit {
  padding: 8px 40px;
  background: var(--color-primary);
  color: #fff;
  border-radius: 50px;
  transition: 0.3s;
}

.portfolio-details .portfolio-info .btn-visit:hover {
  background: #009d8b;
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}

.portfolio-details .portfolio-description .testimonial-item {
  padding: 30px 30px 0 30px;
  position: relative;
  background: white;
  height: 100%;
  margin-bottom: 50px;
}

.portfolio-details .portfolio-description .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 50px;
  border: 6px solid #fff;
  float: left;
  margin: 0 10px 0 0;
}

.portfolio-details .portfolio-description .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 15px 0 5px 0;
  padding-top: 20px;
}

.portfolio-details .portfolio-description .testimonial-item h4 {
  font-size: 14px;
  color: #6c757d;
  margin: 0;
}

.portfolio-details .portfolio-description .testimonial-item .quote-icon-left,
.portfolio-details .portfolio-description .testimonial-item .quote-icon-right {
  color: #009d8b;
  font-size: 26px;
  line-height: 0;
}

.portfolio-details .portfolio-description .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.portfolio-details .portfolio-description .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  transform: scale(-1, -1);
}

.portfolio-details .portfolio-description .testimonial-item p {
  font-style: italic;
  margin: 0 0 15px 0 0 0;
  padding: 0;
}

/*--------------------------------------------------------------
# Our Team Section
--------------------------------------------------------------*/
.team .member {
  text-align: center;
  background: #fff;
  border-radius: 10px;
  padding: 15px;
  overflow: hidden;
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
}

.team .member img {
  border-radius: 10px;
  overflow: hidden;
}

.team .member .member-content {
  padding: 0 20px 30px 20px;
}

.team .member h4 {
  font-weight: 700;
  margin-top: 16px;
  margin-bottom: 2px;
  font-size: 20px;
}

.team .member span {
  font-style: italic;
  display: block;
  font-size: 14px;
  color: #6c757d;
}

.team .member p {
  padding-top: 10px;
  font-size: 14px;
  font-style: italic;
  color: #6c757d;
}

.team .member .social {
  margin-top: 15px;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.team .member .social a {
  color: #a2a2a2;
  transition: 0.3s;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid #bbbbbb;
}

.team .member .social a:hover {
  color: var(--color-primary);
  border-color: var(--color-primary);
}

.team .member .social i {
  font-size: 18px;
  margin: 0 2px;
}

/*--------------------------------------------------------------
# Pricing Section
--------------------------------------------------------------*/
.pricing .pricing-item {
  padding: 60px 40px;
  box-shadow: 0 3px 20px -2px rgba(108, 117, 125, 0.15);
  background: #fff;
  height: 100%;
  position: relative;
  border-radius: 15px;
}

.pricing h3 {
  font-weight: 600;
  margin-bottom: 15px;
  font-size: 20px;
  color: #555555;
  text-align: center;
}

.pricing .icon {
  margin: 30px auto 30px auto;
  width: 70px;
  height: 70px;
  background: var(--color-primary);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
  transform-style: preserve-3d;
}

.pricing .icon i {
  color: #fff;
  font-size: 28px;
  transition: ease-in-out 0.3s;
  line-height: 0;
}

.pricing .icon::before {
  position: absolute;
  content: "";
  height: 86px;
  width: 86px;
  border-radius: 50%;
  background: #87c1bb;
  transition: all 0.3s ease-out 0s;
  transform: translateZ(-1px);
}

.pricing .icon::after {
  position: absolute;
  content: "";
  height: 102px;
  width: 102px;
  border-radius: 50%;
  background: #d2eeeb;
  transition: all 0.3s ease-out 0s;
  transform: translateZ(-2px);
}

.pricing h4 {
  font-size: 48px;
  color: var(--color-secondary);
  font-weight: 700;
  font-family: var(--font-secondary);
  margin-bottom: 0;
  text-align: center;
}

.pricing h4 sup {
  font-size: 28px;
}

.pricing h4 span {
  color: rgba(108, 117, 125, 0.8);
  font-size: 18px;
  font-weight: 400;
}

.pricing ul {
  padding: 20px 0;
  list-style: none;
  color: #6c757d;
  text-align: left;
  line-height: 20px;
}

.pricing ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.pricing ul i {
  color: #059652;
  font-size: 24px;
  padding-right: 3px;
}

.pricing ul .na {
  color: rgba(108, 117, 125, 0.5);
}

.pricing ul .na i {
  color: rgba(108, 117, 125, 0.5);
}

.pricing ul .na span {
  text-decoration: line-through;
}

.pricing .buy-btn {
  display: inline-block;
  padding: 10px 40px;
  border-radius: 50px;
  color: var(--color-primary);
  border: 1px solid rgba(0, 131, 116, 0.2);
  transition: none;
  font-size: 16px;
  font-weight: 600;
  font-family: var(--font-primary);
  transition: 0.3s;
}

.pricing .buy-btn:hover {
  background: var(--color-primary);
  color: #fff;
}

.pricing .featured {
  z-index: 10;
  border: 3px solid var(--color-primary);
}

@media (min-width: 992px) {
  .pricing .featured {
    transform: scale(1.15);
  }
}

/*--------------------------------------------------------------
# Frequently Asked Questions Section
--------------------------------------------------------------*/
.faq .content h3 {
  font-weight: 400;
  font-size: 34px;
}

.faq .content h4 {
  font-size: 20px;
  font-weight: 700;
  margin-top: 5px;
}

.faq .content p {
  font-size: 15px;
  color: #6c757d;
}

.faq .accordion-item {
  border: 0;
  margin-bottom: 20px;
  box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.06);
  border-radius: 10px;
}

.faq .accordion-item:last-child {
  margin-bottom: 0;
}

.faq .accordion-collapse {
  border: 0;
}

.faq .accordion-button {
  padding: 20px 50px 20px 20px;
  font-weight: 600;
  border: 0;
  font-size: 18px;
  line-height: 24px;
  color: var(--color-default);
  text-align: left;
  background: #fff;
  box-shadow: none;
  border-radius: 10px;
}

.faq .accordion-button .num {
  padding-right: 10px;
  font-size: 20px;
  line-height: 0;
  color: var(--color-primary);
}

.faq .accordion-button:not(.collapsed) {
  color: var(--color-primary);
  border-bottom: 0;
  box-shadow: none;
}

.faq .accordion-button:after {
  position: absolute;
  right: 20px;
  top: 20px;
}

.faq .accordion-body {
  padding: 0 40px 30px 45px;
  border: 0;
  border-radius: 10px;
  background: #fff;
  box-shadow: none;
}

/*--------------------------------------------------------------
# Recent Blog Posts Section
--------------------------------------------------------------*/
.recent-posts article {
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  padding: 30px;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
}

.recent-posts .post-img {
  max-height: 240px;
  margin: -30px -30px 15px -30px;
  overflow: hidden;
}

.recent-posts .post-category {
  font-size: 16px;
  color: #6f6f6f;
  margin-bottom: 10px;
}

.recent-posts .title {
  font-size: 22px;
  font-weight: 700;
  padding: 0;
  margin: 0 0 20px 0;
}

.recent-posts .title a {
  color: var(--color-default);
  transition: 0.3s;
}

.recent-posts .title a:hover {
  color: var(--color-primary);
}

.recent-posts .post-author-img {
  width: 50px;
  border-radius: 50%;
  margin-right: 15px;
}

.recent-posts .post-author {
  font-weight: 600;
  margin-bottom: 5px;
}

.recent-posts .post-date {
  font-size: 14px;
  color: #3c3c3c;
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
.contact .info-container {
  background-color: var(--color-primary);
  height: 100%;
  padding: 20px;
  border-radius: 10px 0 0 10px;
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
}

.contact .info-item {
  width: 100%;
  background-color: #009282;
  margin-bottom: 20px;
  padding: 20px;
  border-radius: 10px;
  color: #fff;
}

.contact .info-item:last-child {
  margin-bottom: 0;
}

.contact .info-item i {
  font-size: 20px;
  color: #fff;
  float: left;
  width: 44px;
  height: 44px;
  background-color: rgba(255, 255, 255, 0.2);
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
  margin-right: 15px;
}

.contact .info-item h4 {
  padding: 0;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 5px;
}

.contact .info-item p {
  padding: 0;
  margin-bottom: 0;
  font-size: 14px;
}

.contact .info-item:hover i {
  background: #fff;
  color: var(--color-primary);
}

.contact .php-email-form {
  width: 100%;
  height: 100%;
  background: #fff;
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 0 10px 10px 0;
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #df1529;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #059652;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #059652;
  border-top-color: #fff;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input[type=text],
.contact .php-email-form input[type=email],
.contact .php-email-form textarea {
  padding: 12px 15px;
}

.contact .php-email-form input[type=text]:focus,
.contact .php-email-form input[type=email]:focus,
.contact .php-email-form textarea:focus {
  border-color: var(--color-primary);
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: var(--color-primary);
  border: 0;
  padding: 14px 45px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type=submit]:hover {
  background: rgba(0, 131, 116, 0.8);
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
.hero {
  width: 100%;
  position: relative;
  background: var(--color-primary);
  padding: 60px 0 0 0;
}

@media (min-width: 1365px) {
  .hero {
    background-attachment: fixed;
  }
}

.hero h2 {
  font-size: 48px;
  font-weight: 700;
  margin-bottom: 20px;
  color: #fff;
}

.hero p {
  color: rgba(255, 255, 255, 0.6);
  font-weight: 400;
  margin-bottom: 30px;
}

.hero .btn-get-started {
  font-family: var(--font-primary);
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 40px;
  border-radius: 50px;
  transition: 0.3s;
  color: #fff;
  background: rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
  border: 2px solid rgba(255, 255, 255, 0.1);
}

.hero .btn-get-started:hover {
  border-color: rgba(255, 255, 255, 0.5);
}

.hero .btn-watch-video {
  font-size: 16px;
  transition: 0.5s;
  margin-left: 25px;
  color: #fff;
  font-weight: 600;
}

.hero .btn-watch-video i {
  color: rgba(255, 255, 255, 0.5);
  font-size: 32px;
  transition: 0.3s;
  line-height: 0;
  margin-right: 8px;
}

.hero .btn-watch-video:hover i {
  color: #fff;
}

@media (max-width: 640px) {
  .hero h2 {
    font-size: 36px;
  }

  .hero .btn-get-started,
  .hero .btn-watch-video {
    font-size: 14px;
  }
}

.hero .icon-boxes {
  padding-bottom: 60px;
}

@media (min-width: 1200px) {
  .hero .icon-boxes:before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: calc(50% + 20px);
    background-color: #fff;
  }
}

.hero .icon-box {
  padding: 60px 30px;
  position: relative;
  overflow: hidden;
  background: #008d7d;
  box-shadow: 0 0 29px 0 rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease-in-out;
  border-radius: 8px;
  z-index: 1;
  height: 100%;
  width: 100%;
  text-align: center;
}

.hero .icon-box .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 24px;
}

.hero .icon-box .title a {
  color: #fff;
  transition: 0.3s;
}

.hero .icon-box .icon {
  margin-bottom: 20px;
  padding-top: 10px;
  display: inline-block;
  transition: all 0.3s ease-in-out;
  font-size: 48px;
  line-height: 1;
  color: rgba(255, 255, 255, 0.6);
}

.hero .icon-box:hover {
  background: #009786;
}

.hero .icon-box:hover .title a,
.hero .icon-box:hover .icon {
  color: #fff;
}

/*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
.blog .blog-pagination {
  margin-top: 30px;
  color: #555555;
}

.blog .blog-pagination ul {
  display: flex;
  padding: 0;
  margin: 0;
  list-style: none;
}

.blog .blog-pagination li {
  margin: 0 5px;
  transition: 0.3s;
  border-radius: 10px;
}

.blog .blog-pagination li a {
  color: var(--color-default);
  padding: 7px 16px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.blog .blog-pagination li.active,
.blog .blog-pagination li:hover {
  background: var(--color-primary);
  color: #fff;
}

.blog .blog-pagination li.active a,
.blog .blog-pagination li:hover a {
  color: var(--color-white);
}

/*--------------------------------------------------------------
# Blog Posts List
--------------------------------------------------------------*/
.blog .posts-list article {
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  padding: 30px;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
}

.blog .posts-list .post-img {
  max-height: 240px;
  margin: -30px -30px 15px -30px;
  overflow: hidden;
}

.blog .posts-list .post-category {
  font-size: 16px;
  color: #555555;
  margin-bottom: 10px;
}

.blog .posts-list .title {
  font-size: 22px;
  font-weight: 700;
  padding: 0;
  margin: 0 0 20px 0;
}

.blog .posts-list .title a {
  color: var(--color-default);
  transition: 0.3s;
}

.blog .posts-list .title a:hover {
  color: var(--color-primary);
}

.blog .posts-list .post-author-img {
  width: 50px;
  border-radius: 50%;
  margin-right: 15px;
}

.blog .posts-list .post-author-list {
  font-weight: 600;
  margin-bottom: 5px;
}

.blog .posts-list .post-date {
  font-size: 14px;
  color: #3c3c3c;
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Blog Details
--------------------------------------------------------------*/
.blog .blog-details {
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 10px;
}

.blog .blog-details .post-img {
  margin: -30px -30px 20px -30px;
  overflow: hidden;
  border-radius: 10px 10px 0 0;
}

.blog .blog-details .title {
  font-size: 28px;
  font-weight: 700;
  padding: 0;
  margin: 20px 0 0 0;
  color: var(--color-default);
}

.blog .blog-details .content {
  margin-top: 20px;
}

.blog .blog-details .content h3 {
  font-size: 22px;
  margin-top: 30px;
  font-weight: bold;
}

.blog .blog-details .content blockquote {
  overflow: hidden;
  background-color: rgba(34, 34, 34, 0.06);
  padding: 60px;
  position: relative;
  text-align: center;
  margin: 20px 0;
}

.blog .blog-details .content blockquote p {
  color: var(--color-default);
  line-height: 1.6;
  margin-bottom: 0;
  font-style: italic;
  font-weight: 500;
  font-size: 22px;
}

.blog .blog-details .content blockquote:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 3px;
  background-color: var(--color-secondary);
  margin-top: 20px;
  margin-bottom: 20px;
}

.blog .blog-details .meta-top {
  margin-top: 20px;
  color: #6c757d;
}

.blog .blog-details .meta-top ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  align-items: center;
  padding: 0;
  margin: 0;
}

.blog .blog-details .meta-top ul li+li {
  padding-left: 20px;
}

.blog .blog-details .meta-top i {
  font-size: 16px;
  margin-right: 8px;
  line-height: 0;
  color: var(--color-primary);
}

.blog .blog-details .meta-top a {
  color: #6c757d;
  font-size: 14px;
  display: inline-block;
  line-height: 1;
}

.blog .blog-details .meta-bottom {
  padding-top: 10px;
  border-top: 1px solid rgba(34, 34, 34, 0.15);
}

.blog .blog-details .meta-bottom i {
  color: #555555;
  display: inline;
}

.blog .blog-details .meta-bottom a {
  color: rgba(34, 34, 34, 0.8);
  transition: 0.3s;
}

.blog .blog-details .meta-bottom a:hover {
  color: var(--color-primary);
}

.blog .blog-details .meta-bottom .cats {
  list-style: none;
  display: inline;
  padding: 0 20px 0 0;
  font-size: 14px;
}

.blog .blog-details .meta-bottom .cats li {
  display: inline-block;
}

.blog .blog-details .meta-bottom .tags {
  list-style: none;
  display: inline;
  padding: 0;
  font-size: 14px;
}

.blog .blog-details .meta-bottom .tags li {
  display: inline-block;
}

.blog .blog-details .meta-bottom .tags li+li::before {
  padding-right: 6px;
  color: var(--color-default);
  content: ",";
}

.blog .blog-details .meta-bottom .share {
  font-size: 16px;
}

.blog .blog-details .meta-bottom .share i {
  padding-left: 5px;
}

.blog .post-author {
  padding: 20px;
  margin-top: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

.blog .post-author img {
  max-width: 120px;
  margin-right: 20px;
}

.blog .post-author h4 {
  font-weight: 600;
  font-size: 22px;
  margin-bottom: 0px;
  padding: 0;
  color: var(--color-default);
}

.blog .post-author .social-links {
  margin: 0 10px 10px 0;
}

.blog .post-author .social-links a {
  color: rgba(34, 34, 34, 0.5);
  margin-right: 5px;
}

.blog .post-author p {
  font-style: italic;
  color: rgba(108, 117, 125, 0.8);
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Blog Sidebar
--------------------------------------------------------------*/
.blog .sidebar {
  padding: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

.blog .sidebar .sidebar-title {
  font-size: 20px;
  font-weight: 700;
  padding: 0;
  margin: 0;
  color: var(--color-default);
}

.blog .sidebar .sidebar-item+.sidebar-item {
  margin-top: 40px;
}

.blog .sidebar .search-form form {
  background: #fff;
  border: 1px solid rgba(34, 34, 34, 0.3);
  padding: 5px 10px;
  position: relative;
  border-radius: 50px;
}

.blog .sidebar .search-form form input[type=text] {
  border: 0;
  padding: 4px;
  border-radius: 50px;
  width: calc(100% - 60px);
}

.blog .sidebar .search-form form input[type=text]:focus {
  outline: none;
}

.blog .sidebar .search-form form button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 25px;
  margin: -1px;
  background: var(--color-primary);
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
  line-height: 0;
}

.blog .sidebar .search-form form button i {
  line-height: 0;
}

.blog .sidebar .search-form form button:hover {
  background: rgba(0, 131, 116, 0.8);
}

.blog .sidebar .categories ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .categories ul li+li {
  padding-top: 10px;
}

.blog .sidebar .categories ul a {
  color: var(--color-default);
  transition: 0.3s;
}

.blog .sidebar .categories ul a:hover {
  color: var(--color-primary);
}

.blog .sidebar .categories ul a span {
  padding-left: 5px;
  color: rgba(34, 34, 34, 0.4);
  font-size: 14px;
}

.blog .sidebar .recent-posts .post-item+.post-item {
  margin-top: 15px;
}

.blog .sidebar .recent-posts img {
  width: 80px;
  float: left;
}

.blog .sidebar .recent-posts h4 {
  font-size: 15px;
  margin-left: 95px;
  font-weight: bold;
}

.blog .sidebar .recent-posts h4 a {
  color: var(--color-default);
  transition: 0.3s;
}

.blog .sidebar .recent-posts h4 a:hover {
  color: var(--color-primary);
}

.blog .sidebar .recent-posts time {
  display: block;
  margin-left: 95px;
  font-style: italic;
  font-size: 14px;
  color: rgba(34, 34, 34, 0.4);
}

.blog .sidebar .tags {
  margin-bottom: -10px;
}

.blog .sidebar .tags ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .tags ul li {
  display: inline-block;
}

.blog .sidebar .tags ul a {
  color: #555555;
  font-size: 14px;
  padding: 6px 20px;
  margin: 0 6px 8px 0;
  border: 1px solid #d5d5d5;
  display: inline-block;
  transition: 0.3s;
  border-radius: 50px;
}

.blog .sidebar .tags ul a:hover {
  color: #fff;
  border: 1px solid var(--color-primary);
  background: var(--color-primary);
}

.blog .sidebar .tags ul a span {
  padding-left: 5px;
  color: rgba(85, 85, 85, 0.8);
  font-size: 14px;
}

/*--------------------------------------------------------------
# Blog Comments
--------------------------------------------------------------*/
.blog .comments {
  margin-top: 30px;
}

.blog .comments .comments-count {
  font-weight: bold;
}

.blog .comments .comment {
  margin-top: 30px;
  position: relative;
}

.blog .comments .comment .comment-img {
  margin-right: 14px;
}

.blog .comments .comment .comment-img img {
  width: 60px;
}

.blog .comments .comment h5 {
  font-size: 16px;
  margin-bottom: 2px;
}

.blog .comments .comment h5 a {
  font-weight: bold;
  color: var(--color-default);
  transition: 0.3s;
}

.blog .comments .comment h5 a:hover {
  color: var(--color-primary);
}

.blog .comments .comment h5 .reply {
  padding-left: 10px;
  color: var(--color-primary);
}

.blog .comments .comment h5 .reply i {
  font-size: 20px;
}

.blog .comments .comment time {
  display: block;
  font-size: 14px;
  color: rgba(34, 34, 34, 0.8);
  margin-bottom: 5px;
}

.blog .comments .comment.comment-reply {
  padding-left: 40px;
}

.blog .comments .reply-form {
  margin-top: 30px;
  padding: 30px;
  box-shadow: 0 0 16px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

.blog .comments .reply-form h4 {
  font-weight: bold;
  font-size: 22px;
}

.blog .comments .reply-form p {
  font-size: 14px;
}

.blog .comments .reply-form input {
  border-radius: 4px;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .comments .reply-form input:focus {
  box-shadow: none;
  border-color: rgba(0, 131, 116, 0.8);
}

.blog .comments .reply-form textarea {
  border-radius: 4px;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .comments .reply-form textarea:focus {
  box-shadow: none;
  border-color: rgba(0, 131, 116, 0.8);
}

.blog .comments .reply-form .form-group {
  margin-bottom: 25px;
}

.blog .comments .reply-form .btn-primary {
  border-radius: 50px;
  padding: 14px 40px;
  border: 0;
  background-color: var(--color-secondary);
}

.blog .comments .reply-form .btn-primary:hover {
  background-color: rgba(248, 90, 64, 0.8);
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer {
  font-size: 14px;
  background-color: var(--color-primary);
  padding: 50px 0;
  color: white;
}

.footer .footer-info .logo {
  line-height: 0;
  margin-bottom: 25px;
}

.footer .footer-info .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.footer .footer-info .logo span {
  font-size: 30px;
  font-weight: 700;
  letter-spacing: 1px;
  color: #fff;
  font-family: var(--font-primary);
}

.footer .footer-info p {
  font-size: 14px;
  font-family: var(--font-primary);
}

.footer .social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.2);
  font-size: 16px;
  color: rgba(255, 255, 255, 0.7);
  margin-right: 10px;
  transition: 0.3s;
}

.footer .social-links a:hover {
  color: #fff;
  border-color: #fff;
}

.footer h4 {
  font-size: 16px;
  font-weight: bold;
  position: relative;
  padding-bottom: 12px;
}

.footer .footer-links {
  margin-bottom: 30px;
}

.footer .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer .footer-links ul i {
  padding-right: 2px;
  color: rgba(0, 131, 116, 0.8);
  font-size: 12px;
  line-height: 0;
}

.footer .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.footer .footer-links ul li:first-child {
  padding-top: 0;
}

.footer .footer-links ul a {
  color: rgba(255, 255, 255, 0.7);
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

.footer .footer-links ul a:hover {
  color: #fff;
}

.footer .footer-contact p {
  line-height: 26px;
}

.footer .copyright {
  text-align: center;
}

.footer .credits {
  padding-top: 4px;
  text-align: center;
  font-size: 13px;
}

.footer .credits a {
  color: #fff;
}
</style>     
    
</body>
</html>