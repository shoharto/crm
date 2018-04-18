<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('backEnd/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('backEnd/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>LLC CRM</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet"
          href="{{url('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}"/>
    <!-- CSS Files -->
    <link href="{{url('backEnd/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{url('backEnd/css/light-bootstrap-dashboard.css?v=2.0.1')}}" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{url('backEnd/css/demo.css')}}" rel="stylesheet"/>
</head>

<body>

<div class="wrapper">

    @include('backEnd.includes.sidebar')

    <div class="main-panel">

        @include('backEnd.includes.navbar')
        <div class="content">
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>
        @include('backEnd.includes.footer')

    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="{{url('backEnd/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{url('backEnd/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{url('backEnd/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{url('backEnd/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="{{url('https://maps.googleapis.com/maps/api/js?YOUR_KEY_HERE')}}"></script>
<!--  Chartist Plugin  -->
<script src="{{url('backEnd/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{url('backEnd/js/plugins/bootstrap-notify.js')}}"></script>
<!--  jVector Map  -->
<script src="{{url('backEnd/js/plugins/jquery-jvectormap.js')}}" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{url('backEnd/js/plugins/moment.min.js')}}"></script>
<!--  DatetimePicker   -->
<script src="{{url('backEnd/js/plugins/bootstrap-datetimepicker.js')}}"></script>
<!--  Sweet Alert  -->
<script src="{{url('backEnd/js/plugins/sweetalert2.min.js')}}" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="{{url('backEnd/js/plugins/bootstrap-tagsinput.js')}}" type="text/javascript"></script>
<!--  Sliders  -->
<script src="{{url('backEnd/js/plugins/nouislider.js')}}" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="{{url('backEnd/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="{{url('backEnd/js/plugins/jquery.validate.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{url('backEnd/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--  Bootstrap Table Plugin -->
<script src="{{url('backEnd/js/plugins/bootstrap-table.js')}}"></script>
<!--  DataTable Plugin -->
<script src="{{url('backEnd/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--  Full Calendar   -->
<script src="{{url('backEnd/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{url('backEnd/js/light-bootstrap-dashboard.js?v=2.0.1')}}" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="{{url('backEnd/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

        demo.initVectorMap();

    });
</script>

</html>