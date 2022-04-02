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
	const observer = new MutationObserver((mutationsList) => {
		//console.log({mutationsList});
		console.log('resize on mutation');
		resizer.resize();
	});
	observer.observe(container, config);

	// update on demand
	document.querySelector('.logo').addEventListener('click', ()=>{
		console.log('resize on click');
		resizer.resize();
	});
})();
