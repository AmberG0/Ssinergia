// Modal functionality
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('modal');
    const openModalBtns = document.querySelectorAll('.open-modal');
    const closeModalBtn = document.querySelector('.close-modal');

    // Open modal
    openModalBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    // Close modal
    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', function() {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        });
    }

    // Close modal on outside click
    window.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mainNav = document.querySelector('.main-nav');

    if (mobileMenuBtn && mainNav) {
        mobileMenuBtn.addEventListener('click', function() {
            mainNav.style.display = mainNav.style.display === 'block' ? 'none' : 'block';
        });
    }

    // Calculator functionality
    const calculateBtn = document.getElementById('calculateBtn');
    if (calculateBtn) {
        calculateBtn.addEventListener('click', calculateCost);
        
        // Auto-calculate on page load
        calculateCost();
    }

    // Form submissions
    const callbackForm = document.getElementById('callbackForm');
    const contactForm = document.getElementById('contactForm');

    if (callbackForm) {
        callbackForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Спасибо! Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.');
            modal.classList.remove('active');
            document.body.style.overflow = '';
            this.reset();
        });
    }

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Сообщение отправлено! Мы ответим вам в течение рабочего дня.');
            this.reset();
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
});

// Calculator logic
function calculateCost() {
    // Foundation
    const foundationType = document.querySelector('input[name="foundation_type"]:checked');
    const foundationArea = parseFloat(document.getElementById('foundation_area').value) || 0;
    
    let foundationCost = 0;
    if (foundationType) {
        const foundationPrice = parseFloat(foundationType.dataset.price);
        foundationCost = foundationPrice * foundationArea;
    }

    // Walls
    const wallMaterial = document.querySelector('input[name="wall_material"]:checked');
    const wallArea = parseFloat(document.getElementById('wall_area').value) || 0;
    
    let wallsCost = 0;
    if (wallMaterial) {
        const wallPrice = parseFloat(wallMaterial.dataset.price);
        wallsCost = wallPrice * wallArea;
    }

    // Roof
    const roofType = document.querySelector('input[name="roof_type"]:checked');
    const roofArea = parseFloat(document.getElementById('roof_area').value) || 0;
    
    let roofCost = 0;
    if (roofType) {
        const roofPrice = parseFloat(roofType.dataset.price);
        roofCost = roofPrice * roofArea;
    }

    // Extra works
    let extrasCost = 0;
    const extraWorks = document.querySelectorAll('input[name="extra_works"]:checked');
    extraWorks.forEach(work => {
        const price = parseFloat(work.dataset.price);
        if (work.value === 'plaster' || work.value === 'painting') {
            extrasCost += price * wallArea;
        } else if (work.value === 'screed') {
            extrasCost += price * foundationArea;
        }
    });

    // Total
    const totalCost = foundationCost + wallsCost + roofCost + extrasCost;

    // Update display
    document.getElementById('foundation_cost').textContent = formatCurrency(foundationCost);
    document.getElementById('walls_cost').textContent = formatCurrency(wallsCost);
    document.getElementById('roof_cost').textContent = formatCurrency(roofCost);
    document.getElementById('extras_cost').textContent = formatCurrency(extrasCost);
    document.getElementById('total_cost').textContent = formatCurrency(totalCost);

    // Animation
    animateValue('total_cost', totalCost);
}

// Format currency
function formatCurrency(amount) {
    return new Intl.NumberFormat('ru-RU').format(Math.round(amount)) + ' ₽';
}

// Animate value
function animateValue(elementId, endValue) {
    const element = document.getElementById(elementId);
    const duration = 1000;
    const startValue = 0;
    const startTime = performance.now();

    function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        
        const currentValue = startValue + (endValue - startValue) * easeOutQuad(progress);
        element.textContent = formatCurrency(currentValue);

        if (progress < 1) {
            requestAnimationFrame(update);
        }
    }

    requestAnimationFrame(update);
}

// Easing function
function easeOutQuad(t) {
    return t * (2 - t);
}

// Phone mask (simple version)
document.addEventListener('DOMContentLoaded', function() {
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    
    phoneInputs.forEach(input => {
        input.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 0) {
                if (value[0] === '7' || value[0] === '8') {
                    value = value.substring(1);
                }
                
                let formatted = '+7';
                if (value.length > 0) formatted += ' (' + value.substring(0, 3);
                if (value.length > 3) formatted += ') ' + value.substring(3, 6);
                if (value.length > 6) formatted += '-' + value.substring(6, 8);
                if (value.length > 8) formatted += '-' + value.substring(8, 10);
                
                e.target.value = formatted;
            }
        });
    });
});
