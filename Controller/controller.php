<?php
    $data = array();
    flexible_function($data);
    function flexible_function(&$data){
        $function = 'view';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function = $action;
        }
        $function($data);
    }

    function view(&$data){
        $data['student_data'] = get_data();
        $data['page'] = "student/view";
    }
?>