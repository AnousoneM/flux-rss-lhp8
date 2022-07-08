<?php

/**
 * Function permettant de définir le statut de la checkbox en fonction du post ou cookie : checked ou non
 * 
 * @param string $valueCheckbox Valeur de la checkbox
 * @param string $cookieName Nom du cookie
 * @param string $default Optionnal, paramètre par defaut
 * @return string Statut de la checkbox
 */
function setCheckbox(string $valueCheckbox, string $cookieName, string $default = ''): string
{
    // Nous definissons une variable $checkbox qui sera égale à un string vide
    $checkbox = '';

    if (isset($_POST['myCheckbox'])) {
        if (in_array($valueCheckbox, $_POST['myCheckbox'])) {
            $checkbox = 'checked';
        }
    } else if (isset($_COOKIE[$cookieName . 0], $_COOKIE[$cookieName . 1], $_COOKIE[$cookieName . 2])) {

        if ($_COOKIE[$cookieName . 0] == $valueCheckbox) {
            $checkbox = 'checked';
        } else if ($_COOKIE[$cookieName . 1] == $valueCheckbox) {
            $checkbox = 'checked';
        } else if ($_COOKIE[$cookieName . 2] == $valueCheckbox) {
            $checkbox = 'checked';
        }

    } else {
        $checkbox = $default;
    }

    return $checkbox;
}
