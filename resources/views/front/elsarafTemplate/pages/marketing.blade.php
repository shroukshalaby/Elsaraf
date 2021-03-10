@extends('front.elsarafTemplate.layouts.app')

@section('content')
            <div class="main-content pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2>شبكة الصراف</h2>
                            <p>يمكنك معرفة جميع الأماكن التي تستخدم خدمات نظام الصراف و الأقرب إليك </p>
                            <p>فقط ادخل جميع البيانات بطريقة صحيحة واستمتع بآلاف البائعين حولك!</p>
                        </div>
                        
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-3">
                                <label>البلد</label>
                                <select class="custom-select custom-select-sm">
                                    <option>أختر البلد</option>
                                    <option>مصر</option>
                                    <option>الإمارات</option>
                                    <option>السعودية</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label>المنطقة</label>
                                <select class="custom-select custom-select-sm">
                                    <option>الجيزة</option>
                                    <option>القاهرة</option>
                                    <option>عين شمس</option>
                                    <option>مدينة نصر</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label>النشاط التجاري</label>
                                <select class="custom-select custom-select-sm">
                                    <option>رياضي</option>
                                    <option>لعب أطفال</option>
                                    <option>أحذية</option>
                                    <option>ملابس</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="row my-5">
                        <div class="col-12" id="jar">
                            <div class="row content mb-3">
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content mb-3">
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content mb-3">
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content mb-3">
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content mb-3">
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content mb-3">
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content mb-3">
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content mb-3">
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content mb-3">
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content mb-3">
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row align-items-center bg-white borde-dark mx-0">
                                        <div class="col-3 px-0">
                                            <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 py-2">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h3>Zara</h3>
                                            <p class="mb-0">أزياء</p>
                                            <a type="button" data-toggle="modal" data-target="moreDetails">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav>
                            <ul class="pagination justify-content-center pagination-sm"></ul>
                        </nav>
                    </div>
                </div>
            </div>


    @endsection
    @push('scripts')
    <script>
            
        function getPageList(totalPages, page, maxLength) {
            if (maxLength < 5) throw "maxLength must be at least 5";
        
            function range(start, end) {
                return Array.from(Array(end - start + 1), (_, i) => i + start);
            }
        
            var sideWidth = maxLength < 9 ? 1 : 2;
            var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
            var rightWidth = (maxLength - sideWidth * 2 - 2) >> 1;
            if (totalPages <= maxLength) {
                // no breaks in list
                return range(1, totalPages);
            }
            if (page <= maxLength - sideWidth - 1 - rightWidth) {
            // no break on left of page
                return range(1, maxLength - sideWidth - 1)
                .concat([0])
                .concat(range(totalPages - sideWidth + 1, totalPages));
            }
            if (page >= totalPages - sideWidth - 1 - rightWidth) {
            // no break on right of page
                return range(1, sideWidth)
                .concat([0])
                .concat(
                    range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages)
                );
            }
            // Breaks on both sides
            return range(1, sideWidth)
            .concat([0])
            .concat(range(page - leftWidth, page + rightWidth))
            .concat([0])
            .concat(range(totalPages - sideWidth + 1, totalPages));
        }
        
        $(function() {
            // Number of items and limits the number of items per page
            var numberOfItems = $("#jar .content").length;
            var limitPerPage = 5;
            // Total pages rounded upwards
            var totalPages = Math.ceil(numberOfItems / limitPerPage);
            // Number of buttons at the top, not counting prev/next,
            // but including the dotted buttons.
            // Must be at least 5:
            var paginationSize = 7;
            var currentPage;
        
            function showPage(whichPage) {
            if (whichPage < 1 || whichPage > totalPages) return false;
            currentPage = whichPage;
            $("#jar .content")
              .hide()
              .slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage)
              .show();
            // Replace the navigation items (not prev/next):
            $(".pagination li").slice(1, -1).remove();
            getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                    $("<li>")
                    .addClass(
                      "page-item " +
                        (item ? "current-page " : "") +
                        (item === currentPage ? "active " : "")
                    )
                    .append(
                      $("<a>")
                        .addClass("page-link")
                        .attr({
                          href: "javascript:void(0)"
                        })
                        .text(item || "...")
                    )
                    .insertBefore("#next-page");
                });
                return true;
            }
        
            // Include the prev/next buttons:
            $(".pagination").append(
                $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
                  $("<a>")
                    .addClass("page-link")
                    .attr({
                      href: "javascript:void(0)"
                    })
                    .text("Prev")
                ),
                $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
                  $("<a>")
                    .addClass("page-link")
                    .attr({
                      href: "javascript:void(0)"
                    })
                    .text("Next")
                )
            );
          // Show the page links
          $("#jar").show();
          showPage(1);
        
          // Use event delegation, as these items are recreated later
          $(
            document
          ).on("click", ".pagination li.current-page:not(.active)", function() {
            return showPage(+$(this).text());
          });
          $("#next-page").on("click", function() {
            return showPage(currentPage + 1);
          });
        
          $("#previous-page").on("click", function() {
            return showPage(currentPage - 1);
          });
        //   $(".pagination").on("click", function() {
        //     $("html,body").animate({ scrollTop: 0 }, 0);
        //   });
        });
        
                </script>

    @endpush