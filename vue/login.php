<section>
	<article>
		<form action="../control/login_control.php" method="post" accept-charset="utf-8">
			<input type="text" name="UTILISATEUR" value="" placeholder="nom.prénom@fournisseur.com" required>
			<input type="password" name="CODE" value="" placeholder="Mot de passe" required>
			<input type="submit" name="" value="Go">
		</form>
		<?php if (isset($_SESSION['ERROR_LOGIN'])){
			echo "<p>".$_SESSION['ERROR_LOGIN']."</p>";
		} ?>
	</article>
</section>