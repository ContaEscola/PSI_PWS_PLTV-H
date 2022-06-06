const navToggle = document.querySelector('.mobile-dashboard-toggle');
let toggle = false;

navToggle.addEventListener('click', () => {
    const controls = navToggle.getAttribute('aria-controls');
    const navigation = document.querySelector(`#${controls}`);


    if (toggle == false) {
        navToggle.setAttribute('data-state', 'opened');
        navToggle.querySelector('span').setAttribute('aria-expanded', 'true');
        navigation.setAttribute('data-visible', 'true');

        toggle = true;

    } else {
        navToggle.setAttribute('data-state', 'closed');
        navToggle.querySelector('span').setAttribute('aria-expanded', 'false');
        navigation.setAttribute('data-visible', 'false');

        toggle = false;
    }
})