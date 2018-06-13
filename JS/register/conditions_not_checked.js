$(document).ready(function(){
    $("#exampleModalCenter").modal("show");
    $("#lbl_checkbox").after("<small class='conditions_not_checked'>De Algemene Voorwaarden zijn nog niet geaccepteerd!</small>")
    $(".conditions_not_checked").css({"color" : "red",
                                      "display" : "block"
                                });
});