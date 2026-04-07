import { createRoot } from "react-dom/client";
import ContactForm from "./forms/contact";

function init(){
    const contactForm = document.querySelector('#contact-form');
    if (contactForm) {
        createRoot( contactForm ).render (
            <ContactForm />
        )
    }
}

init();