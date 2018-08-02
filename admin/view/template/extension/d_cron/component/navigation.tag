<navigation>

    <ul class="nav nav-tabs">
        <li
            each={el, i in state.navigation}
            class="{el.active?'active':''}">

                <a id="nav_{i}" href="{el.href}"><span class="{el.icon}"></span> {el.text}</a>
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

</navigation>
