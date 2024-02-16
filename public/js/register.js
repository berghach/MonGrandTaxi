// controlling the register form 

// Get the select element
let $userRoleSelect = document.getElementById('user_role');

// Add a 'change' event listener to the select element
$userRoleSelect.addEventListener('change', function() {
    // Inside this function, you can check the selected option
    let $selectedOption = $userRoleSelect.options[$userRoleSelect.selectedIndex];
    let $driverInfo = document.getElementById('driver-info');

    if ($selectedOption.id === 'driver') {
        $driverInfo.classList.replace('hidden','block');
        console.log('driver');
    } else if ($selectedOption.id === 'passenger') {
        $driverInfo.classList.replace('block','hidden');
        console.log('passenger');
    }
});