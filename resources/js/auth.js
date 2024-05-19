document.addEventListener('DOMContentLoaded', function() {
    const loginLink = document.getElementById('login');
    const signupLink = document.getElementById('signup');
    const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');

    loginLink.addEventListener('click', function() {
        loginForm.classList.remove('hidden');
        signupForm.classList.add('hidden');
    });

    signupLink.addEventListener('click', function() {
        signupForm.classList.remove('hidden');
        loginForm.classList.add('hidden');
    });
});
