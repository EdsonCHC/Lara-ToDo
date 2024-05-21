import $, { error } from "jquery";
window.$ = $;

$(document).ready(function () {
    $("#form").submit((e) => {
        e.preventDefault();

        const token = $("#_token").val();
        const nombre = $("#task").val();

        $.ajax({
            URL: "/",
            type: 'POST',
            data: {
                _token: token,
                name: nombre,
            },
            success: (response) => {
                console.log(response);
            },
            error: (error) =>{
                console.log('Error: ', error);
            }
        });
    });


    
});
