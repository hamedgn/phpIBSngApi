<?php


interface Driver
{
    public function connect();

    public function disconnect();

    public function isConnected();

    public function addUser();

    public function deleteUser();

    public function listUser();

    public function isUserValid();

    public function isUserExpired();

    public function getUser($userName);

}