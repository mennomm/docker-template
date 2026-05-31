
    let seconden = 0;

    function updateTimer() {
        
        
        seconden++;
        const minuten = Math.floor(seconden / 60);
        const restSeconden = seconden % 60;
        const secFormatted = String(restSeconden).padStart(2, '0');

        document.getElementById('timer').textContent =
            minuten + ':' + secFormatted;
    }
    

    setInterval(updateTimer, 1000);
