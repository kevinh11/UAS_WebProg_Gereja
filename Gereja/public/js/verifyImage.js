
const uploadGambar = document.getElementById('gambar');
const imgForm = document.getElementById('upload-gambar-form');

function verifyExt(ext) {
  switch(ext) {
    case 'gif':
    case 'jpg':
    case 'jpeg':
    case 'png':
    case 'svg':
      return true
    default:
      return false;
  }

}

uploadGambar.addEventListener('change', function(event) {
  console.log(uploadGambar.value.split('.'));
  let ext = uploadGambar.value.split('.').slice(-1);
  
  if (verifyExt(ext)) {
    axios.post()
  }
})

