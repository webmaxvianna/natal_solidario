<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crianca $crianca
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Criança'), ['action' => 'edit', $crianca->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Excluir Criança'), ['action' => 'delete', $crianca->id], ['confirm' => __('Deseja realmente excluir?'), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Crianças'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Cadastrar Criança'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="criancas view content">
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($crianca->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sobrenome') ?></th>
                    <td><?= h($crianca->sobrenome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexo') ?></th>
                    <td><?= h($crianca->sexo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idade') ?></th>
                    <td><?= h($crianca->idade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome Padrinho') ?></th>
                    <td><?= h($crianca->nome_padrinho) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel Padrinho') ?></th>
                    <td><?= h($crianca->tel_padrinho) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Padrinho') ?></th>
                    <td><?= h($crianca->email_padrinho) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($crianca->status) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observacoes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($crianca->observacoes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
