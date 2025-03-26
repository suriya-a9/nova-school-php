(function () {
    var throttle = function (type, name, obj) {
        obj = obj || window;
        var running = false;
        var func = function () {
            if (running) {
                return;
            }
            running = true;
            requestAnimationFrame(function () {
                obj.dispatchEvent(new CustomEvent(name));
                running = false;
            });
        };
        obj.addEventListener(type, func);
    };
    throttle("resize", "optimizedResize");
})();

var roadmap = (function () {
    var wrapper = document.querySelector('.js-roadmap-timeline');
    var timeframes = document.querySelectorAll('.js-roadmap-timeframe');
    var mediaQuery = window.matchMedia("(min-width: 1201px)");
    var topMaxHeight;
    var bottomMaxHeight;
    handleStyling();
    window.addEventListener("optimizedResize", handleStyling);
    function handleStyling() {
        if (mediaQuery.matches) {
            applyHeights();
        } else {
            
        }
    }
    function applyHeights() {
        topMaxHeight = getMaxHeight(timeframes, 0);
        bottomMaxHeight = getMaxHeight(timeframes, 1);
    }
    function getMaxHeight(els, start) {
        var maxHeight = 0;
        var i = start;
        for (; i < els.length - 1; i = i + 2) {
            var elHeight = els[i].offsetHeight;
            maxHeight = maxHeight > elHeight ? maxHeight : elHeight;
        }
        return maxHeight;
    }
})();