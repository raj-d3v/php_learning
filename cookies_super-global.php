<?php

    // cookie = Information about a user stored in a user's web-browser
    //          targeted advertisements, browsing preferences, and
    //          other non-sensitive data
    //          They are stored as associative array
    //          To delete a cookie set time to '-0'  i.e time() - 0 

    //          'key'    'value'   'expiration time in seconds'
    //                                                    ------------'file path'
    //            ↓         ↓                 ↓           ↓
    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");


    if(isset($_COOKIE["fav_food"])){
        echo"BUY SOME {$_COOKIE["fav_food"]} !!!";
    }
    else{
        echo"I don't know your favorite food";
    }

?>