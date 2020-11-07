<html>
    <header>
        <title>ActionOverView</title>
        <!-- import bootstrap and other libs -->
        <?php 
            include "./inc/header.php"
        ?>
    </header>
    <body>
        <div class="container-fullwidth">

            <!-- Slika profila ime in rank in točke -->
            <div class="green-background">
                <div class="custom-row content-header">
                    <div class="col center-icons">
                        <span class="header2">Cleaning Actions</span>
                    </div>
                </div>
            </div>

            <!-- Meseci content -->
            <div class="content-card-higher">
                <!-- mesec div -->
                <div class="list-item row">
                    <div class="col" style="padding-left: 5%; padding-top: 3%;">
                        <p>
                            <span class="header3">Action 1</span><br/>
                            <span class="grayedOut-minor">20.11.2020, 9.00-16.00</span>
                        </p>
                    </div>
                    <div class="col" style="padding-top: 4%">
                        <button class="join-button">Join</button>
                    </div>
                </div>

                <div class="list-item row">
                    <div class="col" style="padding-left: 5%; padding-top: 3%;">
                        <p>
                            <span class="header3">Action 1</span><br/>
                            <span class="grayedOut-minor">20.11.2020, 9.00-16.00</span>
                        </p>
                    </div>
                    <div class="col" style="padding-top: 4%">
                        <button class="join-button">Join</button>
                    </div>
                </div>


                <div class="list-item row">
                    <div class="col" style="padding-left: 5%; padding-top: 3%;">
                        <p>
                            <span class="header3">Action 1</span><br/>
                            <span class="grayedOut-minor">20.11.2020, 9.00-16.00</span>
                        </p>
                    </div>
                    <div class="col" style="padding-top: 4%">
                        <button class="join-button">Join</button>
                    </div>
                </div>

                <div class="list-item row">
                    <div class="col" style="padding-left: 5%; padding-top: 3%;">
                        <p>
                            <span class="header3">Action 1</span><br/>
                            <span class="grayedOut-minor">20.11.2020, 9.00-16.00</span>
                        </p>
                    </div>
                    <div class="col" style="padding-top: 4%">
                        <button class="join-button">Join</button>
                    </div>
                </div>

            </div>

            <!-- toolbar -->
            <div class="bottom-toolbar">
                <div class="custom-row">
                    <!-- first icon -->
                    <div class="col center-icons">
                        <button id="user-profile-button" class="toolbar-button">
                            <span class="toolbar-icon"><i class="fa fa-user fa-10x" aria-hidden="true"></i></span>
                        </button>
                    </div>

                    <!-- second icon -->
                    <div class="col center-icons">
                        <button id="all-actions-button" class="toolbar-button">
                            <span class="toolbar-icon"><i class="fa fa-list-ul fa-10x" aria-hidden="true"></i></span>
                        </button>
                    </div>

                    <!-- third icon -->
                    <div class="col center-icons">
                        <button id="new-action-button" class="toolbar-button">
                            <span class="toolbar-icon"><i class="fa fa-plus fa-10x" aria-hidden="true"></i></span>
                        </button>
                    </div>
                    
                    <!-- fourth icon -->
                    <div class="col center-icons">
                        <button id="leaderboards-button" class="toolbar-button">
                            <span class="toolbar-icon"><i class="fa fa-trophy fa-10x" aria-hidden="true"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>