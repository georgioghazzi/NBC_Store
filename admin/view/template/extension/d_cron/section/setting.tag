<setting>

    <form id="setting_form" action="" class="form-horizontal">
        <div class="form-group clearfix">
            <label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_status}">{state.text_status}</span></label>
            <div class="col-sm-6 col-lg-9">
                <input type="hidden" value="0" name="status" />
                <input type="checkbox" data-check="1" value="1" name="{state.id}_status" id="input-status" data-on-text="{state.text_enabled}" data-off-text="{state.text_disabled}" data-on-color="success" checked="{state.setting[state.id+'_status'] == 1 ? 'checked' : ''}" class="form-control" />
            </div>
        </div>
        <div class="form-group clearfix">
            <label class="col-sm-4 col-lg-3 control-label"><span data-toggle="tooltip" title="{state.help_test_cron}">{state.text_test_cron}</span></label>
            <div class="col-sm-6 col-lg-9">

                <div class="test-buttons">

                    <div if={!state.test.running} onclick={run_cron_test} class="btn btn-primary test-button">{state.button_run_test}</div>
                    <div if={state.test.running} onclick={stop_cron_test} class="btn btn-danger test-button"><span></span> {state.button_stop_test}</div>

                    <div if={state.test.running} class="btn btn-default test-button test-status">
                        <span class="label label-cron test-label">{state.button_type_cron.toUpperCase()}</span>
                        <span class="label label-{state.test.cron.bage} test-label">{state.test.cron.text.toUpperCase()}</span>
                    </div>

                    <div if={state.test.running} class="btn btn-default test-button test-status">
                        <span class="label label-php test-label">{state.button_type_php.toUpperCase()}</span>
                        <span class="label label-{state.test.php.bage} test-label">{state.test.php.text.toUpperCase()}</span>
                    </div>

                </div>


            </div>
        </div>
    </form>

    <script>
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

        run_cron_test(e) {
            e.preventDefault = true;

            self.state.test.running = true;
            self.store.updateState(['test'], self.state.test);

            self.store.dispatch('d_cron/init_cron_test', {});
        }

        stop_cron_test(e) {
            e.preventDefault = true;

            self.state.test.running = false;
            self.store.updateState(['test'], self.state.test);

            self.store.dispatch('d_cron/stop_cron_test', {});
        }

    </script>

</setting>