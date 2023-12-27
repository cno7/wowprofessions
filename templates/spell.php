<?php
    // Redirects to index if no spellID has been set
    if(!isset($_GET['spellID'])) {
        header("Locationd: index.php");
    }
    $spell_sql="SELECT * FROM skill WHERE spellID=".$_GET['spellID'];
    if($spell_query=mysqli_query($dbconnect, $spell_sql)) {
        $spell_rs=mysqli_fetch_assoc($spell_query);
        ?>
        <h1><?php echo $spell_rs['name']; ?></h1>
        <p><?php echo $spell_rs['description']; ?></p>



        <?php
    }



?>