<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        if(isset($_POST['input']))
        {
            $input = $_REQUEST['input'];
            // convert the input string into an array 
            $array = explode(',',$input);  /*explode function converts an string into an array 
                                            and sepraded by , */
            // Now eliminating the white spaces from an array                                            
            $array = array_map('trim',$array);  /* array_map :- The array_map() function is a built-in function in PHP that applies a callback function to each element of an array and returns a new array with the modified elements. 
                                                It takes two arguments: the callback function and the array to be processed*/
           // print_r($array);
           foreach($array as $a){
            echo $a." ";
           }
        }
        ?>
    </h1>
</body>
</html>