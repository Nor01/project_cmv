!function(e){e("#ordered-table").DataTable({language:{paginate:{previous:"<i class='bx bx-chevron-left'>",next:"<i class='bx bx-chevron-right'>"},info:"Showing customers _START_ to _END_ of _TOTAL_",lengthMenu:'Display <select class=\'custom-select custom-select-sm ml-1 mr-1\'><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> orders'},pageLength:10,dom:'<"row align-items-center" <"col-sm-4" l> <"col-sm-8" <"d-flex align-items-center justify-content-sm-end flex-wrap" f<"ml-0 ml-sm-3" B>>> ><"row" <"col-12"Tgt>> <"row align-items-center" <"col-md-6"i> <"col-md-6"p> >',columns:[{orderable:!1,targets:0,render:function(e,t,l,o){return"display"===t&&(e='<div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input dt-checkboxes"><label class="custom-control-label">&nbsp;</label></div>'),e},checkboxes:{selectRow:!1,selectAllRender:'<div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input dt-checkboxes"><label class="custom-control-label">&nbsp;</label></div>'}},{orderable:!0,targets:1},{orderable:!1,targets:2},{orderable:!1,targets:3},{orderable:!1,targets:4},{orderable:!1,targets:5},{orderable:!1,targets:6},{orderable:!1,targets:7},{orderable:!1,targets:8}],buttons:[{extend:"excel",text:'<i class="mdi mdi-file-excel mr-1"></i>Excel',className:"btn-info"},{extend:"pdf",text:'<i class="mdi mdi-file-pdf mr-1"></i>PDF',className:"btn-info"}],order:[],drawCallback:function(){e(".dataTables_paginate > .pagination").addClass("flat-rounded-pagination "),e(".dataTables_filter").find("label").addClass("search-box d-inline-flex position-relative"),e(".dataTables_filter").find(".form-control").attr("placeholder","Search...")}})}(jQuery);