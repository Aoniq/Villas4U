<?php
session_start();
    // Vernietig de sessie
    session_destroy();

    // Doorverwijzen naar de inlogpagina of een andere gewenste pagina
    header("Location: index.php");
    exit;
?>