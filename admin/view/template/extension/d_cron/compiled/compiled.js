riot.tag2('d_cron', '<div class="page-header"><div class="container-fluid"><div class="form-inline pull-right"><button onclick="{create_new_job}" data-toggle="tooltip" title="{state.button_add_job}" class="btn btn-success {(state.navigation.cron_jobs.active) ? \'\' : \'hide\'}"><i class="fa fa-plus"></i></button><button onclick="{save_setting}" data-go="0" id="save_and_stay" data-toggle="tooltip" title="{state.button_save_and_stay}" class="btn btn-success {(state.navigation.setting.active) ? \'\' : \'hide\'}"><i class="fa fa-save"></i></button><button onclick="{save_setting}" data-go="1" id="save" data-toggle="tooltip" title="{state.button_save}" class="btn btn-primary {(state.navigation.setting.active) ? \'\' : \'hide\'}"><i class="fa fa-save"></i></button><a href="{state.cancel}" data-toggle="tooltip" title="{state.button_cancel}" class="btn btn-default" id="cancel-button"><i class="fa fa-reply"></i></a></div><h1>{state.heading_title} {state.version}</h1><breadcrumbs></breadcrumbs></div></div><div class="container-fluid"><div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title main-panel-title"><i class="fa fa-pencil"></i> {state.text_edit} <span class="pull-right small_loader"><i class="fa fa-refresh fa-fw"></i></span></h3></div><div class="panel-body"><navigation></navigation><div class="flex row main-row"><div class="col-sm-12"><cron_jobs if="{state.navigation.cron_jobs.active}"></cron_jobs><cron_history if="{state.navigation.cron_history.active}"></cron_history><setting if="{state.navigation.setting.active}"></setting><help if="{state.navigation.help.active}"></help></div></div></div></div></div><add_new_job></add_new_job>', '', '', function(opts) {
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

        var r = route.create();
        r('',                cron_jobs        );
        r('cron_jobs',       cron_jobs        );
        r('cron_jobs/*',     cron_jobs_pag    );
        r('cron_history',    cron_history     );
        r('cron_history/*',  cron_history_pag );
        r('setting',         setting          );
        r('help',            help             );
        r(                   notfound         );

        function navigation_helper(key)
        {
            _.each(self.state.navigation, function(nav) { return nav.active = false; });
            self.state.navigation[key].active = true;
            self.store.updateState(['navigation'], self.state.navigation);
        }

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

        this.save_setting = function(e) {
            e.preventDefault = true;

            var go = parseInt(e.currentTarget.getAttribute('data-go'));

            self.store.dispatch(
                'd_cron/save_setting',
                $('#setting_form').serializeJSON()
            );

            if (go == 1) { $(location).attr('href', this.state.cancel); }
        }.bind(this)

        this.create_new_job = function(e) {
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
        }.bind(this)

});
riot.tag2('add_new_job', '<div class="modal" id="add_new_job_modal" tabindex="-1" role="dialog" aria-labelledby="add_new_job_label" aria-hidden="true"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="add_new_job_label"><i class="fa {(state.we_like_edit) ? \'fa-pencil\' : \'fa-plus\'}" aria-hidden="true"></i> {(state.we_like_edit) ? state.button_edit_job : state.button_add_job}</h4></div><div class="modal-body"><form id="add_new_job_form" action="" class="form-horizontal"><div class="row"><div class="col-sm-12"><div class="form-group clearfix"><label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_codename}">{state.column_codename}</span></label><div class="col-sm-6 col-lg-9"><input type="text" riot-value="{(state.current) ? state.current.codename : \'\'}" id="cron_codename" name="codename" class="form-control" minlength="3" maxlength="64" required><input if="{state.current && state.current.id}" type="hidden" riot-value="{state.current.id}" id="cron_id" name="id"></div></div><div class="form-group clearfix"><label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_route}">{state.column_route}</span></label><div class="col-sm-6 col-lg-9"><input type="text" riot-value="{(state.current) ? state.current.route : \'\'}" id="cron_route" name="route" class="form-control" minlength="3" required></div></div><div class="form-group clearfix"><label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_cron_expression}">{state.column_expression}</span></label><div class="col-sm-6 col-lg-9"><div class="row"><div class="col-sm-12 col-lg-5"><input type="text" riot-value="{(state.current) ? state.current.expression : \'\'}" id="cron_expression" name="cron_expression" class="form-control {(state.is_valid_expression) ? \'\' : \'error\'}" maxlength="15" required></div><div class="col-sm-12 col-lg-7"><select onchange="{common_select}" class="form-control"><option each="{el, i in state.cron_jobs.expressions.common}" riot-value="{(el.value) ? el.value : 0}">{el.text}</option></select></div></div></div></div><div class="form-group clearfix"><label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_cron_type}">{state.column_type}</span></label><div class="col-sm-6 col-lg-9"><select name="type" class="form-control"><option each="{el, i in state.cron_jobs.cron_types}" riot-value="{el.value}" selected="{(state.current && (el.value == state.current.type))}">{el.text}</option></select></div></div></div></div></form></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">{state.button_cancel}</button><button onclick="{save_new_job}" type="button" class="btn btn-primary">{state.button_save}</button></div></div></div></div>', '', '', function(opts) {
        this.mixin({store:d_cron});
        var self = this;
        self.state = this.store.getState();

        self.on('update', function() {
            self.state = self.store.getState();
        });

        self.on('mount', function() {

            validate_form();

            var cron_expression = $('#cron_expression');
            is_valid_expression(cron_expression.val());

            cron_expression.keyup(function() {
                is_valid_expression($(this).val());
            });

        });

        this.common_select = function(e) {
            e.preventDefault = true;
            self.state.current.expression = (e.target.value != 0) ? e.target.value : '';
            self.store.updateState(['current'], self.state.current);
            is_valid_expression(self.state.current.expression);
        }.bind(this)

        this.save_new_job = function(e) {
            e.preventDefault = true;

            if (!validate_form(true)) { return; }
            if (!self.state.is_valid_expression) { return; }
            $('#add_new_job_modal').modal('hide');

            if (self.state.we_like_edit) {
                self.store.dispatch('d_cron/edit_job', $('#add_new_job_form').serializeJSON());
            } else {
                self.store.dispatch('d_cron/add_job', $('#add_new_job_form').serializeJSON());
            }

            self.state.we_like_edit = false;
            self.store.updateState(['we_like_edit'], self.state.we_like_edit);

            clear_job_form();
        }.bind(this)

        function is_valid_expression(expression)
        {
            self.store.dispatch('d_cron/is_valid_expression', expression);
        }

        function clear_job_form()
        {
            $('#cron_codename').val('');
            $('#cron_route').val('');
            $('#cron_expression').val('');
        }

        function validate_form(check)
        {
            var form = $('#add_new_job_form');
            form.validate({
                ignore: "#cron_expression"
            });

            if (check) { return form.valid(); }
        }

});


