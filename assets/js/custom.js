var id = 0 
$(document).ready(function(){
  $('#loading-simpan, #loading-ubah, #loading-hapus, #pesan-error, #pesan-sukses, #btn-reset').hide()
  $('#view').on('click', '.btn-form-ubah', function(){
    id = $(this).data('id')
    $('#btn-simpan').hide()
    $('#btn-ubah').show() 
    $('#modal-title').html('Form Ubah data')
    var tr = $(this).closest('tr') 
    var nama = tr.find('.nama-value').val() 
    var jeniskelamin = tr.find('.jeniskelamin-value').val() 
    var telp = tr.find('.telp-value').val()
    var alamat = tr.find('.alamat-value').val() 
    $('#nama').val(nama) 
    $('#jenis_kelamin').val(jeniskelamin) 
    $('#telp').val(telp) 
    $('#alamat').val(alamat) 
  })
  $('#view').on('click', '.btn-alert-hapus', function(){ 
    id = $(this).data('id')

  })
  $('#btn-tambah').click(function(){ 
    $('#btn-ubah').hide() 
    $('#btn-simpan').show() 
    $('#modal-title').html('Form Simpan data')
  })
  $('#btn-simpan').click(function(){ 
    $('#loading-simpan').show() // 
    $.ajax({
      url: base_url + 'pegawai/simpan', 
      type: 'POST', 
      data: $("#form-modal form").serialize(),
      dataType: 'json',
      beforeSend: function(e) {
        if(e && e.overrideMimeType) {
          e.overrideMimeType('application/jsoncharset=UTF-8')
        }
      },
      success: function(response){ 
        $('#loading-simpan').hide()  
        if(response.status == 'sukses'){ 
          $('#view').html(response.html)
         
          $('#pesan-sukses').html(response.pesan).fadeIn().delay(10000).fadeOut()
          $('#form-modal').modal('hide')
        }else{ 
         
          $('#pesan-error').html(response.pesan).show()
        }
      },
      error: function (xhr, ajaxOptions, thrownError) { 
        alert(xhr.responseText) 
      }
    })
  })
  $('#btn-ubah').click(function(){
    $('#loading-ubah').show() 
    $.ajax({
      url: base_url + 'pegawai/ubah/' + id, 
      type: 'POST', 
      data: $("#form-modal form").serialize(), 
      dataType: 'json',
      beforeSend: function(e) {
        if(e && e.overrideMimeType) {
          e.overrideMimeType('application/jsoncharset=UTF-8')
        }
      },
      success: function(response){ 
        $('#loading-ubah').hide() 
        if(response.status == 'sukses'){ 
          $('#view').html(response.html)
          $('#pesan-sukses').html(response.pesan).fadeIn().delay(10000).fadeOut()
          $('#form-modal').modal('hide')
        }else{ 
         
          $('#pesan-error').html(response.pesan).show()
        }
      }
    })
  })
  $('#btn-hapus').click(function(){
    $('#loading-hapus').show() 
    $.ajax({
      url: base_url + 'pegawai/hapus/' + id, 
      type: 'GET', 
      dataType: 'json',
      beforeSend: function(e) {
        if(e && e.overrideMimeType) {
          e.overrideMimeType('application/jsoncharset=UTF-8')
        }
      },
      success: function(response){ 
        $('#loading-hapus').hide()
        $('#view').html(response.html)
       
        $('#pesan-sukses').html(response.pesan).fadeIn().delay(10000).fadeOut()
        $('#delete-modal').modal('hide')
      }
    })
  })
  $('#form-modal').on('hidden.bs.modal', function (e){ 
    $('#form-modal input, #form-modal select, #form-modal textarea').val('')
  })
})