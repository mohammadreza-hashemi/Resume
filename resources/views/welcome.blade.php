<!doctype html>
 @inject('inject' ,'App\Http\Utilitis\country')


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{asset('js/script.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body onload="time()">
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <nav class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <a class="navbar-brand">Home</a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li> <a href="{{ route('login') }}" class="glyphicon glyphicon-log-in">&nbsp;Login</a></li>
                            <li>
                                 @if (Route::has('register'))
                                 <a href="{{ route('register') }}" class="glyphicon glyphicon-wrench">&nbsp;Register</a>
                                 @endif
                            </li>
                        </ul>
                    </nav>
                    @endauth
                </div>
            @endif
            <div id="time"></div>
                <div class="mainbox col-md-9 col-md-offset-1">
                   <div class="panel panel-success">
                       <div class="panel-heading">
                           <a class="panel-title">Log in</a>
                       </div>
                       <div class="panel-body">
                           <span id="username"></span>
                           <div class="input-group">
                               <span class="input-group-addon" title="User name" data-placement="left"><li class="glyphicon glyphicon-user"></li></span>
                               <input class="form-control" placeholder="{{ __('Enter User name')}}" data-placement="right" title="Enter User name" name="username" onblur="validate('username',this.value)" value="{{old('username')}}">
                           </div>
                           <br>
                           <span id="phone"></span>
                           <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                               <input class="form-control" placeholder="{{__('09384629750')}}" data-placement="right" title="Enter Phone " onblur="validate('phone',this.value)" value="{{old('phone')}}" >
                           </div>
                           <br>
                          <select class="form-control" name="country">
                                @foreach($inject::all() as $country )
                                <option value="{{ $country }}">{{ $country }}</option>
                                @endforeach
                          </select>
                       </div>
                    <button name="btn" >Creat Banner</button>
                   </div>
                </div>
            </div>
       
    </body>
    @if(session()->has('flash_message'))
       <script>
         $(documetn).ready(function(){
             swal({
                 
                title:'{{session()->get('flash_message')}}', 
                type:'success',
                icon:'success',
                timer:2500,
                showConfirmButton:false,
                
             });
         });
       </script>
    @endif
</html>
