<?php
// Përfshini fajllin e konfigurimit.
require_once "konfigurimi.php";
 
// Definimi i variablave dhe inicializimi me vlera të zbrazeta.
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Procesimi i dhënave të formes kur forma është paraqitur (submitted).
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
	// Validoni emrin e përdoruesit (username).
    if(empty(trim($_POST["username"]))){
        $username_err = "Ju lutem shkruani emrin e p&euml;rdoruesit.";
    } else{
		// Përgatitni një deklaratë (select) të zgjedhur.
        $sql = "SELECT id FROM administratori WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

		  // Bind (Vendos) variablat në deklaratën e përgatitur si parametra
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Vendosni parametrat
            $param_username = trim($_POST["username"]);
            
            // Përpjekje për të ekzekutuar deklaratën e përgatitur
            if(mysqli_stmt_execute($stmt)){
				
                // Rezultati i ruajtur 
                mysqli_stmt_store_result($stmt);
                
				// Krahasohet se a egziston përdoruesi në databazë.
				// Nëse egziston paraqitet mesazhi.
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Ky emer p&euml;rdoruesi egziston tashme !";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Dicka shkoi keq. Ju lutem provoni p&euml;rs&euml;ri me von&euml;!";
            }
        }
         
        // Mbyll deklaratën.
        mysqli_stmt_close($stmt);
    }
    
    // Validoni fjalëkalimin.
    if(empty(trim($_POST["password"]))){
        $password_err = "Sh&euml;noni nj&euml; fjal&euml;kalim.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Fjal&euml;kalimi duhet t&euml; k&euml;t&euml; min. 6 karaktere !";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Valido konfirmimin e fjalëkalimit.
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Ju lutem konfirmoni fjal&euml;kalimin !";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Fjal&euml;kalimi nuk p&euml;rputhet.";
        }
    }
    
	// Kontrolloni gabimet e përdoruesit përpara se të vendosen në databazë.
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
		// Përgadite një deklaratë për insertim.
        $sql = "INSERT INTO administratori (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){

			// Bind (vendos/lidh) variablat në deklaratën e përgatitur si parametra.
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Vendosni parametrat.
            $param_username = $username;
			
			// Krijoni një hash fjalëkalimi.
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            
            // Përpjekje për të ekzekutuar deklaratën e përgatitur.		
            if(mysqli_stmt_execute($stmt)){
				
                // Redirektohuni në faqen e kyqjes.
                header("location: kycu.php");
            } else{
                echo "Dicka shkoi keq. Ju lutem provoni perseri me vone !!!";
            }
        }
         
        // Mbyll deklaratën.
        mysqli_stmt_close($stmt);
    }
    
    // Mbyll lidhjen.
    mysqli_close($link);
}
?>
 