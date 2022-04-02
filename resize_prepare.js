/**
 * Resize the text element to the logo image.
 */
(function () {
	var container = document.querySelector('.text');
	var target = document.querySelector('.logo');
	var resizer = new Resizer(container, target);
	window.resizer = resizer;

	// wait for the font to load.
	document.fonts.ready.then(function () {
		console.log('resize on load');
		resizer.resize();
	});

	// check for text changes
	const config = { childList: true, subtree: true, characterData: true };
	let mutationDelayMs = 500;
	let mutationDelayId = -1;
	const observer = new MutationObserver((mutationsList) => {
		if (mutationDelayId > 0) {
			// clear => minimum mutationDelayMs (debouncing)
			clearTimeout(mutationDelayId);
			// return => at most mutationDelayMs (throttling)
			//return;
		}
		mutationDelayId = setTimeout(() => {
			mutationDelayId = -1;
			//console.log({mutationsList});
			console.log('resize on mutation');
			resizer.resize();
		}, mutationDelayMs);
	});
	observer.observe(container, config);

	// update on demand
	document.querySelector('.logo').addEventListener('click', ()=>{
		console.log('resize on click');
		resizer.resize();
	});
})();
