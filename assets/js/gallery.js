function gallerySwitch(elementName) { // Simple as fuck galleri
    switch (elementName) {
        case "Diverse":
            hideShow(elementName);
            break;
        case "Tømrer":
            hideShow(elementName);
            break;
        case "Murer":
            hideShow(elementName);
            break;
        default:
            break;
    }
}

function hideShow(name) {
    $(".gallery picture").each(function () {
        if ($(this).hasClass(name)) {
            $(this).fadeIn()
        } else {
            $(this).fadeOut();
        }
    });
}
// For hver ITEM der ikke har class TØMRER i GALLERY append class HIDE