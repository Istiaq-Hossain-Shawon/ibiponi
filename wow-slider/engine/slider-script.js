function ws_basic(c, a, b) {
    this.go = function(d) {
        b.find("ul").stop(true).animate({left: (d ? -d + "00%" : (/Safari/.test(navigator.userAgent) ? "0%" : 0))}, c.duration, "easeInOutExpo");
        return d
    }
}
;
$(".slider-container").ready(function() {
    $(".wowslider-container").each(function() {
        $(this).wowSlider({
            effect: "basic",
            prev: "",
            next: "",
            duration: 14 * 100,
            delay: 20 * 100,
            width: 320,
            height: 240,
            autoPlay: true,
            playPause: true,
            stopOnHover: false,
            loop: false,
            bullets: true,
            caption: true,
            captionEffect: "slide",
            controls: true,
            onBeforeStep: 0,
            images: 0
        })
        var add = $(this).find(".ws_images").children("div")[1]
        $(add).remove()
    })
})