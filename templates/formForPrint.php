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
                padding-top: 50px;
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
                    <div>
                        <input type="checkbox" id="other" value="other" <?= $photo === "emailPhoto" ? "checked" : ""?>>
                        <label class="label__text top-margin-3mm" for="3d">ds-st@ds-lab.ru</label>
                    </div>
                    <div class="d-flex align-items-end text-nowrap">
                        <div>
                            <input type="checkbox" id="other" value="other" <?= $photo !== "emailPhoto" ? "checked" : ""?>>
                            <label class="label__text top-margin-3mm other-left-m" for="3d">Другое</label>
                        </div>
                        <div class="ms-3 mt-2 mb-2 w-100 under__line-second"><?= $messagePhoto?></div>
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
                            <p class="text__under top-margin-4mm">Количество</p>
                            <div class="ms-3 mt-0 mb-1 under__line-second under__line-second-print">asd</div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end me-5">
                            <p class="text__under top-margin-4mm">Диаметр</p>
                            <div class="ms-3 mt-0 mb-1 under__line-second under__line-second-print">asd</div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end me-5">
                            <p class="text__under top-margin-4mm">Длина</p>
                            <div class="ms-3 mt-0 mb-1 under__line-second under__line-second-print">asd</div>
                        </div>
                    </div>
                    <h3 class="group__title top-margin-4mm">8. Временные коронки</br> (немедленное протезирование)</h3>
                    <div class="d-flex text-nowrap align-items-end">
                        <p class="text__under top-margin-4mm">Цвет</p>
                        <div class="ms-3 mt-0 mb-1 under__line-second">asd</div>
                    </div>
                    <h2 class="order_title text-uppercase mt-5">комментарии к работе:</h2>
                </div>
                <div class="col ms-3">
                    <h3 class="group__title mt-4">7. Дополнительные шаблоны</h3>
                    <div>
                        <input type="checkbox" id="other" value="other">
                        <label class="label__text top-margin-4mm print-margin-label7" for="3d">Для редуцирования костной ткани</label>
                    </div>
                    <div>
                        <input type="checkbox" id="other" value="other">
                        <label class="label__text top-margin-4mm print-margin-label7" for="3d">Позиционер для временных коронок</label>
                    </div>
                    <div>
                        <input type="checkbox" id="other" value="other">
                        <label class="label__text top-margin-4mm print-margin-label7" for="3d">Шаблон-Ложка-Прикус</label>
                    </div>
                    <div class="">
                        <img class="top-margin-3mm ms-5 teeth-img2" src="/assets/schema@2x.png" alt="">
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