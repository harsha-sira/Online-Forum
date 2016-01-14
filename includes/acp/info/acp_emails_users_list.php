<?php
/** 
*
* View how long it has been since your members' last visit
* By RMcGirr83 / robra
*
* @package acp
* @version $Id: acp_email_users_list.php,v 1.0.0 2012/08/17
* @copyright (c) 2012 RMcGirr83 / robra
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package acp
*/
class acp_emails_users_list
{
	var $u_action;
	var $new_config;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$error = $notify = array();

		$user->add_lang(array('mods/info_acp_emails_users_list'));
		$mode = request_var('mode', '');
		$start = request_var('start', 0);
		
		if ($mode == 'list')
{

// How many Users do we have?
$sql = 'SELECT COUNT(user_id) AS total_users
	FROM ' . USERS_TABLE . '
	WHERE user_type <> ' .  USER_IGNORE;
$result = $db->sql_query($sql);
$total_users = (int) $db->sql_fetchfield('total_users');
$db->sql_freeresult($result);

// want more to display...change the 20 to a higher number
$tf = 20;

//Pull Users from the database
$sql = 'SELECT *
	FROM ' . USERS_TABLE . '
	WHERE user_type <> ' .  USER_IGNORE . '
	ORDER BY user_id';
$result = $db->sql_query_limit($sql, $tf, $start);

// Assign specific vars
while ($row = $db->sql_fetchrow($result))
{
	$template->assign_block_vars('list', array(
		'ID'				=> $row['user_id'],
		'EMAIL'				=> $row['user_email'],
		'REGDATE'			=> $user->format_date($row['user_regdate']),
		'LASTVISIT'			=> $user->format_date($row['user_lastvisit']),
		'USERNAME_FULL'		=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
		'USERNAME'			=> get_username_string('username', $row['user_id'], $row['username'], $row['user_colour']),
		'USER_COLOR'		=> get_username_string('colour', $row['user_id'], $row['username'], $row['user_colour']),
		'U_VIEW_PROFILE'	=> get_username_string('profile', $row['user_id'], $row['username'], $row['user_colour']),
	));
}
			
        $this->tpl_name = 'acp_emails_users_list';
        $this->page_title = 'EMAILS_USERS_LIST';

$template->assign_vars(array(
	'PAGINATION'		=> generate_pagination($this->u_action, $total_users, $tf, $start),
	'PAGE_NUMBER'		=> on_page($total_users, $tf, $start),
	'U_CSV_LIST'		=> append_sid("{$phpbb_root_path}list.$phpEx", 'mode=list'),
	'U_ACTION'			=> $this->u_action,
	'TOTAL_USERS'		=> ($total_users == 1) ? $user->lang['USER_COUNT'] : sprintf($user->lang['USER_COUNTS'], $total_users),
));

        $db->sql_freeresult($result);
	}
	}
}

?>