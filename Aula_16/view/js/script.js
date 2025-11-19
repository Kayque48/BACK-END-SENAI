// Abrir modal
function abrirModal(nome, categoria, volume, valor, qtde) {
    const modal = document.getElementById('modalEditar');
    modal.style.display = 'block';

    document.getElementById('nome_original').value = nome;
    document.getElementById('nome_edit').value = nome;
    document.getElementById('categoria_edit').value = categoria;
    document.getElementById('volume_edit').value = volume;
    document.getElementById('valor_edit').value = valor;
    document.getElementById('qtde_edit').value = qtde;
}

// Fechar modal no X
document.addEventListener("DOMContentLoaded", () => {

    document.querySelector('.fechar').onclick = () => {
        document.getElementById('modalEditar').style.display = 'none';
    };

    // Fechar clicando fora
    window.onclick = (event) => {
        const modal = document.getElementById('modalEditar');
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };

});
