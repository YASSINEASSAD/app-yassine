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
  @include('headfoot.header')
  
    <section class="vh-100" >
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Sign in</h3>
                <form action="{{route('loginentreprise')}}" method="post">
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
                        <div class="form mb-4">
                            <label class="form-label" for="typeEmailX-2">Email</label>
                            <input name="email"type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                            
                        </div>
            
                        <div class="form mb-4">
                            <label class="form-label" for="typePasswordX-2">Password</label>
                            <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                        
                        </div>
            
                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-start mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                            <label class="form-check-label" for="form1Example3"> Remember password </label>
                        </div>
            
                        <button class="btn btn-success btn-lg btn-block" type="submit">Login</button>
                </form>
                  <hr class="my-4">
      
                 
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div style="margin-bottom: 50px"></div>
      @include('headfoot.footer')
    
</body>
</html>