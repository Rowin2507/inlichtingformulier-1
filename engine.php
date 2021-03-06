<?php

// ---------- Beschikbare variablen ----------- //

// $naam_leerling = Naam van de betreffende leerling.
// $gebdatum_leerling = Geboortedatum van de betreffende leerling.
// $opleiding_niveau = Niveau van de opleiding die de leerling volgt.

// $vmbo_niveau = Welk niveau VMBO volgt de leerling.
// $vmbo_sector = Welke VMBO sector volgt de leerling.
// $mvi_keuzevak = Heeft de leerling een MVI keuzevak gedaan?
// $vmbo_diploma = Wanneer heeft de leerling zijn VMBO diploma gehaald.

// $havo_diploma = Wanneer heeft de leerling zijn HAVO diploma gehaald.
// $havo_overgang_van = Overgangsbewijs van jaar.
// $havo_overgang_naar = Overgangsbewijs naar jaar.

// $vwo_diploma = Wanneer heeft de leerling zijn VWO diploma gehaald.
// $vwo_overgang_van = Overgangsbewijs van jaar.
// $vwo_overgang_naar = Overgangsbewijs naar jaar.

// $mbo_niveau = Welk niveau MBO heeft de leerling gevolgd.
// $mbo_leerweg = Welke leerweg volgt de leerling.

// $anders_opleiding = Welke andere opleiding?
// $anders_toelichting = Toelichting bij andere opleiding.

// $concentratie = Goed / Voldoende / Matig / Onvoldoende.
// $werktempo = Goed / Voldoende / Matig / Onvoldoende.
// $zelfstandig = Goed / Voldoende / Matig / Onvoldoende.
// $motivatie = Goed / Voldoende / Matig / Onvoldoende.
// $wilskracht = Goed / Voldoende / Matig / Onvoldoende.
// $communicatief = Goed / Voldoende / Matig / Onvoldoende.
// $sociaal = Goed / Voldoende / Matig / Onvoldoende.

// $skills_toelichting = Toelichting bij de antwoorden.

// $speciaal_onderwijs = Ja / Nee.
// $dyslexie = Ja / Nee.
// $dyscalculie = Ja / Nee.
// $adhd = Ja / Nee.
// $slechthorendheid = Ja / Nee.
// $suikerziekte = Ja / Nee.
// $zat = Ja / Nee.
// $overige = Ja / Nee.

// $uw_naam = Naam van de invuller.
// $uw_email = E-mail adres van de invuller.
// $uw_geslacht = Geslacht van de invuller.
// $uw_functie = Functie van de invuller.
// $uw_telefoonnummer = Telefoonnummer van de invuller.

// $contact_gewenst = Is telefonisch contact gewenst?

// $naam_school = Naam van de school.
// $plaats_school = Plaats van de school.

// -------- Beschikbare variablen einde --------- //

  error_reporting(0);

// Formulier backend.

