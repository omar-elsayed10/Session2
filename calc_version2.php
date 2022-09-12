<form action="<?php $_SERVER['PHP_SELF']?>" method="get"> 
    <input type="text" name="numberOne">
    <select name="operation">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="numberTwo">
    <input type="submit" name="submit">
</form>

<?php
    if(isset($_GET['submit']))
    {
        $numberOne = $_GET['numberOne'];
        $numberTwo = $_GET['numberTwo'];
        $operation = $_GET['operation'];

        if($numberOne != "" && $numberTwo != ""){
            switch($operation){
                case "+":
                    echo "addation : " . ($numberOne+$numberTwo);
                    break;
                case "-":
                    echo "Subtraction :" . ($numberOne-$numberTwo);
                    break;
                case "*":
                    echo "Multiplication : " . ($numberOne*$numberTwo);
                    break;
                case "/":
                    echo "Division : " . ($numberOne/$numberTwo);
                    break;
            }

        }else{
            echo "Please Enter Two Numbers in Text Area !!!";
        }
    }


?>