<?php
    /**
     * Session create
     */
    session_start();

    $_SESSION["favcolor"] = "orange";

    echo "Session Variable is set.";

    /**
     * Session view
     */

    if(isset($_SESSION["favcolor"])){
        echo "Favorite Color :" . $_SESSION["favcolor"];
    }

    /**
     * Session destroy
     */

    session_start();

    session_unset();
    
    session_destroy();
    
    echo "Session is destroy.";

?>