// XSS hebben we geen zin in!
function veilig($input) {
  $input_gefilterd = filter_var($_POST["$input"], FILTER_SANITIZE_STRING);
  return $input_gefilterd;
}

  // Stap 1.
  $naam_leerling = veilig('naam_leerling');
  $gebdatum_leerling = veilig('gebdatum_leerling');

  // Stap 2.
  $opleiding_niveau = veilig('opleiding_niveau');

  // -------------- VMBO ----------------//

  $vmbo_niveau = $_POST['vmbo_niveau'];

  if(in_array('VMBO-BB', $vmbo_niveau)){
    $vmbo_niveau = "VMBO BB";
  } elseif(in_array('VMBO-GL', $vmbo_niveau)){
    $vmbo_niveau = "VMBO GL";
  } elseif(in_array('VMBO-KB', $vmbo_niveau)){
    $vmbo_niveau = "VMBO KB";
  } elseif(in_array('VMBO-TL', $vmbo_niveau)){
    $vmbo_niveau = "VMBO TL";
  } elseif(in_array('VMBO-LWT', $vmbo_niveau)){
    $vmbo_niveau = "VMBO LWT";
  } elseif(in_array('VMBO-LWOO', $vmbo_niveau)){
    $vmbo_niveau = "VMBO LWOO";
  }

  $vmbo_sector = $_POST['vmbo_sector'];

  if(in_array('economie', $vmbo_sector)){
    $vmbo_sector = "Economie";
  } elseif(in_array('landbouw', $vmbo_sector)){
    $vmbo_sector = "Landbouw";
  } elseif(in_array('techniek', $vmbo_sector)){
    $vmbo_sector = "Techniek";
  } elseif(in_array('zorgwelzijn', $vmbo_sector)){
    $vmbo_sector = "Zorg/Welzijn";
  }

  $mvi_keuzevak = $_POST['mvi_keuzevak'];

  if(in_array('ja', $mvi_keuzevak)){
    $mvi_keuzevak = "Ja";
  } elseif(in_array('nee', $mvi_keuzevak)){
    $mvi_keuzevak = "Nee";
  }

  $vmbo_diploma = veilig('vmbo_diploma');

  // -------------- HAVO -----------------//

  $havo_diploma = veilig('havo_diploma');
  $havo_overgang_van = veilig('havo_overgang_van');
  $havo_overgang_naar = veilig('havo_overgang_naar');

  // -------------- VWO ------------------//

  $vwo_diploma = veilig('vwo_diploma');
  $vwo_overgang_van = veilig('vwo_overgang_van');
  $vwo_overgang_naar = veilig('vwo_overgang_naar');

  // -------------- MBO ------------------//

  $mbo_niveau = $_POST['mbo_niveau'];

  if(in_array('niveau1', $mbo_niveau)){
    $mbo_niveau = "Niveau 1";
  } elseif(in_array('niveau2', $mbo_niveau)){
    $mbo_niveau = "Niveau 2";
  } elseif(in_array('niveau3', $mbo_niveau)){
    $mbo_niveau = "Niveau 3";
  } elseif(in_array('niveau4', $mbo_niveau)){
    $mbo_niveau = "Niveau 4";
  }

  $mbo_leerweg = $_POST['mbo_leerweg'];

  if(in_array('bol', $mbo_leerweg)){
    $mbo_leerweg = "BOL";
  } elseif(in_array('bbl', $mbo_leerweg)){
    $mbo_leerweg = "BBL";
  }

  // -------------- Anders ---------------//

  $anders_opleiding = veilig('anders_opleiding');
  $anders_toelichting = veilig('anders_toelichting');

  // Stap 3.

  $concentratie = $_POST['concentratie'];

  if(in_array('goed', $concentratie)){
    $concentratie = "Goed";
  } elseif(in_array('voldoende', $concentratie)){
    $concentratie = "Voldoende";
  } elseif(in_array('matig', $concentratie)){
    $concentratie = "Matig";
  } elseif(in_array('onvoldoende', $concentratie)){
    $concentratie = "Onvoldoende";
  }

  $werktempo = $_POST['werktempo'];

  if(in_array('goed', $werktempo)){
    $werktempo = "Goed";
  } elseif(in_array('voldoende', $werktempo)){
    $werktempo = "Voldoende";
  } elseif(in_array('matig', $werktempo)){
    $werktempo = "Matig";
  } elseif(in_array('onvoldoende', $werktempo)){
    $werktempo = "Onvoldoende";
  }

  $zelfstandig = $_POST['zelfstandig'];

  if(in_array('goed', $zelfstandig)){
    $zelfstandig = "Goed";
  } elseif(in_array('voldoende', $zelfstandig)){
    $zelfstandig = "Voldoende";
  } elseif(in_array('matig', $zelfstandig)){
    $zelfstandig = "Matig";
  } elseif(in_array('onvoldoende', $zelfstandig)){
    $zelfstandig = "Onvoldoende";
  }

  $motivatie = $_POST['motivatie'];

  if(in_array('goed', $motivatie)){
    $motivatie = "Goed";
  } elseif(in_array('voldoende', $motivatie)){
    $motivatie = "Voldoende";
  } elseif(in_array('matig', $motivatie)){
    $motivatie = "Matig";
  } elseif(in_array('onvoldoende', $motivatie)){
    $motivatie = "Onvoldoende";
  }

  $wilskracht = $_POST['wilskracht'];

  if(in_array('goed', $wilskracht)){
    $wilskracht = "Goed";
  } elseif(in_array('voldoende', $wilskracht)){
    $wilskracht = "Voldoende";
  } elseif(in_array('matig', $wilskracht)){
    $wilskracht = "Matig";
  } elseif(in_array('onvoldoende', $wilskracht)){
    $wilskracht = "Onvoldoende";
  }

  $communicatief = $_POST['communicatief'];

  if(in_array('goed', $communicatief)){
    $communicatief = "Goed";
  } elseif(in_array('voldoende', $communicatief)){
    $communicatief = "Voldoende";
  } elseif(in_array('matig', $communicatief)){
    $communicatief = "Matig";
  } elseif(in_array('onvoldoende', $communicatief)){
    $communicatief = "Onvoldoende";
  }

  $sociaal = $_POST['sociaal'];

  if(in_array('goed', $sociaal)){
    $sociaal = "Goed";
  } elseif(in_array('voldoende', $sociaal)){
    $sociaal = "Voldoende";
  } elseif(in_array('matig', $sociaal)){
    $sociaal = "Matig";
  } elseif(in_array('onvoldoende', $sociaal)){
    $sociaal = "Onvoldoende";
  }

  $skills_toelichting = veilig('skills_toelichting');

  // Stap 4.

  $speciaal_onderwijs = $_POST['speciaal_onderwijs'];

  if(in_array('ja', $speciaal_onderwijs)){
    $speciaal_onderwijs = "Ja";
  } elseif(in_array('nee', $speciaal_onderwijs)){
    $speciaal_onderwijs = "Nee";
  }

  $dyslexie = $_POST['dyslexie'];

  if(in_array('ja', $dyslexie)){
    $dyslexie = "Ja";
  } elseif(in_array('nee', $dyslexie)){
    $dyslexie = "Nee";
  }

  $dyscalculie = $_POST['dyscalculie'];

  if(in_array('ja', $dyscalculie)){
    $dyscalculie = "Ja";
  } elseif(in_array('nee', $dyscalculie)){
    $dyscalculie = "Nee";
  }

  $adhd = $_POST['adhd'];

  if(in_array('ja', $adhd)){
    $adhd = "Ja";
  } elseif(in_array('nee', $adhd)){
    $adhd = "Nee";
  }

  $slechthorendheid = $_POST['slechthorendheid'];

  if(in_array('ja', $slechthorendheid)){
    $slechthorendheid = "Ja";
  } elseif(in_array('nee', $slechthorendheid)){
    $slechthorendheid = "Nee";
  }

  $suikerziekte = $_POST['suikerziekte'];

  if(in_array('ja', $suikerziekte)){
    $suikerziekte = "Ja";
  } elseif(in_array('nee', $suikerziekte)){
    $suikerziekte = "Nee";
  }

  $zat = $_POST['zat'];

  if(in_array('ja', $zat)){
    $zat = "Ja";
  } elseif(in_array('nee', $zat)){
    $zat = "Nee";
  }

  $overige = $_POST['overige'];

  if(in_array('ja', $overige)){
    $overige = "Ja";
  } elseif(in_array('nee', $overige)){
    $overige = "Nee";
  }

  // Afronden 1.

  $uw_naam = veilig('uw_naam');
  $uw_voornaam = explode(' ', $uw_naam);
  $uw_voornaam = $uw_voornaam[0];

  $uw_email = veilig('uw_email');

  // Afronden 2.

  $uw_geslacht = $_POST['uw_geslacht'];

  if(in_array('man', $uw_geslacht)){
    $uw_geslacht = "Man";
  } elseif(in_array('vrouw', $uw_geslacht)){
    $uw_geslacht = "Vrouw";
  }

  // Afronden 3.

  $uw_functie = veilig('uw_functie');
  $naam_school = veilig('naam_school');
  $plaats_school = veilig('plaats_school');

  // Afronden 4.

  $uw_telefoonnummer = veilig('uw_telefoonnummer');

  $contact_gewenst = $_POST['contact_gewenst'];

  if(in_array('ja', $contact_gewenst)){
    $contact_gewenst = "Ja";
  } elseif(in_array('nee', $contact_gewenst)){
    $contact_gewenst = "Nee";
  }

