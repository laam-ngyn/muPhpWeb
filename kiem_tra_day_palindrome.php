<!DOCTYPE html>
<html>
    <body>
        <form action="four.php" method="post">
            Check Palindrome string:
            <br>
            <hr>
            <input type="text" name="str">
            <br>
            <input type="submit" value="Check">
            <hr>
        </form>
        <?php
            $string = $_POST["str"];
            $leng = strlen($string);
            $leftString = 0;
            $rightString = $leng-1;
            $check = true;
            while ($leftString < $rightString) {
                if($string[$leftString] != $string[$rightString]) {
                    $check = false;
                    break;
                }
                $leftString++;
                $rightString--;
            }
            if ($check) {
                echo "$string là chuỗi Palindrome.";
            } 
            else {
                echo "$string không phải là chuỗi Palindrome.";
            }
        
        
        ?>
    </body>
</html>