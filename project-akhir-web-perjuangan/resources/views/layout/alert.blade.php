
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


        @if( $is_session_pesan_exist ?? false)
        <script>
                swal("Berhasil!!", "{{ $session_pesan }}", "success");
        </script>
        @else
        @endif
        @if ($is_session_pesan_error_exist ?? false)
        <script>
            swal( "Gagal!!!" ,  "{{ $session_pesan_error }}" ,  "error" );
        </script>
        @else
        @endif
    
        <script type="text/javascript">
            function konfirmasi(event,$id)
            {
                event.preventDefault();
    
                swal({
                title: "Yakin ingin Menghapus?",
                text: "setelah ditekan data tidak bisa dipulihkan!!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location.href = '/data{{ $namaTable }}/hapus/' + $id;
                } else {
                    
                    swal("Data batal dihapus!!!");
                }
                });
            }  
        </script>      