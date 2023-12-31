<?php
    // Redirects to homepage if professionID is not set
    if(!isset($_GET['professionID'])) {
        header("Location:index.php");
    }

    // Selects all profession recipes belonging to the professionID
    $pidget=$_GET['professionID'];
    $profession_sql="SELECT name, spellID, professionID, min_skill FROM skill WHERE professionID=$pidget ORDER BY min_skill";
    if($profession_query=mysqli_query($dbconnect,$profession_sql)) {
        $profession_rs=mysqli_fetch_assoc($profession_query);
    }
    if(mysqli_num_rows($profession_query)== 0) {
        echo "<p class='whiteText'>Sorry, no skills available. Chose another category.</p>";
    } else {
        ?><span class="skillTextOne">Skill:</span><span class="skillTextTwo">Skillpoints needed:</span>
        
        <?php 
        do {
            ?>
            <a href="index.php?page=profession&professionID=<?php echo $profession_rs['professionID']; ?>&list=spell&spellID=<?php echo $profession_rs['spellID']; ?>"><p class="skillListLink"><?php echo $profession_rs['name']; ?> - <?php echo $profession_rs['min_skill']; ?></p></a>

            <?php 
        } while($profession_rs=mysqli_fetch_assoc($profession_query));

        ?>


        <?php
    }


?>