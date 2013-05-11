<?php
/**
 * Template for Search
 *
 * PHP version 5
 *
 * LICENSE: Baker CMS is free software: you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License as 
 * published by the Free Software Foundation, either version 3 of 
 * the License, or (at your option) any later version. 
 *
 * Baker CMS is distributed in the hope that it will be useful, but WITHOUT 
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or 
 * FITNESS FOR A PARTICULAR PURPOSE. 
 *
 * You should have received a copy of the GNU General Public License along 
 * with Baker CMS. If not, see http://www.gnu.org/licenses/.
 * 
 * @category  Content Management System
 * @package   Baker CMS
 * @author    Nick Ramsay / Stuart Duff
 * @copyright Copyright (c) 2009, Baker CMS
 * @license   http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link      http://bakercms.com/
 */

if ($h->currentUser->getPermission('can_search') == 'yes') { $disabled = ''; } else { $disabled = "onkeypress='return handleEnter(this, event)' disabled"; }
if ($h->cage->get->keyExists('search')) { $current_search = $h->vars['orig_search']; } else { $current_search = $h->lang['search_text']; }
?>

<!-- <h2 class="widget_head"><?php echo $h->lang['search_title']; ?></h2> -->
<div class="widget_body search_box">
    <form name='search_form' id='search_form' action='<?php echo BASEURL; ?>index.php?page=search' method='get'> 
        <input id="search_input" type="text" value="<?php echo $current_search;  ?>" name="search" 
            onfocus="if (this.value == '<?php echo $h->lang['search_text']; ?>') {this.value = '';}"
        />
        <input type="hidden" id="dosearch" />
        <input id="search_button" type="submit" value="<?php echo $h->lang['search_submit']; ?>" <?php echo $disabled; ?> />
    </form>
</div>


