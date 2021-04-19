<?php
if(isset($_POST['article_titre'], $_POST['article_contenu])) {
	if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {
	
		$article_titre = htmlspecialchars($_POST['article_titre']);
		$article_contenu = htmlspecialchars($_POST['article_contenu']);
		
		$ins = $bdd->prepare('INSERT INTO articles (nom, photo, description, type, provenance, pratique_alimentaire)
			VALUES (?, ?, NOW())');
		$ins->execute(array($article_titre, $article_contenu));
		
	} else {
		$erreur = 'Veuillez remplir tous les champs';
	}
}
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/gif" href="assets/img/logo.png" />

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
<link rel="stylesheet" href="assets/css/style.css" />

<title>Tricatel</title>
</head>
<body>

	<div class="collapse" id="navbarToggleExternalContent">
		<div class="bg-dark p-4">
			<h5 class="text-white h4">Tricatel</h5>
			<span class="text-muted">"Heureusement il y a Indus, Indus !"</span>
		</div>
	</div>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a href="../../index.html"><img src="../img/logo.png" alt="Logo" width="40px" height="40px"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>


	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
		<div class="col-md-5 p-lg-5 mx-auto my-5">
			<h1 class="display-4 fw-normal">Modification des plats</h1>
			<p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
			<a class="btn btn-lg btn-primary" href="#">Déconnexion</a>
		</div>
		<div class="product-device shadow-sm d-none d-md-block"></div>
		<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
	</div>


	<div class="album py-5 bg-light">
		<div class="container">
			
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
				<div class="col">
					<div class="card shadow-sm">
						<img src="../img/food_1.jpg" alt="Card" width="auto" height="500px" />
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-primary">Modifier</button><span></span>
									<button type="button" class="btn btn-sm btn-primary">Supprimer</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card shadow-sm">
						<img src="../img/food_2.jpg" alt="Card" width="auto" height="500px" />
						
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-primary">Modifier</button>
									<button type="button" class="btn btn-sm btn-primary">Supprimer</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card shadow-sm">
						<img src="../img/food_3.jpg" alt="Card" width="auto" height="500px" />
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-primary">Modifier</button>
									<button type="button" class="btn btn-sm btn-primary">Supprimer</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				

		
		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		
		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
		
	</body>
</html>