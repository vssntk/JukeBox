<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<title>Audio Player</title>
		<link href="https://fonts.googleapis.com/css?family=Darker+Grotesque|Poiret+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="./public/css/app.css">
	</head>
	<body>
		<div class="audio-player" id="skin">
			
			<div class="user_avatar">
				<span class="live">
					live <i class="fa fa-circle fa-fw"></i>
				</span>
				<span class="listeners">
					23 <i class="fa  fa-microphone fa-fw"></i>
				</span>
				<img src="./public/images/avatar.jpeg">
				<nav class="set">
					<a class="dropdown-toggle" href="#" title="Menu"><i class="fa fa-cogs"></i></a>
					<ul class="dropdown">
						<li><a href="#" id="darkButton">Dark</a></li>
						<li><a href="#" id="whiteButton">Default</a></li>
						<li><a href="#" id="blueButton">Blue</a></li>
					</ul>
				</nav>
			</div>
			<div class="holder">
				<div class="cover">
					<img src="./public/images/Demons.jpg">
				</div>
				<div class="audio-wrapper" id="player-container" href="javascript:;">
					<audio id="player" preload="metadata" onloadedmetadata="mDur()" ontimeupdate="initProgressBar()">
						<source src="" type="audio/mp3">
					</audio>
				</div>
				<div class="player-controls scrubber">
					<div>
						<div>
							<p class="title"></p>
						</div>
						<div class="range">
							<input id="dur" type="range" class="range" name="rng" min="0" max="1" step="0.00000001" value="0" onchange="mSet()" style="width: 100%">
						</div>
						<br>
						<span class="time start-time"></span>
						<span class="time end-time"></span>
						<br>
						<div class="ctrl">
							<div>
								<a href="#prev" class="ctrl_btn " id="prev"><i class="fa fa-arrow-left" ></i></a>
								<span id="play-btn" class="fa fa-play "></span>
								<a href="#next" class="ctrl_btn " id="next"><i class="fa fa-arrow-right" ></i></a>
							</div>
							<div class="volumeControl">
								<div class="wrapper">
									<i class="fa fa-volume-up"></i>
									<span class="outer">
										<span class="inner"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div>
					</div>
				</div>
			</div>
			<div class="action">
				<div>
					<a href="#" class="like shadow">Like <i class="fa fa-heart-o"></i></a>
					<a href="#" class="like  shadow">Share <i class="fa fa-share-alt"></i></a>
					<a href="#" class="like  shadow">Subscribe <i class="fa fa-podcast"></i></a>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="./public/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="./public/js/app.js"></script>
	</body>
</html>