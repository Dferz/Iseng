<html>
	<head>
		<style type="text/css">
			.blink_me {
			    -webkit-animation-name: blinker;
			    -webkit-animation-duration: 1.2s;
			    -webkit-animation-timing-function: linear;
			    -webkit-animation-iteration-count: infinite;
			    
			    -moz-animation-name: blinker;
			    -moz-animation-duration: 1.2s;
			    -moz-animation-timing-function: linear;
			    -moz-animation-iteration-count: infinite;
			    
			    animation-name: blinker;
			    animation-duration: 1.2s;
			    animation-timing-function: linear;
			    animation-iteration-count: infinite;
			}

			@-moz-keyframes blinker {  
			    0% { opacity: 1.0; }
			    50% { opacity: 0.0; }
			    100% { opacity: 1.0; }
			}

			@-webkit-keyframes blinker {  
			    0% { opacity: 1.0; }
			    50% { opacity: 0.0; }
			    100% { opacity: 1.0; }
			}

			@keyframes blinker {  
			    0% { opacity: 1.0; }
			    50% { opacity: 0.0; }
			    100% { opacity: 1.0; }
			}
		</style>
	</head>
	<body>
		<span class="blink_me">This Will Blink</span>
	</body>
</html>