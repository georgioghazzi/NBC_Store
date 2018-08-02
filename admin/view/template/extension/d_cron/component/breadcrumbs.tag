<breadcrumbs>

    <ul class="breadcrumb">
        <li each={el in state.breadcrumbs}>
            <a href="{el.href}">{el.text}</a>
        </li>
    </ul>

    <script>
        this.mixin({store:d_cron});
        var self = this;
        self.state = this.store.getState();

        self.on('update', function() {
            self.state = self.store.getState();
        });

    </script>

</breadcrumbs>
