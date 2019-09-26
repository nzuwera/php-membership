<?php require_once "App/Pages/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd"
      onSubmit="return validate();">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top: 20px;">Full name</label> 
        <span
            id="name-info" class="info"></span><br /> 
            <input type="text"
            name="member_fullname" id="member_fullname" class="demoInputBox"
            value="<?php echo $result[0]["member_fullname"]; ?>">
    </div>
    <div>
        <label>Description</label> 
        <span id="roll-number-info"
              class="info"></span><br /> 
        <input type="text"
               name="description" id="description" class="demoInputBox"
               value="<?php echo $result[0]["description"]; ?>">
    </div>
    <div>
        <input type="submit" name="add" id="btnSubmit" value="Save" />
    </div>
</div>
<?php require_once "App/Pages/header.php"; ?>