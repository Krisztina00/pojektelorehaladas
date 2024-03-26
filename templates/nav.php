
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">HouseParty</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="houses.php">Houses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <?php
                if (isset($_SESSION['LOGUSER']) && $_SESSION['LOGUSER']["PERMISSION"] == 1) {
                    echo '<a class="nav-link" aria-current="page" href="admin.php">Admin panel</a>';
                }
                if (isset($_SESSION['LOGUSER'])) {
                    echo '<a class="nav-link" aria-current="page" href="reservation.php">Reservation</a>';
                    echo '<a class="nav-link" aria-current="page" href="messages.php">Message</a>';
                    echo '<a class="nav-link" aria-current="page" href="rentmyhouse.php">Rent your House    </a>';
                    echo '<a class="nav-link" aria-current="page" href="profile.php">Profile</a> <a class="btn btn-primary" href="php/userIteraction/logout.php"> Kijelentkezés</a>';

                }
                
                ?>
                  <?php
                if (!isset($_SESSION['LOGUSER'])) {
                    echo '<li class="nav-item"><a href="registry.php" class="nav-link" aria-disabled="true">Registry</a></li>';
                }
                
                ?>
            </ul>
        </div>
    </div>
</nav>