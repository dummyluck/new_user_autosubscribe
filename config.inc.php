<?php

/* New User Autosubscribe plugin */

/**
 * Update default folders for new user, after first logon
 *
 * Set a priority in the list view folders
 */

// Default folders + "Archive" (if use plugin "archive")
/*
$rcmail_config['new_user_autosubscribe'] = array('sent_mbox'=>'Sent', 'drafts_mbox'=>'Drafts', 'junk_mbox'=>'Spam', 'trash_mbox'=>'Trash', 'archive_mbox'=>'Archive',
                                                                                'default_folders'=>array('INBOX', 'Sent', 'Drafts', 'Spam', 'Trash', 'Archive') );
*/


// Default folders only
$rcmail_config['new_user_autosubscribe'] = array('sent_mbox'=>'Sent', 'drafts_mbox'=>'Drafts', 'junk_mbox'=>'Spam', 'trash_mbox'=>'Trash',
                                                                                'default_folders'=>array('INBOX', 'Sent', 'Drafts', 'Spam', 'Trash') );


?>
