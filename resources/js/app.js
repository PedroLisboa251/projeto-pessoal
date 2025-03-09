import './bootstrap';
import '../css/app.css';

let currentIndex = 0;
const items = document.querySelectorAll('.item');
const container = document.querySelector('.image-dynamic-scrolling');

// Função para reiniciar a animação
function resetItemAnimation(item) {
    // Reinicia a animação sem remover a classe "visible"
    item.style.animation = 'none';
    // Força o reflow para garantir que o navegador registre a mudança
    void item.offsetWidth;
    // Reaplica a animação
    item.style.animation = 'fadeInUp 0.7s ease forwards';
}


// Atualiza o estilo e animações dos itens
function updateItems() {
    items.forEach((item, index) => {
        if (index === currentIndex) {
            item.style.transform = 'scale(1.1)';
            item.style.borderRadius = '50px';
            item.classList.add('active');
            resetItemAnimation(item); // Reinicia a animação do item ativo
        } else {
            item.style.transform = 'scale(1)';
            item.style.borderRadius = '25px';
            item.classList.remove('active');
        }
    });
}

// Configuração do IntersectionObserver
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        } else {
            entry.target.classList.remove('visible');
        }
    });
}, { threshold: 0.1 });

items.forEach(item => {
    item.style.borderRadius = '25px';
    observer.observe(item);
});

// Controle de rolagem para evitar múltiplas ativações
let isScrolling = false;

const handleScroll = (e) => {
    e.preventDefault();
    if (isScrolling) return;
    isScrolling = true;

    const direction = e.deltaY > 0 ? 1 : -1;
    const newIndex = Math.max(0, Math.min(currentIndex + direction, items.length - 1));

    if (newIndex !== currentIndex) {
        currentIndex = newIndex;
        container.scrollTo({
            top: items[currentIndex].offsetTop - container.offsetTop,
            behavior: 'smooth'
        });
        updateItems(); // Atualiza a animação dos itens
    }

    setTimeout(() => {
        isScrolling = false;
    }, 100);
};

container.addEventListener('wheel', handleScroll);

// Suporte para rolagem com teclado
document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
        e.preventDefault();
        const direction = e.key === 'ArrowDown' ? 1 : -1;
        const newIndex = Math.max(0, Math.min(currentIndex + direction, items.length - 1));

        if (newIndex !== currentIndex) {
            currentIndex = newIndex;
            container.scrollTo({
                top: items[currentIndex].offsetTop - container.offsetTop,
                behavior: 'smooth'
            });
            updateItems(); // Atualiza a animação dos itens
        }
    }
});

// Inicia com o primeiro item visível
updateItems();

// Adicionar ao seu arquivo JS
function animateTextOnScroll() {
    const textElements = document.querySelectorAll('.text-to-animate');

    const textObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('slide-up'); // Aplica a animação
                textObserver.unobserve(entry.target); // Para de observar após a animação
            }
        });
    }, { threshold: 0.2 }); // Dispara quando 10% do elemento estiver visível

    textElements.forEach(element => {
        textObserver.observe(element); // Observa cada elemento
    });
}

// Inicia a função quando o DOM estiver pronto
document.addEventListener('DOMContentLoaded', animateTextOnScroll);
