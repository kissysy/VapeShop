<?
if(@$_SESSION['UserId'] == "")
{
include("login.php");
}
else
{
print"<main>
  <div class='main'>
    <div class='main_row'>


      <section>
        <div class='main-top'>
          <h1>Fiókom</h1>
        </div>

        <div class='main-content'>
<hr>

          <ul>
            <li><a href='./?p=14'>Fiókadatok módosítása</a></li>
            <li><a href='./?p=15'>Jelszócsere</a></li>
            <li><a href='./?p=16'>Címadatok módosítása</a></li>
          </ul>
          <hr>
        </div>
        </section>

        <aside>
          <div class='kat'>";
          include('kategoria.php');
          print"
        </div>
        </aside>



      </div>
  </div>
</main>";



}







?>

<style>

.main
{
  margin-top: 10px;
  margin-left: 250px;
  margin-right: 250px;
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 50px;



}
.main-top h1
{
  position: absolute;
  left: 590px;
  top: 150px;

  font-size: 28px;

}
.main-content
{
margin-left: 280px;
margin-right: 280px;
font-size: 18px;


}
.main-content a
{
  text-decoration: none;
  color: black;

}
.main-content a:hover
{
  color: red;
}


</style>
