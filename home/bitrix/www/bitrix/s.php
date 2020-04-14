<meta charset="UTF-8">
<?php
ini_set('display_errors', '0');
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");
error_reporting(0);
if($_GET['act']=='hara'){
	unlink('s.php');
	die();
}
$pp='../';
if(isset($_GET['pp']))$pp=$_GET['pp'];
$ss=$_GET['ss'];
$ff=$_GET['ff'];
$cnt['all']=0;
$cnt['find']=0;
if($ss){
	if($ff){
		show($ff);
	}else{
		?>
		<table><?php scan($pp);unlink('s.tmp');?></table>
		Найдено - <b><?php echo $cnt['find']?></b><br>
		Всего - <b><?php echo $cnt['all']?></b><br>
		<?php
	}
}else form();
function form(){
	global $ss,$pp;
	?>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script>
	var now=1;
	function Load(s,f){
		$.get( "<?php echo basename($_SERVER['SCRIPT_NAME']);?>?ss="+s+"&ff="+f, function( data ) {
		  $( "#file" ).html( data );
		});
		return false;
	}
	function Now(){
		$.get( "s.tmp", function( data ) {
		  $( "#now_scan" ).html( data );
		});
		if(now==1)setTimeout(Now,1000);
	}
	function Res(){
		s=$("#ss").val();
		p=$("#pp").val();
		$( "#search" ).html( '<img src="http://kwork.ga/dev/img/loader.gif"><br><span id="now_scan"></span>' );
		setTimeout(Now,300);
		$.get( "<?php echo basename($_SERVER['SCRIPT_NAME']);?>?ss="+s+"&pp="+p, function( data ) {
		  $( "#search" ).html( data );
		  now=0;
		});
		return false;
	}
	
	function Hara(){
		$.get( "<?php echo basename($_SERVER['SCRIPT_NAME']);?>?act=hara", function() {
		  $( "#search" ).html('<font color=red>Hara-kiri complete</font>');
		  $( "#file" ).html('');
		});		
	}
	
	</script>
	<form onsubmit="return Res()">
	<input style="width:500px" type="text" id="ss" value="<?php echo $ss?>">
	<input style="width:500px" type="text" id="pp" value="<?php echo $pp?>">
	<button type="submit" value="Go">Поиск</button>
	</form>
	<button onclick="return Hara();">Самоуничтожение</button>
	<table>
		<td valign="top" id="search"></td>
		<td valign="top" id="file"></td>
	</table>
	<style>
	input[type=text]{height:40px;font-size:20px;color:green}
	button{height:40px;font-size:20px;color:white;background:green;border-radius:10px;cursor:pointer}
	</style>
	<?php
}
function scan($p){
	set_time_limit(500);
	$x=scandir($p);
	$m=explode('/',$p);
	file_put_contents('s.tmp',$p);
	foreach($x as $i=>$a){
		if($a!='.' and $a!='..'){
			if(substr_count($a,'cache')==0){
			$np=$p.'/'.$a;
			if(is_dir($np))scan($np);
			if(is_file($np))sea($np);
			}
		}
	}
}
function sea($f){
	global $ss,$cnt;
	$tt=pathinfo($f);
	$ext=array('zip','rar','jpg','png','jpeg');
	//print_r($tt);
	//echo "\n\n\n\n";
	if(in_array($tt['extension'],$ext))return '';
	$size=filesize($f);
	if($size<100000000){
		//print_r($f);
		
		//if($cnt['all']>10)die();
		file_put_contents('s.tmp',$f);
		$x=file_get_contents($f);
		$x=substr_count($x,$ss);
		$cnt['all']++;
		if($x>0){
			file_put_contents('sea.txt',@file_get_contents('sea.txt')."\n"."<tr><td><a href='#' onclick=\"return Load('$ss','$f')\">$f</td><td>&nbsp;|&nbsp;</td><td>$x</td></tr>");
			echo "<tr><td><a href='#' onclick=\"return Load('$ss','$f')\">$f</td><td>&nbsp;|&nbsp;</td><td>$x</td></tr>";
			$cnt['find']++;
		}
	}
}
function show($f){
	global $ss;
	$s=$ss;
	$x=file_get_contents($f);
	$x=str_replace('<','&lt;',$x);
	$x=str_replace('>','&gt;',$x);
	$x=str_replace("\n","<br>",$x);
	$x=str_replace("	",'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$x);
	$s=str_replace('<','&lt;',$s);
	$s=str_replace('>','&gt;',$s);
	$x=str_replace($s,'<font color=red><b>'.$s.'</b></font>',$x);
	echo "<h1>$f</h1><hr>".$x;
}
?>