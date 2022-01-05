<?php
/**
*
* Kiss Portal extension for the phpBB Forum Software package.
*
* @copyright (c) 2022 Michael O’Toole <http://www.phpbbireland.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace phpbbireland\portal\acp;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

global $request, $phpEx, $k_config, $template;

$user->add_lang_ext('phpbbireland/portal', 'blocks/k_recent_topics');

$k_top_posters_to_display = $k_config['k_top_posters_to_display'];

if ($request->is_set_post('submit'))
{
	$k_top_posters_to_display = $request->variable('k_top_posters_to_display', 10);
	$sgp_functions_admin->sgp_acp_set_config('k_top_posters_to_display', $k_top_posters_to_display);
}

$template->assign_vars([
	'S_K_TOP_POSTERS_TO_DISPLAY' => $k_top_posters_to_display,
]);
