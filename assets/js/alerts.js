export const confirmModal = (title, message, onConfirm = () => {}, onCancel = () => {}) => {
    const modalHTML = `
        <section class="modal" id="modal-${title.trim()}">
            <div class="modal__container">
                <h2 class="modal__title">${title}</h2>
                <p class="modal__paragraph">${message}</p>
                <div class="a"></div>
                <div class="modal_buttons">
                    <button class="modal__close" id="confirm-${title.trim()}">Si</button>
                    <button class="modal__close2" id="cancel-${title.trim()}">No</button>
                </div>
            </div>
        </section>
    `;

    const modalElement = document.createElement("div");
    modalElement.innerHTML = modalHTML;
    document.body.appendChild(modalElement);

    const modal = document.getElementById(`modal-${title.trim()}`);
    const confirm = document.getElementById(`confirm-${title.trim()}`);
    const cancel = document.getElementById(`cancel-${title.trim()}`);

    confirm.addEventListener("click", (e) => {
        e.preventDefault();
        modal.classList.add('modal-close');
        setTimeout(() => {
            modalElement.remove();
            onConfirm();
        }, 500);
    });

    cancel.addEventListener("click", (e) => {
        e.preventDefault();
        modal.classList.add('modal-close');
        setTimeout(() => {
            modalElement.remove();
            onCancel();
        }, 800);
    });
}


export const alertModal = (message, onAction = () => {}) => {
    const modalHTML = `
        <section class="modal" id="modal-${message.trim()}">
            <div class="modal__container">
                <div class="close_modal" id="close-${message.trim()}">x</div>
                <p class="modal__paragraph__alert">${message}</p>
            </div>
        </section>
    `;

    const modalElement = document.createElement("div");
    modalElement.innerHTML = modalHTML;
    document.body.appendChild(modalElement);

    const modal = document.getElementById(`modal-${message.trim()}`);
    const close = document.getElementById(`close-${message.trim()}`);

    close.addEventListener("click", (e) => {
        e.preventDefault();
        modal.classList.add('modal-close');
        setTimeout(() => {
            modalElement.remove();
            onAction();
        }, 800);
    });
}


export const getParams = (name) => {
    const queryString = window.location.search;
    const params = new URLSearchParams(queryString);
    return params.get(`${name}`);
}
