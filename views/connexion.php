<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1 style="text-align:center">Connexion</h1>
		<hr style="border-top-color:#DDD">
		<?php if(isset($_POST)&&!empty($_POST)): ?>
			<p class="bg-danger" style="padding:10px">Compte inexistant. Merci de vous inscrire avant.</p>
		<?php endif; ?>

		<form action="" method="POST">
		  <div class="form-group">
		    <label for="username">Nom d'utilisateur</label>
		    <input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur">
		  </div>
		  <div class="form-group">
		    <label for="password">Mot de passe</label>
		    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Rester connecté
		    </label>
		  </div>
		  <button type="submit" class="btn btn-primary">Se connecter</button>
		  <a href="/inscription" title="Inscription" style="padding-left:10px">Pas inscrit ? Inscrivez-vous.</a>
		</form>
	</div>
</div>
