<?php
    // Redirects to homepage if professionID is not set
    if(!isset($_GET['professionID'])) {
        header("Location:index.php");
    }

    // Selects all profession recipes belonging to the professionID
    $profession_sql="SELECT name, spellID, professionID, min_skill FROM skill WHERE professionID=".$_GET['professionID'];
    if($profession_query=mysqli_query($dbconnect,$profession_sql)) {
        $profession_rs=mysqli_fetch_assoc($profession_query);
    }
    if(mysqli_num_rows($profession_query)== 0) {
        echo "Sorry, no skills available. Chose another category.";
    } else {
        ?>
        
        <?php 
        do {
            ?>
            <a href="index.php?page=profession&professionID=<?php echo $profession_rs['professionID']; ?>&list=spell&spellID=<?php echo $profession_rs['spellID']; ?>"><p><?php echo $profession_rs['name']; ?> - <?php echo $profession_rs['min_skill']; ?></p></a>

            <?php 
        } while($profession_rs=mysqli_fetch_assoc($profession_query));

        ?>


        <?php
    }


?>