
{{-- {{route('profil')}} --}}
@auth


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
     <style>
                .card {
                  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                  width: 50%;
                  margin: auto;
                  text-align: center;
                  font-family: arial;
                }
                
                .title {
                  color: grey;
                  font-size: 18px;
                }
                
                button {
                  border: none;
                  outline: 0;
                  display: inline-block;
                  padding: 8px;
                  color: white;
                  background-color: green;
                  text-align: center;
                  cursor: pointer;
                  width: 100%;
                  font-size: 18px;
                }
                
                a {
                  text-decoration: none;
                  font-size: 22px;
                  color: black;
                }
                
                button:hover, a:hover {
                  opacity: 0.7;
                }
                #spacc{
                height:15px;
                }
                </style>
 
  @include('headfoot.header')


              <form action="{{route('profil')}} " method="get" enctype="multipart/form-data">
                @if (Session::has('success'))
                   <div class="alert alert-success">
                      {{Session::get('success')}}   
                  </div>
                    
                @endif
                @if (Session::has('fail'))
                   <div class="alert alert-dander">
                      {{Session::get('fail')}}     
                  </div>
                    
                @endif
                @csrf

              
                
                
                
                <div class="card my-5" >
                  <h2 style="text-align:center; ">your profile</h2>
                    <div style=" width:60%; height:100%; padding:10%;margin:auto; " >
                      <img src="./storage/logo/{{auth()->user()->file}}" class="img-fluid" style=" border-radius:50%;width:500px; " >      
                    </div>
                    <h1>{{auth()->user()->name}}</h1>
                    <p class="title">{{auth()->user()->email}}</p>
                    <p id="spacc"></p>
                    <div style="margin: 24px 0;">
                        <a href="#"><i class="fa fa-dribbble"></i></a> 
                        <a href="#"><i class="fa fa-twitter"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a> 
                    </div>
                    
                    <div class="d-flex justify-content-center">
                    <button type="submit" class="btn mx-5  my-3 w-25 btn-success btn-block btn-lg gradiey">update profile</button>
                    </div>

                </div>
              
 
                
                

                 

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('headfoot.footer')
</body>
</html>
@endauth
