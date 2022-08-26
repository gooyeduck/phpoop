<?php
include('inc/header.php');
include('function.php');

?>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <table>
        <tr>
            <td>First Number: </td>
            <td><input type="number" name="num1" value='<?php echo $num1 = $_POST['num1'] ?>'></td>
        </tr>
        <tr>
            <td>Second Number: </td>
            <td><input type="number" name="num2" value='<?php echo $num2 = $_POST['num2'] ?>'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="calculate" name="calculate"></td>
        </tr>
    </table>
    <?php 
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if (empty($num1) or empty($num2)) {
            echo "<p style='color:#ee6554'>Field must not be empty </p><br>";
        }else {
            # code...
            $calculation = new Calculation;
            $calculation->Summation($num1,$num2);
            $calculation->Multiplication($num1,$num2);
            $calculation->Subtraction($num1,$num2);
            $calculation->Division($num1,$num2);
        }
    }
    
   

    ?>
</form>

<?php include('inc/footer.php') ?>