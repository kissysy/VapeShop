<?

$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;

$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);

@$lognev2 = $_SESSION['UserId'];
@$kernev_change = current(mysqli_fetch_array( mysqli_query($adb , "

                  Select UserKerNev
                  From user
                  Where UserId='$lognev2'

              ")));
@$veznev_change = current(mysqli_fetch_array( mysqli_query($adb , "

                      Select UserVezNev
                      From user
                      Where UserId='$lognev2'

              ")));
@$email_change = current(mysqli_fetch_array( mysqli_query($adb , "

                      Select UserEmail
                      From user
                      Where UserId='$lognev2'

             ")));


mysqli_close($adb);
?>


<?
if(@$_SESSION['UserId'] == "")
{
include("login.php");
}
else
{
  print"
  <div class='egeszlap'>
  <div id='main-fiok'>
    <div class='main-fiok-cim'>
      <h2>Fiók adataim</h2>

    </div>

  <div class='main-fiok-alcim'>
    Személyi adatok
        <hr>
  </div>






      <form method='post'
            action='fiok_change_ir.php'>

  <div class='main-input' >";


  print"
    <span class='change'>Vezetéknév: </span>
    <input type='text' name='veznev-change' value='".$veznev_change."'><br>

    <span class='change'>Keresztnév: </span>
     <input type='text' name='kernev-change' value='".$kernev_change."'><br>

    <span class='change'>  Email:    </span>
    <input type='text' name='email-change' value='".$email_change."'><br><hr>";

  print"
  </div>

      <div class='main-buttons'>


      <a href='./?p=12'>  <input type='button' value='Vissza' ></a>
      <input type='submit' name='folyt' value='Tovább'>

        </div>
      </form>
  </div>
  </div>";
}




?>







<style>


.main-fiok-cim
{

font-size: 21px;
}
div#main-fiok
{
  font-size: 20px;
  padding-left: 660px;
  display:inline-block;
  text-align: :center;
  font-size: 20px;


}
span.change
{
  display:inline-block;
  width: 355px;
  height: 45px;
}
span::before
{
  content: "*";
  color:red;
}
</style>
