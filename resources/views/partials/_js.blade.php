
<script src="{!! asset('vendor/jquery/jquery.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap-star.js') !!}"></script>
<script src="{!! asset('js/rating.js') !!}"></script>
<!-- Vendor JS -->

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
        icon: null,
        message: { text: "{{ Session::get('info') }}" },
        type:'info'
      }).show();
      @php
        Session::forget('info');
      @endphp
  @endif


  @if(Session::has('warning'))
  		$('.top-right').notify({
        title: 'Bootstrap notify',
        icon: null,
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
        type:'danger',
        url: 'https://github.com/mouse0270/bootstrap-notify'
      }).show();
      @php
        Session::forget('error');
      @endphp
  @endif
</script>
<script>

   var popupSize = {
       width: 550,
       height: 550
   };

   $(document).on('click', '.links li > a', function(e){

       var
           verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
           horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

       var popup = window.open($(this).prop('href'), 'social',
           'width='+popupSize.width+',height='+popupSize.height+
           ',left='+verticalPos+',top='+horisontalPos+
           ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

       if (popup) {
           popup.focus();
           e.preventDefault();
       }

   });
</script>
