<?php
    
    include_once "./config/dbconnect.php";
    
    $start =0;

    $row_per_page=4;


     $record = $conn->query('select * form product');

     $nr_of_rows = $record->num_rows;

     $pages = ceil($nr_of_rows / $rows_per_page);

     if(isset($_GET['page-nr']))
     {
        $page = $_GET['page-nr']-1;
        $start = $page * $rows_per_page;

     }

     $result = $conn ->query("select * from product limit 0,4");

?>
 

