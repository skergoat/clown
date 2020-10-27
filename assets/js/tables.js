$(function () {   
    $("#table_address").DataTable({
        "paging": true,
        "pageLength": 5,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
        "language": {
        "emptyTable": "Aucune adresse pour l'instant",
        "paginate": {
            "previous": "Précédent",
            'next':'Suivant'
            }
        }
    });
    $("#table_commands").DataTable({
        "paging": true,
        "pageLength": 5,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
        "language": {
        "emptyTable": "Aucune adresse pour l'instant",
        "paginate": {
            "previous": "Précédent",
            'next':'Suivant'
            }
        }
    });
});