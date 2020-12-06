<h1>KERESET TERMÉK</h1>
<?

$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;

$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);


if(isset($_GET['okod']))
{

  $keresve = $_GET['okod'];

  $minta = "%" . $keresve . "%";
}
if( $keresve == " " )
{
  $talalat = mysqli_query($adb , "


                    SELECT *
                    FROM (
                        SELECT
                        FROM termek
                        Where TermekKat LIKE '%Aroma%'
                        ORDER BY RAND()
                        LIMIT 0,15
                      ) q
                    ORDER BY TermekKat




  ");
}

print"talált elemek <br><br>";

if( msqli_num_rows($talalat)>0 )
{
  while($talalatsor = mysqli_fetch_array($talalat))
  {
    print"

    <div id='aru' style='margin-left: 35px; margin-bottom: 20px;'>
        <div id='kep'>
    <a href='kepnez.php?kepnev=$talalatsor[TermekKep]'><img src='kep_kicsi/$talalatsor[TermekKep].jpg'></a>
    </div>
    <div >
      <div id='szovegs'>
        <h4><a href='./?p=13'>$adatsor[TermekNev]</a></h4>
        <p>$talalatsor[TermekLeir]</p>
        <p class='price'> $talalatsor[TermekAr]FT  </p>
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






/*
  while ( $adatsor = mysqli_fetch_array($adatok) )
  {
    print"

              <div id='aru' style='margin-left: 35px; margin-bottom: 20px;'>
                  <div id='kep'>
              <a href='kepnez.php?kepnev=$adatsor[TermekKep]'><img src='kep_kicsi/$adatsor[TermekKep].jpg'></a>
              </div>
              <div >
                <div id='szovegs'>
                  <h4><a href='./?p=13'>$adatsor[TermekNev]</a></h4>
                  <p>$adatsor[TermekLeir]</p>
                  <p class='price'> $adatsor[TermekAr]FT  </p>
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






*/
mysqli_close($adb);

?>
