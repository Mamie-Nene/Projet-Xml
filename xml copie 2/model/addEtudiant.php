<?php
session_start();
    if(isset($_POST['valider']))
    {      
        if((empty($_POST['nom'])) or (empty($_POST['prenom'])) or (empty($_POST['mail'])) or (empty($_POST['mdp'])) or (empty($_POST['classe'])))
        {
            echo 'veuillez remplir tous les champs ';
        }
        else
        {
            $connexion =mysqli_connect("127.0.0.1", "root", "passer123", "dgi_db") ;
            $nom= $_POST['nom'];
            $prenom= $_POST['prenom'];
            $mail= $_POST['mail'];
            $mdp= $_POST['mdp'];
            $userRole=3;
            $classe= $_POST['classe'];
            $requete ="INSERT INTO Users (nom, prenom, mail, mdp, userRole, classe) VALUES ('{$nom}', '{$prenom}', '{$mail}', '{$mdp}', '{$userRole}','{$classe}')";    
            if (mysqli_query($connexion, $requete)) 
            {
                header("Location: ../gererEtudiant.php");
                //mysqli_close($connexion); fermer la connexion
            } 
            else 
            {
                    echo "couldnt add user";
            }  
               //
        }
            
    }
    else{
             echo "didnt go in the if statement";
    }
              

?>
    