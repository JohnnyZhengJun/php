<?php
 setcookie('fav_food', 'pizza', time()+(86400*2), '/');
 setcookie('fav_drink', 'milk', time()+(86400*2), '/');

 foreach($_COOKIE as $key => $value) {
    print("$key => $value");
    //same as py print("").
}
?>