<?php
/*
 *  location: admin/controller
 */
class ControllerExtensionModuleDCron extends Controller
{
    private $codename = 'd_cron';
    private $route = 'extension/module/d_cron';
    private $extension = '';
    private $store_id = 0;
    private $error = array();

    const TYPE_CRON = 'cron';
    const TYPE_PHP = 'php';

    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->load->language($this->route);

        $this->load->model($this->route);
        $this->load->model('extension/d_opencart_patch/module');
        $this->load->model('extension/d_opencart_patch/url');
        $this->load->model('extension/d_opencart_patch/load');
        $this->load->model('extension/d_opencart_patch/user');

        if (!$this->d_cron) {
            $this->d_cron = new \d_cron\d_cron(array('db' => $this->db));
        }

        $this->d_shopunity = (file_exists(DIR_SYSTEM.'library/d_shopunity/extension/d_shopunity.json'));
        $this->d_opencart_patch = (file_exists(DIR_SYSTEM.'library/d_shopunity/extension/d_opencart_patch.json'));
        $this->extension = json_decode(file_get_contents(DIR_SYSTEM.'library/d_shopunity/extension/'.$this->codename.'.json'), true);
        $this->d_twig_manager = (file_exists(DIR_SYSTEM.'library/d_shopunity/extension/d_twig_manager.json'));
    }

    public function index()
    {
        if ($this->d_shopunity) {
            $this->load->model('extension/d_shopunity/mbooth');
            $this->model_extension_d_shopunity_mbooth->validateDependencies($this->codename);
        }

        if ($this->d_twig_manager) {
            $this->load->model('extension/module/d_twig_manager');
            $this->model_extension_module_d_twig_manager->installCompatibility();
        }

        // Styles and Scripts
        $this->document->addStyle('view/stylesheet/d_bootstrap_extra/bootstrap.css');
        $this->document->addStyle('view/javascript/d_bootstrap_switch/css/bootstrap-switch.css');
        $this->document->addScript('view/javascript/d_bootstrap_switch/js/bootstrap-switch.min.js');

        // AWESOME
        if (file_exists(dirname(DIR_TEMPLATE).'/javascript/d_cron/library/awesome/css/font-awesome.min.css')) {
            $this->document->addStyle('view/javascript/d_cron/library/awesome/css/font-awesome.min.css');
        } else { $this->document->addScript('https://use.fontawesome.com/70f81fc58b.js'); }

        $this->document->addStyle('view/javascript/d_cron/compiled/libs.min.css');
        $this->document->addStyle('view/stylesheet/d_cron/core.css');

        $this->document->addScript('view/javascript/d_cron/compiled/d_cron.min.js');
        $this->document->addScript('view/template/extension/d_cron/compiled/compiled.js');
        $this->document->addScript('view/javascript/d_cron/library/validate/jquery.validate.min.js');

        $url_params = array();
        $url = '';

        if (isset($this->response->get['store_id'])) {
            $this->store_id = $this->request->get['store_id'];
            $url_params['store_id'] = $this->store_id;
        }

        $url = ((!empty($url_params)) ? '&' : '' ) . http_build_query($url_params);

        // Heading
        $this->document->setTitle($this->language->get('heading_title_main'));

        // Notification
        foreach($this->error as $key => $error){
            $data['error'][$key] = $error;
        }

        if(isset($this->session->data['success'])){
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }

        // GET STATE
        $data['state'] = $this->something_with_state();

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->model_extension_d_opencart_patch_load->view('extension/d_cron/d_cron', $data));
    }

    private function something_with_state($filter = array())
    {
        // STATE
        $state = $this->model_extension_module_d_cron->init_state();

        // TEXT
        $state['heading_title'] = $this->language->get('heading_title_main');
        $state['text_edit'] = $this->language->get('text_edit');

        // $state[''] = $this->language->get('');
        $state['text_yes'] = $this->language->get('text_yes');
        $state['text_no'] = $this->language->get('text_no');
        $state['text_enabled'] = $this->language->get('text_enabled');
        $state['text_disabled'] = $this->language->get('text_disabled');

        $state['text_cron_jobs'] = $this->language->get('text_cron_jobs');
        $state['text_setting'] = $this->language->get('text_setting');
        $state['text_cron_history'] = $this->language->get('text_cron_history');
        $state['text_status'] = $this->language->get('text_status');
        $state['text_no_cron_jobs'] = $this->language->get('text_no_cron_jobs');
        $state['text_no_history_cron_jobs'] = $this->language->get('text_no_history_cron_jobs');
        $state['text_test_cron'] = $this->language->get('text_test_cron');

        $state['text_common_settings'] = $this->language->get('text_common_settings');
        $state['text_minute'] = $this->language->get('text_minute');
        $state['text_hour'] = $this->language->get('text_hour');
        $state['text_day'] = $this->language->get('text_day');
        $state['text_month'] = $this->language->get('text_month');
        $state['text_weekday'] = $this->language->get('text_weekday');
        $state['text_help'] = $this->language->get('text_help');

        $state['column_codename'] = $this->language->get('column_codename');
        $state['column_route'] = $this->language->get('column_route');
        $state['column_expression'] = $this->language->get('column_expression');
        $state['column_next_time'] = $this->language->get('column_next_time');
        $state['column_type'] = $this->language->get('column_type');
        $state['column_status'] = $this->language->get('column_status');
        $state['column_action'] = $this->language->get('column_action');
        $state['column_id'] = $this->language->get('column_id');
        $state['column_cron_data'] = $this->language->get('column_cron_data');
        $state['column_start_time'] = $this->language->get('column_start_time');
        $state['column_finish_time'] = $this->language->get('column_finish_time');
        $state['column_run_time'] = $this->language->get('column_run_time');
        $state['column_finished'] = $this->language->get('column_finished');
        $state['column_result_type'] = $this->language->get('column_result_type');

        // HELP
        $state['help_status'] = $this->language->get('help_status');

        // BUTTON
        $state['button_save_and_stay'] = $this->language->get('button_save_and_stay');
        $state['button_save'] = $this->language->get('button_save');
        $state['button_cancel'] = $this->language->get('button_cancel');
        $state['button_edit'] = $this->language->get('button_edit');
        $state['button_delete'] = $this->language->get('button_delete');
        $state['button_add_job'] = $this->language->get('button_add_job');
        $state['button_edit_job'] = $this->language->get('button_edit_job');
        $state['button_delete_job'] = $this->language->get('button_delete_job');
        $state['button_type_cron'] = $this->language->get('button_type_cron');
        $state['button_type_php'] = $this->language->get('button_type_php');
        $state['button_run_test'] = $this->language->get('button_run_test');
        $state['button_stop_test'] = $this->language->get('button_stop_test');

        // HELP
        $state['help_status'] = $this->language->get('help_status');
        $state['help_codename'] = $this->language->get('help_codename');
        $state['help_route'] = $this->language->get('help_route');
        $state['help_cron_expression'] = $this->language->get('help_cron_expression');
        $state['help_cron_type'] = $this->language->get('help_cron_type');
        $state['are_you_sure_want_delete'] = $this->language->get('are_you_sure_want_delete');
        $state['help_test_cron'] = $this->language->get('help_test_cron');

        // INSTRUCTION
        $state['instruction_cron'] = $this->language->get('instruction_cron');
        $state['type_cron'] = $this->language->get('type_cron');
        $state['type_php'] = $this->language->get('type_php');
        $state['description_cron'] = $this->language->get('description_cron');
        $state['description_2_cron'] = $this->language->get('description_2_cron');
        $state['description_php'] = $this->language->get('description_php');

        // BREADCRUMB
        $state['breadcrumbs'] = array();
        $state['breadcrumbs']['br0'] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->model_extension_d_opencart_patch_url->ajax('common/dashboard')
        );

        $state['breadcrumbs']['br1'] = array(
            'text'      => $this->language->get('text_module'),
            'href'      => $this->model_extension_d_opencart_patch_url->getExtensionAjax('module')
        );

        $state['breadcrumbs']['br2'] = array(
            'text'      => $this->language->get('heading_title_main'),
            'href'      => $this->model_extension_d_opencart_patch_url->ajax($this->route)
        );

        // VARIABLE
        $state['id'] = $this->codename;
        $state['route'] = $this->route;
        $state['version'] = $this->extension['version'];
        $state['token'] = $this->model_extension_d_opencart_patch_user->getUrlToken();

        // ACTION
        $state['module_link'] = $this->model_extension_d_opencart_patch_url->ajax($this->route);
        $state['action'] = $this->model_extension_d_opencart_patch_url->link($this->route . '/save');
        $state['cancel'] = $this->model_extension_d_opencart_patch_url->getExtensionAjax('module');
        $state['get_cancel'] = $this->model_extension_d_opencart_patch_url->getExtensionAjax('module');

        // Navigation
        $state['navigation'] = array(
            'cron_jobs'     => array('active' => True, 'href' => $state['module_link'].'#cron_jobs', 'icon' => 'fa fa-list', 'text' => $state['text_cron_jobs']),
            'cron_history'  => array('active' => False, 'href' => $state['module_link'].'#cron_history', 'icon' => 'fa fa-history', 'text' => $state['text_cron_history']),
            'setting'       => array('active' => False, 'href' => $state['module_link'].'#setting', 'icon' => 'fa fa-cog', 'text' => $state['text_setting']),
            'help'          => array('active' => False, 'href' => $state['module_link'].'#help', 'icon' => 'fa fa-life-ring', 'text' => $state['text_help'])
        );

        // CRON JOBS
        if (isset($filter['job_page']) && $filter['job_page'] > 1) {
            $cj_page = intval($filter['job_page']);
        } else { $cj_page = 1; }

        $filter_ = array(
            'enabled'   => Null,
            'start'     => ($cj_page - 1) * $this->config->get('config_limit_admin'),
            'limit'     => $this->config->get('config_limit_admin')
        );
        $cron_jobs = $this->model_extension_module_d_cron->get_cron_jobs($filter_);

        $job_pn = $this->get_pagination_result($cj_page, 'job');

        $state['cron_jobs'] = array(
            'jobs'          => $cron_jobs,
            'current_page'  => $cj_page,
            'expressions'   => array( 'common' => $this->model_extension_module_d_cron->expression_filler('common') ),
            'cron_types'    => $this->model_extension_module_d_cron->get_cron_types(),

            'pagination'        => $job_pn['pagination'],
            'pagination_result' => $job_pn['pagination_result'],
        );

        // HISTORY
        if (isset($filter['history_page']) && $filter['history_page'] > 1) {
            $ch_page = intval($filter['history_page']);
        } else { $ch_page = 1; }

        $filter_ = array(
            'start'     => ($ch_page - 1) * $this->config->get('config_limit_admin'),
            'limit'     => $this->config->get('config_limit_admin')
        );
        $cron_history = $this->model_extension_module_d_cron->get_history_jobs($filter_);

        $history_pn = $this->get_pagination_result($ch_page, 'history');

        $state['cron_history'] = array(
            'jobs'          => $cron_history,
            'current_page'  => $ch_page,

            'pagination'        => $history_pn['pagination'],
            'pagination_result' => $history_pn['pagination_result'],
        );

        // HELP
        $cron_url = $this->url->link($this->route);
        $store_url = defined('HTTPS_CATALOG') ? HTTPS_CATALOG : HTTP_CATALOG;
        $cron_url = str_replace(array(HTTP_SERVER, HTTPS_SERVER), $store_url, $cron_url);

        $state['help'] = array(
            'cron_link'     => sprintf($this->language->get('cron_link'), $cron_url),
            'cron_command'  => $this->language->get('cron_command')
        );

        // SETTING
        $state['setting'] = $this->model_extension_module_d_cron->get_setting($this->store_id);

        // TEST
        $state['test'] = array(
            'running'   => $this->model_extension_module_d_cron->is_test_running(),
            'cron'      => $this->model_extension_module_d_cron->does_test_job_succeed(self::TYPE_CRON),
            'php'       => $this->model_extension_module_d_cron->does_test_job_succeed(self::TYPE_PHP)
        );

        // CURRENT JOB DATA
        $state['current'] = array(
            'id'            => '',
            'expression'    => '',
            'codename'      => '',
            'route'         => '',
            'type'          => ''
        );

        // SET STATE
        $this->model_extension_module_d_cron->set_state($state);
        return $state;
    }

    public function update()
    {
        // SAVE CURRENT STATE
        if (isset($this->request->post['state_data'])) {
            $state_data = json_decode(html_entity_decode($this->request->post['state_data']), true);
            $this->model_extension_module_d_cron->merge_state($state_data);
        }

        // UPDATE DATA
        $filter = array(
            'job_page'      => (isset($state_data['cron_jobs']['current_page'])) ? $state_data['cron_jobs']['current_page'] : False,
            'history_page'  => (isset($state_data['cron_history']['current_page'])) ? $state_data['cron_history']['current_page'] : False
        );

        $json = $this->something_with_state($filter);
        $this->response->setOutput(json_encode($json));
    }

    public function save_setting()
    {
        $json = $this->model_extension_module_d_cron->validate();
        if (!isset($json['error'])) {

            if (isset($this->request->post['setting'])) {
                $setting = json_decode(html_entity_decode($this->request->post['setting']), true);
                $this->model_extension_module_d_cron->save_setting($setting, $this->store_id);
                $json['success'][] = $this->language->get('success_setting_saved');

                if (isset($setting[$this->codename.'_status'])) {
                    $this->model_extension_module_d_cron->modification_handler(True);
                } else {
                    $this->model_extension_module_d_cron->modification_handler(False);
                }
            }

        }
        $this->response->setOutput(json_encode($json));
    }

    public function is_valid_expression()
    {
        $json = array('is_valid_expression' => False);

        // SAVE CURRENT STATE
        if (isset($this->request->post['expression'])) {
            $ex = json_decode(html_entity_decode($this->request->post['expression']), true);
            $json['is_valid_expression'] = $this->model_extension_module_d_cron->is_valid_expression(trim($ex));
        }

        $this->response->setOutput(json_encode($json));
    }

    public function add_job()
    {
        $json = $this->model_extension_module_d_cron->validate();
        if (!isset($json['error'])) {

            if (isset($this->request->post['job_data'])) {
                $job_data = json_decode(html_entity_decode($this->request->post['job_data']), true);
                $this->model_extension_module_d_cron->add_new_cron_job($job_data);
                $json['success'][] = $this->language->get('success_cron_job_added');
            }

        }
        $this->response->setOutput(json_encode($json));
    }

    public function delete_job()
    {
        $json = $this->model_extension_module_d_cron->validate();
        if (!isset($json['error'])) {

            if (isset($this->request->post['job_data'])) {
                $job_data = json_decode(html_entity_decode($this->request->post['job_data']), true);
                $this->model_extension_module_d_cron->delete_cron_job($job_data['id']);
            }

        }
        $this->response->setOutput(json_encode($json));
    }

    public function edit_job()
    {
        $json = $this->model_extension_module_d_cron->validate();
        if (!isset($json['error'])) {

            if (isset($this->request->post['job_data'])) {
                $job_data = json_decode(html_entity_decode($this->request->post['job_data']), true);
                $this->model_extension_module_d_cron->edit_cron_job($job_data);
            }

        }
        $this->response->setOutput(json_encode($json));
    }

    public function enable_job()
    {
        $json = $this->model_extension_module_d_cron->validate();
        if (!isset($json['error'])) {

            if (isset($this->request->post['job_data'])) {
                $job_data = json_decode(html_entity_decode($this->request->post['job_data']), true);
                $this->model_extension_module_d_cron->change_cron_job_status($job_data['id'], True);
            }

        }
        $this->response->setOutput(json_encode($json));
    }

    public function disable_job()
    {
        $json = $this->model_extension_module_d_cron->validate();
        if (!isset($json['error'])) {

            if (isset($this->request->post['job_data'])) {
                $job_data = json_decode(html_entity_decode($this->request->post['job_data']), true);
                $this->model_extension_module_d_cron->change_cron_job_status($job_data['id'], False);
            }

        }
        $this->response->setOutput(json_encode($json));
    }

    public function change_type_to_cron()
    {
        $json = $this->model_extension_module_d_cron->validate();
        if (!isset($json['error'])) {

            if (isset($this->request->post['job_data'])) {
                $job_data = json_decode(html_entity_decode($this->request->post['job_data']), true);
                $this->model_extension_module_d_cron->change_cron_job_type($job_data['id'], self::TYPE_CRON);
            }

        }
        $this->response->setOutput(json_encode($json));
    }

    public function change_type_to_php()
    {
        $json = $this->model_extension_module_d_cron->validate();
        if (!isset($json['error'])) {

            if (isset($this->request->post['job_data'])) {
                $job_data = json_decode(html_entity_decode($this->request->post['job_data']), true);
                $this->model_extension_module_d_cron->change_cron_job_type($job_data['id'], self::TYPE_PHP);
            }

        }
        $this->response->setOutput(json_encode($json));
    }

    public function get_pagination_result($page, $type)
    {
        $url = $this->model_extension_d_opencart_patch_url->ajax($this->route);

        if ($type == 'job') {
            $cron_jobs_total = $this->model_extension_module_d_cron->get_cron_jobs_total();
            $url .= '#cron_jobs';
        } else {
            $cron_jobs_total = $this->model_extension_module_d_cron->get_history_jobs_total();
            $url .= '#cron_history';
        }

        $url .= '/{page}';

        $pagination = new Pagination();
        $pagination->total = $cron_jobs_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $url;

        return array(
            'pagination'        => $pagination->render(),
            'pagination_result' => sprintf($this->language->get('text_pagination'), ($cron_jobs_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($cron_jobs_total - $this->config->get('config_limit_admin'))) ? $cron_jobs_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $cron_jobs_total, ceil($cron_jobs_total / $this->config->get('config_limit_admin')))
        );
    }

    public function init_cron_test()
    {
        $this->model_extension_module_d_cron->init_cron_test();
    }

    public function stop_cron_test()
    {
        $this->model_extension_module_d_cron->stop_cron_test();
    }

    public function install()
    {
        if ($this->d_shopunity) {
            $this->load->model('extension/d_shopunity/mbooth');
            $this->model_extension_d_shopunity_mbooth->installDependencies($this->codename);
        }

        $this->model_extension_module_d_cron->check_permission(True);
        $this->model_extension_module_d_cron->create_tables();
    }

    public function uninstall()
    {
        $this->model_extension_module_d_cron->modification_handler(False);
        $this->model_extension_module_d_cron->drop_tables();
    }
}