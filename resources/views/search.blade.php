<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @include('headfoot.header')


    @if (count($data)!=0)
     @foreach ($data as $item)
         <div id="contact" class="contact my-5" >
                    <div class="col-lg-8" style="margin-left: 200px; position :relative; ">
                    <form action="{{route('profcomp')}}" method="post" class="php-email-form">
                        @csrf
                        <div class="row">
                        <div class="col-md-4 form-group">
                            <img width="200" height="200" style=" margin:5px;"  src="{{asset('storage/logo/'.$item->file)}}" alt="">
                        </div>
                        <div class="col-md-8 form-group mt-3 mt-md-0">
                            <h4 style="color: gray"><button type="submit" style="border-radius:5px; color:black; background-color:white; margin-left:2px;">{{$item->name}}</button></h4>
                            <strong style="color:#264653;">Activity : </strong><span style="color:#1b998b;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, sequi! Vitae adipisci et blanditiis iste fuga. Debitis error sapiente id quasi, quidem accusantium nobis ipsa, vitae distinctio, doloremque optio saepe!.</span>
                            <br><br>
                            <div><em>address : {{$item->complement_adresse }}</em></div>
                             <div><button  type='submit'style="float:right; color:#2b96c0; background-color:transparent; border:0;" >details ></button></div>
                        </div>
                        </div>
                        <input type="hidden" name="profcamp" value="{{$item->id}}">
                    
                    
                    </form>
                    </div>
                </div> 
    @endforeach   
    @else
     
          <section id="contact" class="contact" >
            <div class="col-lg-8" style="margin-left: 200px; position :relative; bottom:40px;">
                 <div class="alert alert-warning">
                     <h1 style="margin: 200px;">there is no company with this name</h1>
                </div>
            </div>
           </section> 
        
    @endif

               
         

         
 
     
 

    @include('headfoot.footer')

</body>
</html>