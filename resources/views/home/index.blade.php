<html>
	<head>
	    <title>@yield('title')</title>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta content="width=device-width, initial-scale=1" name="viewport" />
	    <meta content="" name="description" />
	    <meta content="" name="author" />
	    <!-- BEGIN GLOBAL MANDATORY STYLES -->
	    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css"  rel="stylesheet" type="text/css"/>
	    
	</head>
    <body>
        <h1>Hello, <?php echo $name; ?></h1>

        The current UNIX timestamp is {{ time() }}.


        @for ($i = 0; $i < 10; $i++)
		    The current value is {{ $i }}<br/>
		@endfor


		
    </body>
</html>