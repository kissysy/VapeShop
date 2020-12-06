
<div id='reg_form'>

<h1>Regisztráció</h1>




<form method='post'
	    enctype='multipart/form-data'
	    target='test'
      action='reg_ir.php'>

<div class='reg_inputs'>
		<span class=reg>Email cím:</span>
	   <input type='email' name='emailcim'><br>

    <span class=reg>Jelszó:</span>
  	<input type='password' name='pass'><br>

    <span class=reg>Jelszó mégegyszer:</span>
    <input type='password' name='pass2'><br>

    <span class=reg>Vezetéknév:</span>
    <input type='text' name='veznev'><br>

    <span class=reg>Keresztnév:</span>
    <input type='text' name='kernev'><br>



    <span class=reg>Születési dátum:</span>
    <input type='date' name='szulev'><br>

</div>


<p><input type="checkbox" name='elfogad'>
Hozzójárulok, hogy a VapeGoat az itt megadott személyes adataimat a(z)<br>
<a href='./?p=10'>Vásárlási feltételek (ászf)</a> oldalon rögzített, regisztrációs céllal kezelje.</p><br>

<div id='RegGomb'>
    <input type='submit' name='RegSubmit' value='Regisztráció' class='button1'><br>
</div>

    <a href="./?p=8" class='vanfiok'>Már van fiókod?</a>



</form>
</div>
<style>
div#reg_form form
{
font-size: 20px;
padding-left: 700px;
display:inline-block;
text-align: left;



}
.reg_inputs
{
	padding-left: 90px;
}
div#reg_form p
{
display:inline-block;

}

input.button1
{
font-size: 18px;

}
div#RegGomb
{
	margin-left: 225px;
	margin-bottom: 10px;

}
span.reg{

  display:inline-block;
  width: 200px;
  height: 35px;
}
div#reg_form h1
{
	margin-left: 890px;
}
.vanfiok
{
	margin-left: 212px;
}
















div#RegGomb
{
	margin-left: 200px;
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
