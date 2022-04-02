<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
        $arr = array(
        "a" => 24,
        "b" => 47,
        "c" =>6,
        "d" =>13,
        "e" => 5,
        "f" =>89,
    );
        $result = $arr["f"]-$arr["b"];
        $result = $arr["a"]-$arr["d"];
        $result = $arr["b"]-$arr["c"];
        echo "Алтыншы элементинен екинши:", $result1, "</br>";
        echo "Биринши элементинен тортинши:", $result2, "</br>";
        echo "Екинши элементинен ушинши:", $result3, "</br>";
        echo "Косу натижеси:", $result1+$result2+$result3, "</br>";
     ?>
</body>
</html>