document.querySelectorAll('.copy-button').forEach(button => {
    button.addEventListener('click', () => {
        const codeElement = button.parentElement.querySelector('code');
        const code = codeElement.textContent;
        navigator.clipboard.writeText(code).then(() => {
            button.textContent = 'Copied!';
            button.style.background = '#2196F3';
            setTimeout(() => {
                button.textContent = 'Copy';
                button.style.background = '#4CAF50';
            }, 2000);
        }).catch(err => {
            console.error('Failed to copy text: ', err);
            button.textContent = 'Error!';
            setTimeout(() => {
                button.textContent = 'Copy';
            }, 2000);
        });
    });
});