function changeCssFile(cssFile) {
    let oldLink = document.getElementsByTagName("link").item(1);

    let newCssLink = document.createElement("link");
    newCssLink.setAttribute("href", cssFile);
    newCssLink.setAttribute("rel", "stylesheet");
    newCssLink.setAttribute("type", "text/css");

    document.getElementsByTagName("head").item(0).replaceChild(newCssLink, oldLink);
}