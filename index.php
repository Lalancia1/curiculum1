<?php
require "connection.php";

if (isset($_POST['submit']))
{
    $name=$_POST['nom'];
    $mail=$_POST['mail'];
    $message=$_POST['text'];
    if (isset($name) && isset($mail) && isset($message) && !empty($name) && !empty($mail) && !empty($message)) {
        $requete = "INSERT INTO `expeditable`(id,nom,mail,text) VALUES(NULL,'$name','$mail','$message')";
        $response = mysqli_query($conn, $requete);
    }
    if($response)
    {
        echo "<h5>BONJOUR MR OU MME"." ".$_POST['nom'].",". "votre message a bien été enregistré!</h5><br>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


</head>
<body>
<div class="container">
    <header>


        <div  class="row justify-content-start">
            <div class=" col-sm-3 adress">MICHELE BONNET<br>27 rue de Landrecies
                <br>michelebonnet@gmail.com <br> Tel:06_11_16_55_19
            </div>
            <div class=" col-ms-auto" id="cube">
                <div   class="col-sm-auto" id="front">

                    <p  class="cubique">
                        reconversion en
                        <br>informatique:
                        <br> developpeur web
                    </p>
                </div>
                <div  class="col-sm-auto" id="back">
                    <p class="cubique" >
                        faire des stages
                        <br>en entreprise

                    </p>
                </div>


                <div class="col-sm-auto" id="left">
                    <p class="cubique">
                        apprendre à
                        <br>programmer des
                        <br>logiciels
                    </p>
                </div>

                <div  class="col-sm-auto" id="right" >
                    <p  class="cubique">
                        apprendre de nouvelles<br> technologies
                    </p>
                </div>
                <div  class="col-sm-auto" id="lef">
                    <p>
                        design illustrators,
                        <br> word-press
                    </p>
                </div>
                <div  class="col-sm-auto" id="up">
                    <p>
                        Mes objectifs
                    </p>
                </div>
                <div  class="col-sm-auto" id="bottom">
                    <p>
                        wordPress
                        <br>JAVA
                        <br>PYTHON
                        <br>BAC+4
                    </p>
                </div>


            </div>

            <!--*******************************************************************************************************************-->
        </div><br><br>

        <div class="row " id="titre1" >

            <div class="col-sm-12  h2" style="text-align: center;">parcours professionnel</div>

        </div>

    </header><br><br>
    <div class="row">

        <div  class="col-sm-2 irem1"  >2019-2020  </div>
        <div  class="col-sm-2 irem2" >   </div>
        <div class=" col-sm-8  text" ><h5>FORMATION DEVELOPPEUR  (HTML, JAVASCRIPT ,PHP)<br>--Stage en immersion chez efficience (Maubeuge)</h5>
        </div>

    </div><br><br>

    <div class="row">

        <div  class=" col-sm-2  irem3">2016-2018</div>
        <div  class="col-sm-2 irem4">   </div>
        <div class=" col-sm-8  h5 text" >OUVRIERE DANS LE BÂTIMENT</div>

    </div>

    <div class=" row" >

        <div class=" col-sm-4" ></div>
        <div class=" col-sm-8 text" >-Réfection  des monuments historiques</div>
    </div><br><br>
    <div class="row" >

        <div  class=" col-sm-2  irem5 ">2012-2015</div>
        <div  class="col-sm-2  irem6">   </div>
        <div class=" col-sm-8 text " ><h5>AUXILIAIRE  DE GERIATRIE </h5></div><br>

    </div>
    <div class=" row" >
        <div class=" col-sm-4" ></div>

        <div class=" col-sm-8  text" >  -garde personne agée malade alzheimer</div>
    </div><br><br>

    <div class="row" >

        <div  class=" col-sm-2  irem7">2003-2010</div>
        <div  class="col-sm-2  irem8">   </div>

        <div class=" col-sm-8 text " ><h5>AUXILIAIRE DE GERIATRIE (paris 16e) </h5></div><br>

    </div>

    <div class=" row" >
        <div class=" col-sm-4" ></div>
        <div class=" col-sm-8 text" >-Garde de personne âgée  et handicapée</div>
    </div><br><br>
    <div class="row" >

        <div  class=" col-sm-2 irem9">1999-2003</div>
        <div  class="col-sm-2  irem10">   </div>
        <div class=" col-sm-8 text" ><h5>AUXILIAIRE  DE GERIATRIE </h5></div><br>

    </div>
    <div class=" row">
        <div class=" col-sm-4" ></div>
        <div class=" col-sm-8 text" >-garde personne agée malade alzheimer</div>
    </div><br>

    <div class="row">

        <div  class=" col-sm-2 irem11 ">1993-1999</div>
        <div  class="col-sm-2  irem12">   </div>
        <div class=" col-sm-8  text" ><h5>GERANTE ET PRORIETAIRE DE PME </h5></div>

    </div><br><br>
    <div class="row "  id="titre2">
        <div  class=" col-sm-4"></div>
        <div class=" col-sm-8  h2" >FORMATIONS </div>
    </div><br><br>
    <div class=" row" >
        <div  class=" col-sm-3">
            <!--************************************************formulaire**********************************************************-->
            <form   class="formulaire"  action="index.php"  enctype="multipart/form-data"   method="post" >
                <h6 >VOTRE NOM:</h6>
                <input class="form-control  input-xs"  type="text" name="nom"  placeholder="nom" value="">
                <h6 >VOTRE E-MAIL</h6>
                <input class="form-control  input-xs"  type="email" name="mail"  placeholder="mail@serveur.com" value="">

                <h6>PROPOSITIONS:</h6>
                <textarea class="form-control input-xs"  type="text"   name="text" >DESCRIPTION</textarea>

                <h6>VALIDEZ:</h6>
                <input class="form-control  input-xs"  type="submit"  name="submit" >

            </form>
        </div>
        <div  class=" col-sm-1"></div>
        <div  class=" col-sm-8  text  h5">BAC SCIENTIFIQUE (physique-chimie)</div>
    </div>

    <div class=" row" >
        <div class=" col-sm-4" ></div>
        <div  class=" col-sm-8 text">1ere année universitaire en physique chimie</div>
    </div><br><br>
    <div class="row "  id="titre3">
        <div  class=" col-sm-4"></div>
        <div class=" col-sm-8 " ><h5>INFORMATIONS COMPLEMENTAIRE </h5></div>

    </div><br><br>
    <div class="row" >
        <div  class=" col-sm-4"></div>
        <div class=" col-sm-8 text " ><h5>LOISIRS :coiffure ,couture</h5></div>

    </div>

</div>
</body>


