const rotateBetweenWords = (value) => {
    const words = document.querySelectorAll('.wheel__word')

    let deg = -60

    for (let word of words) {
        word.style.transform = `rotate(${ deg }deg)`
        deg += value
    }
}

const rotateBetweenLetters = (value) => {
    const letters = document.querySelectorAll('.wheel__letter')

    let deg = 0

    for (let letter of letters) {
        letter.style.transform = `rotate(${ deg }deg)`
        deg += value
    }
}

const rotateBetweenLetters2 = (value) => {
    const letters = document.querySelectorAll('.wheel__letter2')

    let deg = 0

    for (let letter of letters) {
        letter.style.transform = `rotate(${ deg }deg)`
        deg += value
    }
}

rotateBetweenWords(50)
rotateBetweenLetters(12)
rotateBetweenLetters2(12)

const audio = document.getElementById('audio');
const bars = document.querySelectorAll('.bar');
let animationPaused = true;

bars.forEach(bar => {
    bar.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            animationPaused = false;
            for (let i = 0; i < bars.length; i++) {
                animateBar(bars[i]);
            }
        } else {
            audio.pause();
            animationPaused = true;
            for (let i = 0; i < bars.length; i++) {
                bars[i].style.animationPlayState = 'paused';
            }
        }
    });
});

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

languageOptions.forEach(option => {
    option.addEventListener('change', () => {
        if (eng) {
            eng = false
            engC.style.display = 'none';
            language2.forEach(section => {
                section.style.background = 'none';
            });
            language1.forEach(section => {
                section.style.background = '#201842';
            });
            ruC.style.display = 'block';
        } else {
            eng = true
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

mainButtons.forEach(button => {
    button.addEventListener('click', function() {
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

centerButton.forEach(section => {
    section.addEventListener('click', function() {
        if (cent) {
            cent = false;

            center.forEach(section => {
                section.classList.remove('slide-left', 'slide-undo');
            });
            if (windowWidth <= 600) {
                center.forEach(section => {
                    section.classList.add('slide');
                });
                aboutpContent.forEach(section => {
                    setTimeout(function() {
                        section.style.display = 'block';
                    }, 1000);
                });
            } else {
                center.forEach(section => {
                    section.classList.add('slide-right');
                });
                aboutpContent.forEach(section => {
                    setTimeout(function() {
                        section.style.display = 'block';
                    }, 1000);
                });
            }
        } else {
            cent = true;

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
    });
});