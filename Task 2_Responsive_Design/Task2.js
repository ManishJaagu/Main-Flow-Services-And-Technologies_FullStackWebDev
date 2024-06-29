//-------------------------------------------------sign in-up popup code-------------------------------------------
//SIGN-IN POPUP FUNCTION
function showSignInPopup() {
    document.getElementById('signinModal').style.display = 'block';
    document.getElementById('signupModal').style.display = 'none'; // Close sign-up popup
}

//SIGN-UP POPUP FUNCTION
function showSignUpPopup() {
    document.getElementById('signupModal').style.display = 'block';
    document.getElementById('signinModal').style.display = 'none'; // Close sign-in popup
}

//CLOSE MODAL POPUP FUNCTION
function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}







//------------------------------------------Scroll code-------------------------------------------------------



// UPDATE ACTIVE LINK BASED ON SCROLL POSITION
function updateActiveLink() {
    const sections = document.querySelectorAll('section');

    // CALCULATE CURRENT SCROLL POSITION
    const scrollPosition = window.scrollY;

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        const sectionId = section.getAttribute('id');

        // CHECK THE SCROLL POSITION IS WITHIN THE SECTION
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            const navLink = document.querySelector(`.right-section .header-link[href="#${sectionId}"]`);

            // REMOVE 'ACTIVE' CLASS
            document.querySelectorAll('.right-section .header-link').forEach(link => {
                link.classList.remove('active');
            });

            navLink.classList.add('active');
        }
    });
}

window.addEventListener('scroll', updateActiveLink);

updateActiveLink();
