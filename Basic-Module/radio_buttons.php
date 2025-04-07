<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_buttons.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br><br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>



<?php
 
    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }

        if($credit_card == "Visa"){
            echo"You have selected Visa";
        }
        
        elseif($credit_card == "Mastercard"){
            echo"You have selected Master";
        }
        
        elseif($credit_card == "American Express"){
            echo"You have selected AMEX";
        }

        else{
            echo "Please select a credit card";
        }

        // --------------- using switch case ----------------

        // switch($credit_card){
        //     case "Visa":
        //         echo"You selected Visa";
        //         break;
        //     case "Mastercard":
        //         echo"You selected Mastercard";
        //         break;
        //     case "American Express":
        //         echo"You selected American Express";
        //         break;
        //     default:
        //         echo"Please make a selection";
        // }

    }


?>