<?php
/*
 *  location:                     admin/language
 */

// HEADING
$_['heading_title']         = '<span style="color:#449DD0; font-weight:bold">Cron module</span><span style="font-size:12px; color:#999"> by <a href="https://www.opencart.com/index.php?route=marketplace/extension&filter_member=Dreamvention%20O%C3%9C" style="font-size:1em; color:#999" target="_blank">Dreamvention</a></span>';
$_['heading_title_main']    = 'Cron module';

$_['text_edit']             = 'Edit Cron module';
$_['text_home']             = 'Home';
$_['text_module']           = 'Modules';

$_['text_setting']          = 'Setting';
$_['text_cron_jobs']        = 'Cron Jobs';
$_['text_cron_history']     = 'History';
$_['text_help']             = 'Help';
$_['text_status']           = 'Status';
$_['text_no_cron_jobs']     = "You don't have availabe cron jobs.";
$_['text_no_history_cron_jobs']     = "You don't have cron jobs in the history";
$_['text_test_cron']        = "Test cron module";


$_['text_common_settings']  = 'Common Settings';
$_['text_minute']           = 'Minute';
$_['text_hour']             = 'Hour';
$_['text_day']              = 'Day';
$_['text_month']            = 'Month';
$_['text_weekday']          = 'Weekday';

$_['column_codename']       = 'Codename';
$_['column_route']          = 'Route';
$_['column_type']           = 'Type';
$_['column_next_time']      = 'Next run time';
$_['column_expression']     = 'Cron expression';
$_['column_status']         = 'Status';
$_['column_action']         = 'Action';
$_['column_id']             = 'ID';
$_['column_cron_data']      = 'Cron Data';
$_['column_start_time']     = 'Start time';
$_['column_finish_time']    = 'Finish time';
$_['column_run_time']       = 'Run time';
$_['column_finished']       = 'Finished';
$_['column_result_type']    = 'Result type';

// HELP
$_['help_status']           = 'Module Status';
$_['help_codename']         = 'Codename for your cron job';
$_['help_route']            = 'Route to your frontend contoller';
$_['help_cron_expression']  = 'Cron expression';
$_['help_cron_type']        = "If you chose 'CRON' then you should configure the cron in the cPanel. Plese look in the 'Help' section for more details.";
$_['are_you_sure_want_delete'] = "Are you sure want delete this cron job?";
$_['help_test_cron']        = "You can test how cron work on your store";

// BUTTON
$_['button_save_and_stay']  = 'Save and Stay';
$_['button_add_job']        = 'Add cron job';
$_['button_edit_job']       = 'Edit cron job';
$_['button_delete_job']     = 'Delete cron job';
$_['button_type_cron']      = 'Cron';
$_['button_type_php']       = 'PHP';
$_['button_run_test']       = 'Run test';
$_['button_stop_test']      = 'Stop test';

// ERROR
$_['error_permission']      = "You don't have permission to modify Cron module";

// SUCCESS
$_['success_cron_job_added'] = "Cron job added succesfully";
$_['success_cron_job_deleted'] = "Cron job deleted succesfully";
$_['success_setting_saved'] = "Setting saved succesfully";

// INSTRUCTION
$_['type_cron'] = 'Type <span class="label label-cron">CRON</span>';
$_['type_php'] = 'Type <span class="label label-php">PHP</span>';

$_['instruction_cron']      = "";
$_['cron_link']             = '/usr/bin/wget -O /dev/null -q "%s" >/dev/null 2>&1';
$_['cron_command']          = '*/5 * * * *';

$_['description_cron']      = "If you chose this type of cron job, you will need to make some configuration in your cPanel. <br> Go to the <b>Cron Jobs</b> and add one main <b>cron command</b> to your cPanel cron jobs:";
$_['description_2_cron']    = "You also need to set <b>cron expression</b> to this one:";
$_['description_php']       = "If you chose this type of cron job, then you don't need any additional configuration. The only thing is to make sure, that you have <b>d_cron</b> modification enabled.";