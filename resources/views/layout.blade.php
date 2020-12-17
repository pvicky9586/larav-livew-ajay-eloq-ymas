<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My's Scopes</title>
        
                    
            <!-- Último compilado y minificado CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

            <!-- JavaScript compilado y minimizado más reciente-->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

            
            <!--otros stylos de bootstrap mas actuales-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
       <link href="{{ asset('MyStyles.css') }}" rel="stylesheet">
        <!--    <link href="{{ asset('menu.css') }}" rel="stylesheet"> -->
      <script( type="{{asset('menu.js')}}"></script>
    </head>




    <body>
      <nav  class="navPers navbar navbar-ststic-top bg-primary" role="navigation">  
        <div class="navbar-header">
           <div class="p-3 mb-2 bg-gradient-success display-5 text-warning"> Laravel - Livewire - AJAX & Eloquent</div>
        </div>
        <div class="container">
             <a class="nav-link font text-warning" href="{{ route('inicio')}}">Home</a>
             <!--   <span class="glyphicon glyphicon-home"></span> -->
        </div>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-c<div align="center">ontrol mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 text-warning" type="submit">Search</button>
        </form>
      </nav>





    <div class="" style="margin-left: 5%; margin-right:10%; ">
       @yield('content')
    </div>

       @livewireScripts

    

  <!-- JS jquery, poppoer y bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

  </body>
</html>
