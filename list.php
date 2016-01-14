<?php
/**
*
* @package Emails Users List
* @version $Id: list.php,v 0003 01:19 26/06/2008 cherokee red Exp $
* @copyright (c) 2005 phpBB Group / RMcGirr83 / robra
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();
$user->add_lang('mods/info_acp_emails_users_list');
// add a mode for a CSV Listing
$mode = request_var('mode', '');
$start = request_var('start', 0);

// Founders only access
if ($user->data['user_type'] != USER_FOUNDER)
{
	trigger_error('NOT_AUTHORISED');
}

if ($mode == 'list')
{
	$csv_output = trim($config['sitename']) . ',' . $user->lang['EMAIL'];
	$csv_output .= "\n";
	$csv_output .= $user->lang['USER_ID'] . ',' . $user->lang['USERNAME'] . ',' . $user->lang['EMAIL_ADDRESS'] . ',' . $user->lang['SORT_JOINED'] . ',' . $user->lang['LAST_VISIT'];
	$csv_output .= "\n";
	//Pull Users from the database
	$sql = 'SELECT FROM_UNIXTIME(user_regdate) AS regdate, user_id, username, user_email, FROM_UNIXTIME(user_lastvisit) AS lastvisit
		FROM ' . USERS_TABLE . '
			WHERE user_type <> ' .  USER_IGNORE . '
				ORDER BY user_id';

	$result = $db->sql_query($sql);
	while ($row = $db->sql_fetchrow($result))
	{
			$csv_output .= $row['user_id'] . ',' . $row['username'] . ',' . $row['user_email'] . ',' . $row['regdate'] . ',' . $row['lastvisit'];
			$csv_output .="\n";
	}
	$db->sql_freeresult($result);
	header("Content-type: application/vnd.ms-excel");
	header("Content-disposition:  attachment; filename=" . str_replace(" ", "_", $config['sitename']) . '_' . $user->lang['EMAIL'] . 's_' . date("Y-m-d").".csv"); 
	print $csv_output;
	exit;
}

?>