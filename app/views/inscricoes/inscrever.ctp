
<h1>Inscrição</h1>
<?php
echo $this->Form->create('Inscricao', array('url' => array('controller' => 'inscricoes', 'action' => 'inscrever','inputDefaults' => array('div' => false))));
echo $this->Form->input('nome', array('label' => 'Nome: ')) ;
echo $this->Form->input('email', array('label' => 'E-mail: ')) ;
echo $this->Form->input('telefone', array('label' => 'Telefone: '));
echo $this->Form->input('endereco', array('label' => 'Endereco: ')) ;
echo $this->Form->end('Salvar');
?>