<?php 
include 'Links.php';
?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link href="https://fonts.googleapis.com/css2?family=Muli:wght@600&display=swap" rel="stylesheet">
 	<title>Help</title>
 	<style type="text/css" media="screen">
 		body
			{
				
				text-align: center;
				font-family: 'Muli', sans-serif;
				color:	#CD5C5C;
				font-size: 2em;
			}
			.main
				{
					background: url('helpGamePic.jpg') center no-repeat;
					background-size: cover;
					position: relative;
					height: 100vh;
					width: 100%;

				}
			.center
			{
				position: absolute;
				top: 15%;
				left: 32%;

			}
			.btnid1
			{

				color: #000000;
				background-color: #FFFFFF;
				font-size: 20px;
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
					position: absolute;
					top: 15%;
					left: 20%;

				}
				body
				{
				
					font-size: 1em;
				}
				.main
				{
					background-size: 550px 640px;
				}

			 }
			 @media only screen and (min-width:376px) and (max-width:768px)
			 {
			 	body
				{
					
					font-size: 2em;
				}
				.main
				{
					background-size: 1150px 1024px;
				}
				.btnid1
					{
						font-size: 35px;
				
					}
			 }
			   @media only screen and (min-width:769px) and (max-width: 1024px)
			   {
				   	body
					{
					
						font-size: 2.5em;
					}
					.btnid1
					{
						font-size: 35px;
				
					}
					.main
					{
						background-size: 1550px 1366px;
					}
			   }

 		
 	</style>
 </head>
 <body>
 	<div  id="viewdata" class="main">
 		<div class="center">
 			
 			<p > 
		 		<ol >
		 			<li>The game is played on a grid that's 3 squares by 3 squares.</li>
		 			<li>You are X, your friend (or the computer in this case)<br> is O.Players take turns putting their marks in empty squares</li>
		 			<li>The first player to get 3 of her marks in a row <br>(up, down, across, or diagonally) is the winner.</li>
		 			<li>When all 9 squares are full, the game is over.</li>
		 		</ol>
 			</p>
 			
 			<button class=" btn btnid1" id="menu">I KNOW</a>
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
 