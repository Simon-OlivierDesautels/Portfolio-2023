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
                    "svg" => $svgContent,
                    "name" => pathinfo($file, PATHINFO_FILENAME)
                ];
            }
        }
        closedir($dh);
    }
}

?>
<section class="stack-skills">
    <div class="wrapper">
        <div class="stack__title">
            <img src="#" alt="#">
            <h2>Skills and experiences</h2>
        </div>
        <div class="stack-skills__skills-exp">
            <ul>
                <?php foreach ($skills_arr as $key => $skill) { ?>
                    <li>
                        <?= $skill["svg"] ?> 
                        <p><?= $skill["name"] ?></p>
                    </li>
                <?php } ?>
            </ul>

            <div class="exp-list">
                <p class="exp-list__year">Septembre 2023</p>
                <div class="exp-list__exp">
                    <p>Full-stack developer</p>
                    <a href="https://reactif.ca/">Réactif</a>
                </div>
                <p class="exp-list__year">January 2023</p>
                <div class="exp-list__exp">
                    <p>Front-end developer</p>
                    <a href="https://agencerubik.com/">Agence rubik</a>
                </div>
                <p class="exp-list__year">June 2023</p>
                <div class="exp-list__exp">
                    <p>Diploma in multimedia integration</p>
                    <a href="https://www.cegepmontpetit.ca/" target="_blank">Édouard montpetit college</a>
                </div>
                <p class="exp-list__year">August 2022</p>
                <div class="exp-list__exp">
                    <p>Programmer and graphic designer</p>
                    <a href="https://www.bleuetdesign.com/en" target="_blank">Bleuet design</a>
                </div>
            </div>
        </div>
    </div>
</section>