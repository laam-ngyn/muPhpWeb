<!DOCTYPE html>
<html>
    <body>
        <h2>Sum of 2 numbers</h2>
        <form action="one.php" method="post">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            <br>
            <input type="submit">
        </form>
        <?php
            $n1 = $_POST["num1"];
            $n2 = $_POST["num2"];
            function sum($num1, $num2) {
                return $num1 + $num2;
            }
            echo "ANS: <br>";
            echo sum($n1, $n2);
        
        ?>
    </body>
</html>