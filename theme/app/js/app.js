import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import 'slick-carousel';
import IMask from 'imask';

require('./modules/menu');
require('./modules/popup');
require('./modules/lazyload');


$(document).ready(function () {
	$('.slider').slick({
		autoplay: true
	});

	IMask(document.querySelector('.popup__tel'), {
		mask: '+{7}(000)000-00-00'
	});

	const formEl = document.querySelector('.popup > form');
	formEl.addEventListener('submit', function(e){
		e.preventDefault();
		const formData = new FormData(formEl);
		fetch('/callback', {
			method: 'post',
			body: formData
		})
			.then(res => res.json())
			.then(res => {
				document.querySelector('.popup').innerHTML = res.output;
				Object.keys(res.errors).forEach((key) => {
					document.querySelector(`[name='${key}']`).classList.add('is-invalid')
				});
			})
			.catch(errors => {
				console.log(errors);
			})
	});

});
