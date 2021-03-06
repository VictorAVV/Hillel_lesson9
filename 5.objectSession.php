<?php
/* 
Создайте класс Session - оболочку над сессиями. 
Он должен иметь следующие методы: 
    создать переменную сессии, 
    получить переменную, 
    удалить переменную сессии, 
    проверить наличие переменной сессии.
 */

class Session
{
    public function __construct()
    {
        session_start();
        echo 'Session start<hr>';
    }
    public function __destruct()
    {
        session_destroy();
        echo '<hr>Session finish';
    }
    public function createSessionVar($nameVar, $valueVar)
    {
        $_SESSION[$nameVar] = $valueVar;
        return $this;
    }
    public function getSessionVar($nameVar)
    {
        return (isset($_SESSION[$nameVar])) ? $_SESSION[$nameVar] : null;
    }
    public function deleteSessionVar($nameVar)
    {
        if (isset($_SESSION[$nameVar])) {
            unset($_SESSION[$nameVar]);
            return true;
        } else {
            return false;
        }
    }
    public function checkSessionVar($nameVar)
    {
        if (isset($_SESSION[$nameVar])) {
            return true;
        } else {
            return false;
        }
    }
}

$mySession = new Session();

$mySession->createSessionVar('user_login', 'John')
          ->createSessionVar('user_password', 'mypass')
          ->createSessionVar('user_email', 'john@gmail.com');

if ($mySession->checkSessionVar('user_login')) {
    echo 'Value of sessionvar "user_login" = ' . $mySession->getSessionVar('user_login');
} else {
    echo 'Sessionvar "user_login" don\'t exist';
}

echo '<br><br>';

if ($mySession->deleteSessionVar('user_login')) {
    echo 'Sessionvar "user_login" deleted';
} else {
    echo 'Sessionvar "user_login" don\'t exist';
}

echo '<br><br>';

if ($mySession->checkSessionVar('user_login')) {
    echo 'Value of sessionvar "user_login" = ' . $mySession->getSessionVar('user_login');
} else {
    echo 'Sessionvar "user_login" don\'t exist';
}

echo '<br><br>';

if ($mySession->checkSessionVar('user_email')) {
    echo 'Value of sessionvar "user_email" = ' . $mySession->getSessionVar('user_email');
} else {
    echo 'Sessionvar "user_email" don\'t exist';
}
