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
            * {
                -webkit-print-color-adjust: exact !important;
            }

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

            .under__line-green-text {
                margin-top: 50px;
                padding-bottom: -1mm;
                border-bottom: 1px solid #00af00;
                width: 100%;
                font-size: 3mm;
            }
            .under__line-green-down {
                margin-top: 50px;
                padding-bottom: 0.25mm;
                border-bottom: 1px solid #00af00;
                width: 100%;
                font-size: 3mm;
            }


            .under__line-green {
                margin-top: 6mm;
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
                width: 70mm;
                height: 40mm;
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

            .td__input {
                margin: 0;
                padding: 0;
            }

            .tooth__image {
                width: 70mm;
                height: 50mm;
            }

            .tooth__mark:before {
                width: 2.5mm;
                height: 2.5mm;
            }
            .tooth-link__mark:before {
                width: 2mm;
                height: 2mm;
            }
            .tooth:nth-child(1) .tooth-link__mark, .tooth:nth-child(2) .tooth-link__mark, .tooth:nth-child(3) .tooth-link__mark {
                top: -0.5rem;
                left: 5mm;
            }

            .tooth:nth-child(1) {
                top: 79%;
                left: -1%;
                width: 2rem;
                height: 2rem;
            }

            .tooth:nth-child(2) {
                top: 65%;
                left: 0.5mm;
                width: 2rem;
                height: 2rem;
            }

            .tooth:nth-child(3) {
                top: 49%;
                left: 1.5%;
                width: 2.2rem;
                height: 2.2rem;
            }

            .tooth:nth-child(4) {
                top: 37%;
                left: 4%;
                width: 2rem;
                height: 1.5rem;
            }

            .tooth:nth-child(5) {
                top: 26%;
                left: 6%;
                width: 2rem;
                height: 1.7rem;
            }

            .tooth:nth-child(6) {
                top: 16%;
                left: 10%;
                width: 1.8rem;
                height: 1.7rem;
            }

            .tooth:nth-child(7) {
                top: 10.5%;
                left: 14%;
                width: 1.7rem;
                height: 1.7rem;
            }

            .tooth:nth-child(8) {
                top: 7.9%;
                left: 18.5%;
                width: 1.9rem;
                height: 1.7rem;
            }

            .tooth:nth-child(9) {
                top: 7.9%;
                left: 24%;
                width: 1.9rem;
                height: 1.7rem;
            }

            .tooth:nth-child(10) {
                top: 10.9%;
                left: 30%;
                width: 1.7rem;
                height: 1.6rem;
            }

            .tooth:nth-child(11) {
                top: 15.9%;
                left: 34%;
                width: 1.8rem;
                height: 1.7rem;
            }

            .tooth:nth-child(12) {
                top: 25.9%;
                left: 36%;
                width: 2rem;
                height: 1.7rem;
            }

            .tooth:nth-child(13) {
                top: 36.5%;
                left: 38%;
                width: 2rem;
                height: 1.7rem;
            }

            .tooth:nth-child(14) {
                top: 47.5%;
                left: 38.5%;
                width: 2.6rem;
                height: 2.7rem;
            }

            .tooth:nth-child(15) {
                top: 64%;
                left: 41%;
                width: 2.2rem;
                height: 2.2rem;
            }

            .tooth:nth-child(16) {
                top: 79%;
                left: 43%;
                width: 2rem;
                height: 2rem;
            }

            .tooth:nth-child(17) {
                top: 15.2%;
                left: 90.5%;
                width: 2rem;
                height: 2.2rem;
            }

            .tooth:nth-child(18) {
                top: 30.2%;
                left: 87.5%;
                width: 2.5rem;
                height: 2.4rem;
            }

            .tooth:nth-child(19) {
                top: 46.2%;
                left: 85%;
                width: 2.5rem;
                height: 2.4rem;
            }

            .tooth:nth-child(20) {
                top: 61.2%;
                left: 84.5%;
                width: 2rem;
                height: 1.7rem;
            }

            .tooth:nth-child(21) {
                top: 71.8%;
                left: 83%;
                width: 1.8rem;
                height: 1.5rem;
            }

            .tooth:nth-child(22) {
                top: 78.8%;
                left: 81%;
                width: 1.3rem;
                height: 1.5rem;
            }

            .tooth:nth-child(23) {
                top: 82.8%;
                left: 77%;
                width: 1.3rem;
                height: 1.5rem;
            }

            .tooth:nth-child(24) {
                top: 83.5%;
                left: 73%;
                width: 1.3rem;
                height: 1.5rem;
            }

            .tooth:nth-child(25) {
                top: 83.8%;
                left: 69%;
                width: 1.3rem;
                height: 1.5rem;
            }

            .tooth:nth-child(26) {
                top: 83.8%;
                left: 65%;
                width: 1.3rem;
                height: 1.5rem;
            }

            .tooth:nth-child(27) {
                top: 79.8%;
                left: 61.5%;
                width: 1.3rem;
                height: 1.5rem;
            }

            .tooth:nth-child(28) {
                top: 71.8%;
                left: 57%;
                width: 1.7rem;
                height: 1.5rem;
            }

            .tooth:nth-child(29) {
                top: 61.8%;
                left: 54%;
                width: 1.9rem;
                height: 1.7rem;
            }

            .tooth:nth-child(30) {
                top: 45.8%;
                left: 51%;
                width: 2.5rem;
                height: 2.7rem;
            }

            .tooth:nth-child(31) {
                top: 29.8%;
                left: 49%;
                width: 2.3rem;
                height: 2.7rem;
            }

            .tooth:nth-child(32) {
                top: 14.8%;
                left: 48%;
                width: 2rem;
                height: 2.5rem;
            }

            .tooth:nth-child(3) .tooth-link__mark {
                bottom: 3%;
                left: 55%;
            }
            .tooth:nth-child(4) .tooth-link__mark {
                top: -0.3rem;
                left: 55%;
            }
            .tooth:nth-child(5) .tooth-link__mark {
                top: 0.1rem;
                left: 56%;
            }
            .tooth:nth-child(6) .tooth-link__mark {
                top: 0.65rem;
                left: 47%;
            }
            .tooth:nth-child(7) .tooth-link__mark {
                top: 1rem;
                left: 45%;
            }
            .tooth:nth-child(8) .tooth-link__mark {
                top: 1.1rem;
                left: 33%;
            }
            .tooth:nth-child(9) .tooth-link__mark {
                top: 1.2rem;
                left: 16%;
            }
            .tooth:nth-child(10) .tooth-link__mark {
                top: 1.15rem;
                left: -7%;
            }
            .tooth:nth-child(11) .tooth-link__mark {
                top: 1rem;
                left: -25%;
            }
            .tooth:nth-child(12) .tooth-link__mark {
                top: 0.9rem;
                left: -15%;
            }
            .tooth:nth-child(13) .tooth-link__mark {
                top: 1rem;
                left: -19%;
            }
            .tooth:nth-child(14) .tooth-link__mark {
                top: 1.6rem;
                left: -15%;
            }
            .tooth:nth-child(15) .tooth-link__mark {
                top: 1.3rem;
                left: -20%;
            }


            .tooth:nth-child(17) .tooth-link__mark {
                top: 0.8rem;
                left: -0.8rem;
            }
            .tooth:nth-child(18) .tooth-link__mark {
                top: 0.8rem;
                left: -0.8rem;
            }
            .tooth:nth-child(19) .tooth-link__mark {
                top: 0.9rem;
                left: -0.7rem;
            }
            .tooth:nth-child(20) .tooth-link__mark {
                top: 0.25rem;
                left: -0.8rem;
            }
            .tooth:nth-child(21) .tooth-link__mark {
                top: -0.25rem;
                left: -0.85rem;
            }
            .tooth:nth-child(22) .tooth-link__mark {
                top: -0.6rem;
                left: -0.9rem;
            }
            .tooth:nth-child(23) .tooth-link__mark {
                top: -0.9rem;
                left: -0.7rem;
            }
            .tooth:nth-child(24) .tooth-link__mark {
                top: -0.9rem;
                left: -0.5rem;
            }
            .tooth:nth-child(25) .tooth-link__mark {
                top: -1rem;
                left: -0.4rem;
            }
            .tooth:nth-child(26) .tooth-link__mark {
                top: -1.3rem;
                left: -0.2rem;
            }
            .tooth:nth-child(27) .tooth-link__mark {
                top: -1.3rem;
                left: 0;
            }
            .tooth:nth-child(28) .tooth-link__mark {
                top: -1rem;
                left: 0.5rem;
            }
            .tooth:nth-child(29) .tooth-link__mark {
                top: -1rem;
                left: 0.7rem;
            }
            .tooth:nth-child(30) .tooth-link__mark {
                top: -1.1rem;
                left: 0.9rem;
            }
            .tooth:nth-child(31) .tooth-link__mark {
                top: -1rem;
                left: 1rem;
            }

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 text-nowrap p-0">
                <h2 class="order_title">заказ наряд на выполнение хирургического шаблона</h2>
            </div>
            <div class="col mt-3 d-flex justify-content-end">
                <img class="logo-img" src="../assets/logo.png" alt="">
            </div>
        </div>

        <div class="order__group-first">
            <div class="row">
                <div class="mt-2 col-6 p-0">
                    <h3 class="group__title ">1. Общие данные:</h3>
                    <div>
                        <div class="text__under text__bold-green">
                            Стоматологическая
                        </div>
                        <div class="d-flex align-items-end">
                            <div class="text__under text__bold-green">
                                клиника:
                            </div>
                            <div class="ms-3 mt-0 mb-1 under__line-green"><?=$generalNameOfHospital?></div>
                        </div>

                        <div class="d-flex align-items-end">
                            <div class="text__under text__bold-green mt-1">Дата:
                            </div>
                            <div class="ms-3 mt-0 mb-1 under__line-green"><?=$generalDate?></div>
                        </div>
                        <div class="d-flex align-items-end">
                            <div class="text__under text__bold-green mt-1">
                                Врач:
                            </div>
                            <div class="ms-3 mt-0 mb-1 under__line-green"><?=$generalNameDoctor?></div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end">
                            <div class="text__under text__bold-green mt-1">
                                ФИО пациента:
                            </div>
                            <div class="ms-3 mt-0 mb-1 under__line-green"><?=$generalFIOPatient?></div>
                        </div>

                        <div class="d-flex text-nowrap align-items-end">
                            <div class="me-6">
                                <label class="label__text text__bold-green ms-0 mt-1" for="M">М</label>
                                <input class="me-3" type="checkbox" id="M" value="Под пилотное сверлени" <?= $sex === "M" ? "checked" : ""?>>

                                <label class="label__text text__bold-green" for="pilot">Ж</label>
                                <input type="checkbox" id="W" value="Под пилотное сверлени" <?= $sex === "W" ? "checked" : ""?>>
                            </div>
                            <div class="ms-3 mt-0 mb-1 under__line-green"></div>
                        </div>
                    </div>
                </div>
                <div class="col ms-3 mt-2">
                    <div>
                        <h3 class="group__title">7. Цвет зубов - передняя группа</h3>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Верхняя треть</p>
                            <div class="ms-3 mt-0 under__line-third"><?= $toothColorFrontTop ?></div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Средняя треть</p>
                            <div class="ms-3 mt-0 under__line-third"><?= $toothColorFrontMiddle ?></div>
                        </div>
                        <div class="d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Нижняя треть</p>
                            <div class="ms-3 mt-0 under__line-third"> <?= $toothColorFrontBottom ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="order__group-third mt-3">
            <div class="row">
                <div class="col-6 p-0 m-0">
                    <div class="">
                        <h3 class="group__title mt-4">2. Виды работ:</h3>
                        <table class="order__form-table" id="">
                            <thead>
                            <tr>
                                <th class="text__under pt-0 pb-0 pe-1">Вид работы</th>
                                <th class="text__under pt-0 pb-0 pe-1">Кол-во</th>
                                <th class="text__under pt-0 pb-0 pe-1">Дата визита</th>
                                <th class="text__under pt-0 pb-0 pe-1">Время</th>
                            </tr>
                            </thead>
                            <tbody class="">
                            <?php foreach ($table as $array): ?>
                            <tr class="work__types">
                                <td class="pt-0 pb-0 pe-1"><input class="text__under td__input" type="text" name="tableType0" value="<?= $array[0]?>"></td>
                                <td class="pt-0 pb-0 pe-1"><input class="text__under td__input" type="text" name="tableNum0" value="<?= $array[1]?>"></td>
                                <td class="pt-0 pb-0 pe-1"><input class="text__under td__input" type="text" name="tableDate0" value="<?= $array[2]?>" ></td>
                                <td class="pt-0 pb-0 pe-1"><input class="text__under td__input" type="text" name="tableTime0" value="<?= $array[3]?>" placeholder="чч:мм"></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-5">
                        <h3 class="group__title mt-5 text-nowrap">3. Схема протезирования</h3>
                        <div class="tooth-schema">
                            <img src="../assets/schema@2x.png" alt="" class="tooth__image">
                            <div class="tooth-checkboxes">
                                <div class="tooth">
                                    <input type="checkbox" value="1" id="tooth-1" name="tooth[]" class="tooth__checkbox" <?= in_array("1", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-1" class="tooth__mark"></label>
                                    <input type="checkbox" value="1-2" id="tooth-link-1" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("1-2", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-1" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="2" id="tooth-2" name="tooth[]" class="tooth__checkbox" <?= in_array("2", $tooth ) ? "checked" : ""?>>
                                    <label for="tooth-2" class="tooth__mark"></label>
                                    <input type="checkbox" value="2-3" id="tooth-link-2" name="tooth_link[]" class="tooth__checkbox" <?= in_array("2-3", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-2" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="3" id="tooth-3" name="tooth[]" class="tooth__checkbox" <?= in_array("3", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-3" class="tooth__mark"></label>
                                    <input type="checkbox" value="3-4" id="tooth-link-3" name="tooth_link[]" class="tooth__checkbox" <?= in_array("3-4", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-3" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="4" id="tooth-4" name="tooth[]" class="tooth__checkbox"  <?= in_array("4", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-4" class="tooth__mark"></label>
                                    <input type="checkbox" value="4-5" id="tooth-link-4" name="tooth_link[]" class="tooth__checkbox" <?= in_array("4-5", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-4" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="5" id="tooth-5" name="tooth[]" class="tooth__checkbox" <?= in_array("5", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-5" class="tooth__mark"></label>
                                    <input type="checkbox" value="5-6" id="tooth-link-5" name="tooth_link[]" class="tooth__checkbox" <?= in_array("5-6", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-5" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="6" id="tooth-6" name="tooth[]" class="tooth__checkbox"  <?= in_array("6", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-6" class="tooth__mark"></label>
                                    <input type="checkbox" value="6-7" id="tooth-link-6" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("6-7", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-6" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="7" id="tooth-7" name="tooth[]" class="tooth__checkbox" <?= in_array("7", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-7" class="tooth__mark"></label>
                                    <input type="checkbox" value="7-8" id="tooth-link-7" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("7-8", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-7" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="8" id="tooth-8" name="tooth[]" class="tooth__checkbox"  <?= in_array("8", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-8" class="tooth__mark"></label>
                                    <input type="checkbox" value="8-9" id="tooth-link-8" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("8-9", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-8" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="9" id="tooth-9" name="tooth[]" class="tooth__checkbox" <?= in_array("9", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-9" class="tooth__mark"></label>
                                    <input type="checkbox" value="9-10" id="tooth-link-9" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("9-10", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-9" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="10" id="tooth-10" name="tooth[]" class="tooth__checkbox" <?= in_array("10", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-10" class="tooth__mark"></label>
                                    <input type="checkbox" value="10-11" id="tooth-link-10" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("10-11", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-10" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="11" id="tooth-11" name="tooth[]" class="tooth__checkbox"  <?= in_array("11", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-11" class="tooth__mark"></label>
                                    <input type="checkbox" value="11-12" id="tooth-link-11" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("11-12", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-11" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="12" id="tooth-12" name="tooth[]" class="tooth__checkbox"  <?= in_array("12", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-12" class="tooth__mark"></label>
                                    <input type="checkbox" value="12-13" id="tooth-link-12" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("12-13", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-12" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="13" id="tooth-13" name="tooth[]" class="tooth__checkbox" <?= in_array("13", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-13" class="tooth__mark"></label>
                                    <input type="checkbox" value="13-14" id="tooth-link-13" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("13-14", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-13" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="14" id="tooth-14" name="tooth[]" class="tooth__checkbox" <?= in_array("14", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-14" class="tooth__mark"></label>
                                    <input type="checkbox" value="14-15" id="tooth-link-14" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("14-15", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-14" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="15" id="tooth-15" name="tooth[]" class="tooth__checkbox"  <?= in_array("15", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-15" class="tooth__mark"></label>
                                    <input type="checkbox" value="15-16" id="tooth-link-15" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("15-16", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-15" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="16" id="tooth-16" name="tooth[]" class="tooth__checkbox" <?= in_array("16", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-16" class="tooth__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="17" id="tooth-17" name="tooth[]" class="tooth__checkbox"  <?= in_array("17", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-17" class="tooth__mark"></label>
                                    <input type="checkbox" value="17-18" id="tooth-link-17" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("17-18", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-17" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="18" id="tooth-18" name="tooth[]" class="tooth__checkbox" <?= in_array("18", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-18" class="tooth__mark"></label>
                                    <input type="checkbox" value="18-19" id="tooth-link-18" name="tooth_link[]" class="tooth__checkbox" <?= in_array("18-19", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-18" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="19" id="tooth-19" name="tooth[]" class="tooth__checkbox"  <?= in_array("19", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-19" class="tooth__mark"></label>
                                    <input type="checkbox" value="19-20" id="tooth-link-19" name="tooth_link[]" class="tooth__checkbox" <?= in_array("19-20", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-19" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="20" id="tooth-20" name="tooth[]" class="tooth__checkbox"  <?= in_array("20", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-20" class="tooth__mark"></label>
                                    <input type="checkbox" value="20-21" id="tooth-link-20" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("20-21", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-20" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="21" id="tooth-21" name="tooth[]" class="tooth__checkbox"  <?= in_array("21", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-21" class="tooth__mark"></label>
                                    <input type="checkbox" value="21-22" id="tooth-link-21" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("21-22", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-21" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="22" id="tooth-22" name="tooth[]" class="tooth__checkbox" <?= in_array("22", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-22" class="tooth__mark"></label>
                                    <input type="checkbox" value="22-23" id="tooth-link-22" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("22-23", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-22" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="23" id="tooth-23" name="tooth[]" class="tooth__checkbox" <?= in_array("23", $tooth) ? "checked" : ""?> >
                                    <label for="tooth-23" class="tooth__mark"></label>
                                    <input type="checkbox" value="23-24" id="tooth-link-23" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("23-24", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-23" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="24" id="tooth-24" name="tooth[]" class="tooth__checkbox"  <?= in_array("24", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-24" class="tooth__mark"></label>
                                    <input type="checkbox" value="24-25" id="tooth-link-24" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("24-25", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-24" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="25" id="tooth-25" name="tooth[]" class="tooth__checkbox"  <?= in_array("25", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-25" class="tooth__mark"></label>
                                    <input type="checkbox" value="25-26" id="tooth-link-25" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("25-26", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-25" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="26" id="tooth-26" name="tooth[]" class="tooth__checkbox"  <?= in_array("26", $tooth) ? "checked" : ""?>>
                                    <label for="tooth-26" class="tooth__mark"></label>
                                    <input type="checkbox" value="26-27" id="tooth-link-26" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("26-27", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-26" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="27" id="tooth-27" name="tooth[]" class="tooth__checkbox"  <?= in_array("27", $tooth)  ? "checked" : ""?>>
                                    <label for="tooth-27" class="tooth__mark"></label>
                                    <input type="checkbox" value="27-28" id="tooth-link-27" name="tooth_link[]" class="tooth__checkbox" <?= in_array("27-28", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-27" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="28" id="tooth-28" name="tooth[]" class="tooth__checkbox"  <?= in_array("28", $tooth)  ? "checked" : ""?>>
                                    <label for="tooth-28" class="tooth__mark"></label>
                                    <input type="checkbox" value="28-29" id="tooth-link-28" name="tooth_link[]" class="tooth__checkbox" <?= in_array("28-29", $tooth_link) ? "checked" : ""?> >
                                    <label for="tooth-link-28" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="29" id="tooth-29" name="tooth[]" class="tooth__checkbox"  <?= in_array("29", $tooth)  ? "checked" : ""?>>
                                    <label for="tooth-29" class="tooth__mark"></label>
                                    <input type="checkbox" value="29-30" id="tooth-link-29" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("29-30", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-29" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="30" id="tooth-30" name="tooth[]" class="tooth__checkbox" <?= in_array("30", $tooth)  ? "checked" : ""?> >
                                    <label for="tooth-30" class="tooth__mark"></label>
                                    <input type="checkbox" value="30-31" id="tooth-link-30" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("30-31", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-30" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="31" id="tooth-31" name="tooth[]" class="tooth__checkbox" <?= in_array("31", $tooth ) ? "checked" : ""?> >
                                    <label for="tooth-31" class="tooth__mark"></label>
                                    <input type="checkbox" value="31-32" id="tooth-link-31" name="tooth_link[]" class="tooth__checkbox"  <?= in_array("31-32", $tooth_link) ? "checked" : ""?>>
                                    <label for="tooth-link-31" class="tooth-link__mark"></label>
                                </div>
                                <div class="tooth">
                                    <input type="checkbox" value="32" id="tooth-32" name="tooth[]" class="tooth__checkbox" <?= in_array("32", $tooth)  ? "checked" : ""?> >
                                    <label for="tooth-32" class="tooth__mark"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="group__title mt-5"> 4. Оттиски</h3>
                    <div>
                        <input type="checkbox" id="impression_analog" value="analog" <?= $impressions === "analog" ? "checked" : ""?>>
                        <label class="label__text top-margin-3mm me-5" for="impression">Аналоговые</label>
                        <input type="checkbox" id="impression_digital" value="digital" <?= $impressions === "digital" ? "checked" : ""?>>
                        <label class="label__text top-margin-3mm" for="impression_digital">Цифровые</label>
                    </div>


                    <h3 class="group__title mt-5">5. Материал:</h3>
                    <div class="row">
                        <div class="col-4">
                            <input type="checkbox" <?= in_array("Co-Cr", $materials) ? "checked" : ""?>>
                            <label class="label__text me-1 ms-0 top-margin-3mm" for="">Co-Cr</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox" <?= in_array("Zr-O2", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="">ZrO²</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="checkbox" <?= in_array("Prettau", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="">Prettau</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox" <?= in_array("E-max", $materials) ? "checked" : ""?>>
                            <label class="label__text me-1 ms-0 top-margin-3mm" for="">E-max</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox"  <?= in_array("Ti", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="">Ti</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="checkbox" <?= in_array("Акрил/РММА", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="">Акрил/РММА</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox" <?= in_array("Композит", $materials) ? "checked" : ""?>>
                            <label class="label__text me-1 ms-0 top-margin-3mm" for="">Композит</label>
                        </div>
                        <div class="col-4">
                            <input type="checkbox" <?= in_array("Acry Free", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="">Acry Free</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="checkbox" <?= in_array("Нейлон", $materials) ? "checked" : ""?>>
                            <label class="label__text ms-0 top-margin-3mm" for="">Нейлон</label>
                        </div>
                    </div>
                    <h3 class="group__title mt-5">6. Цвет зубов - боковая группа</h3>
                    <div class="d-flex text-nowrap align-items-end">
                        <p class="text__under top-margin-4mm">Цвет</p>
                        <div class="ms-3 mt-0 under__line-third"><?= $sideGroup?></div>
                    </div>
                </div>

                <div class="col ms-4 pe-0">
                    <h3 class="group__title mt-4">8. Режущий край</h3>
                    <div class="row">
                        <div class="col-4">
                            <input type="radio" name="sharpEdge" id="sharpEdgeWhite" value="white" <?= $sharpEdge === "white" ? "checked" : ""?>>
                            <label class="label__text" for="sharpEdgeWhite">Беловатый</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="radio"  name="sharpEdge" id="sharpEdgeBlue" value="blue" <?= $sharpEdge === "blue" ? "checked" : ""?>>
                            <label class="label__text" for="sharpEdgeBlue">Голубоватый</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="radio" name="sharpEdge" id="sharpEdgeGray" value="gray" <?= $sharpEdge === "gray" ? "checked" : ""?>>
                            <label class="label__text" for="sharpEdgeGray">Беловатый</label>
                        </div>
                        <div class="col d-flex text-nowrap align-items-end">
                            <p class="text__under top-margin-4mm">Свое значение</p>
                            <div class="ms-3 mt-0 under__line-third"><?= $sharpEdgeOther?></div>
                        </div>
                    </div>

                    <h3 class="group__title mt-5">9. Цвет культи</h3>
                    <div class="d-flex text-nowrap align-items-end">
                        <p class="text__under top-margin-4mm">Цвет</p>
                        <div class="ms-3 mt-0 under__line-third"><?= $cult?></div>
                    </div>
                    <h3 class="group__title mt-5">10. Цвет зубов - передняя группа</h3>
                    <div class="row ms-3">
                        <div class="col-3">
                            <input type="radio" name="shapeTooth" id="shape__first" value="triangle" <?= $shapeTooth === "triangle" ? "checked" : ""?>>
                            <label for="shape__first" class="shape shape-item" style="background-image: url('../assets/shape-1.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeTooth" id="shape__second" value="circle" <?= $shapeTooth === "circle" ? "checked" : ""?>>
                            <label for="shape__second" class="shape shape-item" style="background-image: url('../assets/shape-2.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeTooth" id="shape__third" value="square" <?= $shapeTooth === "square" ? "checked" : ""?>>
                            <label for="shape__third" class="shape shape-item shape-item" style="background-image: url('../assets/shape-3.svg')"></label>
                        </div>
                    </div>
                    <h3 class="group__title mt-5">11. Форма промывного пространства</h3>
                    <div class="row ms-3">
                        <div class="col-3">
                            <input type="radio" name="shapeProm" id="shape__prom-first" value="prom-1" <?= $shapeProm === "prom-1" ? "checked" : ""?>>
                            <label for="shape__prom-first" class="shape shape__prom-item" style="background-image: url('../assets/shape-prom-1.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeProm" id="shape__prom-second" value="prom-2" <?= $shapeProm === "prom-2" ? "checked" : ""?>>
                            <label for="shape__prom-second" class="shape shape__prom-item" style="background-image: url('../assets/shape-prom-2.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeProm" id="shape__prom-third" value="prom-3"<?= $shapeProm === "prom-3" ? "checked" : ""?>>
                            <label for="shape__prom-third" class="shape shape__prom-item" style="background-image: url('../assets/shape-prom-3.svg')"></label>
                        </div>
                    </div>
                    <h3 class="group__title mt-5">12. Контур формирования десеневого края</h3>
                    <div class="row ms-3">
                        <div class="col-3">
                            <input type="radio" name="shapeDes" id="shape__des-first" value="des-1" <?= $shapeDes === "des-1" ? "checked" : "" ?>>
                            <label for="shape__des-first" class="shape shape__des-item" style="background-image: url('../assets/shape-des-1.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeDes" id="shape__des-second" value="des-2" <?= $shapeDes === "des-2" ? "checked" : "" ?>>
                            <label for="shape__des-second" class="shape shape__des-item" style="background-image: url('../assets/shape-des-2.svg')"></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="shapeDes" id="shape__des-third" value="des-3" <?= $shapeDes === "des-3" ? "checked" : "" ?>>
                            <label for="shape__des-third" class="shape shape__des-item" style="background-image: url('../assets/shape-des-3.svg')"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order__group-fourth">
            <h2 class="order_title text-uppercase mt-5">комментарии к работе:</h2>
            <p class="mt-3 under__line-green under__line-green-down"><span class="under__line-green-text"><?= $comments?></span></p>
        </div>
    </div>
</body>
</html>