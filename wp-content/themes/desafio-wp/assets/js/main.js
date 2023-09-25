
/* Function to expand the home page containers. */

function extendContainers(elementSelector, containerSelector, direction) {
	const OFFSET = 15;
	const elements = document.querySelectorAll(elementSelector);

	if (window.innerWidth > 992) {
		elements.forEach((element) => {
			const container = document.querySelector(containerSelector);
			let distance;

			if (!element || !container) {
				console.error("Element or container not found.");
				return;
			}

			function updateElementSize() {
				if (direction === 'right') {
					distance = window.innerWidth - container.offsetWidth + OFFSET;
					element.style.width = `calc(100% + ${distance / 2}px)`;
				} else if (direction === 'left') {
					distance = window.innerWidth - container.offsetWidth + OFFSET;
					element.style.width = `calc(100% + ${distance / 2}px)`;
					element.style.marginLeft = `-${distance / 2}px`;
				}
			}

			updateElementSize();

			window.addEventListener('resize', updateElementSize);
		});
	}
}

extendContainers('.swiper-videos-home', '.container-extend-home', 'right');


/* Slides Home*/

var swiperDocumentarios = new Swiper(".swiper-videos-home-documentarios", {
	slidesPerView: 2.3,
	spaceBetween: 20,
	navigation: {
		nextEl: ".next-swiper-videos-home-documentarios",
		prevEl: ".prev-swiper-videos-home-documentarios",
	},
	breakpoints: {
		1000: {
			slidesPerView: 5.5,
			spaceBetween: 30,
		},
		1500: {
			slidesPerView: 6.5,
			spaceBetween: 30,
		},
	},
});

var swiperFilmes = new Swiper(".swiper-videos-home-filmes", {
	slidesPerView: 2.3,
	spaceBetween: 20,
	navigation: {
		nextEl: ".next-swiper-videos-home-filmes",
		prevEl: ".prev-swiper-videos-home-filmes",
	},
	breakpoints: {
		1000: {
			slidesPerView: 5.5,
			spaceBetween: 30,
		},
		1500: {
			slidesPerView: 6.5,
			spaceBetween: 30,
		},
	},
});

var swiperSeries = new Swiper(".swiper-videos-home-series", {
	slidesPerView: 2.3,
	spaceBetween: 20,
	navigation: {
		nextEl: ".next-swiper-videos-home-series",
		prevEl: ".prev-swiper-videos-home-series",
	},
	breakpoints: {
		1000: {
			slidesPerView: 5.5,
			spaceBetween: 30,
		},
		1500: {
			slidesPerView: 6.5,
			spaceBetween: 30,
		},
	},
});


/*Fancybox Modal*/

Fancybox.bind('[data-fancybox]', {
	l10n: {
		CLOSE: "Fechar",
		NEXT: "Próximo",
		PREV: "Anterior",
		MODAL: "Você pode fechar este conteúdo modal com a tecla ESC",
		ERROR: "Algo deu errado, tente novamente mais tarde",
		IMAGE_ERROR: "Imagem não encontrada",
		ELEMENT_NOT_FOUND: "Elemento HTML não encontrado",
		AJAX_NOT_FOUND: "Erro ao carregar AJAX: não encontrado",
		AJAX_FORBIDDEN: "Erro ao carregar AJAX: Proibido",
		IFRAME_ERROR: "Erro ao carregar a página",
	}
});