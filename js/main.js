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
  right_now = date.getFullYear() + '-' + date.getMonth() + '-' + date.getDate();

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
    console.log('Waktu: ' + right_now);

    // Post data to firebase
    comments.push().set({
      nama: nama,
      komentar: komentar,
      waktu: right_now
    });

    // Friendly message
    alert('Terima kasih atas komentar mu')

    return true;
  }
}
