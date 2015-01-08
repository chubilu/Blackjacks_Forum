<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Novo usuário registrado

Olá,

O registro do usuário "<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" foi desativado ou recém-criado. Você deverá verificar as informações deste usuário (caso necessário) e ativá-lo apropriadamente.

Use este endereço para visualizar o perfil do usuário:
<?php echo (isset($this->_rootref['U_USER_DETAILS'])) ? $this->_rootref['U_USER_DETAILS'] : ''; ?>


Use este endereço para ativar o registro:
<?php echo (isset($this->_rootref['U_ACTIVATE'])) ? $this->_rootref['U_ACTIVATE'] : ''; ?>



<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>