//-------------------------------------------------sign in-up popup code-------------------------------------------
//SIGN-IN POPUP FUNCTION
function showSignInPopup() {
    document.getElementById('signinModal').style.display = 'block';
    document.getElementById('signupModal').style.display = 'none';
}

//SIGN-UP POPUP FUNCTION
function showSignUpPopup() {
    document.getElementById('signupModal').style.display = 'block';
    document.getElementById('signinModal').style.display = 'none';
}

//CLOSE MODAL POPUP FUNCTION
function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}
