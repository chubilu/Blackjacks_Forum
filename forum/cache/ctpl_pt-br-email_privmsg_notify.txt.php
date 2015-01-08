<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Chegou uma mensagem particular nova

Olá <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Você recebeu uma mensagem particular nova de "<?php echo (isset($this->_rootref['AUTHOR_NAME'])) ? $this->_rootref['AUTHOR_NAME'] : ''; ?>" no seu registro em "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" com o seguinte título:

<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>


Você pode ler a sua mensagem clicando no seguinte endereço:

<?php echo (isset($this->_rootref['U_VIEW_MESSAGE'])) ? $this->_rootref['U_VIEW_MESSAGE'] : ''; ?>


Lembre-se que você pode escolher não ser notificado quando receber mensagens particulares novas, selecionando a respectiva opção em seu perfil.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>