<h1>Új termék feltöltés</h1>
<div>
  <form method='post'
        action='termek_fel_ir.php'
        enctype='multipart/form-data'>



        <span class='ter'>    Név:</span>
        <input type='text' name='ter-nev' ><br>

        <span class='ter'>    Márka:</span>
        <select name='ter-marka'>
          <option disabled=disable selected>---Válassz!--- </option>

          <optgroup label='Liquid'>
            <option value="Al Carlo"    > Al Carlo      </option>
            <option value="Cuckoo"      > Cuckoo        </option>
            <option value="Coffee Mill" > Coffee Mill   </option>
            <option value="Chill Pill"  > Chill Pill    </option>
            <option value="TJuice"      > TJuice        </option>
            <option value="Vampire Vape"> Vampire Vape  </option>
         </optgroup>

         <optgroup label='Nem Liquid'>
          <option value="fasz1"> marka1</option>
          <option value="5"> marka1</option>
        </optgroup>
        </select><br>

        <span class='ter'>    Kategoria:</span>
        <select name='ter-kat'>
          <option disabled=disable selected>---Válassz!--- </option>

          <option value="Aroma"> Aroma</option>
          <option value="Mod">   Mod</option>
          <option value="Tank">  Tank</option>
          <option value="Vatta"> Vatta</option>
          <option value="Alap">  Alaplé</option>

        </select><br>




        <span class='ter'>    Leirás:</span>
        <textarea cols=80 rows=10 name='ter-leir'></textarea><br>

        <span class='ter'>    Ár:</span>
        <input type='number' name='ter-ar'><br>

        <span class='ter'>    Mennyiség:</span>
        <input type='number' name='ter-mennyi'><br>

        <span class='ter'>    Kép:</span>
        <input type='file' name='ter-kep'><br>

        <input type='submit' name='submit' value='Feltöltés' style="width: 150px; height: 40px; font-size: 20px;">









  </form>
</div>
<style>
.ter
{
  display: inline-block;
  width: 150px;
  height: 35px;
  font-size: 22px;
}

</style>
