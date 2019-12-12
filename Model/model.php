<?php
    function get_data(){
        $query = "SELECT * FROM info_student";
        include "connection.php";
        $rows = [];
        $result = mysqli_query($connection,$query);
        if($result && mysqli_num_rows($result)>0){
            foreach($result as $record){
                $rows[] = $record;
            }
        }
        return $rows;
    }
?>