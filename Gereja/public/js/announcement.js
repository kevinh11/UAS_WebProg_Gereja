const carets = document.getElementsByClassName('caret');
const announcement = document.getElementById('pengumuman');
const counter = document.getElementById('pengumumanCounter')

let announcements = [];
let currIdx = 0;


function makeRequest() {
    const url = 'http://127.0.0.1:8000/announcements/all'
    console.log(url)
  axios.get(url)
  
  
  .then(response => {
      console.log(response.data.announcement);
      announcements = response.data.announcement

      setAnnouncementMsg();
  })
  
  .catch(error => {
      console.error('Error retrieving data:', error);
  });
}


function swipe(dir) {

  currIdx += dir;
  console.log(currIdx)
  if (currIdx + dir < 0) {
    currIdx = 0
  }
  else if (currIdx+dir > announcements.length-1) {
    currIdx = announcements.length -1;
  }
  announcement.textContent = announcements[currIdx]
}


Array.from(carets).forEach((c)=> {
 c.addEventListener('click', function(event) {
  if (event.target.classList.contains('left')) {
    swipe(-1)
  }
  else {
    swipe(1)
  }

  setAnnouncementMsg()
 });
 

})


function setAnnouncementMsg() {
  if (announcements.length > 0) {
    announcement.textContent = announcements[currIdx].announcement;
    counter.textContent = `${currIdx + 1}/${announcements.length}`;
  } 
  
  else {
    announcement.textContent = "Tidak ada pengunguman saat ini";
    counter.textContent = "0/0";
  }

  console.log(announcements);
}
window.addEventListener('load', function() {
  makeRequest();
  
})

