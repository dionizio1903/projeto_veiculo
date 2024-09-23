<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Marca> $marcas
 */

use PHPUnit\Event\Telemetry\HRTime;

?>
<div class="marcas index content">
    <?= $this->Html->link(__('Cadastrar Nova Marca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Marcas de Fabricantes') ?></h3>
    <div class="table-responsive">
        <table >
            <thead class="text-center">
                <tr>
                    <th><?= $this->Paginator->sort('id fabricante') ?></th>
                    <th><?= $this->Paginator->sort('Fabricante') ?></th>
                    <th><?= $this->Paginator->sort('Tipo') ?></th>
                    <th><?= $this->Paginator->sort('Espécie') ?></th>
                    <th><?= $this->Paginator->sort('Carroceria') ?></th>
                    <th><?= $this->Paginator->sort('Criado') ?></th>
                    <th><?= $this->Paginator->sort('Modificado') ?></th>
                    <th class="actions "><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marcas as $marca): ?>
                <tr>
                    <td><?= $this->Number->format($marca->id_marcas) ?></td>
                    <td><?= h($marca->nome_marca) ?></td>
                    <td><?= h($marca->tipo) ?></td>
                    <td><?= h($marca->especie) ?></td>
                    <td><?= h($marca->carroceria) ?></td>
                    <td><?= h(date("d/m/Y",strtotime ($marca->created)))?></td>
                    <td><?= h(date("d/m/Y",strtotime($marca->modified))) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $marca->id_marcas]) ?>
                        <?= $this->Html->link(__('Alterar'), ['action' => 'edit', $marca->id_marcas]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $marca->id_marcas], ['confirm' => __('deseja apagar # {0}?', $marca->id_marcas)]) ?>
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
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, Mostrando {{current}} registro(s) de um {{count}} total')) ?></p>
    </div>
</div>