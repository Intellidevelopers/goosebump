// admin-scripts.js

document.addEventListener("DOMContentLoaded", function () {
    // Load data from local storage
    loadContactDetails();
    loadAboutUsContent();
});

function loadContactDetails() {
    var contactName = localStorage.getItem("contactName") || "";
    var contactEmail = localStorage.getItem("contactEmail") || "";

    // Update admin UI
    document.getElementById("contactName").value = contactName;
    document.getElementById("contactEmail").value = contactEmail;

    // Update frontend UI
    updateFrontendContactDetails(contactName, contactEmail);
}

function loadAboutUsContent() {
    var aboutContent = localStorage.getItem("aboutContent") || "";

    // Update admin UI
    document.getElementById("aboutContent").value = aboutContent;

    // Update frontend UI
    updateFrontendAboutUsContent(aboutContent);
}

// Add other admin-related functions (e.g., saving data to local storage)
