<html>
    @include('includes.head')
    <style type="text/css">    	
    	body{
    		background-color: #eeeeee;
    	}
    </style>
<body class="fixed-sn deep-purple-skin">
    @include('includes.header')
    <main>
    	@include('includes.msg')
		@yield('content')
	</main>
	<br>
	<br>
	@include('includes.footer')
	<script type="text/javascript">
		$(document).ready(function() {
		  // SideNav Button Initialization
		  $(".button-collapse").sideNav();
		    // SideNav Scrollbar Initialization
		    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
		    var ps = new PerfectScrollbar(sideNavScrollbar);
		});
	</script>
</body>
</html>
