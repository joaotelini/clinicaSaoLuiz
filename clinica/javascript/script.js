function cacete(d) {
    $.post("../../Controller/query.php", {departamento:d}, function(x) { $("#especialista").html(x);});
}