<?


$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;


$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);


$aromak =  mysqli_query($adb , "

            Select *
            From termek
            Where TermekKat LIKE '%Aroma%'
            ORDER BY TermekMarka ASC





");


?>

<main>
<div class='egeszalap'>

  <div id='belsolap'>

    <section>


      <div id='arulap'  width='100px' height='150px'>

<h2>Aromák</h2>
<hr>
<?













if(isset($_GET['okod']))
{

  $s = $_GET['okod'];

  $aroma =  mysqli_query($adb , "

              Select *
              From termek
              Where TermekMarka LIKE '%$s%'
              ORDER BY TermekMarka ASC





  ");




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
}
else {

  while($sorok = mysqli_fetch_array( $aromak ))
  {

    print"


            <div id='aru' style='margin-left: 35px; margin-bottom: 20px;'>
                <div id='kep'>
            <a href='kepnez.php?kepnev=$sorok[TermekKep]'><img src='kep_kicsi/$sorok[TermekKep].jpg'></a>
            </div>
            <div >
              <div id='szovegs'>
                <h4><a href='index.php?p=aru&okod=$sorok[TermekNev]'>$sorok[TermekNev]</a></h4>
                <p>$sorok[TermekLeir]</p>
                <p class='price'> $sorok[TermekAr]FT  </p>
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
}


?>

    </section>

    <aside>
      <?include('kategoria.php');
      mysqli_close($adb);?>
    </aside>



  </div>
</div>
</main>

<style>

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
text-decoration: none;

}
div#aru:hover
{
  border: solid 2px;
  border-color: blue;
}
div#aru a
{
  text-decoration: none;
  color:black;
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
