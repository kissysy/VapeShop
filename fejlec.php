
<!DOCTYPE html>

<?
print_r($_GET);
?>


<div>

<header>
<div class='fejlec'>

<!--  __________Reg/Login/Fiók, gombok__________  -->
  <div class='reg_gombok'>
    <div class='gombok'>

<?
/*-----Adatbázos csatlakozás------*/
$DateName   = "localhost";
$DateUser   = "root"     ;
$DatePass   = ""         ;
$DateTable  = "shop"     ;

$adb = mysqli_connect( $DateName , $DateUser , $DatePass , $DateTable);

@$lognev2 = $_SESSION['UserId'];
@$lognev = current(mysqli_fetch_array( mysqli_query($adb , "


                              Select  UserKerNev
                              FROM user
                              Where UserId='$lognev2'

                            ")));


/*-------Aromák Lekérdezése------*/
$aroma =  mysqli_query($adb , "

    Select *
    From termek
    Where TermekKat LIKE '%Aroma%'
    GROUP BY TermekMarka
                            ");

/*-----Nincs belépet Felhasználó------*/
if (@$_SESSION['UserId'] == ""){
    print'
    <a href="./?p=7">Regisztráó</a> |
    <a href="./?p=8">Belépés</a>';

  }

/*-----Felhasználó beléptetése/Ha admin------*/
else if( $_SESSION['UserStatusz'] == "1"){
    print'

        <div class="dropdown">
          <a href="./?p=12" class="dropbutton"><i class="	fas fa-user-tie"></i> Üdvözöljük '.$lognev.' <i class="fas fa-angle-down"></i></a>
          <div class="dropdown-content">
          <a href="./?p=12"> <i class="fas fa-angle-right"></i>Fiókom</a>
          <a href="./?p=17"> <i class="fas fa-angle-right"></i>Admin</a>
          <a href="./?p=11"> <i class="fas fa-angle-right"></i>Kilép</a>

          </div>
      </div>
      ';
  }

/*-----Felhasználó beléptetése/Ha NEM admin------*/
else {
    print'

        <div class="dropdown">
          <a href="./?p=12" class="dropbutton"><i class="	fas fa-user-tie"></i> Üdvözöljük '.$lognev.' <i class="fas fa-angle-down"></i></a>
          <div class="dropdown-content">
          <a href="./?p=12"> <i class="fas fa-angle-right"></i>Fiókom</a>
          <a href="./?p=11"> <i class="fas fa-angle-right"></i>Kilép</a>



          </div>
      </div>




      ';
  }

/*------Adatbázis bezárása-------*/
mysqli_close($adb);


?>






    </div>
  </div>
<div class='header-mid'>
<div class='nev'>
      <h1><a href="./?p=" >VapeGoat</a></h1>
</div>

      <div class='mid-right'>

      <form>



          <div class='keres'>
        <input  name='keresve' value='<?=@$_GET[keresve];?>' placeholder='keresés...'>

<?


  print"
        <a href='index.php?p=ker&okod=$_GET[keresve]'>
          <div class='keres-gomb'>

            <i class='fas fa-search'></i>

            </div></a>";







?>




</div>




    <div class='kosar-gomb'>
      <a href='index.php?p=kosar'>
        <div class='kosar'>
            <i class="fas fa-shopping-cart"></i> 0 Árucik
        </div>
      </a>
    </div>
      </form>
      </div>


</div>
</div>

<div class='menu'>

  <a href='./?'   > Főoldal		        </a>
  <a href='./?p=2'> Akciok            </a>

<!--  __________AROMÁK__________  -->
  <div class="dropdown_menu">
    <a href='./?p=aroma' class='menu_button'> Aromák  <i class="fas fa-angle-down"></i>          </a>
      <div class="dropdown-content_menu">
        <?
        while($soraroma = mysqli_fetch_array( $aroma ))
        {
          print"
            <a href='index.php?p=aroma&okod=$soraroma[TermekMarka]'><i class='fas fa-angle-right'></i>$soraroma[TermekMarka]</a>
          ";
       }
        ?>
      </div>
</div>

<!--  __________BÁZIS_________  -->
  <div class="dropdown_menu">
    <a href='./?p=bazis' class='menu_button'> Bázis       <i class="fas fa-angle-down"></i>      </a>
    <div class="dropdown-content_menu">
      <a href='#'><i class="fas fa-angle-right"></i>Nikotinos alapfolyadék</a>
      <a href='#'><i class="fas fa-angle-right"></i>Nikotinos mentes alapfolyadék</a>
      <a href='#'><i class="fas fa-angle-right"></i>Nikotinos booster/salt</a>
    </div>
</div>

<!--  __________KELLÉKEK_________  -->
  <div class="dropdown_menu">
    <a href='./?p=5' class='menu_button'> DIY Kellékek   <i class="fas fa-angle-down"></i>   </a>
    <div class="dropdown-content_menu">
      <a href='#'><i class="fas fa-angle-right"></i>Flakon </a>
      <a href='#'><i class="fas fa-angle-right"></i>Coilok/vatták</a>
      <a href='#'><i class="fas fa-angle-right"></i>Aroma 3</a>
      <a href='#'><i class="fas fa-angle-right"></i>Aroma 4</a>
    </div>
</div>

<!--  __________KÉSZÜLÉKEK_________  -->
  <div class="dropdown_menu">
    <a href='./?p=6' class='menu_button'> Vape készülékek  <i class="fas fa-angle-down"></i> </a>
    <div class="dropdown-content_menu">
      <a href='#'><i class="fas fa-angle-right"></i>Modok</a>
      <a href='#'><i class="fas fa-angle-right"></i>Tankok</a>
      <a href='#'><i class="fas fa-angle-right"></i>Aroma 3</a>
      <a href='#'><i class="fas fa-angle-right"></i>Aroma 4</a>
    </div>
</div>

  <a href='./?p=9'> Forum             </a>

</div>
</header>
</div>

<style>

/*------Fejléc-------*/
.fejlec{
  margin-left: 300px;

}

/*------VapeGoat cím-------*/
.nev a{
    color: black;
    text-decoration: none;
}

/*------Keresés mező-------*/
.keres{
  position: absolute;
  left:680px;
  top: 50px;
  border: solid 1px;
}
.keres input{
  width: 400px;
  height: 40px;
  font-size: 18px;
  border: none;
}
.keres-gomb{

  position: absolute;
  top:2px;
  right: 0px;
  width: 30px;
  height: 29px;
  font-size: 18px;
  cursor:pointer;
  border: none;
  margin-right: 10px;
  background-color: #005ce6;
  padding-top: 8px;
  padding-left: 10px;
}
.keres-gomb i{
  color: white;
}
.keres-gomb:hover{
  background-color: #3385ff;
}

/*------Kosár-------*/
.kosar{
  position: absolute;
  top: 50px;
  left: 1270px;
  width: 160px;
  height: 30px;
  font-size: 16px;
  background-color: white;
  border: solid 2px;
  border-color: #C0C0C0 ;
  cursor:pointer;
  text-align: center;
  margin-top: 10px;
  padding-top: 10px;
}
.kosar-gomb a{
  color: black;
  text-decoration: none;

}
.kosar-gomb div:hover{
  color: black;
  text-decoration: underline;
  font-size: 17px;
}
.header-mid{
  position: static;
}




/*------Menü sor-------*/
.menu a{
  display: inline-block;
  width: 200px;
  text-align: center;
  color: white;
  text-decoration: none;


}
.menu{


  background-color: #005ce6;
  text-align: center;
  font-size: 22px;

}
.dropdown_menu{
  position: relative;
  display: inline-block;

}
.dropdown-content_menu{
  display: none;
  position: absolute;
  background-color: #005ce6;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;

}
.dropdown-content_menu a {

  padding: 12px 16px;
  text-decoration: none;
  font-size: 19px;

}
.dropdown-content_menu a:hover{

   font-size: 22px;

}
.dropdown_menu:hover .dropdown-content_menu {
  display: block;
}
.menu_button {


  border: none;
  cursor: pointer;
}
.menu a:hover{
  background-color: #3385ff;
}







/*------Fiók menü-------*/
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgb(220 , 220 , 220);
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;

}
.dropdown-content a:hover{
   color: red;
   font-size: 18px;
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropbutton {
  color: black;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.reg_gombok{
  display: inline-block;
  font-size: 16px;
  margin-left: 950px;

  border:1px solid;
  border-color: gray;


}
.gombok a{
    display: inline-block;
    text-decoration: none;
    color: black;
}
.gombok{
    background-color: rgb(220 , 220 , 220);
    padding-left: 8px;
    padding-right:8px;
    padding-top: 3px;
    padding-bottom: 3px;
}












</style>
