<?
if(@$_SESSION['UserId'] == "")
{
include("login.php");
}
else {
  print"<div>
    <div class='pass-main'>
      <div class='pass-cim'>
        <h2>Jelszócsere</h2>
      </div>
      <div class='pass-alcim'>
        <h3>Az ön jelszava</h3>
        <hr>
      </div>
      <form method='post'
            action='pass_change_ir.php'>

            <div class='pass-inputs'>
              <span class='pass_change'> Jelszó :</span>
                <input type='password' name='pass_change_input'><br>

              <span class='pass_change'> Jelszó megerősités :</span>
                <input type='password' name='pass_change_input2'><br><hr>

            </div>
            <div class='pass-buttons'>
            <a href='./?p=12'>   <input type='button' name='vissza' value='Vissza'></a>
              <input type='submit' value='Tovább' name='folyt'>

            </div>
      </form>
      </div>
  </div>";
}

?>



<style>
.pass-main
{
  font-size: 20px;
  padding-left: 660px;
  display:inline-block;
  text-align: :center;
  font-size: 20px;

}
.pass_change
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
