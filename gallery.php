<style>
    @import url("https://fonts.googleapis.com/css?family=Raleway");

:root {
  --glow-color: hsl(186 100% 69%);
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

.glowing-btn {
  position: absolute; /* Posiciona los botones en relación a su contenedor */
  left: 50%; /* Centrando horizontalmente */
  transform: translateX(-50%); /* Ajusta el centro del botón */
  color: var(--glow-color);
  cursor: pointer;
  padding: 0.35em 1em;
  border: 0.15em solid var(--glow-color);
  border-radius: 0.45em;
  background: none;
  perspective: 2em;
  font-family: "Raleway", sans-serif;
  font-size: 2em;
  font-weight: 900;
  letter-spacing: 1em;
  -webkit-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color), 0px 0px 0.5em 0px var(--glow-color);
  box-shadow: inset 0px 0px 0.5em 0px var(--glow-color), 0px 0px 0.5em 0px var(--glow-color);
  animation: border-flicker 2s linear infinite;
}

.glowing-txt {
  -webkit-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em var(--glow-color);
  text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em var(--glow-color);
  animation: text-flicker 3s linear infinite;
}

.faulty-letter {
  opacity: 0.5;
  animation: faulty-flicker 2s linear infinite;
}

.glowing-btn::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.7;
  filter: blur(1em);
  transform: translateY(120%) rotateX(95deg) scale(1, 0.35);
  background: var(--glow-color);
  pointer-events: none;
}

.glowing-btn::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  z-index: -1;
  background-color: var(--glow-color);
  box-shadow: 0 0 2em 0.2em var(--glow-color);
  transition: opacity 100ms linear;
}

.glowing-btn:hover {
  color: rgba(0, 0, 0, 0.8);
  text-shadow: none;
  animation: none;
}

.glowing-btn:hover .glowing-txt,
.glowing-btn:hover .faulty-letter {
  animation: none;
}

.glowing-btn:hover:before {
  filter: blur(1.5em);
  opacity: 1;
}

.glowing-btn:hover:after {
  opacity: 1;
}

/* Animaciones (puedes mantenerlas como están) */
@keyframes faulty-flicker {
  0% { opacity: 0.1; }
  2% { opacity: 0.1; }
  4% { opacity: 0.5; }
  19% { opacity: 0.5; }
  21% { opacity: 0.1; }
  23% { opacity: 1; }
  80% { opacity: 0.5; }
  83% { opacity: 0.4; }
  87% { opacity: 1; }
}

@keyframes text-flicker {
  0% { opacity: 0.1; }
  2% { opacity: 1; }
  8% { opacity: 0.1; }
  9% { opacity: 1; }
  12% { opacity: 0.1; }
  20% { opacity: 1; }
  25% { opacity: 0.3; }
  30% { opacity: 1; }
  70% { opacity: 0.7; }
  72% { opacity: 0.2; }
  77% { opacity: 0.9; }
  100% { opacity: 0.9; }
}

@keyframes border-flicker {
  0% { opacity: 0.1; }
  2% { opacity: 1; }
  4% { opacity: 0.1; }
  8% { opacity: 1; }
  70% { opacity: 0.7; }
  100% { opacity: 1; }
}

@media only screen and (max-width: 600px) {
  .glowing-btn {
    font-size: 1em;
  }
}

</style>

<button class='glowing-btn'><span class='glowing-txt'>C<span class='faulty-letter'>L</span>ICK</span></button>