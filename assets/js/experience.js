var experiencieData = [{
    'puesto': 'Becario Web Developer | México, CDMX | enero 2019 - noviembre 2019',
    'actividades': ['Analizar los requerimientos del cliente siguiendo la metodología ágil SCRUM', 'Desarrollar y diseñar actualizaciones basadas en los requerimientos del cliente de un solo modulo al mes','Usar la plataforma trello para dar seguimiento de los avances totales','Usar control de versiones con Git para asegurar el progeso diario o semanal', 'Creacion y consumo de Restful APIs, uso de OAuth2, Passport'],
    'herramientas': ['Frameworks: Laravel v5.7, Bootstrap v4.6','Lenguage: PHP v7.0, CSS, JavaScript', 'Librerias de JavaScript: Jquery, GSAP', 'IDE: PhpStorm JetBrain', 'Cotrol de Versiones: Git', 'Base de Datos: PostgreSQL', 'Programas: Postman'],
    'buttons': [false, 'http://xynergia.com'],
    'code': 'xynergia',
}, {
    'puesto': 'Web Developer Back-End',
    'actividades': ['Diseñar e implementar nuevas funciones para renovar el sistema de abasto, inventario y control de almacenes para la Secretaría de Salud', 'Trabajar en el mantenimiento y desarrollo tecnológico del sistema', 'Colaborar en la revisión del código con la ayuda del control de versiones GIT'],
    'herramientas': ['Frameworks: Laravel v6.0, Bootrstrap v5.1', 'Lenguage: PHP v7.1, CSS3, JavaScript ES5','Librerias de JavaScritps: Jquery, Select2, SweetAlert, etc', 'IDE: PhpStorm JetBrains, Visual Studio Code', 'Control de Versiones: Git', 'Base de Datos: PostgreSQL'],
    'buttons': [false, 'https://tics.finanzas.cdmx.gob.mx/saica/public/login'],
    'code': 'sedesa',
}];

/*----------  MODAL CLICKS  ----------*/

var currentExperienceProjectIndex = 0;

var $experienceModal = $('#experiencia-modal'),
    $experienceBtn = $('.btn-experiencia'),
    $experienceBtnlink = $('#btn-experiencia');

//portfolio click
$experienceBtn.click(function () {

    var index = $experienceBtn.index(this);
    currentExperienceProjectIndex = index;
    changeExperience(currentExperienceProjectIndex);

    //open modal
    $experienceModal.modal('show');
    console.log('portafolio id index'+index);
});


/*----------  LEFT AND RIGHT ARROWS  ----------*/

//portfolio modal is already open
var $arrowLeft = $('#arrow-left'),
    $arrowRight = $('#arrow-right');

$arrowLeft.click(function () {

    currentExperienceProjectIndex = (currentExperienceProjectIndex === 0) ? (experiencieData.length - 1) : (currentExperienceProjectIndex -= 1);
    changeExperience(currentExperienceProjectIndex);


});

$arrowRight.click(function () {

    currentExperienceProjectIndex = (currentExperienceProjectIndex === experiencieData.length - 1) ? (currentExperienceProjectIndex = 0) : (currentExperienceProjectIndex += 1);
    changeExperience(currentExperienceProjectIndex);

});

var $puesto_experiencia = $('#puesto_experiencia'),
    $actividades = $('#actividades_experiencia'),
    $herramientas = $('#herramientas_experiencia'),
    $devicesExperience = $('.btn-device');

function changeExperience(index) {

    //fill data
    $puesto_experiencia.text(experiencieData[index].puesto);
    var activities = experiencieData[index].actividades;
    for (var number = 0; number<activities.length; number++){
        $actividades.append('<li>'+experiencieData[index].actividades[number]+'</li>')
    }
    var tools = experiencieData[index].herramientas;
    for (var number1 = 0; number1<tools.length; number1++){
        $herramientas.append('<li>'+experiencieData[index].herramientas[number1]+'</li>');
    }

    $experienceBtnlink.attr('href', experiencieData[index].buttons[1]);
    //updates buttons

    var buttons = experiencieData[index].buttons;
    for (var i = 0; i < buttons.length; i++) {
        if (buttons[i] === false) {
            $($devicesExperience[i]).addClass('visually-hidden');
        } else {
            $($devicesExperience[i]).removeClass('visually-hidden');
        }
    }

    //resets video playback (stops) and changes poster
    //resetVideo(index);
}

/*----------  VIDEO BUTTONS  ----------*/
/*

var $btnDesktop = $('#btn-video-desktop');
var $btnIpad = $('#btn-video-ipad');
var $btnMobile = $('#btn-video-mobile');
var $btnLink = $('#btn-web-link');

$btnDesktop.click(function () {
    changeVideo(currentExperienceProjectIndex, '-desktop');
});

$btnIpad.click(function () {
    changeVideo(currentExperienceProjectIndex, '-ipad');
});

$btnMobile.click(function () {
    changeVideo(currentExperienceProjectIndex, '-mobile');
});

$btnLink.click(function () {
    window.open(experiencieData[currentExperienceProjectIndex].buttons[3]);
});
*/

/*
var videoPlayer = videojs('portfolio-video');

//changes poster, video sources, and plays video
function changeVideo(index, string) {

    videoPlayer.src([
        { type: 'video/mp4', src: './assets/res/video/' + experiencieData[index].code + string + '.mp4' },
        { type: 'video/webm', src: './assets/res/video/' + experiencieData[index].code + string + '.webm' },
        { type: 'video/ogg', src: './assets/res/video/' + experiencieData[index].code + string + '.ogg' }
    ]);

    videoPlayer.play();
    videoPlayer.controls(true); //show controls manually since they are hidden on reset

}

//resets player to show new poster
function resetVideo(index) {

    videoPlayer.reset();
    videoPlayer.controls(false); //hide controls manually since they show by default
    videoPlayer.poster('./assets/img/portfolio/' + experiencieData[index].code + '.png');

}
*/
/*
var exampleModal = document.getElementById('portafolio-modal');

exampleModal.addEventListener('show.bs.modal', function (event) {

    // Button that triggered the modal
    var button = event.relatedTarget;

    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-whatever');
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = exampleModal.querySelector('.modal-title');
    var modalBodyInput = exampleModal.querySelector('.modal-body input');

    modalTitle.textContent = 'New message to ' + recipient;
    modalBodyInput.value = recipient;
});*/
