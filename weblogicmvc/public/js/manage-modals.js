const addModal = document.querySelector('#addModal');
const openAddModal = document.querySelector('[data-open-add-modal]');
const closeAddModal = document.querySelector('[data-close-add-modal]');
const forcedToggleAddModal = document.querySelector('[data-forced-toggle-add-modal]');
const valueOfToggleAdd = forcedToggleAddModal.getAttribute('data-forced-toggle-add-modal');


const editModal = document.querySelector('#editModal');
const openEditModal = document.querySelector('[data-open-edit-modal]');
const closeEditModal = document.querySelector('[data-close-edit-modal]');
const forcedToggleEditModal = document.querySelector('[data-forced-toggle-edit-modal]');
const valueOfToggleEdit = forcedToggleEditModal.getAttribute('data-forced-toggle-edit-modal');

if (valueOfToggleAdd == "true")
    addModal.showModal();

openAddModal.addEventListener('click', () => {
    addModal.showModal();
})

closeAddModal.addEventListener('click', () => {
    addModal.close();
})


if (valueOfToggleEdit == "true")
    editModal.showModal();


openEditModal.addEventListener('click', () => {
    editModal.showModal();
})

closeEditModal.addEventListener('click', () => {
    editModal.close();
})