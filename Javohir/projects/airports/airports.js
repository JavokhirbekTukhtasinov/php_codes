$(function () {

    $(".btn_delete").click(function () {
        var id = $(this).data('id');
        var ask = confirm("Are you sure you want to delete the coutry id #" + id);
        if (!ask) {
            return false;
        }
    });


    $('.airport_city').keyup(function () {
        var id = $(this).data("id");
        $(".airport_" + id).show();
    });
    $(".btn_btn-update").click(function () {
        var id = $(this).data('id');
        var city_name = $("#city_" + id).text();
        var parms = {id:id, city_name:city_name};
        $.post("update.php", parms, function (respons) {
            if (respons == 200){
                $(".btn_airport_update").hide();
                $(#mymodel).model(show);
        }
        })
    })
});