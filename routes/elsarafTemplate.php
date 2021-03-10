<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'front.elsarafTemplate.pages.home');
Route::view('/about', 'front.elsarafTemplate.pages.about');
Route::view('/affiliate', 'front.elsarafTemplate.pages.affiliate');
Route::view('/agents', 'front.elsarafTemplate.pages.agents');
Route::view('/brand-guideline', 'front.elsarafTemplate.pages.brand-guideline');
Route::view('/buyer-registration', 'front.elsarafTemplate.pages.buyer-registration');
Route::view('/buyers', 'front.elsarafTemplate.pages.buyers');
Route::view('/careers', 'front.elsarafTemplate.pages.careers');
Route::view('/community', 'front.elsarafTemplate.pages.community');
Route::view('/conditions', 'front.elsarafTemplate.pages.conditions');
Route::view('/contact-us', 'front.elsarafTemplate.pages.contact-us');
Route::view('/electronic_business', 'front.elsarafTemplate.pages.electronic_business');
Route::view('/high_quality', 'front.elsarafTemplate.pages.high_quality');
Route::view('/institutions', 'front.elsarafTemplate.pages.institutions');
Route::view('/learn-more', 'front.elsarafTemplate.pages.learn-more');
Route::view('/marketing', 'front.elsarafTemplate.pages.marketing');
Route::view('/media', 'front.elsarafTemplate.pages.media');
Route::view('/points', 'front.elsarafTemplate.pages.points');
Route::view('/privacy', 'front.elsarafTemplate.pages.privacy');
Route::view('/resources', 'front.elsarafTemplate.pages.resources');
Route::view('/seller-registration', 'front.elsarafTemplate.pages.seller-registration');
Route::view('/seller', 'front.elsarafTemplate.pages.seller');
Route::view('/sellers', 'front.elsarafTemplate.pages.sellers');
Route::view('/third-merge', 'front.elsarafTemplate.pages.third-merge');
Route::view('/merging', 'front.elsarafTemplate.pages.merging');
Route::view('/investors', 'front.elsarafTemplate.pages.investors');
Route::view('/elsarafHeader', 'front.elsarafTemplate.partials.header.header');
Route::view('/elsarafHeader', 'front.elsarafTemplate.partials.header.header');
Route::view('/elsarafFooter', 'front.elsarafTemplate.partials.footer.footer');

Route::view('/home_seller_tabs' ,'front.elsarafTemplate.home_seller_tabs');
Route::view('/home_buyer_tabs' ,'front.elsarafTemplate.home_buyer_tabs');
Route::view('/home_buyer_seller_content' ,'front.elsarafTemplate.home_buyer_seller_content');
Route::view('/home_seller_content' ,'front.elsarafTemplate.home_seller_content');
Route::view('/home_buyer_content' ,'front.elsarafTemplate.home_buyer_content');
Route::view('/home_mobile_content' ,'front.elsarafTemplate.home_mobile_content');
Route::view('/common_seller_content' ,'front.elsarafTemplate.common_seller_content');
