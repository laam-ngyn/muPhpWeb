<!DOCTYPE html>
<html>
    <body>
        <h3>Nhập khoảng [A;B]</h3>
        <form action="three.php" method="post">
            A: <input type="number" name="num1">
            <br>
            B: <input type="number" name="num2">
            <br>
            <input type="submit" value="check">

        </form>
        <?php
            $n1 = $_POST["num1"];
            $n2 = $_POST["num2"];
            for ($n = $n1; $n <= $n2; $n++) {
                if ($n % 2 == 0) {
                    echo $n . "<br>";
                }
            }
        ?>
    </body>
</html>