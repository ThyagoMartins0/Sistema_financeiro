document.addEventListener('DOMContentLoaded', function() {
    const homeLink = document.getElementById('home');
    const reportsLink = document.getElementById('reports');
    const settingsLink = document.getElementById('settings');
    const content = document.getElementById('content');

    homeLink.addEventListener('click', function() {
        content.innerHTML = `
            <h1>Home</h1>
            <p>Bem-vindo à página inicial do dashboard.</p>
        `;
    });

    reportsLink.addEventListener('click', function() {
        content.innerHTML = `
            <h1>Relatórios</h1>
            <p>Aqui você pode ver seus relatórios.</p>
        `;
    });

    settingsLink.addEventListener('click', function() {
        content.innerHTML = `
            <h1>Configurações</h1>
            <p>Aqui você pode alterar as configurações do dashboard.</p>
        `;
    });
});
