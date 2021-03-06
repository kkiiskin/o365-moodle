<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package local_o365
 * @author James McQuillan <james.mcquillan@remote-learner.net>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright (C) 2014 onwards Microsoft, Inc. (http://microsoft.com/)
 */

$string['pluginname'] = 'Microsoft Office 365 Integration';

$string['acp_title'] = 'Microsoft Office 365 Integration Administration Control Panel';
$string['acp_healthcheck'] = 'Health Check';
$string['acp_maintenance'] = 'Maintenance Tools';
$string['acp_maintenance_desc'] = 'These tools can help you resolve some common issues.';
$string['acp_maintenance_warning'] = 'Warning: These are advanced tools. Please use them only if you understand what you are doing.';
$string['acp_maintenance_coursegroupusers'] = 'Resync users in groups for courses.';
$string['acp_maintenance_coursegroupusers_desc'] = 'This will resync the user membership for all Office 365 groups created for all Moodle courses. This will ensure all, and only, users enrolled in the Moodle course are in the Office 365 group. <br /><b>Note:</b> If you have added any additional users to a course group that are not enrolled in the associated Moodle course, they will be removed.';
$string['acp_usermatch'] = 'User Matching';
$string['acp_usermatch_desc'] = 'This tool allows you to match Moodle users to Office 365 users. You will upload a file containing Moodle users and associated Office 365 users, and a cron task will verify the data and set up the match.';
$string['acp_usermatch_matchqueue'] = 'Step 2: Match Queue';
$string['acp_usermatch_matchqueue_clearall'] = 'Clear All';
$string['acp_usermatch_matchqueue_clearerrors'] = 'Clear Errors';
$string['acp_usermatch_matchqueue_clearqueued'] = 'Clear Queued';
$string['acp_usermatch_matchqueue_clearsuccess'] = 'Clear Successful';
$string['acp_usermatch_matchqueue_column_muser'] = 'Moodle Username';
$string['acp_usermatch_matchqueue_column_o365user'] = 'Office 365 Username';
$string['acp_usermatch_matchqueue_column_status'] = 'Status';
$string['acp_usermatch_matchqueue_desc'] = 'This table shows the current status of the match operation. Every time the matching cron job runs, a batch of the following users will be processed.<br /><b>Note:</b> This page will not update dynamically, refresh this page to view the current status.';
$string['acp_usermatch_matchqueue_empty'] = 'The match queue is currently empty. Upload a data file using the file picker above to add users to the queue.';
$string['acp_usermatch_matchqueue_status_error'] = 'Error: {$a}';
$string['acp_usermatch_matchqueue_status_queued'] = 'Queued';
$string['acp_usermatch_matchqueue_status_success'] = 'Successful';
$string['acp_usermatch_upload'] = 'Step 1: Upload New Matches';
$string['acp_usermatch_upload_desc'] = 'Upload a data file containing Moodle and Office 365 usernames to match Moodle users to Office 365 users.<br /><br />This file should be a simple plain-text CSV file containing two items per line: the Moodle username, and the Office 365 username. Do not include any headers or additional data.<br />For example: <pre>moodleuser1,bob.smith@example.onmicrosoft.com<br />moodleuser2,john.doe@example.onmicrosoft.com</pre>';
$string['acp_usermatch_upload_err_badmime'] = 'Type {$a} is not supported. Please upload a plain-text CSV.';
$string['acp_usermatch_upload_err_data'] = 'Line #{$a} contained invalid data. Each line in the CSV file should have two items: the Moodle username and the Office 365 username.';
$string['acp_usermatch_upload_err_fileopen'] = 'Could not open file for processing. Are the permissions correct in your Moodledata directory?';
$string['acp_usermatch_upload_err_nofile'] = 'No file was received to add to the queue.';
$string['acp_usermatch_upload_submit'] = 'Add Data File To Match Queue';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_parentsite_desc'] = 'Site for shared Moodle course data.';

$string['calendar_user'] = 'Personal (User) Calendar';
$string['calendar_site'] = 'Sitewide Calendar';

$string['erroracpauthoidcnotconfig'] = 'Please set application credentials in auth_oidc first.';
$string['erroracplocalo365notconfig'] = 'Please configure local_o365 first.';
$string['erroracpnosptoken'] = 'Did not have an available SharePoint token, and could not get one.';
$string['errorhttpclientbadtempfileloc'] = 'Could not open temporary location to store file.';
$string['errorhttpclientnofileinput'] = 'No file parameter in httpclient::put';
$string['errorcouldnotrefreshtoken'] = 'Could not refresh token';
$string['errorcreatingsharepointclient'] = 'Could not get SharePoint api client';
$string['errorchecksystemapiuser'] = 'Could not get a system API user token, please run the health check, ensure that your Moodle cron is running, and refresh the system API user if necessary.';
$string['erroro365apibadcall'] = 'Error in API call.';
$string['erroro365apibadcall_message'] = 'Error in API call: {$a}';
$string['erroro365apibadpermission'] = 'Permission not found';
$string['erroro365apicouldnotcreatesite'] = 'Problem creating site.';
$string['erroro365apicoursenotfound'] = 'Course not found.';
$string['erroro365apiinvalidtoken'] = 'Invalid or expired token.';
$string['erroro365apiinvalidmethod'] = 'Invalid httpmethod passed to apicall';
$string['erroro365apinoparentinfo'] = 'Could not find parent folder information';
$string['erroro365apinotimplemented'] = 'This should be overridden.';
$string['erroro365apinotoken'] = 'Did not have a token for the given resource and user, and could not get one. Is the user\'s refresh token expired?';
$string['erroro365apisiteexistsnolocal'] = 'Site already exists, but could not find local record.';
$string['errorcouldnotcreatespgroup'] = 'Could not create the SharePoint group.';
$string['errorusermatched'] = 'The Office 365 account "{$a->aadupn}" is already matched with Moodle user "{$a->username}". To complete the connection, please log in as that Moodle user first and follow the instructions in the Microsoft block.';

$string['eventapifail'] = 'API failure';
$string['eventcalendarsubscribed'] = 'User subscribed to a calendar';
$string['eventcalendarunsubscribed'] = 'User unsubscribed from a calendar';

$string['healthcheck_fixlink'] = 'Click here to fix it.';
$string['healthcheck_systemapiuser_title'] = 'System API User';
$string['healthcheck_systemtoken_result_notoken'] = 'Moodle does not have a token to communicate with Office&nbsp;365 as the system API user. This can usually be resolved by resetting the system API user.';
$string['healthcheck_systemtoken_result_noclientcreds'] = 'There are not application credentials present in the OpenID Connect plugin. Without these credentials, Moodle cannot perform any communication with Office&nbsp;365. Click here to visit the settings page and enter your credentials.';
$string['healthcheck_systemtoken_result_badtoken'] = 'There was a problem communicating with Office&nbsp;365 as the system API user. This can usually be resolved by resetting the system API user.';
$string['healthcheck_systemtoken_result_passed'] = 'Moodle can communicate with Office&nbsp;365 as the system API user.';
$string['healthcheck_ratelimit_title'] = 'API Throttling';
$string['healthcheck_ratelimit_result_notice'] = 'Slight throttling has been enabled to handle increased Moodle site load. <br /><br />All Office 365 features are functional, this just spaces out requests slightly to prevent interruption of Office 365 services. Once Moodle activity decreases, everything will return to normal. <br />(Level {$a->level} / started {$a->timestart})';
$string['healthcheck_ratelimit_result_warning'] = 'Increased throttling has been enabled to handle significant Moodle site load. <br /><br />All Office 365 features are still functional, but Office 365 requests may take longer to complete. Once Moodle site activity has decreased, everything will return to normal. <br />(Level {$a->level} / started {$a->timestart})';
$string['healthcheck_ratelimit_result_disabled'] = 'Rate limiting features have been disabled.';
$string['healthcheck_ratelimit_result_passed'] = 'Office 365 API calls are executing at full speed.';

$string['settings_aadsync'] = 'Sync users with Azure AD';
$string['settings_aadsync_details'] = 'When enabled, Moodle and Azure AD users are synced according to the above options.<br /><br /><b>Note: </b>The sync job runs in the Moodle cron, and syncs 1000 users at a time. By default, this runs once per day at 1:00 AM in the time zone local to your server. To sync large sets of users more quickly, you can increase the freqency of the <b>Sync users with Azure AD</b> task using the <a href="{$a}">Scheduled tasks management page.</a><br /><br />For more detailed instructions, see the <a href="https://docs.moodle.org/30/en/Office365#User_sync">user sync documentation</a>.<br /><br />';
$string['settings_aadsync_create'] = 'Create accounts in Moodle for users in Azure AD';
$string['settings_aadsync_delete'] = 'Delete previously synced accounts in Moodle when they are deleted from Azure AD';
$string['settings_aadsync_match'] = 'Match preexisting Moodle users with same-named accounts in Azure AD';
$string['settings_aadsync_matchswitchauth'] = 'Switch matched users to Office 365 (OpenID Connect) authentication';
$string['settings_aadsync_appassign'] = 'Assign users to application during sync';
$string['settings_aadsync_photosync'] = 'Sync Office 365 profile photos to Moodle in cron job';
$string['settings_aadsync_photosynconlogin'] = 'Sync Office 365 profile photos to Moodle on login';
$string['settings_photoexpire'] = 'Profile photo time to live';
$string['settings_photoexpire_details'] = 'How long between synchronization of a profile photo in hours';
$string['settings_aadtenant'] = 'Azure AD Tenant';
$string['settings_aadtenant_details'] = 'Used to Identify your organization within Azure AD. For example: "contoso.onmicrosoft.com".';
$string['settings_aadtenant_error'] = 'We could not detect your AzureAD tenant.<br />Please ensure "Windows Azure Active Directory" has been added to your registered Azure application, and that the "Read directory data" permission is enabled.';

$string['settings_azuresetup'] = 'Azure Setup';
$string['settings_azuresetup_appdataheader'] = 'Azure Application';
$string['settings_azuresetup_appdatadesc'] = 'Verifies the correct parameters are set up in Azure.';
$string['settings_azuresetup_appdatareplyurlcorrect'] = 'Reply URL Correct';
$string['settings_azuresetup_appdatareplyurlincorrect'] = 'Reply URL Incorrect';
$string['settings_azuresetup_appdatareplyurlgeneralerror'] = 'Could not check reply url.';
$string['settings_azuresetup_appdatasignonurlcorrect'] = 'Sign-on URL Correct.';
$string['settings_azuresetup_appdatasignonurlincorrect'] = 'Sign-on URL Incorrect';
$string['settings_azuresetup_appdatasignonurlgeneralerror'] = 'Could not check sign-on url.';
$string['settings_azuresetup_details'] = 'This tool checks with Azure to make sure everything is set up correctly. <br /><b>Note:</b> Changes in Azure can take a moment to appear here. If you have made a change in Azure and do not see it reflected here, wait a moment and try again.';
$string['settings_azuresetup_correctval'] = 'Correct Value:';
$string['settings_azuresetup_detectedval'] = 'Detected Value:';
$string['settings_azuresetup_update'] = 'Update';
$string['settings_azuresetup_checking'] = 'Checking...';
$string['settings_azuresetup_missingperms'] = 'Missing Permissions:';
$string['settings_azuresetup_permscorrect'] = 'Permissions are correct.';
$string['settings_azuresetup_errorcheck'] = 'An error occurred trying to check Azure setup.';
$string['settings_azuresetup_noinfo'] = 'We don\'t have any information about your Azure setup yet. Please click the Update button to check.';
$string['settings_azuresetup_strunifiedpermerror'] = 'There was an error checking Unified API permissions.';
$string['settings_azuresetup_strtenanterror'] = 'Please use the dectect button to set your Azure AD Tenant before updating Azure Setup.';
$string['settings_azuresetup_unifiedheader'] = 'Unified API';
$string['settings_azuresetup_unifieddesc'] = 'The unified API replaces the existing application-specific APIs. If available, you should add this to your Azure application to be ready for the future. Eventually, this will replace the legacy API.';
$string['settings_azuresetup_unifiederror'] = 'There was an error checking for Unified API support.';
$string['settings_azuresetup_unifiedactive'] = 'Unified API active.';
$string['settings_azuresetup_unifiedmissing'] = 'The unified API was not found in this application.';
$string['settings_azuresetup_legacyheader'] = 'Office&nbsp;365 API';
$string['settings_azuresetup_legacydesc'] = 'The Office&nbsp;365 API is made up of application-specific APIs.';
$string['settings_azuresetup_legacyerror'] = 'There was an error checking Office&nbsp;365 API settings.';

$string['settings_creategroups'] = 'Create User Groups';
$string['settings_creategroups_details'] = 'If enabled, this will create and maintain a teacher and student group in Office&nbsp;365 for every course on the site. This will create any needed groups each cron run (and add all current members). After that, group membership will be maintained as users are enrolled or unenrolled from Moodle courses.<br /><b>Note: </b>This feature requires the Office&nbsp;365 unified API to be enabled (see above), and added to the application added in Azure. <a href="https://docs.moodle.org/30/en/Office365#User_groups">Setup instructions and documentation.</a>';
$string['settings_o365china'] = 'Office&nbsp;365 for China';
$string['settings_o365china_details'] = 'Check this if you are using Office&nbsp;365 for China.';
$string['settings_debugmode'] = 'Record debug messages';
$string['settings_debugmode_details'] = 'If enabled, information will be logged to the Moodle log that can help in identifying problems. <a href="{$a}">View recorded log messages.</a>';
$string['settings_detectoidc'] = 'Application Credentials';
$string['settings_detectoidc_details'] = 'To communicate with Office&nbsp;365, Moodle needs credentials to identify itself. These are set in the "OpenID Connect" authentication plugin.';
$string['settings_detectoidc_credsvalid'] = 'Credentials have been set.';
$string['settings_detectoidc_credsvalid_link'] = 'Change';
$string['settings_detectoidc_credsinvalid'] = 'Credentials have not been set or are incomplete.';
$string['settings_detectoidc_credsinvalid_link'] = 'Set Credentials';

$string['settings_detectperms'] = 'Application Permissions';
$string['settings_detectperms_details'] = 'The use the plugin features, correct permissions must be set up for the application in Azure AD.';
$string['settings_detectperms_nocreds'] = 'Application credentials need to be set first. See above setting.';
$string['settings_detectperms_missing'] = 'Missing:';
$string['settings_detectperms_errorfix'] = 'An error occurred trying to fix permissions. Please set manually in Azure.';
$string['settings_detectperms_fixperms'] = 'Fix permissions';
$string['settings_detectperms_fixprereq'] = 'To fix this automatically, your system API user must be an administrator, and the "Access your organization\'s directory" permission must be enabled in Azure for the "Windows Azure Active Directory" application.';
$string['settings_detectperms_nounified'] = 'Unified API not present, some new features may not work.';

$string['settings_detectperms_unifiednomissing'] = 'All unified permissions present.';
$string['settings_detectperms_update'] = 'Update';
$string['settings_detectperms_valid'] = 'Permissions have been set up.';
$string['settings_detectperms_invalid'] = 'Check permissions in Azure AD';
$string['settings_enableunifiedapi'] = 'Enable Microsoft Graph API';
$string['settings_enableunifiedapi_details'] = 'The Microsoft Graph API is a new API that provides some new features like the "Create user groups" setting below. It will eventually replace the existing Office APIs, however the features used are still in preview and are subject to change which may break some functionality. If you\'d like to try it out, enable this setting and click "Save changes". Add the "Microsoft Graph" to your application in Azure then return here and run the "Azure Setup" tool below.';
$string['settings_fieldmap'] = 'User Field Mapping';
$string['settings_fieldmap_addmapping'] = 'Add Mapping';
$string['settings_fieldmap_details'] = 'Configure mapping between user fields in Office 365 and Moodle.';
$string['settings_fieldmap_header_behavior'] = 'Updates';
$string['settings_fieldmap_header_local'] = 'Moodle Field';
$string['settings_fieldmap_header_remote'] = 'Azure Field';
$string['settings_fieldmap_field_city'] = 'City';
$string['settings_fieldmap_field_companyName'] = 'Company Name';
$string['settings_fieldmap_field_objectId'] = 'Object ID';
$string['settings_fieldmap_field_country'] = 'Country';
$string['settings_fieldmap_field_department'] = 'Department';
$string['settings_fieldmap_field_displayName'] = 'Display Name';
$string['settings_fieldmap_field_surname'] = 'Surname';
$string['settings_fieldmap_field_facsimileTelephoneNumber'] = 'Fax Number';
$string['settings_fieldmap_field_telephoneNumber'] = 'Telephone Number';
$string['settings_fieldmap_field_givenName'] = 'Given Name';
$string['settings_fieldmap_field_jobTitle'] = 'Job Title';
$string['settings_fieldmap_field_mail'] = 'Email';
$string['settings_fieldmap_field_mobile'] = 'Mobile';
$string['settings_fieldmap_field_postalCode'] = 'Postal Code';
$string['settings_fieldmap_field_preferredLanguage'] = 'Language';
$string['settings_fieldmap_field_state'] = 'State';
$string['settings_fieldmap_field_streetAddress'] = 'Street Address';
$string['settings_fieldmap_update_always'] = 'On login & creation';
$string['settings_header_setup'] = 'Setup';
$string['settings_header_setup_desc'] = 'Follow these steps in order from top to bottom to get the plugin set up.';
$string['settings_header_options'] = 'Options';
$string['settings_header_tools'] = 'Tools';
$string['settings_healthcheck'] = 'Health Check';
$string['settings_healthcheck_details'] = 'If something isn\'t working correctly, performing a health check can usually identify the problem and propose solutions';
$string['settings_healthcheck_linktext'] = 'Perform health check';
$string['settings_maintenance'] = 'Maintenance';
$string['settings_maintenance_details'] = 'Various maintenance tasks are available to resolve some common issues.';
$string['settings_maintenance_linktext'] = 'View maintenance tools';
$string['settings_odburl'] = 'OneDrive for Business URL';
$string['settings_odburl_details'] = 'The URL used to access OneDrive for Business. This can usually be determined by your Azure AD tenant. For example, if your Azure AD tenant is "contoso.onmicrosoft.com", this is most likely "contoso-my.sharepoint.com". Enter only the domain name, do not include http:// or https://';
$string['settings_odburl_error'] = 'We could not determine your OneDrive for Business URL.<br />Please make sure "Office 365 SharePoint Online" has been added to your registered application in Azure.';
$string['settings_serviceresourceabstract_detect'] = 'Detect';
$string['settings_serviceresourceabstract_detecting'] = 'Detecting...';
$string['settings_serviceresourceabstract_error'] = 'An error occurred detecting setting. Please set manually.';
$string['settings_serviceresourceabstract_noperms'] = 'We experienced a problem detecting this setting.<br />Please ensure "Windows Azure Active Directory" has been added to your registered Azure application, and that the "Read directory data" permission is enabled.';
$string['settings_serviceresourceabstract_valid'] = '{$a} is usable.';
$string['settings_serviceresourceabstract_invalid'] = 'This value doesn\'t seem to be usable.';
$string['settings_serviceresourceabstract_nocreds'] = 'Please set application credentials first.';
$string['settings_serviceresourceabstract_empty'] = 'Please enter a value or click "Detect" to attempt to detect correct value.';
$string['settings_sharepointlink'] = 'SharePoint Link';
$string['settings_sharepointlink_error'] = 'There was a problem setting up SharePoint. <br /><br /><ul><li>If you have debug logging enabled ("Record debug messages" setting above), more information may be available in the Moodle log report. (Site Administration > Reports > Logs).</li><li>To retry setup, click "Change Site", choose a new SharePoint site, click "Save Changes" at the bottom of this page, and run the Moodle cron.</ul>';
$string['settings_sharepointlink_connected'] = 'Moodle is connected to this SharePoint site.';
$string['settings_sharepointlink_changelink'] = 'Change Site';
$string['settings_sharepointlink_initializing'] = 'Moodle is setting up this SharePoint site. This will occur during the next run of the Moodle cron.';
$string['settings_sharepointlink_enterurl'] = 'Enter a URL above.';
$string['settings_sharepointlink_details'] = 'To connect Moodle and SharePoint, enter the full URL of a SharePoint site for Moodle to connect to. If the site doesn\'t exist, Moodle will attempt to create it.<br /><a href="https://docs.moodle.org/30/en/Office365#SharePoint_Connection">Read more about connecting Moodle and SharePoint</a>.';
$string['settings_sharepointlink_status_invalid'] = 'This is not a usable SharePoint site.';
$string['settings_sharepointlink_status_notempty'] = 'This site is usable, but already exists. Moodle may conflict with existing content. For best results, enter a SharePoint site that doesn\'t exist and Moodle will create it.';
$string['settings_sharepointlink_status_valid'] = 'This SharePoint site will be created by Moodle and used for Moodle content.';
$string['settings_sharepointlink_status_checking'] = 'Checking entered SharePoint site...';
$string['settings_systemapiuser'] = 'System API User';
$string['settings_systemapiuser_details'] = 'Any Azure AD user, but it should be either the account of an administrator, or a dedicated account. This account is used to perform operations that are not user-specific. For example, managing course SharePoint sites.';
$string['settings_systemapiuser_change'] = 'Change user';
$string['settings_systemapiuser_usernotset'] = 'No user set.';
$string['settings_systemapiuser_userset'] = '{$a}';
$string['settings_systemapiuser_setuser'] = 'Set User';
$string['settings_usermatch'] = 'User Matching';
$string['settings_usermatch_details'] = 'This tool allows you to match Moodle users with Office 365 users based on an custom uploaded data file.';
$string['settings_usersynccreationrestriction'] = 'User Creation Restriction';
$string['settings_usersynccreationrestriction_details'] = 'If enabled, only users that have the specified value for the specified Azure field will be created during user sync.';

$string['spsite_group_contributors_name'] = '{$a} contributors';
$string['spsite_group_contributors_desc'] = 'All users who have access to manage files for course {$a}';

$string['task_calendarsyncin'] = 'Sync o365 events in to Moodle';
$string['task_groupcreate'] = 'Create user groups in Office 365';
$string['task_refreshsystemrefreshtoken'] = 'Refresh system API user refresh token';
$string['task_syncusers'] = 'Sync users with Azure AD.';
$string['task_sharepointinit'] = 'Initialize SharePoint.';
$string['task_processmatchqueue'] = 'Process Match Queue';
$string['task_processmatchqueue_err_museralreadymatched'] = 'Moodle user is already matched to an Office 365 user.';
$string['task_processmatchqueue_err_museralreadyo365'] = 'Moodle user is already connected to Office 365.';
$string['task_processmatchqueue_err_nomuser'] = 'No Moodle user found with this username.';
$string['task_processmatchqueue_err_noo365user'] = 'No Office 365 user found with this username.';
$string['task_processmatchqueue_err_o365useralreadymatched'] = 'Office 365 user is already matched to a Moodle user.';
$string['task_processmatchqueue_err_o365useralreadyconnected'] = 'Office 365 user is already connected to a Moodle user.';

$string['ucp_connectionstatus'] = 'Connection Status';
$string['ucp_calsync_availcal'] = 'Available Moodle Calendars';
$string['ucp_calsync_title'] = 'Outlook Calendar Sync';
$string['ucp_calsync_desc'] = 'Checked calendars will be synced from Moodle to your Outlook calendar.';
$string['ucp_connection_status'] = 'Office&nbsp;365 connection is:';
$string['ucp_connection_start'] = 'Connect to Office&nbsp;365';
$string['ucp_connection_stop'] = 'Disconnect from Office&nbsp;365';
$string['ucp_connection_options'] = 'Connection Options:';
$string['ucp_connection_desc'] = 'Here you can configure how you connect to Office&nbsp;365. To use Office 365 features, you must be connected to an Office 365 account. This can be done one of two ways, outlined below.';
$string['ucp_connection_aadlogin'] = 'Use your Office&nbsp;365 credentials to log in to Moodle<br />';
$string['ucp_connection_aadlogin_desc_rocreds'] = 'Instead of your Moodle username and password, you will enter your Office 365 username and password on the Moodle login page.';
$string['ucp_connection_aadlogin_desc_authcode'] = 'Instead of entering a username and password on the Moodle login page, you will see a section that says "Login using your account on {$a}" on the login page. You will click the link and be redirected to Office 365 to log in. After you have logged in to Office 365 successfully, you will be returned to Moodle and logged in to your account.';
$string['ucp_connection_aadlogin_start'] = 'Start using Office 365 to log in to Moodle.';
$string['ucp_connection_aadlogin_stop'] = 'Stop using Office 365 to log in to Moodle.';
$string['ucp_connection_aadlogin_active'] = 'You are using the Office 365 account "{$a}" to log in to Moodle.';
$string['ucp_connection_linked'] = 'Link your Moodle and Office 365 accounts';
$string['ucp_connection_linked_desc'] = 'Linking your Moodle and Office 365 accounts allows you to use Office 365 Moodle features without changing how you log in to Moodle. <br />Clicking the link below will send you to Office 365 to perform a one-time login, after which you will be returned here. You will be able to use all the Office 365 features without making any other changes to your Moodle account - you will log in to Moodle as you always have.';
$string['ucp_connection_linked_active'] = 'You are linked to Office 365 account "{$a}".';
$string['ucp_connection_linked_start'] = 'Link your Moodle account to an Office 365 account.';
$string['ucp_connection_linked_migrate'] = 'Switch to linked account.';
$string['ucp_connection_linked_stop'] = 'Unlink your Moodle account from the Office 365 account.';
$string['ucp_connection_disconnected'] = 'You are not connected to Office 365.';
$string['ucp_features'] = 'Office&nbsp;365 Features';
$string['ucp_features_intro'] = 'Below is a list of the features you can use to enhance Moodle with Office&nbsp;365.';
$string['ucp_features_intro_notconnected'] = 'Some of these may not be available until you are connected to Office&nbsp;365.';
$string['ucp_general_intro'] = 'Here you can manage your connection to Office&nbsp;365.';
$string['ucp_index_aadlogin_title'] = 'Office&nbsp;365 Login';
$string['ucp_index_aadlogin_desc'] = 'You can use your Office&nbsp;365 credentials to log in to Moodle. ';
$string['ucp_index_aadlogin_active'] = 'You are currently using Office 365 to log in to Moodle';
$string['ucp_index_aadlogin_inactive'] = 'You are not currently using Office 365 to log in to Moodle';
$string['ucp_index_calendar_title'] = 'Outlook Calendar Sync';
$string['ucp_index_calendar_desc'] = 'Here you can set up syncing between your Moodle and Outlook calendars. You can export Moodle calendar events to Outlook, and bring Outlook events into Moodle.';
$string['ucp_index_connection_title'] = 'Office&nbsp;365 Connection';
$string['ucp_index_connection_desc'] = 'Configure how you connect to Office&nbsp;365.';
$string['ucp_index_connectionstatus_title'] = 'Connection Status';
$string['ucp_index_connectionstatus_login'] = 'Click here to log in.';
$string['ucp_index_connectionstatus_usinglogin'] = 'You are currently using Office 365 to log in to Moodle.';
$string['ucp_index_connectionstatus_usinglinked'] = 'You are linked to an Office 365 account.';
$string['ucp_index_connectionstatus_connect'] = 'Click here to connect.';
$string['ucp_index_connectionstatus_manage'] = 'Manage Connection';
$string['ucp_index_connectionstatus_disconnect'] = 'Disconnect';
$string['ucp_index_connectionstatus_reconnect'] = 'Refresh Connection';
$string['ucp_index_connectionstatus_connected'] = 'You are currently connected to Office&nbsp;365';
$string['ucp_index_connectionstatus_matched'] = 'You have been matched with Office&nbsp;365 user <small>"{$a}"</small>. To complete this connection, please click the link below and log in to Office&nbsp;365.';
$string['ucp_index_connectionstatus_notconnected'] = 'You are not currently connected to Office&nbsp;365';
$string['ucp_index_onenote_title'] = 'OneNote';
$string['ucp_index_onenote_desc'] = 'OneNote integration allows you to use Office&nbsp;365 OneNote with Moodle. You can complete assignments using OneNote and easily take notes for your courses.';
$string['ucp_notconnected'] = 'Please connect to Office&nbsp;365 before visiting here.';
$string['ucp_onenote_title'] = 'OneNote';
$string['ucp_onenote_desc'] = 'This page provides options for Office&nbsp;365 OneNote.';
$string['ucp_onenote_disable'] = 'Disable Office&nbsp;365 OneNote';
$string['ucp_status_enabled'] = 'Active';
$string['ucp_status_disabled'] = 'Not Connected';
$string['ucp_syncwith_title'] = 'Sync With:';
$string['ucp_syncdir_title'] = 'Sync Behavior:';
$string['ucp_syncdir_out'] = 'From Moodle to Outlook';
$string['ucp_syncdir_in'] = 'From Outlook To Moodle';
$string['ucp_syncdir_both'] = 'Update both Outlook and Moodle';
$string['ucp_title'] = 'Office&nbsp;365 / Moodle Control Panel';
$string['ucp_options'] = 'Options';
