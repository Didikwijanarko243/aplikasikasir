$(document).ready(function(){

    // ganti form tambah data
    $(document).on('click','.bt1',function(){
       
        $('.isi').load('tambah_staff')
    })

    //ganti form import
    $(document).on('click','.bt2',function(){
       
        $('.isi').load('import_staff')
    })

    // update shift bulk
    $(document).on('click','.btn-setshift',function(){
       
        $('.isi').load('form_shift')
    })

    // delete shift bulk
    $(document).on('click','.btn-deleteshiftall',function(){
       
        $('.isi').load('delete_all_shift')
    })



    $(document).on('click','.btn-tambah-produk',function(){
       
        $('.isi').load('form_produk')
    })

    $(document).on('click','.btn-import-produk',function(){
       
        $('.isi').load('import_produk')
    })

    $(document).on('click','.btn-tambah-kategori',function(){
       
        $('.isi').load('form_kategori')
    })

    $(document).on('click','.btn-tambah-kategori-variasi',function(){
       
        $('.isi').load('form_kategori_variasi')
    })
    
    $(document).on('click','.btn-tambah-variasi-produk',function(){
       
        $('.isi').load('form_variasi')
    })

    $(document).on('click','.btn-tambah-satuan',function(){
       
        $('.isi').load('form_satuan')
    })
})