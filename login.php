<div id='log_form'>
<h1>Belépés</h1>





<form method='post'
	    enctype='multipart/form-data'
	    target='test'
      action='log_ir.php'>

  <span class='log'>    E-mail cím:</span>
  <input type="text" name='nickname'><br>
  <span class='log'>    Jelszó:</span>
  <input type="password" name='password'><br>






<span class='log'> Nem vagyok Robot!</span>
<?

$szam1=rand(1,9);
$szam2=rand(1,9);


    print "$szam1+$szam2=" ;

    $_SESSION['c'] = $szam1+$szam2;

?>



  <input name='code'><br>
	<div class='forgetpass'>
	<a href='./?p=18'>	Elfelejtetted a jelszót?
	</div>
<div id='LogGomb'>
  <input type='submit' value="Belépés" name='login' class='button1'><br>
</div>

  <a href="./?p=7" class='nincsfiok'>Még nincs fiókod?</a>

</form>
</div>











<style>
div#log_form form
{
  font-size: 20px;
  padding-left: 700px;
  display: inline-block;
  text-decoration: none;
}
span.log
{
  display:inline-block;
  width: 200px;
  height: 35px;
}
div#log_form h1
{
	margin-left: 890px;
}
div#LogGomb
{
	margin-left: 200px;
  padding-bottom: 10px;
}
.nincsfiok
{
  margin-left: 185px;
}





.button1 {
	box-shadow: 3px 4px 0px 0px #899599;
	background:linear-gradient(to bottom, #ededed 5%, #bab1ba 100%);
	background-color:#ededed;
	border-radius:15px;
	border:1px solid #d6bcd6;
	display:inline-block;
	cursor:pointer;
	color:#3a8a9e;
	font-family:Arial;
	font-size:17px;
	padding:7px 25px;
	text-decoration:none;
	text-shadow:0px 1px 0px #e1e2ed;
}
.button1 {
	background:linear-gradient(to bottom, #bab1ba 5%, #ededed 100%);
	background-color:#bab1ba;
}
.button1 {
	position:relative;
	top:1px;
}
</style>
