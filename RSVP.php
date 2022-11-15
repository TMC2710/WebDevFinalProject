<?php 
	$name = $_POST["name"]; 
	$rsvp = $_POST["rsvp"];
	$to = 'terra.chesser78@gamil.com';
    $subject = 'Returned rsvp forms';
    $body = 'Name:<br/>'.$name.'<br/><br/>rsvp:<br/>'.$rsvp.;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: rsvp@MichaelandAnna.com';
    if(mail($to, $subject, $body, $headers)) {
        $Sent = true;
    }else{
        $Sent = false;
    }
?>

<!DOCTYPE html>

<html>
	<head>
		
		<title>Michael &amp; Anna</title>
	</head>
	
	<body>		
	<nav>
            <ul>
                <a href="#Home" class="button"><style> .button:hover {
                    color: gold;
                }
                </style>Home</a>

                <a href="#Our Story" class="button"><style> .button:hover {
                    color: gold;
                }
                </style> Our Story</a>

                <a href="#Wedding Party" class="button"><style> .button:hover {
                    color: gold;
                }
                </style> Wedding Party</a> 

                <a href="#Registry" class="button"><style> .button:hover {
                    color: gold;
                }
                </style> Registry</a> 

                <a href="#RSVP" class="button"><style> .button:hover {
                    color: gold;
                }
                </style>RSVP</a>
            </ul>
        </nav>
			
	<div class="namebar">
		<div id="Michael">Michael<br>Chesser</div>
			<span id="and">&amp;</span>
				<div id="Anna">Anna<br>Whittinghill</div>
	</div>
		<script>
			$(document).ready(function(){
				$("input").focus(function(){
					$(this).css("background-color","#cccccc");
				});
					$("input").blur(function(){
						$(this).css("background-color","#ffffff");
					});
			});
		</script>
	<div class="main">
		<div id="rsvp">
			<?php
				if ($Sent){
			?>
			<h1>Thank You</h1>
			<a href="index.html">Continue Browsing</a>
			<?php
				}else{
			?>
			<h1>Oops</h1>
			<p>Something went wrong, try again!</p>
			<a href="index.html">Try Again</a>
			<?php 
				}
			?>
		</div>
			
			<div class="clearfix"></div>
		
	</div>
	<script>
		$(document).ready(function() {
			$("#last").click(function(){
  				alert("This page will be available once the invites have been sent");
  			});	
		});
	</script>	
</body>

</html>