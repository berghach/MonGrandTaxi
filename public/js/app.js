// manage the header components

let $trigger = document.getElementById('roll-down');
let $userMenu = document.getElementById('user-menu');

// Toggle user menu visibility
function toggleUserMenu() {
    if ($trigger.classList.contains('rotate-180')) {
        // To close the user-menu
        $trigger.classList.remove('rotate-180');
        $userMenu.classList.add('hidden');
    } else {
        // To open the user-menu
        $trigger.classList.add('rotate-180');
        $userMenu.classList.remove('hidden');
    }
}

// Add click event listener to the trigger
$trigger.addEventListener('click', toggleUserMenu);

// Add click event listener to the window to close user menu on outside click
window.addEventListener('click', function (event) {
    // Check if the clicked element is not part of the user menu or the trigger
    if (!$userMenu.contains(event.target) && event.target !== $trigger) {
        // Close the user menu
        if(!$userMenu.classList.contains('hidden')){
            toggleUserMenu();
        }
    }
});

// Add scroll event listener to close user menu on scroll
window.addEventListener('scroll', function () {
    // Check if the user menu is open
    if ($trigger.classList.contains('rotate-180')) {
        // Close the user menu
        if(!$userMenu.classList.contains('hidden')){
            toggleUserMenu();
        }
    }
});

//mobile version

let $burgerMenu = document.getElementById('burger-icon');
let $navMobile = document.getElementById('nav-mobile');

function toggleNavMobile() {
    if($navMobile.classList.contains('hidden')){
        $navMobile.classList.remove('hidden');
    }else{
        $navMobile.classList.add('hidden');
    }
}

// Add click event listener to the burgerMenu
$burgerMenu.addEventListener('click', toggleNavMobile);

// Add click event listener to the window to close user menu on outside click
window.addEventListener('click', function (event) {
    // Check if the clicked element is not part of the user menu or the burgerMenu
    if (!$navMobile.contains(event.target) && event.target !== $burgerMenu) {
        // Close the user menu
        if(!$navMobile.classList.contains('hidden')){
            toggleNavMobile();
        }
    }
});

// Add scroll event listener to close user menu on scroll
window.addEventListener('scroll', function () {
    // Check if the user menu is open
    // if ($burgerMenu.classList.contains('rotate-180')) {
        // Close the user menu
        if(!$navMobile.classList.contains('hidden')){
            toggleNavMobile();
        }
    // }
});


