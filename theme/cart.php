<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Cart</title>
    <style>@-webkit-keyframes wobble {
  0%,
  100% {
    -webkit-transform: translateX(0%);
            transform: translateX(0%);
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
  }
  15% {
    -webkit-transform: translateX(-30px) rotate(6deg);
            transform: translateX(-30px) rotate(6deg);
  }
  30% {
    -webkit-transform: translateX(15px) rotate(-6deg);
            transform: translateX(15px) rotate(-6deg);
  }
  45% {
    -webkit-transform: translateX(-15px) rotate(3.6deg);
            transform: translateX(-15px) rotate(3.6deg);
  }
  60% {
    -webkit-transform: translateX(9px) rotate(-2.4deg);
            transform: translateX(9px) rotate(-2.4deg);
  }
  75% {
    -webkit-transform: translateX(-6px) rotate(1.2deg);
            transform: translateX(-6px) rotate(1.2deg);
  }
}

@keyframes wobble {
  0%,
  100% {
    -webkit-transform: translateX(0%);
            transform: translateX(0%);
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
  }
  15% {
    -webkit-transform: translateX(-30px) rotate(6deg);
            transform: translateX(-30px) rotate(6deg);
  }
  30% {
    -webkit-transform: translateX(15px) rotate(-6deg);
            transform: translateX(15px) rotate(-6deg);
  }
  45% {
    -webkit-transform: translateX(-15px) rotate(3.6deg);
            transform: translateX(-15px) rotate(3.6deg);
  }
  60% {
    -webkit-transform: translateX(9px) rotate(-2.4deg);
            transform: translateX(9px) rotate(-2.4deg);
  }
  75% {
    -webkit-transform: translateX(-6px) rotate(1.2deg);
            transform: translateX(-6px) rotate(1.2deg);
  }
}

