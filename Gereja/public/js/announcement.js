const carets = document.getElementsByClassName('caret');
const announcement = document.getElementById('pengumuman');
const counter = document.getElementById('pengumumanCounter')
let announcements = ["At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.","On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."];

let currIdx = 0;
function swipe(dir) {

  currIdx += dir;
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
 });
 
//  c.addEventListener('keydown', function(event) {
//   if (event.keyCode == 37) {
//     swipe(1);
//     alert(event.keyCode)
//   }
//  })
})

window.addEventListener('load', function() {
  announcement.textContent = announcements[currIdx];
  counter.textContent = `${currIdx + 1}/ ${announcements.length}`
})

