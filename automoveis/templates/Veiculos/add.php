<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo $veiculo
 * @var \Cake\Collection\CollectionInterface|string[] $marcas
 */
?>
<div class="d-flex justify-content-center">
    <aside class="column col-3">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Listar Veiculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column col-8">
        <div class="veiculos form content">
            <?= $this->Form->create($veiculo) ?>
            <fieldset>
                <legend><?= __('Cadastrar Veiculo') ?></legend>
                <?php
                    echo $this->Form->control('nome_veiculo');
                    echo $this->Form->control('ano', ['empty' => true]);
                    echo $this->Form->control('combustivel');
                    echo $this->Form->control('marca_id', ['options' => $marcas, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cadastrar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
