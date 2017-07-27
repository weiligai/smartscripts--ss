<?php 

$times = $_GET["times"];
$filename = $_GET["filename"];

function encode_file_contents($atimes, $afilename) { 
    $type=strtolower(substr(strrchr($afilename, '.'),1)); 
    if('php' == $type && is_file($afilename)){// 如果是PHP文件 并且可写 则进行压缩编码 
        $contents = php_strip_whitespace($afilename); 
        // 去除PHP头部和尾部标识 
        $headerPos = strpos($contents, '<?php'); 
        $footerPos = strrpos($contents, '?>'); 
        $contents = substr($contents,$headerPos+5,$footerPos-$headerPos-5);
        if($atimes > 0){
            for($i=0;$i<$atimes;$i++){
                $contents = base64_encode(gzdeflate($contents)); //开始编码 
                $contents = "eval(gzinflate(base64_decode("."'".$contents."'".")));";
            }
        }
        echo $contents."<br/><hr/>";
        $encode = '<?php'."\n".$contents."\n\n?>";
        echo "encode.".$afilename;
        //directory need write permisson
        return file_put_contents("encode.".$afilename,$encode); 
    }
    return false;
}

//调用函数 
encode_file_contents($times, $filename); 
echo "OK,加密完成！"
?>
