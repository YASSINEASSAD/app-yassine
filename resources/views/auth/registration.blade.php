<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
  #space{
    height:100px;
  }
  .card {
                  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                  width: 50%;
                  margin: auto;
                  margin-top:60px;
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
<body>
  @include('headfoot.header')
              <form action="{{route("registreentreprise")}}" method="post" class="border border-2 w-50 p-5 my-4 rounded m-auto" enctype="multipart/form-data">
                @if (Session::has('success'))
                   <div class="alert alert-success">
                      {{Session::get('success')}}   
                  </div>
                    
                @endif
                @if (Session::has('fail'))
                   <div class="alert alert-danger">
                      {{Session::get('fail')}}   
                      
                  </div>
                    
                @endif
                @csrf


                {{-- <div class="form mb-4">
                  <input name="name" type="text" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">name</label>
                </div>

                

                <div class="form mb-4">
                  
                </div> --}}

                

                
                
                <div class="" >
                    <h2 style="text-align:center; "style='width:60%!important;'>Create account</h2>
                    <div style="border-radius: 50px; width:50%; padding:10%;margin-left:170px;" >
                            <div class="upload">
                              <img src="utilisateur.png"  class=" mx-auto" style="width:100% ;position:relative;right:19px; "> 
                                <div class="round" style="align-content: center;align-item: center; padding-top:15px;padding-left:3px;">
                                  <i class="bi bi-pen " style="width: 50px;"></i>
                                  <input type="file" name="file">
                                  <i class = "fa fa-camera" style = "color: #fff;"></i> 
                              </div>
                             
                            </div>
                    </div>
                    <div>
                      <label class="form-label" for="form3Example4cdg">name</label>
                      <input name="name" type="text" id="form3Example4cdg" class="form-control form-control-lg" />
                    </div>
                    <div>
                      <label class="form-label" for="form3Example4cdg">email</label>
                      <input name="email" type="email" id="form3Example4cdg" class="form-control form-control-lg" />
                    </div>
                    <div>
                      <label class="form-label" for="form3Example4cdg">password</label>
                      <input name="password" type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                    </div>
                    <p id="spacc"></p>
                    <div style="margin: 24px 0;">
                        <a href="#"><i class="fa fa-dribbble"></i></a> 
                        <a href="#"><i class="fa fa-twitter"></i></a>  
                        <a href="#"><i class="fa fa-linkedin"></i></a>  
                        <a href="#"><i class="fa fa-facebook"></i></a> 
                    </div>
                    
                   
                      <div class="form-check d-flex justify-content-center mb-5">
                              <input name="" class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                              <label class="form-check-label" for="form2Example3g">
                                I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                              </label>
                            </div>

                            <div class="d-flex justify-content-center">
                              <button type="submit"
                                class="btn btn-success btn-lg w-25 m-auto gradient-custom-4 text-body">Register</button>
                            </div>

                            <p class="text-center text-muted mt-5 mb-0">Have already an account ? <a href="login"
                                class="fw-bold text-body"><u>Login here</u></a></p>
                         </div>
              

                 

                

              


               
              </form>
  <div id="space"></div>   


@include('headfoot.footer')
</body>
</html>