<?php
/**
 * Created by IntelliJ IDEA.
 * User: mtheilen
 * Date: 10.12.2015
 * Time: 14:47
 */

$karte = ['Pizza' => [
    'Margherita' => [
        'normal' => 4,
        'groß' => 6],

    'Funghi' => [
        'normal' => 5,
        'groß' => 7],

    'Salami' => [
        'normal' => 5.5,
        'groß' => 7.5],

    'Regina' => [
        'normal' => 5.5,
        'groß' => 7.5],

    'Hawaii' => [
        'normal' => 6.5,
        'groß' => 8.5]
],
    'Getränke' => [
        'Cola' => [
            '1l' => 2],

        'Fanta' => [
            '1l' => 2],

        'Spezi' => [
            '1l' => 2],

        'Wasser' => [
            '1l' => 1.5]
    ]

];


?>

<form method="post">
    <input type="radio" value="Margherita" name="pizza"/>Margherita <br/>
    <input type="radio" value="Funghi" name="pizza"/>Funghi <br/>
    <input type="radio" value="Salami" name="pizza"/>Salami <br/>
    <input type="radio" value="Regina" name="pizza"/>Regina <br/>
    <input type="radio" value="Hawaii" name="pizza" checked/>Hawaii <br/>

    <br/>
    <input type="radio" value="normal" name="größe"/>normal
    <input type="radio" value="groß" name="größe" checked/>groß

    <br/><br/>

    <input type="checkbox" value="Cola" name="getränk[]"/>Cola
    <input type="checkbox" value="Fanta" name="getränk[]"/>Fanta
    <input type="checkbox" value="Spezi" name="getränk[]"/>Spezi
    <input type="checkbox" value="Wasser" name="getränk[]"/>Wasser

    <br/><br/>


    <input type="text" name="tischnummer" placeholder="Tischnummer"/><br/>
    <br/>
    <button type="submit">Bestellen</button>

    <hr/>

    <?php
    if (isset($_POST['tischnummer'])) {
        $preis = 0;
        echo 'Pizza: ' . $_POST['pizza'] . ', ' . $_POST['größe'] . ', ' . $karte['Pizza'][$_POST['pizza']][$_POST['größe']] . ' €';
        $preis += $karte['Pizza'][$_POST['pizza']][$_POST['größe']];

        echo '<br>';
        if (isset($_POST['getränk'])) {
            foreach ($_POST['getränk'] as $value) {
                $preis += $karte['Getränke'][$value]['1l'];
                echo $value . ' ' . $karte['Getränke'][$value]['1l'] . ' €<br>';
            }
        }

        echo 'Gesamtpreis: ' . $preis . ' €<br>';
        echo 'Tischnummer: ' . $_POST['tischnummer'];


    }

    ?>


</form>
