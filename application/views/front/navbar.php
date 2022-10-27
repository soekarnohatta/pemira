<!--
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" style="font-weight: bold" href="<?php echo site_url('home') ?>">E-Voting</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><div id="clock"></div></a>
                </li>
                
                <?php if ($this->session->userdata('logged')) :
                    $signOut = site_url('user/userauth/logout');
                    echo '<li class="nav-item active"><a class="nav-link" style="" href="' . $signOut . '"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>'
                    ?>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>
-->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img alt="logo" height="50" src="/assets/img/logo-pus.png" href="/">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><div id="clock"></div></a>
                </li>
        
                <?php if ($this->session->userdata('logged')) :
                    $signOut = site_url('user/userauth/logout');
                    echo '<li class="nav-item active"><a class="nav-link" style="" href="' . $signOut . '"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>'
                    ?>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation -->