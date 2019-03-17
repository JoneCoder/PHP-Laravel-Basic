<div class="row">
    <div class="col-md-12 text-center text-primary">
        <h3>Website Themes</h3>
    </div><hr>
</div>

<div class="row">
    <div class="col-md-12 margin-auto">
        <div class="row">
            <div class="col-md-4 hovereffect theme text-center">
                <a href="validate/theme_change.php?theme=1" class="cm-overlay">
                    <img src="themes/default.jpg" class="theme-img" alt="default.jpg">
                    <div class="overlay">
                        <h4>Default</h4>
                    </div>
                </a>
                <h3>
                    <span class="badge badge-primary active-badge">
                        <?php
                        if ($theme == 1){
                            echo 'Active';
                        }
                        ?>
                    </span>
                </h3>
            </div>

            <div class="col-md-4 hovereffect theme text-center">
                <a href="validate/theme_change.php?theme=2" class="cm-overlay">
                    <img src="themes/night_mode.jpg" class="theme-img" alt="default.jpg">
                    <div class="overlay">
                        <h4>Night Mode</h4>
                    </div>
                </a>
                <h3>
                    <span class="badge badge-primary active-badge">
                        <?php
                        if ($theme == 2){
                            echo 'Active';
                        }
                        ?>
                    </span>
                </h3>
            </div>

        </div>
    </div>
</div>