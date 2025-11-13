<?php $this->layout('layouts::default'); ?>
<?php $this->start('main_c'); ?>

<?php
// Caminho do arquivo JSON
$caminhoJson = __DIR__ . '/../../../public/data/produtos.json';

// Verifica se o arquivo existe
if (!file_exists($caminhoJson)) {
    echo "<div class='alert alert-danger text-center mt-5'>Arquivo de produtos não encontrado.</div>";
    $produto = [];
} else {
    // Lê o arquivo e decodifica o JSON
    $json = file_get_contents($caminhoJson);
    $produto = json_decode($json, true);

    // Verifica se deu erro ao decodificar
    if ($produto === null) {
        echo "<div class='alert alert-danger text-center mt-5'>Erro ao ler o arquivo JSON de produtos.</div>";
        $produto = [];
    }
}
?>

<div class="container py-5">

    <!-- Barra de pesquisa -->
    <div class="row mb-4">
        <div class="col-md-8 offset-md-2">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pesquisar produtos..." aria-label="Pesquisar">
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </form>
        </div>
    </div>

    <!-- Lista de produtos -->
    <div class="row g-4">
        <?php if (empty($produto)): ?>
            <div class="col-12 text-center">
                <p class="text-muted">Nenhum produto disponível no momento.</p>
            </div>
        <?php else: ?>
            <?php foreach($produto as $index => $item): ?>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="<?= $this->asset($this->e($item['Imagem'])) ?>" class="card-img-top" alt="<?= $this->e($item['Nome']) ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= $this->e($item['Nome']) ?></h5>
                            <p class="card-text">R$ <?= number_format($item['Preco'], 2, ',', '.') ?></p>
                            <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#produtoModal<?= $index ?>">
                                Ver Detalhes
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal do produto -->
                <div class="modal fade" id="produtoModal<?= $index ?>" tabindex="-1" aria-labelledby="produtoModalLabel<?= $index ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?= $this->e($item['Nome']) ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?= $this->asset($this->e($item['Imagem'])) ?>" class="img-fluid rounded" alt="<?= $this->e($item['Nome']) ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="text-success">R$ <?= number_format($item['Preco'], 2, ',', '.') ?></h5>
                                        <p><?= $this->e($item['Descricao'] ?? 'Descrição do produto não disponível.') ?></p>
                                        <button class="btn btn-warning btn-lg">Comprar Agora</button>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h6>Comentários</h6>
                                    <ul class="list-group">
                                        <li class="list-group-item">João: Produto excelente!</li>
                                        <li class="list-group-item">Maria: Gostei muito da qualidade.</li>
                                        <li class="list-group-item">Carlos: Bom custo-benefício.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php $this->stop(); ?>
