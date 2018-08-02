<help>

    <div class="row">

        <div class="col-sm-12 col-lg-7">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><raw content={state.type_cron}></raw></h3></div>
                <div class="panel-body">
                    <div class="help-description"><raw content={state.description_cron}></raw></div>
                    <div><pre class="help-link">{state.help.cron_link}</pre></div>

                    <div class="help-description"><raw content={state.description_2_cron}></raw></div>
                    <div><pre class="help-link">{state.help.cron_command}</pre></div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-5">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><raw content={state.type_php}></raw></h3></div>
                <div class="panel-body">
                    <div class="help-description"><raw content={state.description_php}></raw></div>
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
    </script>

</help>