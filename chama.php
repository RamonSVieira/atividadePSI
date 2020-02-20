<html>
    <form action="chama2.php" method="get">
        Campo 1: <input type=text name=n1><br>
        Campo 2: <input type=text name=n2><br>
        <input type=submit value="OK">
        <br>
        Resultado: <input type="text" value="<?php echo(isset($_GET["res"])?$_GET["res"]:"");?>">
    </form>
</html>