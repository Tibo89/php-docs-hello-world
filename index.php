<?php 
    echo "Hello World v2!<BR/>";
    echo "Coucou tout le monde !<BR/>";
    print("Hello<BR/>");




    $dsn = "pgsql:host=svxazpgsql01.postgres.database.azure.com;port=5432;sslmode=require;dbname=test_cms;user=poc_cms;password=Soleil@49100!";
   
    try{
       $conn = new PDO($dsn);
       
       if($conn){
        echo "Connecté à $dbname avec succès!<BR/>";
        $sql = 'SELECT * FROM test_schema.test_table';
        foreach ($conn->query($sql) as $row) {
           print $row['Nom'];
           print $row['Prenom'] . "<BR/>";
        }
     
       }
       else{
         echo "Erreur à $dbname !<BR/>";
       }
    }catch (PDOException $e){
       echo $e->getMessage();
    }

    print("Ola<BR/>");
?>
