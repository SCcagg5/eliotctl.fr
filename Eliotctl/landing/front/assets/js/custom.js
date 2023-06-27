


  function update_mail(){
    const emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    const input = document.getElementById("emailinput");

    if (!emailRegex.test(input.value)) {
      if (input.value.length > 0) {
        input.style.borderColor = "red";
        console.log(input.value);
      } else {
        input.style.borderColor = "white";
      }
      document.querySelector("#contact_button").disabled = true;
      return;
    }
    input.style.borderColor = "#0f33ff";
    inputs = document.querySelectorAll(".work-request--options input:checked");
    if (inputs.length != 0) {
      document.querySelector("#contact_button").disabled = false;
    }
  }

  function scrollTozone(hash) {

    let from = document.querySelector(".section--is-active");
    let to = document.querySelector(hash);
    let left = document.querySelectorAll("#viewport > div > nav > ul > li");
    let right = document.querySelectorAll("ul.outer-nav > li");
    content = hash.charAt(1).toUpperCase() + hash.slice(2);
    console.log(left, right);
      if (from != void 0) {
        from.classList.remove("section--is-active")
      }
      if (to != void 0) {
        to.classList.add("section--is-active")
      }
      for (var i = 0; i < left.length; i++){
        left[i].classList.remove("is-active");
        if (left[i].innerHTML.includes(content)) {
          left[i].classList.add("is-active");
        }
      }
      for (var i = 0; i < right.length; i++){
        right[i].classList.remove("is-active");
        if (right[i].innerHTML.includes(content)) {
          right[i].classList.add("is-active");
        }
      }
    location.hash = hash;
  }

  var e = document.querySelectorAll('li.section')
  var observer = new MutationObserver(function (event) {
  if (event.length < 2) {
    return;
  }
  hash = "";
  id = event[1].target.id;
  location.hash = id;
  })

  for (i = 0; i < e.length; i++) {
  observer.observe(e[i], {
    attributes: true,
    attributeFilter: ['class'],
    childList: false,
    characterData: false
  })
  }

  hash = location.hash;
  if (hash == '') {
  hash = "#home";
  }

  scrollTozone(hash);
  document.body.style.opacity = 1;

  particlesJS("viewport", {
  "particles": {
    "number": {
      "value": 155,
      "density": {
        "enable": true,
        "value_area": 789.1476416322727
      }
    },
    "color": {
      "value": "#415dff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#415dff"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.48927153781200905,
      "random": false,
      "anim": {
        "enable": true,
        "speed": 0.2,
        "opacity_min": 0,
        "sync": false
      }
    },
    "size": {
      "value": 2,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 2,
        "size_min": 1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.1,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 2.3,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": true,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "bubble"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 83.91608391608392,
        "size": 1,
        "duration": 3,
        "opacity": 1,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
  });
