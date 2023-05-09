<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


        <div>
            <?php 
             $a = $_REQUEST["t1"];
             $b = $_REQUEST["t2"];
             $c = $_REQUEST["t3"];

             function whileloop($a,$b,$c){
                while($a<$b)
            { echo $a."<br>";
                $a = $a+$c;
            }
                }
                function forloop($a,$b,$c){
                    for($i=$a;$i<$b;$i++){
                        if($i%$c==0)
                        {
                            echo $i."<br>";
                        }
                    }
                }
                whileloop($a,$b,$c);
                forloop($a,$b,$c);
            
            ?>
        </div>

    
</body>
</html>