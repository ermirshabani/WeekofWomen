                  <?php          
                include 'arrays/folesitarray.php';
                $countfolesit = count($folesit);
                include 'arrays/pjesemarresitarray.php';
                $countpjesemarresit = count($pjesemarresit);


?>

<!DOCTYPE html>
<html>
    <head>
        <!--All copyrights design reserved by Ermir B. Shabani -->

        <!-- Ikona dhe titulli -->
        <link rel = "icon" type = "image/png" href = "../2020/Photos/logo.png">
        <link rel = "apple-touch-icon" type = "image/png" href="../2020/Photos/logo.png"/>
        <title>Week of Women - 2020 | All rights reserved &copy;</title>
        <!-- Mbarimi i ikonave dhe titullit -->

        <!-- Fillimi i Bootstrap dhe meta -->    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
        <!-- Mbarimi i Bootstrap dhe meta -->    


        <!-- Fillimi i linqeve te Fonteve -->
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
        <!-- Mbarimi i linqeve te Fonteve -->

        <!-- Fillimi i CSS te jashtum -->
        <link rel="stylesheet" href="../2020/css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />    
        <link rel="stylesheet" href="../2020/css/style.css" type="text/css">
        <!-- Mbarimi i CSS te jashtum -->
    </head>
    <body>

        <!-- Fillimi i navigacionit dhe backgroundit -->
        <div id="bg-nav">
            <header class="header-section">
                <div class="container-fluid">
                    <div class="row bg-overlay">
                        <div class="header fadeInDown">
                            <div class="col-lg-12">
                                <div class="navigation mobile-menu">
                                    <div class="main-menu">
                                        <nav>
                                            <ul>
                                                <li><a class="active" href="../2020/index.php"><i class="fas fa-home"></i> Home</a></li>
                                                <li><a href="../2020/voices.php"><i class="fas fa-male"></i> Speakers</a></li>
                                                <li><a href="../2020/participants.php"><i class="fas fa-users"></i> Participants</a></li>
                                                <li><a href="../2020/#"><i class="fas fa-camera-retro"></i> Gallery</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="top-social">
                                       
                                        <a href="../2020/alb/index.php">ALB</a>
                                      
                                       <a href="../2020/index.php"><span style="font-weight:900;font-size:20px">ENG</span></a>
                                    
                                        <a href="../2020/srb/index.php">SRB</a>

                                        <a href="../2020/kycu.php" class="admin-btn"><i class="fas fa-user-lock"></i>

