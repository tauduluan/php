<input type="text" class="form-control input" placeholder="Nama.." id="nama"><br>
<textarea rows="8" id="komentar" placeholder="Komentar anda.." class="form-control input"></textarea><br>
<button class="btn btn-info" onclick="postComment()">Submit</button>
<script type="text/javascript">
  function postComment() {
    // Firebase
    var ref = new Firebase("https://tauduluan.firebaseio.com");
    var comments = ref.child("comments");

    // Get input value
    var nama = $('#nama').val();
    var komentar = $('#komentar').val();
    var input = $('.input').val();

    // Time
    var date = new Date();

    if (input == '') {
      alert('Input is not filled')
      return false;
    } else if (komentar.length < 10) {
      alert('Komentar kamu kurang panjang');
      return false;
    } else {
      // Log input value
      console.log('Nama: ' + nama);
      console.log('Komentar: ' + komentar);
      console.log('Waktu: ' + date);

      // Post data to firebase
      comments.push().set({
        nama: nama,
        komentar: komentar,
        waktu: date
      });

      // Friendly message
      alert('Terima kasih atas komentar mu')

      return true;
    }
  }
</script>
<script src="https://cdn.firebase.com/js/client/2.4.1/firebase.js" charset="utf-8"></script>
