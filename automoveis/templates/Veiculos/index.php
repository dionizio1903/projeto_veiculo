<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Veiculo> $veiculos
 */
?>
<div class="veiculos index content">
    <?= $this->Html->link(__('Cadastrar Novo Veiculo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Veiculos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead class="text-center">
                <tr>
                    <th><?= $this->Paginator->sort('id_Veiculos') ?></th>
                    <th><?= $this->Paginator->sort('Veiculo') ?></th>
                    <th><?= $this->Paginator->sort('Ano') ?></th>
                    <th><?= $this->Paginator->sort('Combustivel') ?></th>
                    <th><?= $this->Paginator->sort('Fabricante') ?></th>
                    <th><?= $this->Paginator->sort('Criado') ?></th>
                    <th><?= $this->Paginator->sort('Modificado') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($veiculos as $veiculo): ?>
                <tr>
                    <td><?= $this->Number->format($veiculo->id_veiculos) ?></td>
                    <td><?= h($veiculo->nome_veiculo) ?></td>
                    <td><?= h($veiculo->ano) ?></td>
                    <td><?= h($veiculo->combustivel) ?></td>
                    <td><?= $veiculo->hasValue('marca') ? $this->Html->link($veiculo->marca->nome_marca, ['controller' => 'Marcas', 'action' => 'view', $veiculo->marca->id_marcas]) : '' ?></td>
                    <td><?= h(date("d/m/Y",strtotime($veiculo->created))) ?></td>
                    <td><?= h(date("d/m/Y",strtotime($veiculo->modified))) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $veiculo->id_veiculos]) ?>
                        <?= $this->Html->link(__('Alterar'), ['action' => 'edit', $veiculo->id_veiculos]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $veiculo->id_veiculos], ['confirm' => __('Deseja Apagar # {0}?', $veiculo->id_veiculos)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Proximo') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, Mostrando {{current}} Registro(s) de um  {{count}} total')) ?></p>
    </div>
</div>