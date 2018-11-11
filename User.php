<?php
class User 
{
    public $name;
    private $role;

    public static $roles = [1, 2];

    public function __construct($name, $role) 
    {
        $this->name = $name;
        $this->setRole($role);
    }
    public static function getAllUsers()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'vinokurova';
        $mysqli = new mysqli($host, $user, $pass, $db);
        $mysqli->set_charset('utf8');
        $result = $mysqli->query("SELECT * FROM users");
        $users = [];
        while ($user = $result->fetch_assoc()) {
            $users[] = new self($user['name'], $user['role']);
        }
        return $users;
    }
    public function getRole()
    {
        if ($this->role == 1) {
            return 'Администратор';
        } else {
            return 'Пользователь';
        }
    }
    private function setRole($role)
    {
        if (in_array($role, self::$roles)) {
            $this->role = $role;
        } else {
            $this->role = 1;
        }
    }
}

// сначала public
// потом private
// затем protected

