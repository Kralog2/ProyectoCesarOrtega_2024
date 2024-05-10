<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="shortcut icon" href="../recursos/media/favicon.png" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="StyleCuestionary.css">
</head>
<body>
    <nav class="menu">
        <a href="../indexEN.php">Home</a>
        <a href="indexEN.php">Questionnaire</a>
        <a href="deleteuserEN.php">Delete record</a>
        <a href="ShowDBEN.php">View records</a>
    </nav>
    <div class="translate">
        <a href="#" id="idioma" class="idioma">
            <img src="../recursos/banderas/usa.png" alt="icono de bandera">
            <img src="../recursos/banderas/buttondown.png" alt="icono bottom">
        </a>
        <ul id="idiomas" class="idiomas">
            <li class="opcion">
                <a href="index.php">
                    <img src="../recursos/banderas/mexico.png" alt="icono de bandera">
                    <span>Español</span>
                </a>
            </li>
            <li class="opcion">
                <a href="indexEN.php">
                    <img src="../recursos/banderas/usa.png" alt="">
                    <span>English</span>
                </a>
            </li>
        </ul>

    </div>

    <div class="titulo">
        <img src="../recursos/media/1200px-Bethesda_Game_Studios_logo.svg.png" alt="Logo de Bethesda">
        <h1>Bethesda Quiz</h1>
    </div>
    

    <div class="top">
        <h2>Warning:</h2>
        <p>In this section you can take a questionnaire about the games developed by Bethesda, even if they are not your favorite, this is with the aim of gathering information about the different types of players that exist, and to know the opinions of people who enjoy the company's games, and likewise those who do not.</p>
        <p>All information collected by this questionnaire is for non-commercial purposes and the data is for academic use only.</p>
</div>
    <div class="form">
        <form method="post" autocomplete="off">
            <div>
                <label for="nombre">Name</label>
                <input type="text" name="nombre" required placeholder="Enter your name or nickname" maxlength="50">
                <br><br>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" required placeholder="Enter your email">
                <br><br>
            </div>
            <div>
                <label for="gameTipe">What is your favorite genre of video games?</label>
                <input type="text" name="gameTipe" placeholder="indicate your favorite genre of video games" required list="lista-tipeGame">
                <datalist id="lista-tipeGame">
                    <option value="RPG">Rollplay game</option>
                    <option value="Shooter">shooting game</option>
                    <option value="Simulation">Simulation game</option>
                    <option value="Sandbox">Open world</option>
                    <option value="Gacha">Gacha (Service game)</option>
                    <option value="RTS">Real-time strategy game</option>
                    <option value="MOBA">multiplayer online battle arena game</option>
                    <option value="MMO">Massively multiplayer online</option>
                </datalist>
                <br><br>
            </div>
            <div>
                <label for="likeBethesdagames">Do you like Bethesda games?</label>
                <input type="text" name="likeBethesdagames" placeholder="Indicate whether or not you like Bethesd gamesa" required list="lista-like">
                <datalist id="lista-like">
                    <option value="Si">Yes</option>
                    <option value="No">No</option>
                </datalist>
                <br><br>
            </div>
            <div>
                <label for="BethesdaSagas">Which franchise is your favorite?</label>
                <input type="text" name="BethesdaSagas" placeholder="indicates which saga you like the most" required list="lista-saga">
                <datalist id="lista-saga">
                    <option value="Fallout">Fallout</option>
                    <option value="The Elder Scrolls">The Elder Scrolls</option>
                    <option value="Wolfenstein">Wolfenstein</option>
                    <option value="Doom">Doom</option>
                    <option value="Starfield">Starfield</option>
                    <option value="Quake">Quake</option>
                </datalist>
                <br><br>
            </div>
            <div>
                <label for="favoriteGame">Favorite game</label>
                <input type="text" name="favoriteGame" required placeholder="Write your favorite game" maxlength="200">
                <br><br>
            </div>
            <div>
                <label for="opinion">Write an opinion about Bethesda (optional)</label>
                <input type="text" name="opinion" placeholder="Give a short message about what you think of Bethesda and its franchises." maxlength="1500">
                <br><br>
            </div>
            <div class="buttons">
                <input name="send" type="submit" class="btn" value="Send">
                <input type="reset" name="reset" class="btn" value="Reset"></button>
            </div>
        </form>

            <?php
                include("sendEN.php");
            ?>

    </div>
    <div class="comeHome">
        <a href="../indexEN.php">Return to Home page</a>
        <br>
        <a href="deleteuserEN.php">Unregister here</a>
        <br>
        <a href="ShowDBEN.php">If you want to see the other records click here</a>
    </div>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/idioma.js"></script>

</body>
</html>