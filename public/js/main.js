// Initialize AOS
AOS.init({
    duration: 800,
    once: true
});


// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Navbar scroll behavior
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-glass');
    } else {
        navbar.classList.remove('navbar-glass');
    }
});

// Form validation with better UX
const form = document.getElementById('contactForm');
if (form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const inputs = form.querySelectorAll('input, textarea');
        let isValid = true;

        inputs.forEach(input => {
            const feedback = input.nextElementSibling;

            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('is-invalid');
                if (!feedback || !feedback.classList.contains('invalid-feedback')) {
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'invalid-feedback';
                    errorDiv.textContent = 'Este campo é obrigatório';
                    input.parentNode.appendChild(errorDiv);
                }
            } else {
                input.classList.remove('is-invalid');
                if (feedback && feedback.classList.contains('invalid-feedback')) {
                    feedback.remove();
                }
            }
        });

        if (isValid) {
            // Show success message
            const successAlert = document.createElement('div');
            successAlert.className = 'alert alert-success mt-3';
            successAlert.textContent = 'Mensagem enviada com sucesso!';
            form.appendChild(successAlert);

            // Reset form
            form.reset();

            // Remove success message after 3 seconds
            setTimeout(() => {
                successAlert.remove();
            }, 3000);
        }
    });
}

// Newsletter subscription
const newsletterForm = document.querySelector('.input-group');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const input = this.querySelector('input');
        if (input.value.trim()) {
            alert('Obrigado por subscrever a nossa newsletter!');
            input.value = '';
        }
    });
}

// Navbar active state
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

window.addEventListener('scroll', () => {
    let current = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.clientHeight;

        if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').substring(1) === current) {
            link.classList.add('active');
        }
    });
});
