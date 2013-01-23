<?php

/**
	 * No Profile Icon On Topbar
	 *
	 * @package No Profile Icon On Topbar
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Alex Falk, RiverVanRain
	 * @URL http://weborganizm.org/crewz/p/1983/personal-net
	 * @copyright (c) weborganiZm 2k13
	 */
	 
function no_profile_icon_init() {
	/**
	 * Simple deleting Profile Icon from topbar
	 */

elgg_unregister_menu_item('topbar', 'profile');
}

elgg_register_event_handler('pagesetup', 'system', 'no_profile_icon_init');