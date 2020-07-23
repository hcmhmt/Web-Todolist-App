$( document ).ready(function() {

    $.ajax({
        url: "getTodos.php",
        method: "post",
        dataType: 'json',
        cache: false,
        success: function (response) {

            $.each(response, function( index, value ) {
                var todos = value + "";
                var  todo= todos.split(",");
                var append =
                    '<div class="card-header py-3">'+
                        '<h6 class="m-0 font-weight-bold text-secondary text-center">'+todo[1]+'</h6>'+
                    '</div><hr>'
                $("#myList").append(append);

            });

        },
        error : function(response){
            swal("Bir hata oldu!", "", "warning");
        }
    });

    $("#addTodo").click(function () {
        var todo = $("#newTodo").val();

        if (todo.trim().length == 0) {
            swal("Gerekli Alanı Boş Bırakmayınız!", "", "warning");
            return false;
        }

        $.ajax({
            url: "addTodo.php",
            method: "post",
            data: {"todo": todo},
            success: function (response) {
                if(response=="ok"){
                    swal("Verileriniz Eklendi", "", "success");
                    var append =
                        '<div class="card-header py-3">'+
                        '<h6 class="m-0 font-weight-bold text-secondary text-center">'+todo+'</h6>'+
                        '</div><hr>'
                    $("#myList").append(append);
                }else{
                    swal("Bir Sorun Oluştu!", "", "warning");
                }
            },
            error : function(response){
                swal("Bir Sorun Oluştu!", "", "warning");
            }
        });

    })


});