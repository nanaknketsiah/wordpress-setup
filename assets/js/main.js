$(document).ready(function() {
    // Initialize Locomotive Scroll
    var locoScroll = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true,
        repeat: true,
        multiplier: 0.5,
        touchMultiplier: 9,
        firefoxMultiplier: 50,
        direction: "vertical",
        getDirection: true,
        smartphone: {
            smooth: false
        },
        tablet: {
            smooth: true
        }
    });

    new ResizeObserver(() => locoScroll.update()).observe(
        document.querySelector("[data-scroll-container]")
    );

    locoScroll.on('call', (value, way, obj) => {
        if (value === 'showAlert') {
            if (way === 'enter') {
                $(obj.el).addClass('in-view');
            } else if (way === 'exit') {
                $(obj.el).removeClass('in-view');
            }
        }
        alert('hi')
    });



});

