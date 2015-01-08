<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<br clear="all" />
		
<?php $this->_tpl_include('forumlist_body.html'); if ($this->_rootref['S_MCHAT_ENABLE'] && $this->_rootref['S_MCHAT_ON_INDEX'] && $this->_rootref['S_MCHAT_LOCATION']) {  $this->_tpl_include('mchat_body.html'); } if ($this->_rootref['S_MCHAT_ENABLE'] && $this->_rootref['S_MCHAT_ON_INDEX'] && ! $this->_rootref['S_MCHAT_LOCATION']) {  $this->_tpl_include('mchat_body.html'); } ?>

<br clear="all" />

<table class="tablebg" width="100%" cellspacing="0">
<tr>
	<td class="cat2" colspan="2"><h4><?php if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  if ($this->_rootref['U_VIEWONLINE']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a><?php } else { echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); } ?> -<?php } ?>&nbsp;<?php echo ((isset($this->_rootref['L_STATISTICS'])) ? $this->_rootref['L_STATISTICS'] : ((isset($user->lang['STATISTICS'])) ? $user->lang['STATISTICS'] : '{ STATISTICS }')); ?></h4></td>

	</tr>
<tr>
	<td class="row1" width="100%">
	<span class="genmed"><?php echo (isset($this->_rootref['TOTAL_USERS_ONLINE'])) ? $this->_rootref['TOTAL_USERS_ONLINE'] : ''; ?> (<?php echo ((isset($this->_rootref['L_ONLINE_EXPLAIN'])) ? $this->_rootref['L_ONLINE_EXPLAIN'] : ((isset($user->lang['ONLINE_EXPLAIN'])) ? $user->lang['ONLINE_EXPLAIN'] : '{ ONLINE_EXPLAIN }')); ?>)<br /><?php echo (isset($this->_rootref['RECORD_USERS'])) ? $this->_rootref['RECORD_USERS'] : ''; ?><br /><br /><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?></span>
	<?php if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  if ($this->_rootref['LEGEND']) {  ?><br /><b class="gensmall"><?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?> :: <?php echo (isset($this->_rootref['LEGEND'])) ? $this->_rootref['LEGEND'] : ''; ?></b><br /><br /><?php } } ?>

	<p class="genmed2"><?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?> | <?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?> | <?php echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; ?> | <?php echo (isset($this->_rootref['NEWEST_USER'])) ? $this->_rootref['NEWEST_USER'] : ''; ?></p>
	</td>
</tr>
</table>

<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?>

<table class="tablebg" cellspacing="0" width="100%">
<tr>
<td class="cookies" nowrap="nowrap">&nbsp;
<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?><a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MARK_FORUMS_READ'])) ? $this->_rootref['L_MARK_FORUMS_READ'] : ((isset($user->lang['MARK_FORUMS_READ'])) ? $user->lang['MARK_FORUMS_READ'] : '{ MARK_FORUMS_READ }')); ?></a></td><?php } ?>

