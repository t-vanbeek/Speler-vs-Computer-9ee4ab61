<!DOCTYPE html>
<?php session_start(); ?>
<html class="backgroundcolor">
<head>
    <link rel="stylesheet" href="style.css">
    <title>
        steen_papier_schaar
    </title>
</head>

<body class="color">
    <h1>
        Steen_Papier_Schaar!
    </h1>

    <?php
            $ComputerArray = array('steen', 'papier', 'schaar');
            $_SESSION['computer'] = array_rand($ComputerArray);
           if($_SESSION['computer'] == '0' && isset($_POST['input'])){
               $_SESSION['output'] = 'steen';
            }
           if($_SESSION['computer'] == '1' && isset($_POST['input'])){
            $_SESSION['output'] = 'papier';
            }
            if($_SESSION['computer'] == '2' && isset($_POST['input'])){
                $_SESSION['output'] = 'schaar';
            }
            

            if(isset($_POST['steen'])){
                $_SESSION['speler_1'] = 'steen';
            }
            if(isset($_POST['papier'])){
                $_SESSION['speler_1'] = 'papier';
            }
            if(isset($_POST['schaar'])){
                $_SESSION['speler_1'] = 'schaar';
            }
    ?>

    <div>
            <?php 

                if($_SESSION['speler_1'] == $_SESSION['output'] && isset($_POST['input'])){
                   
                    echo "Gelijk_Spel";
                }
                if($_SESSION['speler_1'] == 'steen' && $_SESSION['output'] == 'papier' && isset($_POST['input'] )){
                    
                    echo "Computer_Heeft_Gewonnen";
                }
                if($_SESSION['speler_1'] == 'papier' && $_SESSION['output'] == 'schaar' && isset($_POST['input'] )){
                   
                    echo "Computer_Heeft_Gewonnen";
                }
                if($_SESSION['speler_1'] == 'schaar' && $_SESSION['output'] == 'steen' && isset($_POST['input'] )){
                   
                    echo "Computer_Heeft_Gewonnen";
                }
                if($_SESSION['output'] == 'steen' && $_SESSION['speler_1'] == 'papier' && isset($_POST['input'] )){
                   
                    echo "Speler_1_Heeft_Gewonnen";
                }
                if($_SESSION['output'] == 'papier' && $_SESSION['speler_1'] == 'schaar' && isset($_POST['input'] )){
                   
                    echo "Speler_1_Heeft_Gewonnen";
                }
                if($_SESSION['output'] == 'schaar' && $_SESSION['speler_1'] == 'steen' && isset($_POST['input'] )){
                    echo "Speler_1_Heeft_Gewonnen";
                }
            ?>
    </div>

    <div>
        <?php if(isset($_POST['input'])) {
            echo "Speler :". $_SESSION['speler_1'];
        }else{
            echo "Speler :";
        }
        ?>
        <br>
        <br>
        <?php if(isset($_POST['input'])) {
        echo "Computer :". $_SESSION['output'];
        }else{
            echo "Computer :";
        }
        ?>
    </div>




<form  method="POST">
    <div>
        <h3>Speler_1</h3>
            <input name="steen" type="submit" value="steen">
            <input name="papier" type="submit" value="papier">
            <input name="schaar" type="submit" value="schaar">
    </div>
    <div>
            <h3>Winnaar_Bekijken</h3>
            <input name="input" type="submit" value="Winnaar_Bekijken">
            <h3>Reset_Je_Spel_Hier</h3>
            <input type="submit" name="deletesession" value="Reset">
    </div>
</form>
</body>

</html>