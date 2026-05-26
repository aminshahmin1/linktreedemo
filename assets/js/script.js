const interactiveCards = document.querySelectorAll(".contact-card, .link-card, .service-card, .project-card");
const revealItems = document.querySelectorAll(".reveal-item");
const canHover = window.matchMedia("(hover: hover) and (pointer: fine)").matches;

revealItems.forEach((item, index) => {
  item.style.setProperty("--reveal-index", index);
  requestAnimationFrame(() => item.classList.add("is-visible"));
});

interactiveCards.forEach((card) => {
  card.addEventListener("pointerdown", () => {
    card.classList.add("is-pressed");
  });

  card.addEventListener("pointerup", () => {
    card.classList.remove("is-pressed");
  });

  card.addEventListener("pointerleave", () => {
    card.classList.remove("is-pressed");
    card.style.removeProperty("--tilt-x");
    card.style.removeProperty("--tilt-y");
  });

  if (!canHover) {
    return;
  }

  card.addEventListener("pointermove", (event) => {
    const rect = card.getBoundingClientRect();
    const x = (event.clientX - rect.left) / rect.width - 0.5;
    const y = (event.clientY - rect.top) / rect.height - 0.5;

    card.style.setProperty("--tilt-x", `${(-y * 5).toFixed(2)}deg`);
    card.style.setProperty("--tilt-y", `${(x * 5).toFixed(2)}deg`);
  });
});
