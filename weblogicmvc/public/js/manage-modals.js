
const addModal = document.querySelector('#addModal');
const openAddModal = document.querySelector('[data-open-add-modal]');
const closeAddModal = document.querySelector('[data-close-add-modal]');

const forcedToggleAddModal = document.querySelector('[data-forced-toggle-add-modal]');
const valueOfToggleAdd = forcedToggleAddModal.getAttribute('data-forced-toggle-add-modal');


if (valueOfToggleAdd == "true")
    addModal.showModal();

openAddModal.addEventListener('click', () => {
    addModal.showModal();
})

closeAddModal.addEventListener('click', () => {
    addModal.close();
})




const chooseModal = document.querySelector('#chooseModal');
const openChooseModal = document.querySelector('[data-open-choose-modal]');
const closeChooseModal = document.querySelector('[data-close-choose-edit-modal]');

openChooseModal.addEventListener('click', () => {
    chooseModal.showModal();
})


closeChooseModal.addEventListener('click', () => {
    chooseModal.close();
})



const editModal = document.querySelector('#editModal');
const closeEditModal = document.querySelector('[data-close-edit-modal]');

const forcedToggleEditModal = document.querySelector('[data-forced-toggle-edit-modal]');
const valueOfToggleEdit = forcedToggleEditModal.getAttribute('data-forced-toggle-edit-modal');


if (valueOfToggleEdit == "true")
    editModal.showModal();

closeEditModal.addEventListener('click', () => {
    editModal.close();
})

