<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile | Mybook</title>
</head>

<style type="text/css">
	#blue_bar{
		height: 50px;
		background-color: #405d9b;
		color: #d9dfeb;
	}

	#search_box{
		width: 400px;
		height: 20px;
		border-radius: 5px;
		border: none;
		padding: 4px;
		font-size: 14px;
		background-image: url(search.png);
		background-repeat: no-repeat;
		background-position: right;
	}

	#profile_pic{
		width: 150px;
		margin-top: -200px;
		border-radius: 50%;
		border: solid 2px white;

	}

	#menu_buttons{
		width: 100px;
		display: inline-block;
		margin: 2px;

	}

	#friends_img{
		width: 60px;
		float: left;
		margin: 8px;
	}

	#friends_bar{
		background-color: white;
		min-height: 400px;
		margin-top: 20px;
		color: #aaa;
		padding: 8px;
	}

	#friends{
		clear: both;
		font-size: 12px;
		font-weight: bold;
		color: #405d9b;
	}
</style>

<body style="font-family: tahoma;background-color: #d0d8e4;">
	<br>
	<!-- top blue bar -->
	<div id="blue_bar">
		<div style="width: 800px;margin: auto;font-size: 30px;">

			Mybook &nbsp &nbsp <input type="text" id="search_box" placeholder="search for people">
			<img src="mypic.jpg" style="width: 40px; float: right;">
		</div>
	</div>
	<!-- cover area (a large div that will cover an entire area.) -->
	<div style="width: 800px; margin: auto; min-height: 400px;">
		<div style="background-color: white; text-align: center;color: #405d9b;">
			<img src="mountain.jpeg" style="width: 100%"> 
			<img id = "profile_pic" src="mypasspic.jpeg">
			<br>
				<div style="font-size: 20px;">Jimmy Fara</div>
			<br>

			<div id="menu_buttons">Timeline</div> 
			<div id="menu_buttons"><a href="about.html">About</a></div> 
			
			<div id="menu_buttons">Friends</div> 
			<div id="menu_buttons">Photos</div> 
			<div id="menu_buttons">Settings</div>
		</div>
		<!-- below cover area -->
		<div style="display: flex;">

			<!-- friends area -->
			<div style="min-height: 400px; flex: 1px;">

				<div id="friends_bar">

					Friends<br>

					<div id="friends">
						<img id="friends_img" src="mypic.jpg">
						<br>
						First User
					</div>

					<div id="friends">
						<img id="friends_img" src="mypic.jpeg">
						<br>
						Second User
					</div>

					<div id="friends">
						<img id="friends_img" src="mypica.jpg">
						<br>
						Third User
					</div>

					<div id="friends">
						<img id="friends_img" src="mypic6.jpeg">
						<br>
						Fourth User
					</div>

				</div>

			</div>

			<!-- posts area -->
			<div style="min-height: 400px; flex: 2.5"></div>
		</div>
	</div>
</body>
</html>