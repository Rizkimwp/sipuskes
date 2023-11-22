
    function hapusUser(userId) {
        if (confirm('Apakah Anda yakin ingin menghapus pengguna ini?')) {
            // Jika pengguna menekan OK, maka lanjutkan dengan penghapusan
            document.querySelector('form[action="{{ route("user.destroy", $user->id }}"]').submit();
        } else {
            // Jika pengguna membatalkan, tidak ada tindakan yang diambil
        }
    }

   

// Jquery Animate Number
$(document).ready(function() {
  var options = {
    threshold: 0.5, // threshold 0.5 artinya elemen akan terdeteksi saat setengah masuk ke viewport
  };

  var observer = new IntersectionObserver(function(entries, observer) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        var $counter = $(entry.target);
        var countTo = $counter.attr('data-count');

        $({ countNum: $counter.text() }).animate(
          { countNum: countTo },
          {
            duration: 6000, // durasi animasi dalam milidetik
            easing: 'swing',
            step: function() {
              $counter.text(Math.floor(this.countNum));
            },
            complete: function() {
              $counter.text(this.countNum);
            },
          }
        );

        observer.unobserve(entry.target); // berhenti mengamati setelah animasi dimulai
      }
    });
  }, options);

  $('.counter').each(function() {
    observer.observe($(this)[0]);
  });
});
