
const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");


const indicator = document.querySelector(".indicator");
const input = document.getElementById("hello");
const faible = document.querySelector(".faible");
const moyen = document.querySelector(".moyen");
const fort = document.querySelector(".fort");
const texte = document.querySelector(".texte");


// ANIMATION INPUTS //

inputs.forEach((inp) => {
    inp.addEventListener("focus", () => {
        inp.classList.add("active");
    });

    inp.addEventListener("blur", () => {
        if(inp.value != "") return;
        inp.classList.remove("active");
    });
});



// ANIMATION SLIDE //

toggle_btn.forEach((btn) => {
    btn.addEventListener("click", () => {
        main.classList.toggle("sign-up-mode");
    });
});


// ANIMATION SLIDER //

function moveSlider() {
    let index = this.dataset.value;

    let currentImage = document.querySelector(`.img-${index}`);
    images.forEach((img) => img.classList.remove('show'));
    currentImage.classList.add("show");

    // Slide des titres sous les images //
    const textSlider = document.querySelector(".text-group");
    textSlider.style.transform = `translateY(${-(index - 1) * 30}px)`;

    bullets.forEach(bull => bull.classList.remove("active"));
    this.classList.add("active");
}

bullets.forEach((bullet) => {
    bullet.addEventListener("click", moveSlider);
});


// AFFICHAGE DE LA LONGUEUR DU MOT DE PASSE //

let regexFaible = /[a-z]/;
let regexMoyen = /\d+/;
let regexFort = /.[!,@,#,$,%,^,&,*,?,_,-,(,)]/;

function trigger() {
    if(input.value != "") {
        indicator.style.display = "block";
        indicator.style.display = "flex";

        if(input.value.length <= 3 && (input.value.match(regexFaible) || input.value.match(regexMoyen) || input.value.match(regexFort))) no=1;

        if(input.value.length >= 6 && ((input.value.match(regexFaible) && input.value.match(regexMoyen)) || (input.value.match(regexMoyen) && input.value.match(regexFort)) || (input.value.match(regexFaible) && input.value.match(regexFort)))) no=2;

        if(input.value.length >= 6 && input.value.match(regexFaible) && input.value.match(regexMoyen) && input.value.match(regexFort)) no=3;

        if(no == 1) {
            faible.classList.add("active");
            texte.style.display = "block";
            texte.textContent = "Ton mot de passe est trop faible";
            texte.classList.add("faible");
        }

        if(no == 2) {
            moyen.classList.add("active");
            texte.textContent = "Ton mot de passe est moyen";
            texte.classList.add("moyen");

        } else {
            moyen.classList.remove("active");
            texte.classList.remove("moyen");
        }


        if(no == 3) {
            moyen.classList.add("active");
            fort.classList.add("active");
            texte.textContent = "Ton mot de passe est élevé";
            texte.classList.add("fort");

        } else {
            fort.classList.remove("active");
            texte.classList.remove("fort");
        }
        
        
    } else {
        indicator.style.display = "none";
        texte.style.display = "none";
        
    }
}