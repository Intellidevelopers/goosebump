document.addEventListener("DOMContentLoaded", function () {
    // Load saved contact details and about us content from local storage
    loadContactDetails();
    loadAboutUsContent();
});

function updateContactDetails() {
    // Get values from the form
    var contactName = document.getElementById("contactName").value;
    var contactEmail = document.getElementById("contactEmail").value;

    // Save to local storage
    localStorage.setItem("contactName", contactName);
    localStorage.setItem("contactEmail", contactEmail);

    // Update frontend
    updateFrontendContactDetails(contactName, contactEmail);
}

function loadContactDetails() {
    // Load contact details from local storage and update the form
    var contactName = localStorage.getItem("contactName") || "";
    var contactEmail = localStorage.getItem("contactEmail") || "";

    document.getElementById("contactName").value = contactName;
    document.getElementById("contactEmail").value = contactEmail;

    // Update frontend
    updateFrontendContactDetails(contactName, contactEmail);
}

function updateFrontendContactDetails(name, email) {
    // Update the frontend content dynamically (you can use jQuery or other libraries for better manipulation)
    document.getElementById("frontendContactName").innerText = name;
    document.getElementById("frontendContactEmail").innerText = email;
}

function updateAboutUs() {
    // Get value from the form
    var aboutContent = document.getElementById("aboutContent").value;

    // Save to local storage
    localStorage.setItem("aboutContent", aboutContent);

    // Update frontend
    updateFrontendAboutUsContent(aboutContent);
}

function loadAboutUsContent() {
    // Load about us content from local storage and update the form
    var aboutContent = localStorage.getItem("aboutContent") || "";

    document.getElementById("aboutContent").value = aboutContent;

    // Update frontend
    updateFrontendAboutUsContent(aboutContent);
}

function updateFrontendAboutUsContent(content) {
    // Update the frontend content dynamically (you can use jQuery or other libraries for better manipulation)
    document.getElementById("frontendAboutContent").innerText = content;
}
