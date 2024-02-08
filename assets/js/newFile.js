document.forms["etape1"].addEventListener("submit", (event) => {
    event.preventDefault();
    console.dir(document.forms["etape1"]);

    formContent.email = document.forms["etape1"]["email"].value;
});
