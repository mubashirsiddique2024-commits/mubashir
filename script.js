const nav = document.querySelector('#nav');

window.addEventListener('scroll', () => {
  const scrolled = window.scrollY > 0;

  if (nav) {
    if (scrolled) {
      nav.style.display = 'flex';
      nav.style.justifyContent = 'space-around';
    } else {
      nav.style.display = 'block';
      nav.style.justifyContent = '';
    }
  }
})

// const sections = document.querySelectorAll('section');
// const links = document.querySelectorAll('.nav_links li a');

// window.addEventListener('scroll', () => {
//   let current = '';

//   sections.forEach(section => {
//     if (scrollY >= section.offsetTop - 60) { // 50 pixels adjust kar liye
//       current = section.id;
//     }

// links.forEach(link => {
//   link.style = ``
//     if (link.getAttribute('href') === '#' + current) {
//       link.style = `background-color:#fff;color:#000;box-shadow:1px 1px 1px 20px #fff;`
//     }
//   });

// const animateX = document.querySelectorAll('.animate-x');
// window.addEventListener('scroll', () => {
//   animateX.forEach(el => {
//     const top = el.getBoundingClientRect().top;

//     if (top < window.innerHeight - 100) { 
//       el.style.animation = "slowleft 1s linear all forwards";
//     }
//   });
// });
// })

// });



const faqs = document.querySelectorAll('.FAQ');
const answers = document.querySelectorAll('.answer');

faqs.forEach((faq, index) => {
    faq.addEventListener('click', () => {

        // STEP 1: Sab answers close karo
        answers.forEach(ans => ans.textContent = "");

        // STEP 2: Clicked FAQ ka answer open karo
        const answer = faq.nextElementSibling; 
        const text = faq.getAttribute('data-answer');

        answer.textContent = text;
    });
});



let num = 600;
const dynamic = document.querySelector('.dynamic');

if (dynamic) {
  const intervalId = setInterval(() => {
    if (num > 1200) {
      clearInterval(intervalId);
      return;
    }
    dynamic.textContent = num++;
  }, 0.001);
}


const columnImgs = document.querySelectorAll('.column img');
const columns = document.querySelectorAll('.column');

columns.forEach((col, index) => {
  col.addEventListener('mouseover', () => {
    columnImgs[index].style.display = 'flex';
  });
  
  col.addEventListener('mouseout', () => {
    columnImgs[index].style.display = 'none';
  });
});

