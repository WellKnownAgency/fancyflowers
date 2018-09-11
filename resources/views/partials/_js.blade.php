
<!-- Vendor JS -->
<script src="{!! asset('vendor/jquery/jquery.min.js') !!}"></script>
<script src="{!! asset('vendor/owl.carousel/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('vendor/magnific-popup/jquery.magnific-popup.js') !!}"></script>
<script src="{!! asset('vendor/bootstrap/js/bootstrap.min.js') !!}"></script>

<script src="{!! asset('js/bootstrap-validation.js') !!}"></script>

<script src="{!! asset('vendor/nivo-slider/js/jquery.nivo.slider.js') !!}"></script>

<script src="{!! asset('vendor/slider-range/js/tmpl.js') !!}"></script>
<script src="{!! asset('vendor/slider-range/js/jquery.dependClass-0.1.js') !!}"></script>
<script src="{!! asset('vendor/slider-range/js/draggable-0.1.js') !!}"></script>
<script src="{!! asset('vendor/slider-range/js/jquery.slider.js') !!}"></script>
<script src="{!! asset('vendor/jquery.elevatezoom/jquery.elevatezoom.js') !!}"></script>

<!-- Template Base, Components and Settings -->
<script src="{!! asset('js/theme.js') !!}"></script>

<!-- Template Custom -->
<script src="{!! asset('js/custom.js') !!}"></script>
<script src="{!! asset('js/bootstrap-notify.js') !!}"></script>

<div class='notifications top-right'></div>
@yield('customjs')
<script>
  @if(Session::has('success'))
     $('.top-right').notify({
        message: { text: "{{ Session::get('success') }}" }
      }).show();
     @php
       Session::forget('success');
     @endphp
  @endif


  @if(Session::has('info'))
      $('.top-right').notify({
        message: { text: "{{ Session::get('info') }}" },
        type:'info'
      }).show();
      @php
        Session::forget('info');
      @endphp
  @endif


  @if(Session::has('warning'))
  		$('.top-right').notify({
        message: { text: "{{ Session::get('warning') }}" },
        type:'warning'
      }).show();
      @php
        Session::forget('warning');
      @endphp
  @endif


  @if(Session::has('error'))
  		$('.top-right').notify({
        message: { text: "{{ Session::get('error') }}" },
        type:'danger'
      }).show();
      @php
        Session::forget('error');
      @endphp
  @endif
</script>
