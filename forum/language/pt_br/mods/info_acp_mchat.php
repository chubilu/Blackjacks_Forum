<?php

/**
*
* @package - mChat
* @version $Id: info_acp_mchat.php
* @copyright (c) 2010 RMcGirr83 ( http://www.rmcgirr83.org/ )
* @copyright (c) 2009 phpbb3bbcodes.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @tradução: Cid Lessa ( http://www.shihtzuforum.com.br/ ) | Disponivel em: http://www.suportephpbb.com.br/forum/
*
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
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, array(

	// UMIL stuff
	'ACP_MCHAT_CONFIG'				=> 'Configurações',
	'ACP_CAT_MCHAT'					=> 'Mini Chat',
	'ACP_MCHAT_TITLE'				=> 'Mini Chat',
	'ACP_MCHAT_TITLE_EXPLAIN'		=> 'Um local de bate-papo para seu Fórum',
	'MCHAT_TABLE_DELETED'			=> 'As tabelas do Mini Chat foram deletadas com sucesso',
	'MCHAT_TABLE_CREATED'			=> 'As tabelas do Mini Chat foram criadas com sucesso',
	'MCHAT_TABLE_UPDATED'			=> 'As tabelas do Mini Chat foram atualizadas com sucesso',
	'MCHAT_NOTHING_TO_UPDATE'		=> 'Em atualização....continuando',
	'UCP_CAT_MCHAT'					=> 'Preferências do Mini Chat',
	'UCP_MCHAT_CONFIG'				=> 'Preferências do Usuário no Mini Chat',

	// ACP entries
	'ACP_MCHAT_RULES'				=> 'Regras',
	'ACP_MCHAT_RULES_EXPLAIN'		=> 'Digite as regras do Mini Chat aqui. Cada regra em um nova linha.<br />Você está limitado a 255 caracteres.',
	'LOG_MCHAT_CONFIG_UPDATE'		=> '<strong>Atualização das Configurações do Mini Chat </strong>',
	'MCHAT_CONFIG_SAVED'			=> 'As configurações do Mini Chat foram atualizadas com sucesso.',
	'MCHAT_TITLE'					=> 'Mini Chat',
	'MCHAT_VERSION'					=> 'Versão:',
	'MCHAT_ENABLE'					=> 'Ativar Mini Chat',
	'MCHAT_ENABLE_EXPLAIN'			=> 'Ativar ou desativar o Mini Chat tanto no índice quanto na página personalizada.',
	'MCHAT_AVATARS'					=> 'Exibir Avatares',
	'MCHAT_AVATARS_EXPLAIN'			=> 'Selecionando "Sim", os Avatares serão redimensionados e exibidos ao lado da mensagem.',	
	'MCHAT_ON_INDEX'				=> 'Mini Chat no Índice do Fórum',
	'MCHAT_ON_INDEX_EXPLAIN'		=> 'Selecione "Sim" para exibir o Mini Chat no Índice do Fórum.',
	'MCHAT_INDEX_HEIGHT'			=> 'Altura do Mini Chat no Índice do Fórum',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'	=> 'Defina a altura da tela do Mini Chat no Índice do Fórum em pixels.<br /><em>O limite de altura é entre 50 e 1000 pixels</em>.',
	'MCHAT_LOCATION'				=> 'Localização do Mini Chat no Índice do Fórum',
	'MCHAT_LOCATION_EXPLAIN'		=> 'Escolha a localização da tela do Mini Chat no Índice do Fórum.',
	'MCHAT_TOP_OF_FORUM'			=> 'Acima da lista de Fóruns',
	'MCHAT_BOTTOM_OF_FORUM'			=> 'Abaixo da lista de Fóruns',
	'MCHAT_REFRESH'					=> 'Atualizar em',
	'MCHAT_REFRESH_EXPLAIN'			=> 'Valor em segundos em que o Mini Chat atualizará automaticamente.<br /><em>O limite de tempo é entre 5 e 60 segundos</em>.',
	'MCHAT_PRUNE'					=> 'Ativar Limpeza de Mensagens',
	'MCHAT_PRUNE_EXPLAIN'			=> 'Selecione "Sim" para ativar o recurso de limpeza de mensagens.<br /><em>Somente funcionará se o usuário puder ver o arquivo do Mini Chat ou a página personalizada.</em>.',
	'MCHAT_PRUNE_NUM'				=> 'Mensagens mantidas na limpeza',
	'MCHAT_PRUNE_NUM_EXPLAIN'		=> 'Número de mensagens que deverão ser retidas no Mini Chat ao efeturar a limpeza.',	
	'MCHAT_MESSAGE_LIMIT'			=> 'Limite de Mensagens',
	'MCHAT_MESSAGE_LIMIT_EXPLAIN'	=> 'Defina o número máximo de mensgens a serem exibidas na tela do Mini Chat<br /><em>O recomendado é entre 10 e 30 mensagens</em>.',
	'MCHAT_ARCHIVE_LIMIT'			=> 'Limite do Arquivo de Mensagens',
	'MCHAT_ARCHIVE_LIMIT_EXPLAIN'	=> 'Número máximo de mensagens a serem exibidas por página no arquivo do Mini Chat.<br /> <em>O recomendado é entre 25 e 50 mensagens</em>.',
	'MCHAT_FLOOD_TIME'				=> 'Tempo para Flood',
	'MCHAT_FLOOD_TIME_EXPLAIN'		=> 'O tempo em segundos que o usuário terá que esperar para postar uma nova mensagem.<br /><em>O recomendado é entre 5 e 30. 0 libera as postagens</em>.',
	'MCHAT_MAX_MESSAGE_LENGTH'			=> 'Tamanho máximo da mensagem',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'	=> 'Número máximo de caracteres em cada mensagem postada.<br /><em>O recomendado é entre 100 e 500 caracteres. 0 liberar o tamanho</em>.',
	'MCHAT_CUSTOM_PAGE'				=> 'Página personalizada',
	'MCHAT_CUSTOM_PAGE_EXPLAIN'		=> 'Permite a utilização de uma página exclusiva para o Mini Chat',
	'MCHAT_CUSTOM_HEIGHT'			=> 'Altura da página personalizada',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'	=> 'Defina a altura da tela do Mini Chat na página personalizada em pixels.<br /><em>O limite de altura é entre 50 e 1000 pixels</em>.',
	'MCHAT_DATE_FORMAT'				=> 'Formato da data',
	'MCHAT_DATE_FORMAT_EXPLAIN'		=> 'A sintaxe utilizada é idêntica à função PHP <a href="http://www.php.net/date">date()</a>.',
	'MCHAT_CUSTOM_DATEFORMAT'		=> 'Personalizar...',
	'MCHAT_WHOIS'					=> 'Na tela do Mini Chat',
	'MCHAT_WHOIS_EXPLAIN'			=> 'Exibe informações sobre usuários que estão no Mini Chat na própria tela do Mini Chat',
	'MCHAT_WHOIS_REFRESH'			=> 'Atualizar quem está no Mini Chat',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'	=> 'Número em segundos para atualizar automaticamente os usuários que estão teclando no Mini Chat.<br /><em>O limite de tempo é entre 30 e 300 segundos</em>.',
	'MCHAT_BBCODES_DISALLOWED'		=> 'Desativar BBcodes',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'	=> 'Aqui você pode inserir os BBcodes que <strong>NÃO</strong> poderão ser usados em mensagens.<br />Separe os BBcodes por uma barra vertical, por exemplo: <br />b|i|u|code|list|list=|flash|quote e/ou a %sTag (nome) do BBcode personalizado%s',
	'MCHAT_STATIC_MESSAGE'			=> 'Mensagem Estática',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'	=> 'Aqui você pode inserir uma mensagem estática que será exibida aos usuários do Mini Chat.  Código HTML é permitido.<br />Deixe o campo vazio para não utilizar o recurso. O limite da mensagem estática é de 255 caracteres.',
	'MCHAT_USER_TIMEOUT'			=> 'Sessão do usuário',
	'MCHAT_USER_TIMEOUT_EXPLAIN'	=> 'Defina a quantidade de tempo para que a sessão do usuário no Mini Chat seja encerrada. Defina 0 para desativar.<br /><em>Você está limitado às %sConfigurações do tempo da sessão no Fórum%s que atualmente está configurado para %s segundos</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'	=> 'Utilizar configurações do Fórum para Smilies',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'	=> 'Se definido com "Sim", o limite de Smilies para mensagens no Mini Chat será o mesmo de suas configurações para o Fórum',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'	=> 'Utilizar configurações do Fórum para caracteres',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'	=> 'Se definido com "Sim", o limite de caracteres para mensagens no Mini Chat será o mesmo de suas configurações para o Fórum',
	'MCHAT_NEW_POSTS'				=> 'Exibir novos tópicos no Mini Chat',
	'MCHAT_NEW_POSTS_EXPLAIN'		=> 'Se definido como sim, os nóvos tópicos criados no Fórum serão exibidos automaticamento no Mini Chat.<br /><strong>Para isso, é necessário que você tenha instalado o Add-On de novos tópicos.</strong> (O Add-On está dentro da pasta contrib no pacote de instalação da MOD).',
	'MCHAT_MAIN'					=> 'Painel de Configurações',
	'MCHAT_STATS'					=> 'Exibir quem está no Mini Chat',
	'MCHAT_STATS_INDEX'				=> 'No Índice do Fórum',
	'MCHAT_STATS_INDEX_EXPLAIN'		=> 'Exibe informações sobre usuários que estão no Mini Chat no Índice do Fórum',
	'MCHAT_MESSAGES'				=> 'Configurações de Mensagem',
	'MCHAT_PAUSE_ON_INPUT'			=> 'Pausar ao digitar',
	'MCHAT_PAUSE_ON_INPUT_EXPLAIN'	=> 'Se definido como "Sim", o Mini Chat não será atualizado para o usuário que estiver digitando uma mensagem.',
	
	// error reporting
	'MCHAT_NEEDS_UPDATING'	=> 'O Mini Chat precisa ser atualizado. É necessário um Administrador para executar esta operação.',
	'MCHAT_WRONG_VERSION'	=> 'Uma versão antiga do Mini Chat está instalada. Por favor, execute o %sinstalador%s para atualizar para a nova versão.',
	'WARNING'	=> 'Warning',
	'TOO_LONG_DATE'		=> 'O formato da data inserido é muito longo.',
	'TOO_SHORT_DATE'	=> 'O formato da data inserido é muito curto.',
	'TOO_SMALL_REFRESH'	=> 'O valor para atualização é inferior ao permitido.',
	'TOO_LARGE_REFRESH'	=> 'O valor para atualização é superior ao permitido.',
	'TOO_SMALL_MESSAGE_LIMIT'	=> 'O limite da mensagem é inferior ao permitido.',
	'TOO_LARGE_MESSAGE_LIMIT'	=> 'O limite da mensagem é superior ao permitido.',
	'TOO_SMALL_ARCHIVE_LIMIT'	=> 'O limite de arquivos é inferior ao permitido.',
	'TOO_LARGE_ARCHIVE_LIMIT'	=> 'O limite de arquivos é superior ao permitido.',
	'TOO_SMALL_FLOOD_TIME'	=> 'O tempo para o limite de flood é muito curto.',
	'TOO_LARGE_FLOOD_TIME'	=> 'O tempo para o limite de flood é muito longo.',
	'TOO_SMALL_MAX_MESSAGE_LNGTH'	=> 'O tamanho definido para a mensagem é muito pequeno.',
	'TOO_LARGE_MAX_MESSAGE_LNGTH'	=> 'O tamanho definido para a mensagem é muito grande.',
	'TOO_SMALL_MAX_WORDS_LNGTH'	=> 'O tamanho definido para o cumprimento das palavras é muito pequeno.',
	'TOO_LARGE_MAX_WORDS_LNGTH'	=> 'O tamanho definido para o cumprimento das palavras é muito grande.',
	'TOO_SMALL_WHOIS_REFRESH'	=> 'O tempo de atualização de quem está no Mini Chat é muito curto.',
	'TOO_LARGE_WHOIS_REFRESH'	=> 'O tempo de atualização de quem está no Mini Chat é muito longo.',	
	'TOO_SMALL_INDEX_HEIGHT'	=> 'O tamanho definido para a tela do Mini Chat no Índice do Fórum é muito pequeno.',
	'TOO_LARGE_INDEX_HEIGHT'	=> 'O tamanho definido para a tela do Mini Chat no Índice do Fórum é muito grande.',
	'TOO_SMALL_CUSTOM_HEIGHT'	=> 'O tamanho definido para a tela do Mini Chat na Página personalizada é muito pequeno.',
	'TOO_LARGE_CUSTOM_HEIGHT'	=> 'O tamanho definido para a tela do Mini Chat na Página personalizada é muito grande.',
	'TOO_SHORT_STATIC_MESSAGE'	=> 'A mensagem estática é muito curta.',
	'TOO_LONG_STATIC_MESSAGE'	=> 'A mensagem estática é muito longa.',	
	'TOO_SMALL_TIMEOUT'	=> 'O tempo de sessão do usuário é muito curto.',
	'TOO_LARGE_TIMEOUT'	=> 'O tempo de sessão do usuário é muito longo.',
	
));

?>