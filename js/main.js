function postComment() {
  // Firebase
  var ref = new Firebase("https://tauduluan.firebaseio.com"),
      comments = ref.child("comments");

  // Get input value
  var nama = $('#nama').val(),
      komentar = $('#komentar').val(),
      input = $('.input').val();

  // Time
  var date = new Date(),
  right_now = date.getFullYear() + '-' + date.getMonth() + '-' + date.getDate();

  if (input === '') {
    swal({
      title: "Input is not filled",
      text: "Input is not filled",
      type: "error"
    })
    return false;
  } else if (komentar.length < 10) {
    swal({
      title: "Komentar kurang panjang",
      text: "Komentar kamu kurang panjang",
      type: "error"
    })
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
    swal({
      title: "Terima kasih atas komentar kamu",
      text: "Terima kasih atas komentar kamu",
      type: "success"
    })

    location.reload()
    return true;
  }
}

function readPost(title) {
  var url = 'post/' + title + '.php';
  window.location.href = url;
}

function viewArtis(username) {
  var url = 'artis/' + username + '/';
  window.location.href = url;
}

function viewMeme(keyword) {
  var url = 'memes/' + keyword;
  window.location.href = url;
}

function memeNav(number) {
  var url = number;
  window.location.href = '/meme/memes/' + url;
}
