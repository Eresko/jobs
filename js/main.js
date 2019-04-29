$(document).on('change', '[data-select-year],[data-select-month]', function () {
    let data = {
        'year': $('[data-select-year]').val(),
        'month': $('[data-select-month]').val(),
    };
    $.ajax({
        url: "index.php/?id=" + $('[data-hidden-id]').val(),
        data: data,
        type: 'post',
        success: function (data) {
            var html = $(data).find('[data-conteiner-data-val]').html();
            $('[data-conteiner-data-val]').html(html);
            console.log(data);
        }
    });
});
$(document).on('click', '[data-day],[data-text-info]', function () {
    $('[data-modal-okno]').removeClass('modal_okno1');
    $('[data-modal-okno]').addClass('modal_okno2');
    $('[data-text-area]').focus();
    let oFullDate = $(this).find('[data-text-info]');
    let id = $('[data-hidden-id]').val();
    let fullDate = oFullDate.attr("data-value");
    let data = {
        'date' :fullDate,
        'id' : id,
        'status' : 1
    };
    $.ajax({
        url: "info.php",
        data: data,
        type: 'post',
        success: function (data) {
            console.log(data);
            let result =JSON.parse(data);
            $('[data-area]').text("");
            $('[data-modal-okno]').attr('data-date-modal',result.date);
            $('[data-modal-okno]').attr('data-id-modal',result.id);
            $('[data-area]').text(result.text);


        }
    });

});
$(document).on('click', '[data-btn]', function () {
    $('[data-modal-okno]').removeClass('modal_okno2');
    $('[data-modal-okno]').addClass('modal_okno1');
    let fullDate = $('[data-modal-okno]').attr('data-date-modal');
    let id = $('[data-modal-okno]').attr('data-id-modal');
    let data = {
        'date' : fullDate,
        'id'   : id,
        'text' : $('[data-area]').val(),
        'status' : 2
    };
    $.ajax({
        url: "info.php",
        data: data,
        type: 'post',
        success: function (data) {
            let result =JSON.parse(data);
            $('[data-value="' + result.date + '"]').html(result.text);
            console.log(data);
        }
    });

});

$(document).on('click', '[data-head-modal]', function () {
    $('[data-modal-okno]').removeClass('modal_okno2');
    $('[data-modal-okno]').addClass('modal_okno1');

});


$(document).on('click', '[data-knopka]', function () {
    let x = 20;
    let y = 30;
    let z;
    z = x / y;
    alert(z);

});