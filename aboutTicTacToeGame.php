<?php 

include'Links.php';


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link href="https://fonts.googleapis.com/css2?family=Muli:wght@600&display=swap" rel="stylesheet">
 	<title>About</title>
 	<style type="text/css" media="screen">
 		body
			{
				
				text-align: center;
				font-family: 'Muli', sans-serif;
				color:	#E0FFFF;
				font-size: 2em;
			}
			.main
				{
					background: url('aboutGamePic.jpg') center no-repeat;
					background-size: cover;
					position: relative;
					height: 100vh;
					width: 100%;

				}
			.center
			{
				position: absolute;
				top: 30%;
				left: 1%;

			}
			.btnid1
			{

				color: #000000;
				background-color: #FFFFFF;
				font-size: 1em;
				padding: 10px;
				border-radius: 12px;
				border: 5px solid #ADFF2F;


			}
			.btnid1:hover
			{
				background-color: #000000;
				opacity: 0.3;
				color:#FFFFFF ;
			}
		
			 @media only screen and (max-width: 375px) 
			 {
			 	.center
				{
					top: 10%;

				}
			 	body
			 	{

			 		font-size: 20px;
			 	}
				 .btnid1
				{
					font-size: 16px;
				}
			 }
			  @media only screen and (min-width:376px) and (max-width:768px)
			  {
			  	.center
				{
					top: 20%;

				}

			  }
			  @media only screen and (min-width:769px) and (max-width: 1024px)
			  {
			  	body
			 	{

			 		font-size: 2.5em;
			 	}

			  }

 		
 	</style>
 </head>
 <body>
 	<div id="viewdata" class="main">
 		<div class="center">
 			
 			<p> 
		 		An early variation of tic-tac-toe was played in the Roman Empire, around the first century BC. It was called terni lapilli (three pebbles at a time) and instead of having any number of pieces, each player only had three, thus they had to move them around to empty spaces to keep playing.<br>
				Playing time: ~1 minute <br>
				Synonym(s): Noughts and crosses; Xs and Os
			</p>

 			<h2 align="center"> Made By Bankim Vishrut</h2>
 			<button  class=" btn btnid1" id="menu">BACK TO MENU</button>

 		</div>
 	</div>
 

  <script>
 	          $(document).ready(function()
				{
					$('#menu').click(function()
					{
						$('#viewdata').load('index.html')
					})
				})
 </script>
	
 
 	
 </body>
 </html>