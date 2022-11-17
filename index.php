<?php 
    echo "Hello World v2!<BR/>";
    echo "Coucou tout le monde !<BR/>";
    $db_connection = pg_connect("host=svxazpgsql01.postgres.database.azure.com dbname=test_cms@svxazpgsql01 sslmode=require user=poc_cms password=Soleil@49100!");
    print($db_connection);
    //$result = pg_query($db_connection, "SELECT lastname FROM employees");
    print("Hello<BR/>");

    if (!$db_connection) {
      echo "An error occurred.\n";
      exit;
    }
    
    $result = pg_query($db_connection, "SELECT * FROM test_schema.test_table;");
    if (!$result) {
      echo "<br />An error occurred.<br />";
      exit;
    }

    if ($result->num_rows == 0) {
      echo "<br />0 results<br />";
    }
    
    while ($row = pg_fetch_row($result)) {
      echo "NOM: $row[1]  Prenom : $row[2]";
      echo "<br />";
    }

    $db_connection->close();




    /*$dsn = "pgsql:host=svxazpgsql01.postgres.database.azure.com;port=5432;sslmode=require;dbname=test_cms;user=poc_cms;password=Soleil@49100!";
   
    try{
       $conn = new PDO($dsn);
       
       if($conn){
        echo "Connecté à $dbname avec succès!";
       }
    }catch (PDOException $e){
       echo $e->getMessage();
    }

    $dsn = "pgsql:host=svxazpgsql01.postgres.database.azure.com;port=5432;dbname=test_cms;user=poc_cms;password=Soleil@49100!";

    print("<BR/>Saut de ligne<BR/>");

    try{
       $conn = new PDO($dsn);
       
       if($conn){
        echo "Connecté à $dbname avec succès!";
       }
    }catch (PDOException $e){
       echo $e->getMessage();
    }*/

?>
