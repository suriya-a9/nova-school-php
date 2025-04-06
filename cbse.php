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
                            <h2 class="text-30 lh-15 text-white">Faculty Details</h2>
                            <p class="text-white mt-10">View our faculty information organized by category.</p>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="layout-pt-md layout-pb-lg pt-40 pb-30">
                <div data-anim-wrap class="container">
                    <h2 class="text-30 lh-15 text-white">CBSE Student Details</h2>
                    <div class="tab">
                        <button class="tablinks active" onclick="openTab(event, 'Teaching')">STUDENT DETAILS</button>
                        <button class="tablinks" onclick="openTab(event, 'NonTeaching')">STUDENT DETAILS</button>
                        <button class="tablinks" onclick="openTab(event, 'Management')">STUDENT DETAILS</button>
                    </div>

                    <div id="Teaching" class="tabcontent" style="display: block;">
                        <h3>STUDENT DETAILS</h3>
                        <table class="faculty-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>NAME</th>
                                    <th>DOB</th>
                                    <th>CLASS</th>
                                    <th>FATHER NAME</th>
                                    <th>PH.NO</th>
                                    <th>B.G</th>
                                    <th>ADDRESS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JHANAV S</td>
                                    <td>02.03.2019</td>
                                    <td>1</td>
                                    <td>Suresh Babu S</td>
                                    <td>8940869056</td>
                                    <td>B+</td>
                                    <td>15a/2, Vallalar Nagar, Shanthimedu, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>THISHAN SABARISH M M</td>
                                    <td>7.3.2018</td>
                                    <td>1</td>
                                    <td>Manikandan S</td>
                                    <td>9659673588</td>
                                    <td>A+</td>
                                    <td>29a, Csi Nagar, Press Colony, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SAI KANISHK K</td>
                                    <td>18.10.2018</td>
                                    <td>1</td>
                                    <td>Karthik Raja</td>
                                    <td>9952646025</td>
                                    <td>A1+</td>
                                    <td>41/43, Balaji Garden, Press Colony, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>NALAN S S</td>
                                    <td>09-02-2018</td>
                                    <td>1</td>
                                    <td>Suresh</td>
                                    <td>8807472434</td>
                                    <td>B+</td>
                                    <td>1/20, Vallalar Nagar,Press Colony, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>SARIN B</td>
                                    <td>02-09-2018</td>
                                    <td>1</td>
                                    <td>Balamurugan</td>
                                    <td>9944402990</td>
                                    <td>B+</td>
                                    <td>45/54, Sri Ram Nagar, Palaimalai Road, Periyanaikenpalayam,Cbe-20</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>VARUN SELVAN M</td>
                                    <td>6.9.2018</td>
                                    <td>1</td>
                                    <td>Mariselvam</td>
                                    <td>9942790044</td>
                                    <td>B+</td>
                                    <td>8/232-1, Kumaran Illam, Semozhali Nagar, Samanayakan Palayam-19</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>ASVIKA L K</td>
                                    <td>01-11-2018</td>
                                    <td>1</td>
                                    <td>Loganathan</td>
                                    <td>9751637156</td>
                                    <td>O+</td>
                                    <td>2/1235 Ganapathy Nagar,Bettathapuram, Karamadai, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>DEEKSHIKA A</td>
                                    <td>11.01.2018</td>
                                    <td>1</td>
                                    <td>Arun Kumar</td>
                                    <td>9786077637</td>
                                    <td>A+</td>
                                    <td>188,Balaji Garden, Press Colony, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>HARSHITA R</td>
                                    <td>13.07.2018</td>
                                    <td>1</td>
                                    <td>Ramesh Kumar</td>
                                    <td>9159724770</td>
                                    <td>O+</td>
                                    <td>E8, Indra Nagar, Nsn Palayam, Cbe</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>ITHALYA S A</td>
                                    <td>09-02-2019</td>
                                    <td>1</td>
                                    <td>Anbuselvan</td>
                                    <td>9843235555</td>
                                    <td>O+</td>
                                    <td>5/277, Near Bus Stop , Kalipalayam,Vellamadai(Po),Cbe</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>DHARSHITH A</td>
                                    <td>12-11-12018</td>
                                    <td>1</td>
                                    <td>Abhilash N</td>
                                    <td>9171451219</td>
                                    <td>B+</td>
                                    <td>103A Psr Nagar, Jadal Naidu street, Periyanaicken palayam, coimbatore 641020</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>ESHAANTH VETRIVELAN</td>
                                    <td>16-03-2018</td>
                                    <td>1</td>
                                    <td>Esakki Raja</td>
                                    <td>7449132604</td>
                                    <td>B+</td>
                                    <td>MK Nagar, NSN Palayam,Cbe-31</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>LAKSHANYA R</td>
                                    <td>16-01-2019</td>
                                    <td>1</td>
                                    <td>Rajkumar</td>
                                    <td>9994698818</td>
                                    <td>O+</td>
                                    <td>1, Marutham Garden, Samychettipalayam North, Jothipuram(Po),Cbe</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>RUDHRA A</td>
                                    <td>11.10.2018</td>
                                    <td>1</td>
                                    <td>Anandaraj B</td>
                                    <td>9952851844</td>
                                    <td>O+</td>
                                    <td>5/342, Angalamman St, Naickanpalayam, Cbe-20</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>SANGAMITHRA A</td>
                                    <td>3.8.2018</td>
                                    <td>1</td>
                                    <td>Anandababu</td>
                                    <td>9345832826</td>
                                    <td>A+</td>
                                    <td>41/1, Vanamariamman Kovil Strrt, Jothipuram (Po), Cbe</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>THIYA SHREE B</td>
                                    <td>29.01 2019</td>
                                    <td>1</td>
                                    <td>Balaji</td>
                                    <td>6380442936</td>
                                    <td>O+</td>
                                    <td>1/1158, Jj Nagar, Peruyamathampalayam,Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>VEDA SAMVIDHA B</td>
                                    <td>07-08-2018</td>
                                    <td>1</td>
                                    <td>Babu</td>
                                    <td>7708624404</td>
                                    <td>AB+</td>
                                    <td>47/15a, R.V Nagar, Pudhupudhur Road, Periyanaiken Palayam,Cbe</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>BHARANI SREE D</td>
                                    <td>25-11-2018</td>
                                    <td>1</td>
                                    <td>Dhilip S</td>
                                    <td>9943398909</td>
                                    <td>B+</td>
                                    <td>5/482, Avvai nagar, Naicken palayam, SRKV Post, PN Palayam,Cbe</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>HIMALI S</td>
                                    <td>27-11-2018</td>
                                    <td>1</td>
                                    <td>Chithra N</td>
                                    <td>9344750430</td>
                                    <td>B+</td>
                                    <td>10/A, Shree Bharathi nagar, Gudalur kavundampalayam, cbe-20</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>LANISHKA</td>
                                    <td>07.07.2018</td>
                                    <td>1</td>
                                    <td>Deenadayalan</td>
                                    <td>9344195531</td>
                                    <td>B+</td>
                                    <td>5/1,Indira Nagar Santhimedu,Press Colony Post,Coimbatore – 641019</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>ISHAANTH R</td>
                                    <td>10.06.2017</td>
                                    <td>III</td>
                                    <td>Raguraman</td>
                                    <td>9042210577</td>
                                    <td>B+</td>
                                    <td>57, Tank Street, Nsn Palayam, Cbe</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>MAINDHAN M</td>
                                    <td>10.06.2016</td>
                                    <td>III</td>
                                    <td>Manjula</td>
                                    <td>8098595421</td>
                                    <td>B+</td>
                                    <td>2/161, Padmalaya Nagar, Nsn Palayam,Cbe-20</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>NISHANTH H</td>
                                    <td>30.11.2016</td>
                                    <td>III</td>
                                    <td>Haridass</td>
                                    <td>9524211306</td>
                                    <td>O+</td>
                                    <td>34/4, Selvapuram North, Near Bible College, Cbe</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>NITHIN S</td>
                                    <td>15.07.2016</td>
                                    <td>III</td>
                                    <td>Saravanan S</td>
                                    <td>8973498001</td>
                                    <td>O+</td>
                                    <td>20/37, Appanagar, Mettupalayam</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>PAVITHRAN S</td>
                                    <td>10.07.2016</td>
                                    <td>III</td>
                                    <td>Srinivasan</td>
                                    <td>9894725444</td>
                                    <td>A+</td>
                                    <td>35/3 Vishnu Nagar, Naikanoor, No-4 Veerapndi, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>PRAJIV C S</td>
                                    <td>27.05.2016</td>
                                    <td>III</td>
                                    <td>Chandrasekar S</td>
                                    <td>9790025552</td>
                                    <td></td>
                                    <td>40, Mountain View, Maniyakaran Palayam, Idikarai,Cbe-22</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>RABI R</td>
                                    <td>01.12.2016</td>
                                    <td>III</td>
                                    <td>Rajesh Kumar C</td>
                                    <td>9894451782</td>
                                    <td>O+</td>
                                    <td>5/49, Seeliyur(Po), Karamadau-641113</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>AADHIRA M</td>
                                    <td>17.04.2017</td>
                                    <td>III</td>
                                    <td>Maheshwari</td>
                                    <td>9566528501</td>
                                    <td>O+</td>
                                    <td>22/A, Mariyamman Kovil Street</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>ALLISH GABRILLA L</td>
                                    <td>12.08.2016</td>
                                    <td>III</td>
                                    <td>Leo Mariadas</td>
                                    <td>8973506360</td>
                                    <td>O+</td>
                                    <td>96/24d, Thiru Vee.Ka.Nagar, Jothipram Post, Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>ANGELINA D</td>
                                    <td>25.05.2017</td>
                                    <td>III</td>
                                    <td>David Raj</td>
                                    <td>9597974282</td>
                                    <td>O+</td>
                                    <td>101/46e, Saraswathy Nagar, Tn Palayam ,Cbe</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>HEYRUTHRA S</td>
                                    <td>28.12.2015</td>
                                    <td>III</td>
                                    <td>Senthil Kumar S</td>
                                    <td>9944787714</td>
                                    <td>O +</td>
                                    <td>No 15, Muthu Nagar, Nsn Palayam,Cbe-31</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>KABILA SHREE B</td>
                                    <td>05.12.2016</td>
                                    <td>III</td>
                                    <td>Bala Chandar</td>
                                    <td>7402021793</td>
                                    <td>O+</td>
                                    <td>No.42, Kamaraj Nagar, Samichettipalayam</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>MONISHA K</td>
                                    <td>05.08.2016</td>
                                    <td>III</td>
                                    <td>Kalisamy</td>
                                    <td>9976633865</td>
                                    <td>O+</td>
                                    <td>Pothigai Garden, Samanayakan Palayam, Cbe</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>MOUKTHIKA M</td>
                                    <td>10.03.2017</td>
                                    <td>III</td>
                                    <td>Marisami</td>
                                    <td>8675641781</td>
                                    <td>O+</td>
                                    <td>48/1 Senguttai Thottam,Selvapurm,Veerapandi Pirivu.</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>NANDHAKSHANA G</td>
                                    <td>10.04.2017</td>
                                    <td>III</td>
                                    <td>Gowrishanker</td>
                                    <td>8682008534</td>
                                    <td>A+</td>
                                    <td>3/1, R.P Nagar, Naicknoor, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>NILA N</td>
                                    <td>27.10.2017</td>
                                    <td>III</td>
                                    <td>Nandhakumar</td>
                                    <td>9688406361</td>
                                    <td>AB+</td>
                                    <td>Sri Bharathi Nagar, G.Goundampalayam, Cbr</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>SATHYA S</td>
                                    <td>03.01.2017</td>
                                    <td>III</td>
                                    <td>Senthil Kumar S</td>
                                    <td>8148810724</td>
                                    <td>A+</td>
                                    <td>19 C G Residency, Sowdambigai Nagar , Samichettipalayam</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>MONIKA S</td>
                                    <td>16.01.2017</td>
                                    <td>III</td>
                                    <td>SURESH K</td>
                                    <td>9597213189</td>
                                    <td></td>
                                    <td>2/200 Bilichi-Kavundanur, Bujaganur, Karamadai-13</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>ARRICK LEROY P</td>
                                    <td>16.03.2017</td>
                                    <td>III</td>
                                    <td>Praveen J</td>
                                    <td>9894052802</td>
                                    <td>AB+</td>
                                    <td>68/1C Nehru nagar, Samichettipalayam, Cbe -47</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>DUWARAK K</td>
                                    <td>01.08.2017</td>
                                    <td>III</td>
                                    <td>Kanagaraj.K</td>
                                    <td>9092943338</td>
                                    <td>O +</td>
                                    <td>2/367 Kumarapuram, Narasimanaiken palyam</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>HARIKRISH DEV R</td>
                                    <td>12-01-2017</td>
                                    <td>III</td>
                                    <td>Rajasekaran C</td>
                                    <td>9843467715</td>
                                    <td>O+</td>
                                    <td>No.11 Bagya Avenue, R R Nagar, Pudhupalayam road, NSN Palayam,Cbe- 31</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>HARSHITH P</td>
                                    <td>04.04.2017</td>
                                    <td>II</td>
                                    <td>Pranesh Kumar</td>
                                    <td>8524999029</td>
                                    <td>B+</td>
                                    <td>94, Balaji Garden, Press Colony(Po),Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>MADIRAKSH A</td>
                                    <td>07.04.2017</td>
                                    <td>II</td>
                                    <td>Anandhakumar</td>
                                    <td>9688647780</td>
                                    <td>A+</td>
                                    <td>5/27 Kalipalayam, Vellamadai(Po),Cbe-10</td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td>PAVIN C</td>
                                    <td>15.5.2017</td>
                                    <td>II</td>
                                    <td>Chandrasekaran</td>
                                    <td>8489218498</td>
                                    <td></td>
                                    <td>2/291,Thanneer Panthal, Bettathapuram,Karamadai</td>
                                </tr>
                                <tr>
                                    <td>45</td>
                                    <td>PUZHAL VANAN L</td>
                                    <td>17.01.2018</td>
                                    <td>II</td>
                                    <td>Lakshmi Kumar</td>
                                    <td>9524244030</td>
                                    <td>B+</td>
                                    <td>99/1 Thiruveeka Narar, 2nd Street, Jothipuram, Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>46</td>
                                    <td>SAI DAKSHITH G</td>
                                    <td>25.07.2017</td>
                                    <td>II</td>
                                    <td>Ganesh</td>
                                    <td>8778810187</td>
                                    <td>B+</td>
                                    <td>36, Manigaran Palam, Mountain View, Idigarai,Cbe-31</td>
                                </tr>
                                <tr>
                                    <td>47</td>
                                    <td>VISHNU DEV R</td>
                                    <td>24.02.2018</td>
                                    <td>II</td>
                                    <td>Ramesh</td>
                                    <td>9843429047</td>
                                    <td>B+</td>
                                    <td>38 B2, Rkv Street, Veerapandi Pirivu, Cbe</td>
                                </tr>
                                <tr>
                                    <td>48</td>
                                    <td>HEENA SULTANA A</td>
                                    <td>20.05.2018</td>
                                    <td>II</td>
                                    <td>Abulthakeer</td>
                                    <td>9786818185</td>
                                    <td>A+</td>
                                    <td>400-1-5, Psc Garden, Mathampalayam,Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>49</td>
                                    <td>NIKITHA J</td>
                                    <td>22.10.2017</td>
                                    <td>II</td>
                                    <td>Jayaraj</td>
                                    <td>9751030730</td>
                                    <td></td>
                                    <td>4/389 Chinna Mathampalayam, Bilichi(Po),Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>50</td>
                                    <td>THANISHKA V</td>
                                    <td>26.08.2017</td>
                                    <td>II</td>
                                    <td>Vijaya Kumar</td>
                                    <td>9943961665</td>
                                    <td>O+</td>
                                    <td>1/B/17, Thendral Nagar 1st Street, Nsn Palayam ,Cbe-31</td>
                                </tr>
                                <tr>
                                    <td>51</td>
                                    <td>YATHAVI J S</td>
                                    <td>13.01.2018</td>
                                    <td>II</td>
                                    <td>Jayakanth</td>
                                    <td>8807905813</td>
                                    <td>A+</td>
                                    <td>2/107, Poonga Nagar, No-4 Veerapandi,Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>52</td>
                                    <td>AGNES ANGEL</td>
                                    <td>08-01-2017</td>
                                    <td>II</td>
                                    <td>Louis A</td>
                                    <td>9865999063</td>
                                    <td>O+</td>
                                    <td>No.40, Balaji garden, Press colony, Veerapandi pirivu, Cbe-18</td>
                                </tr>
                                <tr>
                                    <td>53</td>
                                    <td>THIRU THAMIL KUZHALI V</td>
                                    <td>14-10-2017</td>
                                    <td>II</td>
                                    <td>Vinoth kumar R</td>
                                    <td>6384052700</td>
                                    <td>AB+</td>
                                    <td>6/7, 58E, Vishnunagar,Naickanoor,N0.4.Veerapandi, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>54</td>
                                    <td>ABHINAV G</td>
                                    <td>09-06-2014</td>
                                    <td>V</td>
                                    <td>Ganesh Moorthy</td>
                                    <td>8072258302</td>
                                    <td>O+</td>
                                    <td>352/A, Selvapuram North, Vanamariyamman kovil st, jothipuram post, cbe</td>
                                </tr>
                                <tr>
                                    <td>55</td>
                                    <td>DHEEKSHID SAI M</td>
                                    <td>16.04.2015</td>
                                    <td>V</td>
                                    <td>Marisamy K</td>
                                    <td>8675641781</td>
                                    <td>O+</td>
                                    <td>48/1, Senguttai Thottam, Selvapuram.</td>
                                </tr>
                                <tr>
                                    <td>56</td>
                                    <td>KRISHITH P</td>
                                    <td>10.08.2014</td>
                                    <td>V</td>
                                    <td>Pranesh Kumar</td>
                                    <td>8524999029</td>
                                    <td>B+</td>
                                    <td>94, Balaji Garden, Press Colony, Cbe</td>
                                </tr>
                                <tr>
                                    <td>57</td>
                                    <td>SAHISHNU A</td>
                                    <td>28.03.2015</td>
                                    <td>V</td>
                                    <td>Arumugam</td>
                                    <td>9894701813</td>
                                    <td>A+</td>
                                    <td>7/213 Samanaicken Palayam, No.4 Veerapandi (Po),Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>58</td>
                                    <td>DEV P</td>
                                    <td>04.08.2014</td>
                                    <td>V</td>
                                    <td>Prabhu</td>
                                    <td>9943442853</td>
                                    <td>a+</td>
                                    <td>M13, Thendral Nagar 2nd Street, Nsn Palayam,Cbe-31</td>
                                </tr>
                                <tr>
                                    <td>59</td>
                                    <td>LATHEESH Y T</td>
                                    <td>09.10.2014</td>
                                    <td>V</td>
                                    <td>Thiyagarajan N</td>
                                    <td>7598125079</td>
                                    <td>B-</td>
                                    <td>No 291, 6th Street,Sri Balaji Garden, Presscolony-47</td>
                                </tr>
                                <tr>
                                    <td>60</td>
                                    <td>GOPIKA R</td>
                                    <td>15.10.2013</td>
                                    <td>VI</td>
                                    <td>Chandra Sekran</td>
                                    <td>9159370276</td>
                                    <td>A+</td>
                                    <td>2/291,Thanneer Panthal, Bettathapuram,Karamadai</td>
                                </tr>
                                <tr>
                                    <td>61</td>
                                    <td>SAATHVIK A</td>
                                    <td>14.11.2013</td>
                                    <td>VI</td>
                                    <td>Arun Kumar S</td>
                                    <td>9786077637</td>
                                    <td>A1+</td>
                                    <td>188, Balaji Garden, Press Colony, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>62</td>
                                    <td>GOTTAM SARVAREESH R</td>
                                    <td>10.09.2013</td>
                                    <td>VI</td>
                                    <td>Ramesh</td>
                                    <td>7032263067</td>
                                    <td>O+</td>
                                    <td>No.1 , 3rd Street , Lakshmi Nagar, P.N.Palayam</td>
                                </tr>
                                <tr>
                                    <td>63</td>
                                    <td>DHIYA SRI S</td>
                                    <td>12-07-2013</td>
                                    <td>VI</td>
                                    <td>Senthil kumar</td>
                                    <td>7010291926</td>
                                    <td>B-</td>
                                    <td>31A, RVK st, Veerapandi pirivu, Cbe-20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="NonTeaching" class="tabcontent">
                        <h3>STUDENT DETAILS</h3>
                        <table class="faculty-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>NAME</th>
                                    <th>DOB</th>
                                    <th>CLASS</th>
                                    <th>FATHER NAME</th>
                                    <th>PH.NO</th>
                                    <th>B.G</th>
                                    <th>ADDRESS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>64</td>
                                    <td>ARISHMAN R</td>
                                    <td>10.05.2013</td>
                                    <td>VII</td>
                                    <td>Raguraman</td>
                                    <td>9488515542</td>
                                    <td>O+</td>
                                    <td>57, Tank Street,Nsn Palayam,Cbe</td>
                                </tr>
                                <tr>
                                    <td>65</td>
                                    <td>SANJIV C S</td>
                                    <td>29.04.2013</td>
                                    <td>VII</td>
                                    <td>Chandra Sekar</td>
                                    <td>9790025552</td>
                                    <td></td>
                                    <td>40, Mountain View, Maniyakaran Palayam, Idikarai,Cbe-22</td>
                                </tr>
                                <tr>
                                    <td>66</td>
                                    <td>SOWSHIN S</td>
                                    <td>22.04.2012</td>
                                    <td>VII</td>
                                    <td>Saravanan</td>
                                    <td>8973498001</td>
                                    <td>O+</td>
                                    <td>20/37, Appanagar, Mettupalayam</td>
                                </tr>
                                <tr>
                                    <td>67</td>
                                    <td>DHIVYA DHARSHAN D</td>
                                    <td>23-03-2013</td>
                                    <td>VII</td>
                                    <td>Devaraj N</td>
                                    <td>9080579925</td>
                                    <td></td>
                                    <td>3/142, Kanuvai palayam, marudhur, Gopanari-641113</td>
                                </tr>
                                <tr>
                                    <td>68</td>
                                    <td>AGALYA J M</td>
                                    <td>11-05-2013</td>
                                    <td>VII</td>
                                    <td>Jeevananthan.S</td>
                                    <td>9787052032</td>
                                    <td>B+</td>
                                    <td>14H Shanti Medu ,Vellalar Nagar Exited ,Coimbatore 641019</td>
                                </tr>
                                <tr>
                                    <td>69</td>
                                    <td>SUSHMITHA E</td>
                                    <td>09.09.2011</td>
                                    <td>VIII</td>
                                    <td>Eswaran</td>
                                    <td>9940068363</td>
                                    <td>O+</td>
                                    <td>7/4, East Street, Kavundampalayam.</td>
                                </tr>
                                <tr>
                                    <td>70</td>
                                    <td>PRAJITH V</td>
                                    <td>09.05.2012</td>
                                    <td>VIII</td>
                                    <td>Velumani</td>
                                    <td>9159392583</td>
                                    <td>AB+</td>
                                    <td>1/14e Shanthimedu, Vallalar Nagar, Press Colony(Po),Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>71</td>
                                    <td>SAI RAKESH G</td>
                                    <td>06.04.2012</td>
                                    <td>VIII</td>
                                    <td>Prasath M</td>
                                    <td>9942466986</td>
                                    <td>B+</td>
                                    <td>10/1, Imdira Nagar, Naickanoor,No-4, Veerapandi,Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>72</td>
                                    <td>YADHUNANDAN N</td>
                                    <td>02.07.2012</td>
                                    <td>VIII</td>
                                    <td>Nandhakumar B</td>
                                    <td>9003457788</td>
                                    <td>O+</td>
                                    <td>No-50, Mahalakshmi Garden,Press Colony Backside, Jothipuram,Cbe</td>
                                </tr>
                                <tr>
                                    <td>73</td>
                                    <td>LAKSHITA A</td>
                                    <td>16.09.2011</td>
                                    <td>VIII</td>
                                    <td>Arun Kumar D</td>
                                    <td>9944588659</td>
                                    <td>O+</td>
                                    <td>S.No.406/1, Psc Garden, Mathampalayam</td>
                                </tr>
                                <tr>
                                    <td>74</td>
                                    <td>INFANT D A</td>
                                    <td>27.04.2015</td>
                                    <td>IV</td>
                                    <td>DINESH KUMAR</td>
                                    <td>8344362767</td>
                                    <td>O+</td>
                                    <td>5/13, SEELIYUR (PO),KARAMADAI</td>
                                </tr>
                                <tr>
                                    <td>75</td>
                                    <td>PRANAAV PRIYAN S</td>
                                    <td>27.02.2015</td>
                                    <td>IV</td>
                                    <td>SIVA SANKARAN</td>
                                    <td>8778944302</td>
                                    <td>O+</td>
                                    <td>A1 BLOCK, KSN ILLAM SEMMOZHI NAGAR, SAMANAICKEN PALAYAM.</td>
                                </tr>
                                <tr>
                                    <td>76</td>
                                    <td>SAI SANJEEV D</td>
                                    <td>11.06.2015</td>
                                    <td>IV</td>
                                    <td>DINAKARAN</td>
                                    <td>9944588659</td>
                                    <td>O+</td>
                                    <td>S.NO:46, PS GARDEN, MATHAMPALAYAM-19</td>
                                </tr>
                                <tr>
                                    <td>77</td>
                                    <td>CHARUMATHI S</td>
                                    <td>20.12.2015</td>
                                    <td>IV</td>
                                    <td>SELVARAJU</td>
                                    <td>9566727588</td>
                                    <td>O+</td>
                                    <td>1/394 SOUNDHARRAJ NAGAR, PERUYA MATHAMPALAYAM, BILICHI-19</td>
                                </tr>
                                <tr>
                                    <td>78</td>
                                    <td>DHEERA D</td>
                                    <td>03.02.2016</td>
                                    <td>IV</td>
                                    <td>DILIP K</td>
                                    <td>9994498957</td>
                                    <td>O+</td>
                                    <td>SHREE VARI GARDEN, SHANTHIMEDU, PRESS COLONY(PO), CBE-19</td>
                                </tr>
                                <tr>
                                    <td>79</td>
                                    <td>INIYAVAL A</td>
                                    <td>17.01.2016</td>
                                    <td>IV</td>
                                    <td>ANBUSELVAN</td>
                                    <td>9843235555</td>
                                    <td>O+</td>
                                    <td>5/277, KALIPALAYAM VELLAMADAI(PO),CBE-10</td>
                                </tr>
                                <tr>
                                    <td>80</td>
                                    <td>MOSHIKA R.V</td>
                                    <td>23.06.2015</td>
                                    <td>IV</td>
                                    <td>RANJITH KUMAR</td>
                                    <td>8883159703</td>
                                    <td>O-</td>
                                    <td>74 MOUNTAIN VIEW, MANIYAKARAN PALAYAM, IDIKARAI</td>
                                </tr>
                                <tr>
                                    <td>81</td>
                                    <td>PAVISH S</td>
                                    <td>05-02-2016</td>
                                    <td>IV</td>
                                    <td>Shankar P</td>
                                    <td>8110815709</td>
                                    <td></td>
                                    <td>No 55, Teachers colony, NSN Palayam, Cbe-31</td>
                                </tr>
                                <tr>
                                    <td>82</td>
                                    <td>VISHRUTH A</td>
                                    <td>25-02-2015</td>
                                    <td>IV</td>
                                    <td>Abhilash N</td>
                                    <td>9843501113</td>
                                    <td></td>
                                    <td>103A Psr Nagar, Jadal Naidu street, Periyanaicken palayam, coimbatore 641020</td>
                                </tr>
                                <tr>
                                    <td>83</td>
                                    <td>HARSHA PRADA G D</td>
                                    <td>05-10-2015</td>
                                    <td>IV</td>
                                    <td>Ganesan J</td>
                                    <td>8015609481</td>
                                    <td></td>
                                    <td>18 NPT-A, Sri ram nagar, Kathirnaicken palayam, Cbe-17</td>
                                </tr>
                                <tr>
                                    <td>84</td>
                                    <td>HEMITHRA G S</td>
                                    <td>07.06.2019</td>
                                    <td>UKG</td>
                                    <td>Gnana Prakasam</td>
                                    <td>9894291646</td>
                                    <td>B+</td>
                                    <td>2, Sri Ganapathy Nagar, Chinna Kannaa Puthoor, Samichettypalayam, Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>85</td>
                                    <td>JANVIKA SRI J</td>
                                    <td>10.09.2019</td>
                                    <td>UKG</td>
                                    <td>Jegan R</td>
                                    <td>8220740470</td>
                                    <td>A+</td>
                                    <td>43,Tank Street, Nsn Palayam,Cbe-31</td>
                                </tr>
                                <tr>
                                    <td>86</td>
                                    <td>PREETHIKA SRI M</td>
                                    <td>07.12.2019</td>
                                    <td>UKG</td>
                                    <td>Marichamy</td>
                                    <td>9543807523</td>
                                    <td>O+</td>
                                    <td>125/14c Kamaraj Nagar, Samichettiplayam, Jothipuram (Po), Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>87</td>
                                    <td>SHIVANYA P</td>
                                    <td>13.09.2019</td>
                                    <td>UKG</td>
                                    <td>Praveen B</td>
                                    <td>7904218989</td>
                                    <td>O+</td>
                                    <td>15 Srinivasan Nagar, Press Colony</td>
                                </tr>
                                <tr>
                                    <td>88</td>
                                    <td>THANISHKA S</td>
                                    <td>29.11.2019</td>
                                    <td>UKG</td>
                                    <td>Sathish Kumar</td>
                                    <td>8668198398</td>
                                    <td>AB+</td>
                                    <td>188/324d, Kanga Illam Verapandi Pirivu, Press Colony (Po), Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>89</td>
                                    <td>TANU SHRIJA M</td>
                                    <td>07-02-2019</td>
                                    <td>UKG</td>
                                    <td>S.Mariyappan</td>
                                    <td>9087990073</td>
                                    <td>O+</td>
                                    <td>Maniyakaranpalayam,Mahalakshmi Garden Idigarai 641022</td>
                                </tr>
                                <tr>
                                    <td>90</td>
                                    <td>VENBA B C</td>
                                    <td>10-07-2019</td>
                                    <td>UKG</td>
                                    <td>Balachandar S</td>
                                    <td>9894592321</td>
                                    <td>A+</td>
                                    <td>No.42, Kamaraj Nagar, Samichettipalayam</td>
                                </tr>
                                <tr>
                                    <td>91</td>
                                    <td>ARIK JOSE D</td>
                                    <td>22.04.2019</td>
                                    <td>UKG</td>
                                    <td>David Raj</td>
                                    <td>9597974282</td>
                                    <td>O+</td>
                                    <td>101/46e, Saraswathi Nagar, T.N.Palayam, Jothipuram(Po),Cbe</td>
                                </tr>
                                <tr>
                                    <td>92</td>
                                    <td>KAVIN CHAKRAVARTHY R</td>
                                    <td>04.11.2019</td>
                                    <td>UKG</td>
                                    <td>Rajkumar</td>
                                    <td>9600002201</td>
                                    <td>B+</td>
                                    <td>No 29, Sri Anna Poorani Nagar, T.N Palayam, Jothipuram(Po),Cbe</td>
                                </tr>
                                <tr>
                                    <td>93</td>
                                    <td>SASWANTH P.K</td>
                                    <td>16.02.2019</td>
                                    <td>UKG</td>
                                    <td>Praveen Kumar</td>
                                    <td>9789135045</td>
                                    <td>B+</td>
                                    <td>5/89, Seeliyur, Seeliyur(Po), Karamadai</td>
                                </tr>
                                <tr>
                                    <td>94</td>
                                    <td>DAKSHITHA C</td>
                                    <td>22-01-2019</td>
                                    <td>UKG</td>
                                    <td>Rasika</td>
                                    <td>96779 37642</td>
                                    <td>AB+</td>
                                    <td>5/302 Angalamman Steet Naicken Palalyam</td>
                                </tr>
                                <tr>
                                    <td>95</td>
                                    <td>ANIESH RAJ G</td>
                                    <td>12-03-2019</td>
                                    <td>UKG</td>
                                    <td>Govindaraj R</td>
                                    <td>6380117249</td>
                                    <td>O+</td>
                                    <td>NO. 6/5, Vanamariamman Kovil street, Selvapuram, Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>96</td>
                                    <td>KAMALESH J</td>
                                    <td>20-06-2019</td>
                                    <td>UKG</td>
                                    <td>Jeevananthan.S</td>
                                    <td>9787052032</td>
                                    <td>B+</td>
                                    <td>14H Shanti Medu ,Vellalar Nagar Exited ,Coimbatore 641019</td>
                                </tr>
                                <tr>
                                    <td>97</td>
                                    <td>MOGITH M</td>
                                    <td>03-08-2019</td>
                                    <td>UKG</td>
                                    <td>Manikkam M</td>
                                    <td>9043744109</td>
                                    <td></td>
                                    <td>Sri Bharathi nagar, G.Kavundampalayam, Cbe-20</td>
                                </tr>
                                <tr>
                                    <td>98</td>
                                    <td>ROMAN REGIS L</td>
                                    <td>21-04-2019</td>
                                    <td>UKG</td>
                                    <td>A. Louis</td>
                                    <td>9865999063</td>
                                    <td>O+</td>
                                    <td>D.No: 40,Balaji Gardens, Press Colony, Veerapandi Pirivu, Cbe - 18</td>
                                </tr>
                                <tr>
                                    <td>99</td>
                                    <td>SASHWANTH V</td>
                                    <td>16-09-2019</td>
                                    <td>UKG</td>
                                    <td>Vishnu varthan N</td>
                                    <td>7639185296</td>
                                    <td>O+</td>
                                    <td>No.2/240, Dhakshitha Illam,Annamalai nagar, G.Kavundampalayam, Cbe-20</td>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td>YASWAND P</td>
                                    <td>08-12-2018</td>
                                    <td>UKG</td>
                                    <td>Prabhagaran D</td>
                                    <td>9025105944</td>
                                    <td></td>
                                    <td>Sri bharathi nagar, G.Kavundampalayam,Cbe-20</td>
                                </tr>
                                <tr>
                                    <td>101</td>
                                    <td>VIHAANTH G K</td>
                                    <td>15-08-2019</td>
                                    <td>UKG</td>
                                    <td>Kumar A</td>
                                    <td>9003632443</td>
                                    <td>A+</td>
                                    <td>322, 7th Street ,Sri Balaji garden, Press colony (po),Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>102</td>
                                    <td>SARVINI A</td>
                                    <td>06.02.2020</td>
                                    <td>LKG</td>
                                    <td>Ashok M</td>
                                    <td>9790303309</td>
                                    <td>B+</td>
                                    <td>13, Jv Nagar, Kamachi Puram, G Gowndapalayam, Cbe</td>
                                </tr>
                                <tr>
                                    <td>103</td>
                                    <td>KIRESIKA D</td>
                                    <td>09-01-2020</td>
                                    <td>LKG</td>
                                    <td>Dharamendaran D</td>
                                    <td>9524337645</td>
                                    <td>B+</td>
                                    <td>2/245, Balan nagar, karamadai, cbe-641104</td>
                                </tr>
                                <tr>
                                    <td>104</td>
                                    <td>NIRALYA N</td>
                                    <td>21-12-2020</td>
                                    <td>LKG</td>
                                    <td>Nandha kumar G</td>
                                    <td>8012622131</td>
                                    <td>AB+</td>
                                    <td>6,Sri Barathi nagar,G.Goundampalayam,Cbe-20</td>
                                </tr>
                                <tr>
                                    <td>105</td>
                                    <td>PAVIKSHA B M</td>
                                    <td>06-04-2020</td>
                                    <td>LKG</td>
                                    <td>Balaji K</td>
                                    <td>9566317184</td>
                                    <td>B+</td>
                                    <td>1/4F-2 Hamsaveni dis, Vallalaar nagar, Shanthi medu,Press colony,Cbe-19.</td>
                                </tr>
                                <tr>
                                    <td>106</td>
                                    <td>SIYA PRADHY M</td>
                                    <td>11-09-2020</td>
                                    <td>LKG</td>
                                    <td>Mahalingam</td>
                                    <td>9655803744</td>
                                    <td>O+</td>
                                    <td>40/5, Vignesh Avenue, No.4 Veerapandi , Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>107</td>
                                    <td>VINISHA C</td>
                                    <td>23-05-2020</td>
                                    <td>LKG</td>
                                    <td>Rasika</td>
                                    <td>9677937642</td>
                                    <td>AB+</td>
                                    <td>5/302, Angalamman st, Naicken palayam, cbe</td>
                                </tr>
                                <tr>
                                    <td>108</td>
                                    <td>DAKSHITH V</td>
                                    <td>18-05-2020</td>
                                    <td>LKG</td>
                                    <td>S.Viknes</td>
                                    <td>8667576203</td>
                                    <td></td>
                                    <td>21 Sri Vari Garden,Press Colony,Veerapandi Pirivu 641019, Coimbatore.</td>
                                </tr>
                                <tr>
                                    <td>109</td>
                                    <td>DEEKSHITH S</td>
                                    <td>19-04-2020</td>
                                    <td>LKG</td>
                                    <td>Selvakumar C</td>
                                    <td>8270779571</td>
                                    <td>B+</td>
                                    <td>174, Veerapandi pirivu, Jothipuram, Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>110</td>
                                    <td>HASWANTH S T</td>
                                    <td>29-04-2020</td>
                                    <td>LKG</td>
                                    <td>Sriganth</td>
                                    <td>9943866886</td>
                                    <td>B+</td>
                                    <td>57 A, Amsi nagar,Selvapuram(road), Jothipuram(post), Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>111</td>
                                    <td>KRISHVANTH KUMAR K</td>
                                    <td>20-03-2020</td>
                                    <td>LKG</td>
                                    <td>Karthik S</td>
                                    <td>9843853837</td>
                                    <td>A+</td>
                                    <td>126, Sri Bharathi nagar, G.Kavundampalayam, Cb-20</td>
                                </tr>
                                <tr>
                                    <td>112</td>
                                    <td>LASHWIN M J</td>
                                    <td>06-10-2020</td>
                                    <td>LKG</td>
                                    <td>Manoj kumar P</td>
                                    <td>8220568739</td>
                                    <td>O+</td>
                                    <td>10, Innisai Nagar, Chinnamathampalayam, Bilichi, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>113</td>
                                    <td>LEE M</td>
                                    <td>07-11-2020</td>
                                    <td>LKG</td>
                                    <td>Muthusamy C</td>
                                    <td>9655753136</td>
                                    <td>O+</td>
                                    <td>5/6 Vanamariamman kovil street, Selvapuram, Jothipuram post, Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>114</td>
                                    <td>MOHAMMED AATHIF M</td>
                                    <td>22-02-2020</td>
                                    <td>LKG</td>
                                    <td>Mohammed Ali</td>
                                    <td>9611186601</td>
                                    <td>A+</td>
                                    <td>1/1120 Periyamathampalayam, Bilichi, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>115</td>
                                    <td>REKAB ISRAEL R</td>
                                    <td>20-11-2020</td>
                                    <td>LKG</td>
                                    <td>Rajesh kumar</td>
                                    <td>9894451782</td>
                                    <td>O+</td>
                                    <td>5/49, Seeliyur (po), Karamadai (via), Mettupalayam (taluka), Coimbatore - 641113.</td>
                                </tr>
                                <tr>
                                    <td>116</td>
                                    <td>SRI SARAN D</td>
                                    <td>14-09-2020</td>
                                    <td>LKG</td>
                                    <td>Dinakaran P</td>
                                    <td>9944588659</td>
                                    <td>A1 B+</td>
                                    <td>S.No 406/1, PSC Garden, Mathampalayam, Cbe</td>
                                </tr>
                                <tr>
                                    <td>117</td>
                                    <td>VARUN KRISH</td>
                                    <td>09-09-2020</td>
                                    <td>LKG</td>
                                    <td>Haridass E</td>
                                    <td>9524211306</td>
                                    <td>O+</td>
                                    <td>No.34/4, Selvapuram north, Near bible college, Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>118</td>
                                    <td>SHIVANI R</td>
                                    <td>12.07.2020</td>
                                    <td>LKG</td>
                                    <td>Rajaguru</td>
                                    <td>9360959676</td>
                                    <td>O+</td>
                                    <td>4/7, Postal Colony, Kashturi Palayam, Cbe</td>
                                </tr>
                                <tr>
                                    <td>119</td>
                                    <td>SASHVIDHA</td>
                                    <td>25-02-2020</td>
                                    <td>LKG</td>
                                    <td>Babu B</td>
                                    <td>7708624404</td>
                                    <td>AB+</td>
                                    <td>47/15, R .V.Nagar, 9th street, PN Playam, Cbe-20</td>
                                </tr>
                                <tr>
                                    <td>120</td>
                                    <td>DARIKA A</td>
                                    <td>21-04-2021</td>
                                    <td>Pre KG</td>
                                    <td>Anand kumar N</td>
                                    <td>9003599854</td>
                                    <td>A+</td>
                                    <td>64B Annanagar, samichettypalayam, Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>121</td>
                                    <td>HARIJITH J</td>
                                    <td>07-08-2021</td>
                                    <td>Pre KG</td>
                                    <td>Janagan</td>
                                    <td>8940039224</td>
                                    <td></td>
                                    <td>140,R.V.Street, Veerapandi pirivu,Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>122</td>
                                    <td>HEMANTH P</td>
                                    <td>01-01-2021</td>
                                    <td>Pre KG</td>
                                    <td>Prabhakaran D</td>
                                    <td>9025105944</td>
                                    <td></td>
                                    <td>Sri barathi nagar, G.Gowndampalayam,Cbe-20</td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>KERTHISH A</td>
                                    <td>21-03-2021</td>
                                    <td>Pre KG</td>
                                    <td>Arun kumar P</td>
                                    <td>9344386774</td>
                                    <td></td>
                                    <td>972/34, Sri bharathi nagar, PN Palayam, Cbe-20</td>
                                </tr>
                                <tr>
                                    <td>124</td>
                                    <td>KIRTHISH KUMAR D</td>
                                    <td>01-12-2020</td>
                                    <td>Pre KG</td>
                                    <td>Dinesh kumar N</td>
                                    <td>9894190262</td>
                                    <td>O+</td>
                                    <td>80,Vattaparai pudur, Jothipuram,Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>125</td>
                                    <td>NIKIL K M</td>
                                    <td>05-01-2021</td>
                                    <td>Pre KG</td>
                                    <td>Kani K</td>
                                    <td>9894772109</td>
                                    <td></td>
                                    <td>143/6,Bharathi nagar, PN Palayam, Cbe-20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="Management" class="tabcontent">
                        <h3>STUDENT DETAILS</h3>
                        <table class="faculty-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>NAME</th>
                                    <th>DOB</th>
                                    <th>CLASS</th>
                                    <th>FATHER NAME</th>
                                    <th>PH.NO</th>
                                    <th>B.G</th>
                                    <th>ADDRESS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>126</td>
                                    <td>ALWIN R</td>
                                    <td>07.06.2018</td>
                                    <td>1</td>
                                    <td>Robert Rechard A</td>
                                    <td>6383868115</td>
                                    <td>B+</td>
                                    <td>386, Balaji Garden, Press Colony, Cbe-20</td>
                                </tr>
                                <tr>
                                    <td>127</td>
                                    <td>DHARSHITH P S</td>
                                    <td>22.04.2017</td>
                                    <td>1</td>
                                    <td>Preshnave</td>
                                    <td>9080107559</td>
                                    <td>B+</td>
                                    <td>K.R Colony, Karamadai, Cbe.</td>
                                </tr>
                                <tr>
                                    <td>128</td>
                                    <td>VARSHA SRI B</td>
                                    <td>18-01-2019</td>
                                    <td>1</td>
                                    <td>Balaji</td>
                                    <td>7708855326</td>
                                    <td>A+</td>
                                    <td>10b-1, Vallalar Nagar, Santhimedu, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>129</td>
                                    <td>RHEMA ZOE DANIEL D</td>
                                    <td>31.01.2017</td>
                                    <td>III</td>
                                    <td>Daniel Rajan</td>
                                    <td>9677203803</td>
                                    <td>A+</td>
                                    <td>1/2, Amsi Nagar, Jothipuram(Po), Selvapuram(Via), Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>130</td>
                                    <td>SHANVI S</td>
                                    <td>12.08.2017</td>
                                    <td>III</td>
                                    <td>Suresh Babu</td>
                                    <td>9843855481</td>
                                    <td>B+</td>
                                    <td>15a/2, Vallalar Nagar, Shanthimedu, Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>131</td>
                                    <td>NAKSHATRA G</td>
                                    <td>25.07.2017</td>
                                    <td>III</td>
                                    <td>Gunasekaran.S</td>
                                    <td>7448580556</td>
                                    <td>O+</td>
                                    <td>16/48 Asokathottam, Press Colony post, CBE -19</td>
                                </tr>
                                <tr>
                                    <td>132</td>
                                    <td>SUPREETH M</td>
                                    <td>24.06.2016</td>
                                    <td>III</td>
                                    <td>Murugan N</td>
                                    <td>8870615571</td>
                                    <td>O+</td>
                                    <td>48, Asoka thotham, Press Colony post, Cbe -19</td>
                                </tr>
                                <tr>
                                    <td>133</td>
                                    <td>VIDYUT PRITHVI</td>
                                    <td>16-05-2017</td>
                                    <td>II</td>
                                    <td>Janagan</td>
                                    <td>8940039224</td>
                                    <td></td>
                                    <td>140, R.V.Street, Veerapandi pirivu, Cbe-47</td>
                                </tr>
                                <tr>
                                    <td>134</td>
                                    <td>LIKISHA</td>
                                    <td>04-11-2017</td>
                                    <td>II</td>
                                    <td>Murugan N</td>
                                    <td>8870615571</td>
                                    <td></td>
                                    <td>48, Asoka thotham, Press Colony post, Cbe -19</td>
                                </tr>
                                <tr>
                                    <td>135</td>
                                    <td>NAVIS G</td>
                                    <td>09-06-2017</td>
                                    <td>II</td>
                                    <td>Gokula vishnu C P</td>
                                    <td>9600684269</td>
                                    <td>B+</td>
                                    <td>24 Sri ranga nagar, Pudhur road, PN Palayam, Cbe-641020</td>
                                </tr>
                                <tr>
                                    <td>136</td>
                                    <td>NITHIN A</td>
                                    <td>30.08.2017</td>
                                    <td>II</td>
                                    <td>Arumugam</td>
                                    <td>9894701813</td>
                                    <td></td>
                                    <td>7/213 Samanaicken Palayam, No.4 Veerapandi (Po),Cbe-19</td>
                                </tr>
                                <tr>
                                    <td>137</td>
                                    <td>NIZHISHA P S</td>
                                    <td>09.10.2013</td>
                                    <td>VI</td>
                                    <td>Preshnave</td>
                                    <td>9080107559</td>
                                    <td>B+</td>
                                    <td>46/1 Kr Colony , Karamadai</td>
                                </tr>
                                <tr>
                                    <td>138</td>
                                    <td>HASITHA A</td>
                                    <td>09.06.2016</td>
                                    <td>IV</td>
                                    <td>ASHOK KUMAR</td>
                                    <td>9940755711</td>
                                    <td>B+</td>
                                    <td>39 VATTAPARAI PUDUR, TN PALAM, SELVAPURAM ROAD, JOTHIPURAM(PO),CBE-47</td>
                                </tr>
                                <tr>
                                    <td>139</td>
                                    <td>YASWANTH A</td>
                                    <td>25-04-2016</td>
                                    <td>IV</td>
                                    <td>Anandaraj</td>
                                    <td>6383613921</td>
                                    <td>O+</td>
                                    <td>5/342, Angalamman St, Naickanpalayam, Cbe-20</td>
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