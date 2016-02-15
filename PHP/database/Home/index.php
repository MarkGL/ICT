<?php
    require_once "index.logic.php";
?>
<html>
	<head>
		<title>Verjaardagskalender</title>
        <link href="main.css" rel="stylesheet" type="text/css">
	</head>
	<body>
    <?php $allday = "0"; ?>
    <?php $allmonth = "0"; ?>
        
        <?php
              foreach ($persons as $all) {
        ?>
        
        <?php if ($allmonth !== $all['month1_name']){ $allday = "0"; ?>
		  <h1><?php echo $all['month1_name']; ?></h1>
        <?php } ?>   
        
        <?php if ($allday !== $all['day']){ ?>     
		  <h2><?php echo $all['day'];?></h2>
        <?php } ?>
            
        <p>
                <a href="edit.php?id=<?php echo $all['id']; ?>">     
            <br>
                <?php 
                    echo $all['person'];
                ?> (
                <?php
                    echo $all['year'];
                 ?> 
                 )
            
                </a>  
                <a href="delete.php?id=<?php echo $all['id']; ?>">x</a>
            </br>
        </p>

        <?php $allmonth = $all['month1_name']; ?>

        <?php $allday = $all['day']; ?>

        <?php } ?>

<p> <a href="create.php">+ Toevoegen</a> </p>

	</body>
</html>