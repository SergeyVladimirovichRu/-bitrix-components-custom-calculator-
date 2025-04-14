document.addEventListener('DOMContentLoaded', function() {
    const containerId = document.querySelector('.calculator-container').id;
    const container = document.getElementById(containerId);
    
    container.querySelector('#calculate-btn').addEventListener('click', function() {
        const amount = parseFloat(container.querySelector('#amount').value);
        const period = parseFloat(container.querySelector('#period').value);
        const periodType = container.querySelector('#period-type').value;
        const rate = parseFloat(container.querySelector('#rate').value);
        
        if (isNaN(amount) {
            alert('Пожалуйста, введите корректную сумму');
            return;
        }
        
        if (isNaN(period)) {
            alert('Пожалуйста, введите корректный срок');
            return;
        }
        
        if (isNaN(rate)) {
            alert('Пожалуйста, введите корректную ставку');
            return;
        }
        
        // Расчет в зависимости от типа периода
        let months = period;
        if (periodType === 'days') {
            months = period / 30;
        } else if (periodType === 'years') {
            months = period * 12;
        }
        
        // Простой расчет платежа (можно заменить на аннуитетный или дифференцированный)
        const monthlyRate = rate / 100 / 12;
        const totalPayment = amount * (1 + monthlyRate * months);
        const monthlyPayment = totalPayment / months;
        
        // Показываем результаты
        const resultsContainer = container.querySelector('#results-container');
        resultsContainer.innerHTML = `
            <p><strong>Ежемесячный платеж:</strong> ${monthlyPayment.toFixed(2)}</p>
            <p><strong>Общая сумма выплат:</strong> ${totalPayment.toFixed(2)}</p>
            <p><strong>Переплата:</strong> ${(totalPayment - amount).toFixed(2)}</p>
        `;
        
        container.querySelector('.calculator-results').style.display = 'block';
    });
});
