<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <head>
 
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
        <title>Home page</title>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">Welcome page</a>
    </header>
    <ul class="nav">
      <li>
      <a href="{{ url('/Birth_Doc/birth') }}">
          <i class="zmdi zmdi-view-dashboard"></i> Birth certificate
        </a>
      </li>
      <li>
        <a href="{{ url('/Id_card/national_id') }}">
          <i class="zmdi zmdi-link"></i> National Identification card
        </a>
      </li>
      <li>
        <a href="{{ url('/contact_us/about_us') }}">
          <i class="zmdi zmdi-info-outline"></i> About Us
        </a>
      </li>
      <li>
      <li>
        <a href="{{ url('/contact_us/contact_us') }}">
          <i class="zmdi zmdi-comment-more"></i> Contact Us
        </a>
      </li>
    </ul>
  </div>
  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
            </a>
          </li>
<!--login buuton-->
          <button type="button" class="btn btn-info">
  @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}" class="#">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="#">Log in</a>

                    @endauth
                </div>
            @endif
</button>


        
    </nav>
    <div class="container-fluid">
                     <h1>Actuality</h1>
                    <p>This show the actuality of Cameroon in real time. <a href="https://www.cameroon-info.net/" target="_blank">Cameroon-info</a></p>

      <p>
        Make sure to keep all page content within the 
        <code>#content</code>.
      </p>
    </div>
  </div>
</div>

<!--style start here-->
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

body {
  overflow-x: hidden;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
}

/* Toggle Styles */

#viewport {
  padding-left: 250px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#content {
  width: 100%;
  position: relative;
  margin-right: 0;
}

/* Sidebar Styles */

#sidebar {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #37474F;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#sidebar header {
  background-color: #263238;
  font-size: 20px;
  line-height: 52px;
  text-align: center;
}

#sidebar header a {
  color: #fff;
  display: block;
  text-decoration: none;
}

#sidebar header a:hover {
  color: #fff;
}

#sidebar .nav{
  
}

#sidebar .nav a{
  background: none;
  border-bottom: 1px solid #455A64;
  color: #CFD8DC;
  font-size: 14px;
  padding: 16px 24px;
}

#sidebar .nav a:hover{
  background: none;
  color: #ECEFF1;
}

#sidebar .nav a i{
  margin-right: 16px;
}
</style>

<script>

</script>