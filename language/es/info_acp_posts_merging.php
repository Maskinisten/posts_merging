<?php
/**
*
* Posts Merging extension for the phpBB Forum Software package.
*
* @copyright (c) 2013 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* @ignore
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

$lang = array_merge($lang, array(
	'ACP_POSTS_MERGING'				=> 'Fusionar mensajes',
	'ACP_POSTS_MERGING_EXPLAIN'		=> 'Aqúi puede aplicar los ajustes para la extensión Fusionar mensajes.',
	'MERGE_INTERVAL'				=> 'Intervalo de fusión de mensajes',
	'MERGE_INTERVAL_EXPLAIN'		=> 'Si un usuario envía más de 2 mensajes en este período de tiempo, los mensajes se fusionarán en un solo mensaje. La información sobre el tiempo transcurrido desde el mensaje anterior se añadirá (para cada mensaje). Dejar en blanco o establecer 0 para desactivar la Fusión de mensajes.',
	'MERGE_NO_TOPICS'				=> 'Temas excluidos',
	'MERGE_NO_TOPICS_EXPLAIN'		=> 'Lista separados por coma de IDs de los temas donde los mensajes de fusión no se debe aplicar a separarse, cuando la función está activada.',
	'MERGE_NO_FORUMS'				=> 'Foros excluidos',
	'MERGE_NO_FORUMS_EXPLAIN'		=> 'Lista separados por coma de IDs de los foros donde los mensajes de fusión no se debe aplicar a separarse, cuando la función está activada.',
	'MERGE_SEPARATOR'				=> 'Separator',
	'MERGE_SEPARATOR_EXPLAIN'		=> 'Here you can configure the separator which will appear between the merged message parts.<br />You can use BBCodes which will be parsed in according to the board or message settings.<br /><br />You can also use any language string present in your language/ directory like this: {L_<em>&lt;STRINGNAME&gt;</em>} where <em>&lt;STRINGNAME&gt;</em> is the name of the translated string you want to add. For example, {L_WROTE} will be displayed as “wrote” or its translation according to user’s locale.<br /><br />Use <em>&#37;s</em> placeholder (once) to include the time passed between merging in the separator.',
));
