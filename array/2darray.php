<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<style>
			table{
				    width: 80vw;
    height: 70vh;
    text-align: center;
			}
    tbody {
        width: 80vw;
        height: 70vh;
    }
</style>

		</style>
	</head>
	<body>
		
			<?php
			if($_SERVER['REQUEST_METHOD']==='POST')
			{
				$row = $_REQUEST['row'];
				$col = $_REQUEST['col'];
				     echo "<h2>Generated Table:</h2>";
                     echo "<table border='1' >";
				for($i = $row;$i<=10;$i++){
					print("<tr>");
					for($j=1;$j<=$col;$j++)
					{	
					print("<td>".$i*$j."</td>");
					}
					print("</tr>");
				}
			}
			?>
	</body>
</html>
