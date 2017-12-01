# WUI1708-12.01
https://nyamercer.github.io/AJAX/Ajax.html
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <label >
        账户: <input class="user" type="text" name="user">
        密码: <input class="pass" type="password" name="pass">
    </label>
    <input type="submit">
</form>
</body>
</html>
<script>
    function AJAX(fn) {
        let url = fn.url;
        let type = fn.type;
        let data = fn.data;
        let async = fn.async;

        if (data instanceof Object) {
            let str = ``
            for (var i in data) {
                str += i + `=` + data[i]
                data = str.slice(0, -1);
            }
        }
        let ajax = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject();
        if (type == "get") {
            ajax.open(type, url + "?" + data, async);
            ajax.send();
        }
    }
    let submit = document.querySelector("input[type=submit]");
    let user = document.querySelector(".user");
    let pass = document.querySelector(".pass");
    submit.onclick = function (e) {
        e.preventDefault();
        AJAX({
            url: "index.php",
            type: "post",
            async: "true",
            dataType: "text",
            data: `user=${user.value}&pass=${pass.value}`,
            success: function (val) {
                console.log(val)
            }
        });
    }
</script>
