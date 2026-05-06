<?php 
session_start(); ?>

<h1>Galgje</h1>

<form method="post" action="galgje.php">
    <input type="text" name="woord" placeholder="Voer een woord in">
    <button type="submit">Start met eigen woord</button>
</form>

<form method="post" action="galgje.php">
    <button type="submit" name="random">Random woord</button>
</form>
