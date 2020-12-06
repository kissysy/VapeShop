<?
  session_start();



?>

<!DOCTYPE html>
<html>
<head>

<meta charset="iso-8859-2">

<link rel="stylesheet" type="text/css" href="style.css"/>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>




<title> VapeGoat </title>


</head>
<body>
<?
include("fejlec.php");

?>

<div id='tartalom'>

<?



    if ( isset($_GET['p']) )
    {
        $p = $_GET['p'];

    }
    else
    {
      $p ="" ;
    }

    //--------Menü sor--------
    if( $p=="" )  include("fooldal.php"          ); else
    if( $p=="2")  include("akcio.php"            ); else

    if( $p=="aroma" ) include("aroma.php"        ); else
    if( $p=="ker") include("kereset.php"); else



    if( $p=="bazis" ) include("bazis.php"        ); else
    if( $p=="5" ) include("diy.php"              ); else
    if( $p=="6" ) include("vape.php"             ); else
    if( $p=="9" ) include("forum.php"            ); else
    if( $p=="aru" )include("aru.php"             ); else

    //--------Vásárlás--------
    if( $p=="kosar" )include("kosar.php"            ); else

    //---------Belépés/Kilépés/Regisztráó----------
    if( $p=="7" ) include("reg.php"              ); else
    if( $p=="8" ) include("login.php"            ); else
    if( $p=="11" )include("logout.php"           ); else
    if( $p=="18" )include("forgetpass.php"       ); else

    //----------FIÓK--------
    if( $p=="12" )include("fiok.php"             ); else
    if( $p=="14" )include("fiok_change.php"      ); else
    if( $p=="15" )include("pass_change.php"      ); else
    if( $p=="16" )include("cim_change.php"       ); else

    //----------Admin----------
    if( $p=="17" )include("admin.php"            ); else
    if( $p=="20" )include("termek_fel.php"       ); else

    //----------Lábléc-------------------
    if( $p=="10" )include("felt.php"             ); else

    //-------Rossz oldal---------
                  include("404.php"              );




?>



</div>

  <iframe name='test' width='500px' height='500px'></iframe>


<?
include("lablec.php");
?>
</body>
</html>
