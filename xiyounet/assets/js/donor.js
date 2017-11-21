jQuery(document).ready(function () {
            $.ajax({
                type: "GET",
                url: "../xiyounet/assets/php/donate.php",
                dataType: "json",
                success:function(data){
                    var str = "";
                    data.forEach(function(item,i,arr){
                        str+="<tr><td>"+data[i].id+"</td><td>"+data[i].name+"</td><td>"+data[i].graduate_year+"</td><td>"+data[i].donate_number+"</td><td></tr>"
                    })
                    $('tbody').html(str);
                }

            })
        })
