<?php
$id =5;
$titulo = $_GET['titulo'];
?>

<div class="modal modal-danger fade" id="<?= $id ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atenção</h4>
            </div>
            <div class="modal-body">
                <p>Você tem certeza que deseja excluir o evento <?= $titulo ?>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                <a href='crud.php?func=deleta&id=<?= $id ?>'><button type="button"  class="btn btn-outline">Excluir</button></a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>