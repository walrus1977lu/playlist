<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<script src="jquery-3.6.0.min.js"> </script>
		<title>audio</title>
	</head>
	<body>
		<p>Музыка</p>
		<div id = "musik" >
		
		<button id="play3"><img src="src/play.png" width="35" height="35"></button>
		<button id="pause"><img src="src/pause.jpg" width="35" height="35"></button>
		
		
		</div>
		<p id="text"></p>
		<p id="text2"></p>
		<p id="text3"></p>
		<p id="text4"></p>
	</body>
	<script>
		
		var p=0;
		var p2=0;
		var p3 =false;
		var s=3;
		var y="mya";
		var start = "#mya4";
		setTimeout(addAut, 1000);
		
		$("#text").html("LONG  "+(start)[0].duration);
		function time(){
			$("#text").html("LONG  "+$(start)[0].duration);
			$("#text2").html(start);
			var t = $(start)[0].currentTime;
			var ti = parseInt(t, 10);
			$("#text3").html(ti);
			if ($(start)[0].duration==$(start)[0].currentTime)
			playVid4();
		}
		
		function playVid4()
		{

			start = "#"+y+s;
			p3=$("#text4").text("Слушай  "+start);
			$(start)[0].play();

  			

		
			
				
				setInterval(time, 1000);

			setTimeout(addAut, 10000);
			if ($(start)[0].ended){
				 playVid4();
			}
		}
		
	   function nex()   {
		   
		  $(start)[0].play();
			
			setTimeout(addAut, 10000);
			if ($(start)[0].ended){
				
			}
		}
		function addAut()
		{
			$.post('index2.php', {text: 'query'}, function(data) {
				s++;
				
				$("#musik").append('<audio id = "'+y+s+'"><source src="'+data+'" type="audio/mpeg"> </audio>');
				
				
				
				
				
			});
			
		}
		$("#pause").click(function pause()
			{
				
				$(start)[0].pause();
			
			});
			
			
			
			$("#play3").click(function playVid3()
			{
				
				start = "#"+y+s;
				$(start)[0].play();
				p2=$(start)[0].duration;
				var numic = parseInt(p2, 10);
				setInterval(time, 1000);
				setTimeout(addAut, 10000);
			
				if ($(start)[0].ended=="true"){
				 p3=$("#text4").text("Песня закончилась");	
				 playVid4();
			}
			});
			
			
	</script>
</html>