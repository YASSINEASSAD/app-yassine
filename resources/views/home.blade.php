<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title> 	
<style>
    .w3-button{
      background-color:rgb(44, 148, 113)  ;
      padding: 10px;
      border-radius: 10px;
      margin: 10px;
      width: 10%;
      border:solid 0px black ;
      border-radius: 50px;
      
    }
    .city{
      /* background-color:rgb(189, 107, 0); */
      padding: 10px;
      margin: 30px;
    }
</style>
    
    
</head>
<body>
    @include('headfoot.header')

   
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
        <!-- ======= search section======= -->
        
                  <section id="contact" class="contact" >
                      <div class="col-lg-9" style="margin-left: 200px; ">
                        <form action="{{route('search')}}" method="get" class="php-email-form">
                          @csrf
                          <div class="row">
                            <div class="col-12 ">
                              <h1 style="margin-left: 100px; color:#5F9EA0;">you can search any company for free</h1>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                            </div>
                          </div>
                          <div class="form-group row mt-3">
                            <input type="text" class="form-control w-75 m-auto   col"  name="subject" style='argin-bottom:10px; border-radius:10px;' id="subject" placeholder="Enter name of an company" > 
                            <input type="text" class="form-control w-75 m-auto  mx-3 col"  name="ville" style='argin-bottom:10px; border-radius:10px;' id="subject" placeholder="Enter name of ville" > 
                            <input type="email" class="form-control w-75 m-auto  col"  name="email" style='argin-bottom:10px; border-radius:10px;' id="subject" placeholder="Enter name of an email" > 
                          </div>
                          <div class="form-group mt-3 "style='margin-left:400px;'>
                              <div class="text-center col-3"><button type="submit">Search</button></div>
                          </div>
                        
                        </form>
                      </div>
                  </section>



                   <!-- ======= itemes======= -->
              
              
                   
                   
                   <div class="icon-boxes position-relative ">
                     <h1 style="text-align: center ;color:white; text-decoration:dotted;">few companies</h1>
                     <div class="container position-relative ">
                       
                      <div class="row gy-4 mt-3">
                       @foreach ($data as $item)
                           <div class="col-xl-4 col-md-6 "  style="height:490px;">
                            <div class="icon-box  ">
                              <a href="{{route('profcomphome',['id'=>$item->id])}}">
                                 <div class="icon "> 
                                              @if (Str::length($item->name)>7)
                                                  {{Str::substr($item->name,0 ,7 ); }}.. 
                                              @else
                                                  {{Str::substr($item->name,0 ,7 ); }} 
                                              @endif
                                              
                                    </div>
                                <img  src="storage/logo/{{$item->file}}" style=" border:solid 0px black;border-radius:200px; height:220px;" alt=""class='m-auto w-75 img-fluid pt-3 pb-3'>
                                           
                                            <h4 class="title"><p>
                                              @if (Str::length($item->complement_adresse)>14)
                                              {{Str::substr($item->complement_adresse,0 ,14 ); }}.. 
                                              @else
                                                 @if ($item->complement_adresse==null)
                                                 Adress : no adress
                                                 @else
                                                     Adress : {{Str::substr($item->complement_adresse,0 ,14 ); }}
                                                 @endif
                                                  
                                              @endif
                                              </p></h4>
                                            <h3 class="title"><p>
                                              @if ($item->capital==null)
                                              capital : no capital
                                              @else
                                                   capital:  {{Str::substr($item->capital,0 ,10 ); }} 
                                              @endif
                                                
                                              </p></h3>
                                         </a>
                                      </div>
                               </div>
                         @endforeach
                      </div>
                    </div>
                   </div>
                   

              
  </section>


   <section   id="sh">
          <div class="w3-bar w3-black container">
            <button class="btn col-xl-3 col-md-6 " style="background-color:#1c9764 ;" onclick="openCity('London')">London</button>
            <button class="btn col-xl-3 col-md-6 " style="background-color:#1c9764 ;" onclick="openCity('Paris')">Paris</button>
            <button class="btn col-xl-3 col-md-6 " style="background-color:#1c9764 ;" onclick="openCity('Tokyo')">Tokyo</button>
          </div>
          
          <div id="London" class="w3-container city">
            <section id="hero" class="hero">
                  <div class="icon-boxes position-relative ">
                    <div class="container position-relative ">
                      
                      <div class="row ">
                      @foreach ($London as $item)
                          
                          @if ( count($London)>0)
                          <div class="col-xl-4 col-md-6 "  style="height:490px;">
                            <div class="icon-box  ">
                              <a href="{{route('profcomphome',['id'=>$item->id])}}">
                                 <div class="icon "> 
                                              @if (Str::length($item->name)>7)
                                                  {{Str::substr($item->name,0 ,7 ); }}.. 
                                              @else
                                                  {{Str::substr($item->name,0 ,7 ); }} 
                                              @endif
                                              
                                    </div>
                                <img  src="storage/logo/{{$item->file}}" style=" border:solid 0px black;border-radius:200px; height:220px;" alt=""class='m-auto w-75 img-fluid pt-3 pb-3'>
                                           
                                            <h4 class="title"><p>
                                              @if (Str::length($item->complement_adresse)>14)
                                              {{Str::substr($item->complement_adresse,0 ,14 ); }}.. 
                                              @else
                                                 @if ($item->complement_adresse==null)
                                                 Adress : no adress
                                                 @else
                                                     Adress : {{Str::substr($item->complement_adresse,0 ,14 ); }}
                                                 @endif
                                                  
                                              @endif
                                              </p></h4>
                                            <h3 class="title"><p>
                                              @if ($item->capital==null)
                                              capital : no capital
                                              @else
                                                   capital:  {{Str::substr($item->capital,0 ,10 ); }} 
                                              @endif
                                                
                                              </p></h3>
                                         </a>
                                      </div>
                               </div>
                            @else
                               <h2 style="text-align: center;">no company whiththis name</h2>
                            @endif
                       
                      @endforeach

                      </div>
                    </div>
                   </div>
                  </section>
                  <h5 style="float: right; color:aliceblue ;padding:10px;" class="mx-5"><a href='{{route('affprofilecampanies',['city'=>'London'])}}'> view more > </a></h5> 
          </div>


          
          <div id="Paris" class="w3-container city" style="display:none">
            <section id="hero" class="hero">
              <div class="icon-boxes position-relative ">
                <div class="container position-relative ">
                  
                  <div class="row ">
                  @foreach ($Paris as $item)
                       @if ( count($Paris)>0)
                       <div class="col-xl-4 col-md-6 "  style="height:490px;">
                        <div class="icon-box  ">
                          <a href="{{route('profcomphome',['id'=>$item->id])}}">
                             <div class="icon "> 
                                          @if (Str::length($item->name)>7)
                                              {{Str::substr($item->name,0 ,7 ); }}.. 
                                          @else
                                              {{Str::substr($item->name,0 ,7 ); }} 
                                          @endif
                                          
                                </div>
                            <img  src="storage/logo/{{$item->file}}" style=" border:solid 0px black;border-radius:200px; height:220px;" alt=""class='m-auto w-75 img-fluid pt-3 pb-3'>
                                       
                                        <h4 class="title"><p>
                                          @if (Str::length($item->complement_adresse)>14)
                                          {{Str::substr($item->complement_adresse,0 ,14 ); }}.. 
                                          @else
                                             @if ($item->complement_adresse==null)
                                             Adress : no adress
                                             @else
                                                 Adress : {{Str::substr($item->complement_adresse,0 ,14 ); }}
                                             @endif
                                              
                                          @endif
                                          </p></h4>
                                        <h3 class="title"><p>
                                          @if ($item->capital==null)
                                          capital : no capital
                                          @else
                                               capital:  {{Str::substr($item->capital,0 ,10 ); }} 
                                          @endif
                                            
                                          </p></h3>
                                     </a>
                                  </div>
                           </div>
                       @else
                            <h2 style="text-align: center; color:rgb(168, 24, 24)!important;">no company whiththis name</h2>
                       @endif
                        
                   
                  @endforeach

                  </div>
                </div>
               </div>
            </section>
            <h5 style="float: right; color:aliceblue ;padding:10px;" class="mx-5"><a href='{{route('affprofilecampanies',['city'=>'Paris'])}}'> view more > </a></h5> 
          </div>
          
          <div id="Tokyo" class="w3-container city" style="display:none">
            <section id="hero" class="hero">
              <div class="icon-boxes position-relative ">
                <div class="container position-relative ">
                  
                  <div class="row">
                  @foreach ($Tokyo as $item)
                      @if ( count($Tokyo)>0)
                      <div class="col-xl-4 col-md-6 "  style="height:490px;">
                        <div class="icon-box  ">
                          <a href="{{route('profcomphome',['id'=>$item->id])}}">
                             <div class="icon "> 
                                          @if (Str::length($item->name)>7)
                                              {{Str::substr($item->name,0 ,7 ); }}.. 
                                          @else
                                              {{Str::substr($item->name,0 ,7 ); }} 
                                          @endif
                                          
                                </div>
                            <img  src="storage/logo/{{$item->file}}" style=" border:solid 0px black;border-radius:200px; height:220px;" alt=""class='m-auto w-75 img-fluid pt-3 pb-3'>
                                       
                                        <h4 class="title"><p>
                                          @if (Str::length($item->complement_adresse)>14)
                                          {{Str::substr($item->complement_adresse,0 ,14 ); }}.. 
                                          @else
                                             @if ($item->complement_adresse==null)
                                             Adress : no adress
                                             @else
                                                 Adress : {{Str::substr($item->complement_adresse,0 ,14 ); }}
                                             @endif
                                              
                                          @endif
                                          </p></h4>
                                        <h3 class="title"><p>
                                          @if ($item->capital==null)
                                          capital : no capital
                                          @else
                                               capital:  {{Str::substr($item->capital,0 ,10 ); }} 
                                          @endif
                                            
                                          </p></h3>
                                     </a>
                                  </div>
                           </div>
                        @else
                            <h2 style="text-align: center;">no company whith this name</h2>
                        @endif

                   
                  @endforeach

                  </div>
                </div>
               </div>
              </section>
              <h5 style=" float: right; color:aliceblue ;padding:10px;" class="mx-5"><a href='{{route('affprofilecampanies',['city'=>'Tokyo'])}}'> view more > </a></h5> 
          </div>
   </section>




    <section id="about" class="about">
        <div class="container" >
  
          <div class="section-header">
            <h2>About Us</h2>
            <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
          </div>
  
          <div class="row gy-4">
            <div class="col-lg-6">
              <h3>Voluptatem dignissimos provident quasi corporis</h3>
              <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
              <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
              <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
            </div>
            <div class="col-lg-6">
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                </p>
  
                <div class="position-relative mt-4">
                  <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                  <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                </div>
              </div>
            </div>
          </div>
      
        </div>
      </section>
 
      
 @include('headfoot.footer')
 <script>
  function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
  }
 

  </script>
   
</body>
</html>
