<?php
#$a = "eval(gzinflate(base64_decode('�������BASE64����')));";
$a = $_GET(a)
function decodephp($a)
{
    //������
	$max_level = 300; 
    for ($i = 0; $i < $max_level; $i++) {
        ob_start();
        eval(str_replace('eval', 'echo', $a));
        $a = ob_get_clean();
        if (strpos($a, 'eval(gzinflate(base64_decode') === false) {
            return $a;
        }
    }
}

echo decodephp($a);
?>
