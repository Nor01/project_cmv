!function(i){"use strict";Dropzone.autoDiscover=!1,i('[data-plugin="dropzone"]').each(function(){var e=i(this).attr("action"),r=i(this).data("previewsContainer"),a={url:e};r&&(a.previewsContainer=r);var o=i(this).data("uploadPreviewTemplate");o&&(a.previewTemplate=i(o).html());i(this).dropzone(a)}),0<i('[data-plugins="dropify"]').length&&i('[data-plugins="dropify"]').dropify({messages:{default:"Drag and drop a file here or click",replace:"Drag and drop or click to replace",remove:"Remove",error:"Ooops, something wrong appended."},error:{fileSize:"The file size is too big (1M max)."}})}(jQuery);