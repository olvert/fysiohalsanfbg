import { new_map } from '../util/acfMap';
import 'jquery';

/* Export */
export default {
  init() {
    // JavaScript to be fired on the home page
    initAnchorMenu();
    initBackCaret();
    initAcfMap();
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};

/* Page vars */
let scrollPosition = 0;
let ticking = false;

/* Functions */
const initAnchorMenu = () => {
  const navLinks = document.querySelectorAll('.nav-primary-desktop a');

  navLinks.forEach((node) => {
    node.addEventListener('click', (e) => {
      e.preventDefault();
      const id = e.target.getAttribute('href').replace('#', '');
      const element = document.getElementById(id);

      element.scrollIntoView({behavior: 'smooth'});
    });
  });
}

const initBackCaret = () => {
  // Init scroll listener
  window.addEventListener('scroll', () => {
    scrollPosition = window.scrollY;
  
    if (!ticking) {
      window.requestAnimationFrame(() => {
        checkBackCaretVisibility(scrollPosition);
        ticking = false;
      });
  
      ticking = true;
    }
  });

  // Init caret button
  const backCaret = document.getElementById('back-caret')
  backCaret.addEventListener('click', () => {
    const header = document.querySelector('header');
    header.scrollIntoView({behavior: 'smooth'});
  });
}

const checkBackCaretVisibility = (scrollPosition) => {
  if (scrollPosition > window.innerHeight) {
    document.getElementById('back-caret').classList.add('active');
  } else {
    document.getElementById('back-caret').classList.remove('active');
  }
}

const initAcfMap = () => {
  $('.acf-map').each(function(){

		// create map
		new_map( $(this) );

	});
}
