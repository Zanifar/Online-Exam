<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Panel</title>
  <link rel="stylesheet" href=" {{asset('bootstrap/css/bootstrap.min.css')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

  <style>
  .header{
   width: 100%;
    padding: 5px;
    height: 80px;
    background-color: #495567ed;
    color: #f1f1f1f0;
}

  }
  .header h1{
  
    color:#2196F3;
    font-size:40px;
    text-align: center;
    

    }
    .header h1:hover {
  background-color: #556171;
  color: white;
}


  .topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: #ff9800e0;
  color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
  body{
    background-color:#C0BB82;
  }

  </style>

</head>
<body>
  <div class="header">  
    <h1>Welcome To Admin Dashboard</h1>
  </div>
  
    <div class="topnav">
  <a class="active" href="admin">Home</a>
  <a href="admin_manage">Manage User</a>
    <input type="text" placeholder="Search">

  <div class="logout">
    <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif      
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
    
  </div>
   
  <div class="container">

    <h3>Add User</h3>

  <form class="form-horizontal" action="{{route('store')}}" method="post">
    {{csrf_field()}}

      <div class="form-group">
    <label class="control-label col-sm-2" for="s.i">S.I:</label>
    <div class="col-sm-10">
      <input type="s.i" class="form-control" id="s.i" placeholder=" Enter s.i ">
    </div>
  </div>
 

     <div class="form-group">
    <label class="control-label col-sm-2" for="id">User ID:</label>
    <div class="col-sm-10">
      <input type="id" class="form-control" id="id" placeholder=" Enter id ">
    </div>
  </div>
 

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="name" placeholder=" Enter name">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-xs-2">
      <input type="email " class="form-control" id="email" placeholder="Enter email ">
    </div>
  </div>


   <div class="form-group">
    <label class="control-label col-sm-2" for="role">Role:</label>
    <div class="col-xs-2">
      <input type="role " class="form-control" id="role" placeholder="Enter role ">
    </div>
  </div> 


  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Add User</button>
    </div>
  </div>
</form>
    
  </div>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>
 