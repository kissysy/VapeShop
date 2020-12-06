<?
session_start();
date_default_timezone_set("Europe/Budapest");



if( $_POST['veznev-change']=="" ){
  die("<script> alert('Mindent ki kell tölteni')</script>");}

if( $_POST['kernev-change']=="" ){
  die("<script> alert('Mindent ki kell tölteni')</script>");}

if( $_POST['email-change']=="" ){
  die("<script> alert('Mindent ki kell tölteni')</script>");}


$email_up = $_POST['email-change'];
$kernev_up= $_POST['kernev-change'];
$veznev_up= $_POST['veznev-change'];
@$lognev2 = $_SESSION['UserId'];


  $DateName   = "localhost";
  $DateUser   = "root"     ;
  $DatePass   = ""         ;
  $DateTable  = "shop"     ;



  $adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);




@$updatefiok = current(mysqli_fetch_array( mysqli_query($adb , "

                UPDATE user
                Set UserVezNev = '$veznev_up' , UserKerNev = '$kernev_up' , UserEmail ='$email_up'
                Where UserId ='$lognev2'





")));


      print"

          <script>

            alert('Sikeres frissités!')
            parent.location.href = './?p=12'
            </script>


     ";
















mysqli_close($adb);
?>
