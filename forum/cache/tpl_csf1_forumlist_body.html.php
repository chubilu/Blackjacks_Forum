<?php if (!defined('IN_PHPBB')) exit; $this->_tpldata['DEFINE']['.']['CA_FORUMLIST'] = '1'; $_forumrow_count = (isset($this->_tpldata['forumrow'])) ? sizeof($this->_tpldata['forumrow']) : 0;if ($_forumrow_count) {for ($_forumrow_i = 0; $_forumrow_i < $_forumrow_count; ++$_forumrow_i){$_forumrow_val = &$this->_tpldata['forumrow'][$_forumrow_i]; if (( $_forumrow_val['S_IS_CAT'] && ! $_forumrow_val['S_FIRST_ROW'] ) || $_forumrow_val['S_NO_CAT']) {  ?>
		</table>
		<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_BLOCK_END'])) ? $this->_tpldata['DEFINE']['.']['CA_BLOCK_END'] : ''; ?>
         </div></div></div>      
        <div class='menu_bot'>    
        <div class='menu_bot_l'>  
        <div class='menu_bot_r'>
        </div></div></div>
		<br />
	<?php } if ($_forumrow_val['S_IS_CAT'] || $_forumrow_val['S_FIRST_ROW'] || $_forumrow_val['S_NO_CAT']) {  ?>
	    <?php echo (isset($this->_tpldata['DEFINE']['.']['CA_BLOCK_START'])) ? $this->_tpldata['DEFINE']['.']['CA_BLOCK_START'] : ''; ?>
	<?php if ($_forumrow_val['S_IS_CAT']) {  ?>
    <div class='menu_top'><div class='menu_top_l'><div class='menu_top_r'>
        <h3><?php echo $_forumrow_val['FORUM_NAME']; ?></h3>
        </div></div></div>  
        <div class='m_l'><div class='m_r'><div class='menu_text'> 
        <?php } else { } ?>
		<table class="tablebg" cellspacing="<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_SPACING'])) ? $this->_tpldata['DEFINE']['.']['CA_SPACING'] : ''; ?>" width="100%">
		<tr>
			<th class="fcaption"  colspan="2">&nbsp;<?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>&nbsp;</th>
			<th class="fcaption" width="50">&nbsp;<?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?>&nbsp;</th>
			<th class="fcaption" width="50">&nbsp;<?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>&nbsp;</th>
			<th class="fcaption" width="175">&nbsp;<?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?>&nbsp;</th>
		</tr>
	<?php } if (! $_forumrow_val['S_IS_CAT']) {  if ($_forumrow_val['S_IS_LINK']) {  ?>
			<tr>
				<td class="forumheader2" width="31" align="center"><?php echo $_forumrow_val['FORUM_FOLDER_IMG']; ?></td>
				<td class="forumheader2"><div align="left">
					<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?>
						<table border="0" cellspacing="0" cellpadding="0" width="100%"><tr><td valign="middle" style="padding-<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>: 5px;"><?php echo $_forumrow_val['FORUM_IMAGE']; ?></td><td width="100%" valign="middle" class="forumheader2">
					<?php } ?>
					<a class="forumlink" href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a>
					<p class="forumdesc"><?php echo $_forumrow_val['FORUM_DESC']; ?></p>
					<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?></td></tr></table><?php } ?>
				</div></td>
				<?php if ($_forumrow_val['CLICKS']) {  ?>
					<td class="forumheader2" colspan="3" align="center"><span class="genmed"><?php echo ((isset($this->_rootref['L_REDIRECTS'])) ? $this->_rootref['L_REDIRECTS'] : ((isset($user->lang['REDIRECTS'])) ? $user->lang['REDIRECTS'] : '{ REDIRECTS }')); ?>: <?php echo $_forumrow_val['CLICKS']; ?></span></td>
				<?php } else { ?>
					<td class="forumheader2" colspan="3" align="center">&nbsp;</td>
				<?php } ?>
			</tr>
		<?php } else { ?>
		<tr>
			<td class="forumheader2" width="31" align="center"><?php echo $_forumrow_val['FORUM_FOLDER_IMG']; ?></td>
			<td class="forumheaderr">
				<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?>
					<table border="0" cellspacing="0" cellpadding="0" width="100%"><tr><td valign="middle" style="padding-<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>: 5px;"><?php echo $_forumrow_val['FORUM_IMAGE']; ?></td><td width="100%" valign="middle">
				<?php } ?>
				<a class="forumlink<?php if ($_forumrow_val['S_UNREAD_FORUM']) {  ?> link-new<?php } ?>" href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a>
				<p class="forumdesc"><?php echo $_forumrow_val['FORUM_DESC']; ?></p>
				<?php if ($_forumrow_val['MODERATORS']) {  ?>
					<p class="forumdesc"><strong><?php echo $_forumrow_val['L_MODERATOR_STR']; ?>:</strong> <?php echo $_forumrow_val['MODERATORS']; ?></p>
				<?php } if ($_forumrow_val['SUBFORUMS'] && $_forumrow_val['S_LIST_SUBFORUMS']) {  ?>
					<p class="forumdesc"><strong><?php echo $_forumrow_val['L_SUBFORUM_STR']; ?></strong> <?php echo $_forumrow_val['SUBFORUMS']; ?></p>
				<?php } if ($_forumrow_val['FORUM_IMAGE']) {  ?></td></tr></table><?php } ?>
			</td>
			<td class="forumheader2" align="center"><p class="topicdetails"><?php echo $_forumrow_val['TOPICS']; ?></p></td>
			<td class="forumheader2" align="center"><p class="topicdetails"><?php echo $_forumrow_val['POSTS']; ?></p></td>
			<td class="forumheader2" align="center" nowrap="nowrap">
				<?php if ($_forumrow_val['LAST_POST_TIME']) {  ?>
					<p class="topicdetails"><?php echo $_forumrow_val['LAST_POST_TIME']; ?></p>
					<p class="topicdetails"><?php echo $_forumrow_val['LAST_POSTER_FULL']; ?>
						<?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_forumrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a><?php } ?>
					</p>
				<?php } else { ?>
					<p class="topicdetails"><?php echo ((isset($this->_rootref['L_NO_POSTS'])) ? $this->_rootref['L_NO_POSTS'] : ((isset($user->lang['NO_POSTS'])) ? $user->lang['NO_POSTS'] : '{ NO_POSTS }')); ?></p>
				<?php } ?>
			</td>
		</tr>
     
		<?php } } if ($_forumrow_val['S_LAST_ROW']) {  if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?>
		<tr>
			<td colspan="5" class="cat" align="center">
				<a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MARK_FORUMS_READ'])) ? $this->_rootref['L_MARK_FORUMS_READ'] : ((isset($user->lang['MARK_FORUMS_READ'])) ? $user->lang['MARK_FORUMS_READ'] : '{ MARK_FORUMS_READ }')); ?></a>
			</td>
		</tr>
		<?php } ?>
		</table>
		<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_BLOCK_END'])) ? $this->_tpldata['DEFINE']['.']['CA_BLOCK_END'] : ''; ?> 
            </div></div></div>      
        <div class='menu_bot'>    
        <div class='menu_bot_l'>  
        <div class='menu_bot_r'>
        </div></div></div>
	<?php } }} else { ?>
<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_CAP2_START'])) ? $this->_tpldata['DEFINE']['.']['CA_CAP2_START'] : ''; echo ((isset($this->_rootref['L_MESSAGE'])) ? $this->_rootref['L_MESSAGE'] : ((isset($user->lang['MESSAGE'])) ? $user->lang['MESSAGE'] : '{ MESSAGE }')); echo (isset($this->_tpldata['DEFINE']['.']['CA_CAP2_END'])) ? $this->_tpldata['DEFINE']['.']['CA_CAP2_END'] : ''; ?>
<table class="tablebg" cellspacing="<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_SPACING'])) ? $this->_tpldata['DEFINE']['.']['CA_SPACING'] : ''; ?>" width="100%">
<tr>
	<td class="row1" colspan="5" align="center" style="padding: 25px 5px;"><p class="gensmall"><?php echo ((isset($this->_rootref['L_NO_FORUMS'])) ? $this->_rootref['L_NO_FORUMS'] : ((isset($user->lang['NO_FORUMS'])) ? $user->lang['NO_FORUMS'] : '{ NO_FORUMS }')); ?></p></td>
</tr>
</table>


<?php } ?>