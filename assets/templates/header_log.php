<header>

    <div id="logo">
        <span class="material-icons-outlined">
            movie
        </span>
        <a href="./homepage.php" style="text-decoration: none; color:#625FFF"><span id="textlogo">CMBD</span></a>
    </div>
    <div class="menuitem">
        <a href="./user.php">
            <span class="material-icons-outlined">
                account_circle
            </span>
            <span class="headertext"><?= $_SESSION['user']['username'] ?></span>
        </a>
    </div>
    <div class="menuitem">
        <a href="./genres.php">
            <span class="material-icons-outlined">
                category
            </span>
            <span class="headertext">Genres</span>
        </a>
    </div>
    <div class="menuitem">
        <a href="./search.php">
            <span class="material-icons-outlined">
                search
            </span>
            <span class="headertext">Search</span>
        </a>
    </div>
    <div class="menuitem" id="signout">
        <a href="../account/sign_out.php">
            <span class="material-icons-outlined">
                logout
            </span>
            <span class="headertext">Sign out</span>
        </a>
    </div>
</header>

