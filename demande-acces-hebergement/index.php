<!DOCTYPE html>
<html>
<head>
	<title>Hébergement</title>
	<?php
	/**
	 * Boostrap doc
	 * @link https://getbootstrap.com/docs/5.0/forms/overview/
	 */
	?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<?php
	/**
	 * A4 CSS
	 * @link https://codepen.io/rafaelcastrocouto/pen/LFAes
	 */
	?>
	<style type="text/css">
		body {
			background: rgb(204,204,204);
		}
		page {
			background: white;
			display: block;
			margin: 0 auto;
			margin-bottom: 0.5cm;
			box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
		}
		page[size="A4"] {
			width: 21cm;
			height: 29.7cm;
			padding: 0 30px;
		}
		page[size="A4"][layout="landscape"] {
			width: 29.7cm;
			height: 21cm;
		}
		@media print {
			body, page {
				margin: 0;
				box-shadow: 0;
				background: white;
				box-shadow: none;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<p class="d-print-none p-3 small muted text-justify" style="text-align: justify;">
			Dans le cadre de la réalisation ou l'évolution de votre Site, nous avons besoin de différents accès. Merci de remplir et imprimer au format pdf le document et de nous le transmetre par mail. <br>Ce formulaire n'est soumis à aucun moment. Les données saisies sont perdues à la fermeture de l'onglet ou rechargement de la page.
		</p>
	</div>
	<!-- Page 1 -->
	<page size="A4">
		<div class="container pt-5">

			<h1 class="text-center pb-5">Hébergement</h1>

			<form class="form-inline">
				<div class="row">
					<h2 class="mb-3">Production</h2>
					<h6>Url</h6>
					<div class="mb-3 col-12">
						<input type="text" class="form-control" id="url" aria-describedby="emailHelp">
					</div>
					<h6 class="mt-3">Admin du site</h6>
					<div class="mb-3 col-12">
						<label for="Url" class="form-label">Url</label>
						<input type="text" class="form-control" id="Url">
					</div>
					<div class="mb-3 col-6">
						<label for="Identifiant" class="form-label">Identifiant</label>
						<input type="text" class="form-control" id="Identifiant">
					</div>
					<div class="mb-3 col-6">
						<label for="Pass" class="form-label">Mot de passe</label>
						<input type="text" class="form-control" id="Pass">
					</div>


					<!-- FTP ou SFTP -->
					<h6 class="mt-3">FTP ou SFTP <span class="muted small">(accès aux fichiers sur l'hébergement)</span></h6>
					<div class="mb-3 col-12">
						<label for="Url" class="form-label">Hote <span class="muted small">(url)</span></label>
						<input type="text" class="form-control" id="Url">
					</div>
					<div class="mb-3 col-6">
						<label for="Identifiant" class="form-label">Identifiant</label>
						<input type="text" class="form-control" id="Identifiant">
					</div>
					<div class="mb-3 col-6">
						<label for="Pass" class="form-label">Mot de passe</label>
						<input type="text" class="form-control" id="Pass">
					</div>
					<div class="mb-3 col-6">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"aria-describedby="emailHelp">
							<label class="form-check-label" for="flexCheckDefault">
								Accès ssh <span class="muted small">(réponse facultative)</span>
							</label>
						</div>
					</div>
					<div class="mb-3 col-6">
							<div id="emailHelp" class="form-text">
								Certaines interventions peuvent nécessiter l'accès via un terminal
								<span data-bs-toggle="tooltip" data-bs-placement="right" title="Une console système ou console (anciennement le pupitre de commande) est un périphérique informatique de télécommunications des entrées-sorties d'un système de traitement de l'information. C'est généralement un terminal dédié uniquement à l'envoi et au retour des commandes.">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
										<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
									</svg>
								</span>
							</div>
					</div>


					<!-- Base de données -->
					<h6 class="mt-3">Base de données <span class="muted small">(Mysql ou autre)</span></h6>
					<div class="mb-3 col-12">
						<label for="Url" class="form-label">Hote <span class="muted small">(url)</span></label>
						<input type="text" class="form-control" id="Url">
					</div>
					<div class="mb-3 col-6">
						<label for="Identifiant" class="form-label">Identifiant</label>
						<input type="text" class="form-control" id="Identifiant">
					</div>
					<div class="mb-3 col-6">
						<label for="Pass" class="form-label">Mot de passe</label>
						<input type="text" class="form-control" id="Pass">
					</div>
					<div class="mb-3 col-6">
						<label for="Pass" class="form-label">Nom de la base de données <span class="muted small">(facultatif)</span></label>
						<input type="text" class="form-control" id="Pass">
					</div>
				</div>
			</form>
		</div>
	</page>


	<!-- Page 2 -->
	<page size="A4">
		<div class="container pt-5">

			<form class="form-inline">
				<div class="row">
					<h2 class="mb-3">Préproduction</h2>
					<h6>Url</h6>
					<div class="mb-3 col-12">
						<input type="text" class="form-control" id="url" aria-describedby="emailHelp">
					</div>
					<h6 class="mt-3">Admin du site</h6>
					<div class="mb-3 col-12">
						<label for="Url" class="form-label">Url</label>
						<input type="text" class="form-control" id="Url">
					</div>
					<div class="mb-3 col-6">
						<label for="Identifiant" class="form-label">Identifiant</label>
						<input type="text" class="form-control" id="Identifiant">
					</div>
					<div class="mb-3 col-6">
						<label for="Pass" class="form-label">Mot de passe</label>
						<input type="text" class="form-control" id="Pass">
					</div>
					<h6 class="mt-3">FTP ou SFTP <span class="muted small">(accès aux fichiers sur l'hébergement)</span></h6>
					<div class="mb-3 col-12">
						<label for="Url" class="form-label">Hote <span class="muted small">(url)</span></label>
						<input type="text" class="form-control" id="Url">
					</div>
					<div class="mb-3 col-6">
						<label for="Identifiant" class="form-label">Identifiant</label>
						<input type="text" class="form-control" id="Identifiant">
					</div>
					<div class="mb-3 col-6">
						<label for="Pass" class="form-label">Mot de passe</label>
						<input type="text" class="form-control" id="Pass">
					</div>
					<div class="mb-3 col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"aria-describedby="emailHelp">
							<label class="form-check-label" for="flexCheckDefault">
								Accès ssh <span class="muted small">(réponse facultative)</span>
							</label>
							<div id="emailHelp" class="form-text">
								Certaines interventions peuvent nécessiter l'accès via un terminal
								<span data-bs-toggle="tooltip" data-bs-placement="right" title="Une console système ou console (anciennement le pupitre de commande) est un périphérique informatique de télécommunications des entrées-sorties d'un système de traitement de l'information. C'est généralement un terminal dédié uniquement à l'envoi et au retour des commandes.">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
										<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
									</svg>
								</span>
							</div>
						</div>
					</div>
					<h6 class="mt-3">Base de données <span class="muted small">(Mysql ou autre)</span></h6>
					<div class="mb-3 col-12">
						<label for="Url" class="form-label">Hote <span class="muted small">(url)</span></label>
						<input type="text" class="form-control" id="Url">
					</div>
					<div class="mb-3 col-6">
						<label for="Identifiant" class="form-label">Identifiant</label>
						<input type="text" class="form-control" id="Identifiant">
					</div>
					<div class="mb-3 col-6">
						<label for="Pass" class="form-label">Mot de passe</label>
						<input type="text" class="form-control" id="Pass">
					</div>
					<div class="mb-3 col-6">
						<label for="Pass" class="form-label">Nom de la base de données <span class="muted small">(facultatif)</span></label>
						<input type="text" class="form-control" id="Pass">
					</div>
				</div>
			</form>
		</div>
	</page>


	<!-- Page 3 -->
	<page size="A4">
		<div class="container pt-5">

			<form class="form-inline">
				<div class="row">
					<h2 class="mb-3">Hébergeur</h2>
					<div class="mb-3 col-12">
						<label for="Url" class="form-label">Url</label>
						<input type="text" class="form-control" id="Url">
					</div>
					<div class="mb-3 col-6">
						<label for="Identifiant" class="form-label">Identifiant</label>
						<input type="text" class="form-control" id="Identifiant">
					</div>
					<div class="mb-3 col-6">
						<label for="Pass" class="form-label">Mot de passe</label>
						<input type="text" class="form-control" id="Pass">
					</div>
				</div>
			</form>
		</div>
	</page>


	<!-- Crédits -->
	<div class="container">

		<div class="d-print-none small muted p-2">
			<strong>Github</strong> :
			<a href="https://github.com/entredevs/daily-docs.git" class="link" target="_blank">@neovinz</a>
			<strong>Crédits</strong> :
			<a href="https://codepen.io/rafaelcastrocouto/pen/LFAes" class="link" target="_blank">@rafaelcastrocouto</a>
			-
			<a href="https://getbootstrap.com" class="link" target="_blank">Bootstrap</a>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>