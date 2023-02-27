//import './bootstrap';
import IMask from 'imask';
import.meta.glob([
    '../img/**',
    '../fonts/**',
  ]);

var phoneMask = IMask(
    document.getElementById('phone1'), {
        mask: '+{7}(000)000-00-00'
    });

const coordinates = [43.687711089988206, 40.25821072732546];
let map;

const btnUp = document.querySelector('.btnUp');
const menu = document.querySelector('.nav__list');
const links = menu.querySelectorAll('.nav__link');

const burger = document?.querySelector('[data-burger]');
const nav = document?.querySelector('[data-nav]');

const modals = document?.querySelectorAll('[data-modal]');

modals.forEach(btn => {
    btn.addEventListener('click', () => {
        document.body.classList.toggle('stop-scroll')
        const modal = document.querySelector('.modal');
        modal.classList.add('modal--open');
        const close = modal.querySelector('.modal__close');
        close.addEventListener('click', () => {
            modal.classList.remove('modal--open');
            document.body.classList.remove('stop-scroll')
        })
    })
})

burger?.addEventListener('click', () => {
    document.body.classList.toggle('stop-scroll')
    burger.classList.toggle('burger--active');
    nav.classList.toggle('nav--visible');
});

links.forEach(el => {
    el.addEventListener('click', () => {
        document.body.classList.remove('stop-scroll')
        burger.classList.remove('burger--active');
        nav.classList.remove('nav--visible');
    })
})

if(window.location.hash != ''){
    scrollToId(window.location.hash);
}

menu.addEventListener('click', (e) => {
    if (e.target.classList.contains('nav__link')) {
        e.preventDefault();

        let link = e.target;
        scrollToId(link.hash);
    }
})

btnUp.addEventListener('click', () => {
    scrollToY(0);
})

window.addEventListener('scroll', function (e) {
    let pos = window.pageYOffset;

    if (pos > window.innerHeight / 2) {
        btnUp.classList.add('btnUp--open');
    } else {
        btnUp.classList.remove('btnUp--open');
    }

    for(let i = links.length - 1; i >= 0; i--){
        let link = links[i];
        let target = document.querySelector(link.hash);

        if(pos > elemOffsetTop(target) - window.innerHeight / 2){
            menu.querySelector('.link--active').classList.remove('link--active');
            link.classList.add('link--active');
            break;
        }
    }
})

function scrollToId(id) {
    let contentBox = document.querySelector('#header');
    let boxStyles = window.getComputedStyle(contentBox);
    let shift = parseInt(boxStyles.height);

    let target = document.querySelector(id);

    if (target) {
        let pos = elemOffsetTop(target) - shift;
        scrollToY(pos);
    }
}

function scrollToY(y) {
    window.scrollTo({
        top: y,
        behavior: 'smooth'
    })
}

function elemOffsetTop(el){
    let coords = el.getBoundingClientRect();
    return coords.top + window.pageYOffset;
}

function mapInit() {
    map = new ymaps.Map('map', {
        center: coordinates,
        zoom: 16,
        // controls: ['routePanelControl'],
    });

    map.controls.remove('geolocationControl');
    map.controls.remove('searchControl');
    map.controls.remove('trafficControl');
    map.controls.remove('typeSelector');
    map.controls.remove('fullscreenControl');
    map.controls.remove('zoomControl');
    map.controls.remove('rulerControl');

    let placemark = new ymaps.Placemark(coordinates, {
        balloonContentHeader: 'SkiDrive',
        balloonContentBody: 'Горнолыжная экипировка',
        balloonContentFooter: 'Пн-Вс: 08:00-23:00',
    }, {

    });

    map.geoObjects.add(placemark);
    placemark.balloon.open();

    // let control = myMap.controls.get('routPanelControl');
    // let location = ymaps.geolocation.get();
    // location.then(function(res){
    //   let locationText = res.geoObjects(0).properties.get('text');

    //     control.routePanel.state.set({
    //   type: 'masstransit',
    //   fromEnabled: true,
    //   from: locationText,
    //   toEnabled: false,
    //   to: coordinates,
    // })
    // })
}

ymaps.ready(mapInit);
