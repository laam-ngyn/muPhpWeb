<!DOCTYPE html>
<html>
    <body>
        <h2>Kiểm tra số nguyên tố</h2>
        <form action="two.php" method="post">
            Your num:
            <input type="number" name="num">
            <input type="submit">

        </form>
        <?php
            $n = $_POST["num"];
            $x = 1;
            $a = 0;
            echo "ANS:<br>";
            for ($x = 1; $x <= $n; $x++) {
                if ($n % $x == 0) {
                   $a++;
                    
                   } 
                }
            if ($a == 2) {
                echo "$n là số nguyên tố.";
            }
            else {
                echo "$n không phải là số nguyên tố.";
            }
        
        ?>
    </body>
</html>