</a>
                                    </div>
                                </div>
                                <div id="mobile-menu-wrap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-lg-12 col-12">
                    <img id="logowhite" src="../2020/Photos/logowhite.png" width="100px" height="50px;">
                    </div>
                    <div class="col-lg-12 col-12">
                <h3 class="weektext slideInDown"><span style="font-size:38px;font-weight:600">W</span>eek of <span style="font-size:38px;font-weight:600">W</span>omen</h3>
                    </div>
                    <div class="col-lg-12 col-12">
                <hr id="hr7" class="hr3 slideInRight">
                    </div>
                </div>
                    </div>
              


                <!-- Fillimi i Countdown te kohes -->
                <section class="eventi-countdown">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="emri-eventit">
                                    <h2 style="font-size:40px;">Changing the face of politics! </h2>
                                    <h4>17 & 18 July, 2020 <span>Starts @ 09:30 AM <i class="fas fa-clock"></i></span></h4>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="koha-countdown slideInRight" id="countdown">
                                    <div class="ditet ">
                                        <span id="dita"></span>
                                        <p id="paragrafi-ditet">Days</p>
                                    </div>
                                    <div class="ditet ">
                                        <span id="ora"></span>
                                        <p id="paragrafi-ora">Hours</p>
                                    </div>
                                    <div class="ditet ">
                                        <span id="minuta"></span>
                                        <p id="paragrafi-minuta">Minutes</p>
                                    </div>
                                    <div class="ditet ">
                                        <span id="sekonda"></span>
                                        <p id="paragrafi-sekonda">Seconds</p>
                                    </div>
                                </div></div>
                        </div>
                    </div>
                </section>
                <!-- Mbarimi i countdown te kohes -->
            </header>
        </div>
        <!-- Mbarimi i navigacionit dhe backgroundit  -->
        <marquee id="marke">Purpose: Involving citizens in policy-making processes is an essential element of good governance. Continuous communication with citizens assists public institutions in improving the quality of policies, meeting citizens 'expectations of the degree of transparency and accountability, and in addressing the problem of declining citizens' trust in democracy.</marquee>
        <div>


            <script>
                // Data se ku do te mbaroj
                var data = new Date("July 17, 2020 00:00:00").getTime();

                // Update e kohes qdo 1 sekond
                var x = setInterval(function() {

                    // Data e sodit dhe koha
                    var datasot = new Date().getTime();

                    // Distanca nga koha sodit me daten e mbarimit
                    var distanca = data - datasot;

                    // Kalkulimi i diteve oreve e sekondeve
                    var days = Math.floor(distanca / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distanca % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distanca % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distanca % (1000 * 60)) / 1000);

                    // Ndrysho elementet 
                    document.getElementById("dita").innerHTML = days + " ";
                    document.getElementById("ora").innerHTML = hours + " ";
                    document.getElementById("minuta").innerHTML = minutes + " ";
                    document.getElementById("sekonda").innerHTML = seconds + " ";
                    // Deklarimi dhe incializimi i variablave te id

                    var paragrafi1 = document.getElementById("paragrafi-ditet");
                    var paragrafi2 = document.getElementById("paragrafi-ora");
                    var paragrafi3 = document.getElementById("paragrafi-minuta");
                    var paragrafi4 = document.getElementById("paragrafi-sekonda");

                    // Nese eventi mbaron ndrysho elementin ne tekst
                    if (distanca < 0) {
                        clearInterval(x);
                        document.getElementById("dita").innerHTML = "0";
                        document.getElementById("ora").innerHTML =  "0";
                        document.getElementById("minuta").innerHTML = "0";
                        document.getElementById("sekonda").innerHTML =  "0";

                    }
                }, 100);

            </script>
        </div>


        <!-- Fillimi i jumbotronit te pare -->
        <div class="jumbotron javagruas" data-aos="fade-up">
            <div class="container ">
                <img id="logoweek" src="../2020/Photos/logo.png" width="100px" height="100px">

                <h1 style="text-align: center; font-family: 'Archivo Black';font-size: 60px">Week of Women</h1>
                <p style="text-align: center;" >
                    Women's Week 2020 comes in a new format of organization extending activities throughout the year in order to provide more opportunities for participants to develop skills as well as discuss public policy priorities for citizens from a party, ethnic, and community perspective. gender. Women's Week will begin with a two-day conference in Pristina that will take place on March 17 and 18, followed by activities that will be organized each month in different cities of Kosovo. Women's Week 2020 ends in Pristina in October, where successful participants are certified by NDI and USAID.
                    <span id="pikat"></span><span id="meshume">Involving citizens in policy-making processes is an essential element of good governance. Continuous communication with citizens assists public institutions in improving the quality of policies, meeting citizens 'expectations of the degree of transparency and accountability, and in addressing the problem of declining citizens' trust in democracy.
                    </span></p>
                <div class="shikomeshume">
                    <button class="shikomeshume2 btn btn-danger butoni1" id="btnshikomeshume" onclick="shikomeshume()">Read more</button>
                </div>

                <script>
                    function shikomeshume() {
                        var pikat = document.getElementById("pikat");
                        var meshume = document.getElementById("meshume");
                        var btnshikomeshume = document.getElementById("btnshikomeshume");

                        if (pikat.style.display === "none") {
                            pikat.style.display = "inline";
                            meshume.style.display = "none";
                            btnshikomeshume.innerHTML = "Read more";

                        } else {
                            pikat.style.display = "none";
                            btnshikomeshume.innerHTML = "Read less";
                            meshume.style.display = "inline";
                        }
                    }
                </script>        

                <hr id="hr">

                <div data-aos="flip-left">
                    <div class="rreshti">
                        <div class="kolona" >
                            <div class="trupi">
                                <p><i style="font-size: 50px" class="fas fa-users "></i></p>
                                <h3 id="pjesmarres"></h3>
                                <p>Participants</p>
                            </div>
                        </div>

                        <div class="kolona" data-aos="flip-left">
                            <div class="trupi">
                                <p><i style="font-size: 50px" class="fas fa-microphone-alt "></i></p>
                                <h3 id="foles"></h3>
                                <p>Speakers</p>
                            </div>
                        </div>

                        <div class="kolona" data-aos="flip-left">
                            <div class="trupi">
                                <p><i style="font-size: 50px" class="fas fa-globe-europe "></i></p>
                                <h3 id="komunitet"></h3>
                                <p>Communities</p>
                            </div>
                        </div>

                        <div class="kolona" data-aos="flip-left">
                            <div class="trupi">
                                <p><i style="font-size: 50px" class="fas fa-handshake "></i></p>
                                <h3 id="partner"></h3>
                                <p>Sponsors</p>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">


                    var pjesmarres = document.getElementById('pjesmarres');
                    var foles = document.getElementById('foles');
                    var komunitet = document.getElementById('komunitet');
                    var partner = document.getElementById('partner');



                    var i = 0, persona = 120;
                    function pjesmarresit() {

                        pjesmarres.innerHTML = i++ + '+';
                        if( i <= persona ){
                            setTimeout( pjesmarresit, 50 );
                        }
                    };

                    var f = 0, folesit = 30;

                    function folesitpjesmarres() {

                        foles.innerHTML = f++ + '+';
                        if( f <= folesit ){
                            setTimeout( folesitpjesmarres, 100 );
                        }
                    };

                    var k = 0, komuniteti = 6;

                    function komunitetetpjesmarres() {

                        komunitet.innerHTML = k++ + '+';
                        if( k <= komuniteti ){
                            setTimeout( komunitetetpjesmarres, 1000 );
                        }
                    };

                    var p = 0, partneri = 3;

                    function partneripjesmarres() {

                        partner.innerHTML = p++ + '+';
                        if( p <= partneri ){
                            setTimeout( partneripjesmarres, 1000 );
                        }
                    };


                    partneripjesmarres();          
                    komunitetetpjesmarres();           
                    folesitpjesmarres();
                    pjesmarresit();


                </script>

            </div>
        </div>


      




        <!-- Mbarimi i jumbotronit te pare -->

        <!-- Fillimi i jumbotronit te dyte -->
        <div class="jumbotron jumbotronbackground" >
            <div class="container containerbackground"  data-aos="fade-up">
                <h1 style="text-align: center; color: white">Speakers</h1>
                <hr style="background-color: white;">
                <div class="shikomeshume">
                    <a href="../2020/voices.php"><button class="shikomeshume2 btn butoni1">See more</button></a>
                </div>
                <div>

                    <div class="row">
                        <?php 

                        require_once "konfigurimi.php";
                        $sql = "SELECT `id`, `Emri`, `Mbiemri`, `Foto` ,`Vendi`,`Profesioni`,`Biografia` FROM `folesit` LIMIT 4";
                        $result = mysqli_query($link, $sql);


                        for ($i=5; $i < 50; $i++) {
                            while($row = mysqli_fetch_array($result)) {  
                                $emri2 = $row['Emri'];
                                $mbiemri2 = $row['Mbiemri'];
                                $profesioni2 = $row['Profesioni'];
                                $vendi2 = $row['Vendi'];
                                $biografia2 = $row['Biografia'];
                                $i++;
                                echo  "<div class='col col-12 col-lg-3 col-md-4 col-sm-6' data-aos='fade-up'>
       <div class='card card1'>
  <img class='card-img-top' src='data:image/jpeg;base64,".base64_encode($row['Foto'] )."'  alt='Foto Portret' height='280px' width='300px'>
  <div class='card-body d-flex flex-column'>
    <h5 class='card-title'>$emri2 $mbiemri2</h5>
        <p class='card-text'>$vendi2</p>
    <p class='card-text'>$profesioni2</p>
<button type='button' class='btn btn-danger butoni1 mt-auto' data-toggle='modal' data-target='#exampleModalCenter";echo $i; echo" '>

Biography</button>      
<div class='modal fade' id='exampleModalCenter"; echo $i; echo "' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle"; echo $i; echo "' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLongTitle"; echo $i; echo "'><!--titulli i folesit -->   $emri2 $mbiemri2</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span></button>
      </div><div style='color: black' class='modal-body'>
          <!--Trupi per tekstin e biografise-->
        $biografia2
        </div><div class='modal-footer'>
        <button type='button' class='btn btn-secondary butoni2' data-dismiss='modal'>Close</button>
      </div></div></div></div></div></div></div>";

                            }
                        }
                        ?>

                    </div></div>
            </div></div>
        <!-- Mbarimi i jumbotronit te dyte --> 

        <!---
         Fillimi i pjeses per trajneret 
        <section class="pjesa-folesit" data-aos="fade-up">
            <center>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" data-aos="fade-up">
                            <div class="titulli-folesit" data-aos="fade-up">
                                <h2>Trainers</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-4 col-lg-4 col-sm-6" data-aos="fade-up">
                            <div class="per-folesit" data-aos="fade-up">
                                <div class="foto-folesit">
                                    <img src="../2020/Pjesmarrsit/questionmark.jpg"  alt="">
                                </div>
                                <div class="teksti-folesit">
                                    <h3>Emri Mbiemri <span>Shteti</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4 col-sm-6" data-aos="fade-up">
                            <div class="per-folesit" data-aos="fade-up">
                                <div class="foto-folesit">
                                    <img src="../2020/Pjesmarrsit/questionmark.jpg"  alt="">
                                </div>
                                <div class="teksti-folesit">
                                    <h3>Emri Mbiemri <span>Shteti</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4 col-sm-6" data-aos="fade-up">
                            <div class="per-folesit" data-aos="fade-up">
                                <div class="foto-folesit">
                                    <img src="../2020/Pjesmarrsit/questionmark.jpg"  alt="">
                                </div>
                                <div class="teksti-folesit">
                                    <h3>Emri Mbiemri <span>Shteti</span></h3>
                                </div>
                            </div>
                        </div>


                    </div></div></center></section>
         Mbarimi i pjeses per trajneret -->



        <!-- Fillimi i galleris -->
        <div class="wrapper chatidiv">
            <div class="container-fluid">
                <div class="row">  
       <div class="col col-12 col-lg-6 col-md-6 col-sm-6">
        <h3 style="text-align:center;font-weight:700;margin-bottom:50px"><span style="font-size:40px">P</span>articipants</h3>


                                 <?php
         for ($row = 0; $row < 70 ; $row++)
                  {
        ?>      
                 
                <a href="../2020/participants.php">
                    <img src="<?= $pjesemarresit[$row]["foto"]; ?>" width="40px" height="40px"></a>  
            <?php
         }      
           ?>
           <h1 style="text-align:center; color:#C6426E">...</h1>
            </div>
         
        <!-- Mbarimi i galleris -->   


                    <!-- Galleria numer 1 -->
                    <div class="col col-12 col-lg-6 col-md-6 col-sm-6"  data-aos="fade-up">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="../2020/Photos/Dita1/foto1.jpg" >
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../2020/Photos/Dita1/foto2.jpg" >
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../2020/Photos/Dita1/foto6.jpg" >
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div></div></div>   
        <!--Mbarimi i Galleris ne slideshow -->



        <!-- Tema per javen e gruas Jumbotron -->
        <div class="temajavagruas">
            <div class="jumbotron temajavagruasbackground">
                <div class="container">

                    <hr id="hr10" data-aos="fade-up" data-aos-delay="100">
                    <hr id="hr9" data-aos="fade-up" data-aos-delay="200">
                    <hr id="hr8" data-aos="fade-up" data-aos-delay="300">
                    <hr id="hr7" data-aos="fade-up" data-aos-delay="400">
                    <hr id="hr6" data-aos="fade-up" data-aos-delay="500">
                    <h1 style="text-align: center;"><span>Objectives</span></h1>
                    <p style="text-align:center">Breaking the barriers that exist between women and men in society, including the differences between different generations, inter-party and inter-ethnic differences. Raising skills and empowering tomorrow's women and men leaders. Networking and fostering cooperation between participants from all walks of life, generations and ethnicities. Advancing networking with politicians and civil society activists at regional and international levels. Strengthen participants' capacities to assume leadership responsibilities in the organizations and institutions they represent.</p>

                    <hr id="hr6" data-aos="fade-up" data-aos-delay="100">
                    <hr id="hr7" data-aos="fade-up" data-aos-delay="200">
                    <hr id="hr8" data-aos="fade-up" data-aos-delay="300">
                    <hr id="hr9" data-aos="fade-up" data-aos-delay="400">
                    <hr id="hr10" data-aos="fade-up" data-aos-delay="500">
                    <p style="text-align: center">2020 - &copy;</p>
                    
                </div>
            </div>
        </div>

        <!-- Mbarimi i temes per javen e gruas Jumbotron -->    




        <!-- Programi Eventit -->
        <div id="schedule" class="section">
            <div class="container">
                <div class="row">
                    <div class="titulli-div">
                        <h3 class="titulli"><span>Event </span> <span style="color: #dd0a37;">program</span></h3>
                    </div>

                    <div class="col-md-8 col-md-offset-2">
                        <div class="events-wrapper">
                            <!-- Fillimi eventit -->
                            <div class="eventi"  data-aos="fade-up">
                                <div class="dita-eventit">
                                    <div>
                                        <span class="dita">17</span>
                                        <span class="viti">July, 2020</span>
                                    </div>
                                </div>
                                <div class="permbajtja-eventit">
                                    <p class="koha-eventit"><i class="fa fa-clock"></i> 8 : 00 AM - 11 : 00 AM</p>
                                    <h3 class="titulli-eventit"><span style="font-size:15px"><i class="fas fa-file-signature"></i></span> Name of the title</h3>
                                    <p>Whats going to be discussed</p>
                                    <p>From -<a href="#"> Name</a></p>
                                </div>
                            </div>
                            <!-- Mbarimi eventit -->

                            <!-- Fillimi eventit -->
                            <div class="eventi"  data-aos="fade-up">
                                <div class="ora-eventit"></div>
                                <div class="permbajtja-eventit">
                                    <p class="koha-eventit"><i class="fa fa-clock"></i> 8 : 00 AM - 11 : 00 AM</p>
                                    <h3 class="titulli-eventit"><span style="font-size:15px"><i class="fas fa-file-signature"></i></span> Name of the title</h3>
                                    <p>Whats going to be discussed</p>
                                    <p>From -<a href="#"> Name</a></p>
                                </div>
                            </div>
                            <!-- Mbarimi eventit -->

                            <!-- Fillimi eventit -->
                            <div class="eventi" data-aos="fade-up">
                                <div class="dita-eventit">
                                    <div>
                                        <span class="dita">18</span>
                                        <span class="viti">July, 2020</span>
                                    </div>
                                </div>
                                <div class="permbajtja-eventit">
                                    <p class="koha-eventit"><i class="fa fa-clock"></i> 8 : 00 AM - 11 : 00 AM</p>
                                    <h3 class="titulli-eventit"><span style="font-size:15px"><i class="fas fa-file-signature"></i></span> Name of the title</h3>
                                    <p>Whats going to be discussed</p>
                                    <p>From -<a href="#"> Name</a></p>
                                </div>
                            </div>
                            <!-- Mbarimi eventit -->


                            <!-- Fillimi eventit -->
                            <div class="eventi" data-aos="fade-up">
                                <div class="ora-eventit"></div>
                                <div class="permbajtja-eventit">
                                    <p class="koha-eventit"><i class="fa fa-clock" aria-hidden="true"></i> 8 : 00 AM - 11 : 00 AM</p>
                                    <h3 class="titulli-eventit"><span style="font-size:15px"><i class="fas fa-file-signature"></i></span> Name of the title</h3>
                                    <p>Whats going to be discussed</p>
                                    <p>From -<a href="#"> Name</a></p>
                                </div>
                            </div>
                            <!-- Mbarimi eventit -->


                        </div>
                        <div class="col-12 col-md-12 col-md-offset-2" data-aos="fade-up">
                            <a href="../2020/databaza/ProgramiJavor.txt" download><div class="btn butoni3 butoni1 downloadbtn"><i style="color: #FFF" class="fa fa-download"></i> Download
                                </div></a></div>

                    </div>
                </div>
            </div>
        </div>
