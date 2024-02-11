<?php

    include("db_connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <script>const whTooltips = {colorLinks: true, iconizeLinks: true, renameLinks: true, iconSize: 'large'};</script>
    <script src="https://wow.zamimg.com/js/tooltips.js"></script>
    
    <title>WoW Profession Codex</title>
</head>
<body>
    <div class="topContent">
        <?php include("templates/header.php"); ?>
        <!-- Menu part. Filter by level(?). Select version of the game.  -->
    </div>
    <div class="mainConent">
        <!-- This part of the page will basically look like the profession book in-game -->
        <div class="mainContentLeft" id="mainIdContentLeft">
            <!-- List of the different professions -->
            <?php include 'templates/professions.php'?>
        </div>
        <div class="mainContentMiddle" id="mainIdContentMiddle">

            <?php 
                if(!isset($_GET['page'])) { 
                    include('templates/startMainContent.php'); 
                }   else {
                    $page = $_GET['page'];
                    include("templates/$page.php");
                }
            ?>
        </div>
        <div class="mainContentRight" id="mainIdContentRight">
        <?php 
                if(!isset($_GET['list'])) { 
                    include('templates/startMainRight.php'); 
                }   elseif (isset($_GET['list']) && !isset( $_GET['spellID'])) {
                    include("templates/noRecipeSelected.php");
                } else {
                    $list = $_GET['list'];
                    include("templates/$list.php");
                }
            ?>


            <!-- <h3>Rough Sharpening Stone</h3>
            <img src="images/blacksmithing/INV_Stone_SharpeningStone_01.png" alt="">
            <p>Rough Sharpening Stone:</p>
            <p>Use: Increase sharp weapon damage by 2 for 30 minutes.</p>
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Reagents</th>
                    </tr>
                    <tr>
                        <th>Item:</th>
                        <th>Amount:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rough Stone</td>
                        <td>1</td>
                    </tr>
                </tbody>

            </table> -->
            <!-- Show page like in-game for what's selected in the Main list. Show what, how many, items needed etc ... -->
        </div>
    </div>
    <div class="bottomContent">
        <!-- Not sure what to have here :P -->
        <?php include("footer.php"); ?>
    </div>
</body>
<script src="baseScript.js"></script>
</html>