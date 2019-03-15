<?php
require_once "Demo.php";
$demo=new Demo();
$res=$demo->demo();

?>
<form action="" method="post">
    <table border="1">
        <tr>
            <td>First Number</td>
            <td><input type="text" name="first_number"></td>
        </tr>
        <tr>
            <td>Last Number</td>
            <td><input type="text" name="last_number"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="radio" name="check" value="Odd">ODD
                <input type="radio" name="check" value="Even">EVEN
            </td>
        </tr>
        <tr>
            <td>Result</td>
            <td>
                <textarea rows="5" cols="30">
                    <?php echo $res;?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
