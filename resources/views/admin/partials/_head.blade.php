<!-- Basic Page Needs -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Panel</title>

<meta name="keywords" content="Admin">
<meta name="description" content="Admin">
<meta name="author" content="WellKnown Agency">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>

<!-- Vendor CSS -->
<link rel="stylesheet" href="{!! asset('css/app.css') !!}">
<link rel="stylesheet" href="{!! asset('vendor/font-awesome/css/font-awesome.min.css') !!}">
<link rel="stylesheet" href="{!! asset('vendor/admin/custom.css') !!}">
<style>
  /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
  .row.content {height: 550px}

  /* Set gray background color and 100% height */
  .sidenav {
    background-color: #f1f1f1;
    height: 100%;
  }

  /* On small screens, set height to 'auto' for the grid */
  @media screen and (max-width: 767px) {
    .row.content {height: auto;}
  }

  .well{
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    font-size: 18px;
  }

  .well h2{
    color:#FF8C94;
  }

  .well a{
    color:#000;
    font-weight: bolder;
      text-align: center;
  }

  .active-nav{
    color:#FF8C94;
  }

  .well-count{
    text-align: center;
    font-size: 22px;
    font-weight:bold;
    color: red;
  }

  .well a:hover{
    color:#A8E6CE;
  }

.com p{
text-align: left;
}

body{
  background-color: #fff;

}

nav{
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
  background-color: #f5f5f5 !important;
  font-size: 20px;

}

.list-group-item{
  border: 0;
  font-size: 20px;
}

.card{
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
}

.navbar-light .navbar-nav .nav-link{
  color: #000;
}

.nav-link{
  padding-left: 0px;
}

</style>
