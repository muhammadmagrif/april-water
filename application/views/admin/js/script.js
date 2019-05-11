$('#theTable').after('<div class="right-align"><ul class="pagination" id="nav"></ul></div>');
    var rowsShown = 10;
    var rowsTotal = $('#theTable tbody tr').length;
    var numPages = rowsTotal/rowsShown;
    for(i = 0;i < numPages;i++) {
        var pageNum = i + 1;
        $('#nav').append('<li class="waves-effect"><a href="#" rel="'+i+'">'+pageNum+'</a></li> ');
    }
    $('#theTable tbody tr').hide();
    $('#theTable tbody tr').slice(0, rowsShown).show();
    $('#nav li:first').addClass('active');
    $('#nav li a').bind('click', function(){

        $('#nav li').removeClass('active');
        $(this).parent().addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#theTable tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
    });