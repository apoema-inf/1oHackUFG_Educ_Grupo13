<?php
    // Tenta se conectar ao servidor MySQL
    $db = mysql_connect('localhost', 'root', '') or trigger_error(mysql_error());
    // Tenta se conectar a um banco de dados MySQL
    mysql_select_db('hackathon') or trigger_error(mysql_error());

?>