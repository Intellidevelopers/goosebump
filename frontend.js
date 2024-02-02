// frontend-scripts.js

document.addEventListener("DOMContentLoaded", function () {
    // Load data from local storage
    loadContactDetails();
    loadAboutUsContent();
});

function loadContactDetails() {
    var contactName = localStorage.getItem("contactName") || "";
    var contactEmail = localStorage.getItem("contactEmail") || "";

    updateFrontendContactDetails(contactName, contactEmail);
}

function loadAboutUsContent() {
    var aboutContent = localStorage.getItem("aboutContent") || "";
    updateFrontendAboutUsContent(aboutContent);
}
