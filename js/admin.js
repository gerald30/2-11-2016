   $(function() {
            $('.view').on('click', function () {
            var pic = $(this).attr('choose');
                $.ajax({
                    type: "GET",
                    url: pic+".php",
                    success: function (msg) {
                        console.log(msg);
                        $("#results").html(msg);
                    }
                });
                return false;
            });
        });