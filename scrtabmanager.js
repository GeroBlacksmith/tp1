$(document).ready(function () {
    $('#tab-content').html('');
    $.ajax({
        url: 'tabupdate.php?id=' + $('li.selected').attr("id")
    }).done(function (data) {
        $('#tab-content').html(data);
    });
    $('li').click(function () {
        //$('#tab-content').html('');
        $.ajax({
            url: 'tabupdate.php?id=' + $(this).attr("id")
        }).done(function (data) {
            $('#tab-content').html(data);
        });
        if ($(this).attr("class") == 'noselected') {
            $('li').attr('class', 'noselected');
            $(this).attr('class', 'selected');
        }
    });
});

