$(document).ready(function() {
    $("#exampleModalCenter").modal("show");

    var emptypassword = $('<div class="alert alert-danger" role="alert">Vul alle velden in om verder te gaan.</div>');

    $("#empty_password").after(emptypassword);
}) ;