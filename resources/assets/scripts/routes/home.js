export default {
  init() {
    // JavaScript to be fired on the home page
    console.log('Hej från home!');
    initAnchorMenu();


  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};

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
