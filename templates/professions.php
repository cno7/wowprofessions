
<?php
    $pro_sql="SELECT * FROM profession";
    $pro_query=mysqli_query($dbconnect, $pro_sql);
    $pro_row=mysqli_fetch_assoc($pro_query);
?>
<?php
    do { ?>
            <a href="list.php?professionID=<?php echo $pro_row['professionID']; ?>"><img src="images/<?php echo $pro_row['name']; ?>/<?php echo $pro_row['name']; ?>.png" alt="<?php echo $pro_row['name']; ?>"></a>

        <?php    echo nl2br("\n") ;
    } while ($pro_row=mysqli_fetch_assoc($pro_query));

?>



<!-- <ul>
    <li><a onclick="blacksmithing()"><img src="images/blacksmithing/Trade_BlackSmithing.png"alt="Blacksmithing"></a></li>
    <li><img src="images/engineering/Trade_Engineering.png" alt="Engineering"></li>
    <li><img src="images/mining/Trade_Mining.png" alt="Mining"></li>
    <li>Tailoring</li>
    <li>Enchanting</li>
    <li>Alchemy</li>
    <li>Herbalism</li>
    <li>First Aid</li>
    <li>Fishing</li>
</ul> -->