// Ingevulde formulier gegevens laten zien.
  echo '<p><div><strong>Gegevens leerling</strong> </div></p>';
  echo '<div>Naam leerling: ' . $naam_leerling . '</div>';
  echo '<div>Geboortedatum leerling: ' . $gebdatum_leerling . '</div><div></div>';

  echo '<div>Opleidingsniveau: ' . strtoupper($opleiding_niveau) . '</div>';

  if($opleiding_niveau == "vmbo") {
    echo '<div>VMBO Niveau: ' . $vmbo_niveau . '</div>';
    echo '<div>VMBO Sector: ' . $vmbo_sector . '</div>';
    echo '<div>MVI keuzevak: ' . $mvi_keuzevak . '</div>';
    echo '<div>VMBO Diploma (Behaald/Te behalen op): ' . $vmbo_diploma . '</div>';
  } elseif($opleiding_niveau == "havo") {
    echo '<div>HAVO Diploma (Behaald/Te behalen op): ' . $havo_diploma . '</div>';
    echo '<div>HAVO Overgang van: Leerjaar ' . $havo_overgang_van . '</div>';
    echo '<div>HAVO Overgang naar: Leerjaar ' . $havo_overgang_naar . '</div>';
  } elseif($opleiding_niveau == "vwo") {
    echo '<div>VWO Diploma (Behaald/Te behalen op): ' . $vwo_diploma . '</div>';
    echo '<div>VWO Overgang van: Leerjaar ' . $vwo_overgang_van . '</div>';
    echo '<div>VWO Overgang naar: Leerjaar ' . $vwo_overgang_naar . '</div>';
  } elseif($opleiding_niveau == "mbo") {
    echo '<div>MBO Niveau: ' . $mbo_niveau . '</div>';
    echo '<div>MBO Leerweg: ' . $mbo_leerweg . '</div>';
  } elseif($opleiding_niveau == "anders") {
    echo '<div>Opleiding: ' . $anders_opleiding . '</div>';
    echo '<div>Toelichting: ' . $anders_toelichting . '</div>';
  }

  echo '<p><div><strong>Indruk van de leerling</strong> </div></p>';

  echo '<div>Concentratie: ' . $concentratie . '</div>';
  echo '<div>Werktempo: ' . $werktempo . '</div>';
  echo '<div>Zelfstandig: ' . $zelfstandig . '</div>';
  echo '<div>Motivatie: ' . $motivatie . '</div>';
  echo '<div>Wilskracht: ' . $wilskracht . '</div>';
  echo '<div>Communicatief: ' . $communicatief . '</div>';
  echo '<div>Sociaal: ' . $sociaal . '</div><div></div>';

  if(!empty($skills_toelichting)) {
      echo '<div><strong>Toelichting:</strong> ' . $skills_toelichting . '</div><div></div>';
  }

  echo '<p><div><strong>Bijzonderheden</strong> </div>  </p>';
  echo '<div>Speciaal onderwijs: ' . $speciaal_onderwijs . '</div>';
  echo '<div>Dyslexie: ' . $dyslexie . '</div>';
  echo '<div>Dyscalculie: ' . $dyscalculie . '</div>';
  echo '<div>ADHD: ' . $adhd . '</div>';
  echo '<div>Slechthorendheid: ' . $slechthorendheid . '</div>';
  echo '<div>Suikerziekte: ' . $suikerziekte . '</div>';
  echo '<div>Besproken in de ZAT: ' . $zat . '</div>';
  echo '<div>Overige: ' . $overige . '</div>';

  echo '<p><div><strong>Gegevens Decaan/Mentor</strong> </div></p>';
  echo '<div>Naam: ' . $uw_naam . '</div>';
  echo '<div>Functie: ' . $uw_functie . '</div>';
  echo '<div>E-mail adres: ' . $uw_email . '</div>';
  echo '<div>Geslacht: ' . $uw_geslacht . '</div>';
  echo '<div>Telefoonnummer: ' . $uw_telefoonnummer . '</div>';
  echo '<div>Telefonisch contact gewenst: ' . $contact_gewenst . '</div>';

  echo '<p><div><strong>School informatie</strong></div></p>';
  echo '<div>Naam van de school: ' . $naam_school . '</div>';
  echo '<div>Plaats van de school: ' . $plaats_school . '</div>';


 ?>
