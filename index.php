<!DOCTYPE html>
<html>

<head>

</head>

<body style = "background-color: #c2d4e7">
	<div style="    
    text-align: center;    
		font-size: 4500%;
		text-align: center;
		letter-spacing: -.2ch;
		">
			76
	</div>
	<php
    $command = escapeshellcmd('/usr/custom/worldometerapi.py');
    $output = shell_exec($command);
    echo $output;
	>

    <?php
      $str = "This is GeeksforGeeks portal";
      echo "$str.";
    ?>
</body>

</html>	