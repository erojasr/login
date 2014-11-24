<?php


class Users_model extends CI_Model{

    function __construct()
    {

    }

    public function verifyUser($email,$password)
    {

        $query = $this
            ->db
            ->where('email', $email)
            ->where('password', sha1($password))
            ->limit(1)
            ->get('USERS');

        if( $query->num_rows > 0)
        {
            return $query->row();
        }
        return false;

    }


} 