require('bootstrap');

window.addEventListener('DOMContentLoaded', event => {
    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        })
    }

    // event logout
    document.getElementById('logout-link').addEventListener('click', function (event) {
        event.preventDefault()
        document.getElementById('logout-form').submit()
    })
})
