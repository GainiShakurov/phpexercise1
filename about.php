<style>

    .main {
        display: flex;
        width: 50%;
        min-width: 500px;
        margin: 0 auto;
        font-family: Arial, serif;
        font-size: 16px;
        padding: 15px 0;
    }

    .keys {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex: 2;
        font-weight: bold;
    }

    .values {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex: 3;
    }

</style>
<?php

$userData = [
    "Имя" => "Гайни",
    "Возраст" => 30,
    "Электронная почта" => "гайни@почта.ру",
    "Город" => "Павлодар",
    "Описание" => "Отличный человек, еще и скромняга"
];

$string = '';

foreach($userData as $key => $value) {
    $string .= "<div class='main'>
                    <div class='keys'>$key</div>
                    <div class='values'>$value</div>
                </div>";
}

echo $string;