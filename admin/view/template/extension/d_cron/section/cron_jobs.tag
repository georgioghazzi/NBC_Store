<cron_jobs>

    <div class="table-responsive">
    <table id="cj_table" class="table table-bordered table-hover">

        <thead>
            <tr>
                <th scope="col">{state.column_id}</th>
                <th scope="col">{state.column_codename}</th>
                <th scope="col">{state.column_route}</th>
                <th scope="col" class="text-center">{state.column_expression}</th>
                <th scope="col" class="text-center">{state.column_next_time}</th>
                <th scope="col" class="text-center">{state.column_type}</th>
                <th scope="col" class="text-center">{state.column_status}</th>
                <th scope="col" class="text-center">{state.column_action}</th>
            </tr>
        </thead>

        <tbody>
            <tr if={state.cron_jobs.jobs} each={job, i in state.cron_jobs.jobs}>
                <th>{job.id}</th>
                <th>{job.codename}</th>
                <td>
                    <span if={job.extension} class="label label-info pull-right" data-toggle="tooltip" title="{job.extension.codename} {job.extension.version}"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></span>
                    {job.route}
                </td>
                <td class="text-center">{job.cron_expression}</td>
                <td class="text-center">{job.next_time}</td>
                <td class="text-center">
                    <span onclick={(job.type == 'cron') ? change_type_to_php : change_type_to_cron} class="label label-{(job.type == 'cron') ? 'cron' : 'php'} clickable">{job.type.toUpperCase()}</span>
                </td>
                <td class="text-center">
                    <span onclick={(job.status) ? disable_job : enable_job} class="label label-{(job.status) ? 'success' : 'warning'} status-helper">{(job.status) ? state.text_enabled : state.text_disabled}</span>
                </td>
                <td class="text-center">
                    <button onclick={edit_job} class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></button>
                    <button onclick={delete_job} class="btn btn-danger btn-xs"><span class="fa fa-times {(job.deleting) ? 'fa-spin' : ''}"></span></button>
                </td>
            </tr>

            <tr if={!state.cron_jobs.jobs}>
                <th colspan="8" class="text-center no-cron-jobs">{state.text_no_cron_jobs}</th>
            </tr>

        </tbody>

    </table>
    </div>

    <div class="row">
        <div class="col-sm-6 text-left">
            <!-- <raw content={state.cron_jobs.pagination_result}></raw> -->
        </div>
        <div class="col-sm-6 text-right">
            <raw onclick={upd} content={state.cron_jobs.pagination}></raw>
        </div>
    </div>

    <script>
        this.mixin({store:d_cron});
        var self = this;
        self.state = this.store.getState();

        self.on('update', function() {
            self.state = self.store.getState();
        });

        enable_job(e) {
            e.preventDefault = true;
            self.store.dispatch('d_cron/enable_job', {'id': e.item.job.id});

            self.state.cron_jobs.jobs[e.item.i].status = true;
            self.store.updateState(['cron_jobs'], self.state.cron_jobs);
        }

        disable_job(e) {
            e.preventDefault = true;
            self.store.dispatch('d_cron/disable_job', {'id': e.item.job.id});

            self.state.cron_jobs.jobs[e.item.i].status = false;
            self.store.updateState(['cron_jobs'], self.state.cron_jobs);
        }

        change_type_to_cron(e) {
            e.preventDefault = true;
            self.store.dispatch('d_cron/change_type_to_cron', {'id': e.item.job.id});

            self.state.cron_jobs.jobs[e.item.i].type = 'cron';
            self.store.updateState(['cron_jobs'], self.state.cron_jobs);
        }

        change_type_to_php(e) {
            e.preventDefault = true;
            self.store.dispatch('d_cron/change_type_to_php', {'id': e.item.job.id});

            self.state.cron_jobs.jobs[e.item.i].type = 'php';
            self.store.updateState(['cron_jobs'], self.state.cron_jobs);
        }

        delete_job(e) {
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
        }

        edit_job(e) {
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
        }

        upd(e) {
            $("#cj_table").animate({
                opacity: 0.5,
            }, 300, function() {
                self.store.dispatch('d_cron/update', self.state);
            });
        }

        function prepare_del_dialog()
        {

        }

    </script>

</cron_jobs>