<h1>Nincs G�p</h1>
<?


$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;


$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);


$aroma =  mysqli_query($adb , "

            Select *
            From termek
            Where TermekKat LIKE '%Mod%'



");


?>

<main>
<div class='egeszalap'>

  <div id='belsolap'>

    <section>


      <div id='arulap'  width='100px' height='100px'>

<h2>Aromák</h2>
<hr>
<?





while($sor = mysqli_fetch_array( $aroma ))
{


    print"
            <div id='aru' style='margin-left: 35px; margin-bottom: 20px;'>
                <div id='kep'>
               <a href='kepnez.php?kepnev=$sor[TermekKep]'><img src='kep_kicsi/$sor[TermekKep].jpg'></a>
            </div>
            <div >
              <div id='szovegs'>
                <h4><a href='index.php?p=aru&okod=$sor[TermekNev]'>$sor[TermekNev]</a></h4>
                <p>$sor[TermekLeir]</p>
                <p class='price'> $sor[TermekAr]FT  </p>
                <div class='rating'>
                  <span class='csillag'>*</span>
                  <span class='csillag'>**</span>
                  <span class='csillag'>***</span>
                  <span class='csillag'>****</span>
                  <span class='csillag'>*****</span>
                </div>
              </div>
              <div class='arubutton'>
                <button type='button'>
                  <span>Kosárba Teszem</span>
                </button>
              </div>
            </div>
        </div>
";
}

?>

    </section>

    <aside>
      <?include('kategoria.php');?>
    </aside>



  </div>
</div>
</main>

<style>

div#kep img
{
  max-width        : 150px    ;
	max-height       : 150px    ;
  text-align: :center;
	vertical-align   : middle   ;
}

.egeszalap
{
margin-left: 400px;
margin-right: 400px;

}

div#aru{
  border: solid 1px;
 display: inline-block;
font-size: 20px;
width: 220px;
height: 350px;

}
div#kep
{
  max-width        : 50px    ;
  max-height       : 86px    ;
}
div#szovegs
{
    background-color: #ffcccc;
    height: 210px;
    width: 220px;
}
div#rating
{
  background-color: #d6f5d6;
    border: solid 1px;
}
div#arubutton
{
  background-color: #f9e6ff;
}
</style>
