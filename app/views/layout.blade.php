<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/less" href="{{asset('resources/style.less')}}">
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.0/less.min.js"></script>	
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="{{asset('resources/script.js')}}"></script>	
	</head>
    <body>
        <div class="header">
        	
        </div>

        <div class='main'>
            @if(Session::has('message'))
                    <div class="alert">
                        <p >{{ Session::get('message') }}</p>
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
        	<div class='main_content'>
        		@yield('content')
        	</div>
        </div>

    	<div class = 'footer'>
    		
    	</div>
    </body>
</html>
