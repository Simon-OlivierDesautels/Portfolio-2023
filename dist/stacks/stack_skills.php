<?php

$svgDirectory = 'skills';
$skills_arr = [];

if (is_dir($svgDirectory)) {
    if ($dh = opendir($svgDirectory)) {
        while (($file = readdir($dh)) !== false) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'svg') {
                $svgPath = $svgDirectory . '/' . $file;
                $svgContent = file_get_contents($svgPath);

                $skills_arr[] = [
                    "order" => substr(pathinfo($file, PATHINFO_FILENAME), 0, strpos(pathinfo($file, PATHINFO_FILENAME), "_")),
                    "svg" => $svgContent,
                    "name" => pathinfo($file, PATHINFO_FILENAME)
                ];
            }
        }
        closedir($dh);
    }
}


$exp_arr = [
    [
        "title" => "Full-stack developer",
        "url" => "https://reactif.ca/",
        "url_name" => "Réactif",
        "date" => "Septembre 2023",
    ],
    [
        "title" => "Front-end developer",
        "url" => "https://agencerubik.com/",
        "url_name" => "Agence rubik",
        "date" => "January 2023",
    ],
    [
        "title" => "Programmer and graphic designer",
        "url" => "https://www.bleuetdesign.com/en",
        "url_name" => "Bleuet Design",
        "date" => "August 2022",
    ],
];

?>
<section class="stack stack-skills">
    <div class="wrapper">
        <div class="stack__title">
            <div class="img">
                <img src="images/sparkles.png" alt="sparkles">
            </div>
            <h2>Skills and experiences</h2>
        </div>
        <div class="stack-skills__skills-exp">
            <ul>
                <?php foreach ($skills_arr as $key => $skill) { ?>
                    <li data-aos="fade-up" data-aos-delay="<?= $key * 100 + 100 ?>" style="order:<?= $skill["order"] ?>">
                        <?= $skill["svg"] ?>
                        <p><?= substr($skill["name"], strpos($skill["name"], "_") + 1) ?></p>
                    </li>
                <?php } ?>
            </ul>

            <div class="exp-list">
                <?php foreach ($exp_arr as $key => $exp) { ?>
                    <p class="exp-list__year" data-aos="fade-left" data-aos-delay="<?= $key * 200 + ((count($skills_arr) * 100) + 500) ?>"><?= $exp["date"] ?></p>
                    <div class="exp-list__exp" data-aos="fade-left" data-aos-delay="<?= $key * 200 + ((count($skills_arr) * 100) + 500) ?>">
                        <p><?= $exp["title"] ?></p>
                        <a href="<?= $exp["url"] ?>" target="_blank"><?= $exp["url_name"] ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>