<?php

require_once __DIR__ . "/../../init.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Member
 *
 * @author nzuweragilbert
 */
class Member {

    private $member_id;
    private $member_fullname;
    private $description;
    private $created;
    private $modified;
    private $handle;
    private $table = "membership.member";

    public function __construct(Database $con) {
        $this->handle = $con;
    }

    public function getAllMembers() {
        $query = "select * from " . $this->table;
        $resultset = $this->handle->runBaseQuery($query);
        return $resultset;
    }

    function add($created, $fullname, $description) {
        $query = "INSERT INTO " . $this->table . " (created,member_fullname,description) VALUES (?, ?, ?)";
        $paramType = "sss";
        $paramValue = array(
            $created,
            $fullname,
            $description
        );

        $insertId = $this->handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }

    function edit($fullname, $description, $member_id) {
        $query = "UPDATE " . $this->table . " SET member_fullname = ?,description = ? WHERE member_id = ?";
        $paramType = "ssi";
        $paramValue = array(
            $fullname,
            $description,
            $member_id
        );

        $this->handle->update($query, $paramType, $paramValue);
    }

    function delete($member_id) {
        $query = "DELETE FROM " . $this->table . " WHERE member_id = ?";
        $paramType = "i";
        $paramValue = array(
            $member_id
        );
        $this->handle->update($query, $paramType, $paramValue);
    }

    function getById($member_id) {
        $query = "SELECT * FROM " . $this->table . " WHERE member_id = ?";
        $paramType = "i";
        $paramValue = array(
            $member_id
        );
        $result = $this->handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }

    function reset() {
        $query = "TRUNCATE TABLE " . $this->table;
        $this->handle->runBaseQuery($query);
    }

}
