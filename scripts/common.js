const phoneInfosContainer = document.querySelector(".phone-infos");
const phoneNumber = "+212699379212";

phoneInfosContainer.addEventListener("click", async (e) => {
	e.preventDefault();
	await navigator.clipboard.writeText(phoneNumber);
	alert("Phone copied");
});

// Enhanced Portfolio Carousel
class PortfolioCarousel {
	constructor() {
		this.carouselTrack = document.querySelector(".carousel-track");
		this.images = document.querySelectorAll(".works-container img");
		this.isReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

		if (this.carouselTrack) {
			this.init();
		}
	}

	init() {
		// Respect user's motion preferences
		if (this.isReduced) {
			this.carouselTrack.style.animationPlayState = "paused";
		}

		// Add click handlers for image interaction
		this.images.forEach((img) => {
			img.addEventListener("click", () => {
				// Could open lightbox or navigate to portfolio
				window.location.href = "./portfolio";
			});

			img.addEventListener("keydown", (e) => {
				if (e.key === "Enter" || e.key === " ") {
					e.preventDefault();
					window.location.href = "./portfolio";
				}
			});
		});

		// Performance optimization: pause animation when not visible
		if ("IntersectionObserver" in window) {
			const observer = new IntersectionObserver(
				(entries) => {
					entries.forEach((entry) => {
						if (entry.isIntersecting) {
							this.carouselTrack.style.animationPlayState = this.isReduced
								? "paused"
								: "running";
						} else {
							this.carouselTrack.style.animationPlayState = "paused";
						}
					});
				},
				{ threshold: 0.1 },
			);

			observer.observe(this.carouselTrack);
		}
	}
}

// Initialize carousel when DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	new PortfolioCarousel();
});
