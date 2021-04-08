<?php
    include_once("connectiondatabase.php");

    $result = eendata();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - <?php echo $result["name"];?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo $result["name"];?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $result["avatar"];?>">
            <div class="stats" style="background-color: <?php echo $result["color"];?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $result["health"];?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $result["attack"];?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $result["defense"];?></li>
                </ul>
                <ul class="gear">
                    <?php
                        if($result["weapon"] != null){
                    ?>
                    <li><b>Weapon</b>: <?php echo $result["weapon"];?></li>
                    <?php
                        }
                        if($result["armor"] != null){
                    ?>
                    <li><b>Armor</b>: <?php echo $result["armor"];?></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?php echo $result["bio"];?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Tycho Hartingsveld 2021</footer>
</body>
</html>