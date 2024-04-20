<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

    include '/base.php';
    
    $errors = [];
    $old_data = [];


    if(empty($_POST["firstname"])){
        $errors["firstname"] = "firstname is required";
    }
    if(empty($_POST["lastname"])){
        $errors["lastname"] = "lastname is required";
    }
    if(empty($_POST["username"])){
        $errors["username"] = "username is required";
    }
    if(empty($_POST["department"])){
        $errors["department"] = "department is required";
    }
    if(empty($_POST["address"])){
        $errors["address"] = "address is required";
    }
    if(empty($_POST["country"])){
        $errors["country"] = "country is required";
    }
    if(empty($_POST["gender"])){
        $errors["gender"] = "gender is required";
    }

    $old_data["firstname"] = $_POST["firstname"];
    $old_data["lastname"] = $_POST["lastname"];
    $old_data["username"] = $_POST["username"];
    $old_data["department"] = $_POST["department"];
    $old_data["address"] = $_POST["address"];
    $old_data["country"] = $_POST["country"];
    $old_data["gender"] = $_POST["gender"];
    $old_data["mr_or_ miss"] = $gender == "male" ? "Mr." : "Miss.";
    $old_data["skills "] = $_POST["skills"] ;

    if(count($errors)){
        $errors = json_encode($errors);
        $old_data = json_encode($old_data);
        if (! empty($old_data)){
        $url= "errors={$errors}&old_data={$old_data}";
        }else{
            $url= "errors={$errors}";
        }
        header("Location:registeration.php?{$url}");
    }else{
        echo "Thanks";
        var_dump($_POST);
        $data = json_encode($_POST);
        $res=save_data($data.PHP_EOL, "customers.txt");
        display_data_in_table("customers.txt");
        var_dump($res);
    }

    function save_data($data, $filename){
        $fileobj= fopen($filename, "a");
        $res=fwrite($fileobj, $data);
        fclose($fileobj);
        return $res;
    }
    function printSkills($array_element){
          echo "{$array_element} ,";
    }


    function display_data_in_table($filename){
        echo "<table class='table'> 
            <tr> 
                <th>First Name</th> 
                <th>Last Name</th>
                <th>User Name</th>
                <th>Department</th> 
                <th>Address</th>
                <th>Country</th>
                <th>Gender</th> 
                <th>Skills</th>
            </tr>";
        $file_data = file($filename);
        foreach ($file_data as $line){
            $info = json_decode($line);
            echo "<tr>";
            foreach ($info as $item){
                if (is_array($item)) {
                    array_walk($item, "printSkills");
                    echo "<td> " ;
                    array_walk($item, "printSkills") ;
                    echo "</td>";

                }else{

                    echo "<td> {$item} </td>";
                }
            }
            echo "</tr>";
        }
    
        echo "</table>";
    }
    

?>

</body>
</html>

