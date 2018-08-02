<cron_history>

    <div class="table-responsive">
    <table id="ch_table" class="table table-bordered table-hover">

        <thead>
            <tr>
                <th scope="col">{state.column_codename}</th>
                <th scope="col">{state.column_route}</th>
                <th scope="col" class="text-center">{state.column_expression}</th>
                <th scope="col" class="text-center">{state.column_type}</th>
                <th scope="col" class="text-center">{state.column_finished}</th>
                <th scope="col" class="text-center">{state.column_result_type}</th>
                <th scope="col" class="text-center">{state.column_start_time}</th>
                <th scope="col" class="text-center">{state.column_run_time}</th>
            </tr>
        </thead>

        <tbody>
            <tr if={state.cron_history.jobs} each={job, i in state.cron_history.jobs}>
                <th>{job.codename}</th>
                <td>
                    <span if={job.extension} class="label label-info pull-right" data-toggle="tooltip" title="{job.extension.codename} {job.extension.version}"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></span>
                    {job.route}
                </td>
                <td class="text-center">{job.cron_expression}</td>
                <td class="text-center">
                    <span class="label label-{job.type}">{job.type.toUpperCase()}</span>
                </td>
                <td class="text-center">
                    <span class="label label-{(job.finished) ? 'success' : 'warning'}"><i class="fa fa-{(job.finished) ? 'check' : 'times'}" aria-hidden="true"></i></span>
                </td>
                <td class="text-center">
                    <span class="label label-{job.result_type.bage}">{job.result_type.title.toUpperCase()}</span>
                </td>
                <td class="text-center">{job.start_time}</td>
                <td class="text-center">{(job.run_time) ? job.run_time : '-'}</td>
            </tr>

            <tr if={!state.cron_history.jobs}>
                <th colspan="8" class="text-center no-cron-jobs">{state.text_no_history_cron_jobs}</th>
            </tr>

        </tbody>

    </table>
    </div>

    <div class="row">
        <div class="col-sm-6 text-left">
            <!-- <raw content={state.cron_history.pagination_result}></raw> -->
        </div>
        <div class="col-sm-6 text-right">
            <raw onclick={upd} content={state.cron_history.pagination}></raw>
        </div>
    </div>

    <script>
        this.mixin({store:d_cron});
        var self = this;
        self.state = this.store.getState();

        self.on('update', function() {
            self.state = self.store.getState();
        });

        upd(e) {
            $("#ch_table").animate({
                opacity: 0.5,
            }, 300, function() {
                self.store.dispatch('d_cron/update', self.state);
            });
        }
    </script>

</cron_history>
