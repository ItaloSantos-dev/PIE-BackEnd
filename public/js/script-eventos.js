    function alternarDetalhesEvento(id) {
        const detalhes = document.getElementById(id);
        const botaodetalhes = document.getElementById('btnDetalhes');

        const colapso = bootstrap.Collapse.getOrCreateInstance(detalhes);

        if (detalhes.classList.contains('show')) {
            colapso.hide();
            botaodetalhes.textContent = 'Mais detalhes';
        } else {
            colapso.show();
            botaodetalhes.textContent = 'Menos detalhes';
        }
    }