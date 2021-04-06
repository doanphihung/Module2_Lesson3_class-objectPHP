<?php
class QuadraticEquation {
    private $a;
    private $b;
    private $c;
    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    function get_abc()
    {
        $this->a;
        $this->b;
        $this->c;
    }
    function getDiscriminant()
    {
        return ($this->b ** 2) - (4 * $this->a * $this->c);
    }
    function getRoot1()
    {
        return (-$this->b + pow($this->getDiscriminant(), 0.5)) / (2*$this->a);
    }
    function getRoot2()
    {
        return (-$this->b - pow($this->getDiscriminant(), 0.5)) / (2*$this->a);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QuadraticEquation</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>QuadraticEquation</legend>
        <label for="a">Nhập a:</label>
        <input type="number" id="a" name="a" placeholder="enter a"> <br>
        <label for="b">Nhập b:</label>
        <input type="number" id="b" name="b" placeholder="enter b"> <br>
        <label for="c">Nhập c:</label>
        <input type="number" id="ac" name="c" placeholder="enter c"> <br>
        <input type="submit" name="submit" value="Tìm nghiệm">
    </fieldset>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $quadraticEquation = new QuadraticEquation($a, $b, $c);
    if(isset($_POST['submit'])) {
        if ($quadraticEquation->getDiscriminant() > 0) {
            echo $quadraticEquation->getRoot1() . "<br>";
            echo $quadraticEquation->getRoot2();
        } else if ($quadraticEquation->getDiscriminant() === 0) {
            echo $quadraticEquation->getRoot1();
        } else {
            echo "Vô Nghiệm";
        }
    }
}
?>
</body>
</html>
