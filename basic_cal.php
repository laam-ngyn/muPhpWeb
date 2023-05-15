<!DOCTYPE html>
<html>
    <body>
        <form action="caculator2.php" method="post">
            Number1: <input type="number" name="num1">
            <br>
            Operation: <input type="text" name="ope">
            <br>
            Number2: <input type="number" name="num2">
            <br>
            <input type="submit">
            <br>
        </form>
        <?php
            $operPlus = "+";
            $operMinus = "-";
            $operTimes = "*";
            $operDevide = "/";

            function plus($num1, $num2) {
                return $num1 + $num2;
            }
            function minus($num1, $num2) {
                return $num1 + $num2;
            }
            function times($num1, $num2) {
                return $num1 * $num2;
            }
            function devide($num1, $num2) {
                return $num1 / $num2;
            }
            echo "ANS:<br>";
            if ($_POST["ope"] == $operPlus) {
                echo plus($_POST["num1"], $_POST["num2"]);
            } elseif ($_POST["ope"] == $operMinus) {
                echo minus($_POST["num1"], $_POST["num2"]);
            } elseif ($_POST["ope"] == $operTimes) {
                echo times($_POST["num1"], $_POST["num2"]);
            } elseif ($_POST["ope"] == $operDevide) {
                echo devide($_POST["num1"], $_POST["num2"]);
            }
            else {
                echo "Nothing happen:)))";
            }
            

        
        ?>
    </body>
</html>