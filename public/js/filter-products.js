window.onload = function() {
    var sortSelect = $("#selectProductSort");
    var limitSelect = $("#selectProductShow");

    $("#price-filter").slider({
        from: {{$minPrice}},
    to: {{$maxPrice}},
    step: 1,
        smooth: true,
        round: 0,
        dimension: "&nbsp;$",
        skin: "plastic",
        callback: function (value) {
        $('#products-content').fadeOut(300);
        axios.get('{{route('collection.filter')}}', {params: {
                'filter': 'price1__' + value,
                'sort': sortSelect.val(),
                'limit': limitSelect.val()
            }})
    .then(function (response) {
            //console.log(response.data);
            $('#products-content').html(response.data);
            $('#products-content').fadeIn(300);
        })
    }
});

    $("#selectProductSort").on('change', function (e) {
        var page = $(".pagination li.active span").text();
        var thisSelect = $( this );
        $('#products-content').fadeOut(300);
        axios.get('{{route('collection.filter')}}', {params: {
                'filter': 'price1__' + $("#price-filter").slider("value"),
                'sort': thisSelect.val(),
                'page': page,
                'limit': limitSelect.val()
            }})
    .then(function (response) {
            $('#products-content').html(response.data);
            $('#products-content').fadeIn(300);
        })
    });

    $("#selectProductShow").on('change', function (e) {
        var thisSelect = $( this );
        $('#products-content').fadeOut(300);
        axios.get('{{route('collection.filter')}}', {params: {
                'filter': 'price1__' + $("#price-filter").slider("value"),
                'sort': sortSelect.val(),
                'limit': thisSelect.val()
            }})
    .then(function (response) {
            $('#products-content').html(response.data);
            $('#products-content').fadeIn(300);
        })
    });

    $(document).on('click', '.pagination a',function(event)
    {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        $('#products-content').fadeOut(300);
        axios.get('{{route('collection.filter')}}', {params: {
            'filter': 'price1__' + $("#price-filter").slider("value"),
            'sort': sortSelect.val(),
            'page': page,
            'limit': limitSelect.val()
        }})
    .then(function (response) {
        $('#products-content').html(response.data);
        $('#products-content').fadeIn(300);
    })
    })
};
