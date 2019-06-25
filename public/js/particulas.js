// No cargar en dispositivos moviles, hacer un condicional con el width
$(document).ready(function(){
  var ancho = $(window).width();

  if(ancho > 600){

    particlesJS('particles-js', {
      particles: {
        color: '#00ff1a',
        shape: 'edje', // "circle", "edge" or "triangle"
        opacity: 1,
        size: 4,
        size_random: true,
        nb: 150,
        line_linked: {
          enable_auto: true,
          distance: 100,
          color: '#fff',
          opacity: 1,
          width: 1,
          condensed_mode: {
            enable: false,
            rotateX: 600,
            rotateY: 600
          }
        },
        anim: {
          enable: true,
          speed: 2
        }
      },
      interactivity: {
        enable: true,
        mouse: {
          distance: 300
        },
        detect_on: 'canvas', // "canvas" or "window"
        mode: 'grab',
        line_linked: {
          opacity: .5
        },
        events: {
          onclick: {
            enable: true,
            mode: 'bubble', // "push" or "remove"
            nb: 4
          }
        }
      },
      /* Retina Display Support */
      retina_detect: true
    });
  }
  
});