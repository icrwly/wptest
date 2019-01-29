export default class Navigation {
    constructor(el){
        document.querySelector('.site-header__menu').addEventListener('click', (e) => {
            e.preventDefault();
            e.stopImmediatePropagation();
            el.classList.add('open');
            document.documentElement.classList.add('scroll-lock')
            document.body.classList.add('scroll-lock')

        }, false);
        el.querySelector('.close').addEventListener('click', (e) => {
            e.preventDefault();
            el.classList.remove('open');
            document.documentElement.classList.remove('scroll-lock')
            document.body.classList.remove('scroll-lock')
        }, false);
    }
}