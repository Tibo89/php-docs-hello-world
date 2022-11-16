<?php 
    echo "Hello World!<BR/>";
    echo "Coucou<BR/>";
    $db_connection = pg_connect("host=svxazpgsql01.postgres.database.azure.com dbname=test_cms@svxazpgsql01 sslmode=require user=poc_cms password=AP\kKb>t(HiTZoc.?Gdb");
    print($db_connection);
    //$result = pg_query($db_connection, "SELECT lastname FROM employees");
    print("Hello<BR/>");
?>
