<?php
	// Initialiser la session
	session_start();
?>


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Alysscendre.io</title>
  <link rel="stylesheet" type="text/css" href="static/style.css">
  <script src="static/script.js"></script>
</head>
<body>      


        <div class="navig"><nav>
            <a href="index.php"><li>Home</li></a><a href="login.php"><li>Log - in</li></a><li id="services">Services</li><li>Contact</li><a href="logout.php"><li>logout</li></a>
        </nav> </div>

        
        <div class="paralax">

        <?php if (isset($_SESSION['username'])) { ?>
            <!-- juste les utilisateurs qui sont log peuvent voir l'heure, sinon "fuck off" -->
            <div class="paralaxtext"><p> Welcome ! <?php echo $_SESSION['username']; ?> </br>
                Aujourd'hui nous sommes le <?php echo date('d/m/Y h:m:s'); ?> .  </p>
                </br> 
            </div>
        <?php } else { ?>
            <!-- fuck off bro -->
        <?php } ?>

        </div>

            <div class="container">

        <div class="pres">
            <h1 a href="#services"> Nos services -</h1> </br>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
            Porro iure est tenetur quos perspiciatis possimus quas illo odit eius animi! </br>
            Placeat, omnis atque sint deleniti alias consectetur in iure adipisci.</p>
        </div>  
        <div class="pres">
            <h1> Pourquoi nous ? - </h1> </br>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
            Porro iure est tenetur quos perspiciatis possimus quas illo odit eius animi! </br>
            Placeat, omnis atque sint deleniti alias consectetur in iure adipisci.</p>
        </div>
        <div class="pres">
            <h1> Nous retrouver - </h1> </br>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>
            Porro iure est tenetur quos perspiciatis possimus quas illo odit eius animi! </br>
            Placeat, omnis atque sint deleniti alias consectetur in iure adipisci.</p>
        </div>     
        
            </div>


        <div class="container">

            <div class="pricing">

            <h1>Comment nous soutenir ? - </h1>
                <p>

                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.</br>
                    Architecto harum ea veritatis amet blanditiis molestias perferendis provident dolor. </br>
                    nobis necessitatibus expedita fuga libero ipsa ad similique excepturi labore ducimus explicabo?</br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.</br>
                    Architecto harum ea veritatis amet blanditiis molestias perferendis provident dolor. </br>
                    nobis necessitatibus expedita fuga libero ipsa ad similique excepturi labore ducimus explicabo?</br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.</br>
                    Architecto harum ea veritatis amet blanditiis molestias perferendis provident dolor. </br>
                    nobis necessitatibus expedita fuga libero ipsa ad similique excepturi labore ducimus explicabo?</br>

                </p>
            </div>


        </div>


        <div class="paralaxshit">

            <div class="bullshit">

            <h1>Notre histoire - </h1>
                <p>

                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.</br>
                    Architecto harum ea veritatis amet blanditiis molestias perferendis provident dolor. </br>
                    nobis necessitatibus expedita fuga libero ipsa ad similique excepturi labore ducimus explicabo?</br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.</br>
                    Architecto harum ea veritatis amet blanditiis molestias perferendis provident dolor. </br>
                    nobis necessitatibus expedita fuga libero ipsa ad similique excepturi labore ducimus explicabo?</br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.</br>
                    Architecto harum ea veritatis amet blanditiis molestias perferendis provident dolor. </br>
                    nobis necessitatibus expedita fuga libero ipsa ad similique excepturi labore ducimus explicabo?</br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.</br>
                    Architecto harum ea veritatis amet blanditiis molestias perferendis provident dolor. </br>
                    nobis necessitatibus expedita fuga libero ipsa ad similique excepturi labore ducimus explicabo?</br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.</br>
                    Architecto harum ea veritatis amet blanditiis molestias perferendis provident dolor. </br>
                    nobis necessitatibus expedita fuga libero ipsa ad similique excepturi labore ducimus explicabo?</br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.</br>

                </p>
            </div>


        </div>

    </body>
</html>

