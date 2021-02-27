

<!DOCTYPE html>
<html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> 
            <link rel="stylesheet" href="custom.css">
            <title>Document</title>
        </head>
    </body>
        <div class="container" >
            <h1> Formulaire d'inscription </h1>
            </div>      


        <?php

            if  (!isset($_POST["nom"]) && !isset($_POST["prenom"])&& 
                !isset($_POST["moisnaissance"]) && !isset($_POST["annéenaissance"]) && 
                !isset($_POST["paysnaissance"]) && !isset($_POST["nationalité"]) && 
                !isset($_POST["adresse"]) && !isset($_POST["email"]) && 
                !isset($_POST["numéro"]) && !isset($_POST["numpole"]) && 
                !isset($_POST["poleemp"]) && !isset($_POST["nbrbadge"]) && 
                !isset($_POST["codeAca"]) && !isset($_POST["Diplome"]) && 
                !isset($_POST["hero"]) && !isset($_POST["hack"]) && 
                !isset($_POST["exp"]))
            {

                echo '<form action="formulaire.php" method="POST">
                        <div class="row m-0">
                            <div class="premier col-sm-4">
                                Entrer votre nom : <input NAME="nom" SIZE=25><br><br>
                                Entrer votre prénom : <input NAME="prenom" SIZE=25><br><br>
                                Entrer votre mois de naissance : <SELECT NAME="moisnaissance">
                                    <OPTION>Janvier 
                                    <OPTION>Février
                                    <OPTION>Mars
                                    <OPTION>Avril
                                    <OPTION>Mai
                                    <OPTION>Juin
                                    <OPTION>Juillet
                                    <OPTION>Août
                                    <OPTION>Septembre
                                    <OPTION>Octobre
                                    <OPTION>Novembre
                                    <OPTION>Décembre
                                    </SELECT><br><br>
                                Entrer votre année de naissance : <SELECT NAME="annéenaissance">
                                    <OPTION>1995
                                    <OPTION>1996
                                    <OPTION>1997
                                    <OPTION>1998
                                    <OPTION>1999
                                    <OPTION>2000
                                    <OPTION>2001
                                    <OPTION>2002
                                    <OPTION>2003
                                    <OPTION>2004
                                    <OPTION>2005
                                    <OPTION>2006
                                    </SELECT><br><br>
                                Votre pays de naissance : <SELECT NAME="paysnaissance">
                                    <OPTION>France
                                    <OPTION>Allemagne
                                    <OPTION>Italie
                                    <OPTION>Espagne
                                    <OPTION>Angleterre
                                    <OPTION>Tunisie
                                    <OPTION>Afrique
                                    <OPTION>Amérique
                                    <OPTION>Arabie saoudite
                                    <OPTION>Belgique
                                    <OPTION>Grece
                                    </SELECT><br><br>
                            </div>
                            <div class= "deuxieme col-sm-4">
                                Entrer votre Nationalité : <input NAME="nationalité" SIZE=25><br><br>
                                Entrer votre addresse : <input NAME="adresse" SIZE=25><br><br>
                                Entrer votre Email : <input NAME="email" SIZE=25><br><br>
                                Entrer votre numéro de Telephone : <input NAME="numéro" SIZE=25><br><br>
                            
                            </div>
                            <div class = "troisieme col-sm-4">
                                Saisir le numéro Pole emploi :  <input NAME="numpole" SIZE=25><br><br>
                                Saisir le nombre de badge :  <input NAME="nbrbadge" SIZE=25><br><br>
                                Saisir les liens codeAcademy :  <input NAME="codeAca" SIZE=25><br><br>
                                Entrer votre diplome : <SELECT NAME="Diplome">
                                    <OPTION>sans
                                    <OPTION>BAC
                                    <OPTION>Bac+2
                                    <OPTION>Bac+3
                                    <OPTION>Master 1
                                    <OPTION>Master 2
                                    <OPTION>Supérieur
                                    </SELECT><br><br>
                            </div> 
                    
                            <div class= "quatrieme">
                                Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? : <br>  <textarea  class="col-sm-10" NAME="hero" SIZE=200></textarea><br><br>
                                Racontez-nous un de vos "hacks" (pas forcément technique ou informatique): <br> <textarea class="col-sm-10" NAME="hack" SIZE=200></textarea><br><br><br>
                                Avez vous déjà eu une expérience avec la programmation et/ou informatique avant de remplir ce formulaire ? <SELECT NAME="exp">
                                    <OPTION>non jamais
                                    <OPTION>un petit peu 
                                    <OPTION>je suis débutant
                                    <OPTION>jai deja vu pas mal de chose 
                                    <OPTION>Je me débrouille
                                    <OPTION>Je suis un vrai Crack
                                    </SELECT><br><br>
                            </div> 
                        </div>  
                            <div class= "boutonenvoi">
                                <input type="submit" class="btn btn-danger" value="Envoyer le formulaire">  
                            </div>
                    </form>';
            }
                    else {

                        echo 'nom : '.$_POST["nom"].'<br>';
                        echo 'Prénom : '.$_POST["prenom"].'<br>';
                        echo 'Mois de naissance : ' .$_POST["moisnaissance"].'<br>';
                        echo 'Année de naissance : ' .$_POST["annéenaissance"].'<br>';
                        echo 'Pays de naissance : ' .$_POST["paysnaissance"].'<br>';
                        echo 'Nationalité : ' .$_POST["nationalité"].'<br>';
                        echo 'adresse : ' .$_POST["adresse"].'<br>';
                        echo 'email : ' .$_POST["email"].'<br>';
                        echo 'numéro de tel : ' .$_POST["numéro"].'<br>';
                        echo 'Numero pole Emploi : ' .$_POST["numpole"].'<br>';
                        echo 'Nombre de badge : ' .$_POST["nbrbadge"].'<br>';
                        echo 'Lien code Academy : ' .$_POST["codeAca"].'<br>';
                        echo 'Diplome obtenu : ' .$_POST["Diplome"].'<br>';
                        echo 'Si vous etiez un super hero vous seriez : ' .$_POST["hero"].'<br>';
                        echo 'Histoire de votre Hack : ' .$_POST["hack"].'<br>';
                        echo 'Votre expérience en programmation : ' .$_POST["exp"].'<br>';
            }
        
       
        ?>
            
    </body>
</html>