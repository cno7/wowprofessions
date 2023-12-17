
<?php
    $pro_sql="SELECT * FROM profession";
    $pro_query=mysqli_query($dbconnect, $pro_sql);
    $pro_row=mysqli_fetch_assoc($pro_query);
?>
<?php
    do { ?>
            <a href="index.php?page=profession&professionID=<?php echo $pro_row['professionID']; ?>"><img src="images/<?php echo $pro_row['name']; ?>/<?php echo $pro_row['name']; ?>.png" alt="<?php echo $pro_row['name']; ?>" title="<?php echo $pro_row['name']; ?>"></a>

        <?php    echo nl2br("\n") ;
    } while ($pro_row=mysqli_fetch_assoc($pro_query));

?>