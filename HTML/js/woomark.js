
	//MASONARY BLOG
    function attWorkGrid_1() {
        var options = {
            itemWidth: 360, // Optional min width of a grid item
            autoResize: true, // This will auto-update the layout when the browser window is resized.
            container: $('#blog-masonrywrap'), // Optional, used for some extra CSS styling
            offset: 30, // Optional, the distance between grid items
            flexibleWidth: 360 // Optional, the maximum width of a grid item
        };
        var handler = $('#blog-masonrywrap li');
        handler.wookmark(options);
    }

    $(window).load(function() {
        attWorkGrid_1();
    });
    $('#blog-masonrywrap li div div a img').load(function() { // (yasir bhai) Only Change this line if you need to
        attWorkGrid_1();
    });