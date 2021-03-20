// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    language: {
        processing:     "В процессе...",
        search: "Поиск в таблице:",
        lengthMenu: 'Показывать по _MENU_',
        info:"Показывается  _START_-_END_  из _TOTAL_ записей",
        infoEmpty: "Нет записей.",
        infoFiltered:   "(отфильтровано из _MAX_ записей) ",
        infoPostFix:    "",
        loadingRecords: "Загрузка...",
        zeroRecords:    "Не найдено...",
        emptyTable:     "Нет данных...",
        paginate: {
          first:      "Первый",
          previous:   "Назад",
          next:       "Далее",
          last:       "Последний"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }

    
  });
});
