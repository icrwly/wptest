export default class QAListItem {
    constructor(el) {
        el.addEventListener('click', () => {
            el.classList.toggle('open');
        })
    }
}