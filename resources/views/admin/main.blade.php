<html lang-"en">
  <head>
    @include('admin/partials/_head')
  </head>
  <body>
    <div id="all">
      @include('admin/partials/_nav')
      <br>
      @yield('content')
    </div>
    @include('admin/partials/_js')
  </body>
</html>