riot.tag2('breadcrumbs', '<ul class="breadcrumb"><li each="{el in state.breadcrumbs}"><a href="{el.href}">{el.text}</a></li></ul>', '', '', function(opts) {
        this.mixin({store:d_cron});
        var self = this;
        self.state = this.store.getState();

        self.on('update', function() {
            self.state = self.store.getState();
        });

});

riot.tag2('navigation', '<ul class="nav nav-tabs"><li each="{el, i in state.navigation}" class="{el.active?\'active\':\'\'}"><a id="nav_{i}" href="{el.href}"><span class="{el.icon}"></span> {el.text}</a></li></ul>', '', '', function(opts) {
        this.mixin({store:d_cron});
        var self = this;
        self.state = this.store.getState();

        self.on('update', function() {
            self.state = self.store.getState();
        });

});


riot.tag2('raw', '<span></span>', '', '', function(opts) {
        this.updateContent = function () {
            this.root.innerHTML = opts.content;
        };

        this.on('update', function() {
            this.updateContent();
        });

        this.updateContent();

    this.root.innerHTML = opts.content

});

riot.tag2('cron_history', '<div class="table-responsive"><table id="ch_table" class="table table-bordered table-hover"><thead><tr><th scope="col">{state.column_codename}</th><th scope="col">{state.column_route}</th><th scope="col" class="text-center">{state.column_expression}</th><th scope="col" class="text-center">{state.column_type}</th><th scope="col" class="text-center">{state.column_finished}</th><th scope="col" class="text-center">{state.column_result_type}</th><th scope="col" class="text-center">{state.column_start_time}</th><th scope="col" class="text-center">{state.column_run_time}</th></tr></thead><tbody><tr if="{state.cron_history.jobs}" each="{job, i in state.cron_history.jobs}"><th>{job.codename}</th><td><span if="{job.extension}" class="label label-info pull-right" data-toggle="tooltip" title="{job.extension.codename} {job.extension.version}"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></span> {job.route} </td><td class="text-center">{job.cron_expression}</td><td class="text-center"><span class="label label-{job.type}">{job.type.toUpperCase()}</span></td><td class="text-center"><span class="label label-{(job.finished) ? \'success\' : \'warning\'}"><i class="fa fa-{(job.finished) ? \'check\' : \'times\'}" aria-hidden="true"></i></span></td><td class="text-center"><span class="label label-{job.result_type.bage}">{job.result_type.title.toUpperCase()}</span></td><td class="text-center">{job.start_time}</td><td class="text-center">{(job.run_time) ? job.run_time : \'-\'}</td></tr><tr if="{!state.cron_history.jobs}"><th colspan="8" class="text-center no-cron-jobs">{state.text_no_history_cron_jobs}</th></tr></tbody></table></div><div class="row"><div class="col-sm-6 text-left"></div><div class="col-sm-6 text-right"><raw onclick="{upd}" content="{state.cron_history.pagination}"></raw></div></div>', '', '', function(opts) {
        this.mixin({store:d_cron});
        var self = this;
        self.state = this.store.getState();

        self.on('update', function() {
            self.state = self.store.getState();
        });

        this.upd = function(e) {
            $("#ch_table").animate({
                opacity: 0.5,
            }, 300, function() {
                self.store.dispatch('d_cron/update', self.state);
            });
        }.bind(this)
});

