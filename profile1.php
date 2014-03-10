<?php
$row1;
mysql_connect('localhost' ,'root' ,'root');
	mysql_select_db('nitt');
	session_start();
	$x=$_GET['q'];
 
		$query="select * from `data` where `id`=$x";
	$result=mysql_query($query);
	while($row=mysql_fetch_row($result))
	$row1=$row;
 
	?>
<html>
<head>
<style>
.info
{
color:black;
font-family:cursive;
font-weight:800;
font-size:30px;
background:rgb(220,220,220);
}
#crs:hover
{
cursor:pointer;
background:rgba(0,0,0,0.7);
}

</style>
<script>
function clo(){document.getElementById('upl').style.display='none';}
function e(){document.getElementById('upl').style.display='block';}
function r(m)
{
var x='ree'+m+'';
if(document.getElementById(x).style.display=='block')
document.getElementById(x).style.display='none';
else
document.getElementById(x).style.display='block';
document.getElementById('tub').value=m;
}
function zx(m)
{
document.getElementById('com').value=m.value;
}
function as(m)
{
if(m.keycode==13||m.which==13)
{
document.getElementById('sub').value='sub';
document.getElementById('comer').submit();
}
}
</script>
</head>
<body>
<div style='font-family:arial;font-size:20px;letter-spacing:3px;color:rgb(213,123,123);width:60%;position:absolute;top:130px;right:170px;'> 
<div style='padding:10px;border-bottom:1px solid rgb(213,213,213)' class='di' onclick='visi()'><span class='info'>Roll no:</span>  <?php echo $row1[4]; ?>

</div>
<div style='padding:10px;border-bottom:1px solid rgb(213,213,213)' class='di' onclick='visi()'><span class='info' >Semester :</span>   <?php echo $row1[5]; ?> </div>

<div style='padding:10px;border-bottom:1px solid rgb(213,213,213)' class='di' onclick='visi()'><span class='info'>DOB :</span>  <?php echo $row1[6]; ?></div>

<div style='padding:10px;border-bottom:1px solid rgb(213,213,213)' class='di' onclick='visi()'><span class='info'>Working as :</span>  <?php echo $row1[7]; ?></div>

<div style='padding:10px;border-bottom:1px solid rgb(213,213,213)' class='di' onclick='visi()'><span class='info'>Email id :</span>  <?php echo $row1[8]; ?></div>

<div style='padding:10px;border-bottom:1px solid rgb(213,213,213)' class='di' onclick='visi()'><span class='info'>About :</span>
     <?php echo $row1[9]; ?></div>
	 </div>

<div style='background-color:rgba(241,241,241,0.7);border:1px solid rgb(213,213,213);position:absolute;width:98%'>
<div style='float:left;'>
<pre style='color:rgb(213,123,123);font-size:27px;font-family:cursive;padding:3px;font-weight:600;cursor:pointer;' onclick='f()'> STATUS         </pre></div>
<div style='font-size:18px;font-family:cursive;padding:10px;font-weight:600;padding:20px;' ><?php echo $row1[1] ; ?>
</div>
</div>
<div id='inp' style='position:absolute;left:200px;top:20px;width:100%;display:none;'> 
</div> 
<div style='font-size:32px;font-family:courier;font-weight:800;position:absolute;top:400px;padding:25px;color:rgba(0,0,0,0.7);width:220px;cursor:pointer;'  onclick='visi()'><?php echo $row1[3];  ?></div>
<img src="<?php echo $row1[2]; ?>" style='position:absolute;top:190px;left:40px;width:220px;height:220px;box-shadow:15px 15px 10px lightblue;' onclick='e()' >
<div id='upl' style='height:100%;width:100%;position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.8);display:none;'>
<img src="<?php echo $row1[2]; ?>" style='position:relative;top:50px;left:300px;width:450px;height:480px;'  >
<div id='crs' style='font-size:25px;color:lightblue;padding:5px;position:absolute;top:150px;right:130px;' onclick='clo()'>X</div>
</div>
<div style='font-size:32px;font-family:courier;font-weight:800;position:absolute;top:90%;padding:25px;color:rgba(0,0,0,0.7);width:220px;cursor:pointer;text-decoration:underline;'>Related News</div>
<div style='position:absolute;top:97%;width:100%;'>
<?php  
mysql_close();

$d;$b;$a;
session_start();
$a=$_SESSION['id'];
$con=mysql_connect('localhost','root','root');
if(!$con)die('cannot connect wuth the server');
if(!mysql_select_db('nitt',$con))die('database not found');
$query= "select `name` from `data` where `id`='".$a."'";
$r=mysql_query($query,$con);
if(mysql_num_rows($r)==1)
{
while($row=mysql_fetch_row($r))
{
$b=$row[0];
}}
mysql_close($con); 

