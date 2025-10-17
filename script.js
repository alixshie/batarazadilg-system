
Document.addEventListener('DOMContentLoaded', () => {
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    prevButton.addEventListener('click', () => {
        alert('Previous Month');
    });

    nextButton.addEventListener('click', () => {
        alert('Next Month');
    });
});
