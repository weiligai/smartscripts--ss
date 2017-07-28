# smartscripts--ss

php实现代码压缩、编码，filename表示待处理文件，times表示操作次数<br/>
base64encode-gzinflate.php--->generate the file encode.shell.php with \<?php eval(gzinflate(base64_decode('---'))); ?\>;<br/>
example: http://xxx.xxx.xxx.xxx/smartscripts--ss/base64encode-gzinflate.php?times=5&filename=shell.php

php实现通过post代码进行解码、解压缩，支持经过多重压缩、编码的代码<br/>
post代码格式为：eval(gzinflate(base64_decode('---')));<br/>
gzinflate-base64decode.php--->post the code "eval(gzinflate(base64_decode('---')));"<br/>
example: http://xxx.xxx.xxx.xxx/smartscripts--ss/gzinflate-base64decode.php

php实现通过echo重组通过数组字符串进行混淆的恶意代码<br/>
phpmix-recover.php-->recover the malicious script by echo function
