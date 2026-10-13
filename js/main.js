// Interações do portfólio: menu mobile, filtro de skills, clipboard, toast e formulário

// Mobile Navigation Toggle
const menuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const menuIcon = document.getElementById('menu-icon');

menuBtn.addEventListener('click', () => {
    const isHidden = mobileMenu.classList.contains('hidden');
    if (isHidden) {
        mobileMenu.classList.remove('hidden');
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-xmark');
    } else {
        mobileMenu.classList.add('hidden');
        menuIcon.classList.remove('fa-xmark');
        menuIcon.classList.add('fa-bars');
    }
});

// Close mobile drawer on link click
document.querySelectorAll('.mobile-link').forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        menuIcon.classList.remove('fa-xmark');
        menuIcon.classList.add('fa-bars');
    });
});

// Filter Skills Grid
function filterSkills(category) {
    const cards = document.querySelectorAll('.skill-card');
    const btns = document.querySelectorAll('.skill-tab-btn');

    // Update active state on buttons
    btns.forEach(btn => {
        if (btn.getAttribute('data-category') === category) {
            btn.className = "skill-tab-btn active px-5 py-2 rounded-xl text-xs font-bold transition-all bg-gradient-accent text-white shadow-lg";
        } else {
            btn.className = "skill-tab-btn px-5 py-2 rounded-xl text-xs font-bold transition-all bg-zinc-900 text-zinc-400 hover:text-white hover:bg-zinc-800 border border-zinc-800";
        }
    });

    // Filter items
    cards.forEach(card => {
        const cardCat = card.getAttribute('data-category');
        if (category === 'all' || cardCat === category) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}

// Copy text to clipboard with iframe fallback
function copyToClipboard(text, successMsg) {
    try {
        const dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
        showToast(successMsg || "Copiado com sucesso!");
    } catch (err) {
        showToast("Erro ao copiar texto.");
    }
}

// Display Toast Notification
function showToast(msg) {
    const toast = document.getElementById('toast');
    const toastMsg = document.getElementById('toast-message');
    toastMsg.textContent = msg;

    toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
    toast.classList.add('translate-y-0', 'opacity-100');

    setTimeout(() => {
        toast.classList.remove('translate-y-0', 'opacity-100');
        toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
    }, 3000);
}

// Form Submit Handler
function handleFormSubmit(e) {
    e.preventDefault();
    const name = document.getElementById('form-name').value;
    const email = document.getElementById('form-email').value;
    const subject = document.getElementById('form-subject').value;
    const message = document.getElementById('form-message').value;

    const mailtoUrl = `mailto:marlonmjr16@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(`Nome: ${name}\nE-mail: ${email}\n\nMensagem:\n${message}`)}`;

    window.location.href = mailtoUrl;
    showToast("Abrindo seu leitor de e-mail!");
}
