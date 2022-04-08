function previewFile(input) {
  const file = $("[type=file]").get(0).files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = () => {
      $(".previewImg").attr("src", reader.result);
    };

    reader.readAsDataURL(file);
  }
}

//Es6 using class

class TypeWriter {
  constructor(textEl, words, wait = 3000) {
    this.textEl = textEl;

    this.words = words;

    this.txt = "";

    this.wordIndex = 0;

    this.wait = parseInt(wait, 10);

    this.type();

    this.isDeleting = false;
  }

  type() {
    // current index of word

    const current = this.wordIndex % this.words.length;

    // Get full Index of Current word

    const fullText = this.words[current];

    if (this.isDeleting) {
      // Remove Character

      this.txt = fullText.substring(0, this.txt.length - 1);
    } else {
      // Add a character

      this.txt = fullText.substring(0, this.txt.length + 1);
    }

    this.textEl.innerHTML = ` <span class="text">${this.txt}</span>`;

    // init type speed

    let typeSpeed = 300;

    if (this.isDeleting) {
      typeSpeed /= 2;
    }

    // If word is Complete

    if (!this.isDeleting && this.txt === fullText) {
      // This will make Pause at end
      typeSpeed = this.wait;

      // set isDeleting to true

      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === "") {
      this.isDeleting = false;

      // Move to next word

      this.wordIndex++;

      // Pause before start typying

      typeSpeed = 500;
    }

    setTimeout(() => this.type(), typeSpeed);
  }
}

// init on Dom

document.addEventListener("DOMContentLoaded", init);

// init App

function init() {
  const textEl = document.querySelector(".text-type");
  const words = JSON.parse(textEl.getAttribute("data-words"));
  const wait = textEl.getAttribute("data-wait");

  // init TypWriter

  new TypeWriter(textEl, words, wait);
}

function showFunction() {
  let x = document.getElementById("showPassword");
  let y = document.getElementById("hide1");
  let z = document.getElementById("hide2");

  if (x.type === "password") {
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
  } else {
    x.type = "password";
    y.style.display = "none";
    z.style.display = "block";
  }
}

function showFunction2() {
  let x = document.getElementById("showPassword2");
  let y = document.getElementById("hide3");
  let z = document.getElementById("hide4");

  if (x.type === "password") {
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
  } else {
    x.type = "password";
    y.style.display = "none";
    z.style.display = "block";
  }
}

function showFunction3() {
  let x = document.getElementById("showPassword3");
  let y = document.getElementById("hide5");
  let z = document.getElementById("hide6");

  if (x.type === "password") {
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
  } else {
    x.type = "password";
    y.style.display = "none";
    z.style.display = "block";
  }
}
