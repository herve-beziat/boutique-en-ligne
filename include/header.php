<header>
    <div class="nav1">
        <form method="POST" id="searchbox">
            <input type="text" name="recherche" placeholder="Rechercher">
            <input type="submit" name="submit" value="Ok">
        </form>
        <div id="Logo">
           <a href= "../index.php"> <img class="logo" src="../assets/img/logo.png"></a>
           
        </div>
        <div id="Profilpic">
            <a href="#"><img class="profilpic" src="../assets/img/profil.png"></a>
            <div class="infobulle-profil">
                <?php if(empty($_SESSION['login'])) : ?>
                    <a href="../viewer/signup.php?form=connexion">Se connecter</a>
                    <a href="../viewer/inscription.php?form=inscription" id="inscription">Inscription</a>
                <?php else : ?>
                    <h3>Bienvenue <?php echo $_SESSION['login']; ?></h3>
                    <a href="#">Mofifier le Profil</a>
                    <a href="#">Mon compte</a>
                    <a href="../controller/logout.php" id="logout">Déconnexion</a>
                <?php endif; ?>
            </div>
        </div>
        <div id="Panierpic">
             <img class="panier" src="../assets/img/Vector.png">
        </div>
    </div>
    <div class="nav2">
        <ul id="menu-nav">
           <li><a href="../viewer/displayArticles.php">Catalogue</a></li>
           <li><a href="../viewer/bonbon.php">Bonbons</a></li>
           <li><a href="">Chocolat</a></li>
           <li><a href="../viewer/goodies.php">Goodies</a></li>
        </ul>
    </div>
</header>
