<?php
/**
 * Created by PhpStorm.
 * User: Melih
 * Date: 17-4-2019
 * Time: 13:19
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<form action="register.php">
    <div class="container">
        <label  for="voornaam"></label>
        <input  type="text"  placeholder="Voornaam" name="voornaam" required>


        <label for="tussenvoegsel"></label>
        <input type="text" placeholder="Tussenvoegsel" name="tussenvoegsel" required>


        <label for="achternaam"></label>
        <input type="text" placeholder="Achternaam" name="achternaam" required><br>

        <label  for="postcode"></label>
        <input class="postcode" type="text" placeholder="Postcode" name="postcode" required>

        <label  for="huisnummer"></label>
        <input class="postcode" type="text" placeholder="Huisnummer" name="huisnummer" required> <br>

        <label  for="woonplaats"></label>
        <input class="postcode" type="text" placeholder="Woonplaats" name="woonplaats" required>

        <label  for="straatnaam"></label>
        <input class="postcode" type="text" placeholder="Straatnaam" name="straatnaam" required> <br>

        <label  for="geboortedatum"></label>
        <input class="postcode" type="text" placeholder="Geboortedatum" name="geboortedatum" required>

        <label  for="email"></label>
        <input class="postcode" type="text" placeholder="Email" name="email" required> <br>

        <label for="wachtwoord">
        <input class="postcode" type="password" placeholder="Wachtwoord" name="wachtwoord" required>

            <label for="wachtwoord2">
                <input class="postcode" type="password" placeholder="Wachtwoord2" name="wachtwoord2" required> <br>
                <p id="rol">Rol:</p >

                <input id="RADIO"  type="radio"  name="gender" value="participant"> <font size="5" color="gray"> Participant </font> <br>

                <input id="RADIO2" type="radio" name="gender" value="Organizer"> <font size="5" color="gray"> Organizer </font><br>

                <label  for="Bedrijfsnaam"></label>
                <input class="postcode" type="text" placeholder="Bedrijfsnaam" name="Bedrijfsnaam" required>

                <label  for="Email Bedrijf"></label>
                <input class="postcode" type="text" placeholder="Email Bedrijf" name="Email Bedrijf" required> <br>

                <label  for="Postcode Bedrijf "></label>
                <input class="postcode" type="text" placeholder="Postcode Bedrijf" name="Postcode Bedrijf" required>

                <label  for="Huisnummer Bedrijf"></label>
                <input class="postcode" type="text" placeholder="Huisnummer Bedrijf" name="Huisnummer Bedrijf" required> <br>

                <label  for="Plaats Bedrijf "></label>
                <input class="postcode" type="text" placeholder="Plaats Bedrijf" name="Plaats Bedrijf" required>

                <label  for=" Straat Bedrijf"></label>
                <input class="postcode" type="text" placeholder="Straat Bedrijf" name="Straat Bedrijf" required> <br>






                <button type="submit" id="registerbtn"><font  size="5" color="white"> Register </font></button>
    </div>

</form>
</body>
</html>
