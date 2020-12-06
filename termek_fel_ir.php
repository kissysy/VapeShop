<?
session_start();

//print_r ($_FILES);

if( trim($_POST['ter-nev']=="" )){
die("<script> alert('valami nem jó')</script>");}

if( trim($_POST['ter-marka'] =="" )){
die("<script> alert('valami nem jó')</script>");}

if( trim($_POST['ter-kat'] =="" )){
die("<script> alert('valami nem jó')</script>");}

if( trim($_POST['ter-leir'] =="" )){
die("<script> alert('valami nem jó')</script>");}

if( trim($_POST['ter-ar'] =="" )){
die("<script> alert('valami nem jó')</script>");}

if( trim($_POST['ter-mennyi'] =="" )){
die("<script> alert('valami nem jó')</script>");}



$ternev    = $_POST [ 'ter-nev'   ];
$termarka  = $_POST [ 'ter-marka' ];
$terkat    = $_POST [ 'ter-kat'   ];
$terleir   = $_POST [ 'ter-leir'  ];
$terar     = $_POST [ 'ter-ar'    ];
$termennyi = $_POST [ 'ter-mennyi'];
$kep       = $_FILES[ 'ter-kep'   ];




$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;


$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);


if( isset($_POST['submit']))
{
  if( $kep['type'] =="image/jpeg" || $kep['type'] =="image/jpg" || $kep['type'] =="image/png")
  {
    $kepnev = $kep['tmp_name'];
    $cel    = "./kep_nagy/" . $ternev . ".jpg";
    move_uploaded_file( $kepnev , $cel);

    include('termek_kepkicsi.php');

    $tersor = mysqli_query($adb , "

                INSERT INTO termek
                          (TermekNev , TermekMarka , TermekKat , TermekLeir , TermekDB , TermekAr , TermekKep)
                VALUES
                          ('$ternev' , '$termarka' , '$terkat' , '$terleir' , '$termennyi' , '$terar' , '$ternev' )


    ");






  }



}

mysqli_close($adb);

print"

<script>

    alert('Sikeres frissités!')
    parent.location.href = './?p=20'
</script>
";
?>
