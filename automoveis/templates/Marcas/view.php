<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca $marca
 */
?>



<div class="d-flex flex-row">
    <aside class="column mx-5">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Alterar Marca de Fabricante'), ['action' => 'edit', $marca->id_marcas], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $marca->id_marcas], ['confirm' => __('Deseja apagar # {0}?', $marca->id_marcas), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Marcas de Fabricantes '), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Cadastrar Marcas'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="marcas view content">
            <h3><?= h($marca->id_marcas) ?></h3>
            <table>
                <tr>
                    <th><?= __('Fabricante') ?></th>
                    <td><?= h($marca->nome_marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($marca->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Especie') ?></th>
                    <td><?= h($marca->especie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Carroceria') ?></th>
                    <td><?= h($marca->carroceria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Fabricante') ?></th>
                    <td><?= $this->Number->format($marca->id_marcas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h(date("d/m/Y",strtotime($marca->created))) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modificado') ?></th>
                    <td><?= h(date("d/m/Y",strtotime($marca->modified))) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Relação de Veiculos com fabricante') ?></h4>
                <?php if (!empty($marca->veiculos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Veiculos') ?></th>
                            <th><?= __('Nome Veiculo') ?></th>
                            <th><?= __('Ano') ?></th>
                            <th><?= __('Combustivel') ?></th>
                            <th><?= __('Fabricante') ?></th>
                            <th><?= __('Criado') ?></th>
                            <th><?= __('Modificado') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($marca->veiculos as $veiculo) : ?>
                        <tr>
                            <td><?= h($veiculo->id_veiculos) ?></td>
                            <td><?= h($veiculo->nome_veiculo) ?></td>
                            <td><?= h($veiculo->ano) ?></td>
                            <td><?= h($veiculo->combustivel) ?></td>
                            <td><?= h($marca->nome_marca) ?></td>
                            <td><?= h(date("d/m/Y",strtotime($veiculo->created))) ?></td>
                            <td><?= h(date("d/m/Y",strtotime($veiculo->modified))) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Veiculos', 'action' => 'view', $veiculo->id_veiculos]) ?>
                                <?= $this->Html->link(__('Alterar'), ['controller' => 'Veiculos', 'action' => 'edit', $veiculo->id_veiculos]) ?>
                                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Veiculos', 'action' => 'delete', $veiculo->id_veiculos], ['confirm' => __('Deseja Apagar # {0}?', $veiculo->id_veiculos)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>



