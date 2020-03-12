window.onload = function () {

    // var link = document.getElementsByClassName("link");
    //
    // link.addEventListener("mouseenter",function (event) {
    //     event.css.add("")

    // })

    $(".link").mouseover(function () {
        $(this).addClass("underline");
    })

    $(".link").mouseleave(function () {
        $(this).removeClass("underline");
    })
}