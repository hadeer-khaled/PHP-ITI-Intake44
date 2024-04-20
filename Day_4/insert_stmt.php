<?php

// include_once './base.php';
// require_once "./connect_pdo.php";
// require_once "./utils.php";


// try{
//     // $std_name = "Rahma";
//     // $std_email="Rahma@gmail.com";

//     $pdo = connect_to_db_pdo();

//     create_users_table($pdo);


//     $insert_query = "INSERT INTO users (`name`, `email`, `grade`) 
//         VALUES (:stdname, :stdemail, :stdgrade)";
//     $stmt  = $pdo->prepare($insert_query);
    // var_dump($stmt);

    ## bind values
    // $stmt ->bindParam(':stdname',$std_name );
    // $stmt->bindParam(':stdemail', $std_email );
    // $stmt->bindValue(':stdgrade',  44);
    // $res = $stmt->execute();
    // var_dump($res);

    // if($res){
    //     echo "<h1> Inserted {$pdo->lastInsertId()}</h1>";
    //     display_data();
    // }


// }catch (PDOException $e){
//     echo $e->getMessage();
// }











