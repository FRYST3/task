function notify(message, type) {
    new $.notify({
        type: type,
        message: message
    });
}

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let currentPage = 1;

    function loadArticles(page) {
        $.ajax({
            type: 'POST',
            url: '/get/articles',
            data: { page: page },
            success: function (response) {
                if (response.success) {
                    const articles = response.articles;
                    const total = response.total;
                    const lastPage = response.lastPage;

                    $('.article_card').remove();

                    articles.forEach(function (article) {
                        const articleCard = $('<div>')
                            .addClass('article_card')
                            .append(
                                $('<div>').addClass('article_card__img').append($('<img>').attr('src', article.img)),
                                $('<h1>').addClass('article_card__title').text(article.title),
                                $('<div>').addClass('article_card_description').text(article.short_desc),
                                $('<a>').addClass('article_card__btn').attr('href', '/article/' + article.id).text('Читать')
                            );
                        $('.main_arcticles').append(articleCard);
                    });

                    $('.load_more').toggle(currentPage < lastPage);
                }
            }
        });
    }

    $('.load_more').click(function () {
        currentPage++;
        loadArticles(currentPage);
    });

    loadArticles(currentPage);
});
