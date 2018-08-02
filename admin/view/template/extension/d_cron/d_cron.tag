<d_cron>

    <div class="page-header">
        <div class="container-fluid">

            <div class="form-inline pull-right">

                <!-- ADD NEW JOB -->
                <button onclick={create_new_job} data-toggle="tooltip" title="{state.button_add_job}" class="btn btn-success {(state.navigation.cron_jobs.active) ? '' : 'hide'}"><i class="fa fa-plus"></i></button>

                <!-- MAIN BUTTONS -->
                <button onclick={save_setting} data-go="0" id="save_and_stay" data-toggle="tooltip" title="{state.button_save_and_stay}" class="btn btn-success {(state.navigation.setting.active) ? '' : 'hide'}"><i class="fa fa-save"></i></button>
                <button onclick={save_setting} data-go="1" id="save" data-toggle="tooltip" title="{state.button_save}" class="btn btn-primary {(state.navigation.setting.active) ? '' : 'hide'}"><i class="fa fa-save"></i></button>
                <a href="{state.cancel}" data-toggle="tooltip" title="{state.button_cancel}" class="btn btn-default" id="cancel-button"><i class="fa fa-reply"></i></a>

            </div>

            <h1>{state.heading_title} {state.version}</h1>
            <breadcrumbs></breadcrumbs>
        </div>
    </div>

    <div class="container-fluid">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title main-panel-title">
                    <i class="fa fa-pencil"></i> {state.text_edit}
                    <span class="pull-right small_loader"><i class="fa fa-refresh fa-fw"></i></span>
                </h3>
            </div>

            <div class="panel-body">

                <navigation></navigation>

                <div class="flex row main-row">
                    <div class="col-sm-12">

                        <cron_jobs if={state.navigation.cron_jobs.active}></cron_jobs>
                        <cron_history if={state.navigation.cron_history.active}></cron_history>
                        <setting if={state.navigation.setting.active}></setting>
                        <help if={state.navigation.help.active}></help>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- ADD NEW JOB MODAL -->
    <add_new_job></add_new_job>

    <script>
        this.mixin({store:d_cron});
        var self = this;
        self.state = this.store.getState();

        self.on('before-mount', function() {
            route.exec();
        });

        self.on('update', function() {
            self.state = self.store.getState();
            route.exec();

            $("[type='checkbox']").bootstrapSwitch({
                'onColor': 'success',
                'onText': self.state.text_yes,
                'offText': self.state.text_no,
            });
        });

        self.on('mount', function() {
            $("[type='checkbox']").bootstrapSwitch({
                'onColor': 'success',
                'onText': self.state.text_yes,
                'offText': self.state.text_no,
            });
        });

        // ROUTE
        var r = route.create();
        r('',                cron_jobs        );
        r('cron_jobs',       cron_jobs        );
        r('cron_jobs/*',     cron_jobs_pag    );
        r('cron_history',    cron_history     );
        r('cron_history/*',  cron_history_pag );
        r('setting',         setting          );
        r('help',            help             );
        r(                   notfound         );

        // NAVIGATION HELPER
        function navigation_helper(key)
        {
            _.each(self.state.navigation, function(nav) { return nav.active = false; });
            self.state.navigation[key].active = true;
            self.store.updateState(['navigation'], self.state.navigation);
        }

        // PAGINATION HELPER
        function pagination_helper(key, id)
        {
            self.state[key].current_page = id;
            self.store.updateState([key], self.state[key]);
        }

        function cron_jobs() { navigation_helper('cron_jobs'); }

        function cron_jobs_pag(id)
        {
            navigation_helper('cron_jobs');
            pagination_helper('cron_jobs', id);
        };

        function cron_history() { navigation_helper('cron_history'); }

        function cron_history_pag(id)
        {
            navigation_helper('cron_history');
            pagination_helper('cron_history', id);
        }

        function setting() { navigation_helper('setting'); }

        function help() { navigation_helper('help'); }

        function notfound() {}

        save_setting(e) {
            e.preventDefault = true;

            var go = parseInt(e.currentTarget.getAttribute('data-go'));

            // MAIN SETTING
            self.store.dispatch(
                'd_cron/save_setting',
                $('#setting_form').serializeJSON()
            );

            if (go == 1) { $(location).attr('href', this.state.cancel); }
        }

        create_new_job(e) {
            e.preventDefault = true;

            self.state.we_like_edit = false;
            self.store.updateState(['we_like_edit'], self.state.we_like_edit);

            self.state.current.id = false;
            self.state.current.expression = '';
            self.state.current.codename = '';
            self.state.current.route = '';
            self.state.current.type = '';

            self.store.updateState(['current'], self.state.current);

            $('#add_new_job_modal').modal('show');

            self.store.dispatch('d_cron/is_valid_expression', self.state.current.expression);
        }

    </script>


</d_cron>