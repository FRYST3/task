function notify(message, type) {
    new $.notify({
        type: type,
        message: message
    });
}

$(document).ready(function () {
    $('.admin_edit__article').submit(function(event) {
        event.preventDefault();
        var articleId = $(this).data('article-id');

        var formData = new FormData($(this)[0]);

        $.ajax({
            url: '/admin/save/article/' + articleId,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    notify('Успешно', 'success');
                } else {
                    notify('Ошибка', 'error');
                }
            },
            error: function(error) {
                notify('Ошибка', 'error');
            }
        });
    });

    $('.admin_add__article').submit(function(event) {
        event.preventDefault();

        var formData = new FormData($(this)[0]);

        $.ajax({
            url: '/admin/add/article',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    notify('Успешно', 'success');
                } else {
                    notify('Ошибка', 'error');
                }
            },
            error: function(error) {
                notify('Ошибка', 'error');
            }
        });
    });
});
