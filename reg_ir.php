<?php
session_start();
date_default_timezone_set("Europe/Budapest");




//ELLENŐRZÉS


if( trim($_POST['pass']=="" )) {
die("<script> alert('A jelszó hiányzik!')</script>");}


if( trim($_POST['pass2']=="") )
{
  die("<script> alert('Irja be még egyszer a jelszót!')</script>");
}
else if ( $_POST['pass2']!=$_POST['pass'])
{
    die("<script> alert('A jelszavak nem egyeznek!')</script>");
}

if( trim($_POST['veznev']=="" )) {
die("<script> alert('A vezetéknév hiányzik!')</script>");}

if( trim($_POST['kernev']=="" )) {
die("<script> alert('A keresztnév hiányzik!')</script>");}

if( trim($_POST['emailcim']=="" )) {
die("<script> alert('Az E-mail cím hiányzik!')</script>");}

if( trim($_POST['szulev']=="") ) {
die("<script> alert('A születési dátum hiányzik!')</script>");}

if(  $_POST['elfogad']=="" ) {
die("<script> alert('Nem fogadta el a feltételek igy nem tud regisztrálni!')</script>");}

$felnev =       $_POST[ 'felnev'  ];
$fpass  =       $_POST[ 'pass'    ];
$veznev =       $_POST[ 'veznev'  ];
$kernev =       $_POST[ 'kernev'  ];
$femail =       $_POST[ 'emailcim'];
$fszulev=       $_POST[ 'szulev'  ];
$date   =       date("Y.m.d H:i:s");
$sip    =   $_SERVER['REMOTE_ADDR'];
$session=   session_id();

$karakter = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789" ;
$str = "" ;
for( $i=1; $i<=10; $i++ )   $str .= substr( $karakter, mt_rand(0,61), 1 ) ;


$secretpass = md5($_POST['pass']);

//LocalHost adatbázis

$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;


$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);

$emailell =  mysqli_query($adb ,"

                Select *
                From user
                Where UserEmail = '$femail'
                          ");



if (mysqli_num_rows($emailell))
{
  die("<script> alert('Az email cím már létezik!')</script>");
}
else{

$Regsor = mysqli_query($adb , "


             INSERT INTO user
                        ( UserIdKar , UserVezNev , UserKerNev , UserPass    , UserEmail   , UserSzul , UserDatum   , UserIP      , UserSession )
             VALUES
                        ( '$str'      , '$veznev' , '$kernev'     ,      '$secretpass'  , '$femail'     , '$fszulev'  , '$date', '$sip' , '$session' )
                    ");

        print"

        <script>

            alert('A jelenkezés sikeres!')
            parent.location.href = './?p=8'
        </script>


             ";

             $fullname = $_POST['veznev'] . " " . $_POST[ 'kernev' ];
             $uzenet ='Köszönjük a regisztráót $fullname \r\n Üdvözlettel, \r\n A VapeGoat';
             $targy  = "VapeGoat Regisztráció Sikeres";
             $kitol  ="From: kissysy@atw.hu";
             mail($femail , $targy , $uzenet , $kitol);


}
mysqli_close($adb);







//-------------ATW adat bázis--------------

/*

$DateName = "127.0.0.1"  ;
$DateUser   = "kissysy"  ;
$DatePass   = "Bakugan2"  ;
$DateTable  = "kissysy"  ;

$adb = mysqli_connect($DateName , $DateUser , $DatePass , $DateTable  );
if (!$adb) die("Nem sikerült kapcsolódni az adatbázishoz!");
//mysql_select_db("kissysy", $adb) or die("Nem sikerült kiválasztani az adatbázist!");



$emailell =  mysqli_query($adb ,"

                Select *
                From reg
                Where UserEmail = '$femail'
                          ");
$felnevell = mysqli_query($adb ,"

              Select *
              From reg
              Where UserLogName = '$felnev'
                      ");

if(mysqli_num_rows($felnevell) )
{
    die("<script> alert('Az felhasználónév már létezik!')</script>");
}
else if (mysqli_num_rows($emailell))
{
  die("<script> alert('Az email cím már létezik!')</script>");
}
else{

$Regsor = mysqli_query($adb , "


             INSERT INTO reg
                        ( UserIdKar , UserLogName , UserPass , UserName    , UserEmail   , UserSzul , UserDatum   , UserIP      , UserSession )
             VALUES
                        ( '$str'      , '$felnev'     ,      '$secretpass' , '$nev' , '$femail'     , '$fszulev'  , '$date', '$sip' , '$session' )
                    ");

        print"

        <script>

            alert('A jelenkezés sikeres!')
            parent.location.href = './?p=8'
        </script>


             ";

             $kernev = $_POST[ 'kernev' ];
             $uzenet ='Köszönjük a regisztráót '. $kernev;
             $targy  = "VapeGoat Regisztráció Sikeres";
             $kitol  ="From: kissysy@atw.hu" ;
             mail($femail , $targy , $uzenet , "kissys@atw.hu");
}

mysqli_close($adb);

*/







?>
