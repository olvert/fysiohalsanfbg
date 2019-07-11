export default {
  init() {
    // JavaScript to be fired on all pages
    initMobileMenu();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

const initMobileMenu = () => {

  // Init open mobile menu button
  const open = document.getElementById('open-menu')
  open.addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.add('active');
  });

  // Init close mobile menu button
  const close = document.getElementById('close-menu')
  close.addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.remove('active');
  });

  // Init close mobile menu when clicking on menu item
  const mobileNavLinks = document.querySelectorAll('#mobile-menu a');
  for (let i = 0; i < mobileNavLinks.length; i++) {
    mobileNavLinks[i].addEventListener('click', () => {
      document.getElementById('mobile-menu').classList.remove('active');
    });
  }

}
