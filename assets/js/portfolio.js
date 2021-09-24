var portfolioData = [{
    'title': 'Sistema de Monitoreo y Control (WMS)',
    'subtitle': 'Gestion en tiempo real de mermas para Jugos del Valle. Sistema de gestión operativa de varias lineas de producción',
    'description': 'MYC (Monitoreo y Control de Merma) fue desarrollado y diseñado para gestionar las mermas en tiempo real usando Laravel, OAuth2, JQuery, JavaScript, Mysql, creando API Rest y consumiendo los servicios desde un Cliente HTTP, es un sistema web diseñado por un equipo de desarrolladores de la <a href="https://www.ubam.com.mx/comunidaduniversitaria.html">Universidad Bancaria de México</a> para Coordinadores de <a href="https://jugosdelvalle.com.mx/">Jugos del Valle</a>.',
    'code': 'monitoreo',
    'buttons': ['assets/video/videomonitoreo.pm4', 'http://monitoreoControl.com'],
    'asset': 'assets/img/portafolio/monitorecontrol.jpg'
}, {
    'title': 'Xynergia Servicios Avanzados',
    'subtitle': 'Web de Contacto Responsivo',
    'description': 'Xynergia.com es una pagina web diseñada de forma responsiva por desarrolladores de <a href="www.xynergia.com">Xynergia</a> usando CSS3, Bootrstrap, JavaScript, JQuery, Illustrator, y patrones de diseño. (Atomic Design)',
    'code': 'xynergia',
    'buttons': [false, 'http://xynergia.com'],
    'asset': 'assets/img/portafolio/xynergia.jpg'
},{
    'title': 'Sistema de Abasto, Inventario y Control de Almacenes (SAICA)',
    'subtitle': 'Administracion y distribucion de artículos medicos a hospitales, clínicas, centros de salud de la Secretaría de Salud de la Ciudad de México',
    'description': 'SAICA es un sistema web programado y diseñado para la Secretaría de Salud de la Ciudad de México para controlar las adquisiciones que se generan, administrar contratos con proveedores y ofrecer una mejor gestion de los contratos validados.',
    'code': 'saica',
    'buttons': [false, 'https://tics.finanzas.cdmx.gob.mx/saica/public/login'],
    'asset': 'assets/img/portafolio/saica.jpg'
}];

/*----------  MODAL CLICKS  ----------*/

var currentProjectIndex = 0;

var $portfolioModal = $('#portafolio-modal'),
    $portfolioBtn = $('.btn-portafolio'),
    $imgmodal = $('#img-modal'),
    $btnlink = $('#btn-link');

//portfolio click
$portfolioBtn.click(function () {

    var index = $portfolioBtn.index(this);
    currentProjectIndex = index;
    changeProject(currentProjectIndex);

    //open modal
    $portfolioModal.modal('show');
    console.log('portafolio id index'+index);
});


/*----------  LEFT AND RIGHT ARROWS  ----------*/

//portfolio modal is already open
var $arrowLeft = $('#arrow-left'),
    $arrowRight = $('#arrow-right');

$arrowLeft.click(function () {

    currentProjectIndex = (currentProjectIndex === 0) ? (portfolioData.length - 1) : (currentProjectIndex -= 1);
    changeProject(currentProjectIndex);


});

$arrowRight.click(function () {

    currentProjectIndex = (currentProjectIndex === portfolioData.length - 1) ? (currentProjectIndex = 0) : (currentProjectIndex += 1);
    changeProject(currentProjectIndex);

});

var $title = $('#portfolio-project-title'),
    $subtitle = $('#portfolio-project-subtitle'),
    $description = $('#portfolio-project-description'),
    $video = $('#portfolio-video'),
    $devices = $('.btn-device');

function changeProject(index) {

    //fill data
    $title.text(portfolioData[index].title);
    $subtitle.text(portfolioData[index].subtitle);
    $description.html(portfolioData[index].description);
    $imgmodal.attr('src', portfolioData[index].asset);
    $btnlink.attr('href', portfolioData[index].buttons[1]);
    //updates buttons
   
    var buttons = portfolioData[index].buttons;
    for (var i = 0; i < buttons.length; i++) {
        if (buttons[i] === false) {
            $($devices[i]).addClass('visually-hidden');
        } else {
            $($devices[i]).removeClass('visually-hidden');
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
