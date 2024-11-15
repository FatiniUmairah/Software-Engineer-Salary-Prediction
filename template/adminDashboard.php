<?php

require_once('db/dbconn.php');
$query = "select * from company";
$result = mysqli_query($dbconn, $query);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Responsive Job Portal Website</title>
</head>

<body>
    <!-- sidebar-->
    <div class="sidebar">
        <h1 class="logo text-align:center">SES ADMIN PAGE</h1>
    </div>

    </div>

    <!--  main -->
    <div class="main">

        <div class="filter-wrapper">
            <h2>Recommendation</h2>
            <div class="filter">
                <button onclick="location.href='addCompany.php'" class="btn-filterc">Create New Job</button>
                <button onclick="location.href='audience.php'" class="btn-filters">Read Job Detail</button>
            </div>
            <div class="wrapper">
                <div class="card-center">
                    <table class="table table-bordered text-center">
                        <tr>
                            <th>Company Name</th>
                            <th>Company Address</th>
                            <th>Company Email</th>
                            <th>Company Phone Number</th>
                            <th>Job Vacancy</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <?php

                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <td><?php echo $row['COMPANY_NAME']; ?></td>
                                <td><?php echo $row['COMPANY_ADDRESS']; ?></td>
                                <td><?php echo $row['COMPANY_EMAIL']; ?></td>
                                <td><?php echo $row['COMPANY_PHONE']; ?></td>
                                <td><?php echo $row['JOB_POSITION']; ?></td>
                                <td><a href='updateCompany.php?name=<?php echo urlencode($row['COMPANY_NAME']); ?>' class="btn-filter">Update</td>
                                <td><a href='deleteCompany.php?name=<?php echo urlencode($row['COMPANY_NAME']); ?>' class="btn-filters">Delete</td>
                        </tr>
                    <?php
                            }

                    ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- right section: detail jobs-->
    <div class="detail">
        <ion-icon class="close-detail" name="close-outline"></ion-icon>
        <div class="detail-header">
            <img src="images/google.svg">
            <h2>Google</h2>
            <p>Data Science</p>
        </div>
        <hr class="divider">
        <div class="detail-desc">
            <div class="about">
                <h4>About Company</h4>
                <p>American multinational technology company focusing on artificial intelligence,online advertising,
                    search engine technology, cloud computing,computer software, quantum computing, e-commerce, and
                    consumer electronics.</p>
                <a href="https://en.wikipedia.org/wiki/Google">Read
                    More</a>
            </div>
            <hr class="divider">
            <div class="qualification">
                <h4>Qualification</h4>
                <ul>
                    <li>Master's degree in Statistics, Mathematics, Data Science,
                        Engineering, Physics, Economics,or a related quantitative field.</li>
                    <li>5 years of work experience with analysis applications (extracting insights, performing
                        statistical analysis, or solving business problems),
                        and coding (Python, R, SQL).</li>
                </ul>
            </div>
        </div>
        <hr class="divider">
    </div>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap');

        :root {
            --primaryColor: #4c50d3;
            --secondaryColor: #ffce00;
            --fontColor: #1e1e1e;
            --whiteColor: #fff;
            --greyColor: #e7e7e7;
            --darkGreyColor: #5f5f5f;
            --softPurple: #e7e8ff;
            --softBlue: #c3e1ff;
            --softYellow: #fff5cc;
            --softRed: #ffcbc8;
            --softPink: #fe92b6;
            --yellow: #ffee8e;
            --blue: #8bdaff;
            --purple: #c89bed;
            --darkBlue: #3e15f3e5;
            --darkPink: #dc1991;
            --darkPurple: #8a59a6;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            font-family: 'Lato', sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 40%;
            text-align: center;
            border-collapse: collapse;
            border-spacing: 0;
            border-radius: 12px 12px 0 0;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(32, 32, 32, .3);
        }

        th,
        td {
            padding: 12px 15px;
        }

        th {
            background: #4e44e1;
            color: #fafafa;
            font-family: 'Roboto', sans-serif;
        }

        td {
            font-family: 'Open Sans', sans-serif;
        }

        tr:nth-child(odd) {
            background-color: #eeeeee;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
        }

        .sidebar {
            width: 20%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: space-between;
            padding: 2rem;
            background-color: var(--primaryColor);
            color: var(--whiteColor);
            position: fixed;
            left: 0;
        }

        .logo {
            letter-spacing: 2;
        }

        .menus {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            padding: 1rem;
        }

        .menus a {
            display: flex;
            align-items: center;
            color: var(--whiteColor);
            text-decoration: none;
        }

        .menus ion-icon {
            margin-right: 0.5rem;
        }

        .menus a:hover {
            color: var(--secondaryColor);
        }



        .main {
            width: calc(100% - 20% - 25%);
            min-height: 100%;
            min-width: 300px;
            height: max-content;
            display: flex;
            flex-direction: column;
            padding: 2rem 2%;
            margin-left: 20%;
            background-color: var(--softPurple);
            z-index: 1
        }

        .main-header {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .menu-bar {
            background-color: var(--whiteColor);
            padding: 0.5rem;
            border-radius: 20px;
            display: none;
        }

        .search {
            width: 100%;
            display: flex;
            justify-content: space-between;
            border-radius: 20px;
            padding: 0.5rem 1rem;
            position: relative;
            background-color: var(--whiteColor);

        }

        .search input {
            width: 90%;
            border: none;
        }

        h1 {
            text-align: center;
        }

        .btn-search {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            padding: 0 5%;
            border: none;
            background-color: var(--primaryColor);
            color: var(--whiteColor);
            font-size: 18px;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            cursor: pointer;
        }

        .btn-search:hover {
            background-color: var(--secondaryColor);
            color: var(--fontColor);

        }

        .filter-wrapper {
            margin: 1rem 0;
            font-size: 14px;
        }

        .filter {
            display: flex;
            gap: 1rem;
            overflow-x: auto;
            margin: 0.5rem 0;

        }

        .btn-filter {
            min-width: 110px;
            padding: 0.5rem;
            border-radius: 20px;
            border: none;
            background-color: var(--softPink);
            cursor: pointer;
        }

        .btn-filterc {
            min-width: 110px;
            padding: 0.5rem;
            border-radius: 20px;
            border: none;
            background-color: var(--yellow);
            cursor: pointer;
        }

        .btn-filters {
            min-width: 110px;
            padding: 0.5rem;
            border-radius: 20px;
            border: none;
            background-color: var(--blue);
            cursor: pointer;
        }

        .btn-filterde {
            min-width: 110px;
            padding: 0.5rem;
            border-radius: 20px;
            border: none;
            background-color: var(--purple);
            cursor: pointer;
        }

        .btn-filter:hover {
            background-color: var(--darkPink);
            color: var(--whiteColor);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .btn-filterc:hover {
            background-color: var(--secondaryColor);
            color: var(--whiteColor);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .btn-filters:hover {
            background-color: var(--darkBlue);
            color: var(--whiteColor);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .btn-filterde:hover {
            background-color: var(--darkPurple);
            color: var(--whiteColor);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .sort {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 0.5rem;
        }

        .sort p {
            font-size: 14px;
        }

        .sort-list select {
            height: 1.5rem;
            border-radius: 20px;
            border: none;
            margin-top: 0 0.5rem;
        }

        .wrapper {
            width: 100%;
            display: flex;
            flex-direction: column;
            padding: 1rem 0;
            gap: 1rem;
            overflow-y: auto;
        }

        .card {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            align-items: flex-start;
            padding: 3%;
            margin: 0 1%;
            background-color: var(--whiteColor);
            line-height: 1.5;
            gap: 1.5rem;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            border-radius: 10px;
            cursor: pointer;
        }

        .card:hover {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }


        .card-left {
            width: 100%;
            min-width: 50px;
            display: flex;
            justify-content: center;
            border-radius: 20%;
        }

        .card-left img {
            width: 100%;
            height: auto;
            min-height: 60px;
            padding: 1rem;
        }

        .card-center {
            width: 100%;
        }

        .card-loc,
        .card-sub {
            font-size: 13px;
            color: var(--darkGreyColor);
        }

        .card-sub {
            display: flex;
            flex-wrap: wrap;
        }

        .card-sub p {
            display: flex;
            padding: 0 0.5rem 0 0;
            align-items: center;
        }

        .card-right {
            width: 100%;
        }

        .card-tag a {
            color: var(--fontColor);
            font-size: 13px;
        }

        .card-salary {
            padding: 0.5rem 0;
            color: var(--primaryColor);
        }

        .card-salary span {
            color: var(--fontColor);
            font-size: 13px;
        }

        .blue-bg {
            background-color: var(--softBlue);
        }

        .yellow-bg {
            background-color: var(--softYellow);
        }

        .red-bg {
            background-color: var(--softRed);
        }

        .purple-bg {
            background-color: var(--softPurple);
        }

        .detail {
            width: 25%;
            min-width: 250px;
            height: 100%;
            padding: 2rem;
            position: fixed;
            right: 0;
            background-color: var(--whiteColor);
            overflow: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .close-detail {
            display: none;
        }

        .detail-header {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .detail-header img {
            width: 50px;
            height: 50px;
        }

        .divider {
            width: 100%;
            height: 1px;
            background-color: var(--greyColor);
            border: none;
            margin: 1rem 0;
        }

        .detail-desc {
            line-height: 1.5;
        }

        .about a {
            margin: 0.5rem 0 0 0;
            color: var(--primaryColor);
            font-size: 14px;
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
        }

        .detail-btn {
            display: flex;
            gap: 1rem;
            margin: 1rem 0;
        }

        .btn-apply {
            background-color: var(--primaryColor);
            color: var(--whiteColor);
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
        }

        .btn-save {
            background-color: var(--secondaryColor);
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
        }

        .btn-apply:hover {
            border: 1px solid var(--primaryColor);
            background-color: transparent;
            color: var(--primaryColor);
        }

        .btn-save:hover {
            border: 1px solid var(--secondaryColor);
            background-color: transparent;
        }

        /* showing menu when click menubar*/
        .sidebar.active {
            display: flex;
            width: 220px;
            z-index: 100;
        }


        /* screen with max width 880px */

        @media screen and (max-width:880px) {
            .menu-bar {
                display: block;
            }

            .sidebar {
                display: none;
            }

            .main {
                width: calc(100% - 40%);
                margin-left: 0;
            }

            .detail {
                width: 40%;
            }
        }

        /* more small screen */
        @media screen and (max-width:700px) {
            .main {
                width: 100%;
            }

            .detail {
                display: none;
            }

            /* adding click on card to show detail */

            .detail.active {
                display: block;
                width: 100%;
                z-index: 100;
            }

            /* adding button close */
            .detail.active .close-detail {
                display: block;
                cursor: pointer;
            }

        }
    </style>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <script>
        $(".card").on("click", function() {
            $(".detail").addClass("active");
        });

        $(".close-detail").on("click", function() {
            $(".detail").removeClass("active")
        });

        $(".menu-bar").on("click", function() {
            $(".sidebar").addClass("active")
        });

        $(".logo").on("click", function() {
            $(".sidebar").removeClass("active")
        });
    </script>
</body>

</html>