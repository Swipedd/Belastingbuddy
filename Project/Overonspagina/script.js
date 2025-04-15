document.addEventListener("DOMContentLoaded", function() {
    // Verberg de loader na een vertraging van 1,5 seconden
    setTimeout(function() {
        const loader = document.getElementById("loader");
        if (loader) {
            loader.style.display = 'none';  // Verberg de loader direct via de 'display' property
        }
    }, 1500); // 1500ms = 1,5 seconden vertraging
});
