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
    <style media="print">
        @media print {
            .container {
                margin: 0 auto;
                padding: 0;
                width: 210mm;
                height: 297mm;
            }

            .logo-img {
                width: 40mm;
                height: 8mm;
            }

            .order_title {
                font-weight: bold;
                color: #00af00;
                display: inline-block;
                font-size: 3.5mm;
                margin-top: 10px;
            }

            .group__title {
                color: #000;
                font-size: 3mm;
            }

            .label__text {
                margin-left: 0;
                color: #000;
                font-size: 2mm;
            }

            input[type="checkbox"] {
                height: 2mm;
                width: 2mm;
                color: #000;
            }

            .text__under {
                font-size: 2mm;
                color: #000;
                margin-bottom: 0;
            }

            .text__bold-green {
                color: #00af00;
                font-weight: bold;
                font-size: 3mm;
            }

            .under__line-first {
                margin-top: 6mm;
                border-bottom: 1px solid #000;
                width: 40mm;
                font-size: 3mm;
            }

            .me-6 {
                margin-right: 10%;
            }

            .under__line-second {
                margin-top: 6mm;
                border-bottom: 1px solid #000;
                width: 64mm;
                font-size: 3mm;
            }

            .under__line-second .under__line-second-print {
                padding-top: 6mm;
                border-bottom: 1px solid #000;
                width: 64mm;
                font-size: 3mm;
            }


            .under__line-green {
                margin-top: 5mm;
                border-bottom: 1px solid #00af00;
                width: 100%;
                font-size: 3mm;
            }


            .border__green {
                border: 2px solid #00af00;
            }

            .bottom__border-write {
                border-bottom: 1px solid #00af00;
            }


            .top-margin {
                margin-top: 5mm;
            }

            .top-margin-4mm {
                margin-top: 4mm;
            }

            .phone_number {
                font-size: 3mm;
            }

            .other-left-m {
                margin-left: 0;
            }

            .teeth-img1 {
                width: 80mm;
                height: 45mm;
            }

            .teeth-img2 {
                width: 63mm;
                height: 30mm;
            }

            .checkbox-underpilot-wrapping {
                text-wrap: none;
            }

            .top-margin-3mm {
                margin-top: 3mm;
            }

            .print-margin-label7 {
                margin-top: 3mm;
            }

            .width-print-lines1 {
                width: 30mm;
            }

            .correct-margin-lines1 {
                margin-top: 10mm;
            }

            .under__line-third {
                margin-top: 6mm;
                border-bottom: 1px solid #000;
                width: 45mm;
                font-size: 3mm;
            }

            input[type="radio"] {
                height:2mm;
                width:2mm;
            }

            .shape__des-item, .shape__prom-item, .shape-item {
                width: 4mm;
                height: 4mm;
                cursor: pointer;
                display: block;
            }

            .shape {
                background-position: center center;
                background-repeat: no-repeat;
                background-size: contain;
            }

            .margin-top-print0 {
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 text-nowrap">
                <h2 class="order_title">заказ наряд на выполнение хирургического шаблона</h2>
            </div>
            <div class="col mt-3 d-flex justify-content-end">
                <img class="logo-img" src="/assets/logo.png" alt="">
            </div>
        </div>

        <div class="order__group-first">
            <h3 class="group__title">1. Виды работ:</h3>
            <div class="row">
                <div class="mt-6 col-3">

                </div>
                <div class="col-3">

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
                            <div class="ms-3 mt-0 mb-2 under__line-green"><?=$generalNameOfHospital?></div>
                        </div>

                        <div class="d-flex align-items-end">
                            <p class="text__under text__bold-green mt-3">
                                Дата:
                            </p>
                            <div class="ms-3 mt-0 mb-2 under__line-green"><?=$generalDate?></div>
                        </div>
                        <div class="d-flex align-items-end">
                            <p class="text__under text__bold-green mt-3">
                                Врач:
                            </p>
                            <div class="ms-3 mt-0 mb-2 under__line-green"><?=$generalNameDoctor?></div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under text__bold-green mt-3">
                                ФИО пациента:
                            </p>
                            <div class="ms-3 mt-0 mb-2 under__line-green"><?=$generalFIOPatient?></div>
                        </div>

                        <div class="d-flex text-nowrap align-items-end">
                            <div class="me-6">
                                <label class="label__text text__bold-green ms-0 mt-3" for="M">М</label>
                                <input class="me-3" type="checkbox" id="M" value="Под пилотное сверлени" <?= $sex === "M" ? "checked" : ""?>>

                                <label class="label__text text__bold-green" for="pilot">Ж</label>
                                <input type="checkbox" id="W" value="Под пилотное сверлени" <?= $sex === "W" ? "checked" : ""?>>
                            </div>
                            <div class="ms-3 mt-0 mb-2 under__line-green"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="order__group-second">
            <div class="row">
                <div class="col-6">
                    <h3 class="group__title mt-4">3. Схема протезирования</h3>
                    <img class="teeth-img1" src="/assets/schema@2x.png" alt="">
                </div>
                <div class="ms-5 col">
                    <h3 class="group__title mt-4"> 4. Оттиски</h3>
                    <div>
                        <input type="checkbox" id="3d" value="3D Diagnosis">
                        <label class="label__text top-margin-3mm" for="3d">Аналоговые</label>
                    </div>
                    <div>
                        <input type="checkbox" id="blueSky" value="BlueSky">
                        <label class="label__text top-margin-3mm" for="3d">Цифровые</label>
                    </div>


                    <h3 class="group__title mt-4">5. Материал:</h3>
                    <div class="row">
                        <div class="col-4">
                            <input type="checkbox">
                            <label class="label__text me-1 ms-0 top-margin-3mm" for="">Co-Cr</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox">
                            <label class="label__text ms-0 top-margin-3mm" for="">ZrO²</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="checkbox">
                            <label class="label__text ms-0 top-margin-3mm" for="">Prettau</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox">
                            <label class="label__text me-1 ms-0 top-margin-3mm" for="">E-max</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox">
                            <label class="label__text ms-0 top-margin-3mm" for="">Ti</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="checkbox">
                            <label class="label__text ms-0 top-margin-3mm" for="">Акрил/РММА</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox">
                            <label class="label__text me-1 ms-0 top-margin-3mm" for="">Композит</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox">
                            <label class="label__text ms-0 top-margin-3mm" for="">Acry Free</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="checkbox">
                            <label class="label__text ms-0 top-margin-3mm" for="">Нейлон</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="order__group-third mt-3">
            <div class="row">
                <div class="col-5 p-0 m-0">
                    <h3 class="group__title mt-4">6. Цвет зубов - боковая группа</h3>
                    <div class="d-flex text-nowrap align-items-end">
                        <p class="text__under top-margin-4mm">Цвет</p>
                        <div class="ms-3 mt-0 mb-1 under__line-second">asd</div>
                    </div>

                    <div>
                        <h3 class="group__title mt-4">7. Цвет зубов - передняя группа</h3>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Верхняя треть</p>
                            <div class="ms-3 mt-0 mb-1 under__line-third">asd</div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Средняя треть</p>
                            <div class="ms-3 mt-0 mb-1 under__line-third">asd</div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Нижняя треть</p>
                            <div class="ms-3 mt-0 mb-1 under__line-third">asd</div>
                        </div>
                    </div>

                    <h3 class="group__title top-margin-4mm">8. Режущий край</h3>
                    <div class="row">
                        <div class="col-4">
                            <input type="radio" name="sharpEdge" id="sharpEdgeWhite" value="white">
                            <label class="label__text" for="sharpEdgeWhite">Беловатый</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="radio"  name="sharpEdge" id="sharpEdgeBlue" value="blue">
                            <label class="label__text" for="sharpEdgeBlue">Голубоватый</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="radio" name="sharpEdge" id="sharpEdgeGray" value="gray">
                            <label class="label__text" for="sharpEdgeGray">Беловатый</label>
                        </div>
                        <div class="col d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Свое значение</p>
                            <div class="ms-3 mt-0 mb-1 under__line-third">asd</div>
                        </div>
                    </div>

                    <h3 class="group__title mt-4">9. Цвет культи</h3>
                    <div class="d-flex text-nowrap align-items-end">
                        <p class="text__under top-margin-4mm">Цвет</p>
                        <div class="ms-3 mt-0 mb-1 under__line-second under__line-second-print">asd</div>
                    </div>
                    <h2 class="order_title text-uppercase mt-5">комментарии к работе:</h2>
                </div>

                <div class="col-6 ms-4 pe-0">
                    <h3 class="group__title mt-3">10. Цвет зубов - передняя группа</h3>
                    <div class="row ms-3">
                        <div class="col-3">
                            <input type="radio" name="shapeTooth" id="shape__first" value="triangle">
                            <label for="shape__first" class="shape shape-item" style="background-image: url('../assets/shape-1.svg')"></label>
                        </div>
                        <div class="col-3 p-0">
                            <input type="radio" name="shapeTooth" id="shape__second" value="circle">
                            <label for="shape__second" class="shape shape-item" style="background-image: url('../assets/shape-2.svg')"></label>
                        </div>
                        <div class="col-3 p-0">
                            <input type="radio" name="shapeTooth" id="shape__third" value="square">
                            <label for="shape__third" class="shape shape-item shape-item" style="background-image: url('../assets/shape-3.svg')"></label>
                        </div>
                    </div>
                    <h3 class="group__title">11. Форма промывного пространства</h3>
                    <div class="row ms-3">
                        <div class="col-3">
                            <input type="radio" name="shapeProm" id="shape__prom-first" value="prom-1">
                            <label for="shape__prom-first" class="shape shape__prom-item" style="background-image: url('/assets/shape-prom-1.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeProm" id="shape__prom-second" value="prom-2">
                            <label for="shape__prom-second" class="shape shape__prom-item" style="background-image: url('/assets/shape-prom-2.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeProm" id="shape__prom-third" value="prom-3">
                            <label for="shape__prom-third" class="shape shape__prom-item" style="background-image: url('/assets/shape-prom-3.svg')"></label>
                        </div>
                    </div>
                    <h3 class="group__title">12. Контур формирования десеневого края</h3>
                    <div class="row ms-3">
                        <div class="col-3">
                            <input type="radio" name="shapeDes" id="shape__des-first" value="des-1">
                            <label for="shape__des-first" class="shape shape__des-item" style="background-image: url('/assets/shape-des-1.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeDes" id="shape__des-second" value="des-2">
                            <label for="shape__des-second" class="shape shape__des-item" style="background-image: url('/assets/shape-des-2.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeDes" id="shape__des-third" value="des-3">
                            <label for="shape__des-third" class="shape shape__des-item" style="background-image: url('/assets/shape-des-3.svg')"></label>
                        </div>
                    </div>
                    <h3 class="group__title">13. Фотографии</h3>
                    <div class="row">
                        <div class="col-6">
                            <input type="radio" name="photo" id="photo_email" value="emailPhoto">
                            <label for="photo_email" class="text__under mt-2">Отправлены на foto@ds-lab.ru</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="photo" id="photo_whatsapp" value="Отправлены на WhatsApp/Viber">
                            <label for="photo_whatsapp" class="text__under mt-2">Отправлены на WhatsApp/Viber</label>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <input type="radio" name="photo" id="photo_file" value="Прикреплены к форме">
                                <label for="photo_file" class="text__under mt-3">Прикреплены к форме</label>
                            </div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under">Другой вариант</p>
                            <div class="ms-3 mt-0 mb-1 under__line-second under__line-second-print">asd</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order__group-fourth">
            <p class="under__line-green mt-3"><?= $comments1?></p>
            <p class="under__line-green <?=$comments2 !== "" ? 'mt-3' : ''?>"><?= $comments2?></p>
            <p class="under__line-green <?=$comments3 !== "" ? 'mt-3' : ''?>"><?= $comments3?></p>
            <p class="under__line-green <?=$comments4 !== "" ? 'mt-3' : ''?>"><?= $comments4?></p>
            <p class="under__line-green <?=$comments5 !== "" ? 'mt-3' : ''?>"><?= $comments5?></p>
            <p class="under__line-green <?=$comments6 !== "" ? 'mt-3' : ''?>"><?= $comments6?></p>
            <p class="under__line-green <?=$comments7 !== "" ? 'mt-3' : ''?>"><?= $comments7?></p>
            <p class="under__line-green <?=$comments8 !== "" ? 'mt-3' : ''?>"><?= $comments8?></p>
        </div>
    </div>
</body>
</html>