<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations in PHP</title>
</head>
<body bgcolor="teal">
    <table width="100%" height="100%">
        <tr>
            <td align="center" valign="middle">
                <fieldset>
                    <legend> HTMl input form</legend>
    <h2>Simple Calculator</h2>
    <form method="post">
        <label>Enter First Number:</label>
        <input type="number" name="num1" size="15" step="any" required>
        <br><br>

        <label>Enter Second Number:</label>
        <input type="number" name="num2" size="15" step="any" required>
        <br><br>

        
        <br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>
</fieldset>

<?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $addingNumbers=$num1+$num2;
        echo "<h3>Result: $addingNumbers</h3>";
    }
    ?>
     </td>
        </tr>
    </table>
</body>
</html>
