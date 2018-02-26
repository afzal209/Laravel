
    <!--   Core JS Files   -->
    <script src="{{ URL::asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js')}}" type="text/javascript"></script>
	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ URL::asset('assets/js/bootstrap-checkbox-radio.js') }}"></script>

	<!--  Charts Plugin -->
	<script src="{{ URL::asset('/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ URL::asset('/js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{ URL::asset('/js/paper-dashboard.js') }}"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ URL::asset('/js/demo.js') }}"></script>

	<script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'ti-user',
                message: "Welcome {{session()->get('username')}}"

            },{
                type: 'success',
                timer: 1000
            });

        });
    </script>
