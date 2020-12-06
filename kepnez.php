<!DOCTYPE html>
<?







$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;


$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);


$aroma =  mysqli_fetch_array(mysqli_query($adb , "

            Select TermekKep
            From termek
            Where TermekKat LIKE '%Aroma%'



"));



?>
<style>
	body
	{
		background-color : #444 ;
	}

	div#nagykep
	{
		width            : 1180px         ;
		height           :  640px         ;
		margin           : auto           ;
		text-align       : center         ;

		line-height      :  640px         ;

	}

	div#nagykep img
	{
		max-width        : 1180px         ;
		max-height       :  640px         ;
		border           : solid 2px #CCC ;
		padding          : 2px            ;

		vertical-align   : middle         ;
	}
</style>

<?
	$kepnev = $_GET['kepnev'] ;
	print "
		<div id='nagykep'>
			<img src='kep_kicsi/$kepnev.jpg'>
		</div>
	" ;
?>
