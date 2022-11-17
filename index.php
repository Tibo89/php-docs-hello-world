<?php 
    echo "Hello World v2!<BR/>";
    echo "Coucou tout le monde !<BR/>";
    $db_connection = pg_connect("host=svxazpgsql01.postgres.database.azure.com dbname=test_cms@svxazpgsql01 sslmode=require user=poc_cms password=AP\kKb>t(HiTZoc.?Gdb");
    print($db_connection);
    //$result = pg_query($db_connection, "SELECT lastname FROM employees");
    print("Hello<BR/>");

    $dsn = "pgsql:host=svxazpgsql01.postgres.database.azure.com;port=5432;sslmode=require;dbname=test_cms;user=poc_cms;password=AP\kKb>t(HiTZoc.?Gdb";
   
    try{
       $conn = new PDO($dsn);
       
       if($conn){
        echo "Connecté à $dbname avec succès!";
       }
    }catch (PDOException $e){
       echo $e->getMessage();
    }

    $dsn = "pgsql:host=svxazpgsql01.postgres.database.azure.com;port=5432;dbname=test_cms;user=poc_cms;password=AP\kKb>t(HiTZoc.?Gdb";

    print("<BR/>Saut de ligne<BR/>");
    
    try{
       $conn = new PDO($dsn);
       
       if($conn){
        echo "Connecté à $dbname avec succès!";
       }
    }catch (PDOException $e){
       echo $e->getMessage();
    }
?>
