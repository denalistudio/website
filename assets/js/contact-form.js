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
    const selectedServices = document.querySelectorAll('.service[data-selected="true"]');
    const firstName = document.getElementById("first_name");
    const lastName = document.getElementById("last_name");
    const company = document.getElementById("company");
    const email = document.getElementById("email");
    const message = document.getElementById("message");
    const consent = document.getElementById("consent");

    let formValid = false;

    document.querySelectorAll("#first_name, #last_name, #company, #email, #message").forEach((input) => {
        const value = input.value;
        if (value === "") {
            input.classList.add("error");
        } else {
            input.classList.add("success");
        };
    });

    if (consent.checked === false) {
        consent.classList.add("error");
    }

    if (selectedServices.length > 0 && firstName.value !== "" && lastName.value !== "" && company.value !== "" && email.value !== "" && message.value !== "" && consent.checked === true) {
        formValid = true;
    };

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