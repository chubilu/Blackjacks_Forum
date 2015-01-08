<?php if (!defined('IN_PHPBB')) exit; if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>

</div>


	
</div>


</div>
<br />
<div id="wrapfooter">
<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->


	<span class="copyright">
											<script type="text/javascript"><!--
												google_ad_client = "ca-pub-3596444123871762";
												/* Link_menu_inferior */
												google_ad_slot = "3639541576";
												google_ad_width = 468;
												google_ad_height = 60;
												//-->
											</script>
											<script type="text/javascript"
												src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
											</script>
<BR>
	Powered by <a href="http://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group<br />
    Code Black-Bird Style by FanFanLaTuFlippe contact: fanfanlatuflippe@live.fr<br />
	<?php if ($this->_rootref['TRANSLATION_INFO']) {  echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><bdo dir="ltr">[ <?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; ?> ]</bdo><?php } ?>

	</span>
</div>

<?php if ($this->_rootref['U_ACP']) {  ?><br /><div class="acp">

	<a class="btnmain" href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a>

</div><?php } ?>


</td>

</tr>
</table>
</div>
</body>
</html>
<script type="text/javascript" src="mobiquo/tapatalkdetect.js"></script>