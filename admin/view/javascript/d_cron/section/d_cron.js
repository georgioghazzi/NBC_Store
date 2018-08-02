

(function(){

    this.subscribe('d_cron/update', function(data) {

        $('.small_loader > i').addClass('fa-spin');

        var send_data = { 'state_data': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/update&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (typeof json === 'object') {
                this.setState(json);
            } else {
                console.log('Err: State is not json object.');
            }

            $("#ch_table").animate({opacity: 1}, 100);
            $("#cj_table").animate({opacity: 1}, 100);

            setTimeout(function() {
                $('.small_loader > i').removeClass('fa-spin');
            }, 3000);

        }.bind(this));
    });

    this.subscribe('d_cron/save_setting', function(data) {

        var send_data = { 'setting': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/save_setting&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (json) {
                this.notification_handler(json);
            }

        }.bind(this));
    });

    this.subscribe('d_cron/is_valid_expression', function(data) {

        var send_data = { 'expression': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/is_valid_expression&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (typeof json === 'object' && 'is_valid_expression' in json) {
                this.updateState(['is_valid_expression'], json['is_valid_expression']);
            }

        }.bind(this));
    });

    this.subscribe('d_cron/init_cron_test', function(data) {

        var send_data = { 'data': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/init_cron_test&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (json) {
                this.notification_handler(json);
            }

            this.dispatch('d_cron/update', {});

        }.bind(this));
    });

    this.subscribe('d_cron/stop_cron_test', function(data) {

        var send_data = { 'data': JSON.stringify(data) };

        $.post('index.php?route=extension/module/d_cron/stop_cron_test&' + this.getToken(), send_data, function(json) {

            if (typeof json === 'string') {
                json = this.try_parse_json(json);
            }

            if (json) {
                this.notification_handler(json);
            }

            this.dispatch('d_cron/update', {});

        }.bind(this));
    });


})(d_cron);

