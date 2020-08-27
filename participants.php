

<!DOCTYPE html>
<html>
    <head>
        <!--All copyrights webdesign reserved by Ermir B. Shabani -->

        <!--Ikona dhe titulli -->
        <link rel = "icon" type = "image/png" href = "../2020/Photos/logo.png">
        <link rel = "apple-touch-icon" type = "image/png" href="../2020/Photos/logo.png"/>
        <title>Week of Women - 2020 | All rights reserved &copy;</title>
        <!-- Mbarimi -->

        <!-- Fillimi i Bootstrap dhe meta -->    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- Mbarimi i Bootstrap dhe meta -->

        <!-- Fontet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">    
        <link href="https://fonts.googleapis.com/css?family=Concert+One|Knewave&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cuprum&display=swap" rel="stylesheet">
        <!-- Mbarimi i fonteve -->

        <!-- Fillimi i CSS te jashtum -->
        <link rel="stylesheet" href="../2020/css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />    
        <link rel="stylesheet" href="../2020/css/style.css" type="text/css">
        <!-- Mbarimi i CSS te jashtum -->
    </head>
    <body>

        <!-- Fillimi i navigacionit dhe backgroundit -->
        <div id="bg-nav" style="height:478px;">
            <header class="header-section">
                <div class="container-fluid">
                    <div class="row bg-overlay">
                        <div class="header fadeInDown">
                            <div class="col-lg-12">
                                <div class="navigation mobile-menu">
                                    <div class="main-menu">
                                        <nav>
                                            <ul>
                                                  <li><a href="../2020/index.php"><i class="fas fa-home"></i> Home</a></li>
                                                <li><a  href="../2020/voices.php"><i class="fas fa-male"></i> Speakers</a></li>
                                                <li><a class="active" href="../2020/participants.php"><i class="fas fa-users"></i> Participants</a></li>
                                                <li><a href="../2020/#"><i class="fas fa-camera-retro"></i> Gallery</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="top-social">
                                        <a href="https://www.facebook.com/weekofwomen/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                        <a href="https://twitter.com/weekofwomen" target="_blank"><i class="fab fa-twitter-square"></i></a>
                                        <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=someone@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>     
                                        <a href="../2020/admin.php" class="admin-btn"><i class="fas fa-user-lock"></i></a>
                                    </div>
                                </div>
                                <div id="mobile-menu-wrap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="weektext">Participants - 2020</h3>

                <div class="shikomeshume">
                    <hr id="hr6" class="hr3 slideInRight">
                    <hr id="hr7" class="hr3 slideInRight">
                    <hr id="hr8" class="hr3 slideInRight">
                    <hr id="hr9" class="hr3 slideInRight">
                    <hr id="hr10" class="hr3 slideInRight">

                

                </div>
            </header>
        </div>
        <!-- Mbarimi i navigacionit dhe backgroundit    

<!-- Fillimi i markes me rrjetet sociale -->        
        <marquee id="marke">Purpose: Involving citizens in policy-making processes is an essential element of good governance. Continuous communication with citizens assists public institutions in improving the quality of policies, meeting citizens 'expectations of the degree of transparency and accountability, and in addressing the problem of declining citizens' trust in democracy.</marquee>




        <!-- Mbarimi i markes me rrjetet sociale -->       


        <!-- Fillimi i Jumbotronit -->    
        <div class="jumbotron">
            <div class="container">
                <div>



                    <div class="row">      

                        <!--===============================================================-->  

                        <!--Trupi i Kolonave dhe rreshtave per folesit kryesor -->

                        <?php 

                        require_once "konfigurimi.php";
                        $sql = "SELECT `id`, `Emri`, `Mbiemri`, `Foto` ,`Vendi`,`Profesioni`,`Biografia` FROM `fshk`";
                        $result = mysqli_query($link, $sql);


                        for ($i=0; $i < 130; $i++) {
                            while($row = mysqli_fetch_array($result)) {  
                                $emri = $row['Emri'];
                                $mbiemri = $row['Mbiemri'];
                                $profesioni = $row['Profesioni'];
                                $vendi = $row['Vendi'];
                                $biografia = $row['Biografia'];
                                $i++;
                                echo  "<div class='col col-12 col-lg-3 col-md-3 col-sm-4' data-aos='fade-up'>
       <div class='card card1'>
  <img class='card-img-top' src='data:image/jpeg;base64,".base64_encode($row['Foto'] )."'  alt='Foto Portret' height='280px' width='300px'>
  <div class='card-body d-flex flex-column'>
    <h5 class='card-title'>$emri $mbiemri</h5>
    <p class='card-text'>$vendi</p>
    <p class='card-text cardtext'>$profesioni</p>
<button type='button' class='btn btn-danger butoni1 mt-auto' data-toggle='modal' data-target='#exampleModalCenter";echo $i; echo" '>

Biography</button>
<hr>

      <p>Participant ";echo $i; echo "  -  2020  &copy;</p>

<div class='modal fade' id='exampleModalCenter"; echo $i; echo "' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle"; echo $i; echo "' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLongTitle"; echo $i; echo "'><!--titulli i folesit -->   $emri $mbiemri</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span></button>
      </div><div style='color: black' class='modal-body'>
          <!--Trupi per tekstin e biografise-->
        $biografia
        </div><div class='modal-footer'>
        <button type='button' class='btn btn-secondary butoni2' data-dismiss='modal'>Close</button>
      </div></div></div></div></div></div></div>";

                            }
                        }
                        ?>



                    </div></div></div>

        </div> 
        <!-- Mbarimi i Jumbotronit -->    


        <!-- Fillimi i foterit -->
       <footer>
            <!--Krijimi i foterit -->
            <div class="container-fluid foteri">
                <div class="row" data-aos="zoom-in">

                    <div class="col col-lg-4 col-12 ">
                        <h1><i class="fa fa-location-arrow" aria-hidden="true"></i> Address :</h1>
                        <p>Office : Andrea Gropa str.no.120 - 1000 Prishtina Kosovo</p>
                    </div>

                    <div class="col col-lg-4 col-12 ">
                        <h1><i class="fa fa-phone-square" aria-hidden="true"></i> Contact :</h1>
                        <p>+383 45 947 425</p>
                    </div>

                    <div class="col col-lg-4 col-12 ">
                        <h1><i class="fa fa-envelope" aria-hidden="true"></i> Email :</h1>
                        <p>e.shabani2015@gmail.com</p>
                    </div>

                    <div class="col col-lg-12 col-12">
                        
                        <!--Paraqitja e iframe te mapit -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1471.753372737915!2d21.044426257954523!3d42.45950997992854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13537f00b9312eab%3A0x64cc0dfa29a9062e!2sDonje%20Godance!5e0!3m2!1sen!2s!4v1588196537271!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>


            </div>

        </footer>

        <!-- Mbarimi per foterin ne fund te faqes -->    

        <!--  JavaScript -->
        <!-- jQuery -- >, -- > Popper.js, -- > Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <!-- Librari te javascript --> 
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/main.js"></script>
        <script src="js/particles.js"></script>
        <script src="js/app.js"></script>


        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({

                offset: 120, 
                delay: 0,
                once: true,

            });
        </script>

    </body>
</html>