function ajax(obj) {
    obj = obj|| {};
    obj.type = obj.type || 'POST';
    obj.url = obj.url || '';
    obj.async = obj.async || true;
    obj.data = obj.data || null;
    obj.success = obj.success || function (mes) {
            console.log(mes)
        };
    var xmlHttp = window.XMLHttpRequest? new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
    var params = [];
    for (var key in obj.data){
        params.push(key + '=' + opt.data[key]);
    }
   
    ajax({
        url:"index.php",
        type:"post",
        data:$("form").serialize(),
        asynch:true,
        dataType:"text",
        success:function (mes) {
            console.log(mes)
        }
    })
