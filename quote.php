<!DOCTYPE html>
<html>
<head>
<title>Report</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<style> body { background-color: #FBFBEA } </style>
<body>
  <div class="container"> 
    </div>
	<div>
		<style>
		.askhelp {
			min-width: 250px;
			min-height: 50px;
			color: #FBFBEA; 
			background-color: #F7943E;
			border-radius: 24px;
			font-size: 18px;
			font-family: 'Kreon';
			margin-bottom: 20px;
		}
	</style>
	<center><p id="quote" style="font-family:Kreon; font-size:40px; margin-top:200px; margin-bottom:100px; color: #4ABCAB;"> Go ahead. Click another one.</p></center>
	<center><button class="askhelp" type="button" class="btn btn-warning btn-lg" id="submit" value ="submit" onclick="generateQuote()">ANOTHER ONE</button></center>
	<a href='report_self.php'><center><button class="askhelp" type="submit" class="btn btn-warning btn-lg" id="submit" value ="submit">I NEED HELP</button></center></a>
	<a href='homepage.php'><center><button class="askhelp" type="submit" class="btn btn-warning btn-lg" id="submit" value ="submit">BACK</button></center></a>
	</div>
	
  <p id="error"> </p>

  <script>
	var quotes = [
	"No, you're not perfect but you're not your mistakes. -Kanye West",
	"Look at the stars, look how they shine for you - Coldplay", 
	"You are beautiful, no matter what they say - Christina Aguilera", 
	"It might take a year, it might take a day, but what's meant to be, will always find a way.", 
	"It doesn't hurt to feel sad from time to time.", 
	"Crying is cleansing. There's a reason for tears, happiness or sadness.", 
	"The walls we build around us to keep sadness out also keeps out the joy.", 
	"Worry never robs tomorrow of its sorrow, it only saps today of its joy.", 
	"Dont' be sad that it's over. Be happy that it happened."];

  function generateQuote(){
  	var index = Math.floor(Math.random() * (8 - 1 + 1)) + 1;
  	document.getElementById("quote").innerHTML = quotes[index];
  }
</script>

</body>
</html>