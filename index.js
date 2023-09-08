const ROTATE_DEG = 12;
const ROTATE_DEG2 = 12;
const WORDS_CLASS = '.wheel__word';
const LETTERS_CLASS = '.wheel__letter';
const LETTERS2_CLASS = '.wheel__letter2';

const words = document.querySelectorAll(WORDS_CLASS);
const letters = document.querySelectorAll(LETTERS_CLASS);
const letters2 = document.querySelectorAll(LETTERS2_CLASS);
const audio = document.getElementById('audio');
const bars = document.querySelectorAll('.bar');
const windowWidth = window.innerWidth;
const engC = document.querySelector('.eng');
const ruC = document.querySelector('.ru');
const worksButtons = document.querySelectorAll('.worksButton');
const mainButtons = document.querySelectorAll('.mainButton');
const skilsButtons = document.querySelectorAll('.skilsButton');
const centerButton = document.querySelectorAll('.centerbtn');
const mainContent = document.querySelectorAll('.main');
const workspContent = document.querySelectorAll('.worksp');
const skilspContent = document.querySelectorAll('.skilsp');
const aboutpContent = document.querySelectorAll('.aboutp');
const center = document.querySelectorAll('.center');
const arrows = document.querySelectorAll('.arrows');
const arrowdown = document.querySelectorAll('.arrowdown');
const arrowup = document.querySelectorAll('.arrowup');
const dones = document.querySelectorAll('.done');
const languageOptions = document.querySelectorAll('.language-option input[type=radio]');
const language1 = document.querySelectorAll('.language-toggle .item-1');
const language2 = document.querySelectorAll('.language-toggle .item-2');
const ma = document.querySelectorAll('.margin');
let eng = true;
let cent = true;
let animationPaused = true;

function rotateElements(elements, value) {
    let deg = 0;
    for (let element of elements) {
        element.style.transform = `rotate(${deg}deg)`;
        deg += value;
    }
}

rotateElements(words, 50);
rotateElements(letters, ROTATE_DEG);
rotateElements(letters2, ROTATE_DEG2);

function toggleSections() {
    center.forEach(section => {
        section.classList.remove('slide-left', 'slide-undo');
    });
    skilspContent.forEach(section => {
        section.style.display = 'none';
    });
    workspContent.forEach(section => {
        section.style.display = 'none';
    });
    aboutpContent.forEach(section => {
        section.style.display = 'none';
    });
    center.forEach(section => {
        section.classList.remove('slide-right', 'slide');
    });
    if (windowWidth <= 600) {
        center.forEach(section => {
            section.classList.add('slide-undo');
        });
    } else {
        center.forEach(section => {
            section.classList.add('slide-left');
        });
    }
    mainContent.forEach(section => {
        section.style.display = 'block';
    });
}
function animateBar(bar) {
    if (animationPaused) {
        return;
    }

    const randomScale = Math.random() * 2 + 1;
    const animationDuration = Math.random() * 0.5 + 0.5;

    bar.style.animation = `scaleUpDown ${animationDuration}s infinite alternate`;

    setTimeout(() => {
        bar.style.transform = `scaleY(${randomScale})`;
        setTimeout(() => {
            bar.style.transform = 'scaleY(1)';
            animateBar(bar);
        }, animationDuration * 1000);
    }, animationDuration * 1000);
}

bars.forEach(bar => {
    bar.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            animationPaused = false;
            bars.forEach(animateBar);
        } else {
            audio.pause();
            animationPaused = true;
            bars.forEach(bar => {
                bar.style.animationPlayState = 'paused';
            });
        }
    });
});

languageOptions.forEach(option => {
    option.addEventListener('change', () => {
        if (eng) {
            eng = false;
            engC.style.display = 'none';
            language2.forEach(section => {
                section.style.background = 'none';
            });
            language1.forEach(section => {
                section.style.background = '#201842';
            });
            ruC.style.display = 'block';
        } else {
            eng = true;
            ruC.style.display = 'none';
            language1.forEach(section => {
                section.style.background = 'none';
            });
            language2.forEach(section => {
                section.style.background = '#201842';
            });
            engC.style.display = 'block';
        }
    });
});

if (windowWidth <= 600) {
    arrows.forEach(arrow => {
        arrow.style.display = 'none';
    });
} else {
    ma.forEach(margin => {
        margin.style.margin = '0';
    });
}

arrowdown.forEach(button => {
    button.addEventListener('click', function() {
        dones.forEach(done => {
            done.scrollTop += 358;
        });
    });
});

arrowup.forEach(button => {
    button.addEventListener('click', function() {
        dones.forEach(done => {
            done.scrollTop -= 358;
        });
    });
});

worksButtons.forEach(button => {
    button.addEventListener('click', function() {
        mainContent.forEach(section => {
            section.style.display = 'none';
        });
        skilspContent.forEach(section => {
            section.style.display = 'none';
        });
        workspContent.forEach(section => {
            section.style.display = 'block';
        });
    });
});

skilsButtons.forEach(button => {
    button.addEventListener('click', function() {
        mainContent.forEach(section => {
            section.style.display = 'none';
        });
        workspContent.forEach(section => {
            section.style.display = 'none';
        });
        skilspContent.forEach(section => {
            section.style.display = 'block';
        });
    });
});

mainButtons.forEach(button => {
    button.addEventListener('click', toggleSections);
});

centerButton.forEach(section => {
    section.addEventListener('click', function() {
        if (cent) {
            cent = false;
            center.forEach(section => {
                section.classList.add('slide-right');
            });
            aboutpContent.forEach(section => {
                setTimeout(function() {
                    section.style.display = 'block';
                }, 1000);
            });
        } else {
            cent = true;
            toggleSections();
        }
    });
});