<?php



header("Content-type:text/html; charset=utf-8");

$host= "e96525zm.beget.tech";
$path="/6/?".$_SERVER['QUERY_STRING'];
$fp=fsockopen($host,80,$errno, $errstr,10);
if(!$fp) { echo "$errstr ($errno)<br/>\n"; }else{
$data = "";
$post=0; foreach($_POST as $key=>$value){
$post=1; $data.="&$key=$value";} if($data)$data=substr($data,1);
if($post) $headers = "POST $path HTTP/1.0\r\n";else
$headers = "GET $path HTTP/1.0\r\n"; $headers .= "Host: $host\r\n";
$headers .= "Accept: text/html, application/xml;q=0.9, application/xhtml+xml, image/png, image/jpeg, image/gif,image/x-bitmap, */*;q=0.1\r\n";
$headers .= "Accept-Charset: utf-8;q=0.6 windows-1251;q=0.1*;q=0.1\r\n";
$headers .= "Accept-Encoding: utf-8\r\n";
$headers .= "Accept-Language: ru, en;q=0.9\r\n";
$headers .= "User-Agent: ".$_SERVER['HTTP_USER_AGENT']."\r\n";
if($post){ $headers .= "Content-type: application/x-www-form-urlencoded\r\n";
$headers .= "Content-Length: ".strlen ($data)."\r\n";
$headers .= "\r\n"; $headers .= $data;}else $headers.="\r\n";
@fwrite($fp, $headers); while($file != "\r\n") $file = @fgets($fp, 128);
$file = ''; while(!feof($fp)) $file .= @fgets($fp, 4096); @fclose($fp); }
################
/*





$file=str_replace('src="/','src="http://sefan.ru/',$file);





$file = preg_replace('|<div class="f"><div class="ts"><a href="http://sefan.ru/loads.php(.*)Вверх</a>|sU','"',$file);

$file = preg_replace('|<div class="f"><div class="ts"><a href="http://sefan.ru/loads.php(.*)Вгору</a>|sU','"',$file);

$file = preg_replace('|<div class="f"><div class="ts"><a href="http://sefan.ru/loads.php(.*)Scroll to Top</a>|sU','"',$file);
$file=str_replace('<img src="http://rugame.mobi/ic_g3.gif','<div class="5',$file);



$file=str_replace('href="http://sefan.ru/loads/','href="dir.php',$file);

$file = str_replace('href="/loads/','href="dir.php',$file);
$file = str_replace('"<>','',$file);
$file = str_replace('style=2&lan=ru','',$file);
$file = str_replace('</body>','',$file);

$file = preg_replace('|<meta http-equiv="content-Style(.*)class="h">|sU','',$file);


$file = str_replace('<>','',$file);
$file = preg_replace('|<title(.*)title>|sU','<div class="site-footer push">',$file);
$file = str_replace('<img src="','<div class="site-footer push"><img src="',$file);
$file = preg_replace('|.jar"(.*)>|sU','.jar"> </div>  <input type="submit" class="input-button" value="Проверить"></div>          </form>      </div>   <div class="site-footer push">       </div>',$file);  $file = str_replace('JAR','',$file);
$file = preg_replace('|.jad(.*)<a href="|sU','.jar">Скачать</div></a><form method="post" action="https://2ip.ru/site-virus-scaner/"> </th> <td> <input name="url" type="hidden" class="input-text" value="',$file);
$file = preg_replace('|<span class="but(.*)form>|sU','',$file);
$file = str_replace('<a class="but"','<a class="site-footer push"',$file);

$file=str_replace('lan=uk','lan=ru',$file);

$file=str_replace('lan=en','lan=ru',$file);
*/

echo $file;


?>

