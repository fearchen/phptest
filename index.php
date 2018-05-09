<?php
echo "当前页面服务器IP地址为：";
echo  $_SERVER["SERVER_ADDR"];
echo "<br />";
echo "当前客户端IP地址为：";
echo  $_SERVER["REMOTE_ADDR"];
echo "<br />";
echo "当前端口为：";
echo $_SERVER["SERVER_PORT"];
?>