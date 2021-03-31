var portfolioData = [{
    'title': 'Sistema de Monitoreo y Control',
    'subtitle': 'Gestion en tiempo real de mermas para Jugos del Valle',
    'description': 'MYC (Monitoreo y Control de Merma) fue desarrollado y diseñado para gestionar las mermas en tiempo real usando Laravel, OAuth2, JQuery, JavaScript, Mysql, creando API Rest y consumiendo los servicios desde un Cliente HTTP, es un sistema web diseñado por un equipo de desarrolladores de la <a href="https://www.ubam.com.mx/comunidaduniversitaria.html">Universidad Bancaria de México</a> para Coordinadores de <a href="https://jugosdelvalle.com.mx/">Jugos del Valle</a>.',
    'code': 'monitoreo',
    'buttons': ['desktop', false, false, 'http://monitoreoControl.com'],
    'asset': 'assets/img/portafolio/monitorecontrol.jpg'
}, {
    'title': 'Xynergia Club Contenido',
    'subtitle': 'Promo Landing Page HotGirls para Perú',
    'description': 'Pagina web que fue diseñada atractivamente con la ayuda de Sketch, Adobe XD y programada con Bootrsap, CSS3 (sass), JavaSCript ES6, es capaz de mostrar contenido dinamico con una sola seccion adminitrativa de contenido. (CMS diseñado por desarrolladores externos) ',
    'code': 'club',
    'buttons': ['desktop', false, false, 'http://xynlc.com/hotsex/af_xyn_pe_entel_sexy_001/?XID=958&ani='],
    'asset': 'assets/img/portafolio/clubcontenido.jpg'
}, {
    'title': 'Xynergia Servicios Avanzados',
    'subtitle': 'Web de Contacto Responsivo',
    'description': 'Xynergia.com es una pagina web diseñada de forma responsiva por desarrolladores de <a href="www.xynergia.com">Xynergia</a> usando CSS3, Bootrstrap, JavaScript, JQuery, Illustrator, y patrones de diseño. (Atomic Design)',
    'code': 'xynergia',
    'buttons': ['desktop', false, false, 'http://xynergia.com'],
    'asset': 'assets/img/portafolio/xynergia.jpg'
},{
    'title': 'Xynergia HotGirls',
    'subtitle': 'Promo Landing Page HotGirls para Perú',
    'description': 'HotGirls es el dominio de una landing page diseñada con la ayuda de CSS3, Bootrstrap, es capaz de mostrar contenido dinamico con una sola seccion adminitrativa de contenido. (CMS diseñado por desarrolladores externos)',
    'code': 'hotgirls',
    'buttons': ['desktop', false, false, 'http://xynlc.com/latinbabes/af_pe_entel_sexy_001/?XID=957&ani='],
    'asset': 'assets/img/portafolio/hotgirl.jpg'
}];

/*----------  MODAL CLICKS  ----------*/


var currentProjectIndex = 0;

var $portfolioModal = $('#portafolio-modal'),
    $portfolioBtn = $('.btn-portafolio'),
    $imgmodal = $('#img-modal');

//portfolio click
$portfolioBtn.click(function () {

    var index = $portfolioBtn.index(this);
    currentProjectIndex = index;

    changeProject(currentProjectIndex);

    //open modal
    $portfolioModal.modal('show');
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
    //updates buttons
   /*
    var buttons = portfolioData[index].buttons;
    for (var i = 0; i < buttons.length; i++) {
        if (buttons[i] === false) {
            $($devices[i]).addClass('hide');
        } else {
            $($devices[i]).removeClass('hide');
        }
    }
   */
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
    changeVideo(currentProjectIndex, '-desktop');
});

$btnIpad.click(function () {
    changeVideo(currentProjectIndex, '-ipad');
});

$btnMobile.click(function () {
    changeVideo(currentProjectIndex, '-mobile');
});

$btnLink.click(function () {
    window.open(portfolioData[currentProjectIndex].buttons[3]);
});
*/

/*
var videoPlayer = videojs('portfolio-video');

//changes poster, video sources, and plays video
function changeVideo(index, string) {

    videoPlayer.src([
        { type: 'video/mp4', src: './assets/res/video/' + portfolioData[index].code + string + '.mp4' },
        { type: 'video/webm', src: './assets/res/video/' + portfolioData[index].code + string + '.webm' },
        { type: 'video/ogg', src: './assets/res/video/' + portfolioData[index].code + string + '.ogg' }
    ]);

    videoPlayer.play();
    videoPlayer.controls(true); //show controls manually since they are hidden on reset

}

//resets player to show new poster
function resetVideo(index) {

    videoPlayer.reset();
    videoPlayer.controls(false); //hide controls manually since they show by default
    videoPlayer.poster('./assets/img/portfolio/' + portfolioData[index].code + '.png');

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