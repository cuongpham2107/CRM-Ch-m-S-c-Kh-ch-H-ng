@extends('admin::layouts.master')

@section('page_title')
  {{ __('Hướng dẫn') }}
@stop

{{-- @push('css')
  <style>
    body {
      font-family: Roboto;
      margin: 0 !important;
      line-height: normal;
      font-weight: 400
    }

    html {
      scroll-behavior: smooth
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-weight: 700;
      color: #263238
    }

    h1 {
      font-size: 50px
    }

    h2 {
      font-size: 40px
    }

    h3 {
      font-size: 24px
    }

    h4 {
      font-size: 22px
    }

    h5 {
      font-size: 20px
    }

    h6 {
      font-size: 18px
    }

    ol,
    p,
    ul {
      color: #263238;
      font-weight: 400
    }

    img {
      max-width: 100% !important;
      height: 100%
    }

    .wkgrid-fluid {
      max-width: 100%;
      padding: 0 30px;
      margin: 0 auto
    }

    .krgrid-squeezy {
      max-width: 760px;
      padding: 0 30px;
      margin: 0 auto
    }

    .krgrid-squeezy:before {
      content: "";
      display: table
    }

    .krgrid-wide {
      max-width: 1220px;
      padding: 0 30px;
      margin: 0 auto
    }

    .krgrid-wide::before {
      content: "";
      display: table
    }

    .krgrid-wide::after {
      content: "";
      display: table;
      clear: both
    }

    .kr-section-padding {
      padding: 80px 0 0 0
    }

    .kr-button {
      transition: .25s all;
      font-weight: 700;
      min-width: 100px;
      text-align: center;
      color: #fff;
      border-radius: 4px;
      padding: 12px 20px;
      font-size: 15px;
      display: inline-block;
      vertical-align: middle;
      margin: 15px 0;
      text-decoration: none;
      border: none
    }

    .kr-button2 {
      transition: .2s ease-in-out;
      font-weight: 700;
      min-width: 100px;
      text-align: center;
      color: #fff;
      border-radius: 35px;
      padding: 12px 20px;
      font-size: 15px;
      display: inline-block;
      vertical-align: middle;
      margin: 15px 0;
      text-decoration: none
    }

    .kr-button2:hover {
      color: #0e90d9 !important
    }

    .kr-primary-btn {
      background-color: #0e90d9
    }

    .kr-primary-btn:hover {
      opacity: .7
    }

    .kr-dark-btn {
      background-color: #263238
    }

    .kr-dark-btn:hover {
      opacity: .7
    }

    .btn-moon {
      padding: 12px 35px;
      border: 2px solid #263238;
      background: #fff;
      color: #263238
    }

    .btn-moon:hover {
      background: #edf0f8
    }

    .btn-ghost {
      background: 0 0;
      border: 2px solid #fff;
      padding: 12px 35px;
      margin-left: 22px
    }

    .kr-btn-large {
      min-width: 215px;
      font-size: 24px;
      padding: 15px 0
    }

    .kr-heading {
      margin-bottom: 40px
    }

    .kr-heading h2 {
      margin: 0
    }

    .kr-heading p {
      margin-top: 12px;
      font-size: 18px;
      line-height: 30px
    }

    .text-center {
      text-align: center
    }

    .transparent {
      opacity: 0 !important;
      visibility: hidden
    }

    .overflow-hide {
      overflow: hidden !important
    }

    .kr-arrow-support {
      display: block;
      font-weight: 600;
      font-size: 16px;
      cursor: pointer;
      text-align: center;
      margin: 0 auto
    }

    .kr-arrow-support::after {
      content: '';
      display: inline-block;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      width: 22px;
      height: 17px;
      margin-left: 10px;
      vertical-align: bottom;
      background-position: -256px -43px;
      cursor: pointer;
      transition: .35s cubic-bezier(.39, .58, .57, 1)
    }

    .dir-rtl {
      direction: rtl;
      text-align: left
    }

    .inline-tag-divider {
      width: 51% !important;
      display: inline-block;
      vertical-align: middle
    }

    .divider-r-padding {
      padding-right: 40px
    }

    .divider-l-padding {
      padding-left: 40px
    }

    .inline-divider-img {
      width: 44.3%;
      display: inline-block;
      vertical-align: middle
    }

    .inline-divider-img img {
      max-width: 100%;
      height: auto
    }

    .dir-ltr {
      direction: ltr
    }

    .kr-copy-to-clipboard {
      display: block;
      width: 20px;
      height: 20px;
      float: right;
      cursor: pointer;
      position: relative;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      background-position: -134px -90px
    }

    pre {
      background-color: #f6f8fa;
      border-radius: 6px;
      font-size: 85%;
      line-height: 1.45;
      overflow: auto;
      padding: 16px;
      position: relative;
      min-height: 23px;
      margin: 11px 0 49px 0
    }

    pre p {
      margin: 0 !important;
      font-size: 16px !important;
      display: inline-block !important
    }

    .kr-tooltip::before {
      content: "Copied";
      position: absolute;
      left: -55px;
      width: 39px;
      height: 17px;
      background-color: rgba(0, 0, 0, .72);
      border-radius: 5px;
      border-left: 3px solid transparent;
      color: #fff;
      padding: 3px
    }

    .hue-default {
      background-image: linear-gradient(135deg, #40bdf4 20%, #1e88e5 70%)
    }

    .hue-articles {
      background-image: linear-gradient(135deg, #40bdf4 20%, #1e88e5 70%)
    }

    .hue-docs {
      background-image: linear-gradient(135deg, #fad7a1 20%, #e96d71 70%)
    }

    .kr-404 {
      text-align: center;
      margin-top: 50px
    }

    .kr-404 p {
      color: #64687a;
      font-size: 24px
    }

    .kr-pattern-main {
      background: url(images/bg.png);
      display: block;
      min-height: 84px;
      width: 100%;
      background-position: 0 0;
      animation: MOVE-BG 120s linear infinite
    }

    .webkul-contact-india {
      display: block;
      margin: 10px 0 9px 0;
      font-size: 16px;
      line-height: 30px;
      color: #263238;
      text-decoration: none
    }

    .webkul-contact-india::before {
      content: "";
      display: inline-block;
      width: 28px;
      height: 19px;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      background-position: 0 -92px;
      vertical-align: middle;
      margin-right: 8px
    }

    .webkul-contact-usa {
      display: block;
      font-size: 16px;
      color: #263238;
      line-height: 30px;
      text-decoration: none
    }

    .webkul-contact-usa::before {
      content: "";
      display: inline-block;
      width: 28px;
      height: 19px;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      background-position: -31px -92px;
      vertical-align: middle;
      margin-right: 4px
    }

    header.navigation-menu {
      padding: 9.5px 0 9.5px 0;
      box-shadow: 0 0 8px 2px rgba(0, 0, 0, .16);
      position: sticky;
      width: 100%;
      top: 0;
      background-color: #fff;
      z-index: 100
    }

    header.navigation-menu #kr-logo {
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-position: 0 5px;
      display: inline-block;
      width: 171px;
      height: 45px;
      background-repeat: no-repeat;
      margin-right: 25px;
      position: relative;
      z-index: 120
    }

    header.navigation-menu .kr-main-navigation {
      display: inline-block;
      vertical-align: top;
      position: absolute;
      width: 100%;
      left: 0
    }

    header.navigation-menu .kr-main-navigation>div>ul {
      position: relative;
      display: inline-block;
      padding: 0;
      margin: 0;
      width: 100%;
      right: 187px
    }

    header.navigation-menu .kr-main-navigation>div>ul>li:last-child {
      margin-right: 0
    }

    header.navigation-menu .kr-main-navigation ul li {
      cursor: pointer;
      float: right;
      margin-right: 20px;
      margin-top: 5px;
      text-align: left;
      list-style: none;
      margin: 16px 0 12px 22px;
      text-decoration: none
    }

    header.navigation-menu .kr-main-navigation ul li a {
      color: #263238;
      font-size: 16px;
      font-weight: 500;
      transition: .25s all;
      text-decoration: none
    }

    header.navigation-menu .kr-main-navigation ul li a:hover {
      color: #0e90d9;
      text-decoration: none
    }

    header.navigation-menu .kr-sub-navigation {
      display: inline-block;
      vertical-align: bottom;
      margin-top: 25px;
      position: absolute;
      right: 30px;
      bottom: 24px
    }

    header.navigation-menu .kr-sub-navigation a {
      text-decoration: none
    }

    header.navigation-menu .kr-sub-navigation .kr-nav-download,
    header.navigation-menu .kr-sub-navigation .kr-nav-live-demo {
      cursor: pointer;
      font-weight: 700;
      color: #fff;
      font-size: 16px
    }

    header.navigation-menu .kr-sub-navigation .kr-nav-live-demo {
      background-color: #263238;
      padding: 10px 16px;
      border-radius: 4px;
      margin-right: 10px;
      transition: .25s
    }

    header.navigation-menu .kr-sub-navigation .kr-nav-live-demo:hover {
      opacity: .7
    }

    header.navigation-menu .kr-sub-navigation .kr-nav-download {
      background-color: #0e90d9;
      padding: 10px 16px;
      border-radius: 4px;
      transition: .25s all
    }

    header.navigation-menu .kr-sub-navigation .kr-nav-download:hover {
      opacity: .7
    }

    header.navigation-menu #kr-mobi-menu {
      display: none;
      float: right
    }

    header.navigation-menu #kr-mobi-menu ul {
      position: relative;
      z-index: 500
    }

    header.navigation-menu #kr-mobi-menu #kr-hamburger-toggler {
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      width: 26px;
      height: 20px;
      background-position: -59px -91px;
      cursor: pointer;
      margin: 15px 15px 27px 15px;
      transition: transform .2s ease
    }

    header.navigation-menu #kr-mobi-menu .mobi-nav-wrapper {
      box-shadow: inset rgba(119, 103, 103, .1) 0 0 0 0, inset rgba(0, 0, 0, .06) 0 5px 11px 0;
      display: none;
      padding: 0
    }

    header.navigation-menu #kr-mobi-menu .mobi-nav-wrapper .float-text,
    header.navigation-menu #kr-mobi-menu .mobi-nav-wrapper .link-back {
      opacity: 0;
      font-size: 18px;
      color: #0e90d9
    }

    header.navigation-menu #kr-mobi-menu .mobi-nav-wrapper #__parentMenuHolder {
      display: block;
      overflow: auto;
      margin-top: 0;
      padding-left: 0
    }

    header.navigation-menu #kr-mobi-menu .mobi-nav-wrapper #__parentMenuHolder li {
      display: block;
      margin: 10px 0
    }

    header.navigation-menu #kr-mobi-menu .mobi-nav-wrapper #__parentMenuHolder li a {
      display: block;
      color: #0e1b50;
      font-size: 16px;
      font-weight: 600;
      padding: 10px 0 18px 35px;
      border-bottom: 1px solid #ddd;
      text-decoration: none
    }

    header.navigation-menu #kr-mobi-menu.mobi-nav-active #kr-hamburger-toggler {
      background-position: -85px -90px;
      transform: rotateZ(90deg)
    }

    header.navigation-menu #kr-mobi-menu.mobi-nav-active .mobi-nav-wrapper {
      display: block;
      position: fixed;
      width: 100%;
      height: 100%;
      background: #fff;
      left: 0;
      top: 68px
    }

    header.navigation-menu #kr-mobi-menu template {
      display: none
    }

    .kr-mega-footer .kr-footer-wrapper .social-connect {
      display: inline-block;
      width: 212px;
      margin: 0 auto;
      float: right;
      position: relative;
      top: -14px
    }

    .kr-mega-footer .kr-footer-wrapper .social-connect .icons::before {
      content: "";
      width: 40px;
      height: 40px;
      display: inline-block;
      margin-right: 10px;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat
    }

    .kr-mega-footer .kr-footer-wrapper .social-connect .icons.fb::before {
      content: "";
      background-position: -171px 0
    }

    .kr-mega-footer .kr-footer-wrapper .social-connect .icons.twitter::before {
      content: "";
      background-position: -211px 0
    }

    .kr-mega-footer .kr-footer-wrapper .social-connect .icons.github::before {
      content: "";
      background-position: -251px 0
    }

    .kr-mega-footer .kr-footer-wrapper .social-connect .icons.youtube::before {
      content: "";
      background-position: -208px -116px
    }

    .kr-mega-footer .kr-footer-wrapper .kr-rating {
      display: inline-block
    }

    .kr-mega-footer .kr-footer-wrapper .kr-rating .rating-icons:before {
      content: "";
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat
    }

    .kr-mega-footer .kr-footer-wrapper .kr-rating .trustpilot {
      position: relative
    }

    .kr-mega-footer .kr-footer-wrapper .kr-rating .trustpilot:before {
      content: "";
      display: inline-block;
      background-position: 0 -168px;
      width: 209px;
      height: 77px
    }

    .kr-mega-footer .kr-footer-wrapper .kr-rating .trst-val {
      position: absolute;
      left: 4px;
      top: 52px;
      font-size: 19px;
      font-weight: 500
    }

    .kr-mega-footer .kr-pattern-footer {
      background: url(images/bg.png);
      display: block;
      min-height: 84px;
      width: 100%;
      background-position: 0 0;
      animation: MOVE-BG 120s linear infinite;
      margin: 46px 0 22px 0
    }

    .kr-mega-footer .footer-ent-content {
      text-align: center;
      font-size: 14px;
      line-height: 20px
    }

    .kr-hero-section {
      padding-top: 50px
    }

    .kr-hero-section .kr-tag-line {
      display: block;
      text-align: center;
      width: 100%
    }

    .kr-hero-section .kr-tag-line h1 {
      margin: 0
    }

    .kr-hero-section .kr-tag-line p {
      max-width: 590px;
      font-size: 24px;
      font-weight: 400;
      color: #263238;
      padding-top: 11px;
      margin: 0 auto
    }

    .kr-hero-section .kr-tag-line .kr-laravel-logo {
      display: block;
      margin: 0 auto;
      margin-top: 11px;
      width: 176px;
      height: 51px;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      background-position: 0 -39px
    }

    .kr-hero-section .kr-tag-line .kr-dark-btn {
      margin-left: 13px
    }

    .kr-hero-section .kr-tag-line a {
      font-size: 21px
    }

    .kr-lead-section {
      position: relative
    }

    .kr-lead-section .kr-krayin-crm {
      margin: 0 auto;
      display: block
    }

    .kr-lead-section .kr-pattern {
      background: url(images/bg.png);
      display: block;
      min-height: 84px;
      width: 100%;
      background-position: 0 0;
      position: absolute;
      left: 0;
      z-index: -1;
      bottom: 29%;
      transform: translate(0, -3%);
      animation: MOVE-BG 120s linear infinite
    }

    .kr-crm-setion .kr-crm-heading {
      text-align: left;
      max-width: 720px;
      padding-top: 48px
    }

    .kr-crm-setion .kr-section-grid {
      display: grid;
      justify-content: center;
      grid-template-columns: repeat(auto-fill, minmax(auto, 386px));
      grid-gap: 29px
    }

    .kr-crm-setion .kr-crm-brick .crm-brick-img .kr-crm-img {
      border: 1px solid #b0bec5;
      border-radius: 8px;
      width: 100%
    }

    .kr-crm-setion .kr-crm-brick .crm-brick-content h3 {
      color: #263238;
      margin: 20px 0 10px 0
    }

    .kr-crm-setion .kr-crm-brick .crm-brick-content p {
      font-size: 18px;
      color: #546e7a;
      font-weight: 400
    }

    #slide-carousel {
      font-size: 0
    }

    #slide-carousel .trns-left {
      animation-name: slideleft;
      animation-duration: 1s
    }

    #slide-carousel .trns-right {
      animation-name: slideright;
      animation-duration: 1s
    }

    #slide-carousel .kr-tabs {
      width: 52.8%;
      display: inline-block;
      vertical-align: top
    }

    #slide-carousel .kr-slider {
      width: 46.6%;
      display: inline-block;
      vertical-align: top
    }

    #slide-carousel .kr-tabs img {
      width: 96px;
      height: 90px;
      margin: 0 auto;
      display: block
    }

    #slide-carousel .kr-tabs .active {
      display: none
    }

    #slide-carousel .kr-tabs ul {
      font-size: 0;
      margin: 0;
      display: table;
      padding: 0
    }

    #slide-carousel .kr-tabs ul li {
      display: inline-block;
      width: 33.33%;
      vertical-align: top;
      margin: 0
    }

    #slide-carousel .kr-tabs ul li a {
      display: block;
      font-size: 18px;
      line-height: 26px;
      padding: 15px;
      border: 1px solid #d3d3d3;
      min-height: 163px;
      display: -webkit-box;
      display: -moz-box;
      -webkit-line-clamp: 4;
      -webkit-box-orient: vertical;
      -moz-line-clamp: 4;
      -moz-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
      text-align: center;
      cursor: pointer;
      color: #3a3a3a;
      border-radius: 8px;
      margin-top: 20px;
      margin-right: 20px
    }

    #slide-carousel .kr-tabs ul li a:hover {
      text-decoration: none;
      color: inherit
    }

    #slide-carousel .kr-tabs ul li a span:before {
      content: '';
      display: block;
      background-image: url(images/card-sprite.png);
      background-repeat: no-repeat;
      width: 96px;
      height: 90px;
      margin: auto
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item1] {
      margin-top: 0
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item1] span:before {
      background-position: 0 0
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item2] {
      margin-top: 0
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item2] span:before {
      background-position: -94px 0
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item3] {
      margin-top: 0
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item3] span:before {
      background-position: -193px 0
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item4] span:before {
      background-position: -288px 0
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item5] span:before {
      background-position: -382px 0
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item6] span:before {
      background-position: -481px 0
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item7] span:before {
      background-position: -575px 0
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item8] span:before {
      background-position: -672px 0
    }

    #slide-carousel .kr-tabs ul li a[data-attr=item9] span:before {
      background-position: -769px 0
    }

    #slide-carousel .kr-tabs ul li a.sld-active {
      color: #0e90d9;
      border: 2px solid #0e90d9;
      background-color: rgba(237, 240, 248, .5);
      padding: 14px 15px
    }

    #slide-carousel .kr-tabs ul li a.sld-active .active {
      display: block
    }

    #slide-carousel .kr-tabs ul li a.sld-active .inactive {
      display: none
    }

    #slide-carousel .kr-tabs ul li a.sld-active[data-attr=item1] span:before {
      background-position: 0 -96px
    }

    #slide-carousel .kr-tabs ul li a.sld-active[data-attr=item2] span:before {
      background-position: -94px -96px
    }

    #slide-carousel .kr-tabs ul li a.sld-active[data-attr=item3] span:before {
      background-position: -193px -96px
    }

    #slide-carousel .kr-tabs ul li a.sld-active[data-attr=item4] span:before {
      background-position: -288px -96px
    }

    #slide-carousel .kr-tabs ul li a.sld-active[data-attr=item5] span:before {
      background-position: -382px -96px
    }

    #slide-carousel .kr-tabs ul li a.sld-active[data-attr=item6] span:before {
      background-position: -481px -96px
    }

    #slide-carousel .kr-tabs ul li a.sld-active[data-attr=item7] span:before {
      background-position: -575px -96px
    }

    #slide-carousel .kr-tabs ul li a.sld-active[data-attr=item8] span:before {
      background-position: -672px -96px
    }

    #slide-carousel .kr-tabs ul li a.sld-active[data-attr=item9] span:before {
      background-position: -769px -96px
    }

    #slide-carousel .kr-slider {
      border: 1px solid #d3d3d3;
      min-height: 621px;
      position: relative;
      overflow: hidden;
      background-color: #f4f6fb;
      border-radius: 8px
    }

    #slide-carousel .kr-slider h3 {
      margin: 30px 0 0 0
    }

    #slide-carousel .kr-slider p {
      margin: 16px 0 13px 0;
      text-align: left;
      font-size: 18px;
      color: #263238;
      min-height: 108px;
      line-height: 30px
    }

    #slide-carousel .kr-slider img {
      max-width: 100%
    }

    #slide-carousel .kr-slider .kr-feature-text {
      padding-left: 30px;
      padding-right: 30px
    }

    #slide-carousel .kr-slider .slide-item {
      display: none;
      animation: slider .3s ease-in-out
    }

    #slide-carousel .kr-slider .sld-active {
      display: block
    }

    #slide-carousel .kr-slider .sellnavs {
      font-size: 18px;
      text-align: left;
      width: 90%;
      position: absolute;
      bottom: 30px;
      right: 28px;
      user-select: none
    }

    #slide-carousel .kr-slider .sellnavs a {
      cursor: pointer;
      display: inline-block
    }

    #slide-carousel .kr-slider .sellnavs a:hover {
      text-decoration: none
    }

    #slide-carousel .kr-slider .sellnavs .next-icon,
    #slide-carousel .kr-slider .sellnavs .prev-icon {
      display: inline-block;
      width: 37px;
      height: 37px;
      background-color: #fff;
      border-radius: 17px
    }

    #slide-carousel .kr-slider .sellnavs .next-icon::before {
      content: "";
      display: inline-block;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      width: 32px;
      height: 32px;
      background-position: -216px -42px
    }

    #slide-carousel .kr-slider .sellnavs .prev-icon::before {
      content: "";
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      display: inline-block;
      width: 32px;
      height: 32px;
      background-repeat: no-repeat;
      background-position: -179px -42px;
      margin: 0 15px 0 0
    }

    #slide-carousel .kr-slider .sellnavs .view-all-feature {
      display: none;
      float: right;
      padding-top: 8px;
      text-decoration: none;
      color: #0e90d9
    }

    #slide-carousel .kr-slider .sellnavs .view-all-feature:hover {
      text-decoration: underline
    }

    .kr-whycrm-section img {
      max-width: 100%
    }

    .kr-whycrm-section h2 {
      margin: 0 0 16px 0
    }

    .kr-whycrm-section .why-crm-para {
      display: inline-block;
      margin-bottom: 10px
    }

    .kr-whycrm-section .why-crm-para p {
      margin: 0;
      font-size: 18px;
      font-weight: 400;
      line-height: 30px
    }

    .kr-whycrm-section .why-crm-para li {
      line-height: 25px;
      font-size: 18px;
      color: #263238
    }

    .kr-installation .kr-cli-installer,
    .kr-installation .kr-gui-installer {
      display: inline-block;
      color: #263238;
      font-size: 18px;
      font-weight: 700;
      cursor: pointer
    }

    .kr-installation .ins-active {
      display: inline-block;
      background-color: #0e90d9;
      border-radius: 35px;
      color: #fff !important
    }

    .kr-installation .block-active {
      display: block !important
    }

    .kr-installation .kr-gui-istaller-section {
      display: none
    }

    .kr-installation .kr-gui-istaller-section .kr-gui-ins-content {
      border-bottom: 2px solid #b0bec5
    }

    .kr-installation .kr-gui-istaller-section .kr-gui-ins-content h3 {
      margin-bottom: 16px
    }

    .kr-installation .kr-gui-istaller-section .kr-gui-ins-content ol {
      padding-left: 16px
    }

    .kr-installation .kr-gui-istaller-section .kr-gui-ins-content ol .kr-ins-dwn a {
      cursor: pointer;
      margin: 11px 0 30px 0
    }

    .kr-installation .kr-gui-istaller-section .kr-gui-ins-content ol .kr-ins-dwn .kr-ins-dwn-btn {
      width: 150px;
      display: block;
      background-color: #0e90d9;
      font-size: 21.5px;
      font-weight: 700
    }

    .kr-installation .kr-gui-istaller-section .kr-gui-log-content p {
      font-size: 18px
    }

    .kr-installation .kr-gui-istaller-section .kr-gui-log-content .ins-log-desc {
      margin: 0
    }

    .kr-installation .kr-gui-istaller-section .kr-gui-log-content pre {
      margin: 11px 0 11px 37px
    }

    .kr-installation .kr-gui-istaller-section .kr-gui-log-content pre p {
      font-size: 16px
    }

    .kr-installation .kr-cli-installer-section {
      display: none;
      transition: .3s
    }

    .kr-installation .kr-cli-installer-section .kr-cli-ins-content {
      border-bottom: 2px solid #b0bec5
    }

    .kr-installation .kr-cli-installer-section .kr-cli-ins-content h3 {
      margin-bottom: 16px
    }

    .kr-installation .kr-cli-installer-section .kr-cli-ins-content pre {
      margin: 0 0 12px 25px
    }

    .kr-installation .kr-cli-installer-section .kr-cli-ins-content .on-local,
    .kr-installation .kr-cli-installer-section .kr-cli-ins-content .on-server {
      font-size: 18px;
      font-weight: 700;
      color: #263238
    }

    .kr-installation .kr-cli-installer-section .kr-cli-ins-content .on-server-content p {
      margin-left: 25px
    }

    .kr-installation .kr-gui-log-content pre {
      margin: 11px 0 11px 25px
    }

    .kr-company-behind-section img {
      max-width: 100%
    }

    .kr-company-behind-section h2 {
      margin: 0 0 16px 0
    }

    .kr-company-behind-section .company-behind-para {
      display: inline-block;
      transition: .3s;
      margin-bottom: 10px
    }

    .kr-company-behind-section .company-behind-para p {
      margin: 0;
      font-size: 18px;
      line-height: 30px
    }

    .kr-company-behind-section .company-behind-para li {
      font-size: 18px;
      line-height: 30px
    }

    .homepage-painted-info-section {
      position: relative;
      background-color: #292c36;
      min-height: 380px;
      border-radius: 24px;
      margin-top: 40px
    }

    .homepage-painted-info-section p {
      color: #fff;
      position: relative;
      z-index: 10;
      font-size: 18px;
      line-height: 30px;
      margin: 0;
      margin-bottom: 40px;
      padding: 0 15px
    }

    .homepage-painted-info-section h2 {
      margin-top: 76px;
      color: #fff;
      margin-bottom: 12px
    }

    .homepage-painted-info-section a {
      font-size: 16px
    }

    #contact-modal {
      position: fixed;
      top: 0;
      left: 0;
      background-color: rgba(0, 0, 0, .72);
      width: 100%;
      height: 100%;
      z-index: 100000;
      align-items: center;
      justify-content: center;
      grid-template-columns: minmax(30px, auto) auto minmax(30px, auto);
      grid-template-rows: minmax(30px, auto) minmax(84.636%, 650px) minmax(30px, auto);
      display: none
    }

    #contact-modal[modal=on] {
      display: grid
    }

    #contact-modal[modal=off] {
      display: none
    }

    #contact-modal .contact-modal-inner {
      display: grid;
      grid-template-columns: minmax(0, 380px) minmax(auto, 480px);
      border-radius: 16px;
      height: 100%;
      grid-column: 2;
      grid-row: 2;
      position: relative
    }

    #contact-modal .contact-modal-inner #modal-close {
      position: absolute;
      right: 20px;
      top: 15px;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      width: 26px;
      height: 20px;
      background-position: -85px -90px;
      cursor: pointer;
      z-index: 2
    }

    #contact-modal .contact-modal-inner .contact-modal-info {
      background-color: #f4f6fb;
      padding: 31px;
      border-radius: 16px 0 0 16px;
      display: grid;
      grid-gap: 30px;
      overflow-x: auto
    }

    #contact-modal .contact-modal-inner .contact-modal-info::-webkit-scrollbar {
      width: 4px;
      background-color: transparent
    }

    #contact-modal .contact-modal-inner .contact-modal-info::-webkit-scrollbar-thumb {
      background-color: rgba(200, 203, 200, .9);
      border-radius: 16px
    }

    #contact-modal .contact-modal-inner .contact-modal-info::-webkit-scrollbar-track {
      background-color: transparent
    }

    #contact-modal .contact-modal-inner .contact-modal-info .saying.kr-quote {
      margin-top: 25px;
      padding-left: 0
    }

    #contact-modal .contact-modal-inner .contact-modal-info .saying.kr-quote:before {
      content: '';
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      background-position: -149px -141px;
      width: 23px;
      height: 18px;
      display: inline-block;
      position: absolute;
      top: 32px;
      left: 28px
    }

    #contact-modal .contact-modal-inner .contact-modal-info .saying.kr-quote p {
      font-weight: 400;
      font-size: 16px;
      line-height: 22px;
      margin: 0;
      color: #64687a
    }

    #contact-modal .contact-modal-inner .contact-modal-info .saying .card {
      margin-top: 10px;
      display: grid;
      grid-template-columns: 56px 1fr;
      grid-gap: 15px;
      align-items: center
    }

    #contact-modal .contact-modal-inner .contact-modal-info .saying .card .profile-thumb {
      width: 56px;
      height: 56px;
      border-radius: 8px
    }

    #contact-modal .contact-modal-inner .contact-modal-info .saying .card .name {
      color: #263238;
      font-size: 14px;
      font-weight: 500
    }

    #contact-modal .contact-modal-inner .contact-modal-info .saying .card .tagline {
      font-weight: 400
    }

    #contact-modal .contact-modal-inner .contact-modal-info .talk-to-sales {
      display: grid;
      grid-gap: 20px;
      align-self: end
    }

    #contact-modal .contact-modal-inner .contact-modal-info .talk-to-sales span.h5 {
      font-size: 24px;
      font-weight: 800
    }

    #contact-modal .contact-modal-inner .contact-modal-info .talk-to-sales p {
      margin: 0
    }

    #contact-modal .contact-modal-inner .contact-modal-info .talk-to-sales .item .icon:before {
      content: '';
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      width: 29px;
      height: 26px;
      display: inline-block;
      vertical-align: middle;
      margin: 0 6px 2px 0
    }

    #contact-modal .contact-modal-inner .contact-modal-info .talk-to-sales .item .chatwhizz:before {
      background-position: -249px -123px
    }

    #contact-modal .contact-modal-inner .contact-modal-info .talk-to-sales .item .skype:before {
      background-position: -256px -93px;
      margin-right: -1px
    }

    #contact-modal .contact-modal-inner .contact-modal-info .talk-to-sales .item a {
      font-size: 16px;
      color: #263238;
      font-weight: 400;
      text-decoration: none
    }

    #contact-modal .contact-modal-inner .contact-modal-info .talk-to-sales .item a:hover {
      text-decoration: underline
    }

    #contact-modal .contact-modal-inner .contact-modal-form {
      background-color: #fff;
      height: auto;
      overflow-y: auto;
      padding: 0 40px 40px 40px;
      border-radius: 0 16px 16px 0;
      position: relative
    }

    #contact-modal .contact-modal-inner .contact-modal-form[view=form] .contact-modal-success {
      display: none
    }

    #contact-modal .contact-modal-inner .contact-modal-form[view=form] .contact-modal-form-inner {
      display: block
    }

    #contact-modal .contact-modal-inner .contact-modal-form[view=form] .contact-modal-form-inner span.h5 {
      font-size: 24px;
      font-weight: 800
    }

    #contact-modal .contact-modal-inner .contact-modal-form[view=message] {
      overflow: hidden
    }

    #contact-modal .contact-modal-inner .contact-modal-form[view=message] .contact-modal-success {
      display: grid
    }

    #contact-modal .contact-modal-inner .contact-modal-form[view=message] .contact-modal-form-inner {
      display: none
    }

    #contact-modal .contact-modal-inner .contact-modal-form:before {
      content: "";
      background: #fff;
      position: sticky;
      width: 100%;
      top: 0;
      display: block;
      left: 0;
      z-index: 1;
      height: 60px
    }

    #contact-modal .contact-modal-inner .contact-modal-form::-webkit-scrollbar {
      width: 4px;
      background-color: transparent
    }

    #contact-modal .contact-modal-inner .contact-modal-form::-webkit-scrollbar-thumb {
      background-color: rgba(200, 203, 200, .9);
      border-radius: 16px
    }

    #contact-modal .contact-modal-inner .contact-modal-form::-webkit-scrollbar-track {
      background-color: transparent
    }

    #contact-modal .contact-modal-inner .contact-modal-form .screen-reader-response {
      display: none
    }

    #contact-modal .contact-modal-inner .contact-modal-form .contact-modal-success {
      display: grid;
      grid-gap: 15px;
      position: absolute;
      top: 0;
      left: 0;
      background: #fff;
      text-align: center;
      height: 100%;
      padding: 40px;
      vertical-align: middle;
      align-content: center;
      justify-items: center
    }

    #contact-modal .contact-modal-inner .contact-modal-form .contact-modal-success * {
      margin: 0
    }

    @keyframes MOVE-BG {
      from {
        background-position-x: 0
      }

      to {
        background-position-x: 1440px
      }
    }

    @keyframes slider {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }

    @keyframes dash {
      from {
        stroke-dashoffset: 822
      }

      to {
        stroke-dashoffset: 0
      }
    }

    @keyframes hide-paper {
      0% {
        opacity: 0;
        transform: translateY(10px)
      }

      100%,
      20% {
        opacity: 1;
        transform: translateY(0)
      }
    }

    @keyframes cp-round-animate {
      0% {
        transform: rotate(0)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    @media (max-width: 1208px) {
      .kr-krayin-crm {
        max-width: 1076px;
        width: 100%
      }
    }

    @media (max-width: 1160px) {
      .kr-section .kr-section-paper .kr-story-card {
        display: block !important;
        width: 100% !important;
        margin: 40px 0
      }

      .kr-section .kr-section-paper .kr-story-card:first-child,
      .kr-section .kr-section-paper .kr-story-card:last-child {
        margin: 40px 0
      }

      .kr-section .kr-section-paper .kr-story-card .kr-story-cover {
        display: block;
        min-height: auto
      }

      .kr-section .kr-section-paper .kr-story-card .kr-story-cover h3 {
        width: 70% !important;
        padding: 50px 30px !important
      }

      .kr-section .kr-section-paper .kr-story-card:nth-of-type(3n+2) {
        margin-left: 0 !important;
        margin-right: 0 !important
      }
    }

    @media (max-width: 1023px) {
      #slide-carousel .kr-tabs {
        display: none
      }

      #slide-carousel .kr-tabs img {
        display: none !important
      }

      #slide-carousel .kr-slider {
        display: block;
        width: 100%;
        text-align: center
      }

      .inline-tag-divider {
        width: 100% !important
      }

      .inline-divider-img {
        width: 100% !important;
        padding: 0
      }

      .kr-cover {
        margin: 15px auto !important
      }
    }

    @media (max-width: 971px) {
      .kr-inst-req-grid {
        grid-template-columns: repeat(auto-fill, minmax(auto, 100%)) !important;
        grid-row-gap: 20px
      }

      .kr-inst-req-grid .kr-requirement-sec {
        border-right: none !important
      }

      .kr-inst-req-grid .kr-requirement-sec .kr-reqr-subgrid {
        grid-template-columns: repeat(auto-fill, minmax(auto, 50%)) !important
      }

      .kr-inst-req-grid .kr-requirement-sec .kr-reqr-subgrid .kr-reqr-info {
        width: 44%;
        margin: 0 auto
      }

      .kr-inst-req-grid .kr-install-subgrid {
        grid-template-columns: repeat(auto-fill, minmax(auto, 50%)) !important
      }

      .kr-inst-req-grid .kr-install-subgrid .kr-install-info {
        width: 44%;
        margin: 0 auto;
        padding: 0 !important
      }
    }

    @media (max-width: 966px) {
      .kr-contact-us .kr-contact-wrap .kr-top-con {
        display: block !important
      }

      .kr-contact-us .kr-contact-wrap .kr-webkul-detail-bottom {
        display: block !important
      }

      .kr-contact-us .kr-contact-wrap .kr-how-can-help {
        display: none
      }

      .kr-contact-us .kr-contact-wrap .kr-get-in-touch {
        display: block;
        margin: 0 auto;
        width: 440px;
        margin-top: 30px
      }

      .kr-contact-us .kr-contact-wrap .kr-get-in-touch .wpcf7 label .kr-contact-desc,
      .kr-contact-us .kr-contact-wrap .kr-get-in-touch .wpcf7 label .kr-contact-email,
      .kr-contact-us .kr-contact-wrap .kr-get-in-touch .wpcf7 label .kr-contact-name,
      .kr-contact-us .kr-contact-wrap .kr-get-in-touch .wpcf7 label .kr-contact-subject {
        width: unset !important;
        max-width: 89%
      }

      .kr-contact-us .kr-contact-wrap .kr-get-in-touch .wpcf7 label .kr-contact-desc {
        max-width: 95% !important;
        width: 413px !important
      }
    }

    @media (max-width: 786px) {
      .kr-cover {
        display: block;
        height: auto;
        padding-bottom: 100px
      }

      .kr-cover h1 {
        font-size: 34px !important;
        padding: 35px 20px !important
      }

      .kr-cover .kr-cover-author {
        padding: 6px 12px
      }

      .kr-reqr-info {
        width: 100% !important
      }

      .kr-install-info {
        width: 100% !important
      }
    }

    @media (max-width: 768px) {
      #contact-modal[modal=on] {
        display: block
      }

      #contact-modal .contact-modal-inner {
        display: block
      }

      #contact-modal .contact-modal-inner .contact-modal-info {
        display: none
      }

      #contact-modal .contact-modal-inner .contact-modal-form {
        position: relative;
        padding: 0 15px 40px;
        width: 100%;
        border-radius: 0;
        height: 100%
      }

      #contact-modal .contact-modal-inner .contact-modal-form .wk-textfield input,
      #contact-modal .contact-modal-inner .contact-modal-form .wk-textfield textarea {
        width: 100%
      }
    }

    @media (max-width: 623px) {
      .kr-section-blog-menu .kr-blog-menu {
        display: none !important
      }

      .kr-section-blog-menu .kr-blog-mobile-menu {
        display: inline-block !important
      }

      .kr-section-blog-menu .kr-blog-mobile-menu #mobile-menu-btn {
        display: block
      }
    }

    @media (max-width: 581px) {

      header.navigation-menu .kr-main-navigation,
      header.navigation-menu .kr-sub-navigation {
        display: none
      }

      header.navigation-menu #kr-mobi-menu {
        display: block
      }

      .kr-jumbotron-section h2 {
        margin-top: 5%
      }
    }

    @media (max-width: 545px) {
      .kr-get-in-touch {
        width: 80% !important
      }

      .kr-footer-wrapper .kr-rating {
        display: block !important
      }

      .kr-footer-wrapper .kr-rating .trustpilot {
        display: block;
        width: 210px;
        margin: 0 auto
      }

      .kr-footer-wrapper .social-connect {
        display: block !important;
        float: unset !important;
        margin: 0 auto;
        top: 25px !important
      }

      .kr-footer-wrapper .social-connect p {
        text-align: center
      }
    }

    @media (max-width: 480px) {
      .wk-notification {
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        width: 100% !important;
        border-radius: 0 !important
      }

      .wk-notification p {
        width: 70%
      }

      .wk-notification .wk-notification-close {
        right: 10px !important;
        top: 10px !important;
        position: inherit !important
      }

      .kr-search-block {
        width: 221px !important
      }

      .kr-search-block .kr-search input {
        width: 68% !important
      }
    }

    @media (max-width: 426px) {
      h1 {
        font-size: 36px !important
      }

      h2 {
        font-size: 28px !important
      }

      h3 {
        font-size: 22px !important
      }

      .kr-section-padding {
        padding-top: 50px !important
      }

      .krgrid-squeezy {
        padding: 0 15px !important
      }

      .krgrid-wide {
        padding: 0 15px !important
      }

      .kr-heading {
        text-align: left !important
      }

      .kr-ftr-p {
        padding-left: 0 !important
      }

      .kr-crm-brick .crm-brick-content h3 {
        margin: 6px 0 10px 0 !important
      }

      .kr-crm-brick .crm-brick-content p {
        margin: 0
      }

      #slide-carousel .kr-slider .kr-feature-text {
        text-align: left;
        padding: 0 0 0 15px !important
      }

      .clip-wrap {
        margin-left: 0 !important
      }

      .kr-get-in-touch {
        padding-left: 15px !important
      }

      .kr-section .kr-section-paper .kr-story-card .kr-story-cover h3 {
        padding: 30px !important
      }

      .kr-author-paper {
        padding: 20px !important
      }

      .kr-cover {
        height: 320px !important
      }

      .kr-inst-req-grid .kr-requirement-sec .kr-reqr-subgrid {
        grid-template-columns: repeat(auto-fill, minmax(auto, 100%)) !important;
        grid-row-gap: 20px
      }

      .kr-inst-req-grid .kr-installation-sec .kr-install-subgrid {
        grid-template-columns: repeat(auto-fill, minmax(auto, 100%)) !important;
        grid-row-gap: 20px
      }

      .kr-inst-req-grid .kr-installation-sec .kr-install-subgrid .kr-install-tag {
        padding: 0 !important
      }

      form.invalid .wpcf7-response-output {
        width: 75%
      }
    }

    @media (max-width: 375px) {
      .wk-notification .wk-notification-close {
        right: 6px !important;
        top: 5px !important;
        transform: scale(1.2) !important
      }

      .kr-search-block {
        width: 180px !important
      }

      .kr-search-block .kr-search input {
        width: 61% !important
      }

      .reading-list-count {
        margin-right: 5px !important
      }
    }

    @media (max-width: 348px) {
      .kr-dark-btn {
        margin-left: 0 !important
      }
    }

    .kr-404-section .kr-img-404 {
      margin: 0 auto;
      display: block;
      margin-top: 144px;
      stroke-dasharray: 800;
      stroke-dashoffset: 800;
      animation: dash 5s linear alternate infinite;
      max-width: 100%
    }

    .kr-404-section .kr-404-txt {
      text-align: center;
      margin: 48px 0 18px 0;
      font-size: 16px;
      color: #263238
    }

    .page-contact-us {
      background-color: #f7f8f9
    }

    .kr-contact-us {
      margin-top: 48px
    }

    .kr-contact-us .kr-contact-wrap {
      max-width: 910px;
      margin: 0 auto
    }

    .kr-contact-us .kr-top-con {
      display: none
    }

    .kr-contact-us .kr-top-con h1 {
      color: #263238;
      margin: 0 0 10px 0
    }

    .kr-contact-us .kr-top-con p {
      color: #546e7a;
      font-size: 16px;
      line-height: 22px;
      margin: 0
    }

    .kr-contact-us .kr-webkul-detail-bottom {
      margin-top: 30px;
      display: none
    }

    .kr-contact-us .kr-webkul-detail-bottom p {
      font-weight: 400;
      font-size: 16px;
      line-height: 30px;
      color: #263238;
      margin: 0
    }

    .kr-contact-us .kr-webkul-detail-bottom h5 {
      margin: 0;
      line-height: 22px
    }

    .kr-contact-us .kr-webkul-detail-bottom h5 span {
      font-style: normal;
      font-weight: 400
    }

    .kr-contact-us .kr-webkul-detail-bottom #kr-detail-line {
      line-height: 27px;
      margin-bottom: 10px
    }

    .kr-contact-us .kr-how-can-help {
      display: inline-block;
      width: 48.13%;
      vertical-align: middle
    }

    .kr-contact-us .kr-how-can-help h1 {
      color: #263238;
      margin: 0 0 10px 0
    }

    .kr-contact-us .kr-how-can-help p {
      color: #546e7a;
      font-size: 16px;
      line-height: 22px;
      margin: 0
    }

    .kr-contact-us .kr-how-can-help .kr-webkul-detail {
      margin-top: 180px
    }

    .kr-contact-us .kr-how-can-help .kr-webkul-detail p {
      font-weight: 400;
      font-size: 16px;
      color: #263238;
      margin: 0;
      line-height: 30px
    }

    .kr-contact-us .kr-how-can-help .kr-webkul-detail h5 {
      margin: 0;
      line-height: 22px
    }

    .kr-contact-us .kr-how-can-help .kr-webkul-detail h5 span {
      font-style: normal;
      font-weight: 400
    }

    .kr-contact-us .kr-how-can-help .kr-webkul-detail #kr-detail-line {
      line-height: 27px;
      margin-bottom: 10px
    }

    .kr-contact-us .kr-get-in-touch {
      display: inline-block;
      width: 41.5%;
      margin-left: 30px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, .05);
      background: #fff;
      vertical-align: middle;
      padding: 30px
    }

    .kr-contact-us .kr-get-in-touch h3 {
      margin: 0 0 5px 0
    }

    .kr-contact-us .kr-get-in-touch img {
      width: 100%
    }

    .kr-contact-us .kr-get-in-touch .kr-bg-img-2 {
      margin-top: 30px
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 p {
      position: relative;
      margin: 0
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 p .kr-inp-icon-sbt {
      display: inline-block;
      width: 21px;
      height: 21px;
      bottom: 15px;
      position: absolute;
      z-index: 1;
      margin-right: 10px;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      left: 13px;
      background-position: -232px -93px
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 p input[placeholder],
    .kr-contact-us .kr-get-in-touch .wpcf7 p textarea[placeholder] {
      font-size: 16px;
      line-height: 30px;
      color: #263238
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 label {
      display: block;
      font-size: 18px;
      color: #263238;
      margin-top: 30px;
      position: relative
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 label .kr-contact-desc,
    .kr-contact-us .kr-get-in-touch .wpcf7 label .kr-contact-email,
    .kr-contact-us .kr-get-in-touch .wpcf7 label .kr-contact-name,
    .kr-contact-us .kr-get-in-touch .wpcf7 label .kr-contact-subject {
      margin-top: 6px;
      border: 1px solid #c1c2c3;
      height: 40px;
      max-width: 335px;
      border-radius: 4px;
      padding-left: 38px;
      font-size: 16px;
      line-height: 30px;
      color: #263238;
      position: relative
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 label .kr-contact-desc {
      height: 60px;
      max-width: 353px;
      padding: 10px;
      margin-bottom: 30px
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 label .kr-inp-icon-mail,
    .kr-contact-us .kr-get-in-touch .wpcf7 label .kr-inp-icon-name,
    .kr-contact-us .kr-get-in-touch .wpcf7 label .kr-inp-icon-sub {
      display: inline-block;
      width: 21px;
      height: 21px;
      position: absolute;
      z-index: 1;
      margin-right: 10px;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      left: 9px;
      top: 37px
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 label .kr-inp-icon-name {
      background-position: -154px -93px
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 label .kr-inp-icon-mail {
      background-position: -181px -93px
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 label .kr-inp-icon-sub {
      background-position: -207px -93px
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 input[type=submit] {
      padding: 10px 16px 10px 36px;
      font-size: 18px;
      line-height: 30px;
      font-weight: 500;
      min-width: 115px;
      cursor: pointer;
      background-color: #0e90d9;
      border-radius: 4px;
      border: none;
      color: #fff;
      position: relative;
      margin-top: 10px
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 input[type=submit]::before {
      content: "";
      width: 21px;
      height: 21px;
      position: absolute;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      display: inline-block
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 input[type=submit]:hover {
      opacity: .7
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 form.sent .wpcf7-response-output {
      border-color: #53c41a;
      background: #53c41a;
      color: #fff;
      padding: 14px;
      border-radius: 4px
    }

    .kr-contact-us .kr-get-in-touch .wpcf7 .wpcf7-response-output {
      border-color: #ff4d50;
      background: #ff4d50;
      color: #fff;
      padding: 14px;
      border-radius: 4px
    }

    .kr-section-blog-menu {
      margin-top: 25px
    }

    .kr-section-blog-menu .kr-blog-menu,
    .kr-section-blog-menu .kr-search-block {
      display: inline-block;
      vertical-align: middle
    }

    .kr-section-blog-menu .kr-blog-menu ul {
      margin: 0;
      padding: 14px 0 0 0
    }

    .kr-section-blog-menu .kr-blog-menu ul li {
      display: inline-block;
      margin: 0 0 0 10px
    }

    .kr-section-blog-menu .kr-blog-menu ul li:first-child {
      margin-left: 0
    }

    .kr-section-blog-menu .kr-blog-menu ul li a {
      font-size: 18px;
      text-transform: capitalize;
      font-weight: 400
    }

    .kr-section-blog-menu .kr-blog-menu ul li a:active,
    .kr-section-blog-menu .kr-blog-menu ul li a:hover,
    .kr-section-blog-menu .kr-blog-menu ul li a:link,
    .kr-section-blog-menu .kr-blog-menu ul li a:visited {
      text-decoration: none;
      color: #0e90d9
    }

    .kr-section-blog-menu .kr-blog-menu ul li a.kr-blog-active,
    .kr-section-blog-menu .kr-blog-menu ul li a:hover {
      border-bottom: 2px solid #64687a;
      padding-bottom: 2px;
      color: #0e90d9
    }

    .kr-section-blog-menu .kr-blog-mobile-menu {
      display: none;
      position: relative
    }

    .kr-section-blog-menu .kr-blog-mobile-menu #mobile-menu-btn {
      cursor: pointer;
      width: 24px;
      height: 24px;
      padding: 13px 11px;
      border: 1px solid #d2d2d2;
      border-radius: 4px
    }

    .kr-section-blog-menu .kr-blog-mobile-menu #mobile-menu-btn span {
      width: 4px;
      height: 4px;
      background-color: rgba(0, 0, 0, .4);
      margin: 3px 0 0 10px;
      display: block;
      pointer-events: none
    }

    .kr-section-blog-menu .kr-blog-mobile-menu #mobile-menu {
      display: none;
      position: absolute;
      top: 58px;
      z-index: 10;
      min-width: 160px;
      padding: 8px 0;
      background-color: #f9f9f9;
      box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
      box-shadow: 0 4px 21px 0 rgba(0, 13, 187, .27)
    }

    .kr-section-blog-menu .kr-blog-mobile-menu #mobile-menu.kr-blog-active {
      display: block
    }

    .kr-section-blog-menu .kr-blog-mobile-menu #mobile-menu li {
      list-style: none;
      margin-left: 0
    }

    .kr-section-blog-menu .kr-blog-mobile-menu #mobile-menu li a {
      padding: 5px 12px;
      font-size: 18px;
      display: block;
      text-transform: capitalize;
      text-decoration: none;
      color: #0e90d9
    }

    .kr-section-blog-menu .kr-blog-mobile-menu #mobile-menu li a.kr-blog-active {
      background-color: #f1f1f1;
      border-left: 2px solid #64687a
    }

    .kr-section-blog-menu .kr-search-block {
      float: right;
      width: 300px;
      max-width: 100%;
      border: 1px solid #d2d2d2;
      border-radius: 4px
    }

    .kr-section-blog-menu .kr-search-block button,
    .kr-section-blog-menu .kr-search-block input {
      display: inline-block;
      vertical-align: middle
    }

    .kr-section-blog-menu .kr-search-block input:focus {
      outline: 0
    }

    .kr-section-blog-menu .kr-search-block button {
      background-color: #fff;
      border: none;
      outline: 0;
      padding-right: 0;
      cursor: pointer;
      padding: 11px 13px
    }

    .kr-section-blog-menu .kr-search-block input {
      border: none;
      padding: 8px;
      width: 77%;
      font-size: 16px;
      color: rgba(0, 0, 0, .8)
    }

    .kr-section-blog-menu .kr-search-block .ico-search {
      background-position: -69px -113px;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      width: 23px;
      height: 22px;
      margin-top: 2px;
      opacity: .5;
      display: inline-block
    }

    .kr-section-blog-menu .kr-search-block .ico-search:hover {
      opacity: .8
    }

    .kr-section-blog-menu .reading-list-count {
      opacity: 1;
      position: relative;
      float: right;
      margin: 0 10px 0 0;
      border: 1px solid #d2d2d2;
      border-radius: 4px
    }

    .kr-section-blog-menu .reading-list-count.no-after:after {
      display: none
    }

    .kr-section-blog-menu .reading-list-count .icon-action-reading-list {
      opacity: .72;
      cursor: pointer;
      display: inline-block;
      vertical-align: bottom;
      padding: 12px 11px
    }

    .kr-section-blog-menu .reading-list-count .icon-action-reading-list::before {
      content: '';
      width: 24px;
      height: 22px;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      background-position: -45px -112px;
      display: inline-block
    }

    .kr-section-blog-menu .reading-list-count:after {
      content: attr(data-count);
      position: absolute;
      left: 29px;
      top: 5px;
      text-align: center;
      padding: 2px 5px 1px 5px;
      border-radius: 50%;
      margin-top: -5px;
      font-family: arial, sans-serif;
      background-color: #f05f70;
      font-size: 12px;
      font-weight: 700;
      color: rgba(255, 255, 255, .86)
    }

    .krgrid-wide:before {
      content: "";
      display: table
    }

    .krgrid-wide:after {
      content: "";
      display: table;
      clear: both
    }

    ::placeholder {
      opacity: .8
    }

    .kr-search-paper {
      font-size: 0;
      margin-bottom: 40px;
      padding: 10px 0 15px 0;
      border-bottom: solid 1px rgba(0, 0, 0, .12)
    }

    .kr-search-paper .kr-results {
      font-family: Roboto;
      font-size: 21px;
      font-style: italic;
      margin: 25px 0 0 0;
      color: rgba(0, 0, 0, .65)
    }

    .kr-search-paper .kr-results span {
      color: rgba(0, 0, 0, .85)
    }

    .kr-post-cover {
      width: 100%
    }

    .kr-post-cover h1 {
      font-size: 50px;
      font-weight: 800;
      padding: 60px 0 0 0;
      position: relative;
      margin: 20px 0 0 0;
      word-wrap: break-word
    }

    .kr-post-cover h1::before {
      position: absolute;
      top: 24px;
      font-size: 14px;
      font-weight: 500;
      content: attr(data-story);
      text-transform: uppercase;
      background-color: rgba(0, 0, 0, .4);
      color: #fff;
      padding: 4px 20px 4px 20px;
      border-radius: 20px
    }

    .kr-editor {
      padding: 50px 0
    }

    .kr-editor h1,
    .kr-editor h2,
    .kr-editor h3,
    .kr-editor h4,
    .kr-editor h5,
    .kr-editor h6 {
      font-weight: 600 !important
    }

    .kr-editor h1,
    .kr-editor h2 {
      font-weight: 700;
      margin: 0 0 20px 0;
      text-transform: capitalize;
      word-wrap: break-word
    }

    .kr-editor h1 {
      font-size: 36px
    }

    .kr-editor h2 {
      font-size: 30px
    }

    .kr-editor h3,
    .kr-editor h4 {
      font-size: 26px;
      font-weight: 700;
      margin: 0 0 10px 0;
      text-transform: capitalize;
      word-wrap: break-word
    }

    .kr-editor h3 a,
    .kr-editor h4 a {
      font-size: 28px !important
    }

    .kr-editor h5,
    .kr-editor h6 {
      font-size: 22px;
      font-weight: 700;
      margin: 0 0 10px 0;
      text-transform: capitalize;
      word-wrap: break-word
    }

    .kr-editor p {
      font-size: 21px;
      margin: 0 0 14px 0;
      line-height: 1.7;
      word-wrap: break-word
    }

    .kr-editor h1:last-child,
    .kr-editor h2:last-child,
    .kr-editor h3:last-child,
    .kr-editor h4:last-child,
    .kr-editor h5:last-child,
    .kr-editor h6:last-child,
    .kr-editor img:last-child,
    .kr-editor ol:last-child,
    .kr-editor p:last-child,
    .kr-editor pre:last-child,
    .kr-editor ul:last-child {
      margin-bottom: 0
    }

    .kr-editor ol+h1,
    .kr-editor ol+h2,
    .kr-editor p+h1,
    .kr-editor p+h2,
    .kr-editor pre+h1,
    .kr-editor pre+h2,
    .kr-editor ul+h1,
    .kr-editor ul+h2 {
      margin-top: 50px
    }

    .kr-editor ol+h3,
    .kr-editor ol+h4,
    .kr-editor p+h3,
    .kr-editor p+h4,
    .kr-editor pre+h3,
    .kr-editor pre+h4,
    .kr-editor ul+h3,
    .kr-editor ul+h4 {
      margin-top: 50px
    }

    .kr-editor ol+h5,
    .kr-editor ol+h6,
    .kr-editor p+h5,
    .kr-editor p+h6,
    .kr-editor pre+h5,
    .kr-editor pre+h6,
    .kr-editor ul+h5,
    .kr-editor ul+h6 {
      margin-top: 50px
    }

    .kr-editor ul {
      padding-left: 40px;
      margin-bottom: 40px
    }

    .kr-editor ul li {
      list-style-type: disc;
      margin-bottom: 20px !important;
      line-height: 1.7 !important
    }

    .kr-editor ol {
      margin-bottom: 40px;
      padding-left: 40px
    }

    .kr-editor ol li {
      margin-bottom: 20px !important;
      line-height: 1.7 !important
    }

    .kr-editor li {
      font-size: 21px;
      margin: 10px 0;
      word-wrap: break-word
    }

    .kr-editor a:active,
    .kr-editor a:hover,
    .kr-editor a:link,
    .kr-editor a:visited {
      color: #0e90d9;
      text-decoration: none
    }

    .kr-editor a {
      word-wrap: break-word
    }

    .kr-editor .wp-caption {
      max-width: 100%;
      margin-left: auto;
      margin-right: auto
    }

    .kr-editor .wp-caption .wp-caption-text {
      margin: 15px 0;
      font-size: 16px
    }

    .kr-editor img {
      height: auto !important;
      max-width: 100% !important;
      box-shadow: 0 0 3px 3px rgba(0, 0, 0, .05);
      transition: all .5s ease;
      border-radius: 5px !important;
      display: block;
      margin-left: auto;
      margin-right: auto;
      overflow: hidden;
      margin-bottom: 40px !important
    }

    .kr-editor img.img-center-small {
      margin: 10px auto 30px !important;
      width: auto !important;
      max-width: 100% !important;
      display: block !important
    }

    .kr-editor h1+img,
    .kr-editor h2+img,
    .kr-editor h3+img,
    .kr-editor h4+img,
    .kr-editor h5+img,
    .kr-editor h6+img {
      margin-top: 10px
    }

    .kr-editor pre {
      font-size: 21px;
      color: #263238;
      padding: 15px;
      background: #efefef;
      border-radius: 5px;
      margin-top: 0;
      margin-bottom: 30px;
      white-space: pre-wrap;
      line-height: 1.3;
      overflow: auto
    }

    .kr-editor kbd {
      font-family: Roboto;
      border: solid 1px rgba(0, 0, 0, .12);
      padding: 0 8px 2px 8px;
      margin: 2px 0;
      background-color: rgba(0, 0, 0, .1);
      border-radius: 3px;
      display: inline-block;
      box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 5px 0 rgba(0, 0, 0, .1)
    }

    .kr-editor table {
      width: 100%;
      max-width: 100%
    }

    .kr-editor .version-info {
      margin-top: 25px
    }

    .kr-editor .version-info p {
      font-weight: 600;
      margin: 5px 0;
      font-size: 18px
    }

    .kr-editor .panel {
      margin-bottom: 50px
    }

    .kr-editor .panel .panel-body {
      padding-left: 0
    }

    .kr-editor .panel h3.panel-title:before {
      content: "";
      display: block;
      height: 100px;
      margin: -100px 0 0
    }

    .kr-editor .panel h3.panel-title:last-child {
      margin-bottom: 10px
    }

    .kr-editor .para-images {
      text-align: center;
      margin: 25px -150px;
      font-size: 0;
      width: 1100px
    }

    .kr-editor .para-images a {
      display: inline-block;
      width: 49%;
      margin: 0 .5%
    }

    .kr-editor .para-images a img.alignnone {
      width: auto;
      height: auto;
      max-width: 100%;
      display: block;
      margin: 0 auto
    }

    .kr-editor .para-images img {
      display: inline-block !important;
      width: 49% !important;
      margin: 0 .5% !important
    }

    .kr-editor .para-images .para-images {
      margin: 0 auto
    }

    .kr-editor .alert {
      font-size: 22px;
      color: #263238;
      font-weight: 600;
      margin: 30px 0 10px 0;
      text-transform: capitalize
    }

    .kr-editor .embed-container,
    .kr-editor .embed-responsive {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      max-width: 100%
    }

    .kr-editor .embed-container embed,
    .kr-editor .embed-container iframe,
    .kr-editor .embed-container object,
    .kr-editor .embed-responsive embed,
    .kr-editor .embed-responsive iframe,
    .kr-editor .embed-responsive object {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%
    }

    .kr-editor .wp-video {
      width: 100% !important
    }

    .kr-editor .kr-tags {
      margin-top: 30px
    }

    .kr-editor .kr-tags a {
      display: inline-block;
      color: #263238;
      background-color: rgba(0, 0, 0, .06);
      padding: 3px 10px 5px 10px;
      border-radius: 5px;
      margin-top: 10px;
      margin-right: 7px;
      text-decoration: none;
      font-size: 15px;
      text-transform: capitalize;
      font-weight: 500
    }

    .kr-editor .kr-tags a:hover {
      background-color: rgba(0, 0, 0, .08)
    }

    .kr-editor .blocks-gallery-grid {
      padding-left: 0
    }

    .kr-editor .kr-table {
      overflow-x: auto
    }

    .kr-editor .kr-table table {
      max-width: 100%;
      border: none
    }

    .kr-editor .kr-table table tr {
      border: none;
      border-bottom: 1px solid #ddd
    }

    .kr-editor .kr-table table tr td {
      border: none;
      padding: 12px;
      vertical-align: top
    }

    .kr-editor .kr-table table tr td a {
      font-size: unset
    }

    .kr-editor .kr-table table tr:first-child {
      background: rgba(221, 221, 221, .5);
      border-radius: 4px;
      border: none
    }

    .kr-editor .kr-table table tr:first-child td {
      font-weight: 500;
      vertical-align: middle
    }

    .kr-editor iframe,
    .kr-editor object,
    .kr-editor video {
      max-width: 100%
    }

    .kr-editor .kr-editor h3,
    .kr-editor .kr-editor h3 strong,
    .kr-editor .kr-editor h4,
    .kr-editor .kr-editor h4 strong {
      font-weight: 800 !important;
      color: #3a3a3a !important
    }

    .kr-editor .kr-editor h1,
    .kr-editor .kr-editor h1 strong,
    .kr-editor .kr-editor h2,
    .kr-editor .kr-editor h2 strong {
      color: #3a3a3a !important
    }

    .kr-editor .kr-editor h1+img,
    .kr-editor .kr-editor h2+img,
    .kr-editor .kr-editor h3+img,
    .kr-editor .kr-editor h4+img,
    .kr-editor .kr-editor h5+img,
    .kr-editor .kr-editor h6+img {
      margin-top: 20px !important
    }

    .kr-editor .kr-story-author {
      width: 100%;
      bottom: 0;
      left: 0;
      z-index: 3;
      padding: 20px 0
    }

    .kr-editor .kr-story-author>a:hover {
      text-decoration: none
    }

    .kr-editor .kr-story-author img {
      display: inline-block;
      vertical-align: middle;
      box-shadow: 0 0 12.75px 2.25px rgba(0, 0, 0, .08);
      border-radius: 50%;
      width: 60px;
      height: 60px;
      object-fit: cover;
      background-color: #f2f2f2;
      margin-bottom: 0 !important
    }

    .kr-editor .kr-story-author .kr-story-author-block {
      display: inline-block;
      vertical-align: middle
    }

    .kr-editor .kr-story-author .kr-story-author-block a,
    .kr-editor .kr-story-author .kr-story-author-block span {
      color: rgba(0, 0, 0, .85);
      display: block;
      margin-left: 10px;
      text-transform: capitalize;
      font-size: 15px;
      font-weight: 700;
      margin-bottom: 4px
    }

    .kr-editor .kr-story-author .kr-story-author-block span:last-child {
      color: rgba(0, 0, 0, .65)
    }

    .kr-editor .wk-index-bar {
      border: 1px solid #d3d3d3;
      padding: 30px;
      border-radius: 4px;
      margin-bottom: 20px;
      background: linear-gradient(white 30%, rgba(255, 255, 255, 0)), linear-gradient(rgba(255, 255, 255, 0), #fff 70%) 0 100%, radial-gradient(farthest-side at 50% 0, rgba(0, 0, 0, .2), rgba(0, 0, 0, 0)), radial-gradient(farthest-side at 50% 100%, rgba(0, 0, 0, .2), rgba(0, 0, 0, 0)) 0 100%;
      background-repeat: no-repeat;
      background-color: #fff;
      background-size: 100% 40px, 100% 40px, 100% 14px, 100% 14px;
      background-attachment: local, local, scroll, scroll
    }

    .kr-editor .wk-index-bar::-webkit-scrollbar {
      border-radius: 10px;
      width: 4px;
      background: rgba(0, 0, 0, .34)
    }

    .kr-editor .wk-index-bar::-webkit-scrollbar-thumb {
      border-radius: 10px;
      background: rgba(0, 0, 0, .5)
    }

    .kr-editor .wk-index-bar::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3)
    }

    .kr-editor .wk-index-bar.fixed-bar {
      position: fixed;
      top: 75px
    }

    .kr-editor .wk-index-bar .wk-index-header p {
      color: #263238;
      margin: 0;
      font-size: 24px;
      font-weight: 700
    }

    .kr-editor .wk-index-paper ul {
      list-style: none;
      padding-left: 20px;
      margin: 15px 0
    }

    .kr-editor .wk-index-paper ul li {
      margin: 0 0 10px 20px !important
    }

    .kr-editor .wk-index-paper ul li a {
      display: block;
      cursor: pointer;
      font-size: 18px !important;
      text-decoration: none !important;
      font-family: Roboto;
      position: relative;
      text-transform: capitalize
    }

    .kr-sep {
      display: block;
      text-align: center;
      margin: 50px auto;
      color: rgba(0, 0, 0, .9);
      font-size: 24px;
      line-height: 0
    }

    .kr-blog-fr-link {
      text-decoration: none
    }

    .kr-cover {
      width: 100%;
      height: 500px;
      margin: 40px auto;
      border-radius: 2px;
      background-image: -moz-linear-gradient(135deg, #4620c0 20%, #377eff 70%);
      background-image: -webkit-linear-gradient(135deg, #4620c0 20%, #377eff 70%);
      background-image: -ms-linear-gradient(135deg, #4620c0 20%, #377eff 70%);
      overflow: hidden;
      position: relative;
      display: table
    }

    .kr-cover h1 {
      position: relative;
      display: table-cell;
      vertical-align: middle;
      z-index: 2;
      font-size: 56px;
      color: #fff;
      padding: 0 50px 70px 50px;
      font-weight: 500
    }

    .kr-cover .kr-cover-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      position: absolute;
      left: 0;
      top: 0
    }

    .kr-cover .kr-cover-author {
      width: 100%;
      background: rgba(0, 0, 0, .15);
      position: absolute;
      bottom: 0;
      left: 0;
      z-index: 3;
      padding: 20px
    }

    .kr-cover .kr-cover-author img {
      display: inline-block;
      vertical-align: middle;
      border-radius: 50%;
      height: 60px;
      width: 60px;
      object-fit: cover
    }

    .kr-cover .kr-cover-author .kr-cover-author-block {
      display: inline-block;
      vertical-align: middle
    }

    .kr-cover .kr-cover-author .kr-cover-author-block span {
      color: #fff;
      display: block;
      margin-left: 10px;
      font-size: 15px;
      font-weight: 500;
      margin-bottom: 4px
    }

    .kr-section .kr-section-header {
      font-size: 0;
      margin-bottom: 40px;
      padding: 10px 0 15px 0;
      border-bottom: solid 1px rgba(0, 0, 0, .12)
    }

    .kr-section .kr-section-header h2 {
      width: 75%;
      display: inline-block;
      vertical-align: middle;
      font-size: 24px;
      color: rgba(0, 0, 0, .4);
      margin: 0;
      text-transform: capitalize;
      font-weight: 700
    }

    .kr-section .kr-section-header .kr-section-link {
      width: 25%;
      text-align: right;
      display: inline-block;
      vertical-align: middle
    }

    .kr-section .kr-section-header .kr-section-link a {
      text-decoration: none
    }

    .kr-section .kr-section-header a {
      font-size: 15px;
      color: #0e90d9
    }

    .kr-section .kr-section-paper {
      text-align: left;
      font-size: 0
    }

    .kr-section .kr-section-paper .kr-section-row:nth-child(1) {
      margin-top: 0
    }

    .kr-section .kr-section-paper .kr-story-card {
      width: 380px;
      display: inline-block;
      vertical-align: middle;
      max-width: 100%;
      box-shadow: rgba(100, 100, 111, .2) 0 7px 29px 0;
      border-radius: 2px;
      overflow: hidden;
      margin-top: 0;
      margin-bottom: 40px;
      border-radius: 8px
    }

    .kr-section .kr-section-paper .kr-story-card a {
      text-decoration: none
    }

    .kr-section .kr-section-paper .kr-story-card .kr-story-cover {
      width: 100%;
      height: 240px;
      display: table
    }

    .kr-section .kr-section-paper .kr-story-card .kr-story-cover h3 {
      padding: 25px 30px;
      margin: 0;
      display: table-cell;
      vertical-align: middle;
      color: #fff;
      font-size: 30px;
      font-weight: 500
    }

    .kr-section .kr-section-paper .kr-story-card .kr-story-author {
      padding: 20px
    }

    .kr-section .kr-section-paper .kr-story-card:nth-of-type(3n+2) {
      margin-left: 40px;
      margin-right: 40px
    }

    .kr-story-author {
      width: 100%;
      bottom: 0;
      left: 0;
      z-index: 3;
      padding: 20px 0
    }

    .kr-story-author>a:hover {
      text-decoration: none
    }

    .kr-story-author img {
      display: inline-block;
      vertical-align: middle;
      box-shadow: 0 0 12.75px 2.25px rgba(0, 0, 0, .08);
      border-radius: 50%;
      width: 60px;
      height: 60px;
      object-fit: cover;
      background-color: #f2f2f2;
      margin-bottom: 0 !important
    }

    .kr-story-author .kr-story-author-block {
      display: inline-block;
      vertical-align: middle
    }

    .kr-story-author .kr-story-author-block a,
    .kr-story-author .kr-story-author-block span {
      color: rgba(0, 0, 0, .85);
      display: block;
      margin-left: 10px;
      text-transform: capitalize;
      font-size: 15px;
      font-weight: 700;
      margin-bottom: 4px
    }

    .kr-story-author .kr-story-author-block span:last-child {
      color: rgba(0, 0, 0, .65)
    }

    .pagination {
      display: block;
      text-align: center;
      margin: 15px auto 45px auto
    }

    .pagination ul {
      padding: 0;
      margin: 0
    }

    .pagination ul li {
      display: inline-block;
      font-size: 20px;
      font-weight: 600
    }

    .pagination a.page-numbers,
    .pagination span.page-numbers {
      padding: 9px 0;
      width: 48px;
      height: 28px;
      border-radius: 50%;
      display: inline-block;
      vertical-align: middle;
      margin: 5px;
      border: solid 2px rgba(0, 0, 0, .4);
      color: #000;
      opacity: .4;
      text-align: center
    }

    .pagination a.page-numbers:hover,
    .pagination span.page-numbers:hover {
      opacity: .65;
      text-decoration: none
    }

    .pagination span.current,
    .pagination span.current:hover {
      background-color: #0e90d9;
      border-color: transparent;
      color: #fff;
      opacity: 1;
      cursor: not-allowed
    }

    .pagination .next {
      min-width: 24px !important;
      width: 24px !important;
      height: 24px !important;
      border: none !important;
      background-position: -176px -38px;
      transform: rotate(90deg)
    }

    .pagination .prev {
      min-width: 24px !important;
      width: 24px !important;
      height: 24px !important;
      border: none !important;
      background-position: -176px -38px;
      transform: rotate(-90deg)
    }

    .kr-author-paper {
      padding: 45px;
      border-bottom: solid 1px rgba(0, 0, 0, .12);
      text-align: center;
      margin-bottom: 20px
    }

    .kr-author-paper img {
      display: block;
      margin: 0 auto;
      border-radius: 50%;
      box-shadow: 0 0 12.75px 2.25px rgba(0, 0, 0, .08);
      margin-bottom: 15px;
      object-fit: cover
    }

    .kr-author-paper h3,
    .kr-author-paper h4 {
      font-size: 17px;
      font-weight: 700;
      margin: 0;
      margin-bottom: 4px
    }

    .kr-author-paper h3 {
      color: rgba(0, 0, 0, .65);
      text-transform: capitalize
    }

    .kr-author-paper h4 {
      color: rgba(0, 0, 0, .4)
    }

    .kr-author-paper .desc,
    .kr-author-paper .desig {
      width: 500px;
      max-width: 100%;
      margin: 10px auto 15px auto
    }

    .kr-author-paper .desc a,
    .kr-author-paper .desig a {
      color: rgba(0, 0, 0, .85);
      font-size: 17px;
      word-break: break-all
    }

    .kr-author-paper .kr-author-social .kr-author-social-icon {
      display: inline-block;
      width: 25px;
      height: 25px;
      opacity: .4;
      margin: 10px 5px 0 5px
    }

    .kr-author-paper .kr-author-social .kr-author-twitter {
      background-position: -189px -114px
    }

    .kr-author-paper .kr-author-social .kr-author-facebook {
      background-position: -151px -114px
    }

    .wk-comments-wrapper {
      padding-bottom: 20px;
      border-bottom: 1px solid #d8d1d1;
      margin-bottom: 40px
    }

    .wk-comments-wrapper .logged-in-as a {
      color: #0e90d9 !important
    }

    .wk-comments-wrapper .form-submit .wk-submit-btn {
      background-color: #0e90d9 !important;
      transition: .25s all
    }

    .wk-comments-wrapper .wk-submit-btn:hover {
      box-shadow: none !important;
      opacity: .8 !important
    }

    .wk-comments-wrapper .reply {
      display: inline-block;
      background-color: #0e90d9 !important;
      border-radius: 4px;
      transition: .25s all
    }

    .wk-comments-wrapper .reply:hover {
      box-shadow: none !important;
      opacity: .8
    }

    .wk-comments-wrapper .reply a {
      padding: 5px 12px;
      border-radius: 4px;
      font-size: 14px;
      margin-top: 8px !important;
      transition: all .2s ease;
      color: #fff;
      text-decoration: none;
      width: 84px !important;
      height: 31px;
      text-align: center
    }

    .wk-comments-wrapper #cancel-comment-reply-link {
      color: #0e90d9 !important
    }

    .wk-comments-wrapper p.light-txt {
      margin-bottom: 20px
    }

    .wk-comments-wrapper #author,
    .wk-comments-wrapper #email,
    .wk-comments-wrapper .wk-comment-form #comment {
      padding: 11px 0 12px 0 !important
    }

    .author-comment-data {
      color: #263238
    }

    .wk-social-share {
      display: grid;
      grid-template-columns: max-content auto;
      align-items: center;
      justify-content: space-between;
      height: 60px;
      position: relative;
      z-index: 2
    }

    .wk-social-share .wk-bar-share {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      user-select: none;
      grid-gap: 12px
    }

    .wk-social-share .wk-dropdown-list {
      margin: 0
    }

    .wk-social-share .wk-dropdown-label {
      padding: 10px 5px;
      text-align: center
    }

    .wk-social-share .wk-dropdown-label:after {
      display: inline-block;
      margin-left: 5px;
      transform: translateY(1px);
      position: unset
    }

    .wk-social-share .wk-dropdown-label.wk-dropdown-label-active:after {
      transform: scale(-1) translateY(-3px)
    }

    .wk-bar-icon {
      display: inline-block;
      cursor: pointer;
      opacity: .72;
      font-size: 14px;
      color: #000;
      padding: 14px 0;
      text-decoration: none
    }

    .wk-bar-icon:before {
      content: "";
      display: inline-block;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      width: 20px;
      height: 20px;
      vertical-align: bottom;
      margin-right: 5px
    }

    .wk-bar-icon:hover {
      opacity: .86
    }

    .wk-bar-icon.wk-bar-icon-save::before {
      background-position: -22px -114px
    }

    .wk-bar-icon.wk-bar-icon-save.wk-bar-icon-saved::before {
      background-position: -46px -114px
    }

    .wk-bar-icon.wk-bar-share-icon-twitter::before {
      background-position: -167px -114px
    }

    .wk-bar-icon.wk-bar-share-icon-facebook::before {
      background-position: -144px -114px
    }

    .wk-reading-list h1 {
      font-size: 36px;
      color: #263238;
      margin-top: 45px;
      font-weight: 700
    }

    .wk-reading-list .wk-reading-paper {
      margin-top: 40px
    }

    .wk-reading-list .wk-reading-paper .wk-empty-state {
      background-image: url(images/illustration-sprite.svg);
      width: 166px;
      height: 173px;
      background-position: 0 0;
      margin: 0 auto
    }

    .wk-reading-list .wk-reading-paper p {
      text-align: center;
      font-size: 18px;
      font-weight: 700;
      width: 380px;
      line-height: 1.6;
      max-width: 90%;
      color: #64687a;
      margin: 25px auto 0 auto
    }

    .wk-reading-list .kr-note {
      color: #64687a;
      font-style: italic;
      font-size: 14px;
      margin-bottom: 55px
    }

    .wk-reading-list .wk-reading-brick {
      box-shadow: 0 5px 32px 0 rgba(0, 0, 0, .15);
      border-radius: 5px;
      border-left: solid 5px #0e90d9;
      margin-bottom: 30px;
      position: relative
    }

    .wk-reading-list .wk-reading-brick a {
      text-decoration: none
    }

    .wk-reading-list .wk-reading-brick h2 {
      margin: 0 0 5px 0;
      padding: 0;
      font-size: 21px;
      color: #263238;
      padding: 20px 60px 0 20px
    }

    .wk-reading-list .wk-reading-brick span {
      font-size: 15px;
      color: #263238;
      display: block;
      padding: 5px 60px 25px 20px
    }

    .wk-reading-list .wk-reading-brick span span {
      color: #263238;
      display: inline;
      padding: 0
    }

    .wk-reading-list .wk-reading-brick .wk-reading-brick-remove {
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      width: 19px;
      height: 18px;
      right: 7px;
      top: 9px;
      z-index: 2;
      position: absolute;
      background-position: -11px -154px;
      opacity: .34;
      cursor: pointer;
      padding: 0;
      transform: scale(1.2)
    }

    .wk-reading-list .wk-reading-brick .wk-reading-brick-remove:hover {
      opacity: .56
    }

    .wk-notification {
      background-color: #0e90d9;
      color: #fff;
      font-weight: 700;
      position: relative;
      position: fixed;
      width: 300px;
      max-width: 100%;
      padding: 0 25px 2px 65px;
      top: 25px;
      right: 25px;
      border-radius: 5px;
      box-shadow: 0 5px 10px 0 rgba(0, 0, 0, .05), 0 2px 6px 0 rgba(0, 0, 0, .15);
      z-index: 100;
      animation: hide-paper 1.5s ease-in-out;
      opacity: 1
    }

    .wk-notification p {
      color: #fff
    }

    .wk-notification .wk-notification-close {
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      width: 15px;
      height: 15px;
      background-position: -29px -155px;
      position: absolute;
      top: 7px;
      right: 7px;
      cursor: pointer;
      transform: scale(1.3)
    }

    .wk-notification .wk-notification-close:hover {
      opacity: .65
    }

    .wk-notification.wk-notification-icon-removed {
      background-color: #2f2f2f
    }

    .wk-notification:before {
      content: "";
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      width: 40px;
      height: 40px;
      background-position: -79px -134px;
      position: absolute;
      left: 15px;
      top: 15px;
      background-color: #fff;
      border-radius: 21px
    }

    .wk-notification.wk-notification-icon-removed:before {
      background-position: -110px -134px
    }

    .wk-notification.wk-notification-icon-error:before {
      background-position: -41px -110px
    }

    .kr-no-post {
      display: inline-block;
      background-image: url(images/illustration-sprite.svg);
      width: 128px;
      height: 157px;
      background-position: -19px -181px
    }

    .kr-hero-download-section {
      padding-top: 80px
    }

    .kr-hero-download-section .kr-hero-dwn-wrap {
      text-align: center
    }

    .kr-hero-download-section .kr-hero-dwn-wrap h1 {
      margin: 0;
      margin-bottom: 18px
    }

    .kr-hero-download-section .kr-hero-dwn-wrap p {
      max-width: 570px;
      font-size: 18px;
      margin: 0 auto;
      padding-top: 12px;
      margin-bottom: 24px
    }

    .kr-hero-download-section .kr-hero-dwn-wrap .kr-dwn-zip-btn {
      margin: 20px 0 0 0
    }

    .kr-hero-download-section .kr-hero-dwn-wrap .kr-dwn-git-btn {
      margin: 20px 0 0 0;
      font-size: 18px;
      min-width: 211px;
      padding: 8px 0
    }

    .kr-hero-download-section .kr-hero-dwn-wrap .kr-dwn-git-btn::before {
      content: "";
      width: 40px;
      height: 40px;
      display: inline-block;
      margin-right: 10px;
      background-image: url(images/krayin-main-sprite.svg?v=1.3);
      background-repeat: no-repeat;
      background-position: -251px 0;
      vertical-align: middle
    }

    .kr-hero-download-section .kr-hero-dwn-wrap .kr-dwn-zip-txt {
      font-size: 14px;
      padding-top: 4px
    }

    .kr-ptrn-dwn {
      margin: 60px 0 72px 0
    }

    .kr-section-inst-reqr .kr-inst-req-wrap {
      max-width: 911px;
      margin: 0 auto
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(auto, 455.5px))
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid p {
      margin: 0
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-requirement-sec {
      border-right: 1px solid #c4c4c4
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-requirement-sec .kr-reqr-subgrid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(auto, 227px));
      color: #263238;
      padding-top: 13px
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-requirement-sec .kr-reqr-subgrid .kr-reqr-tag .kr-reqr-title {
      font-size: 24px;
      font-weight: 500
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-requirement-sec .kr-reqr-subgrid .kr-reqr-tag .kr-reqr-desc {
      font-size: 18px;
      margin-top: 14px
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-requirement-sec .kr-reqr-subgrid .kr-reqr-info .kr-reqr-info-child {
      margin-bottom: 15px
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-requirement-sec .kr-reqr-subgrid .kr-reqr-info .kr-reqr-info-child p {
      font-size: 18px;
      line-height: 24px
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-installation-sec .kr-install-subgrid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(auto, 227px));
      color: #263238;
      padding-top: 13px
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-installation-sec .kr-install-subgrid .kr-install-tag {
      padding-left: 14px
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-installation-sec .kr-install-subgrid .kr-install-tag .kr-install-title {
      font-size: 24px;
      font-weight: 500
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-installation-sec .kr-install-subgrid .kr-install-tag .kr-install-desc {
      font-size: 18px;
      margin-top: 14px
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-installation-sec .kr-install-subgrid .kr-install-info {
      padding-left: 40px
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-installation-sec .kr-install-subgrid .kr-install-info .kr-instll-info-child {
      margin-bottom: 43px
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-installation-sec .kr-install-subgrid .kr-install-info .kr-instll-info-child p {
      font-size: 18px;
      line-height: 24px
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-installation-sec .kr-install-subgrid .kr-install-info .kr-instll-info-child .kr-install-sub-btn {
      min-width: 186px;
      padding: 10px 0;
      font-size: 16px
    }

    .kr-section-inst-reqr .kr-inst-req-wrap .kr-inst-req-grid .kr-installation-sec .kr-install-subgrid .kr-install-info .kr-instll-info-child:last-child {
      margin-bottom: 0 !important
    }

    .wpcf7 .screen-reader-response {
      display: none
    }

    .wpcf7 form.invalid .wpcf7-response-output {
      color: #ff404b;
      font-size: 16px;
      border-color: #ff4d50 !important;
      background: #ff4d50;
      color: #fff;
      padding: 14px !important;
      border-radius: 4px
    }

    .wpcf7 form.invalid .wpcf7-response-output.success {
      color: #fff;
      background: #2fa368;
      max-width: 100%;
      padding: 16px;
      border-radius: 8px;
      font-size: 18px;
      display: inline-block
    }

    .wpcf7 .wpcf7-spinner {
      width: 44px;
      height: 44px;
      display: inline-block;
      background: 0 0 !important;
      box-sizing: border-box;
      position: relative;
      top: 14px !important;
      left: 16px !important;
      background: no-repeat;
      margin: 0;
      vertical-align: unset;
      visibility: hidden
    }

    .wpcf7 .wpcf7-spinner:after {
      border-radius: 50%;
      content: " ";
      width: 44px;
      height: 44px;
      display: inline-block;
      box-sizing: border-box;
      border-top: solid 6px #0e90d9;
      border-right: solid 6px transparent;
      border-bottom: solid 6px transparent;
      border-left: solid 6px transparent;
      position: absolute;
      top: 0;
      left: 0;
      animation: cp-round-animate .5s linear infinite !important
    }

    .wpcf7 .wpcf7-spinner:before {
      border-radius: 50%;
      content: " ";
      width: 44px;
      height: 44px;
      display: inline-block;
      box-sizing: border-box;
      border: solid 6px #adc9dd;
      position: absolute;
      top: 0;
      left: 0;
      animation-iteration-count: unset !important;
      animation-timing-function: unset !important
    }

    .wpcf7 .wpcf7-spinner.is-active {
      visibility: visible
    }

    .wpcf7 form.submitting .wpcf7-spinner {
      visibility: visible
    }

    .wpcf7 form.submitting .wpcf7-submit {
      cursor: not-allowed;
      pointer-events: none
    }

    .wk-control * {
      font-family: Inter, sans-serif
    }

    .wk-control {
      margin: 20px 0 0 0
    }

    .wk-control.wk-dropdown {
      margin-top: -10px
    }

    .wk-control label {
      color: var(--type-dark);
      font-size: 14px;
      display: block;
      margin: 0 0 6px 0
    }

    .wk-control label * {
      margin-top: 6px
    }

    .wk-dropdown select,
    .wk-textfield input,
    .wk-textfield textarea {
      display: block;
      font-size: 14px;
      padding: 9px 10px 11px 10px;
      color: var(--type-dark);
      border: solid 1px var(--shade);
      max-width: 300px;
      width: 100%;
      border-radius: 4px
    }

    .wk-textfield input:focus,
    .wk-textfield textarea:focus {
      border-color: var(--accent)
    }

    input.wpcf7-form-control.wpcf7-submit.wk-button:disabled {
      background-color: var(--tint);
      border-color: var(--shade);
      color: var(--shade);
      cursor: not-allowed
    }

    input.wpcf7-form-control.wpcf7-submit.wk-button.btn-dark {
      margin-top: -10px
    }

    .wk-textfield input:disabled,
    .wk-textfield textarea:disabled {
      background-color: var(--tint);
      border-color: var(--shade);
      color: var(--shade);
      cursor: not-allowed
    }

    .wk-control span.wk-msg,
    .wpcf7-not-valid-tip {
      font-size: 12px;
      margin: 4px 0 0 0;
      display: block;
      color: var(--error)
    }

    .wk-radio input[type=radio]:checked+span.symbol:after {
      opacity: 1
    }

    .wk-radio input[type=radio]:disabled+span.symbol {
      border-color: var(--shade);
      background-color: var(--tint);
      cursor: not-allowed
    }

    .wk-radio input[type=radio]:disabled~span {
      color: var(--shade);
      cursor: not-allowed
    }

    .wk-radio input[type=radio]:disabled:checked+span.symbol:after {
      background-color: var(--shade)
    }

    .wk-control.wk-fluid input[type=email],
    .wk-control.wk-fluid input[type=number],
    .wk-control.wk-fluid input[type=password],
    .wk-control.wk-fluid input[type=tel],
    .wk-control.wk-fluid input[type=text],
    .wk-control.wk-fluid select,
    .wk-control.wk-fluid textarea {
      width: 100%
    }

    :root {
      --type-dark: #263238;
      --tint: #EBF3F5;
      --shade: #B2B5C4;
      --accent: #0E90D9;
      --error: #FF404B;
      --white: #FFFFFF
    }

  </style>
@endpush

@section('content-wrapper')
  <div class="content full-page">
    <div class="krgrid-squeezy">
      <div class="kr-editor">
        <h1 data-story="doc">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Hướng dẫn sử dụng hoàn chỉnh của CRM</font>
          </font>
        </h1>

        <p><strong><a href="#"  rel="noreferrer noopener sponsored nofollow">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">CRM</font>
              </font>
            </a></strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> rất dễ sử dụng và phổ biến nhất Opensource Laravel CRM. </font>
            <font style="vertical-align: inherit;">Mặc dù nền tảng cung cấp nhiều tính linh hoạt,</font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;"> nhưng mục tiêu duy nhất của nó là giúp nhân viên bán hàng đạt được
                mục tiêu của họ</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> . </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">&nbsp;“Hướng dẫn sử dụng hoàn chỉnh của CRM”</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> sẽ cho bạn biết mọi thứ bạn cần biết về .</font>
          </font>
        </p>

        <figure class="wp-block-image size-large">
          <img width="1024" height="546" src="{{ asset('asset/image/KrayinCRM.png') }}"
            alt="A Complete User Guide of  CRM" class="wp-image-2675" sizes="(max-width: 1024px) 100vw, 1024px" />
        </figure>

        <h2 id="dashboard">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Bảng điều khiển:</font>
          </font>
        </h2>

        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Trước tiên, bạn cần </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">đăng nhập vào Bảng điều khiển</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> quản trị của CRM, sau đó bạn sẽ có thể nhìn thấy </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Bảng điều khiển</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> với các tính năng sau.</font>
          </font>
        </p>

        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Khách hàng tiềm năng Thêm giờ:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Trong phần này, bạn sẽ có thể thấy tỷ lệ </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Won (màu xanh lá cây) và Mất (màu đỏ)</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> theo tuần.</font>
          </font>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Khách hàng tiềm năng đã bắt đầu:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Tại đây bạn có thể thấy số lượng khách hàng tiềm năng theo tuần.
            </font>
            <font style="vertical-align: inherit;">Ví dụ, trong tuần đầu tiên, sẽ có 1 khách hàng tiềm năng hoặc trong
              tuần thứ hai, sẽ có 3 khách hàng tiềm năng.</font>
          </font>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Khách hàng tiềm năng hàng đầu:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Trong phần này, bạn có thể thấy lượng khách hàng tiềm năng </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">cao nhất</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> trong khách hàng tiềm năng hàng đầu.</font>
          </font>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Hoạt động:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Trong biểu diễn đồ họa, bạn có thể thấy tất cả các hoạt động như
            </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">họp, gọi điện và ăn trưa.</font>
            </font>
          </strong>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Đường ống:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Trong đường ống, bạn sẽ có thể xem tất cả các đường dẫn trong </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">đường ống mặc định và trong đường ống mới được tạo.</font>
            </font>
          </strong>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Email:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Tại đây bạn có thể kiểm tra tất cả các email như hộp thư đến, hộp thư
              đi, thư nháp, hộp thư đi, v.v.</font>
          </font>
        </p>


        <figure class="wp-block-image size-large">
          <img
              width="1024" height="524" src="{{ asset('asset/image/image-19-1024x524.png') }}" alt="Dashboard of  CRM"
              class="wp-image-2652"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Khách hàng:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Khi khách hàng </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">tiềm năng sẽ giành được thì nó sẽ trở thành khách hàng</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> . </font>
            <font style="vertical-align: inherit;">Trong chế độ xem này, bạn có thể thấy tất cả các khách hàng theo tuần.
            </font>
          </font>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Khách hàng hàng đầu:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Ai có nhiều khách hàng tiềm năng hơn, sẽ hiển thị trong danh sách
              Khách hàng hàng đầu.</font>
          </font>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Sản phẩm:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Nó cũng sẽ hiển thị theo tuần. </font>
            <font style="vertical-align: inherit;">Nếu bạn thêm một sản phẩm mỗi tuần thì sản phẩm đó sẽ hiển thị ở đó.
            </font>
          </font>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Sản phẩm hàng đầu:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Tất cả các sản phẩm có </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">số lượng cao hơn</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> , nó sẽ được hiển thị trong Sản phẩm hàng đầu.</font>
          </font>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Trích dẫn:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Tất cả các trích dẫn bạn đã tạo, sẽ xuất hiện trong biểu diễn đồ họa.
            </font>
          </font>
        </p>



        <p id="note"><strong><em>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Lưu ý: </font>
              </font>
            </em> <em>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Khi bạn nhấp vào dấu “+” thì bạn có thể thêm các tính năng khác
                  nhau trực tiếp từ đó</font>
              </font>
            </em>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;"> , </font>
            </font><em>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">như bạn có thể thấy trong hình ảnh bên dưới.</font>
              </font>
            </em>
          </strong></p>



        <figure class="wp-block-image size-large">
          <img width="1024" height="292"
              src="{{ asset('asset/image/image-32-1024x292.png') }}" alt="A Complete User Guide of  CRM
      " class="wp-image-2719"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <p><em><strong>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Lưu ý: Bạn có thể cập nhật và xóa ảnh hồ sơ người dùng bằng cách
                  nhấp vào Tài khoản của tôi.</font>
              </font>
            </strong></em></p>



        <figure class="wp-block-image size-large"><img width="1024" height="117"
              src="{{ asset('asset/image/P-1024x117.png') }}" alt="A Complete User Guide of  CRM" class="wp-image-2724"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <h2 id="leads">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Khách hàng tiềm năng:</font>
          </font>
        </h2>



        <h4 id="kanban-view-of-lead">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Kanban View of Lead:</font>
          </font>
        </h4>



        <p><a href="#how-to-create-leads-in-krayin-crm/" 
            rel="noreferrer noopener sponsored nofollow"><strong>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Khách hàng tiềm năng</font>
              </font>
            </strong> </a>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> đề cập đến người</font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;"> liên hệ hoặc khách hàng tiềm năng còn được gọi là "khách hàng tiềm
                năng"</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> . </font>
            <font style="vertical-align: inherit;">Khi bạn nhận được sự quan tâm của bất kỳ khách hàng nào thì bạn có thể
              tạo khách hàng tiềm năng. </font>
            <font style="vertical-align: inherit;">Bạn có thể</font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;"> kéo và thả khách hàng tiềm năng từ giai đoạn này sang giai đoạn khác
              </font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> và nhiều tính năng khác</font>
          </font>
        </p>



        <figure class="wp-block-image size-large"><img
              width="1024" height="360" src="{{ asset('asset/image/image-20-1024x360.png') }}" alt="Leads in  CRM "
              class="wp-image-2653"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <h4 id="list-view-of-lead">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Chế độ xem danh sách của Khách hàng tiềm năng:</font>
          </font>
        </h4>



        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Tại đây bạn có thể chỉnh sửa, xóa và cũng có thể thực hiện các hành
              động hàng loạt như </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">xóa và cập nhật giai đoạn</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> khách hàng tiềm năng.</font>
          </font>
        </p>



        <figure class="wp-block-image size-large"><img width="1024" height="343"
              src="{{ asset('asset/image/Screenshot-from-2022-01-28-18-32-56-1024x343.png') }}" alt="A Complete User Guide of  CRM
      " class="wp-image-2726"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>


        <h2 id="quotes">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Báo giá:</font>
          </font>
        </h2>

        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Trong CRM, </font>
          </font><a href="#how-to-create-quotes-in-krayin/"  rel="noreferrer noopener sponsored nofollow">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Báo giá</font>
            </font>
          </a>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> là các thỏa thuận hợp pháp giữa khách hàng và nhà cung cấp để cung cấp
              các sản phẩm được yêu cầu của khách hàng trong một khung thời gian cụ thể với mức giá được xác định trước.
            </font>
            <font style="vertical-align: inherit;">Bạn có thể tạo báo giá từ đây: </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Trang tổng quan -&gt; Báo giá -&gt; </font>
            </font><a href="#how-to-create-quotes-in-krayin/" 
              rel="noreferrer noopener sponsored nofollow"> </a>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Tạo báo giá</font>
            </font>
          </strong>
        </p>



        <p><em><strong>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Lưu ý: Bạn cũng có thể trực tiếp tạo các trích dẫn bằng cách chỉnh
                  sửa các khách hàng tiềm năng.</font>
              </font>
            </strong></em></p>



        <figure class="wp-block-image size-large"><img
              width="1024" height="341" src="{{ asset('asset/image/image-23-1024x341.png') }}" alt="Quotes in  CRM "
              class="wp-image-2656"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <h2 id="mail-email-integration-is-an">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Thư:</font>
          </font>
        </h2>



        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">&nbsp;Trong hộp thư, bạn có thể truy cập thông tin CRM toàn diện về
              người gửi và dự án liên quan chỉ bằng một nút bấm. </font>
            <font style="vertical-align: inherit;">Dịch vụ email trong CRM sẽ cung cấp cho bạn quyền truy cập tập
              trung vào thông tin, tất cả các tệp, thư điện tử đã lưu trữ, v.v. Để gửi thư </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">, bạn cần vào Trang tổng quan -&gt; Thư</font>
            </font>
          </strong>
        </p>


        <figure class="wp-block-image size-large"><img width="1024" height="237"
              src="{{ asset('asset/image/image-31-1024x237.png') }}" alt="A Complete User Guide of  CRM
      " class="wp-image-2686"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <h2 id="activities">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Các hoạt động:</font>
          </font>
        </h2>



        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Các mô-đun Nhiệm vụ, Cuộc gọi và Cuộc họp trong </font>
          </font><a href="#"  rel="noreferrer noopener sponsored nofollow">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;"> CRM</font>
            </font>
          </a>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> hữu ích trong việc đưa ra quan điểm đầy đủ về các hoạt động bán hàng
              tương ứng được thực hiện cho khách hàng tiềm năng mà bạn phải truy cập </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Trang tổng quan -&gt; Khách hàng tiềm năng -&gt; Tạo hoạt động</font>
            </font>
          </strong>
        </p>


        <figure class="wp-block-image size-large"><img
              width="1024" height="330" src="{{ asset('asset/image/image-24-1024x330.png') }}" alt="Mails in  CRM "
              class="wp-image-2657"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <h2 id="contacts">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Liên lạc:</font>
          </font>
        </h2>



        <h3 id="persons">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Những người:</font>
          </font>
        </h3>



        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Trong CRM, bạn có thể tạo, chỉnh sửa, xóa và thực hiện các hành
              động hàng loạt trong phần </font><strong><a href="#how-to-add-contacts-in-krayin/" 
                rel="noreferrer noopener sponsored nofollow">
                <font style="vertical-align: inherit;">người</font>
              </a></strong>
            <font style="vertical-align: inherit;"> . </font>
            <font style="vertical-align: inherit;">Giờ đây, bạn có thể </font><strong>
              <font style="vertical-align: inherit;">xuất dữ liệu của người đó sang định dạng XLS và CSV</font>
            </strong>
            <font style="vertical-align: inherit;"> .</font>
          </font><a href="#how-to-add-contacts-in-krayin/"  rel="noreferrer noopener sponsored nofollow">
          </a><strong><a href="#how-to-add-contacts-in-krayin/" 
              rel="noreferrer noopener sponsored nofollow">
              <font style="vertical-align: inherit;"></font>
            </a> </strong>
          <font style="vertical-align: inherit;"></font><strong>
            <font style="vertical-align: inherit;"></font>
          </strong>
          <font style="vertical-align: inherit;"></font>
        </p>



        <figure class="wp-block-image size-large"><img
              width="1024" height="324" src="{{ asset('asset/image/image-26-1024x324.png') }}" alt="Contacts in  CRM "
              class="wp-image-2659"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <h3 id="organization">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Cơ quan:</font>
          </font>
        </h3>



        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Đi tới Danh bạ -&gt; Tổ chức và nhấp vào </font><strong><a
                href="#how-to-add-contacts-in-krayin/"  rel="noreferrer noopener sponsored nofollow">
                <font style="vertical-align: inherit;">Thêm tổ chức</font>
              </a></strong>
            <font style="vertical-align: inherit;"> .</font>
          </font><a href="#how-to-add-contacts-in-krayin/" 
            rel="noreferrer noopener sponsored nofollow">&nbsp;</a><strong><a href="#how-to-add-contacts-in-krayin/"
               rel="noreferrer noopener sponsored nofollow">
              <font style="vertical-align: inherit;"></font>
            </a></strong>
          <font style="vertical-align: inherit;"></font>
        </p>



        <figure class="wp-block-image size-large"><img
              width="1024" height="317" src="{{ asset('asset/image/image-27-1024x317.png') }}" alt="Organization In  CRM"
              class="wp-image-2660"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <h2 id="block-f163a3ee-d239-4b6e-96a0-b3c2bc032331">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Các sản phẩm:</font>
          </font>
        </h2>



        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Để </font>
          </font><a href="#how-to-add-products-in-krayin/"  rel="noreferrer noopener sponsored nofollow">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">thêm sản phẩm</font>
            </font>
          </a>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> , hãy mở Bảng điều khiển quản trị và đi tới </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Trang tổng quan -&gt; Sản phẩm</font>
            </font>
          </strong>
        </p>



        <figure class="wp-block-image size-large"><img
              width="1024" height="305" src="{{ asset('asset/image/image-29-1024x305.png') }}" alt="Products in  CRM "
              class="wp-image-2662"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <h2 id="setting">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Cài đặt:</font>
          </font>
        </h2>



        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Trong cài đặt, có các tùy chọn khác nhau như:</font>
          </font>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Người dùng:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Quản lý tất cả người dùng của bạn và quyền của họ trong CRM, những gì
              họ được phép làm.</font>
          </font><a href="#sanjay-krayin/admin/settings/groups"></a>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Khách hàng tiềm năng :</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Quản lý tất cả các cài đặt liên quan đến khách hàng tiềm năng của bạn
              như </font>
          </font><a href="#how-to-build-sales-pipeline-in-krayin/" 
            rel="noreferrer noopener sponsored nofollow">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Đường ống</font>
            </font>
          </a>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> , </font>
          </font><a href="#how-to-add-sources-in-krayin/"  rel="noreferrer noopener sponsored nofollow">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Nguồn</font>
            </font>
          </a>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> và Loại trong CRM.</font>
          </font><a href="#sanjay-krayin/admin/settings/pipelines"></a><a
            href="#sanjay-krayin/admin/settings/attributes"></a>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Tự động hóa:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Quản lý tất cả các cài đặt liên quan đến tự động hóa của bạn như
            </font>
          </font><a href="#how-to-add-attribute-in-krayin/"  rel="noreferrer noopener sponsored nofollow">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Thuộc tính</font>
            </font>
          </a>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> , </font>
          </font><a href="#how-to-create-an-email-template-in-krayin/" 
            rel="noreferrer noopener sponsored nofollow">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Mẫu email</font>
            </font>
          </a>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> và Tự động hóa </font>
          </font><a href="#how-to-set-up-workflow-in-laravel-crm/" 
            rel="noreferrer noopener sponsored nofollow">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">quy trình làm việc</font>
            </font>
          </a>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> trong CRM</font>
          </font><a href="#sanjay-krayin/admin/settings/attributes"></a>
        </p>



        <p><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Cài đặt khác:</font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Quản lý tất cả cài đặt bổ sung của bạn dưới dạng biểu mẫu web và thẻ
              trong CRM</font>
          </font><a href="#sanjay-krayin/admin/web-forms"></a>
        </p>



        <figure class="wp-block-image size-large"><img
              width="1024" height="525" src="{{ asset('asset/image/image-28-1024x525.png') }}" alt="Setting in  CRM "
              class="wp-image-2661"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <h2 id="configuration">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Cấu hình:</font>
          </font>
        </h2>



        <p>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Từ đây, bạn định cấu hình ngôn ngữ của CRM, Theo mặc định, chúng
              tôi cung cấp cho bạn </font>
          </font><strong>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">ngôn ngữ tiếng Anh, tiếng Thổ Nhĩ Kỳ và tiếng Ả Rập. </font>
            </font>
          </strong>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Chúng tôi cũng đang làm việc trên các ngôn ngữ khác.</font>
          </font>
        </p>



        <figure class="wp-block-image size-large"><img
              width="1024" height="315" src="{{ asset('asset/image/Screenshot-from-2022-01-25-17-47-51-1024x315.png') }}"
              alt="" class="wp-image-2713"
              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>



        <p><strong><em>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Trong blog này, tôi đã cố gắng giải thích mọi thứ về CRM.
                </font>
                <font style="vertical-align: inherit;">Nếu bạn có bất kỳ thắc mắc hoặc đề xuất nào, hãy liên hệ lại với
                  chúng tôi theo các </font>
              </font>
            </em></strong> <strong><em>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">liên kết bên dưới:</font>
              </font>
            </em></strong></p>



        <p><em><strong>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Website: </font>
              </font><a href="https://kennatech.vn/"  rel="noreferrer noopener sponsored nofollow">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">https://kennatech.vn/</font>
                </font>
              </a>
            </strong></em></p>



        <p><em><strong>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Hỗ trợ: </font>
              </font>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">contact@kennatech.vn</font>
              </font>
            </strong></em></p>
      </div>
    </div>
  </div>
@stop --}}