<br><br>
        <div class="jumbotron nditext">
<div class="wrapper">
    <div class="container-fluid nditextwidth">
<div class="row">
        <div class="media"  data-aos="fade-up">
            <div class="col-12 col-lg-12">
                <p style="text-align:center;"><strong>Week of Women in Kosovo is implemented by National Democratic Institute (NDI) with generous support of the American people through United States Agency for International Development (USAID). </strong></p>
            <img class="fotologot" src="../2020/Photos/ndilogo.png" width="180px" height="100px" alt="Generic placeholder image">
            <div class="media-body"></div>
                <h5 style="text-align: center;" class="mt-0"></h5>
                <p>
                    NDI programming in Kosovo seeks to improve legislative and political accountability to citizens' needs by assisting parties in policy development, constituent outreach and group coordination, promoting openness and transparency in parliament, strengthening parliamentary capacity and resources for effective oversight and action legislation, and supporting the political participation of women, youth and ethnic minorities.</p>
                <br>
            </div>
        </div>

        <div class="media"  data-aos="fade-up">
                        <div class="col-12 col-lg-12">

            <img class="fotologot" id="usaidlogo" src="../2020/Photos/usaidlogo2.png" width="180px" height="80px" alt="Generic placeholder image">
                            <div class="media-body"></div>
                <h5 style="text-align: center;" class="mt-0"></h5>
                <p>
                    USAID's projects in Kosovo focus on economic growth and democracy and governance to help achieve lasting security, prosperity and stability. Improved education, economic opportunities and quality of life increase the confidence of Kosovo Serbs that they have a viable future in Kosovo.
                </p>
                <br>
            </div>
        </div>
        </div></div></div></div>


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