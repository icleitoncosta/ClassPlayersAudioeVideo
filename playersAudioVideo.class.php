<?php 

class playersAudioVideo { 
	function showAudioMP3($url){
		return '<audio controls>
  					<source src="'.$url.'" type="audio/mpeg">
					Seu navegador não tem suporte a HTML5. Por favor use o Google Chrome.
				</audio>
				';
	}
	
	function showVideoMP4($url,$width,$height){
		return '<video width="'.$width.'" height="'.$height.'" controls>
  					<source src="'.$url.'" type="video/mp4">
  					Seu navegador não tem suporte a HTML5. Por favor use o Google Chrome.
				</video>
				';
	}

} 
?> 