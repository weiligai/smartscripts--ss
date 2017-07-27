<html>
<head>
</head>
<body>

<form action="gzinflate-base64decode.php" method="post">
eval(gzinflate(base64_decode(''))); <textarea name="eval" cols="100" rows="5">input the post</textarea>
<input type="submit"/>
<br/><hr/>

<?php
$a = $_POST["eval"];
echo "---post content---"."<br/>".$a."<br/><hr/>";
echo "<br/><br/><br/>";
function decodephp($a)
{
    $max_level = 1000; 
    for ($i = 0; $i < $max_level; $i++) {
        ob_start();
        eval(str_replace('eval', 'echo', $a));
        $a = ob_get_contents();
        ob_end_clean();
        echo "---".$i."---"."<br/>";
        echo htmlentities($a,ENT_QUOTES,"UTF-8")."<br/><hr/>";
        echo "<br/><br/><br/>";
        if (strpos($a, 'eval(gzinflate(base64_decode') === false) {
            return $a;
        }
    }
}

echo htmlentities(decodephp($a),ENT_QUOTES,"UTF-8");
#sleep(100);
?>

</body>
</html>
