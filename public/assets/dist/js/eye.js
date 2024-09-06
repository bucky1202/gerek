document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.getElementById('toggle-password');
    const passwordField = document.getElementById('password-field');
    const eyeIcon = togglePassword.querySelector('svg');

    const ctogglePassword = document.getElementById('c-toggle-password');
    const cpasswordField = document.getElementById('c-password-field');
    const ceyeIcon = togglePassword.querySelector('c-svg');


    ctogglePassword.addEventListener('click', function(event) {
        event.preventDefault();

        // Toggle the type attribute
        if (cpasswordField.type === 'password') {
            cpasswordField.type = 'text';
            // Optionally change the icon here to an open eye
            ceyeIcon.setAttribute('stroke', 'gray'); // Example change
        } else {
            cpasswordField.type = 'password';
            // Optionally change the icon here to a closed eye
            ceyeIcon.setAttribute('stroke', 'currentColor'); // Reset stroke color
        }
    });


    togglePassword.addEventListener('click', function(event) {
        event.preventDefault();

        // Toggle the type attribute
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            // Optionally change the icon here to an open eye
            eyeIcon.setAttribute('stroke', 'gray'); // Example change
        } else {
            passwordField.type = 'password';
            // Optionally change the icon here to a closed eye
            eyeIcon.setAttribute('stroke', 'currentColor'); // Reset stroke color
        }
    });
});
