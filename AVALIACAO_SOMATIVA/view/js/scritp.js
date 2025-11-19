// Abrir modal e preencher os campos
function abrirModal(titulo, autor, ano, genero, quantidade) {
    const modal = document.getElementById('modalEditar');
    modal.style.display = 'block';

    document.getElementById('titulo_original').value = titulo;
    document.getElementById('titulo_edit').value = titulo;
    document.getElementById('autor_edit').value = autor;
    document.getElementById('ano_edit').value = ano;
    document.getElementById('genero_edit').value = genero;
    document.getElementById('qntd_edit').value = quantidade;
}

// Fechar modal
document.addEventListener("DOMContentLoaded", () => {
    document.querySelector('.fechar').onclick = () => {
        document.getElementById('modalEditar').style.display = 'none';
    };

    window.onclick = (event) => {
        const modal = document.getElementById('modalEditar');
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };
});
