<?php require_once "App/Pages/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate();">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top: 20px;">Full name</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="member_fullname" id="member_fullname" class="demoInputBox">
    </div>
    <div>
        <label>Description</label> <span id="roll-number-info"
            class="info"></span><br /> <input type="text"
            name="description" id="description" class="demoInputBox">
    </div>
    <div>
        <input type="submit" name="add" id="btnSubmit" value="Add" />
    </div>
    </div>
</form>
<?php require_once "App/Pages/footer.php"; ?>