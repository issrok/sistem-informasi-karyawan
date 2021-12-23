/*!
    * Start Bootstrap - SB Admin v7.0.4 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2021 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

$(function () {
    var mySetting = (function () {
        var myDatepicker = function () {
            if ($(".mydatepicker").length > 0) {
                $.fn.datepicker.defaults.format = "dd-mm-yyyy";
                $(".mydatepicker").datepicker({
                    autoclose: true,
                    todayHighlight: true,
                    todayBtn: true,
                    toggleActive: true
                });
            }

        }
        var myDatatable = function () {
            if ($('.mydatatable').length > 0) {
                $('.mydatatable').dataTable();
            }

            if ($('.mydatatable_simple').length > 0) {
                $('.mydatatable_simple').dataTable({
                    ordering: false,
                    info: false,
                    lengthChange: false,
                    searching: false,
                });
                $('.mydatatable_simple').on('page.dt', function () {
                    onresize(100);
                });
            }
        };
        return {
            init: function () {
                myDatepicker();
                myDatatable();
            },
        };
    })();
    mySetting.init();
});
