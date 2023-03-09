window.addEventListener("load", () => {
    const clickHandler = evt => {
        if (evt.target.tagName.toLowerCase() === "label") {
            for (const elem of document.forms[0].querySelectorAll("label")) {
                if (elem.classList.contains("calc__radio_active")) {
                    elem.classList.remove("calc__radio_active");
                }
            }
            evt.target.classList.toggle("calc__radio_active");
        }
    };

    document.forms[0].addEventListener("click", clickHandler);

    window.addEventListener("beforeunload", () => {
        document.forms[0].removeEventListener("click", clickHandler);
    });
});