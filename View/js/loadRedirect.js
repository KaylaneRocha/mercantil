
var folder = "pages/";

function redirect(e, page, title) {
    e.preventDefault();
    var content = $('#content');
    document.title = title;
    content.load(folder + page);		
}

$('#Tabela').click(function (e) {
    redirect(e, "Tabela.html", "Tabela");
});

$('#OnePage').click(function (e) {
    redirect(e, "One.html", "One Page");
});

$('#TwoPage').click(function (e) {
    redirect(e, "Two.html", "Two Page");
});

