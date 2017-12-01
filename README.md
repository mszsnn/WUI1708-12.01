
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="vi`ewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery-3.2.1.js"></script>
</head>
<body>
    <form action="">
        帐号：<input type="text" name="user">
        密码：<input type="text" name="pass">
        <input type="submit">
    </form>
</body>
</html>
<script>
    function ajax(obj) {
        let url=obj.url;
        let type=obj.type;
        let data=obj.data;
        let dataType=obj.dataType;
        let asynch=obj.asynch;
        let success=obj.success;
        let ajax=new XMLHttpRequest();
        //get方式
        if(type=="get"){
            ajax.open(type, url+"?" + data, true);
            ajax.send();
        }
        //post方式
        else if(type=="post"){
            ajax.open(type, url, asynch);
            ajax.setRequestHeader("content-type", "application/x-www-form-urlencoded");
            ajax.send(data);
        }
        ajax.onreadystatechange=function () {
            if(ajax.readyState==4){
                if(ajax.status==200){
                    success(ajax.responseText);
                }
            }
        }
    }
    $(":submit").click(function (e) {
        e.preventDefault();
        ajax({
            url: "index.php",
            type: "get",
            data: $('form').serialize(),
            dataType:'text',
            asynch:true,
            success:function (mes) {
                console.log(mes);
            }
        });
    })

</script>
