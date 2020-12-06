
<div>
  <div class='forgetpass-main'>
    <div class='forgetpass-cim'>
      <h2>Elfelejtetted a jelszavad?</h2>
    </div>
    <div class='forgetpass-text'>
      Írja be a fiókjához tartozó e-mail címet. Majd kattintson a Tovább gombra, és már postázzuk is Önnek e-mailben az új jelszót.
    </div>
    <div class='forgetpass-inputs'>
      <form method='post'
            action=''>

        <span class='forgetpass-szoveg'>Az ön e-mail címe:</span>
          <input type='text' name='forgetpass-email'><br>

      </form>
    </div>
    <div class='forgetpass-buttons'>
      <form method='get'
            action=''>

    <a href='./?p=8'>  <button>Vissza</button></a>
      <input type='submit' name='submit' value='Tovább'>

      <?
      $karakter = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789" ;
      $str = "" ;
      for( $i=1; $i<=5; $i++ )   $str .= substr( $karakter, mt_rand(0,61), 1 ) ;
      print $str;


      ?>

    </div>
  </div>
</div>
