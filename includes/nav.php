<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
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
