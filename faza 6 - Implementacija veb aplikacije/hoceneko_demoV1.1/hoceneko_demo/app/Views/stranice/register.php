<?php
/**
 * 
 * @author Nikola Milicevic 0387/17
 * @coauthor Aleksandra Bogicevic 0390/17
 */
?>

<!-- main deo gde se ubacuju stranice -->
 <div class="col-sm-7 col-md-7 col-lg-7 main">
     
<?php
if(isset($poruka)) echo "<font color='red'>$poruka</font><br><br>";
if(isset($errors)) echo "<font color='red'>$errors</font><br><br>";
echo form_open_multipart("Gost/registerSubmit","method=post");

echo form_label('Korisnicko ime', 'korisnicko_ime');
echo form_input(['name' => 'korisnicko_ime']);

echo("<br>");
echo form_label('Lozinka', 'lozinka');
echo form_password(['name' => 'lozinka']);
echo("<br>");
echo form_label('Potvrdite lozinku', 'lozinka_p');
echo form_password(['name' => 'lozinka_p']);
echo("<br>");
echo form_label('Ime', 'ime');
echo form_input(['name' => 'ime']);

echo("<br>");
echo form_label('Prezime', 'prezime');
echo form_input(['name' => 'prezime']);

echo("<br>");
echo form_label('E-mail', 'e_mail');
echo form_input(['name' => 'e_mail']);

echo("<br>");
echo form_label('Pol', 'pol');
$options = [
        'muski'  => 'muski',
        'zenski'    => 'zenski',
];

echo form_dropdown('pol',$options,'muski');
echo("<br>");
echo form_label('Datum rodjenja', 'datum_rodjenja');
echo("<input type='date' name='datum_rodjenja'>");

echo "<br>Opis:<br/>";
echo form_textarea("opis",set_value("opis"), ['maxlength'=> 250]);
echo("<br>");
echo "Profilna slika:<br>";

echo "<input type='file' name='profilna_slika' />";
echo("<br>");

echo form_submit('registruj_se', 'Registruj se');
echo form_close();




?>
     
 </div>