<html>
    <header>
        <title>User Profile</title>
        <!-- import bootstrap and other libs -->
        <?php 
            include "./inc/header.php"
        ?>
    </header>
    <body>
        <div class="container-fullwidth">
            <!-- Slika profila ime in rank in točke -->
            <div class="green-background">
                <div class="custom-row profile-header">
                    <div class="col">
                        <img class="profile-image" src="./inc/images/profile.png" alt="profile.pic"  />
                    </div>
                    <div class="col center-ver-hor">
                        <div style="text-align: left;">
                            <span class="header2">Benjamin</span>
                            <p>
                                <span class="grayedOut">Rang 13</span>
                            </p>
                        </div>
                    </div>
                    <div class="col center-ver-hor" style="text-align: center;">
                        <span class="header1">75</span>
                    </div>
                </div>
            </div>

            <!-- Meseci content -->
            <div class="content-card">
                <!-- mesec div -->
                <div class="list-item row">
                    <div class="col" style="padding-left: 5%; padding-top: 2.5%;">
                        <p>
                            <span class="header3">Mesec</span><br/>
                            <span class="grayedOut-minor">Rang 24 - 66 points</span>
                        </p>
                    </div>
                    <div class="col" style="padding-top: 2.5%">
                        <button class="details-button">Details</button>
                    </div>
                </div>

                <div class="list-item row">
                    <div class="col" style="padding-left: 5%; padding-top: 2.5%;">
                        <p>
                            <span class="header3">Mesec</span><br/>
                            <span class="grayedOut-minor">Rang 24 - 66 points <i class="fa fa-trash" aria-hidden="true"></i></span>
                        </p>
                    </div>
                    <div class="col" style="padding-top: 2.5%">
                        <button class="details-button">Details</button>
                    </div>
                </div>


                <div class="list-item row">
                    <div class="col" style="padding-left: 5%; padding-top: 2.5%;">
                        <p>
                            <span class="header3">Mesec</span><br/>
                            <span class="grayedOut-minor">Rang 24 - 66 points</span>
                        </p>
                    </div>
                    <div class="col" style="padding-top: 2.5%">
                        <button class="details-button">Details</button>
                    </div>
                </div>

                <div class="list-item row">
                    <div class="col" style="padding-left: 5%; padding-top: 2.5%;">
                        <p>
                            <span class="header3">Mesec</span><br/>
                            <span class="grayedOut-minor">Rang 24 - 66 points</span>
                        </p>
                    </div>
                    <div class="col" style="padding-top: 2.5%">
                        <button class="details-button">Details</button>
                    </div>
                </div>

                <hr class="green-break">
                
                    <div class="custom-row">

                        <!-- stevio odlozenih smeti -->
                        <div class="col center-icons">
                            <span class="profile-icon"><i class="fa fa-trash fa-10x" aria-hidden="true"></i></span><br/>
                            <span class="header3">160</span>
                        </div>

                        <!-- stevilo porabljenih ur -->
                        <div class="col center-icons">
                            <span class="profile-icon"><i class="fa fa-clock-o fa-10x" aria-hidden="true"></i></span><br/>
                            <span class="header3">240h</span>
                        </div>

                        <!-- Datum zadnje odelezitve -->
                        <div class="col center-icons">
                            <span class="profile-icon"><i class="fa fa-calendar-o fa-10x" aria-hidden="true"></i></span><br/>
                            <span class="header3">20.11.2020</span>
                        </div>
                    </div>

            </div>

            <!-- toolbar -->
            <div class="bottom-toolbar">
                <div class="custom-row">
                    <!-- first icon -->
                    <div class="col center-icons">
                        <span class="toolbar-icon"><i class="fa fa-trash fa-10x" aria-hidden="true"></i></span>
                    </div>

                    <!-- first icon -->
                    <div class="col center-icons">
                        <span class="toolbar-icon"><i class="fa fa-trash fa-10x" aria-hidden="true"></i></span>
                    </div>

                    <!-- first icon -->
                    <div class="col center-icons">
                        <span class="toolbar-icon"><i class="fa fa-trash fa-10x" aria-hidden="true"></i></span>
                    </div>
                    
                    <!-- first icon -->
                    <div class="col center-icons">
                        <span class="toolbar-icon"><i class="fa fa-trash fa-10x" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>