<td class="cookies" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>" nowrap="nowrap"><?php if (! $this->_rootref['S_IS_BOT'] || $this->_rootref['U_TEAM']) {  ?><a href="<?php echo (isset($this->_rootref['U_DELETE_COOKIES'])) ? $this->_rootref['U_DELETE_COOKIES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_DELETE_COOKIES'])) ? $this->_rootref['L_DELETE_COOKIES'] : ((isset($user->lang['DELETE_COOKIES'])) ? $user->lang['DELETE_COOKIES'] : '{ DELETE_COOKIES }')); ?></a><?php } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_TEAM']) {  ?> | <?php } if ($this->_rootref['U_TEAM']) {  ?><a href="<?php echo (isset($this->_rootref['U_TEAM'])) ? $this->_rootref['U_TEAM'] : ''; ?>"><?php echo ((isset($this->_rootref['L_THE_TEAM'])) ? $this->_rootref['L_THE_TEAM'] : ((isset($user->lang['THE_TEAM'])) ? $user->lang['THE_TEAM'] : '{ THE_TEAM }')); ?></a>&nbsp;&nbsp;<?php } ?></td></tr>
</table>
<?php } $this->_tpl_include('mchat_stats.html'); if ($this->_rootref['S_DISPLAY_BIRTHDAY_LIST'] && $this->_rootref['BIRTHDAY_LIST']) {  ?>

	<br clear="all" />

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat"><h4><?php echo ((isset($this->_rootref['L_BIRTHDAYS'])) ? $this->_rootref['L_BIRTHDAYS'] : ((isset($user->lang['BIRTHDAYS'])) ? $user->lang['BIRTHDAYS'] : '{ BIRTHDAYS }')); ?></h4></td>
	</tr>
	<tr>
		<td class="row1" width="100%"><p class="genmed"><?php if ($this->_rootref['BIRTHDAY_LIST']) {  echo ((isset($this->_rootref['L_CONGRATULATIONS'])) ? $this->_rootref['L_CONGRATULATIONS'] : ((isset($user->lang['CONGRATULATIONS'])) ? $user->lang['CONGRATULATIONS'] : '{ CONGRATULATIONS }')); ?>: <b><?php echo (isset($this->_rootref['BIRTHDAY_LIST'])) ? $this->_rootref['BIRTHDAY_LIST'] : ''; ?></b><?php } else { echo ((isset($this->_rootref['L_NO_BIRTHDAYS'])) ? $this->_rootref['L_NO_BIRTHDAYS'] : ((isset($user->lang['NO_BIRTHDAYS'])) ? $user->lang['NO_BIRTHDAYS'] : '{ NO_BIRTHDAYS }')); } if ($this->_rootref['BIRTHDAYS_AHEAD_LIST']) {  ?><br /><?php echo ((isset($this->_rootref['L_BIRTHDAYS_AHEAD'])) ? $this->_rootref['L_BIRTHDAYS_AHEAD'] : ((isset($user->lang['BIRTHDAYS_AHEAD'])) ? $user->lang['BIRTHDAYS_AHEAD'] : '{ BIRTHDAYS_AHEAD }')); ?>: <b><?php echo (isset($this->_rootref['BIRTHDAYS_AHEAD_LIST'])) ? $this->_rootref['BIRTHDAYS_AHEAD_LIST'] : ''; ?></b><?php } ?></p></td>
	</tr>
	</table>
<?php } ?>


<br clear="all" />

<table class="legend" align="center">
<tr>
	<td width="20" align="center"><?php echo (isset($this->_rootref['FORUM_UNREAD_IMG'])) ? $this->_rootref['FORUM_UNREAD_IMG'] : ''; ?></td>
	<td><span class="gensmall3"><?php echo ((isset($this->_rootref['L_UNREAD_POSTS'])) ? $this->_rootref['L_UNREAD_POSTS'] : ((isset($user->lang['UNREAD_POSTS'])) ? $user->lang['UNREAD_POSTS'] : '{ UNREAD_POSTS }')); ?></span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><?php echo (isset($this->_rootref['FORUM_IMG'])) ? $this->_rootref['FORUM_IMG'] : ''; ?></td>
	<td><span class="gensmall3"><?php echo ((isset($this->_rootref['L_NO_UNREAD_POSTS'])) ? $this->_rootref['L_NO_UNREAD_POSTS'] : ((isset($user->lang['NO_UNREAD_POSTS'])) ? $user->lang['NO_UNREAD_POSTS'] : '{ NO_UNREAD_POSTS }')); ?></span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><?php echo (isset($this->_rootref['FORUM_LOCKED_IMG'])) ? $this->_rootref['FORUM_LOCKED_IMG'] : ''; ?></td>
	<td><span class="gensmall3"><?php echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); ?></span></td>
</tr>
</table>

<?php $this->_tpl_include('overall_footer.html'); ?>