riot.tag2('cron_jobs', '<div class="table-responsive"><table id="cj_table" class="table table-bordered table-hover"><thead><tr><th scope="col">{state.column_id}</th><th scope="col">{state.column_codename}</th><th scope="col">{state.column_route}</th><th scope="col" class="text-center">{state.column_expression}</th><th scope="col" class="text-center">{state.column_next_time}</th><th scope="col" class="text-center">{state.column_type}</th><th scope="col" class="text-center">{state.column_status}</th><th scope="col" class="text-center">{state.column_action}</th></tr></thead><tbody><tr if="{state.cron_jobs.jobs}" each="{job, i in state.cron_jobs.jobs}"><th>{job.id}</th><th>{job.codename}</th><td><span if="{job.extension}" class="label label-info pull-right" data-toggle="tooltip" title="{job.extension.codename} {job.extension.version}"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></span> {job.route} </td><td class="text-center">{job.cron_expression}</td><td class="text-center">{job.next_time}</td><td class="text-center"><span onclick="{(job.type == \'cron\') ? change_type_to_php : change_type_to_cron}" class="label label-{(job.type == \'cron\') ? \'cron\' : \'php\'} clickable">{job.type.toUpperCase()}</span></td><td class="text-center"><span onclick="{(job.status) ? disable_job : enable_job}" class="label label-{(job.status) ? \'success\' : \'warning\'} status-helper">{(job.status) ? state.text_enabled : state.text_disabled}</span></td><td class="text-center"><button onclick="{edit_job}" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></button><button onclick="{delete_job}" class="btn btn-danger btn-xs"><span class="fa fa-times {(job.deleting) ? \'fa-spin\' : \'\'}"></span></button></td></tr><tr if="{!state.cron_jobs.jobs}"><th colspan="8" class="text-center no-cron-jobs">{state.text_no_cron_jobs}</th></tr></tbody></table></div><div class="row"><div class="col-sm-6 text-left"></div><div class="col-sm-6 text-right"><raw onclick="{upd}" content="{state.cron_jobs.pagination}"></raw></div></div>', '', '', function(opts) {
        this.mixin({store:d_cron});
        var self = this;
        self.state = this.store.getState();

        self.on('update', function() {
            self.state = self.store.getState();
        });

        this.enable_job = function(e) {
            e.preventDefault = true;
            self.store.dispatch('d_cron/enable_job', {'id': e.item.job.id});

            self.state.cron_jobs.jobs[e.item.i].status = true;
            self.store.updateState(['cron_jobs'], self.state.cron_jobs);
        }.bind(this)

        this.disable_job = function(e) {
            e.preventDefault = true;
            self.store.dispatch('d_cron/disable_job', {'id': e.item.job.id});

            self.state.cron_jobs.jobs[e.item.i].status = false;
            self.store.updateState(['cron_jobs'], self.state.cron_jobs);
        }.bind(this)

        this.change_type_to_cron = function(e) {
            e.preventDefault = true;
            self.store.dispatch('d_cron/change_type_to_cron', {'id': e.item.job.id});

            self.state.cron_jobs.jobs[e.item.i].type = 'cron';
            self.store.updateState(['cron_jobs'], self.state.cron_jobs);
        }.bind(this)

        this.change_type_to_php = function(e) {
            e.preventDefault = true;
            self.store.dispatch('d_cron/change_type_to_php', {'id': e.item.job.id});

            self.state.cron_jobs.jobs[e.item.i].type = 'php';
            self.store.updateState(['cron_jobs'], self.state.cron_jobs);
        }.bind(this)

        this.delete_job = function(e) {
            e.preventDefault = true;

            if (!alertify.pre_delete_alert) {
                alertify.dialog('pre_delete_alert', function factory() {
                    return {
                        main:function(message) {
                            this.message = message;
                        },
                        setup:function() {
                            return {
                                buttons:[
                                    {text: self.state.button_delete, key: 73, scope: 'default', className: alertify.defaults.theme.ok},
                                    {text: self.state.button_cancel, key: 83}
                                ],
                                focus: { element: 0, select: true },
                                options: {
                                    movable: false,
                                    resizable: false,
                                    pinnable: false,
                                    maximizable: false
                                }
                            };
                        },
                        build:function() {
                            var header = self.state.heading_title;
                            this.setHeader(header);
                        },
                        prepare:function() {
                            this.setContent(this.message);
                        },
                        callback:function(closeEvent) {
                            if (closeEvent.index != 1) {
                                self.state.cron_jobs.jobs[e.item.i].deleting = true;
                                self.store.updateState(['cron_jobs'], self.state.cron_jobs);
                                self.store.dispatch('d_cron/delete_job', {'id': e.item.job.id});
                            }
                        }
                    };
                });
            };

            alertify.pre_delete_alert(self.state.are_you_sure_want_delete);
        }.bind(this)

        this.edit_job = function(e) {
            e.preventDefault = true;

            self.state.we_like_edit = true;
            self.store.updateState(['we_like_edit'], self.state.we_like_edit);

            var job_ = e.item.job;

            self.state.current.id = job_.id;
            self.state.current.expression = job_.cron_expression;
            self.state.current.codename = job_.codename;
            self.state.current.route = job_.route;
            self.state.current.type = job_.type;

            self.store.updateState(['current'], self.state.current);

            $('#add_new_job_modal').modal('show');

            self.store.dispatch('d_cron/is_valid_expression', self.state.current.expression);
        }.bind(this)

        this.upd = function(e) {
            $("#cj_table").animate({
                opacity: 0.5,
            }, 300, function() {
                self.store.dispatch('d_cron/update', self.state);
            });
        }.bind(this)

        function prepare_del_dialog()
        {

        }

});
riot.tag2('help', '<div class="row"><div class="col-sm-12 col-lg-7"><div class="panel panel-default"><div class="panel-heading"><h3><raw content="{state.type_cron}"></raw></h3></div><div class="panel-body"><div class="help-description"><raw content="{state.description_cron}"></raw></div><div><pre class="help-link">{state.help.cron_link}</pre></div><div class="help-description"><raw content="{state.description_2_cron}"></raw></div><div><pre class="help-link">{state.help.cron_command}</pre></div></div></div></div><div class="col-sm-12 col-lg-5"><div class="panel panel-default"><div class="panel-heading"><h3><raw content="{state.type_php}"></raw></h3></div><div class="panel-body"><div class="help-description"><raw content="{state.description_php}"></raw></div></div></div></div></div>', '', '', function(opts) {
        this.mixin({store:d_cron});
        var self = this;
        self.state = this.store.getState();

        self.on('update', function() {
            self.state = self.store.getState();
        });
});
riot.tag2('setting', '<form id="setting_form" action="" class="form-horizontal"><div class="form-group clearfix"><label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_status}">{state.text_status}</span></label><div class="col-sm-6 col-lg-9"><input type="hidden" value="0" name="status"><input type="checkbox" data-check="1" value="1" name="{state.id}_status" id="input-status" data-on-text="{state.text_enabled}" data-off-text="{state.text_disabled}" data-on-color="success" checked="{state.setting[state.id+\'_status\'] == 1 ? \'checked\' : \'\'}" class="form-control"></div></div><div class="form-group clearfix"><label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_test_cron}">{state.text_test_cron}</span></label><div class="col-sm-6 col-lg-9"><div class="test-buttons"><div if="{!state.test.running}" onclick="{run_cron_test}" class="btn btn-primary test-button">{state.button_run_test}</div><div if="{state.test.running}" onclick="{stop_cron_test}" class="btn btn-danger test-button"><span></span> {state.button_stop_test}</div><div if="{state.test.running}" class="btn btn-default test-button test-status"><span class="label label-cron test-label">{state.button_type_cron.toUpperCase()}</span><span class="label label-{state.test.cron.bage} test-label">{state.test.cron.text.toUpperCase()}</span></div><div if="{state.test.running}" class="btn btn-default test-button test-status"><span class="label label-php test-label">{state.button_type_php.toUpperCase()}</span><span class="label label-{state.test.php.bage} test-label">{state.test.php.text.toUpperCase()}</span></div></div></div></div></form>', '', '', function(opts) {
        this.mixin({store:d_cron});
        var self = this;
        self.state = this.store.getState();

        self.on('mount', function() {
            $('#input-status').on('switchChange.bootstrapSwitch',function (e, state) {
                update_status_state(state);
            });
        });

        self.on('update', function() {
            self.state = self.store.getState();
        });

        function update_status_state(status)
        {
            if (status) {
                self.state.setting[self.state.id+'_status'] = true;
            } else {
                self.state.setting[self.state.id+'_status'] = false;
            }

            self.store.updateState(['setting'], self.state.setting);
        }

        this.run_cron_test = function(e) {
            e.preventDefault = true;

            self.state.test.running = true;
            self.store.updateState(['test'], self.state.test);

            self.store.dispatch('d_cron/init_cron_test', {});
        }.bind(this)

        this.stop_cron_test = function(e) {
            e.preventDefault = true;

            self.state.test.running = false;
            self.store.updateState(['test'], self.state.test);

            self.store.dispatch('d_cron/stop_cron_test', {});
        }.bind(this)

});