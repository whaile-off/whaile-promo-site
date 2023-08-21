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

window.onload = function() {
    setTimeout(function() {
        document.querySelector('.loading').style.display = 'none';
        document.querySelector('.main').style.display = 'block';
    }, 8000);
};

const socialIconBlocks = document.querySelectorAll('.social-icons');
const windowWidth = window.innerWidth;

socialIconBlocks.forEach(socialIconBlock => {
    const icons = socialIconBlock.querySelectorAll('img');
    const iconWidth = windowWidth <= 600 ? '20px' : '40px';
    icons.forEach(icon => {
        icon.setAttribute('width', iconWidth);
        icon.style.width = iconWidth;
    });
});

const imagesI = document.querySelectorAll('.I img');
if (imagesI.length > 0 && windowWidth <= 600) {
    imagesI.forEach(image => {
        image.setAttribute('width', '200px');
        image.style.width = '200px';
    });
}
const worksButtons = document.querySelectorAll('.worksButton');
const mainsButtons = document.querySelectorAll('.mainsButton');
const mainButtons = document.querySelectorAll('.mainButton');
const skilsButtons = document.querySelectorAll('.skilsButton');
const centerButton = document.getElementById('center');
const mainContent = document.querySelector('.main');
const workspContent = document.querySelector('.worksp');
const skilspContent = document.querySelector('.skilsp');
const aboutpContent = document.querySelectorAll('.aboutp');
const center = document.querySelector('.center');
const works = document.querySelectorAll('.worksc');

worksButtons.forEach(button => {
    button.addEventListener('click', function() {
        mainContent.style.display = 'none';
	skilspContent.style.display = 'none';
       	workspContent.style.display = 'block';
    });
});

mainsButtons.forEach(button => {
    button.addEventListener('click', function() {
	center.classList.remove('slide-left', 'slide-undo');
        workspContent.style.display = 'none';
	skilspContent.style.display = 'none';
	aboutpContent.forEach(section => {
	    section.style.display = 'none';
	});
       	mainContent.style.display = 'block';
    });
});

mainButtons.forEach(button => {
    button.addEventListener('click', function() {
	center.classList.remove('slide-left', 'slide-undo');
        workspContent.style.display = 'none';
	skilspContent.style.display = 'none';
	aboutpContent.forEach(section => {
	    section.style.display = 'none';
	});
	center.classList.remove('slide-right', 'slide');
        if (windowWidth <= 600) {
	    center.classList.add('slide-undo');
        } else {
	    center.classList.add('slide-left');
        }
    });
});

skilsButtons.forEach(button => {
    button.addEventListener('click', function() {
	center.classList.remove('slide-left', 'slide-undo');
	works.forEach(section => {
	    section.classList.remove('slide-undo', 'slide-left');
	});
	mainContent.style.display = 'none';
        workspContent.style.display = 'none';
	if (windowWidth <= 600) {
	    works.forEach(section => {
	       section.classList.add('slide-undo');
	    });
        } else {
	    works.forEach(section => {
	       section.classList.add('slide-left');
	    });
        }
	skilspContent.style.display = 'block';
    });
});

centerButton.addEventListener('click', function() {
    center.classList.remove('slide-left', 'slide-undo');
    if (windowWidth <= 600) {
	center.classList.add('slide');
    	aboutpContent.forEach(section => {
            setTimeout(function() {
                section.style.display = 'block';
            }, 1000);
        });
    } else {
	center.classList.add('slide-right');
        aboutpContent.forEach(section => {
            setTimeout(function() {
                section.style.display = 'block';
            }, 1000);
        });
    }
});