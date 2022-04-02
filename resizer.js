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

		this.minFont = 5;
		this.maxFont = 25;
		this.step = 0.2;
	}

	/**
	 * Execute resize.
	 */
	resize() {
		const targetWidth = this.target.offsetWidth + 1;
		const container = this.container;
		const startSize = this.maxFont;
		for (var size = startSize; size >= this.minFont; size -= this.step) {
			container.style.fontSize = "" + size + 'vw';
			if (!this.hasOverflow(container, targetWidth)) {
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
		for (let i = 0; i < elements.length; i++) {
			const el = elements[i];
			const rect = el.getBoundingClientRect();
			if (rect.width > targetWidth || rect.left < 0) {
				//console.log('overflow', el, rect)
				return true;
			}
		}
	}
}
