<?php     
    session_start();
    session_destroy();
      
    header("Location: http://localhost/PI2/site/index.php")
;?>