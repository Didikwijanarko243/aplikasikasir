
$(document).ready(function(){

    $(document).on('click','.bt1',function(){

       
        $('div.isi').load('/form_tambah_data');

    })

    $(document).on('click','.bt2',function(){

       
        $('div.isi').load('/import_staff');

    })


});