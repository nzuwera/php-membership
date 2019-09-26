<?php

require_once 'init.php';

$dbcon = new Database();


$action = filter_input(INPUT_GET, "action");
$member_fullname = filter_input(INPUT_POST, "member_fullname");
$description = filter_input(INPUT_POST, "description");
$submit = filter_input(INPUT_POST, "add");
$member_id = filter_input(INPUT_GET, "member_id");


if (!empty($action)) {
    $action = filter_input(INPUT_GET, "action");
}
switch ($action) {
    case "member-add":
        if (isset($submit)) {
            $create = date("Y-m-d H:i:s");
            $member = new Member($dbcon);
            $insertId = $member->add($create, $member_fullname, $description);
            if (empty($insertId)) {
                $response = array(
                    "message" => "Problem in Adding New Record",
                    "type" => "error"
                );
            } else {
                header("Location: index.php");
            }
        }
        require_once "App/Pages/member-add.php";
        break;

    case "member-edit":
        $member = new Member($dbcon);
        if (isset($submit)) {
            $member->edit($member_fullname, $description, $member_id);
            header("Location: index.php");
        }

        $result = $member->getById($member_id);
        require_once "App/Pages/member-edit.php";
        break;

    case "member-delete":
        $member = new Member($dbcon);
        $member->delete($member_id);
        $result = $member->getAllMembers();
        require_once "App/Pages/member.php";
        break;

    default:
        $member = new Member($dbcon);
        $result = $member->getAllMembers();
        require_once "App/Pages/member.php";
        break;
}
