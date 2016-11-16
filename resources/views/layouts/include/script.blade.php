    <!-- jQuery -->
    {!!Html::script('js/jquery.min.js')!!}
    <!-- Bootstrap -->
    {!!Html::script('js/app.js')!!}
    <!-- Chart.js -->
    {!!Html::script('js/Chart.min.js')!!}
    <!-- Flot -->
    {!!Html::script('js/jquery.flot.js')!!}
    {!!Html::script('js/jquery.flot.pie.js')!!}
    {!!Html::script('js/jquery.flot.time.js')!!}
    {!!Html::script('js/jquery.flot.stack.js')!!}
    {!!Html::script('js/jquery.flot.resize.js')!!}
    <!-- Flot plugins -->
    {!!Html::script('js/jquery.flot.orderBars.js')!!}
    {!!Html::script('js/jquery.flot.spline.min.js')!!}
    {!!Html::script('js/curvedLines.js')!!}
    <!-- DateJS -->
    {!!Html::script('js/date.js')!!}
    <!-- bootstrap-daterangepicker -->
    {!!Html::script('js/moment.min.js')!!}
    {!!Html::script('js/daterangepicker.js')!!}

    <!-- Custom Theme Scripts -->    
    {!!Html::script('js/custom.min.js')!!}

    <!-- Datatables -->
    {!!Html::script('//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js')!!}
    {!!Html::script('DataTables/dataTables.responsive.min.js')!!}
    {!!Html::script('DataTables/responsive.bootstrap.js')!!}

    <!-- Core Init -->
    {!!Html::script('js/app/core.js')!!}

    <!-- Noty -->
    {!!Html::script('js/noty/packaged/jquery.noty.packaged.min.js')!!}

    <!--Dropzone js-->
    {!!Html::script('js/dropzone.js')!!}

    <script type="text/javascript">
      var baseUrl   = "{{ url('') }}";
      var apiUrl    = "{{ url('api') }}";
      var csrfToken = "{{ csrf_token() }}";

      $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': csrfToken}
      });
      $(document).ready(function(){
          Core.init(true);         

      });
      

    </script>