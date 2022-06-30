<?php
    session_start();
    unset($_SESSION["user"]);
    echo "Вы успешно вышли, до новых встречь!";