<h1>ADMIN FELÜLET</h1>


<?
$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;



$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);

$regszam = current(mysqli_fetch_array( mysqli_query($adb ,  "

Select Count(UserId)
From user


")));
print "Regisztrált emberek száma: " . $regszam ."<br>";






mysqli_close($adb);
?>
<a href="./?p=20"><button>Termék feltöltés</a></button>

<i class='fas fa-search'><input type='submit' i class='fas fa-search' ></i>
