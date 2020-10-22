<html>
    <body>
        <form action ="" method="post">
                Input First Number:<br>
                <input type="text" name="num1" value=""><br><br>
                Input Second Number:<br>
                <input type="text" name="num2" value=""><br><br>
                <input type="submit" name="submit" value="Submit"> </button>
        </form>
    </body>
</html>

<?php
    if(isset($_POST["submit"]))
    {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $min = ($num1 < $num2) ? $num1 : $num2;
        for ($i=1;$i<=$min; $i++)
        {
            if($num1%$i==0 && $num2%$i==0)
            {
                $gcd = $i;
            }
        }   
        echo "GCD: ", $gcd;
    }
?>