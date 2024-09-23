<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca $marca
 */
?>
<div class="d-flex justify-content-center">
    <aside class="column col-3">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Listar Marcas de fabricantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column col-8">
        <div class="marcas form content">
            <?= $this->Form->create($marca) ?>
            <fieldset>
                <legend><?= __('Cadastrar Marca do Fabricante') ?></legend>
                <?php
                    echo $this->Form->control('nome_marca');
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('especie');
                    echo $this->Form->control('carroceria');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cadastrar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
