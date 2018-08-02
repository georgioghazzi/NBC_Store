
//////////////////////////
//   CRON MODULE CORE   //
//////////////////////////

var cm_core = (function() {

    riot.observable(this);

    this.createStore = function(state)
    {
        this.state = Immutable.fromJS(state, function (key, value, path) {
            return Immutable.isIndexed(value) ? value.toList() : value.toOrderedMap();
        });

        this.stateCached = this.state.toJS();
        this.stateOld = this.stateCached;
        return this;
    }

    this.updateState = function(key, data)
    {
        this.state = this.state.setIn(key, data);
        this.stateCached = this.state.toJS();
        riot.update();
    }

    this.setState = function(data)
    {
        this.state = this.state.mergeDeep(data);
        this.stateCached = this.state.toJS();
        riot.update();
    }

    this.getState = function()
    {
        return this.stateCached;
    }

    this.getToken = function()
    {
        return this.stateCached.token;
    }

    this.getError = function()
    {
        if(!this.stateCached.errors){
            this.stateCached.errors = {};
        }
        return this.stateCached.errors;
    }

    this.getChange = function()
    {
        return getDiff(this.stateOld, this.stateCached);
    }

    this.setChange = function(state)
    {
        this.stateOld = state;
    }

    this.dispatch = function(action, state)
    {
        this.trigger(action, state);
    }

    this.subscribe = function(action, callback)
    {
        this.on(action, callback);
    }

    this.notification_handler = function(json)
    {
        _.each(json, function(element, index) {

            if (typeof element === 'object') {

                _.each(element, function(inner_element) {
                    alertify.notify(inner_element, index);
                });

            } else {
                alertify.notify(element, index);
            }

        });
    }

    this.try_parse_json = function(string)
    {
        try {
            var o = JSON.parse(string);
            if (o && typeof o === "object") { return o; }
        }
        catch (e) { }

        return false;
    }

    this.delay = function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };
    }

    return this;
})();

// ALIAS
var d_cron = cm_core;
