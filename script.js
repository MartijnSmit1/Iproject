$("a[data-role=tab]").each(function () {
    var anchor = $(this);
    anchor.bind("click", function () {
        $.mobile.changePage(anchor.attr("href"), {
            transition: "none",
            changeHash: false
        });
        return false;
    });
});

$("div[data-role=page]").bind("pagebeforeshow", function (e, data) {
    $.mobile.silentScroll(0);
    $.mobile.changePage.defaults.transition = 'slide';
});

$(document).ready(function () {
    $('img').on('click', function () {
        var image = $(this).attr('src');
        $('#myModal').on('show.bs.modal', function () {
            $(".img-responsive").attr("src", image);
        });
    });
});

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
