<?
session_start();
date_default_timezone_set("Europe/Budapest");


if( trim($_POST['pass_change_input']=="" )){
  die("<script> alert('A jelszó legaláb 6 , és 20 karekterből áljón')</script>");}


if( trim($_POST['pass_change_input2']=="" ))
{
    die("<script> alert('A jelszó megerősités hiányzik! ')</script>");
}
else if( $_POST['pass_change_input2']!=$_POST['pass_change_input'] )
{
    die("<script> alert('A jelszavak nem egyeznek! ')</script>");
}

$pass_up = md5($_POST['pass_change_input']);
@$lognev2 = $_SESSION['UserId'];

$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;



$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);

@$updatepass = current(mysqli_fetch_array( mysqli_query($adb , "

              Update user
              Set UserPass = '$pass_up'
              Where UserId = '$lognev2'



          ")));


          print"

              <script>

                alert('Sikeres frissités!')
                parent.location.href = './?p=12'
                </script>


          ";




mysqli_close($adb);

?>
