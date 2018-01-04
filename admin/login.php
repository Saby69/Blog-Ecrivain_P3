<?php require("header.php"); ?>
	<div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
        	<h2 class="mb-0">Espace
            <span class="text-primary">d'administration</span>
          </h2>
          

          <form class ="well" action="connect.php" method="POST">
          	<div class="row" style="padding-top: 10px;">
          		<div class="col-lg-4">Nom d'utilisateur</div>
	      		<div class="col-lg-4"><input type="text" name="login" id="login"></div>
          	</div>
          	<div class="row" style="padding-top: 10px;">
          		<div class="col-lg-4">Mot de passe</div>
         		<div class="col-lg-4"><input type="password" name="mdp" id="mdp"></div>
          	</div>
          	<div class="row" style="padding-top: 10px;">
          		<div class="col-lg-4"></div>
         		<div class="col-lg-4"><input class="btn-primary" type="button" name="Envoyer" value="Se connecter"></div>
          	</div>
		
		

	</form>
        </div>
      </section>
</div>
	
<?php require("../footer.php"); ?>
