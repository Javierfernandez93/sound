	<audio id="myAudio">
		<source src="<?php echo $Music->src;?>" type="audio/ogg">
		<source src="<?php echo $Music->src;?>" type="audio/mpeg">
		Tu navegador no soporta danify
	</audio>
	<button onclick="play()" type="button"><img style="width:42px;" src='../../src/img/play-button.png'></button>
	<button onclick="pause()" type="button"><img style="width:42px;" src='../../src/img/pause-button.png'></button>
	<button onclick="stop()" type="button"><img style="width:42px;" src='../../src/img/stop-button.png'></button>  

<script>
class Audio{
	constructor(elementId)
	{
		this.elementId=elementId;
		this.loadelement();
	}
	play{
		this.audio.play();
	}
	pause{
		this.audio.pause();
	}
	stop{
		this.pause();
		this.audio.currentTime=0;

	}
	loadelement()
	{
		this.audio = document.getElementById(this.elementId); 
	}
}

let audio = new Audio('myAudio');

window.play = function(){
	audio.play();
}
window.pause = function(){
	audio.pause();
}
window.stop = function(){
	audio.stop();
}
</script>
<!-- 	<div class="box-song-playing">
		Reproduciendo la canción <b><?php echo $Music->song;?></b>
	</div> -->