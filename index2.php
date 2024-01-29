<?php include "script.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    a.active{
        background-color: #0d81cd;
        color:#fff;
        border :thin solid #0d8icd;
    }

</style>
<?php
    if(isset($_GET['page-nr'])){
        $id = $_GET['page-nr'];
    }else{
        $id = 1;
    }

?>


<body id ="<php echo $id?>">
    <div class="content">
        <?php
        
            while($row = $result->fetch_assoc()){
                ?>
                <p>
                    <?php echo $row['id'] ?>-<?php echo $row['product_name']?>
                </p>
            <?php
            }
        ?>

    </div>

    <div class="page-info">

        <?php
            if(isset($_GET['page-nr'])){
                $page = 1;
            }

            ?>
        showing <?php echo $pages ?> of <?php echo $pages ?>pages
    </div>

    <div class="pagination">
        <a href="?page-nr=1">first</a>

        <?php
            if(isset($_GET['page-nr'])&&$_GET['pages-nr']>1){
                ?>
                <a href="?page-nr=<?php echo $_GET['oage-nr'] - 1 ?>">Previous</a>
            <?php
            }
            else{
                ?>
                <a>previous</a>
                <?php
            }
        ?>
        <a href="">previous</a>
    </div>


    <div class="page-numbers">
        <?php
            for($counter = 1; $counter <= $pages; $counter ++){

                ?>
                <a href="?page-nr=<?php echo $counter ?>"><?php echo $counter?></a>
                <?php
            }
        
        ?>
        </div>

        <?php 
        ?>
        <a href="1"></a>
        <a href="2"></a>
        <a href="3"></a>
        <a href="4"></a>
        <a href="5"></a>

   

            <?php

                if(!isset($_GET['page-nr'])){
                    ?>
                    <a href="?page-nr=2">Next</a>
                    <?php
                }else{
                    if($_GET['page-nr']>=$pages){
                        ?>
                        <a>Next</a>
                    <?php
                    }
                    else{
                        ?>
                        <a href="?page-nr=<?php echo $_GET['page']?>">Next</a>
                        <?php
                    }
                }
            ?>
    <a href="">Next</a>
    <?php

    
    ?>

    <a href="?page-nr=<?php echo $pages ?>">Last</a>
</div>

<script>

   let links =  document.querySelectorAll('.page-numebrs > a');
   let bodyId = parserInt(document.body.id);
   links[bodyId].classList.add("active");

</script>
</body>
</html>
