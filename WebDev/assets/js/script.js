const cards = document.querySelectorAll(".contact-card, .link-card");

cards.forEach((card) => {
  card.addEventListener("pointerdown", () => {
    card.classList.add("is-pressed");
  });

  card.addEventListener("pointerup", () => {
    card.classList.remove("is-pressed");
  });

  card.addEventListener("pointerleave", () => {
    card.classList.remove("is-pressed");
  });
});
