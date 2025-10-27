<?php
// mentions_legales.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mentions légales - EcoRide</title>
  <link rel="stylesheet" href="../assets/style.css">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f2fff2;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .container {
      max-width: 900px;
      margin: 100px auto 40px;
      background: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    h1, h2 {
      color: #2e7d32;
    }

    p {
      line-height: 1.6;
    }

    ul {
      padding-left: 1.5rem;
    }
  </style>
</head>
<body>


<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar">
  <a href="/ecoride/index.php?page=home" class="navbar_title" style="text-decoration: none;">
    <img src="/ecoride/images/logo-voiture.webp" alt="Logo EcoRide">
    <h1><span class="eco">Eco</span><span class="ride">Ride</span></h1>
  </a>

  
  <button class="burger" onclick="toggleMenu()">☰</button>

  
  <div class="navbar_menu" id="navbarMenu">
    <ul>
      <li><a href="/ecoride/index.php?page=home">Accueil</a></li>
      <li><a href="/ecoride/index.php?page=recherche"><span class="green-text">Covoiturages</span></a></li>
      <li><a href="/ecoride/index.php?page=contact">Contact</a></li>

      <?php if (isset($_SESSION['admin_id'])): ?>
        <li><a href="/ecoride/index.php?page=espace_admin" style="font-weight: bold; color: #2e7d32;">🛠 Espace Admin</a></li>
      <?php endif; ?>
    </ul>

    <div class="navbar_user">
      <?php if (isset($_SESSION['username'])): ?>
        👋 <a href="/ecoride/index.php?page=profil"><?= htmlspecialchars($_SESSION['username']) ?></a> — 
        💳 <?= (int)$_SESSION['credits'] ?> crédits |
        <a href="/ecoride/index.php?page=profil">Mon espace</a> |
        <a href="/ecoride/index.php?page=deconnexion">Se déconnecter</a>

      <?php elseif (isset($_SESSION['admin_nom'])): ?>
        👤 <strong><?= htmlspecialchars($_SESSION['admin_nom']) ?></strong> |
        <a href="/ecoride/index.php?page=espace_admin">Espace Admin</a> |
        <a href="/ecoride/index.php?page=deconnexion">Se déconnecter</a>

      <?php elseif (isset($_SESSION['employe_nom'])): ?>
        👨‍💼 <strong><?= htmlspecialchars($_SESSION['employe_nom']) ?></strong> |
        <a href="/ecoride/index.php?page=espace_employe">Espace Employé</a> |
        <a href="/ecoride/index.php?page=deconnexion">Se déconnecter</a>

      <?php else: ?>
        <a href="/ecoride/index.php?page=connexion">Connexion</a> | 
        <a href="/ecoride/index.php?page=inscription">Inscription</a>
      <?php endif; ?>
    </div>
  </div>
</nav>



<div class="container">
  <h1>📄 Mentions légales</h1>

  <h2>Éditeur du site</h2>
  <p>
    <strong>Nom du site :</strong> EcoRide<br>
    <strong>Responsable de publication :</strong> Mme/M. Nom Prénom<br>
    <strong>Statut juridique :</strong> Auto-entrepreneur / SAS / Association (à adapter)<br>
    <strong>SIRET :</strong> 123 456 789 00000<br>
    <strong>Adresse :</strong> 12 rue du Covoiturage Vert, 75000 Paris, France<br>
    <strong>Email :</strong> contact@ecoride.fr
  </p>

  <h2>Hébergement</h2>
  <p>
    <strong>Hébergeur :</strong> OVH / autre<br>
    <strong>Adresse :</strong> 2 rue Kellermann, 59100 Roubaix, France<br>
    <strong>Site :</strong> <a href="https://www.ovh.com" target="_blank">www.ovh.com</a>
  </p>

  <h2>Propriété intellectuelle</h2>
  <p>
    Le contenu du site (textes, images, logo, etc.) est protégé par le droit d’auteur. Toute reproduction ou diffusion
    sans autorisation est interdite.
  </p>

  <h2>Données personnelles</h2>
  <p>
    Conformément au RGPD, vous disposez d’un droit d’accès, de modification, de suppression et d’opposition
    concernant vos données. Pour toute demande : <a href="mailto:dpo@ecoride.fr">dpo@ecoride.fr</a>.<br>
    Les données sont utilisées uniquement pour la gestion du service EcoRide et conservées 3 ans maximum.
  </p>

  <h2>Cookies</h2>
  <p>
    Ce site utilise des cookies pour améliorer l’expérience utilisateur. Vous pouvez refuser ou accepter
    leur utilisation lors de votre navigation.
  </p>

  <h2>Loi applicable</h2>
  <p>
    Le site EcoRide est soumis au droit français. Tout litige sera porté devant les tribunaux compétents.
  </p>
</div>


<script>
  function toggleMenu() {
    const menu = document.getElementById("navbarMenu");
    if (menu) menu.classList.toggle("active");
  }
</script>

</body>
</html>
