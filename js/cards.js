// Add any additional JavaScript effects or animations here if needed

// Example: Simple image zoom animation on hover
const cardItems = document.querySelectorAll('.card-item');

cardItems.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.querySelector('img').style.transform = 'scale(1.05)';
    });

    card.addEventListener('mouseleave', () => {
        card.querySelector('img').style.transform = 'scale(1)';
    });
});
