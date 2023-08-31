<?php

    session_start();

    session_unset();//Limpar a sessâo
    session_destroy();//Destrói a sessâo

   
    header('Location: index.html');
?>