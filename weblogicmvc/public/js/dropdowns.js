const dropdown = document.querySelector('[data-dropdown-toggle]');
const dropdownList = dropdown.parentNode.querySelector('nav');

dropdown.addEventListener('click', () => {
    if (dropdownList.getAttribute('data-visible') == 'true') {

        dropdownList.setAttribute('data-visible', 'false');

    } else {
        dropdownList.setAttribute('data-visible', 'true');
    }
})
