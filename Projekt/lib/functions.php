<?php
function printRow(int $numOfRows, string $mainText, string $secondText): string
{
    $html = "";
    for ($i = 0; $i < $numOfRows; $i++) {
        $html .= '<div class="row">
        <div class="col-50">
          <h2>'.$mainText.'</h2>
        </div>
        <div class="col-50">
          '.$secondText.'
        </div>
      </div>';
    }

    return $html;
}

function getMenu(int $type): void
{
    $headerMenu = [
        "Home" => "index.php",
        "About Us" => "about.php",
        "Pages" => "page-404.php",
        "Kontakt" => "contact.php",
    ];
    $printMenu = "";

    if($type === 1) {
        foreach ($headerMenu as $menuName => $menuUrl) {
            $printMenu .= '<li><a href="'.$menuUrl.'">'.$menuName.'</a></li>';
        }
    } else {
        foreach ($headerMenu as $menuName => $menuUrl) {
            $printMenu .= '<li><a href="'.$menuUrl.'">'.$menuName.'</a></li>';
        }
    }

    echo $printMenu;
}

function getQnA(int $numberOfValues): void
{
    $qna = [];

    for ($i = 1; $i <= $numberOfValues; $i++) {
        $qna[] = [
            "q" => "Otázka " . $i,
            "a" => "Odpoved " . $i
        ];
    }

    $numberOfQnA = count($qna);
    $index = 0;

    while ($numberOfQnA > 0) {
        echo '<div class="accordion">
        <div class="question">'.$qna[$index]['q'].'</div>
        <div class="answer">'.$qna[$index]['a'].'</div>
      </div>';

        $index += 1;
        $numberOfQnA -= 1;
    }
}