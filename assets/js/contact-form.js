function services() {
    const services = document.querySelectorAll(".service");

    services.forEach((service) => {
        service.onclick = () => {
            if (service.dataset.selected === "true") {
                service.dataset.selected = "false";
            } else if (service.dataset.selected === "false") {
                service.dataset.selected = "true";
            };
        };
    });
};
services();

function contactFormMessage() {
    const grower = document.getElementById("message_wrapper");
    const textarea = document.getElementById("message");
    textarea.addEventListener("input", () => {
        grower.dataset.replicatedValue = textarea.value;
    });
};
contactFormMessage();

function sendForm() {
    // Elements
    const selectedServices = document.querySelectorAll('.service[data-selected="true"]');
    const firstName = document.getElementById("first_name");
    const lastName = document.getElementById("last_name");
    const company = document.getElementById("company");
    const email = document.getElementById("email");
    const message = document.getElementById("message");
    const consent = document.getElementById("consent");

    // Validation variable
    let formValid = false;

    // Validate if services are selected
    if (selectedServices.length === 0) {
        document.getElementById("services_error").className = "visible";
    } else {
        document.getElementById("services_error").className = "hidden";
    }

    // Validate if inputs and textarea are not empty
    document.querySelectorAll("#first_name, #last_name, #company, #email, #message").forEach((input) => {
        const value = input.value;
        if (value === "") {
            input.classList.add("error");
        } else {
            input.classList.add("success");
        };
    });

    // Validate if consent is checked
    if (consent.checked === false) {
        consent.classList.add("error");
    }

    // Validate the form
    if (selectedServices.length > 0 && firstName.value !== "" && lastName.value !== "" && company.value !== "" && email.value !== "" && message.value !== "" && consent.checked === true) {
        formValid = true;
    };

    // If the form is valid proceed with sending the form
    if (formValid) {
        console.log("Form is valid");

        document.querySelectorAll("#first_name, #last_name, #company, #email, #message").forEach((input) => {
            input.classList.remove("error");
            input.classList.add("success");

            setTimeout(() => {
                firstName.value = "";
                lastName.value = "";
                company.value = "";
                email.value = "";
                message.value = "";
                input.classList.remove("success");
            }, 100);
        });

        window.location.href = "http://localhost/denali/odeslany-formular";
    };
    
    /*if (firstName !== "" & lastName !== "" & email !== "" & message !== "") {
        const webhookClickUp = `https://hook.eu1.make.com/5qy32v9vdu3l3l493jk3xh62nibx3gx8?firstName=${firstName}&lastName=${lastName}&email=${email}&message=${message}`;
        const webhookEcomail = `https://hook.eu1.make.com/ksivdbgtu20m6m5xt1lnkfoehjd459cu?firstName=${firstName}&lastName=${lastName}&email=${email}&message=${message}`;
        fetch(webhookClickUp);
        fetch(webhookEcomail);
    };*/
};