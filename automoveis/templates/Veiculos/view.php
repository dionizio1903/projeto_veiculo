<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo $veiculo
 */
?>
<div class="d-flex flex-row">
    <aside class="column mx-5">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Alterar Veiculo'), ['action' => 'edit', $veiculo->id_veiculos], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Apagar Veiculo'), ['action' => 'delete', $veiculo->id_veiculos], ['confirm' => __('Deseja Apagar # {0}?', $veiculo->id_veiculos), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Veiculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Cadastrar novo Veiculo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column col-8">
        <div class="veiculos view content">
            <h3><?= h($veiculo->id_veiculos) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Veiculo') ?></th>
                    <td><?= h($veiculo->nome_veiculo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Combustivel') ?></th>
                    <td><?= h($veiculo->combustivel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= $veiculo->hasValue('marca') ? $this->Html->link($veiculo->marca->nome_marca, ['controller' => 'Marcas', 'action' => 'view', $veiculo->marca->id_marcas]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Veiculos') ?></th>
                    <td><?= $this->Number->format($veiculo->id_veiculos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano') ?></th>
                    <td><?= h(date("d/m/Y",strtotime($veiculo->ano))) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h(date("d/m/Y",strtotime($veiculo->created))) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modificado') ?></th>
                    <td><?= h(date("d/m/Y",strtotime($veiculo->modified))) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>