<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=`device-width`, initial-scale=1.0">
	<title>Document</title>
	<style>
		.quiz-chartTip {
			padding: 5px 10px;
			border: 1px solid rgba(0, 0, 0, .1);
			border-radius: 4px;
			background-color: rgba(255, 255, 255, .9);
			box-shadow: 3px 3px 10px rgba(0, 0, 0, .1);
			position: absolute;
			z-index: 50;
			max-width: 250px;
		}

		.quiz-graph {
			padding: 10px;
			height: 370px;
			width: 100%;
		}

		.quiz-graph .x-labels {
			text-anchor: middle;
		}

		.quiz-graph .y-labels {
			text-anchor: end;
		}

		.quiz-graph .quiz-graph-grid {
			stroke: #ccc;
			stroke-dasharray: 0;
			stroke-width: 1;
		}

		.label-title {
			text-anchor: middle;
			text-transform: uppercase;
			font-size: 12px;
			fill: gray;
		}

		.quiz-graph-dot,
		.quiz-graph-start-dot {
			fill: rgba(0, 112, 210, 1);
			stroke-width: 2;
			stroke: white;
		}
	</style>
</head>

<body>
	<?php
	$x = 50; //paling ujung=950  //paling dekat=50 sama dengan nol poisisi
	$y = 180; //max:10=seratus //min 300=nol
	?>
	<div class="slds-p-top--medium">
		<div>
			<svg version="1.2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="quiz-graph">
				<defs>
					<pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse">
						<path d="M 50 0 L 0 0 0 50" fill="none" stroke="#e5e5e5" stroke-width="1"></path>
					</pattern>
				</defs>
				<rect x="50" width="calc(100% - 50px)" height="300px" fill="url(#grid)" stroke="gray"></rect>

				<g class="label-title">
					<text x="-160" y="5" transform="rotate(-90)">Trafict</text>
				</g>
				<g class="label-title">
					<text x="50%" y="350">Times</text>
				</g>
				<g class="x-labels">
					<text x="150" y="320">Q1</text>
					<text x="250" y="320">Q2</text>
					<text x="350" y="320">Q3</text>
					<text x="450" y="320">Q4</text>
					<text x="550" y="320">Q5</text>
					<text x="650" y="320">Q6</text>
					<text x="750" y="320"> / Seconds</text>
				</g>
				<g class="y-labels">
					<text x="42" y="25">Mbps</text>
					<text x="42" y="55">250</text>
					<text x="42" y="105">200</text>
					<text x="42" y="155">150</text>
					<text x="42" y="205">100</text>
					<text x="42" y="255">50</text>
					<text x="42" y="305">0.25 </text>
				</g>
				<linearGradient id="grad" x1="0%" y1="0%" x2="0%" y2="100%">
					<stop offset="0%" style="stop-color:rgba(99,224,238,.5);stop-opacity:1"></stop>
					<stop offset="100%" style="stop-color:white;stop-opacity:0"></stop>
				</linearGradient>
				<polyline fill="url(#grad)" stroke="#34becd" stroke-width="0" points="
            50,300
            <?= $x ?>,<?= $y ?>
      
            750,300
            "></polyline>

				<polyline fill="none" stroke="#34becd" stroke-width="2" points="
            <?= $x ?>,<?= $y ?>
   
            750,200
            "></polyline>
				<g>
					<circle class="quiz-graph-start-dot" cx="<?= $x ?>" cy="<?= $y ?>" data-value="7.2" r="6"></circle>
					
					<circle class="quiz-graph-dot" cx="750" cy="200" data-value="6.7" r="6" q-title="Complited Quiz" answer-count="100" percent-value="33%"></circle>
				</g>
			</svg>
		</div>
	</div>
</body>

</html>
