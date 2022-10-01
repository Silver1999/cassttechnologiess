const body = document.querySelector('body')
const modalBody = document.querySelector('#modal-container .modal__body')

/*=============== SHOW MODAL ===============*/
const showModal = (openButton, modalContent) => {
    const openBtns = document.querySelectorAll(openButton),
        modalContainer = document.getElementById(modalContent)

    if (openBtns && modalContainer) {
        function openModal(e) {
            modalContainer.classList.add('show-modal')
            body.style.overflow = 'hidden'

            let product = e.currentTarget.closest('[data-id]'),
                imgSrc = product.querySelector('.products__img')?.getAttribute('src') ?? 'assets/images/product-placeholder.png',
                title = product.querySelector('.products__title')?.textContent ?? 'Default title',
                price = product.querySelector('.products__price')?.textContent ?? 'Default price',
                descr = product.querySelector('.products__description')?.textContent ?? 'This product without description',
                ref = product.querySelector('.products__img')?.getAttribute('alt')
            if (!ref) ref = 'https://gpstab.com';

            console.log(ref)

            const markup = `
                <img src="${imgSrc}" alt="${title}" class="modal__img">

                <h1 class="modal__title">${title}</h1>
                <p class="modal__description">${descr}</p>
                <p class="modal__price">${price}</p>

                <a href="${ref}" class="modal__button modal__button-width modal__order">
                    Buy
                </a>            
            `

            modalBody.insertAdjacentHTML('beforeend', markup)

            const orderBtn = modalBody.querySelector('.modal__order')

            orderBtn.addEventListener('click', () => {
                console.log('Send to BE', {imgSrc, title, price})
            })
        }

        openBtns.forEach(o => o.addEventListener('click', openModal))
    }
}
showModal('.open-modal', 'modal-container')

/*=============== CLOSE MODAL ===============*/
const closeBtn = document.querySelectorAll('.close-modal')

function closeModal() {
    const modalContainer = document.getElementById('modal-container')
    modalContainer.classList.remove('show-modal')
    body.style.overflow = 'auto'
    modalBody.innerHTML = ''

}

closeBtn.forEach(c => c.addEventListener('click', closeModal))