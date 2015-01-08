<?php
/**
*
* @package mChat
* @version $Id: mchat_lang.php
* @copyright (c) RMcGirr83 ( http://www.rmcgirr83.org/ )
* @copyright (c) djs596 ( http://djs596.com/ ), (c) Stokerpiller ( http://www.phpbb3bbcodes.com/ )
* @copyright (c) By Shapoval Andrey Vladimirovich (AllCity) ~ http://allcity.net.ru/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @tradução: Cid Lessa ( http://www.shihtzuforum.com.br/ ) | Disponivel em: http://www.suportephpbb.com.br/forum/
*
**/

/**
* DO NOT CHANGE!
*/
if (!defined('IN_PHPBB'))
{
  exit;
}

if (empty($lang) || !is_array($lang))
{
  $lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste (Unicode characters):
// ’ » “ ” …
//

$lang = array_merge($lang, array(

	// MCHAT
	'MCHAT_ADD'					=> 'Enviar',
	'MCHAT_ANNOUNCEMENT'		=> 'Aviso',
	'MCHAT_ARCHIVE'				=> 'Arquivo',	
	'MCHAT_ARCHIVE_PAGE'		=> 'Arquivo do Mini Chat',	
	'MCHAT_BBCODES'				=> 'BBCodes',
	'MCHAT_CLEAN'				=> 'Excluir Mensagens',
	'MCHAT_CLEANED'				=> 'Todas as mensagens foram removidas com sucesso',
	'MCHAT_CLEAR_INPUT'			=> 'Limpar',
	'MCHAT_COPYRIGHT'			=> '&copy; <a href="http://www.rmcgirr83.org/">RMcGirr83.org</a><br />Traduzido por: <a href="http://www.shihtzuforum.com.br/">Cid Lessa</a> com apoio do <a href="http://www.suportephpbb.com.br/">Suporte phpBB</a>',
	'MCHAT_CUSTOM_BBCODES'		=> 'BBcodes Personalizados',
	'MCHAT_DELALLMESS'			=> 'Remover todas as mensagens?',
	'MCHAT_DELCONFIRM'			=> 'Você confirma a exclusão?',
	'MCHAT_DELITE'				=> 'Deletar',
	'MCHAT_EDIT'				=> 'Editar',
	'MCHAT_EDITINFO'			=> 'Edite a mensagem e clique em OK',
	'MCHAT_ENABLE'				=> 'Desculpe, o Mini Chat está indisponível no momento',	
	'MCHAT_ERROR'				=> 'Erro',	
	'MCHAT_FLOOD'				=> 'Você não pode enviar outra mensagem tão rapidamente',	
	'MCHAT_HELP'				=> 'Regras do Mini Chat',
// uncomment and translate the following line for languages for the rules in the chat area
// <br /> signifies a new line, see above for Unicode characters to use
	//'MCHAT_RULES'				=> 'No swearing<br />Don’t advertise your site<br />Don’t leave several messages in succession<br />Don’t leave a pointless message<br />Don’t leave a message consisting of only smilies',	
	'MCHAT_HIDE_LIST'			=> 'Ocultar a lista',	
	'MCHAT_HOUR'				=> 'hora ',
	'MCHAT_HOURS'				=> 'horas',
	'MCHAT_IP_WHOIS_FOR'		=> 'O IP deste usuário é %s',
	
	'MCHAT_MINUTE'				=> 'minuto ',
	'MCHAT_MINUTES'				=> 'minutos ',
	'MCHAT_MESS_LONG'			=> 'Sua mensagem é muito longa.\nO limite é de %s caracteres',	
	'MCHAT_NO_CUSTOM_PAGE'		=> 'A página personalizada no Mini Chat não está disponível neste momento!',	
	'MCHAT_NOACCESS'			=> 'Você não tem permissão para teclar no Mini Chat',
	'MCHAT_NOACCESS_ARCHIVE'	=> 'Você não tem permissão para ver os arquivos do Mini Chat',	
	'MCHAT_NOJAVASCRIPT'		=> 'Seu navegador não suporta JavaScript ou o JavaScript desativado',		
	'MCHAT_NOMESSAGE'			=> 'Nenhuma mensagem',
	'MCHAT_NOMESSAGEINPUT'		=> 'Você não digitou sua mensagem',
	'MCHAT_NOSMILE'				=> 'Smilies não existe',
	'MCHAT_NOTINSTALLED_USER'	=> 'O Mini Chat não está instalado.  Por gentileza, notifique um Administrador.',
	'MCHAT_NOT_INSTALLED'		=> 'Existem problemas na base de dados do Mini Chat.<br />Execute o %sInstalador%s para corrigir os problemas existentes.',
	'MCHAT_OK'					=> 'OK',
	'MCHAT_PAUSE'				=> 'Pausado',
	'MCHAT_LOAD'				=> 'Carregando',      
	'MCHAT_PERMISSIONS'			=> 'Alterar permissões de Usuário',
	'MCHAT_REFRESHING'			=> 'Atualizando...',
	'MCHAT_REFRESH_NO'			=> 'Atualização automática está desligada',
	'MCHAT_REFRESH_YES'			=> 'Atualizando automaticamente a cada <strong>%d</strong> segundos',
	'MCHAT_RESPOND'				=> 'Responder para usuário',
	'MCHAT_RESET_QUESTION'		=> 'Eliminar o texto digitado?',
	'MCHAT_SESSION_OUT'			=> 'Esta sessão do Mini Chat Expirou',	
	'MCHAT_SHOW_LIST'			=> 'Exibir lista',
	'MCHAT_SECOND'				=> 'segundo ',
	'MCHAT_SECONDS'				=> 'segundos ',
	'MCHAT_SESSION_ENDS'		=> 'Esta sessão do Mini Chat termina em',
	'MCHAT_SMILES'				=> 'Smilies',

	'MCHAT_TOTALMESSAGES'		=> 'Total de mensagens: <strong>%s</strong>',
	'MCHAT_USESOUND'			=> 'Ativar/Desativar som ',
	
// uncomment and translate the following line for languages for the static message in the chat area
//	'STATIC_MESSAGE'			=> 'Put whatever you want here',
	// whois chatting stuff

	'MCHAT_ONLINE_USERS_TOTAL'			=> 'No total há <strong>%d</strong> usuários no Mini Chat ',
	'MCHAT_ONLINE_USER_TOTAL'			=> 'No total há <strong>%d</strong> usuário no Mini Chat ',
	'MCHAT_NO_CHATTERS'					=> 'Nenhum usuário teclando no Mini Chat',
	'MCHAT_ONLINE_EXPLAIN'				=> '( Baseado em usuários ativos na última %s)',
	
	'WHO_IS_CHATTING'			=> 'Quem está no Mini Chat',
	'WHO_IS_REFRESH_EXPLAIN'	=> 'Atualizando automaticamente a cada <strong>%d</strong> segundos',
	'MCHAT_NEW_TOPIC'			=> '<strong>Novo Tópico</strong>',		
	
	// UCP
	'UCP_PROFILE_MCHAT'	=> 'Preferências do Mini Chat',
	
	'DISPLAY_MCHAT' 	=> 'Exibir Mini Chat no Índice do Fórum',
	'SOUND_MCHAT'		=> 'Ativar som no Mini Chat',
	'DISPLAY_STATS_INDEX'	=> 'Exibir quem está no Mini Chat no Índice do Fórum',
	'DISPLAY_NEW_TOPICS'	=> 'Exibir novos tópicos no Mini Chat',
	'DISPLAY_AVATARS'	=> 'Exibir avatar dos usuários no Mini Chat',
	
	// ACP
	'USER_MCHAT_UPDATED'	=> 'As Preferências de usuário no Mini Chat foram atualizadas',
));
?>