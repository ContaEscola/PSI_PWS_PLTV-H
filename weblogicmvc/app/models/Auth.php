<?php

class Auth
{

    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE)
            session_start();
    }

    public function getUsername()
    {
        return $_SESSION['username'];
    }

    public function getRole()
    {
        return $_SESSION['role'];
    }

    public function getID()
    {
        return $_SESSION['id'];
    }

    public function setAuth($username, $role, $id)
    {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        $_SESSION['id'] = $id;
    }

    public function isLoggedIn($expectedRole)
    {
        if (!isset($_SESSION['username']) || !isset($_SESSION['role']) || !isset($_SESSION['id'])) return false;
        if ($expectedRole[0] != null) {
            $foundRole = false;
            foreach ($expectedRole as $role) {
                if ($role === $_SESSION['role'])
                    $foundRole  = true;
                break;
            }
            return $foundRole;
        } else {

            return true;
        }
    }

    public function logout()
    {
        session_destroy();
    }
}