if(isset($_POST['sub']))
{
$y=$_POST['tub'];
mysql_connect("localhost","root","root");
mysql_select_db('comments');
$y=$_POST['tub'];
$z='come'.$y;
$x=$_POST["com"];
$query="INSERT INTO  `comments`.`".$z."` (
`id`,`com`,`name`
)
VALUES (
'$a', '$x','$b'
)";
mysql_query($query);
mysql_close();
} 
$t=$_GET['q'];
   $con=mysql_connect('localhost' ,'root' ,'root');
	mysql_select_db('news',$con);
	$con1=mysql_connect('localhost' ,'root' ,'root',true);
	mysql_select_db('comments',$con1);
	$query="select * from `panes` where `from`='".$t."' order by id DESC ";
	$result=mysql_query($query,$con);
	while($row=mysql_fetch_row($result))
	{
	$query1="select * from `come".$row[0]."`";
	$result1=mysql_query($query1,$con1);
	echo "<div style='width:80%;float:right;background-color:rgb(241,241,241);border:1px solid rgb(213,213,213);padding:10px;border-bottom:7px solid white;box-shadow:20px 10px 20px lightblue;'>
<div style='font-size:24px;font-family:cursive;color:rgb(213,123,123);font-weight:700;border-bottom:1px solid rgb(213,213,213);padding:10px;word-wrap:break-word;'>".$row[1]." 
</div>
<div><pre style='font-family:cursive;font-size:16px;padding:10px;word-wrap:break-word;'>".$row[2]."</pre>
<button style='background:rgba(0,0,0,0.5);border-radius:10%;text-align:center;font-family:cursive;font-size:18px;color:white;width:70px;padding:5px;height:42px;position:relative;top:2px;left:100px;padding:10px;font-weight:600;float:left;'>Lift</button>
<button style='background:rgba(0,0,0,0.5);border-radius:10%;text-align:center;font-family:cursive;font-size:18px;color:white;width:70px;padding:5px;height:42px;position:relative;top:2px;left:120px;padding:10px;font-weight:600;float:left;'>Crush</button>
<button style='background:rgba(0,0,0,0.5);border-radius:10%;text-align:center;font-family:cursive;font-size:18px;color:white;width:70px;padding:5px;height:42px;position:relative;top:2px;left:140px;padding:10px;font-weight:600;float:left;'>Spam</button>
<button style='background:rgba(0,0,0,0.5);border-radius:10%;text-align:center;font-family:cursive;font-size:18px;color:white;width:102px;padding:5px;height:42px;position:relative;top:2px;left:160px;padding:10px;font-weight:600;float:left;' onclick='r(".$row[0].")'>Comment</button>
</div>" ;$count=mysql_num_rows($result1);
	echo "<span style='color:white;background:rgba(213,123,123,0.8);font-family:cursive;padding:4px;border-radius:20%;position:relative;top:1px;left:150px;'>$count</span>
</div>";echo "<div  style='display:none' id='ree".$row[0]."' class='rg'>";
	while($row2=mysql_fetch_row($result1))
echo "<div style='width:80%;float:right;background-color:white;border:1px solid rgb(213,213,213);padding:10px;box-shadow:10px 10px 20px lightblue;font-family:cursive;font-size:16px;padding:10px;word-wrap:break-word;position:relative;top:1px;'><a href='http://localhost/profile1.php?q=".$row2[0]."' style='color:rgb(213,123,123);'>".$row2[2]."</a><pre style='font-family:cursive;font-size:16px;word-wrap:break-word;'>".$row2[1]."</pre> </div>";
echo "<input type='text'  style='width:81.5%;float:right;box-shadow:10px 10px 20px lightblue;font-family:cursive;font-size:16px;padding:10px;word-wrap:break-word;position:relative;top:1px;' placeholder='Enter Your Comment Here ! ' onkeyup='zx(this)' onkeypress='as(event)'></div>";}
mysql_close($con);mysql_close($con1);
?>
<form id='comer' action='' method='post' style='display:none'>
<input type='text' name='com' id='com'>
<input type='text' name='tub' id='tub'>
<input type='text' name='sub' id='sub'>
</form>
<div style='width:100%;text-align:center;position:absolute;bottom:20px;width:200px;'>&copy Goyal.inc.corp - kt </div><br><br>
</div>

</body>
</html>