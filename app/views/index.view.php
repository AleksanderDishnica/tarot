<div>
	<?php if($logged_in == true){ ?>
		<a href="./routing.php?game=1" class="btn btn-success" alt="Play tarot game">Play the game</a>
	<?php }else{ ?>
		<a href="./routing.php?login=1" class="btn btn-primary" alt="Tarot game login">Login to play the game</a>
		<a href="./routing.php?signup=1" class="btn btn-primary" alt="Tarot game login">Signup</a>
	<?php } ?>
</div>