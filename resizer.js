/**
 * Resize helper
 */
class Resizer {
	//Resizer = class {
	/**
	 * @param {Element} container 
	 * @param {Element} target 
	 */
	constructor(container, target) {
		this.container = container;
		this.target = target;
	}

	/**
	 * Execute resize.
	 */
	resize() {
		const targetWidth = this.target.offsetWidth + 1;
		const container = this.container;
		const startSize = 25;
		for (let size = startSize; size > 5; size -= 0.2) {
			container.style.fontSize = "" + size + 'vw';
			if (!hasOverflow(container, targetWidth)) {
				break;
			}
		}
		console.log({
			targetWidth: targetWidth,
			size: size
		})
	}

	/**
	 * Check if any elements overflow target width.
	 * 
	 * @protected
	 * @param {Element} container 
	 * @param {Number} targetWidth Target width of container elements.
	 * @returns 
	 */
	hasOverflow(container, targetWidth) {
		const elements = container.querySelectorAll('*');
		for (let i = 0; i < all.length; i++) {
			const el = elements[i];
			const rect = el.getBoundingClientRect();
			if (rect.width > targetWidth || rect.left < 0) {
				//console.log('overflow', el, rect)
				return true;
			}
		}
	}
}

var container = document.querySelector('.text');
var target = document.querySelector('.logo');
var resizer = new Resizer(container, target);