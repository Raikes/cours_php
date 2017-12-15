 <header>
 
        <!-- NAVBAR  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php"></a>
    

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../views/watchlist.php">Watchlist</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../views/register.php">Inscription <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <?php 
                if(!empty($_SESSION["isConnected"]) && $_SESSION["isConnected"] == 'true' ) {
                    echo '<a class="nav-link" href="../views/logout.php">Déconnexion</a>';
                }else{
                    echo '<a class="nav-link" href="../views/login.php">Connexion</a>';
                }
                ?>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Guillaume Sylvestre, Brat Pitt ..." method="GET" name="search" aria-label="Search" size="30">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
        </form>
    </div>
    </nav>

</header>