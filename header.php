<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/view2.jpeg" alt="Logo" width="50px" height="50px" style="object-fit: cover;"></a>
<br>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" 
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" aria-current="page" href="index.php" 
                            style="<?php if($page == "home"){echo "color: black";}?>">Home</a>
                            <a class="nav-link" href="twee.php" 
                            style="<?php if($page == "twee"){echo "color: black";}?>">Hoofdstuk 2</a>

                            <a class="nav-link" href="drie.php" 
                            style="<?php if($page == "drie"){echo "color: black";}?>">Hoofdstuk 3</a>
                            <a class="nav-link" href="vier.php" 
                            style="<?php if($page == "veir"){echo "color: black";}?>">Hoofdstuk 4</a>
                        </div>
                    </div>
                </div>
            </nav>