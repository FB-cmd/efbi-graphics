document.querySelectorAll(".showcase-book").forEach((book) => {
	if (!book.querySelector(".book-spread")) return;

	const toggle = () => {
		if (!book.classList.contains("is-open")) {
			const display = book.parentElement.getBoundingClientRect();
			const rect = book.getBoundingClientRect();
			const shift = display.left + display.width / 2 - (rect.left + rect.width / 2);
			book.style.setProperty("--open-shift", `${shift}px`);
		}

		const isOpen = book.classList.toggle("is-open");
		book.setAttribute("aria-expanded", String(isOpen));
	};

	book.addEventListener("click", toggle);
	book.addEventListener("keydown", (event) => {
		if (event.key === "Enter" || event.key === " ") {
			event.preventDefault();
			toggle();
		}
	});
});
