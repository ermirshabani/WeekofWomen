<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: kycu.php");
    exit;
}
include "regjistrimi.php";
require_once "konfigurimi.php";

if (isset($_POST['shto'])) {
    $emri=$_POST['emri'];
    $mbiemri=$_POST['mbiemri'];
    $vendi=$_POST['vendi'];
    $profesioni=$_POST['profesioni'];
    $biografia=$_POST['biografia'];



    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['foto']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $sql="INSERT INTO fshk( Emri, Mbiemri, Foto, Profesioni, Vendi, Biografia) VALUES ('$emri','$mbiemri','$imgContent','$profesioni','$vendi','$biografia')";
        if (!mysqli_query($link,$sql)) {
            echo "<br><p class='paragrafi'>T&#203; DH&#203;NAT NUK U FUT&#203;N</p>";
        }
        else{
            echo "<br><p class='paragrafi'>T&#203; DH&#203;NAT U FUT&#203;N ME SUKSES!</p>";
        }
    }
}
if (isset($_GET['update'])) {
    $id=$_GET['id'];
    $emri=$_GET['emri'];
    $mbiemri=$_GET['mbiemri'];
    $vendi=$_GET['vendi'];
    $profesioni=$_GET['profesioni'];
    $biografia=$_GET['biografia'];

    $sql = "UPDATE `fshk` SET `Emri`='$emri',`Mbiemri`='$mbiemri',`Vendi`='$vendi',`Profesioni`='$profesioni',`Biografia`='$biografia' WHERE id=$id ";
    if (!mysqli_query($link,$sql)) {
        echo "<br><p class='paragrafi1'>T&#203; DH&#203;NAT NUK U NDRYSHUAN - SHIKONI P&#203;R GABIME.</p>";
    }
    else{
        echo "<br><p class='paragrafi'>T&#203; DH&#203;NAT U NDRYSHUAN ME SUKSES!</p>";
    }
}


