
	<section>
		<h2>Contenu du formulaire</h2>
		<article>
			<h3>Formulaire de contact :</h3>
			<p>
				Nom, prénom :
				<?php 
				if(isset($_POST['NOM'])){
					echo $_POST['NOM'];
					$_SESSION['NOM']= $_POST['NOM'];
				}else{
					echo '-';
				} 
				?>
				<br>
				Email :
				<br>
				Je suis : 
				<br>
				Message :
				<br>
				Abonnement : 
				<?php 
					if(isset($_POST['NEWSLETTER'])){
						echo $_POST['NEWSLETTER'];
					}else{
						echo '-';
					} 
				?>
				<br>
			</p> 
			<p>
				<?php print_r($_POST); ?>
			</p>
		</article>
	
	</section>


