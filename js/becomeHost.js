function scrollToForm() {
  document.getElementById("host-form").scrollIntoView({ behavior: "smooth" });
}

document.addEventListener("DOMContentLoaded", function () {
  const boxes = document.querySelectorAll(".benefit-box");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate");
        } else {
          entry.target.classList.remove("animate");
        }
      });
    },
    {
      threshold: 0.2,
    }
  );

  boxes.forEach((box, i) => {
    box.style.transition = "transform 0.6s ease, opacity 0.6s ease";
    box.style.transitionDelay = `${i * 0.2}s`; // smooth staggering
    observer.observe(box);
  });
});
