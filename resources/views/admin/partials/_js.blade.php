<script src="{!! asset('js/app.js') !!}"></script>
<script src="{!! asset('vendor/jquery/jquery.min.js') !!}"></script>
<script src="{!! asset('vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/tinymce/tinymce.min.js') !!}"></script>
@yield('customjs')

<script>
  $(".delete").on("click", function(){
      return confirm("Are you sure?");
  });
</script>
