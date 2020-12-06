<?
session_start();

//-------------LocalHost Adatbázis--------------

$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;

$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);


if(isset($_POST['login']))
{

$mail = $_POST['nickname'];
$pw   = md5($_POST['password']);

$userek = mysqli_query($adb, "

                            Select *
                            From user
                            Where UserEmail='$mail' AND UserPass='$pw'

                            ");
if(mysqli_num_rows($userek) > 0)
{
  $user = mysqli_fetch_array( $userek );
  $_SESSION['UserId'] = $user['UserId'];
  $_SESSION['UserLogName'] = $user['UserLogName'];
  $_SESSION['UserStatusz'] = $user['UserStatusz'];

  if( $_SESSION['c'] != $_POST['code'] ) {
  die("<script> alert('Számolj jobban!')</script>");}

print"
  <script>
    parent.location.href = '/szak/index.php'
  </script>  ";
}
else
{
  die("<script> alert('Az emailcim vagy a jelszó hibás!')</script>");
}
}


$date    =       date("Y.m.d H:i:s");
$sip     =   $_SERVER['REMOTE_ADDR'];
$session =   session_id();
$logmail = $_POST['nickname'];

if(isset($_POST['login']))
{
$sql ="

SELECT `UserId`
FROM `user`
WHERE `UserEmail` LIKE '%$logmail%'";

$userid = current(mysqli_fetch_array( mysqli_query($adb ,$sql)));




$Logsor = mysqli_query($adb , "


             INSERT INTO login
                        (  UserId ,LogDatum , LogIp , LogSess  )
             VALUES
                        ( '$userid', '$date' , '$sip' , '$session' )
                    ");



}




//-------------ATW adat bázis--------------

/*

$DateName = "127.0.0.1"  ;
$DateUser   = "kissysy"  ;
$DatePass   = "Bakugan2"         ;
$DateTable  = "kissysy"     ;

$adb = mysqli_connect($DateName , $DateUser , $DatePass , $DateTable  );
if (!$adb) die("Nem sikerült kapcsolódni az adatbázishoz!");
//mysql_select_db("kissysy", $adb) or die("Nem sikerült kiválasztani az adatbázist!");


if(isset($_POST['login']))
{

$mail = $_POST['nickname'];
$pw   = md5($_POST['password']);

$userek = mysqli_query($adb, "

                            Select *
                            From reg
                            Where UserEmail='$mail' AND UserPass='$pw'

                            ");
if(mysqli_num_rows($userek) > 0)
{
  $user = mysqli_fetch_array( $userek );
  $_SESSION['UserId'] = $user['UserId'];
  $_SESSION['UserLogName'] = $user['UserLogName'];
  $_SESSION['UserStatusz'] = $user['UserStatusz'];

  if( $_SESSION['c'] != $_POST['code'] ) {
  die("<script> alert('Számolj jobban!')</script>");}

print"
  <script>
    parent.location.href = '/szak/index.php'
  </script>  ";
}
else
{
  die("<script> alert('Az emailcim vagy a jelszó hibás!')</script>");
}
}


$date    =       date("Y.m.d H:i:s");
$sip     =   $_SERVER['REMOTE_ADDR'];
$session =   session_id();
$logmail = $_POST['nickname'];

if(isset($_POST['login']))
{
$sql ="

SELECT `UserId`
FROM `reg`
WHERE `UserEmail` LIKE '%$logmail%'";

$userid = current(mysqli_fetch_array( mysqli_query($adb ,$sql)));




$Logsor = mysqli_query($adb , "


             INSERT INTO login
                        (  UserId ,LogDatum , LogIp , LogSess  )
             VALUES
                        ( '$userid', '$date' , '$sip' , '$session' )
                    ");



}

*/








?>
