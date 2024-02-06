// Menghilangkan alert setelah 5 detik
setTimeout(function () {
    $(".alert").fadeOut("slow");
}, 5000);

// function generate slug
// const nama = document.querySelector("#name");
// const slug = document.querySelector("#slug");
const nama = document.getElementById("name");
const slug = document.getElementById("slug");

nama.addEventListener("keyup", function () {
    let preslug = nama.value;
    preslug = preslug.replace(/ /g, "-");
    slug.value = preslug.toLowerCase();
});

// me nonaktifkan trix editor
document.addEventListener("trix-file-accept", function (e) {
    e.preventDefault();
});

// function preview image
function previewImage() {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector(".img-preview");

    imgPreview.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}
