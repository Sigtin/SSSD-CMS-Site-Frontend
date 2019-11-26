let imageSubmitButton = document.getElementById("imageSubmitButton");
if (imageSubmitButton != null) {
    console.log("imageSubmitButton evt.preventDefault");
    imageSubmitButton.addEventListener("submit", evt => {
        evt.preventDefault();
    })
}

function PassHtmlPageContentToPhpBackend(url, content) {

}

function AddImageSource() {
    let filepath = document.getElementById("filename");
    console.log(filepath);

    if (filepath.value != null && filepath.value.trim() != "") {
        document.getElementById("img").src = filepath.value;
    }
}