if (isset($_GET['fshije'])) {

    $id = $_GET['id']; 
    $sql = "DELETE FROM `fshk` WHERE id=$id" ;
    if (!mysqli_query($link,$sql)) {
        echo "<br><p class='paragrafi1'>PJES&#203;MARR&#203;SI NUK U FSHI - SHIKONI P&#203;R GABIME.</p>";
    }
    else{
        echo "<br><p class='paragrafi'>PJES&#203;MARR&#203;SI U FSHI ME SUKSES!</p>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--All copyrights webdesign reserved by Ermir B. Shabani -->

        <!--Ikona dhe titulli -->
        <link rel = "icon" type = "image/png" href = "../2020/Photos/logo.png">
        <link rel = "apple-touch-icon" type = "image/png" href="../2020/Photos/logo.png"/>
        <title>Administrator - WOW | All rights reserved &copy;</title>
        <!-- Mbarimi -->

        <!-- Fillimi i Bootstrap dhe meta -->    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Mbarimi i Bootstrap dhe meta -->
        <!-- Fontet -->
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <!-- Mbarimi i fonteve -->
        <!-- Fillimi i CSS te jashtum -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />    
        <link rel="stylesheet" href="../2020/css/style.css" type="text/css">
        <!-- Mbarimi i CSS te jashtum -->    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../2020/js/ajax.js"></script>


        <style type="text/css">	
            body {
                background: #EFEFEF;
                font-family: 'Poppins', sans-serif;
            }    
            .paragrafi1 {
                background-color: red;
                color: white;
                text-align: center;
                padding-top: 10px;
                padding-bottom: 10px;    
            }   
            .paragrafi {
                background-color: green;
                color: white;
                text-align: center;
                padding-top: 10px;
                padding-bottom: 10px;
            } 
            h2 {
                text-align: center;
                color: #EFEFEF;    
            }
            .shtopjesmarres {
                margin-left:auto;
                margin-right:auto;
                background: #DCDCDC;
                display:block;
                color: #000;
                text-align: center;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .page-header {
                text-align: center;
                color: #000;
            }
            .btn {
                background: #DCDCDC;
                border: 0;
                color: #000; 
                font-weight: 300;    
                margin-left: auto;
                margin-right: auto;
                width: 100%;
            }   
            h5 {
                text-align: center;
                color: #000;
                margin-top: 20px;
            }
           
            .fas {
                color: #000;
            } 
            @media only screen and (max-width: 768px) {
                h1 {
                    font-size: 20px;
                }
                .col {
                    margin: 5px;
                }
    }
        </style>
    </head>
    <body>
        <div class="container-fluid">

            <div class="page-header">
                <br>
                <h1>Mir&euml; se vini n&euml; pjes&euml;n e Administratorit p&euml;r Pjes&euml;marr&euml;sit! </h1>	
                <h4>Website &euml;sht&euml; krijuar nga :  <a href="https://www.instagram.com/ermirbshabani">Ermir Shabani </a> - 2020 &copy; </h4> 
            </div>

            <div class="row">

                <div class="col col-12 col-lg-2">   
                    <a href="../2020/index.php" class="btn btn1"><i class="fas fa-home"></i> Kryefaqja</a>
                </div>
                <div class="col col-12 col-lg-2">   
                    <a href="../2020/ndrysho-fjalekalimin.php" class="btn btn2"><i class="fa fa-key" aria-hidden="true"></i>
 Ndryshoni fjal&euml;kalimin!</a>
                </div>
                <div class="col col-12 col-lg-2">
                 <a href="#"><button class="butonimbylle btn"  data-toggle="modal" data-target="#myModal"><i class="fa fa-user-circle" aria-hidden="true"></i>
 Krijo administrator</button></a>
                </div>
                  <div class="col col-12 col-lg-4">   
                    <a href="../2020/crud.php" class="btn btn3"><i class="fa fa-users" aria-hidden="true"></i>
 Fol&euml;sit.</a>
                </div>
                <div class="col col-12 col-lg-2">   
                    <a href="../2020/shkycu.php" class="btn btn3"><i class="fa fa-times-circle" aria-hidden="true"></i>
 Dilni nga llogaria juaj!</a>
                </div>
            </div>


            <p id="success"></p>
            <div class="container centro"> 
            <div class="row"> 
                <div class="col col-lg-12">
                      <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <br><br>
                        <div class="col-12 col-lg-12">
                            <a href="#addEmployeeModal" class="shtopjesmarres btn" data-toggle="modal"><span><i class="fa fa-plus-square" aria-hidden="true"></i>
 Shtoni pjes&euml;marr&euml;s</span></a>
                        </div>
                    </div>

                    <h5><strong style="color:#FF4141">Kujdes!</strong> Kjo vlen&euml; p&euml;r ndryshimin e t&euml; dh&euml;nave vet&euml;m p&euml;r pjes&euml;marr&euml;sit.</h5>
                </div><br>
                <table class="table  table-striped table-borderless table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Foto</th>
                            <th>Emri</th>
                            <th>Mbiemri</th>
                            <th>Vendi</th>
                            <th>Profesioni</th>
                            <th>Biografia</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $result = mysqli_query($link,"SELECT * FROM fshk");

                        while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr id="<?php echo $row["id"]; ?>">
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo "<img height='100px' width='100px' src='data:image/jpeg;base64,".base64_encode($row['Foto'] )."'>"; ?></td>
                            <td><?php echo $row["Emri"]; ?></td>
                            <td><?php echo $row["Mbiemri"]; ?></td>
                            <td><?php echo $row["Vendi"]; ?></td>
                            <td><?php echo $row["Profesioni"]; ?></td>
                            <td><?php echo $row["Biografia"]; ?></td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                    <i class="fas fa-exchange-alt" data-toggle="tooltip" 
                                       data-id="<?php echo $row["id"]; ?>"
                                       data-foto="<?php echo "<img src='data:image/jpeg;base64,".base64_encode($row['Foto'] )."'>"; ?>"
                                       data-emri="<?php echo $row["Emri"]; ?>"
                                       data-mbiemri="<?php echo $row["Mbiemri"]; ?>"
                                       data-vendi="<?php echo $row["Vendi"]; ?>"
                                       data-profesioni="<?php echo $row["Profesioni"]; ?>"
                                       data-biografia="<?php echo $row["Biografia"]; ?>" title="Ndrysho"></i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="fas fa-user-slash" data-toggle="tooltip" title="Fshije"></i></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div> 
            <!-- Mbarimi i tabeles -->
                
                </div>
                
                
                </div>
            
            </div>
      
            
        </div>
        <!-- Pjesa e modal per shtimin e te dhenave per pjesemarresit -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="user_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">						
                            <h3 class="modal-title">Pjes&euml;marr&euml;s i ri.</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">	

                            <div class="form-group">
                                <label>Emri</label>
                                <input type="text" id="emri" name="emri" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Mbiemri</label>
                                <input type="text" id="mbiemri" name="mbiemri" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Vendi</label>
                                <input type="text" id="vendi" name="vendi" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Profesioni</label>
                                <input type="text" id="profesioni" name="profesioni" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Biografia</label>
                                <textarea class="form-control" id="biografia" rows="3" name="biografia" required></textarea>
                            </div>	
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Foto</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" type="submit" name="shto" >Shto</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Pjesa e modal per ndryshimin e te dhenave -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="update_form">
                        <div class="modal-header">						
                            <h3 class="modal-title">Ndrysho</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Id</label>
                                <input type="text" id="id_u" name="id" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Emri</label>
                                <input type="text" id="emri_u" name="emri" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Mbiemri</label>
                                <input type="text" id="mbiemri_u" name="mbiemri" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Vendi</label>
                                <input type="text" id="vendi_u" name="vendi" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Profesioni</label>
                                <input type="text" id="profesioni_u" name="profesioni" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Biografia</label>
                                <textarea class="form-control" id="biografia_u" rows="3" name="biografia" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-lg" type="submit" name="update" >Ndrysho</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Pjesa e modal per shtimin e te dhenave per folesit -->
        <div id="addvoicesModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="user_form2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">						
                            <h3 class="modal-title">Fol&euml;sit e ri.</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">	

                            <div class="form-group">
                                <label>Emri</label>
                                <input type="text" id="emri2" name="emri2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Mbiemri</label>
                                <input type="text" id="mbiemri2" name="mbiemri2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Vendi</label>
                                <input type="text" id="vendi2" name="vendi2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Profesioni</label>
                                <input type="text" id="profesioni2" name="profesioni2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Biografia</label>
                                <textarea class="form-control" id="biografia2" rows="3" name="biografia2" required></textarea>
                            </div>	
                            <div class="form-group">
                                <label for="exampleFormControlFile2">Foto</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile2" name="foto2" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" type="submit" name="shto2">Shto</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Pjesa e modal per fshirjen e te dhenave -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>

                        <div class="modal-header">						
                            <h3 class="modal-title"></h3>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id_d" name="id" class="form-control">					
                            <p>A jeni t&euml; sigurt&euml; q&euml; d&euml;shironi ti fshini k&euml;to t&euml; dh&euml;na?</p>
                            <p class="text-danger"><small>Ky veprim nuk mund t&euml; ktheh&euml;t!.</small></p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" type="submit"  name="fshije" style="background: red;" >Fshije</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <div class="center">
      	<center><h2 style="color:#000">Krijo Administrator të ri</h2> </center>  
		<br>
       <center> <p>Ju lutem futni informacionin e saktë</p></center>
		<br>
			
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Emri Administratorit :</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 
			
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Fjalëkalimi :</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
			
		<!-- Krijimi i formës - Konfirmimi i  Fjalëkalimit (Password) -->	
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Konfirmo Fjalëkalimin :</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
			
			<br>
		
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="krijo" id="largohu" value="Krijo">
                <br><br>
		
                <input type="reset" class="btn btn-info"  value="Pastro">
            </div>
			<br> 
        </form>
    </div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Mbylle</button>
      </div>
    </div>

  </div>
</div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>    