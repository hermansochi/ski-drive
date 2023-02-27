//import './bootstrap';
import IMask from 'imask';
import.meta.glob([
    '../img/**',
    '../fonts/**',
  ]);

const phoneMask1 = IMask(
    document.getElementById('phone1'), {
        mask: '+{7}(000)000-00-00'
    });

const phoneMask2 = IMask(
    document.getElementById('phone2'), {
        mask: '+{7}(000)000-00-00'
    });

const phoneMask3 = IMask(
    document.getElementById('phone3'), {
        mask: '+{7}(000)000-00-00'
    });

const postCall = (pos, phone) => {
        fetch('/api/order', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                // your expected POST request payload goes here
                position: pos,
                phone: phone
            })
        }).then(function (response) {
            return response.json();
        }).then(function (result) {
            const orderID = document?.querySelector('#order_id');
            const orderPhone = document?.querySelector('#order_phone');
            // enter you logic when the fetch is successful
            //console.log(result);
            orderID.innerText = ' ' + result.data.id;
            orderPhone.innerText = ' ' + result.data.phone;
        }).catch (function (error) {
                console.log('Request failed', error);
        });
}

const coordinates = [43.687711089988206, 40.25821072732546];
let map;

const btnUp = document.querySelector('.btnUp');
const menu = document.querySelector('.nav__list');
const links = menu.querySelectorAll('.nav__link');

const burger = document?.querySelector('[data-burger]');
const nav = document?.querySelector('[data-nav]');

const modals = document?.querySelectorAll('[data-modal]');

modals.forEach(trigger => {
    trigger.addEventListener('click',  function(event) {
        event.preventDefault();
        if (trigger.dataset.modal === 'up' && phoneMask1.unmaskedValue.length === 11) {
            postCall(trigger.dataset.modal, phoneMask1.unmaskedValue);
        } else if (trigger.dataset.modal === 'center' && phoneMask2.unmaskedValue.length === 11) {
            postCall(trigger.dataset.modal, phoneMask2.unmaskedValue);
        } else if (trigger.dataset.modal === 'bottom' && phoneMask3.unmaskedValue.length === 11) {
            postCall(trigger.dataset.modal, phoneMask3.unmaskedValue);
        }
        //document.body.classList.toggle('stop-scroll')
        const modal = document.querySelector('.modal');
        modal.classList.add('modal--open');
        const closes = document.querySelectorAll('.modal__close');
        closes.forEach(close => {
            close.addEventListener('click', function(event) {
                event.preventDefault();
                modal.classList.remove('modal-open');
                //document.body.classList.remove('stop-scroll')
            });
        });
    });
});

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
