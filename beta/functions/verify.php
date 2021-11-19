<?php
session_start();

$userName = "";
$icon = "login";

function CheckUser($cssFile)
{

    if (isset($_SESSION['user'])) {
        $GLOBALS['userName'] = $_SESSION['user']['name'];

        if ($_SESSION['user']['acess'] == 1) {
            $GLOBALS['icon'] = "account";
            return MenuControl("user", $cssFile);
        } else {
            $GLOBALS['icon'] = "account";
            return MenuControl("adm", $cssFile);
        }
    } elseif (!isset($_SESSION['user'])) {
        $GLOBALS['icon'] = "login";
        return MenuControl("visi", $cssFile);
    }
}

function NameUser()
{

    if (isset($_SESSION['user'])) {
        return $GLOBALS['userName'];
    } elseif (!isset($_SESSION['user'])) {
        return "Visitante";
    }
}


function MenuControl($logged, $cssFile)
{
    if ($logged == "user") {
        //true
        return "
            <li><a class='dropdown-item' href='{$cssFile}'>Minha conta</a></li>
            <li><a class='dropdown-item' href='{$cssFile}'>Meus pedidos</a></li>
            <li><a class='dropdown-item' href='{$cssFile}pages/carrinho.php'>Carrinho</a></li>

            <li>
                <hr class='dropdown-divider'>
            </li>
            <li><a class='dropdown-item' href='{$cssFile}functions/logged.php?exit=1'>Deslogar</a></li>
        ";
    } elseif ($logged == "visi") {
        //false
        return "
            <li><a class='dropdown-item' href='{$cssFile}pages/login.php'>Minha conta</a></li>
            <li><a class='dropdown-item' href='{$cssFile}pages/login.php'>Meus pedidos</a></li>
            <li><a class='dropdown-item' href='{$cssFile}pages/login.php'>Carrinho</a></li>

            <li>
                <hr class='dropdown-divider'>
            </li>
            <li><a class='dropdown-item' href='{$cssFile}pages/login.php'>Logar</a></li>
        ";
    }
    if ($logged == "adm") {
        return "
        <li><a class='dropdown-item' href='{$cssFile}'>Minha conta</a></li>
        <li><a class='dropdown-item' href='{$cssFile}'>Pedidos</a></li>
        <li><a class='dropdown-item' href='{$cssFile}pages/carrinho.php'>Dashboard</a></li>

        <li>
            <hr class='dropdown-divider'>
        </li>
        <li><a class='dropdown-item' href='{$cssFile}functions/logged.php?exit=1'>Deslogar</a></li>
    ";
    }
}
