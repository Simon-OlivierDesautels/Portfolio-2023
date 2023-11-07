<?php

$skills_arr = [
    ["url" => "#", "name" => "JavaScript"],
    ["url" => "#", "name" => "NodeJS"],
    ["url" => "#", "name" => "Wordpress"],
    ["url" => "#", "name" => "PHP"],
];

?>
<section class="stack-skills-exp">
    <div class="stack__title">
        <img src="#" alt="#">
        <h2>Skills and experiences</h2>
    </div>
    <div>
        <ul>
            <?php foreach ($skills_arr as $key => $skill) { ?>
                <li>
                    <img src="<?= $skill["url"] ?>" alt="#">
                    <p><?= $skill["name"] ?></p>
                </li>
            <?php } ?>
        </ul>

        <div class="exp-list">
            <div class="exp-list__exp">
                <p class="exp-list__year">Septembre 2023</p>
                <div>
                    <p>Full-stack developer</p>
                    <a href="https://reactif.ca/">Réactif</a>
                </div>
            </div>
            <div class="exp-list__exp">
                <p class="exp-list__year">January 2023</p>
                <div>
                    <p>Front-end developer</p>
                    <a href="https://agencerubik.com/">Agence rubik</a>
                </div>
            </div>
            <div class="exp-list__exp">
                <p class="exp-list__year">June 2023</p>
                <div>
                    <p>Diploma in multimedia integration</p>
                    <a href="https://www.cegepmontpetit.ca/" target="_blank">Édouard montpetit college</a>
                </div>
            </div>
            <div class="exp-list__exp">
                <p class="exp-list__year">August 2022</p>
                <div>
                    <p>Programmer and graphic designer</p>
                    <a href="https://www.bleuetdesign.com/en" target="_blank">Bleuet design</a>
                </div>
            </div>
        </div>
    </div>
</section>