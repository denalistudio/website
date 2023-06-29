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

function Make() {
    const firstName = document.getElementById("first_name").value;
    const lastName = document.getElementById("last_name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;

    if (firstName !== "" & lastName !== "" & email !== "" & message !== "") {
        const webhook = `https://hook.eu1.make.com/5qy32v9vdu3l3l493jk3xh62nibx3gx8?firstName=${firstName}&lastName=${lastName}&email=${email}&message=${message}`;
        fetch(webhook);
    };
};