popupWhatsApp = () => {
    let btnClosePopup = document.querySelector(".closePopup");
    let btnOpenPopup = document.querySelector(".whatsapp__icon");
    let popup = document.querySelector(".whatsapp__popup");
    let sendBtn = document.getElementById("send-btn");

    btnClosePopup.addEventListener("click", () => {
        popup.classList.toggle("is-active-whatsapp-popup");
    });

    btnOpenPopup.addEventListener("click", () => {
        popup.classList.toggle("is-active-whatsapp-popup");
    });

    sendBtn.addEventListener("click", () => {
        let msg = document.getElementById("whats-input").value;
        let encodedMsg = encodeURIComponent(msg);

        // Change the phone number "+201155777100" to your desired number
        window.open("https://wa.me/+201155777100?text=" + encodedMsg, "_blank");
    });
};

popupWhatsApp();
