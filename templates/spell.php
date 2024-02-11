<?php
    // Redirects to index if no spellID has been set
    if(!isset($_GET['spellID'])) {
        header("Location: index.php");
    }
    $spell_sql="SELECT * FROM skill WHERE spellID=".$_GET['spellID'];
    if($spell_query=mysqli_query($dbconnect, $spell_sql)) {
        $spell_rs=mysqli_fetch_assoc($spell_query);
        ?>
        <h1 class=""><a href="https://www.wowhead.com/classic/spell=<?php echo $spell_rs['spellID']; ?>"><?php echo $spell_rs['name']; ?></a></h1>
        <p class="whiteText"><?php echo $spell_rs['description']; ?></p>
        <p class="whiteText">Training cost: <?php echo $spell_rs['cost_g']; ?><img src="images/UI-GoldIcon.png" alt=""> <?php echo $spell_rs['cost_s']; ?><img src="images/UI-SilverIcon.png" alt=""> <?php echo $spell_rs['cost_c']; ?><img src="images/UI-CopperIcon.png" alt=""> </p>



        <?php
    }



?>