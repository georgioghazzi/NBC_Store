<add_new_job>

    <div class="modal" id="add_new_job_modal" tabindex="-1" role="dialog" aria-labelledby="add_new_job_label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="add_new_job_label"><i class="fa {(state.we_like_edit) ? 'fa-pencil' : 'fa-plus'}" aria-hidden="true"></i> {(state.we_like_edit) ? state.button_edit_job : state.button_add_job}</h4>
                </div>

                <div class="modal-body">

                    <form id="add_new_job_form" action="" class="form-horizontal">

                        <div class="row">
                        <div class="col-sm-12">

                            <div class="form-group clearfix">
                                <label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_codename}">{state.column_codename}</span></label>
                                <div class="col-sm-6 col-lg-9">
                                    <input type="text" value="{(state.current) ? state.current.codename : ''}" id="cron_codename" name="codename" class="form-control" minlength="3" maxlength="64" required/>
                                    <input if={state.current && state.current.id} type="hidden" value="{state.current.id}" id="cron_id" name="id"/>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_route}">{state.column_route}</span></label>
                                <div class="col-sm-6 col-lg-9">
                                    <input type="text" value="{(state.current) ? state.current.route : ''}" id="cron_route" name="route" class="form-control" minlength="3" required />
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_cron_expression}">{state.column_expression}</span></label>
                                <div class="col-sm-6 col-lg-9">

                                    <div class="row">
                                        <div class="col-sm-12 col-lg-5">
                                            <input type="text" value="{(state.current) ? state.current.expression : ''}" id="cron_expression" name="cron_expression" class="form-control {(state.is_valid_expression) ? '' : 'error'}" maxlength="15" required />
                                        </div>
                                        <div class="col-sm-12 col-lg-7">
                                            <select onChange={common_select} class="form-control">
                                              <option each={el, i in state.cron_jobs.expressions.common} value="{(el.value) ? el.value : 0}">{el.text}</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_cron_type}">{state.column_type}</span></label>
                                <div class="col-sm-6 col-lg-9">
                                    <select name="type" class="form-control">
                                      <option each={el, i in state.cron_jobs.cron_types} value="{el.value}" selected={(state.current && (el.value == state.current.type))}>{el.text}</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        </div>


                    </form>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{state.button_cancel}</button>
                    <button onclick={save_new_job} type="button" class="btn btn-primary">{state.button_save}</button>
                </div>

            </div>
        </div>
    </div>

    <script>
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

        common_select(e) {
            e.preventDefault = true;
            self.state.current.expression = (e.target.value != 0) ? e.target.value : '';
            self.store.updateState(['current'], self.state.current);
            is_valid_expression(self.state.current.expression);
        }

        save_new_job(e) {
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
        }


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


    </script>

</add_new_job>

