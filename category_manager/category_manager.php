<?php
/**
 * name: Category Manager
 * description: Manage categories.
 * version: 1.0
 * folder: category_manager
 * class: CategoryManager
 * hooks: install_plugin, admin_header_include, admin_plugin_settings, admin_sidebar_plugin_settings
 * author: Nick Ramsay
 * authorurl: http://Baker CMS.org/member.php?1-Nick
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
 
class CategoryManager
{
    /**
     * Install and add a default "all" catgeory if not already there.
     */
    public function install_plugin($h)
    {
        // Insert default category if not already there...
        $sql = "SELECT category_id FROM " . TABLE_CATEGORIES . " WHERE category_safe_name = %s";
        $exists = $h->db->get_var($h->db->prepare($sql, 'all'));
        if (!$exists) {
            $sql = "INSERT INTO " . DB_PREFIX . "categories (category_name, category_safe_name) VALUES (%s, %s)";
            $h->db->query($h->db->prepare($sql, urlencode('All'), urlencode('all')));
        }
    }
    
    // no other methods necessary because we fall back on the defaults.
    // See category_manager_settings for all the real code.
}

?>
