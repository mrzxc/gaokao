$(document).ready(function() {
    var post = {};
    // 事件监听
    $('table').on('click', 'a', function() {

    });

    $("#SchoolRefer").on('click', function() {
        activeChange.call(this)
        getTableData()
    })
    $("#SpecialRefer").on('click',function() {
        activeChange.call(this)
        // $("#special").css("display", 'block')
        getTableData()
    });



    //table数据查询
    function getTableData() {
        var ajaxreturn = {};
        var method = post["method"] = $("button.active").attr("id")
        post["type"] = $("#type").val()
        post["province"] = $("#province").val()
        post["enroll_level"] = $("#enroll_level").val()
        post["subgrade"] = $("#subgrade").val()
        post["range"] = $("#range").val()
        if (post["method"] == "SpecialRefer") {
            post["specialname"] = $("#specialname").val()
            if (post["specialname"]=="") {
                $("#warning").html("请输入专业")
                return false;
            };
        }
        console.log(post);
        // ajax请求数据
        $.ajax({
            type: "post",
            // dataType:"json",
            url: "http://zxc/gaokao/index.php/Home/Inqure/requst",
            data: post,
            beforeSend: function(){
                $('#warning').html('');
                $('#loading').css('display','block');
            },
            success: function(redata) {
                $('#loading').css('display','none');
                if (!redata) {
                    $('#warning').html("查询失败，请检查输入信息")
                    return;
                };
                console.log(redata)
                redata["method"] = method;
                $('#warning').html("");
                // 就是这里的把redata取出来
                domCreate(redata);
                // alert(redata.type)
            },
            error: function() {
                console.log('false');
                $('#loading').attr('display','none');
                $('#warning').html("查询失败，请检查输入信息")
            }
        })
    }

    function domCreate(data) {
        var method = data.method
        method == 'SchoolRefer' ? getSchool(data) : getSpecial(data)
    }

    function getSchool(data) {
        $table = $(".table")
        $table.html(""); //清空表格
        $th = $("<tr>");
        $th1 = $("<td>").addClass('col-md-2')
        $th1.html("学校");
        $th2 = $("<td>").addClass('col-md-2')
        $th2.html("年份");
        $th3 = $("<td>").addClass('col-md-2')
        $th3.html("最高分");
        $th4 = $("<td>").addClass('col-md-2')
        $th4.html("平均分")
        $th5 = $("<td>").addClass('col-md-2')
        $th5.html("省控线")
        $th6 = $("<td>").addClass('col-md-2')
        $th6.html("是否可录取")
        $th.append($th1).append($th2).append($th3).append($th4).append($th5).append($th6)
        $table.append($th)
        for (var i = 0; i < data.length; i++) {
            $td0 = $("<td>")
            $td0.attr('rowspan','3')
            $a = $("<a>").attr('href','http://127.0.0.1/gaokao/index.php/Home/Inqure/detail?schoolname='+data[i]['schoolname']+'&type='+post['type']+'&province='+post['province']+'&enroll_level='+post["enroll_level"]+'&subgrade='+post['subgrade']+'&range='+post['range']);
            $a.html(data[i]['schoolname']).appendTo($td0)
            $TR = $("<tbody>")
            for (var j = 0; j < 3; j++) {
                $tr = $("<tr>")
                $td1 = $("<td>")
                $td2 = $("<td>")
                $td3 = $("<td>")
                $td4 = $("<td>")
                $td5 = $("<td>")
                $td1.html(2012+j)
                $td2.html(data[i][j]['max'])
                $td3.html(data[i][j]['average'])
                $td4.html(data[i][j]['provinceline'])
                if (data[i][j]['sizeup'])
                {
                    $td5.html('&radic;').addClass('success')
                }else{
                    $td5.html('&Chi;').addClass('warning')
                }
                $tr.append($td1).append($td2).append($td3).append($td4).append($td5)
                $TR.append($tr)
            }
            $TR.children().first().prepend($td0)
            $table.append($TR)
        }
    }

    function getSpecial(data) {
        $table = $(".table")
        $table.html(""); //清空表格
        $th = $("<tr>");
        $th1 = $("<td>").addClass('col-md-2')
        // $th1.css('width','200px');
        $th1.html("学校");
        $th2 = $("<td>").addClass('col-md-2')
        $th2.html("年份");
        $th3 = $("<td>").addClass('col-md-2')
        $th3.html("最高分");
        $th4 = $("<td>").addClass('col-md-2')
        $th4.html("平均分")
        $th5 = $("<td>").addClass('col-md-2')
        $th5.html("省控线")
        $th6 = $("<td>").addClass('col-md-2')
        $th6.html("是否可录取")
        $th.append($th1).append($th2).append($th3).append($th4).append($th5).append($th6)
        $table.append($th)
        for (var i = 0; i < data.length; i++) {
            $td0 = $("<td>")
            $td0.attr('rowspan','3');
            $td0.html(data[i]['schoolname'])
            $TR = $("<tbody>")
            for (var j = 0; j < 3; j++) {
                $tr = $("<tr>")
                $td1 = $("<td>")
                $td2 = $("<td>")
                $td3 = $("<td>")
                $td4 = $("<td>")
                $td5 = $("<td>")
                $td1.html(2012+j)
                $td2.html(data[i][j]['max'])
                $td3.html(data[i][j]['avg'])
                $td4.html(data[i][j]['provinceline'])
                if (data[i][j]['sizeup'])
                {
                    $td5.html('&radic;').addClass('success')
                }else{
                    $td5.html('&Chi;').addClass('warning')
                }
                $tr.append($td1).append($td2).append($td3).append($td4).append($td5)
                $TR.append($tr)
            }
            $TR.children().first().prepend($td0)
            $table.append($TR)
        }

    }

    function activeChange() {
        $("button.active").attr("class", "btn btn-default")
        $(this).attr("class", "btn btn-default active")
    }



});