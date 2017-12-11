//Live Search
$(function () {
    $(".filter-category").click(function() {
        if($(this).hasClass('active-category') == false) {
            var name = $(this).val();
            var showmore = "0";
            $('.active-category').removeClass('active-category');
            $(this).addClass('active-category');
            $.ajax({
                type: "POST",
                url: "assets/incl/category-search.php",
                data: {
                    showmore: showmore,
                    category: name
                },
                success: function (html) {
                    $(".products__container").html(html).show();
                }

            });
        }
    });
    $(".products-content").on("click", '.showmore',function() {
        var showmore = $(this).val();
        var category = $('.show-category').val();
        console.log("1."+showmore+"2."+category);
        $.ajax({
            type: "POST",
            url: "assets/incl/category-search.php",
            data: {
                showmore: showmore,
                category: category
            },
            success: function (html) {
                $(".products__container").html(html).show();
            }

        });
    });
    console.log('hej');
});