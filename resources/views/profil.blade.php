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
  @include('headfoot.header')
  <div class="card w-50 m-auto p-5 my-5 " >
              <h2 class="text-uppercase text-center mb-5">update your account</h2>

              <form action="{{route("updateprofil")}}" method="post" enctype="multipart/form-data">
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
                
                {{-- <div style=" width:60%; height:100%; padding:10%;margin:auto; " >
                  <img src="./storage/logo/{{auth()->user()->file}}" class="img-fluid" style=" border-radius:50%;width:500px; " >      
                </div> --}}
                <div style="border-radius: 50px; width:50%; padding:10%;margin-left:170px;"  >
                  <div class="upload">
                    <img src="storage/logo/{{auth()->user()->file}}"  class=" mx-auto" style="width:100% ; height:200%;position:relative;right:19px; "> 
                      <div class="round" style="align-content: center;align-item: center; padding-top:15px;padding-left:3px;">
                        <i class="bi bi-pen " style="width: 50px;"></i>
                        <input type="file" name="file" value="storage/logo/{{auth()->user()->file}}">
                        <i class = "fa fa-camera" style = "color: #fff;"></i> 
                    </div>
                  </div>
                 </div>

                <div class="form mb-4">
                  <label class="form-label" for="form3Example4cdg">name</label>
                  <input value="{{auth()->user()->name}}" name="name" type="text" id="form3Example4cdg" class="form-control form-control-lg" />
                </div>

                

                <div class="form mb-4">
                  <label class="form-label" for="form3Example4cdg">email</label>
                  <input value="{{auth()->user()->email}}" name="email" type="email" id="form3Example4cdg" class="form-control form-control-lg" />
                </div>

                

                 

                

              


                <div class="form-check d-flex justify-content-center mb-5">
                  <input name="" class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"> update profile</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login"
                    class="fw-bold text-body"><u>Login here</u></a></p>

                 

              </form>

            </div>

@include('headfoot.footer')
</body>
</html>
@endauth