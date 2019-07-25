import * as Cookies from 'js-cookie';

// 90 days in milliseconds
const COOKIE_EXPIRATION_TIME = 1000 * 60 * 60 * 24 * 90;

const COOKIE_NAME = 'ffb-accepted-cookies';

export default {
  init() {
    // JavaScript to be fired on all pages
    initMobileMenu();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    initCookiePolicy();
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

const initCookiePolicy = () => {

  initAcceptButton();

  const expirationTs = Cookies.get(COOKIE_NAME);
  const nowTs = Date.now();

  if (!expirationTs || nowTs > parseInt(expirationTs)) {
    document.getElementById('cookie-policy').classList.add('active');
  }
}

const initAcceptButton = () => {

  const nowTs = Date.now();
  const accept = document.getElementById('accept-cookies')
  
  accept.addEventListener('click', () => {
    Cookies.set(COOKIE_NAME, nowTs + COOKIE_EXPIRATION_TIME);
    document.getElementById('cookie-policy').classList.remove('active');
  });
}

