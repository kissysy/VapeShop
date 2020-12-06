<main>
<div class='egeszalap'>

  <div id='belsolap'>
    <div class='ujtermek'>
      A legujabb termékek<br><hr>
    </div>

    <section>
      <div id='arulap'  width='100px' height='150px'>

<?

$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;


$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);


$aroma =  mysqli_query($adb , "

            Select *
            From termek
            ORDER BY TermekId DESC
            LIMIT 4





");



while($sor = mysqli_fetch_array($aroma))
{

  print"


        <div id='aru' style='margin-left: 30px; margin-bottom: 20px;'>
                <div id='kep'>
            <a href='kepnez.php?kepnev=$sor[TermekKep]'><img src='kep_kicsi/$sor[TermekKep].jpg'></a>
            </div>
            <div >
              <div id='szovegs'>
                <h4><a href='./?p=13'>$sor[TermekNev]</a></h4>
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
mysqli_close($adb);
?>
</section>
</div>
</div>
</div>
<style>


.ujtermek
{
  margin-top: 10px;
  font-size:21px;
  text-align: center;
  font-weight: bold;
}




div#kep img
{
  max-width        : 190px    ;
	max-height       : 150px    ;


}

.egeszalap
{
margin-left: 400px;
margin-right: 400px;

}

div#aru{
  border: solid 1px;
 display: inline-block;
font-size: 15px;
width: 220px;
height: 385px;

}
div#kep
{
  max-height: 100px;
margin-bottom: 50px;
  display: block;
margin-left: auto;
margin-right: auto;
width: 65%;
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
