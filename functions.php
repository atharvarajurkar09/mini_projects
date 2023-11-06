<?php
// require 'Records.php';
 function connectToDb(){
    return new PDO(
        'mysql:host=127.0.0.1;dbname=user_info','root',''
    );
}
function insert($pdo,$table,$data){
    $sql="INSERT INTO $table SET " ;
    foreach($data as $field=>$value){
        $fieldSQL[]="$field='$value'";
    }

    $sql.=implode(',',$fieldSQL);
    $statement=$pdo->prepare($sql);
    $statement->execute();
}
?>
<style>
    .table1{
        background-color:#81a1af7f;
        width:50%;
    }
</style>
<center><table class="table1" border="2">

    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>City</th>
        <th>DOB</th>

    </tr>
    <?php

function selectAll(PDO $pdo,string $table,string $class){
    $statement=$pdo->prepare('select * from '.$table);
    $statement->execute();
    $result= $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $state){
        echo '<tr>';
        echo '<th>'.$state['name'].'</th>' ;
        echo '<th>'.$state['email'].'</th>';
        echo'<th>'.$state['gender'].' </th>';
        echo '<th>'.$state['city'].'</th>';
        echo '<th>'.$state['date'].'</th>';
        echo '</tr>';
        // echo '<br>';
    }   
}
?>