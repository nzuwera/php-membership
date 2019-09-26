/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validate() {
    var valid = true;
    $(".demoInputBox").css('background-color', '');
    $(".info").html('');

    if (!$("#member_fullname").val()) {
        $("#name-info").html("(required)");
        $("#member_fullname").css('background-color', '#FFFFDF');
        valid = false;
    }
    if (!$("#description").val()) {
        $("#roll-number-info").html("(required)");
        $("#description").css('background-color', '#FFFFDF');
        valid = false;
    }
    return valid;
}
