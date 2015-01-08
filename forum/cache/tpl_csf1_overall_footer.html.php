<?php if (!defined('IN_PHPBB')) exit; if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>



<div id="wrapfooter">
	<span class="copyright">
	Powered by <a href="http://www.phpbb.com/">phpBB</a>  &copy; 2000, 2002, 2005, 2007 phpBB Group. Designed by <a href="http://www.madringtones.org/by-artist/Prince/">Prince Ringtone</a>
    &nbsp;based on <a href="http://www.stsoftware.biz/">AcidTech style.</a>
	</span>
</div>
<?php if ($this->_rootref['U_ACP']) {  ?><div align="center"><span class="gensmall">[ <a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a> ]</span></div><br /><br /><?php } ?>

	</td>
</tr>
</table>

</body>
</html>