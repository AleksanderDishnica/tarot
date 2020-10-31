<div>
	<?php if($logged_in == true){ ?>
		<a href="./routing.php?game=1" class="btn btn-success" alt="Play tarot game">Play the game</a>
	<?php }else{ ?>
		<a href="./login.php" class="btn btn-primary" alt="Tarot game login">Login to play the game</a>
		<a href="./signup.php" class="btn btn-primary" alt="Tarot game login">Signup</a>
	<?php } ?>
</div>