<?
$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;


$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);




if(isset($_GET['okod']))
{

	$s = $_GET['okod'];

	$aru = mysqli_fetch_array(mysqli_query($adb , "

	            Select *
	            From termek
	            Where TermekNev LIKE '%$s%'



	"));









print"
<div class='egeszlap'>
	<div class='arulap'>
		<div class='aru-top'>

		<div class='aru-top-mid'>
			<div class='aru-top-name'>
		<p class='nev'>Név: $aru[TermekNev]</p>
			 </div>
			 <div class='aru-top-price'>
			 </div>
		</div>

			 <div class='aru-top-left'>
			<div class='aru-top-image' >
		  <a href='kepnez.php?kepnev=$aru[TermekKep]'>	<img src='kep_kicsi/$aru[TermekKep].jpg'></a>
			</div>
		</div>
		</div>

		<div class='aru-bottom'>
		</div>
</div>
</div>











";
}
mysqli_close($adb);
?>
<style>
.arulap
{
	margin-top: 59px;
margin-left: 400px;
margin-right: 400px;

}
.aru-top-mid
{
	position: absolute;
	left:760px;
	top:200px;
	border: solid 1px;
	width: 450px;
	height: 350px;
}
.aru-top-name p.nev
{

}
.aru-top-name p.ter-nev
{
	font-size: 20px;
}


.aru-top-left
{
	position: relative;
}
.aru-top-image
{

	width: 350px;
  height: 350px;

}
.aru-top-image img
{
	max-width: 350px;
	max-height: 350px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
