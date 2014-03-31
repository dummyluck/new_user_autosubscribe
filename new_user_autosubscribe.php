<?php

/**
 * New user autosubscribe
 * Subscribe default folders for new user, after first logon
 * Set a priority in the list view folders
 *
 * @license GNU GPLv3+
 * @author Dummy Luck Kiev
 *
 * https://github.com/dummyluck/new_user_autosubscribe
 * http://dummyluck.com/page/roundcube_plugin_new_user_autosubscribe
 * rndcb@dummyluck.com
 */

class new_user_autosubscribe extends rcube_plugin
{
        public $task = 'login|settings';

        function init()
        {
                $this->add_hook('identity_create', array($this, 'apply_folders'));
        }

        /*
        Update folders setting preferences
        */
        function apply_folders($args)
        {
                $rcmail = rcmail::get_instance();
                $this->load_config();
                $rcmail->user->save_prefs($rcmail->config->get('new_user_autosubscribe'));
        }

}

?>
