<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/formForPrint.css">
    <link rel="stylesheet" href="/styles/fonts.css">
    <title></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="order_title">заказ наряд на выполнение хирургического шаблона</h2>
            </div>
            <div class="col mt-3">
                <img src="/assets/logo.png" alt="" width="400" height="80">
            </div>
        </div>

        <div class="order__group-first">
            <h3 class="group__title">1. Схема протезирования:</h3>
            <div class="row">
                <div class="mt-3 col-3">
                    <div>
                        <input type="checkbox" id="fullProtocol" value="Полный протокол">
                        <label class="label__text" for="fullProtocol">Полный протокол</label>

                        <p class="mt-3 text__under">Название хирургического<br> набора</p>

                        <p class="under__line-first"></p>
                        <p class="under__line-first"></p>
                    </div>
                    <div class="mt-5">
                        <h3 class="group__title">2. Система имплантов</h3>

                        <p class="under__line-second">asdasd</p>
                        <p class="under__line-second"></p>
                    </div>
                </div>
                <div class="mt-3 col-3">
                    <div>
                        <input type="checkbox" id="pilot" value="Под пилотное сверлени">
                        <label class="label__text" for="pilot">Под пилотное сверление</label>

                        <div class="d-flex align-items-end">
                            <p class="mt-4 text__under text-nowrap">Диаметр сверла</p>
                            <div class="ms-3 mt-0 mb-2 under__line-second"></div>
                        </div>
                        <div class="d-flex align-items-end">
                            <p class="mt-5 text__under text-nowrap">Длина сверла</p>
                            <div class="ms-3 mt-0 mb-2 under__line-second"></div>
                        </div>
                        <div class="d-flex align-items-end">
                            <p class="mt-5 text__under text-nowrap">Стопор</p>
                            <div class="ms-3 mt-0 mb-2 under__line-second"></div>
                        </div>
                    </div>
                </div>
                <div class="col mt-3 ms-3">
                    <div>
                        <p class="text__under text__bold-green">
                            Стоматологическая
                        </p>
                        <div class="d-flex">
                            <p class="text__under text__bold-green">
                                клиника:
                            </p>
                            <div class="ms-3 mt-0 mb-2 under__line-green">asd</div>
                        </div>

                        <div class="d-flex align-items-end">
                            <p class="text__under text__bold-green mt-3">
                                Дата:
                            </p>
                            <div class="ms-3 mt-0 mb-2 under__line-green">asd</div>
                        </div>
                        <div class="d-flex align-items-end">
                            <p class="text__under text__bold-green mt-3">
                                Врач:
                            </p>
                            <div class="ms-3 mt-0 mb-2 under__line-green">asd</div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under text__bold-green mt-3">
                                ФИО пациента:
                            </p>
                            <div class="ms-3 mt-0 mb-2 under__line-green">asd</div>
                        </div>

                        <div class="d-flex text-nowrap align-items-end">
                            <div class="me-6">
                                <label class="label__text text__bold-green ms-0 mt-3" for="M">М</label>
                                <input class="me-3" type="checkbox" id="M" value="Под пилотное сверлени">

                                <label class="label__text text__bold-green" for="pilot">Ж</label>
                                <input type="checkbox" id="W" value="Под пилотное сверлени">
                            </div>
                            <div class="ms-3 mt-0 mb-2 under__line-green">asd</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="order__group-second">
            <div class="row">
                <div class="col-6">
                    <h3 class="group__title mt-4">3. Схема имплантации</h3>
                    <img class="mt-3" src="/assets/schema@2x.png" alt="">
                </div>
                <div class="ms-5 col">
                    <h3 class="group__title mt-4"> 4. Расстановка и согласование</h3>
                    <div>
                        <input type="checkbox" id="3d" value="3D Diagnosis">
                        <label class="label__text mt-3" for="3d">3D Diagnosis</label>
                    </div>
                    <div>
                        <input type="checkbox" id="blueSky" value="BlueSky">
                        <label class="label__text mt-3" for="3d">Blue Sky</label>
                    </div>
                    <div>
                        <input type="checkbox" id="reaiGuide" value="ReaiGuide">
                        <label class="label__text mt-3" for="reaiGuide">Reai Guide</label>
                    </div>
                    <div class="d-flex align-items-end text-nowrap">
                        <div>
                            <input type="checkbox" id="other" value="other">
                            <label class="label__text mt-3 ms-4" for="3d">Другое</label>
                        </div>
                        <div class="ms-3 mt-2 mb-2 w-100 under__line-second">asd</div>
                    </div>


                    <h3 class="group__title mt-4"> 5. КЛКТ отправлено на:</h3>
                    <div>
                        <input type="checkbox" id="other" value="other">
                        <label class="label__text mt-3" for="3d">ds-st@ds-lab.ru</label>
                    </div>
                    <div class="d-flex align-items-end text-nowrap">
                        <div>
                            <input type="checkbox" id="other" value="other">
                            <label class="label__text mt-3 ms-4" for="3d">Другое</label>
                        </div>
                        <div class="ms-3 mt-2 mb-2 w-100 under__line-second">asd</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="order__group-third mt-3">
            <div class="row">
                <div class="col-5 p-0 m-0">
                    <h3 class="group__title mt-4">6. Хирургические пины</h3>
                    <div>
                        <div class="d-flex text-nowrap align-items-end me-5">
                            <p class="text__under mt-4">Количество</p>
                            <div class="ms-3 mt-0 mb-2 under__line-second">asd</div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end me-5">
                            <p class="text__under mt-4">Диаметр</p>
                            <div class="ms-3 mt-0 mb-2 under__line-second">asd</div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end me-5">
                            <p class="text__under mt-4">Длина</p>
                            <div class="ms-3 mt-0 mb-2 under__line-second">asd</div>
                        </div>
                    </div>
                    <h3 class="group__title mt-4">8. Временные коронки</br> (немедленное протезирование)</h3>
                    <div class="d-flex text-nowrap align-items-end">
                        <p class="text__under mt-4">Цвет</p>
                        <div class="ms-3 mt-0 mb-2 under__line-second">asd</div>
                    </div>
                    <h2 class="order_title text-uppercase mt-5">комментарии к работе:</h2>
                </div>
                <div class="col ms-3">
                    <h3 class="group__title mt-4">7. Дополнительные шаблоны</h3>
                    <div>
                        <input type="checkbox" id="other" value="other">
                        <label class="label__text mt-4" for="3d">Для редуцирования костной ткани</label>
                    </div>
                    <div>
                        <input type="checkbox" id="other" value="other">
                        <label class="label__text mt-4" for="3d">Позиционер для временных коронок</label>
                    </div>
                    <div>
                        <input type="checkbox" id="other" value="other">
                        <label class="label__text mt-4" for="3d">Шаблон-Ложка-Прикус</label>
                    </div>
                    <div class="">
                        <img class="mt-3 ms-5" src="/assets/schema@2x.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="order__group-fourth">
            <p class="under__line-green mt-3"></p>
            <p class="under__line-green"></p>
            <p class="under__line-green"></p>
            <p class="under__line-green"></p>
            <p class="under__line-green"></p>
            <p class="under__line-green"></p>
            <p class="under__line-green"></p>
            <p class="under__line-green"></p>
            <div class="d-flex justify-content-center">
                <h2 class="me-5  mt-3">8 800 700-77-09 </h2>
                <h2 class="mt-3 order_title"><a class="text-reset" href="#">www.ds-lab.ru</a></h2>
            </div>
        </div>
    </div>
</body>
</html>