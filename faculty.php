<!DOCTYPE html>
<html lang="en">

<?php include("head.php") ?>

<body class="preloader-visible" data-barba="wrapper">

    <style>
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            border-radius: 5px 5px 0 0;
        }

        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        .tab button:hover {
            background-color: #ddd;
        }

        .tab button.active {
            background-color: #002047;
            color: white;
        }

        .tabcontent {
            display: none;
            padding: 20px;
            border: 1px solid #ccc;
            border-top: none;
            height: 500px;
            border-radius: 0 0 5px 5px;
            animation: fadeEffect 1s;
            overflow-x: auto;
            overflow-y: scroll;
        }

        @keyframes fadeEffect {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .faculty-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .faculty-table th,
        .faculty-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .faculty-table th {
            background-color: #002047;
            color: white;
        }

        .faculty-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .faculty-table tr:hover {
            background-color: #ddd;
        }

        div#Administrative h3 {
            text-align: center;
        }

        div#Teaching h3 {
            text-align: center;
        }

        div#NonTeaching h3 {
            text-align: center;
        }
    </style>
    <div class="preloader js-preloader">
        <div class="preloader__bg"></div>
    </div>

    <main class="main-content">
        <?php include("new-header.php") ?>

        <div class="content-wrapper js-content-wrapper pt-50">
            <!-- <section class="pt-80 pb-80 md:pt-60 md:pb-60 bg-purple-6 mt-80">
                <div class="container">
                    <div class="row y-gap-20 justify-between items-center">
                        <div class="col-xl-6 col-lg-6">
                            <h2 class="text-30 lh-15 text-white">Faculty</h2>
                            <p class="text-white mt-10">Explore details about our faculty members.</p>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="layout-pt-md layout-pb-lg pt-40 pb-30" id="faculty-section">
                <div class="container">
                    <h2 class="text-30 lh-15 text-white">Faculty</h2>
                    <div class="tab">
                        <button class="tablinks active" onclick="openTab(event, 'Teaching')">TD</button>
                        <button class="tablinks" onclick="openTab(event, 'NonTeaching')">NTD</button>
                        <button class="tablinks" onclick="openTab(event, 'Administrative')">LIBRARY</button>
                    </div>

                    <div id="Teaching" class="tabcontent" style="display: block;">
                        <h3>Teaching Staff Particulars</h3>
                        <table class="faculty-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Teacher Name</th>
                                    <th>Father/Husband Name</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Qualification</th>
                                    <th>Date of Appointment</th>
                                    <th>Teaching Experience</th>
                                    <th>Trained/Untrained</th>
                                    <th>Gross Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Manoranjitham V</td>
                                    <td>Viswanathan</td>
                                    <td>Female</td>
                                    <td>01-07-1994</td>
                                    <td>M.A.,B.Ed.,</td>
                                    <td>22-05-2024</td>
                                    <td>1 year</td>
                                    <td>TRAINED</td>
                                    <td>15000/-</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Deepika C</td>
                                    <td>Chitrakumar</td>
                                    <td>Female</td>
                                    <td>11-06-1995</td>
                                    <td>B.A.,B.Ed.,</td>
                                    <td>20-05-2024</td>
                                    <td>1 Year</td>
                                    <td>TRAINED</td>
                                    <td>15000/-</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Chitra M</td>
                                    <td>Moorthy</td>
                                    <td>Female</td>
                                    <td>14-04-1998</td>
                                    <td>B.A.,B.Ed.,</td>
                                    <td>03-06-2019</td>
                                    <td>5 Year</td>
                                    <td>TRAINED</td>
                                    <td>17000/-</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Shobhana M</td>
                                    <td>Mani</td>
                                    <td>Female</td>
                                    <td>05-06-1996</td>
                                    <td>M.Sc., B.Ed.,</td>
                                    <td>10-06-2019</td>
                                    <td>3 Year</td>
                                    <td>TRAINED</td>
                                    <td>16000/-</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sanjana K</td>
                                    <td>Kumar</td>
                                    <td>Female</td>
                                    <td>28-03-1994</td>
                                    <td>M.Sc., B.Ed.,</td>
                                    <td>20-05-2024</td>
                                    <td>3 Year</td>
                                    <td>TRAINED</td>
                                    <td>16000/-</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Gayatri K</td>
                                    <td>Kumar</td>
                                    <td>Female</td>
                                    <td>23-04-1995</td>
                                    <td>B.Tech.,</td>
                                    <td>20-05-2024</td>
                                    <td>4 Year</td>
                                    <td>TRAINED</td>
                                    <td>16000/-</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Jayachitra N</td>
                                    <td>Nagendran</td>
                                    <td>Female</td>
                                    <td>08-03-1985</td>
                                    <td>B.Sc.,B.Ed.,</td>
                                    <td>01-07-2024</td>
                                    <td>1 Year</td>
                                    <td>TRAINED</td>
                                    <td>15000/-</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Visalakshmi</td>
                                    <td>Suresh</td>
                                    <td>Female</td>
                                    <td>06-04-1994</td>
                                    <td>M.Sc., B.Ed.,</td>
                                    <td>13-06-2022</td>
                                    <td>2 Year</td>
                                    <td>TRAINED</td>
                                    <td>15000/-</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Sandhiya</td>
                                    <td>Sanathaiyan</td>
                                    <td>Female</td>
                                    <td>14-07-1990</td>
                                    <td>B.A.,B.Ed.,</td>
                                    <td>05-02-2024</td>
                                    <td>10 Year</td>
                                    <td>TRAINED</td>
                                    <td>17000/-</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Suja Susantan</td>
                                    <td>Leslieclement</td>
                                    <td>Female</td>
                                    <td>30-08-1970</td>
                                    <td>Hindi Praveen</td>
                                    <td>20-05-2024</td>
                                    <td>14 Year</td>
                                    <td>TRAINED</td>
                                    <td>17000/-</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Menaka</td>
                                    <td>Kumar</td>
                                    <td>Female</td>
                                    <td>20-05-1989</td>
                                    <td>B.A.,B.Ed.,</td>
                                    <td>20-05-2024</td>
                                    <td>1 Year</td>
                                    <td>TRAINED</td>
                                    <td>15000/-</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Reshma</td>
                                    <td>Moorthy</td>
                                    <td>Female</td>
                                    <td>26-07-1996</td>
                                    <td>M.A.,B.Ed.,</td>
                                    <td>06-06-2018</td>
                                    <td>6 Year</td>
                                    <td>TRAINED</td>
                                    <td>20000/-</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Ashlinnithya</td>
                                    <td>Mageshwaran</td>
                                    <td>Female</td>
                                    <td>04-04-1998</td>
                                    <td>M.A.,M.Ed.,</td>
                                    <td>10-06-2024</td>
                                    <td>1 Year</td>
                                    <td>TRAINED</td>
                                    <td>15000/-</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Radha</td>
                                    <td>Durairaj</td>
                                    <td>Female</td>
                                    <td>27-05-1983</td>
                                    <td>M.A.,B.Ed.,</td>
                                    <td>12-06-2024</td>
                                    <td>15 Year</td>
                                    <td>TRAINED</td>
                                    <td>20000/-</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Dhilip</td>
                                    <td>Selvan</td>
                                    <td>Male</td>
                                    <td>16-01-1991</td>
                                    <td>MCA</td>
                                    <td>12-06-2024</td>
                                    <td>1 Year</td>
                                    <td>TRAINED</td>
                                    <td>15000/-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="NonTeaching" class="tabcontent">
                        <h3>Non-Teaching Staff Particulars</h3>
                        <table class="faculty-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Teacher Name</th>
                                    <th>Duty Assigned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Poongodi</td>
                                    <td>SWEEPER</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Alimuthir</td>
                                    <td>SECURITY</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Thilagavathy</td>
                                    <td>OFFICE ASSISTANT</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Vijaya</td>
                                    <td>SWEEPER</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Vasanth</td>
                                    <td>DRIVER</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Kirubha</td>
                                    <td>DRIVER</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Karthi</td>
                                    <td>DRIVER</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="Administrative" class="tabcontent">
                        <h3>List of Library Books</h3>
                        <table class="faculty-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>No. of Books</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>REFERENCE BOOK</td>
                                    <td>125</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>STORY BOOKS IN HINDI</td>
                                    <td>115</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>DICTIONARY</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>ENCYCLOPEDIA</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>MATHEMATICS</td>
                                    <td>125</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>ENGLISH LANGUAGE & LIT.</td>
                                    <td>130</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>ENVIRONMENTAL STUDY</td>
                                    <td>120</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>SCIENCE& TECH.</td>
                                    <td>225</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>SOCIAL SCIENCE</td>
                                    <td>250</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>SANSKRIT</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>COMPUTER SCIENCE</td>
                                    <td>250</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>GENERAL BOOKS</td>
                                    <td>550</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>NCERT BOOKS CLASS- 1 TO VIII</td>
                                    <td>450</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>STORY BOOKS IN ENGLISH</td>
                                    <td>159</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>LIFE OF NATIONAL HEROES</td>
                                    <td>39</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>ATLAS</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>GANDHI SERIES</td>
                                    <td>26</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>MALLGUDI DAYS</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>ARABIAN NIGHTS</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>PENGUIN SERIES OF STORES</td>
                                    <td>46</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>CHILDREN’S COMPANION SERIES</td>
                                    <td>48</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>FORMULAE BOOKS SERIES</td>
                                    <td>26</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>ESSAY BOOKS</td>
                                    <td>29</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>WORD POWER BOOKS</td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>SCIENCE WIZARD COLLECTION</td>
                                    <td>32</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>LONGMAN SERIES OF CLASSIC BOOK</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: right; font-weight: bold;">TOTAL</td>
                                    <td>2943</td>
                                </tr>
                            </tbody>
                        </table>

                        <h3>List of Newspaper & Magazines</h3>
                        <h4>Newspaper</h4>
                        <table class="faculty-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Particulars</th>
                                    <th>Qty</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>THE TIMES OF INDIA</td>
                                    <td>02 EVERYDAY</td>
                                </tr>
                            </tbody>
                        </table>

                        <h4>Magazines</h4>
                        <table class="faculty-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Particulars</th>
                                    <th>Qty</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>CURRENT AFFAIRS</td>
                                    <td>5 MONTHLY</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>KIDS KINGDOM</td>
                                    <td>6 MONTHLY</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>GK TODAY</td>
                                    <td>10 MONTHLY</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>INDIA TODAY</td>
                                    <td>5 MONTHLY</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>SCIENCE REFRESHERS</td>
                                    <td>6 MONTHLY</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <?php include("footer.php") ?>

        </div>
    </main>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <script src="js/leaflet.js"></script>
    <script src="js/vendors.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
</body>

</html>