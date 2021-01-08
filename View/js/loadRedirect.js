
var folder = "pages/";

function redirect(e, page, title) {
    e.preventDefault();
    var content = $('#content');
    document.title = title;
    content.load(folder + page);		
}

$('#TreePage').click(function (e) {
    redirect(e, "Tree.html", "Tree Page");
});

$('#OnePage').click(function (e) {
    redirect(e, "One.html", "One Page");
});

$('#TwoPage').click(function (e) {
    redirect(e, "Two.html", "Two Page");
});

