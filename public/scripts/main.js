(function ($) {
    "use strict";


    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input input[name="name"]');
    var email = $('.validate-input input[name="email"]');
    var message = $('.validate-input textarea[name="message"]');


    $('.validate-form button').on('click', function () {
        var data = {'name': name, 'email': email};
        $.ajax({
            url: "feedback/add",
            method: 'POST',
            data: {"message": message.val(), 'email': email.val(), 'name': name.val()},
            dadaType: 'json',
            success: function (data) {
                var json = JSON.parse(data);
                for (var i = 0; i <= json.length - 1; i++) {
                    if (json[i].type == 'validIsName')
                        showValidate(name);
                    if (json[i].type == 'validIsEmail')
                        showValidate(email);
                    if (json[i].type == 'validIsMessage')
                        showValidate(message);
                    if (json[i].result == 'error')
                        var result = 'error';
                    if (json[i].result == 'sucess')
                        var result = 'sucess';
                }
                if (result == 'sucess') { //TODO fixed this shit
                    $('body').after(function () {
                        alert('aler');
                        return
                        "           <div class=\'container-lastMessage row mb-3\'>" +
                        "            <div class=\'col-md-12 themed-grid-col\'>" +
                        "               <div class=\'pb-3\'>\n " +
                        "                    <b>От: </b>" + name.val() + "<br>" +
                        "                    <b>Email: </b>" + email.val() +
                        "                </div>" +
                        "                <div class='row'>" +
                        "                    <div class='col-md-12 themed-grid-col'>" + message.val() + "</div>" +
                        "                </div>" +
                        "            </div>" +
                        "        </div>";
                    });
                }
            }
        });


        // return check;
    });

    function addMessage() {

    }

    $('.validate-form .input1').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }


})(jQuery);