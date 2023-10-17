
    function hapusUser(userId) {
        if (confirm('Apakah Anda yakin ingin menghapus pengguna ini?')) {
            // Jika pengguna menekan OK, maka lanjutkan dengan penghapusan
            document.querySelector('form[action="{{ route('user.destroy', userId) }}"]').submit();
        } else {
            // Jika pengguna membatalkan, tidak ada tindakan yang diambil
        }
    }