@-webkit-keyframes pulse-regular {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes pulse-regular {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

body {
  font-family: 'Lato', sans-serif;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  min-height: 100vh;
}

main {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
}

* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

.container {
  max-width: 1160px;
  width: 100%;
  margin: 0 auto;
  padding: 0 10px;
}

.header {
  background: #222222;
}

.header__wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.header__left, .header__right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
}

.header__left {
  padding: 18px 0 18px 0;
}

.header__logo {
  margin: 0 41px 0 0;
}

.header .search {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.header .search__button {
  cursor: pointer;
  background: none;
  border: none;
}

.header .search__input {
  display: none;
  margin: 0 0 0 10px;
  padding: 5px;
  border-radius: 5px;
}

.header .search__input:focus {
  outline: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.header .search__input::-webkit-input-placeholder {
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #222224;
  opacity: 0.67;
}

.header .search__input:-ms-input-placeholder {
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #222224;
  opacity: 0.67;
}

.header .search__input::-ms-input-placeholder {
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #222224;
  opacity: 0.67;
}

.header .search__input::placeholder {
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #222224;
  opacity: 0.67;
}

.header .search:hover .search__input {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.header__item:not(:last-child) {
  margin: 0 33px 0 0;
}

.header__item {
  padding: 18px 0 18px 0;
}

.header__item:hover .header__menu {
  display: block;
  -webkit-transition: display 0.5s;
  transition: display 0.5s;
  z-index: 1;
}

.header__button {
  cursor: pointer;
  position: relative;
}

.header__menu {
  position: absolute;
  padding: 37px 0 34px 34px;
  background: #FFFFFF;
  left: -91px;
  top: 45px;
  height: 763px;
  -webkit-box-shadow: -2px 4px 10px #dbd9d9;
          box-shadow: -2px 4px 10px #dbd9d9;
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  display: none;
}

.header__menu__list {
  margin: 20px 0 0 0;
}

.header__menu__list .menu__list li {
  list-style-type: none;
  text-align: left;
}

.header__menu__list .menu__list li > a {
  text-decoration: none;
  font-style: normal;
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #6F6E6E;
  padding: 12px 100px 0 20px;
  display: block;
}

.header__menu__list .menu__list li > a:hover {
  color: #F16D7F;
}

.header__menu h4 {
  text-align: left;
  color: #F16D7F;
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  text-transform: uppercase;
}

.header__menu > h4 {
  text-align: left;
  font-weight: bold;
  font-size: 14px;
  line-height: 17px;
  color: #000000;
  text-transform: uppercase;
}

@media (max-width: 936px) {
  .header__wrap {
    padding: 0 32px;
  }
  .header__menu {
    height: -webkit-max-content;
    height: -moz-max-content;
    height: max-content;
    left: -75px;
  }
}

@media (max-width: 668px) {
  .header__item:not(:first-child) {
    display: none;
  }
  .header__item:not(:last-child) {
    margin: 0;
  }
  .header__wrap {
    padding: 0 16px;
  }
  .header__menu {
    left: -159px;
    padding: 15px 50px 15px 25px;
  }
}

.intro {
  background-color: #F1E4E6;
}

.intro__wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  background: url(../img/man.png) no-repeat bottom;
  background-size: 33%;
  background-position-x: 10px;
}

.intro__wrap-height {
  padding: 67% 0 0 0;
}

.intro__text {
  width: 44.4%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-top: 25.5%;
  -webkit-animation: pulse-regular 2s ease 0s infinite normal backwards;
          animation: pulse-regular 2s ease 0s infinite normal backwards;
  border-left: 12px solid #F16D7F;
  padding: 0 0 0 16px;
}

.intro__text h1 {
  font-style: normal;
  font-weight: bold;
  font-size: 32.5px;
  line-height: 30px;
  text-transform: uppercase;
}

.intro__text__top {
  display: block;
  font-style: normal;
  font-weight: 900;
  font-size: 49px;
  line-height: 58px;
}

.intro__text__decor {
  color: #F16D7F;
}

.product,
.catalog {
  background: url(../img/bg_header.jpg);
}

.product__header,
.catalog__header {
  height: 148px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.product__header h1,
.catalog__header h1 {
  font-weight: normal;
  font-size: 24px;
  line-height: 29px;
  color: #F16D7F;
  text-transform: uppercase;
}

.product__breadcrumbs li,
.catalog__breadcrumbs li {
  display: inline-block;
}

.product__breadcrumbs li:last-of-type,
.catalog__breadcrumbs li:last-of-type {
  color: #F16D7F;
  font-weight: bold;
  font-size: 14px;
  line-height: 17px;
  text-transform: uppercase;
}

.product__breadcrumbs li::before,
.catalog__breadcrumbs li::before {
  content: '/';
  margin-left: 5px;
  margin-right: 5px;
  color: #7f7f7f;
}

.product__breadcrumbs li:first-child::before,
.catalog__breadcrumbs li:first-child::before {
  content: '';
}

.product__breadcrumbs li > a,
.catalog__breadcrumbs li > a {
  text-decoration: none;
  color: #636363;
  font-weight: 300;
  font-size: 14px;
  line-height: 17px;
  text-transform: uppercase;
}

.product__breadcrumbs li > a:hover,
.catalog__breadcrumbs li > a:hover {
  color: #F16D7F;
}

.reg,
.cart {
  background: url(../img/bg_header.jpg);
}

.reg__header,
.cart__header {
  height: 148px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.reg h1,
.cart h1 {
  font-weight: normal;
  font-size: 24px;
  line-height: 29px;
  color: #F16D7F;
  text-transform: uppercase;
}

.offers {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-top: 65px;
  margin-bottom: 96px;
}

.offers__block {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.offers__block > a {
  font-size: 16px;
  line-height: 19px;
  color: #FFFFFF;
  text-align: center;
  text-decoration: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 100%;
  width: 100%;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  text-transform: uppercase;
}

.offers__block span {
  font-size: 24px;
  color: #F16D7F;
  display: block;
  font-weight: 700;
  margin: 10px 0 0 0;
}

.offers__block-link {
  padding: 29.5% 0;
}

.offers__block-link-acces {
  padding: 5.8% 0;
}

.offers__block:not(:last-child) {
  width: 31.58%;
  margin: 0 0 2.63% 0;
}

.offers__block:last-child {
  width: 100%;
}

.offers__women {
  background: url(../img/bg_for.png), url(../img/for_women.jpg);
  background-size: cover;
}

.offers__women:hover {
  -webkit-transform: scale(1.2) translate(0px, -20px);
          transform: scale(1.2) translate(0px, -20px);
  -webkit-transition: 0.7s;
  transition: 0.7s;
}

.offers__men {
  background: url(../img/bg_for.png), url(../img/for_men.jpg);
  background-size: cover;
}

.offers__men:hover {
  -webkit-transform: scale(1.2) translate(0px, -20px);
          transform: scale(1.2) translate(0px, -20px);
  -webkit-transition: 0.7s;
  transition: 0.7s;
}

.offers__kids {
  background: url(../img/bg_for.png), url(../img/for_kids.jpg);
  background-size: cover;
}

.offers__kids:hover {
  -webkit-transform: scale(1.2) translate(0px, -20px);
          transform: scale(1.2) translate(0px, -20px);
  -webkit-transition: 0.7s;
  transition: 0.7s;
}

.offers__accesories {
  background: url(../img/bg_acces.png), url(../img/accesories.jpg);
  background-size: cover;
}

.offers__accesories:hover {
  -webkit-transform: scale(1.1) translate(0px, 20px);
          transform: scale(1.1) translate(0px, 20px);
  -webkit-transition: 0.7s;
  transition: 0.7s;
}

.content h2 {
  text-align: center;
  font-style: normal;
  font-weight: normal;
  font-size: 30px;
  line-height: 36px;
}

.content > p {
  font-size: 14px;
  line-height: 17px;
  color: #9F9F9F;
  margin: 6px auto 18px;
  text-align: center;
}

.cards {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.cards__button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 100%;
  margin: 48px 0 95px 0;
}

.cards .button {
  border: 1px solid #FF6A6A;
  text-decoration: none;
  padding: 15px 37px 15px 39px;
  font-size: 16px;
  line-height: 15px;
  color: #F26376;
  display: inline-block;
}

.cards .button:hover {
  background: #F16D7F;
  color: #FFFFFF;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.card {
  margin: 30px 0 0 0;
  background: #F8F8F8;
  text-decoration: none;
  width: 360px;
  position: relative;
}

.card a {
  text-decoration: none;
}

.card:hover {
  -webkit-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.16);
          box-shadow: 0 5px 8px rgba(0, 0, 0, 0.16);
  -webkit-transition: -webkit-box-shadow 0.2s;
  transition: -webkit-box-shadow 0.2s;
  transition: box-shadow 0.2s;
  transition: box-shadow 0.2s, -webkit-box-shadow 0.2s;
}

.card:hover .card__img {
  -webkit-filter: brightness(50%);
          filter: brightness(50%);
  -webkit-transition: -webkit-filter 0.2s;
  transition: -webkit-filter 0.2s;
  transition: filter 0.2s;
  transition: filter 0.2s, -webkit-filter 0.2s;
}

.card:hover .card-add {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.card__text h4 {
  padding: 20px 0 0 18px;
  font-size: 13px;
  line-height: 18px;
  color: #000000;
  display: inline-block;
  text-transform: uppercase;
}

.card__text p {
  padding: 12px 24px 0 18px;
  text-align: left;
  font-style: normal;
  font-weight: 300;
  font-size: 14px;
  line-height: 17px;
  color: #5D5D5D;
}

.card__text .price {
  font-size: 16px;
  line-height: 19px;
  color: #F16D7F;
  text-align: left;
  padding: 18px 0 20px 18px;
}

.card .card-add {
  display: none;
  position: absolute;
  top: 200px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 100%;
}

.card .card-add__cart {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 8px;
  border: 1px solid #FFFFFF;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.card .card-add__cart:hover {
  -webkit-box-shadow: 0 0 8px #FFFFFF;
          box-shadow: 0 0 8px #FFFFFF;
  -webkit-transition: -webkit-box-shadow 0.2s;
  transition: -webkit-box-shadow 0.2s;
  transition: box-shadow 0.2s;
  transition: box-shadow 0.2s, -webkit-box-shadow 0.2s;
}

.card .card-add p {
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #FFFFFF;
  margin: 0 0 0 10px;
}

.card .card-add .cart_icon {
  color: #fff;
  font-size: 26px;
}

.privileges {
  background: #222224;
}

.privileges__info {
  height: 341px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.privileges__offer {
  width: 360px;
  height: 134px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-animation: wobble 5s ease 0s infinite normal backwards;
          animation: wobble 5s ease 0s infinite normal backwards;
}

.privileges__offer h3 {
  font-size: 19.96px;
  line-height: 24px;
  font-weight: normal;
  color: #FBFBFB;
}

.privileges__offer p {
  font-weight: 300;
  font-size: 13.972px;
  line-height: 17px;
  color: #FBFBFB;
  text-align: center;
}

.filters {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 51px auto 0;
}

.filters__left {
  position: absolute;
  margin: 0 0 0 17px;
  z-index: 1;
}

.filters__left .filter {
  cursor: pointer;
}

.filters__left .filter summary {
  list-style: none;
  text-transform: uppercase;
}

.filters__left .filter[open] {
  padding: 20px 15px 9px 17px;
  margin: -20px 0 0 -17px;
  -webkit-box-shadow: 0px 0px 15px 4px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 15px 4px rgba(0, 0, 0, 0.1);
  background: #fff;
}

.filters__left .filter[open] > summary {
  color: #EF5B70;
}

.filters__left .filter[open] .filter__svg {
  fill: #EF5B70;
}

.filters__left .filter__main__title {
  font-style: normal;
  font-weight: 600;
  font-size: 14px;
  line-height: 17px;
  color: #000000;
}

.filters__left .filter__svg {
  margin: 0 0 0 11px;
  fill: #000;
}

.filters__left .filter__class[open] > summary {
  color: #EF5B70;
}

.filters__left .filter__title {
  border-left: 5px solid #EF5B70;
  font-style: normal;
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #6F6E6E;
  padding: 11px;
  border-bottom: 1px solid #EBEBEB;
  margin: 16px 0 0 0;
  width: 328px;
}

.filters__left .filter__list {
  list-style-type: none;
  margin: 24px 0 24px 0;
}

.filters__left .filter__list li {
  margin: 0 0 11px 15px;
}

.filters__left .filter__list li > a {
  text-decoration: none;
  font-style: normal;
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #6F6E6E;
}

.filters__left .filter__list li > a:hover {
  color: #EF5B70;
}

.filters__right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
}

.features {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 0 14px 20px 14px;
  position: relative;
  background: none;
  border: none;
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #6F6E6E;
  cursor: pointer;
  text-transform: uppercase;
}

.features_icon {
  margin: 0 0 0 10px;
}

.features_hov:hover .features__checkbox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  background: #fff;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.features_hov-pink:hover {
  color: #EF5B70;
}

.features__checkbox {
  position: absolute;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  top: 25px;
  left: 5px;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  padding: 7px 30px 5px 9px;
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  color: #6F6E6E;
  -webkit-box-shadow: 0px 0px 15px 4px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 15px 4px rgba(0, 0, 0, 0.1);
  display: none;
  z-index: 1;
  text-transform: uppercase;
}

.features__checkbox input {
  margin: 0 10px 6px 0;
}

.pagination {
  margin: 48px auto 96px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border: 1px solid #EBEBEB;
  border-radius: 3px;
  padding: 12px 16px 12px 16px;
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
}

.pagination li {
  list-style-type: none;
  display: inline;
}

.pagination li:not(:last-child) {
  margin: 0 15px 0 0;
}

.pagination li a {
  text-decoration: none;
  font-style: normal;
  font-weight: 300;
  font-size: 16px;
  line-height: 19px;
  color: #C4C4C4;
}

.pagination li a.active {
  color: #EF5B70;
}

.pagination li > a:hover {
  color: #EF5B70;
}

.pagination__icon {
  color: #000000;
}

.pagination__icon:hover {
  color: #EF5B70;
}

.product__img {
  background: url(../img/bg_for_PH.jpg);
  background-size: cover;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 11px 0 42px 0;
}

.product__img-img img {
  width: 100%;
  height: 100%;
}

.product__img__button {
  background: url(../img/bg_iconofy.png);
  width: 47px;
  height: 47px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  cursor: pointer;
  border: none;
}

.product__img__button .pib__icon {
  font-size: 31px;
}

.product__img__button:hover .pib__icon {
  color: #F16D7F;
}

.product__info {
  border: 1px solid #EAEAEA;
  margin-top: -65px;
  padding: 65px 0 64px 0;
  background: #FFFFFF;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.product__info__h {
  font-weight: 300;
  font-size: 14px;
  line-height: 17px;
  color: #F16D7F;
  text-transform: uppercase;
}

.product__info h3 {
  font-weight: 300;
  font-size: 18px;
  line-height: 22px;
  color: #4D4D4D;
  text-transform: uppercase;
}

.product__info > span {
  width: 63px;
  height: 3px;
  background-color: #EF5B70;
  margin: 12px 0;
}

.product__info__text {
  max-width: 555px;
  margin: 48px 0 32px 0;
  font-weight: 300;
  font-size: 14px;
  line-height: 17px;
  text-align: center;
  color: #5E5E5E;
}

.product__info__price {
  font-weight: 300;
  font-size: 24px;
  line-height: 29px;
  color: #EF5B70;
}

.product__info hr {
  width: 642px;
  margin: 64px 0;
}

.product__info__features {
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #6F6E6E;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.product__info__button {
  cursor: pointer;
  margin: 48px 0 0 0;
  padding: 14px 57px 9px 24px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: none;
  border: 1px solid #FF6A6A;
}

.product__info__button .pib__icon {
  font-size: 24px;
}

.product__info__button:hover {
  background: #FF6A6A;
  -webkit-transition: background 0.2s;
  transition: background 0.2s;
}

.product__info__button:hover .pib__text {
  color: #FFFFFF;
}

.product__info__button:hover .pib__icon {
  color: #FFFFFF;
}

.product__info__button .pib__icon {
  color: #F26376;
}

.product__info__button .pib__text {
  margin: 0 0 0 23px;
  font-weight: normal;
  font-size: 16px;
  line-height: 19px;
  color: #F26376;
}

.products__bottom {
  padding: 98px 0 128px 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.registration {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 64px auto 96px;
}

.reg__input {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
}

.reg__input .reg__submit {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 16px 29px 16px 29px;
  font-style: normal;
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #FFFFFF;
  cursor: pointer;
  background: #F16D7F;
  border: none;
  text-transform: uppercase;
}

.reg__input .reg__submit:hover {
  background: #E05C6E;
  -webkit-transition: background 0.2s;
  transition: background 0.2s;
}

.reg__input .reg__submit:focus {
  outline: none;
  background: #E05C6E;
}

.reg__input .reg__submit .icon__submit {
  margin: 0 0 0 20px;
}

.reg__input .reg__form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.reg__input .reg__form h4 {
  font-weight: 300;
  font-size: 16px;
  line-height: 19px;
  color: #222222;
  margin: 0 0 20px 0;
}

.reg__input .reg__form .input__name,
.reg__input .reg__form .input__mail {
  margin: 0 0 20px 0;
  width: 360px;
  height: 45px;
  border: 1px solid #A4A4A4;
  padding: 0 17px 0 17px;
}

.reg__input .reg__form .input__name:focus::-webkit-input-placeholder,
.reg__input .reg__form .input__mail:focus::-webkit-input-placeholder {
  visibility: hidden;
}

.reg__input .reg__form .input__name:focus:-ms-input-placeholder,
.reg__input .reg__form .input__mail:focus:-ms-input-placeholder {
  visibility: hidden;
}

.reg__input .reg__form .input__name:focus::-ms-input-placeholder,
.reg__input .reg__form .input__mail:focus::-ms-input-placeholder {
  visibility: hidden;
}

.reg__input .reg__form .input__name:focus::placeholder,
.reg__input .reg__form .input__mail:focus::placeholder {
  visibility: hidden;
}

.reg__input .reg__form .input__last,
.reg__input .reg__form .input__pass {
  width: 360px;
  height: 45px;
  border: 1px solid #A4A4A4;
  padding: 0 17px 0 17px;
}

.reg__input .reg__form .input__last:focus::-webkit-input-placeholder,
.reg__input .reg__form .input__pass:focus::-webkit-input-placeholder {
  visibility: hidden;
}

.reg__input .reg__form .input__last:focus:-ms-input-placeholder,
.reg__input .reg__form .input__pass:focus:-ms-input-placeholder {
  visibility: hidden;
}

.reg__input .reg__form .input__last:focus::-ms-input-placeholder,
.reg__input .reg__form .input__pass:focus::-ms-input-placeholder {
  visibility: hidden;
}

.reg__input .reg__form .input__last:focus::placeholder,
.reg__input .reg__form .input__pass:focus::placeholder {
  visibility: hidden;
}

.reg__input .reg__form .check__gender {
  margin: 31px 0 31px 0;
}

.reg__input .reg__form .check__label {
  margin: 0 20px 0 10px;
  font-style: normal;
  font-weight: 300;
  font-size: 14px;
  line-height: 13px;
  color: #000000;
}

.reg__input .reg__form p {
  margin: 15px 0 39px 0;
  max-width: 360px;
  font-style: normal;
  font-weight: 300;
  font-size: 13px;
  line-height: 16px;
  color: #B1B1B1;
}

.reg__info {
  max-width: 652px;
  margin: 0 0 0 22px;
}

.reg__info h2 {
  font-style: normal;
  font-weight: 300;
  font-size: 24px;
  line-height: 29px;
  color: #000000;
  margin: 0 0 22px 0;
  text-transform: uppercase;
}

.reg__info p {
  font-style: normal;
  font-weight: 300;
  font-size: 24px;
  line-height: 29px;
  color: #000000;
  margin: 0 0 16px 0;
}

.reg__info p:first-of-type {
  margin: 0 0 21px 0;
}

.reg__info .icon__text {
  font-size: 18px;
  margin: 0 22px 0 0;
}

.shopping {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.shop__cart {
  margin: 96px 0 128px;
}

.shop__cart-button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.shop__cart-button button,
.shop__cart-button a {
  padding: 17px 40px 17px 40px;
  border: 1px solid #A4A4A4;
  background: none;
  text-transform: uppercase;
  font-style: normal;
  font-size: 14px;
  line-height: 17px;
  color: #000000;
  cursor: pointer;
}

.shop__cart-button button:hover,
.shop__cart-button a:hover {
  color: #fff;
  background: #F16D7F;
  border: 1px solid #F16D7F;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.shop__cart-button a {
  text-decoration: none;
}

.cart__card {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 0 0 40px 0;
  -webkit-box-shadow: 17px 19px 24px rgba(0, 0, 0, 0.13);
          box-shadow: 17px 19px 24px rgba(0, 0, 0, 0.13);
}

.cart__card a {
  display: contents;
}

.cart__card:last-of-type {
  margin: 0 0 72px 0;
}

.cart__card-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding: 22px 97px 62px 31px;
  position: relative;
}

.cart__card-text h3 {
  text-transform: uppercase;
  font-style: normal;
  font-weight: normal;
  font-size: 24px;
  line-height: 29px;
  color: #222222;
  margin: 0 0 42px 0;
}

.cart__card-text > span {
  margin: 0 0 6px 0;
  font-style: normal;
  font-weight: normal;
  font-size: 22px;
  line-height: 26px;
  color: #575757;
}

.cart__card-icon {
  font-size: 30px;
  position: absolute;
  right: 22px;
}

.cart__card .quantity {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.cart__card .quantity__input {
  border: 1px solid #EAEAEA;
  width: 44px;
  height: 25px;
  margin: 0 0 0 24px;
  text-align: center;
}

.cart__card .quantity__input::-webkit-inner-spin-button,
.cart__card .quantity__input ::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.cart__card .quantity__input:focus::-webkit-input-placeholder {
  color: transparent;
}

.cart__card .quantity__input:focus:-ms-input-placeholder {
  color: transparent;
}

.cart__card .quantity__input:focus::-ms-input-placeholder {
  color: transparent;
}

.cart__card .quantity__input:focus::placeholder {
  color: transparent;
}

.shop__forms {
  margin: 113px 0 0 0;
}

.ship__form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  margin: 0 0 57px 0;
}

.ship__form button {
  background: none;
  text-transform: uppercase;
  border: 1px solid #A4A4A4;
  padding: 11px 14px 11px 14px;
  font-style: normal;
  font-weight: 300;
  font-size: 11px;
  line-height: 13px;
  color: #4A4A4A;
  cursor: pointer;
}

.ship__form button:hover {
  color: #fff;
  background: #F16D7F;
  border: 1px solid #F16D7F;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.ship__form h4 {
  font-style: normal;
  font-weight: 300;
  font-size: 16px;
  line-height: 19px;
  text-transform: uppercase;
  color: #222222;
  margin: 0 0 20px 0;
}

.ship__form input {
  width: 360px;
  height: 45px;
  border: 1px solid #A4A4A4;
  padding: 0 17px 0 17px;
  margin: 0 0 20px 0;
}

.ship__form input:focus::-webkit-input-placeholder {
  visibility: hidden;
}

.ship__form input:focus:-ms-input-placeholder {
  visibility: hidden;
}

.ship__form input:focus::-ms-input-placeholder {
  visibility: hidden;
}

.ship__form input:focus::placeholder {
  visibility: hidden;
}

.ship__form input [type=number]::-webkit-inner-spin-button,
.ship__form input [type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.check__form {
  background: #E2E2E2;
  padding: 39px 43px 42px 43px;
  text-align: right;
}

.check__form button {
  padding: 16px 42px 16px 42px;
  text-transform: uppercase;
  font-style: normal;
  font-weight: 300;
  font-size: 16px;
  line-height: 19px;
  color: #FFFFFF;
  background: #F16D7F;
  border: none;
  cursor: pointer;
}

.check__form button:hover {
  background: #E05C6E;
  -webkit-transition: background 0.2s;
  transition: background 0.2s;
}

.check__form hr {
  color: #E2E2E2;
  margin: 21px 0 21px 0;
}

.check__form h6 {
  font-style: normal;
  font-weight: normal;
  font-size: 11px;
  line-height: 13px;
  color: #4A4A4A;
  text-transform: uppercase;
  margin: 0 0 12px 0;
}

.check__form h6 > span {
  margin: 0 0 0 25px;
}

.check__form h4 {
  font-style: normal;
  font-weight: 300;
  font-size: 16px;
  line-height: 19px;
  color: #222222;
  text-transform: uppercase;
}

.check__form h4 > span {
  margin: 0 0 0 25px;
  color: #F16D7F;
  font-weight: bold;
}

.footer {
  -ms-flex-negative: 0;
      flex-shrink: 0;
}

.footer .subscribe {
  /* height             : 448px; */
  background: url(../img/bg_footer.png), url(../img/footer.jpg);
  background-repeat: no-repeat;
  background-position: bottom;
  background-size: cover;
  padding: 5% 0 8.2% 0;
}

.footer .subscribe__feedback {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
}

.footer .subscribe__feedback__info {
  width: 360px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.footer .subscribe__feedback__info p {
  padding: 30px 0 0 0;
  text-align: center;
  font-style: normal;
  font-weight: normal;
  font-size: 20px;
  line-height: 24px;
}

.footer .subscribe__form {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  padding: 58px 0 0 0;
}

.footer .subscribe__form h4 {
  font-weight: bold;
  font-size: 24px;
  line-height: 32px;
  text-align: center;
  text-transform: uppercase;
}

.footer .subscribe__form h6 {
  font-weight: normal;
  font-size: 18px;
  line-height: 30px;
  text-align: center;
  text-transform: uppercase;
}

.footer .subscribe__form .input__submit {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin: 26px 0 0 0;
  height: 49px;
}

.footer .subscribe__form .input__submit .mail__input {
  padding: 0 20px 0 20px;
  width: 256px;
  height: 49px;
  background: #E1E1E1;
  border: none;
  border-radius: 25px 0 0 25px;
}

.footer .subscribe__form .input__submit .mail__input::-webkit-input-placeholder {
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #222224;
  opacity: 0.67;
}

.footer .subscribe__form .input__submit .mail__input:-ms-input-placeholder {
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #222224;
  opacity: 0.67;
}

.footer .subscribe__form .input__submit .mail__input::-ms-input-placeholder {
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #222224;
  opacity: 0.67;
}

.footer .subscribe__form .input__submit .mail__input::placeholder {
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
  color: #222224;
  opacity: 0.67;
}

.footer .subscribe__form .input__submit .mail__input:focus::-webkit-input-placeholder {
  visibility: hidden;
}

.footer .subscribe__form .input__submit .mail__input:focus:-ms-input-placeholder {
  visibility: hidden;
}

.footer .subscribe__form .input__submit .mail__input:focus::-ms-input-placeholder {
  visibility: hidden;
}

.footer .subscribe__form .input__submit .mail__input:focus::placeholder {
  visibility: hidden;
}

.footer .subscribe__form .input__submit .mail__input:target {
  outline: none;
}

.footer .subscribe__form .input__submit .mail__input:focus {
  outline: none;
}

.footer .subscribe__form .input__submit .button__submit {
  cursor: pointer;
  width: 100px;
  background: #F16D7F;
  border: none;
  border-radius: 0 25px 25px 0;
  color: #FFFFFF;
  font-weight: normal;
  font-size: 14px;
  line-height: 17px;
}

.footer .subscribe__form .input__submit .button__submit:focus {
  outline: none;
  background: #E05C6E;
}

.footer .subscribe__form .input__submit .button__submit:hover {
  background: #E05C6E;
  -webkit-transition: background 0.2s;
  transition: background 0.2s;
}

.footer__center {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.footer .social {
  padding: 24px 0 23px 0;
  background: #222224;
}

.footer .social__links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.footer .social__container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.footer .social__container .copyright p {
  font-weight: normal;
  font-size: 17px;
  line-height: 19px;
  color: #FBFBFB;
}

.footer .social .iconify__social {
  color: #000;
  background-color: #fff;
  font-size: 32px;
}

.footer .social__links a {
  width: 32px;
  height: 32px;
}

.footer .social__links a:not(:last-child) {
  margin: 0 8px 0 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.footer .social__links a:hover .iconify__social {
  color: #fff;
  background-color: #F16D7F;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

@media (max-width: 936px) {
  .footer__center {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  .footer .subscribe {
    padding: 0;
  }
  .footer .subscribe__feedback__info {
    margin-top: 64px;
  }
  .footer .subscribe__form {
    padding: 0;
    margin: 48px 0 140px;
  }
  .footer .subscribe__feedback__info p {
    padding: 30px 0 27px 0;
  }
  .footer .social__container {
    padding: 0 32px;
  }
}

@media (max-width: 755px) {
  .footer .social__container {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  .copyright {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
    margin-top: 25px;
  }
  .footer .social {
    padding: 43px 0 24px 0;
  }
  .footer .subscribe__form {
    margin: 59px 0 110px;
  }
  .footer .subscribe__form .input__submit {
    margin: 22px 0 0 0;
  }
  .footer .subscribe__feedback__info p {
    font-size: 18px;
    line-height: 22px;
    padding: 30px 0 7px 0;
  }
  .footer .subscribe__feedback__info {
    width: 343px;
  }
  .footer .subscribe__form h6 {
    font-size: 14px;
    line-height: 21px;
  }
  .footer .subscribe__feedback__info img {
    width: 91px;
    height: 91px;
  }
}

@media (max-width: 1110px) {
  .cards {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .cards.card:nth-child(2n) {
    margin-left: 16px;
  }
  .cards.card {
    margin-top: 22px;
  }
  .cards.card:nth-child(9) {
    display: none;
  }
  .products__bottom article {
    margin: 30px 10px 0 10px;
  }
  .products__bottom article:last-child {
    display: none;
  }
  .products__bottom {
    -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
    padding: 98px 16px 128px 16px;
  }
}

@media (max-width: 1024px) {
  .shopping {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .shop__forms {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin: 64px 0 0 0;
  }
  .check__form {
    margin: 39px 0 147px 15px;
  }
  .shop__cart {
    margin: 59px 0 0 0;
  }
  .cart__card:last-of-type {
    margin: 0 0 62px 0;
  }
  .shop__cart-button {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .shop__cart-button button {
    margin: 0 48px 0 0;
  }
  .cart__card-text {
    padding: 22px 158px 56px 31px;
  }
}

@media (max-width: 936px) {
  .products__bottom article {
    margin: 30px 0;
  }
  .product__img {
    padding: 30px 0 29px 0;
  }
  .privileges__info {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    height: -webkit-fit-content;
    height: -moz-fit-content;
    height: fit-content;
  }
  .privileges__offer {
    margin-top: 48px;
  }
  .privileges__offer:last-of-type {
    margin-bottom: 64px;
  }
  .offers {
    margin: 35px auto 115px;
    padding: 0 16px;
  }
  .offers__women:hover {
    -webkit-transform: none;
            transform: none;
  }
  .offers__men:hover {
    -webkit-transform: none;
            transform: none;
  }
  .offers__kids:hover {
    -webkit-transform: none;
            transform: none;
  }
  .offers__accesories:hover {
    -webkit-transform: none;
            transform: none;
  }
  .privileges__offer {
    -webkit-animation: none;
            animation: none;
  }
  .intro__text h1 {
    font-size: 24px;
    line-height: 18px;
  }
  .intro__text__top {
    font-size: 44px;
    line-height: 53px;
  }
  .catalog__header,
  .product__header {
    padding: 0 16px;
  }
  .product__info {
    margin-top: 0;
  }
  .filters__right {
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
  }
  .filters__right.features {
    padding: 0 0 18px 14px;
  }
  .filters__right.features:last-child {
    padding: 0 0 20px 14px;
  }
  .filters__left {
    margin: 0;
  }
  .filters {
    padding: 0 16px;
    margin: 24px auto 0;
  }
  .pagination {
    margin: 40px auto 63px;
  }
  .reg__header,
  .cart__header {
    padding: 0 16px;
  }
  .reg__info h2 {
    font-size: 16px;
    line-height: 19px;
    margin: 0 0 32px 0;
  }
  .reg__info p {
    font-size: 16px;
    line-height: 19px;
  }
  .registration {
    padding: 0 16px;
  }
}

@media (max-width: 768px) {
  .intro__wrap {
    background-size: 24%;
    background-position-x: 110px;
  }
  .intro__wrap-height {
    padding: 49% 0 0 0;
  }
  .intro__text {
    margin-top: 18.5%;
  }
  .offers {
    margin: 20px 0 155px 0;
  }
  .offers__block-link {
    padding: 25.7% 0;
  }
  .offers__block-link-acces {
    padding: 4.65% 0;
  }
  .content > p {
    margin: 3px auto 56px;
  }
  .cards__button {
    margin: 32px 0 65px 0;
  }
  .card {
    margin-top: 16px;
  }
  .filters__right.features {
    padding: 0 0 24px 14px;
  }
  .products__bottom {
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }
}

@media (max-width: 755px) {
  .card:nth-child(2n) {
    margin-right: 16px;
  }
  .cards__button {
    margin: 40px 0 96px 0;
  }
  .content > p {
    margin: 3px auto 49px;
  }
  .products__bottom article.card {
    margin-right: 0;
  }
  .products__bottom {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .shop__forms {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  .check__form {
    margin: 39px 0 147px 0;
  }
  .registration {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .reg__info {
    margin: 40px 0 0 0;
  }
}

@media (max-width: 712px) {
  .intro__wrap {
    background: none;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .intro__text h1 {
    font-size: 20px;
    line-height: 24px;
  }
  .intro__text__top {
    font-size: 38px;
    line-height: 42px;
  }
  .intro__text {
    margin: 0 auto;
    width: 263px;
  }
}

@media (max-width: 668px) {
  .intro__wrap-height {
    padding: 363px 0 0 0;
  }
  .offers {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    margin: 64px 0;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .offers__block:not(:last-child) {
    width: 343px;
    height: 247px;
    margin-bottom: 32px;
  }
  .offers__block:last-child {
    width: 343px;
    height: 111px;
  }
  .catalog__header,
  .product__header {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
  }
  .summary__span {
    display: none;
  }
  .filters {
    padding: 0 8px;
  }
  .filters__left .filter__svg {
    width: 38px;
    height: 25px;
    margin: 0;
  }
  .products__bottom {
    padding: 48px 8px 64px 8px;
  }
  .products__bottom article.card {
    margin: 16px 0 0 0;
  }
  .product__info hr {
    width: 0;
    padding: 0 23.2%;
    margin: 32px 0 49px 0;
  }
  .product__info__text {
    padding: 0 16px;
    line-height: 20px;
  }
  .product__info__features button {
    font-size: 10px;
    line-height: 12px;
    padding: 0;
  }
  .product__info__features button:not(:last-of-type) {
    padding-right: 25px;
  }
  .product__info__button {
    margin: 64px 0 0 0;
  }
  .reg__header,
  .cart__header {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .cart__card-text h3 {
    font-size: 16px;
    line-height: 19px;
    margin: 0 0 26px 0;
  }
  .cart__card-text > span {
    font-size: 14px;
    line-height: 17px;
  }
  .cart__card-icon {
    font-size: 23px;
  }
  .cart__card a > img {
    width: 144px;
    height: 188px;
  }
  .cart__card {
    max-width: 358px;
  }
  .cart__card-text {
    padding: 13px 57px 11px 17px;
  }
  .cart__cards {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .shop__cart {
    margin: 39px 0 0 0;
  }
  .cart__card {
    margin: 0 0 32px 0;
  }
  .cart__card:last-of-type {
    margin: 0 0 30px 0;
  }
  .shop__cart-button button,
  .shop__cart-button a {
    font-size: 12px;
    line-height: 14px;
    padding: 9px 18px;
  }
  .shop__cart-button button {
    margin: 0 9px 0 0;
  }
  .shop__forms {
    margin: 48px 0 0 0;
  }
  .ship__form {
    margin: 0 0 48px 0;
  }
  .check__form {
    margin: 0 0 96px 0;
  }
  .check__form button {
    padding: 16px 37px 16px 37px;
  }
  .cart__card .quantity__input {
    width: 24px;
    height: 15px;
  }
  .registration {
    padding: 0 8px;
  }
}
</style>
</head>

<body>

    <header class="header">

        <div class="container header__wrap">
            <nav class="header__left">
                <a class="header__logo" href="index.html">
                    <img src="./img/logo.png" width="44" height="38" alt="logo">
                </a>
                <form class="search" action="#">
                    <button class="search__button" type="submit"><img src="./img/search.svg" width="26" height="27"
                            alt="search"></button>
                    <input class="search__input" type="text" placeholder="Search">
                </form>
            </nav>
            <nav class="header__right">
                <div class="header__item">
                    <div class="header__button">
                        <img src="./img/menu.svg" width="32" height="23" alt="menu">
                        <div class="header__menu">
                            <h4>MENU</h4>
                            <div class="header__menu__list">
                                <h4>MAN</h4>
                                <ul class="menu__list">
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Denim</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                </ul>
                            </div>
                            <div class="header__menu__list">
                                <h4>WOMAN</h4>
                                <ul class="menu__list">
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Jackets & Coats</a></li>
                                    <li><a href="#">Polos</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">Shirts</a></li>
                                </ul>
                            </div>
                            <div class="header__menu__list">
                                <h4>KIDS</h4>
                                <ul class="menu__list">
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Jackets & Coats</a></li>
                                    <li><a href="#">Polos</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">Shirts</a></li>
                                    <li><a href="#">Bags</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__item">
                    <a href="registration.html"><img src="./img/user.svg" width="29" height="29" alt="user"></a>
                </div>
                <div class="header__item">
                    <a href="#"><img src="./img/basket.svg" width="32" height="29" alt="basket"></a>
                </div>
            </nav>
        </div>

    </header>

    <header class="cart">
        <div class="container cart__header">
            <h1>shopping cart</h1>
        </div>
    </header>

    <main>

        <div class="container shopping">
            <section class="shop__cart">
                <form action="#">
                    <div class="cart__cards">
                        <article class="cart__card">
                            <a href="product.html"><img src="./img/cart_card1.jpg" alt="cart_card1"></a>
                            <div class="cart__card-text">
                                <span class="iconify cart__card-icon" data-inline="false" data-icon="bi:x"></span>
                                <h3>mango people t-&nbsp;shirt</h3>
                                <span>Price: <span class="intro__text__decor">$300</span></span>
                                <span>Color: Red</span>
                                <span>Size: XL</span>
                                <span class="quantity">Quantity: <input class="quantity__input" type="number"
                                        placeholder="1"></span>
                            </div>
                        </article>
                        <article class="cart__card">
                            <a href="product.html"><img src="./img/cart_card2.jpg" alt="cart_card2"></a>
                            <div class="cart__card-text">
                                <span class="iconify cart__card-icon" data-inline="false" data-icon="bi:x"></span>
                                <h3>mango people t-&nbsp;shirt</h3>
                                <span>Price: <span class="intro__text__decor">$300</span></span>
                                <span>Color: Red</span>
                                <span>Size: XL</span>
                                <span class="quantity">Quantity: <input class="quantity__input" type="number"
                                        placeholder="1"></span>
                            </div>
                        </article>
                    </div>
                    <div class="shop__cart-button">
                        <button type="reset">clear shopping cart</button>
                        <a href="catalog.html">continue shopping</a>
                    </div>
                </form>
            </section>
            <section class="shop__forms">
                <form class="ship__form" action="#">
                    <h4>shipping adress</h4>
                    <input type="text" placeholder="Bangladesh" required>
                    <input type="text" placeholder="State" required>
                    <input type="number" placeholder="Postcode/ZIP" required>
                    <button type="submit">get a quote</button>
                </form>
                <form class="check__form" action="#">
                    <h6>sub total <span>$900</span></h6>
                    <h4>grand total <span>$900</span></h4>
                    <hr>
                    <button type="submit">proceed to checkout</button>
                </form>
            </section>
        </div>

    </main>

    <footer class="footer">

        <section class="subscribe">
            <div class="container footer__center">
                <div class="subscribe__feedback">
                    <div class="subscribe__feedback__info">
                        <img src="./img/footerphoto.png" width="96" height="96" alt="photo">
                        <p>“Vestibulum quis porttitor dui! Quisque viverra nunc mi,
                            <i>a pulvinar purus condimentum</i>“
                        </p>
                    </div>
                </div>
                <div class="subscribe__form">
                    <form action="#">
                        <h4>subscribe</h4>
                        <h6>for our newletter and promotion</h6>
                        <div class="input__submit">
                            <input class="mail__input" type="email" placeholder="Enter Your Email" required>
                            <button class="button__submit" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="social">
            <div class="container social__container">
                <div class="copyright">
                    <p>&copy; 2021 Brand All Rights Reserved.</p>
                </div>
                <div class="social__links">
                    <a href="#"><span class="iconify iconify__social" data-inline="false"
                            data-icon="ei:sc-facebook"></span></a>
                    <a href="#"><span class="iconify iconify__social" data-inline="false"
                            data-icon="ei:sc-instagram"></span></a>
                    <a href="#"><span class="iconify iconify__social" data-inline="false"
                            data-icon="typcn:social-pinterest"></span></a>
                    <a href="#"><span class="iconify iconify__social" data-inline="false"
                            data-icon="ei:sc-twitter"></span></a>
                </div>
            </div>
        </section>

    </footer>

</body>

</html>