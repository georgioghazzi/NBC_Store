
// CRON LIST

(function(){

    this.subscribe('d_cron/add_job', function(data) {

        var send_data = { 'job_data': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/add_job&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (json) {
                this.notification_handler(json);
            }

            this.dispatch('d_cron/update', {});

        }.bind(this));

    });

    this.subscribe('d_cron/delete_job', function(data) {

        var send_data = { 'job_data': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/delete_job&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (json) {
                this.notification_handler(json);
            }

            setTimeout(function(){
                this.dispatch('d_cron/update', {});
            }, 500);

        }.bind(this));

    });

    this.subscribe('d_cron/edit_job', function(data) {

        var send_data = { 'job_data': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/edit_job&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (json) {
                this.notification_handler(json);
            }

            this.dispatch('d_cron/update', {});

        }.bind(this));

    });

    this.subscribe('d_cron/disable_job', function(data) {

        var send_data = { 'job_data': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/disable_job&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (json) {
                this.notification_handler(json);
            }

        }.bind(this));

    });

    this.subscribe('d_cron/enable_job', function(data) {

        var send_data = { 'job_data': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/enable_job&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (json) {
                this.notification_handler(json);
            }

        }.bind(this));

    });

    this.subscribe('d_cron/change_type_to_php', function(data) {

        var send_data = { 'job_data': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/change_type_to_php&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (json) {
                this.notification_handler(json);
            }

        }.bind(this));

    });

    this.subscribe('d_cron/change_type_to_cron', function(data) {

        var send_data = { 'job_data': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/change_type_to_cron&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (json) {
                this.notification_handler(json);
            }

        }.bind(this));

    });


})(d_cron);