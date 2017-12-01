# WUI1708-12.01
    function ajax(obj) {
        var url = obj.url || location.pathname;
        var xhr = new XMLHttpRequest();
        var type = obj.type || 'get';
        if (type == 'get') {
            url = url + "?" + data;
            data = null;
        }
        if (type == "post") {
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        }
        var data = obj.data || {};
        data = this.getParmeter(data);
        var success = obj.success || function () {
        };
    }
