<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rajasthan Police</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/rajasthan_police.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    {{-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/rajasthan_police.png" alt="">
                <h1 data-lang-en="Rajasthan Police" data-lang-hi="राजस्थान पुलिस">Rajasthan Police</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html" class="active" data-lang-en="Home" data-lang-hi="होम">Home</a></li>
                    <li><a href="#featured-services" data-lang-en="Citizen Services"
                            data-lang-hi="नागरिक सेवाएँ">Citizen Services</a></li>
                    <li><a href="#service" data-lang-en="News" data-lang-hi="समाचार">News</a></li>
                    <li><a href="" data-bs-toggle="modal" data-bs-target="#largeModal" data-lang-en="Helplines"
                            data-lang-hi="हेल्पलाइनें">Helplines</a></li>
                    <!-- <li><button id="languageToggle" >Toggle Language</button></li> -->
                    <li><button id="languageToggle" class="btn btn-secondary btn-sm"
                            style="margin-left: 15px;">हिंदी</button></li>
                    <li><a class="get-a-quote" href="{{ url('/login') }}" data-lang-en="Login"
                            data-lang-hi="लॉग इन">Login</a></li>

                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- #180E90 -->
    <br><br><br><br>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center" style="background-image: url('assets/img/s6.jpg'); ">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <!-- <h2 data-aos="fade-up" data-translation="Committed to serve">Committed to serve</h2> -->
                    <h2 data-aos="fade-up" data-lang-en="Committed to serve" data-lang-hi="सेवार्थ कटिबद्धता">Committed
                        to serve</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                    <h3 style="margin-top:-60px; font-weight: bolder; color: rgba(14, 29, 52, 0.9);"
                        data-lang-en="(सेवार्थ कटिबद्धता)" data-lang-hi="(Committed to serve)">(सेवार्थ कटिबद्धता)</h3>
                    </p>

                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="section-header">
                    <span data-lang-en="Citizen Services" data-lang-hi="नागरिक सेवाएँ">Citizen Services</span>

                    <h2 data-lang-en="Citizen Services" data-lang-hi="नागरिक सेवाएँ">Citizen Services</h2>
                    <!-- <h2>Citizen Services</h2> -->
                </div>



                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="bi bi-book"></i></div>
                        <a href="https://rj.ltr-soft.com/register" style="text-decoration: none; color: black;">
                            <div>
                                <h4 class="title" data-lang-en="Complaint Registration"
                                    data-lang-hi="शिकायत पंजीकरण">Complaint Registration</h4>
                                <p data-lang-en="File complaints and report incidents securely with our Complaint Registration portal. Provide essential details, attach supporting documents, and submit for swift investigation. Rest assured, your information is handled confidentially. Help us maintain a safe community. "
                                    data-lang-hi="हमारे शिकायत पंजीकरण पोर्टल पर सुरक्षित रूप से शिकायतें दर्ज करें और घटनाओं की रिपोर्ट करें। आवश्यक विवरण प्रदान करें, सहायक दस्तावेज़ संलग्न करें, और त्वरित जांच के लिए सबमिट करें। निश्चिंत रहें, आपकी जानकारी गोपनीय रूप से संभाली जाती है। एक सुरक्षित समुदाय बनाए रखने में हमारी सहायता करें।">
                                    File complaints and report incidents securely with our Complaint Registration
                                    portal. Provide essential details, attach supporting documents, and submit for swift
                                    investigation. Rest assured, your information is handled confidentially. Help us
                                    maintain a safe community. </p>

                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-person-exclamation"></i></i></div>
                    <a href="https://rj.ltr-soft.com/register">
                        <div>
                            <h4 class="title" data-lang-en="Missing Persons" data-lang-hi="गुमशुदा व्यक्ति">Missing
                                Persons</h4>
                            <p class="description"
                                data-lang-en="Use our Missing Persons Report feature to promptly report and provide details about individuals who are missing. Fill in the necessary information, including the person's name, physical description, last known location, and any other relevant details. Help us in locating and reuniting missing individuals with their families. For emergencies or immediate assistance, contact [Emergency Number]. Your cooperation is crucial in fostering a safe community."
                                data-lang-hi="लापता व्यक्तियों के बारे में तुरंत रिपोर्ट करने और विवरण प्रदान करने के लिए हमारी गुमशुदा व्यक्तियों की रिपोर्ट सुविधा का उपयोग करें। व्यक्ति का नाम, भौतिक विवरण, अंतिम ज्ञात स्थान और अन्य प्रासंगिक विवरण सहित आवश्यक जानकारी भरें। लापता व्यक्तियों का पता लगाने और उन्हें उनके परिवारों से मिलाने में हमारी सहायता करें। आपात्कालीन स्थिति या तत्काल सहायता के लिए, [आपातकालीन नंबर] पर संपर्क करें। एक सुरक्षित समुदाय को बढ़ावा देने में आपका सहयोग महत्वपूर्ण है।">
                                Use our Missing Persons Report feature to promptly report and provide details about
                                individuals who are missing. Fill in the necessary information, including the person's
                                name, physical description, last known location, and any other relevant details. Help us
                                in locating and reuniting missing individuals with their families. For emergencies or
                                immediate assistance, contact [Emergency Number]. Your cooperation is crucial in
                                fostering a safe community.</p>

                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0"><i class="bi bi-eye-fill"></i></div>
                <a href="https://rj.ltr-soft.com/register">
                    <div>
                        <h4 class="title" data-lang-en="View FIR" data-lang-hi="एफआईआर देखें">View FIR</h4>
                        <p class="description"
                            data-lang-en="Access our FIR database to review filed reports. Stay informed about incidents in the community."
                            data-lang-hi="दायर रिपोर्ट की समीक्षा के लिए हमारे एफआईआर डेटाबेस तक पहुंचें। समुदाय में होने वाली घटनाओं के बारे में सूचित रहें।">
                            Access our FIR database to review filed reports. Stay informed about incidents in the
                            community.</p>

                    </div>
            </div>
            </a>
            </div>
            </div>

            <br><br>

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <a href="https://rj.ltr-soft.com/register">
                            <div class="icon flex-shrink-0"><i class="bi bi-car-front-fill"></i></i></div>
                            <div>
                                <h4 class="title" data-lang-en="E-FIR (vehical theft)"
                                    data-lang-hi="ई-एफआईआर (वाहन चोरी)">E-FIR (vehical theft)</h4>
                                <p class="description"
                                    data-lang-en="Report vehicle theft online with our E-FIR service. Provide details like vehicle information, location, and incident description for swift action."
                                    data-lang-hi="हमारी ई-एफआईआर सेवा के साथ वाहन चोरी की ऑनलाइन रिपोर्ट करें। त्वरित कार्रवाई के लिए वाहन की जानकारी, स्थान और घटना विवरण जैसे विवरण प्रदान करें।">
                                    Report vehicle theft online with our E-FIR service. Provide details like vehicle
                                    information, location, and incident description for swift action.</p>
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-check-circle-fill"></i></div>
                    <a href="https://rj.ltr-soft.com/register">
                        <div>
                            <h4 class="title" data-lang-en="Employee Verification" data-lang-hi="कर्मचारी सत्यापन">
                                Employee Verification</h4>
                            <p class="description"
                                data-lang-en="Verify employee details effortlessly through our secure portal. Ensure accurate information for a trusted workforce. For any concerns or emergencies, contact."
                                data-lang-hi="हमारे सुरक्षित पोर्टल के माध्यम से कर्मचारी विवरण आसानी से सत्यापित करें। विश्वसनीय कार्यबल के लिए सटीक जानकारी सुनिश्चित करें। किसी भी चिंता या आपात स्थिति के लिए संपर्क करें।">
                                Verify employee details effortlessly through our secure portal. Ensure accurate
                                information for a trusted workforce. For any concerns or emergencies, contact. </p>

                        </div>
                    </a>
                </div>
            </div>

        </section>

        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span data-lang-en="Press Release News And Articles"
                        data-lang-hi="प्रेस विज्ञप्ति समाचार और लेख">Press Release News And Articles</span>

                    <h2 data-lang-en="Press Release News And Articles" data-lang-hi="प्रेस विज्ञप्ति समाचार और लेख">
                        Press Release News And Articles</h2>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/news.jpeg" alt="" class="img-fluid">
                            </div>
                            <h3 style="color: #001973;" data-lang-en="DGP SETS POLICE PRIORITIES FOR 2024"
                                data-lang-hi="डीजीपी ने 2024 के लिए पुलिस प्राथमिकताएं तय कीं">DGP SETS POLICE
                                PRIORITIES FOR 2024</h3>
                            <p data-lang-en="Rajasthan Police's 2024 priorities include combating organized crime, protecting vulnerable groups, addressing cybercrime through training and public awareness, and enhancing traffic management. Administrative focuses involve infrastructure upkeep, health programs for personnel, and timely digitization of administrative records."
                                data-lang-hi="राजस्थान पुलिस की 2024 की प्राथमिकताओं में संगठित अपराध से निपटना, कमजोर समूहों की रक्षा करना, प्रशिक्षण और जन जागरूकता के माध्यम से साइबर अपराध को संबोधित करना और यातायात प्रबंधन को बढ़ाना शामिल है। प्रशासनिक फोकस में बुनियादी ढांचे का रखरखाव, कर्मियों के लिए स्वास्थ्य कार्यक्रम और प्रशासनिक रिकॉर्ड का समय पर डिजिटलीकरण शामिल है।">
                                Rajasthan Police's 2024 priorities include combating organized crime, protecting
                                vulnerable groups, addressing cybercrime through training and public awareness, and
                                enhancing traffic management. Administrative focuses involve infrastructure upkeep,
                                health programs for personnel, and timely digitization of administrative records.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/DGP_Disk_2023_10_30_8d64884a0c.jpeg" alt=""
                                    class="img-fluid" height="20px">
                            </div>
                            <h3 style="color: #001973;"
                                data-lang-en="4 IPS OFFICERS HONORED WITH DGP DISC AND COMMENDATION ROLL"
                                data-lang-hi="4 आईपीएस अधिकारियों को डीजीपी डिस्क और कमेंडेशन रोल से सम्मानित किया गया">
                                4 IPS OFFICERS HONORED WITH DGP DISC AND COMMENDATION ROLL</h3>

                            <p data-lang-en="Director-General of Police Umesh Mishra honored four IPS officers with DGP Disc and commendation, including Mr. D.C. Jain appointed as CBI Special Director. Recognition also went to Mr. Biju Joseph, Mr. Kaluram Rawat, and Mr. Shankar Datt Sharma for their commendable contributions in various roles."
                                data-lang-hi="पुलिस महानिदेशक उमेश मिश्रा ने चार आईपीएस अधिकारियों को डीजीपी डिस्क एवं प्रशस्ति से सम्मानित किया, जिनमें सीबीआई के विशेष निदेशक नियुक्त श्री डी.सी. जैन भी शामिल हैं। विभिन्न भूमिकाओं में सराहनीय योगदान के लिए श्री बीजू जोसेफ, श्री कालूराम रावत और श्री शंकर दत्त शर्मा को भी सम्मान मिला।">
                                Director-General of Police Umesh Mishra honored four IPS officers with DGP Disc and
                                commendation, including Mr. D.C. Jain appointed as CBI Special Director. Recognition
                                also went to Mr. Biju Joseph, Mr. Kaluram Rawat, and Mr. Shankar Datt Sharma for their
                                commendable contributions in various roles.
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/asian_games_winners_12_10_2023_e500d18f36.jpg" alt=""
                                    class="img-fluid" height="20px">
                            </div>
                            <h3 style="color: #001973;"
                                data-lang-en="GRAND WELCOME AT POLICE HEADQUARTERS FOR RAJASTHAN POLICE ATHLETES WHO WON MEDALS AT THE ASIAN GAMES; DGP UMESH MISHRA CONGRATULATES"
                                data-lang-hi="एशियाई खेलों में पदक जीतने वाले राजस्थान पुलिस के खिलाड़ियों का पुलिस मुख्यालय में भव्य स्वागत; डीजीपी उमेश मिश्रा ने बधाई दी">
                                GRAND WELCOME AT POLICE HEADQUARTERS FOR RAJASTHAN POLICE ATHLETES WHO WON MEDALS AT THE
                                ASIAN GAMES; DGP UMESH MISHRA CONGRATULATES</h3>
                            <p data-lang-en="Director-General of Police Umesh Mishra congratulated and awarded cash prizes to Rajasthan Police's Asian Games medalists, emphasizing ongoing support for top-selected athletes. The medal-winning athletes, including Kabaddi gold medalists, were commended for bringing pride to the state and the country."
                                data-lang-hi="पुलिस महानिदेशक उमेश मिश्रा ने राजस्थान पुलिस के एशियाई खेलों के पदक विजेताओं को बधाई दी और नकद पुरस्कार से सम्मानित किया, साथ ही शीर्ष चयनित एथलीटों के लिए निरंतर समर्थन पर जोर दिया। राज्य और देश को गौरवान्वित करने के लिए कबड्डी के स्वर्ण पदक विजेताओं सहित पदक विजेता एथलीटों की सराहना की गई।">
                                Director-General of Police Umesh Mishra congratulated and awarded cash prizes to
                                Rajasthan Police's Asian Games medalists, emphasizing ongoing support for top-selected
                                athletes. The medal-winning athletes, including Kabaddi gold medalists, were commended
                                for bringing pride to the state and the country.
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/DGP_Ret_2_8d32dbcf9c.jpeg" alt="" class="img-fluid"
                                    height="20px">
                            </div>
                            <h3 style="color: #001973;"
                                data-lang-en="FAREWELL TO RETIRING DGP MR. MISHRA AS POLICE BID ADIEU BY PULLING CAR WITH ROPES."
                                data-lang-hi="सेवानिवृत्त डीजीपी श्री को विदाई दी गई। पुलिस ने रस्सियों से कार खींचकर मिश्रा को विदाई दी।">
                                FAREWELL TO RETIRING DGP MR. MISHRA AS POLICE BID ADIEU BY PULLING CAR WITH ROPES.</h3>
                            <p data-lang-en="Director General of Police Umesh Mishra bid farewell in a grand ceremony at the police headquarters, acknowledging achievements and milestones under his leadership. The emotional event included personnel pulling his car with ropes, symbolizing gratitude for his service, with mementos presented by DGP U.R. Sahu."
                                data-lang-hi="पुलिस महानिदेशक उमेश मिश्रा ने पुलिस मुख्यालय में एक भव्य समारोह में उनके नेतृत्व में उपलब्धियों और मील के पत्थर को स्वीकार करते हुए विदाई दी। इस भावनात्मक घटना में कर्मियों द्वारा उनकी कार को रस्सियों से खींचना, उनकी सेवा के लिए आभार का प्रतीक, डीजीपी यू.आर. द्वारा स्मृति चिन्ह प्रस्तुत करना शामिल था। साहू.">
                                Director General of Police Umesh Mishra bid farewell in a grand ceremony at the police
                                headquarters, acknowledging achievements and milestones under his leadership. The
                                emotional event included personnel pulling his car with ropes, symbolizing gratitude for
                                his service, with mementos presented by DGP U.R. Sahu.
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/News.jpeg" alt="" class="img-fluid" height="20px">
                            </div>
                            <h3 style="color: #001973;"
                                data-lang-en="CONGRATULATORY MESSAGE FROM DIRECTOR GENERAL OF POLICE RAJASTHAN ON THE OCCASION OF NEW YEAR"
                                data-lang-hi="नव वर्ष के अवसर पर पुलिस महानिदेशक, राजस्थान की ओर से बधाई संदेश">
                                CONGRATULATORY MESSAGE FROM DIRECTOR GENERAL OF POLICE RAJASTHAN ON THE OCCASION OF NEW
                                YEAR</h3>
                            <p data-lang-en="Director General of Police U.R. Sahoo extends New Year greetings, urging Rajasthan Police to uphold traditions, ensure peace, and combat crimes, especially those against women and vulnerable sections, for a crime-free and safe state. Emphasizes dedication, devotion, and promptness in fulfilling responsibilities."
                                data-lang-hi="पुलिस महानिदेशक यू.आर. साहू ने नए साल की शुभकामनाएं देते हुए राजस्थान पुलिस से परंपराओं को बनाए रखने, शांति सुनिश्चित करने और अपराध-मुक्त और सुरक्षित राज्य के लिए विशेष रूप से महिलाओं और कमजोर वर्गों के खिलाफ अपराधों से निपटने का आग्रह किया। जिम्मेदारियों को पूरा करने में समर्पण, समर्पण और तत्परता पर जोर देता है।">
                                Director General of Police U.R. Sahoo extends New Year greetings, urging Rajasthan
                                Police to uphold traditions, ensure peace, and combat crimes, especially those against
                                women and vulnerable sections, for a crime-free and safe state. Emphasizes dedication,
                                devotion, and promptness in fulfilling responsibilities.
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/News.jpeg" alt="" class="img-fluid" height="20px">
                            </div>
                            <h3 style="color: #001973;"
                                data-lang-en="THE CHIEF MINISTER'S CRUCIAL DECISION WILL NOW ADDRESS THE ISSUE OF LEAKED PAPERS AND CULPRITS INVOLVED IN CHEATING, IMPACTING THE FUTURE OF THE STATE'S YOUTH."
                                data-lang-hi="मुख्यमंत्री के महत्वपूर्ण फैसले से अब लीक हुए पेपर और धोखाधड़ी में शामिल अपराधियों की समस्या का समाधान होगा, जो राज्य के युवाओं के भविष्य को प्रभावित कर रहा है।">
                                THE CHIEF MINISTER'S CRUCIAL DECISION WILL NOW ADDRESS THE ISSUE OF LEAKED PAPERS AND
                                CULPRITS INVOLVED IN CHEATING, IMPACTING THE FUTURE OF THE STATE'S YOUTH.</h3>
                            <p data-lang-en="Chief Minister Bhajanlal Sharma directs Chief Secretary and DGP to monitor recruitment exams, ensuring strict measures against malpractices. Special focus on exam centers and coaching institutes, with a helpline (9530429258) for reporting irregularities; emphasis on swift trials under the Case Officer Scheme."
                                data-lang-hi="मुख्यमंत्री भजनलाल शर्मा ने मुख्य सचिव और डीजीपी को भर्ती परीक्षाओं की निगरानी करने और कदाचार के खिलाफ सख्त कदम सुनिश्चित करने का निर्देश दिया। परीक्षा केंद्रों और कोचिंग संस्थानों पर विशेष ध्यान, अनियमितताओं की रिपोर्ट करने के लिए हेल्पलाइन (9530429258) के साथ; केस ऑफिसर स्कीम के तहत त्वरित सुनवाई पर जोर।">
                                Chief Minister Bhajanlal Sharma directs Chief Secretary and DGP to monitor recruitment
                                exams, ensuring strict measures against malpractices. Special focus on exam centers and
                                coaching institutes, with a helpline (9530429258) for reporting irregularities; emphasis
                                on swift trials under the Case Officer Scheme.
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>
        </section><!-- End Services Section -->

        </div>
        </section>


        </div>

        </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="slides-1 swiper" data-aos="fade-up">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/s2.jpeg')}}" alt=""
                                    style="width:1250px; height:500px; background-position: center center;">
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/s3.jpeg')}}" alt=""
                                    style="width:1250px; height:500px; background-position: center center;">

                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/s3.jpg')}}" alt=""
                                    style="width:1250px; height:500px; background-position: center center;">

                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/Presentdgp.jpg')}}" alt=""
                                    style="width:1250px; height:500px; background-position: center center;">

                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/salami.jpg')}}" alt=""
                                    style="width:1250px; height:500px; background-position: center center;">

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/slider4.jpg')}}" alt=""
                                    style="width:1250px; height:500px; background-position: center center;">

                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span data-lang-en="Frequently Asked Questions"
                        data-lang-hi="अक्सर पूछे जाने वाले प्रश्नों">Frequently Asked Questions</span>
                    <h2 data-lang-en="Frequently Asked Questions" data-lang-hi="अक्सर पूछे जाने वाले प्रश्नों">
                        Frequently Asked Questions</h2>

                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-10">

                        <div class="accordion accordion-flush" id="faqlist">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-1"
                                        data-lang-en="1. What is the role of the police?"
                                        data-lang-hi="1. पुलिस की भूमिका क्या है?">
                                        <!-- <i class="bi bi-question-circle question-icon"></i> -->
                                        1. What is the role of the police?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body"
                                        data-lang-en="The primary role of the police is to maintain public order, prevent and investigate crimes, and ensure the safety and well-being of the community."
                                        data-lang-hi="पुलिस की प्राथमिक भूमिका सार्वजनिक व्यवस्था बनाए रखना, अपराधों को रोकना और जांच करना और समुदाय की सुरक्षा और भलाई सुनिश्चित करना है।">
                                        The primary role of the police is to maintain public order, prevent and
                                        investigate crimes, and ensure the safety and well-being of the community.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-2"
                                        data-lang-en="2. How can I contact the police in case of an emergency?"
                                        data-lang-hi="2. आपात्कालीन स्थिति में मैं पुलिस से कैसे संपर्क कर सकता हूँ?">
                                        <!-- <i class="bi bi-question-circle question-icon"></i> -->
                                        2. How can I contact the police in case of an emergency?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body"
                                        data-lang-en="In most countries, the emergency number is 112. Dial this number for immediate assistance in case of emergencies."
                                        data-lang-hi="अधिकांश देशों में आपातकालीन नंबर 112 है। आपात स्थिति में तत्काल सहायता के लिए इस नंबर को डायल करें।">
                                        In most countries, the emergency number is 112. Dial this number for immediate
                                        assistance in case of emergencies.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-3"
                                        data-lang-en="3. How do I report a crime to the police?"
                                        data-lang-hi="3. मैं पुलिस को किसी अपराध की रिपोर्ट कैसे करूँ?">
                                        <!-- <i class="bi bi-question-circle question-icon"></i> -->
                                        3. How do I report a crime to the police?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body"
                                        data-lang-en="You can report a crime by visiting your local police station in person, calling the non-emergency police line, or using online reporting systems (RajUser android App). In emergencies, always call 112."
                                        data-lang-hi="आप व्यक्तिगत रूप से अपने स्थानीय पुलिस स्टेशन में जाकर, गैर-आपातकालीन पुलिस लाइन पर कॉल करके, या ऑनलाइन रिपोर्टिंग सिस्टम (राजयूजर एंड्रॉइड ऐप) का उपयोग करके अपराध की रिपोर्ट कर सकते हैं। आपातकालीन स्थिति में हमेशा 112 पर कॉल करें।">
                                        You can report a crime by visiting your local police station in person, calling
                                        the non-emergency police line, or using online reporting systems (RajUser
                                        android App). In emergencies, always call 112.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-4"
                                        data-lang-en="4. Can I file a police report online?"
                                        data-lang-hi="4. क्या मैं पुलिस रिपोर्ट ऑनलाइन दर्ज कर सकता हूँ?">
                                        <!-- <i class="bi bi-question-circle question-icon"></i> -->
                                        4. Can I file a police report online?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body"
                                        data-lang-en="Yes, you can file report online using RajUser app."
                                        data-lang-hi=" हां, आप राजयूजर ऐप का उपयोग करके ऑनलाइन रिपोर्ट दर्ज कर सकते हैं।">
                                        Yes, you can file report online using RajUser app.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-5"
                                        data-lang-en="5. How can I obtain a copy of a police report?"
                                        data-lang-hi="5. मैं पुलिस रिपोर्ट की प्रति कैसे प्राप्त कर सकता हूँ?">
                                        <!-- <i class="bi bi-question-circle question-icon"></i> -->
                                        5. How can I obtain a copy of a police report?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body"
                                        data-lang-en="You can obtain copy of police report by using RajUser app."
                                        data-lang-hi="आप राजयूजर ऐप का उपयोग करके पुलिस रिपोर्ट की प्रति प्राप्त कर सकते हैं।">
                                        You can obtain copy of police report by using RajUser app.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-6"
                                        data-lang-en="6. What should I do if I witness a crime?"
                                        data-lang-hi="6. यदि मैं कोई अपराध देखता हूँ तो मुझे क्या करना चाहिए?">
                                        <!-- <i class="bi bi-question-circle question-icon"></i> -->
                                        6. What should I do if I witness a crime?
                                    </button>
                                </h3>
                                <div id="faq-content-6" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body"
                                        data-lang-en="If you witness a crime, it's important to stay safe. Call the police immediately and provide them with as much information as possible, such as your location, a description of the incident, and any details about the individuals involved. Also This facility is available on our RajUser App"
                                        data-lang-hi="यदि आप कोई अपराध देखते हैं, तो सुरक्षित रहना महत्वपूर्ण है। पुलिस को तुरंत कॉल करें और उन्हें यथासंभव अधिक जानकारी प्रदान करें, जैसे कि आपका स्थान, घटना का विवरण और इसमें शामिल व्यक्तियों के बारे में कोई भी विवरण। साथ ही यह सुविधा हमारे राजयूजर ऐप पर भी उपलब्ध है">
                                        If you witness a crime, it's important to stay safe. Call the police immediately
                                        and provide them with as much information as possible, such as your location, a
                                        description of the incident, and any details about the individuals involved.
                                        Also This facility is available on our RajUser App
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-7"
                                        data-lang-en="7. What is community policing?"
                                        data-lang-hi="7. सामुदायिक पुलिसिंग क्या है?">
                                        <!-- <i class="bi bi-question-circle question-icon"></i> -->
                                        7. What is community policing?
                                    </button>
                                </h3>
                                <div id="faq-content-7" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body"
                                        data-lang-en="Community policing is a strategy that involves building positive relationships between the police and the community. It focuses on collaboration and communication to address public safety issues."
                                        data-lang-hi="सामुदायिक पुलिसिंग एक रणनीति है जिसमें पुलिस और समुदाय के बीच सकारात्मक संबंध बनाना शामिल है। यह सार्वजनिक सुरक्षा मुद्दों के समाधान के लिए सहयोग और संचार पर केंद्रित है।">
                                        Community policing is a strategy that involves building positive relationships
                                        between the police and the community. It focuses on collaboration and
                                        communication to address public safety issues.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span data-lang-en="Rajasthan Police" data-lang-hi="राजस्थान पुलिस">Rajasthan Police</span>
                    </a>
                    <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p> -->
                    <div class="social-links d-flex mt-4">
                        <a href="https://twitter.com/PoliceRajasthan" class="twitter"><i
                                class="bi bi-twitter"></i></a>
                        <a href="https://www.facebook.com/PoliceRajasthan" class="facebook"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/PoliceRajasthan/" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.youtube.com/@PoliceRajasthanOfficial" class="linkedin"><i
                                class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4 data-lang-en="Useful Links" data-lang-hi="उपयोगी कड़ियां">Useful Links</h4>
                    <ul>
                        <li><a href="#" data-lang-en="Home" data-lang-hi="होम">Home</a></li>
                        <li><a href="#featured-services" data-lang-en="Citizen Services"
                                data-lang-hi="नागरिक सेवा">Citizen Services</a></li>
                        <li><a href="#service" data-lang-en="News" data-lang-hi="समाचार">News</a></li>
                        <!-- <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li> -->
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Other citizen services</h4>
                    <ul>
                        <li><a href="#" data-lang-en="Automobile Query"
                                data-lang-hi="ऑटोमोबाइल क्वेरी">Automobile Query</a></li>
                        <li><a href="#" data-lang-en="Servent/ Employee Verfication Request"
                                data-lang-hi="नौकर/कर्मचारी सत्यापन अनुरोध">Servent/ Employee Verfication Request</a>
                        </li>
                        <li><a href="#" data-lang-en="Servent/ Employee Verfication Status"
                                data-lang-hi="नौकर/कर्मचारी सत्यापन स्थिति">Servent/ Employee Verfication Status</a>
                        </li>
                        <li><a href="#" data-lang-en="Lost Article Report"
                                data-lang-hi="खोए हुए लेख की रिपोर्ट">Lost Article Report</a></li>
                        <li><a href="#" data-lang-en="Character Verification"
                                data-lang-hi="चरित्र सत्यापन">Character Verification</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <!-- <h4>Contact Us</h4>
          <p>
            Jaipur, Rajasthan, India<br><br>
            <strong>Phone:</strong> 0141-2300597<br>
            <strong>Email:</strong> sp.scrb@rajpolice.gov.in<br>
          </p> -->
                    <h4 data-lang-en="Contact Us" data-lang-hi="संपर्क करें">Contact Us</h4>
                    <p data-lang-en="Jaipur, Rajasthan, India" data-lang-hi="जयपुर, राजस्थान, भारत">
                        Jaipur, Rajasthan, India<br><br></p>
                    <p>
                        <strong data-lang-en="Phone:" data-lang-hi="फ़ोन:">Phone:</strong> 0141-2300597<br>
                        <strong data-lang-en="Email:" data-lang-hi="ईमेल:">Email:</strong>
                        sp.scrb@rajpolice.gov.in<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Ltr-Soft</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="https://ltr-soft.com/">Ltr-Soft</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- <div id="preloader"></div> --}}


    <div class="modal fade" id="largeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #406aff; color:white;">
                    <h5 class="modal-title">Helplines</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <div class="container"> -->
                    <div class="row gy-4">

                        <div class="col-lg-6 col-6">
                            <i class="bx bx-send"></i><b> Emergency No. : </b>112
                        </div>

                        <div class="col-lg-6 col-6">
                            <i class="bx bx-send"></i><b> Garima Helpline : </b>1090
                        </div>

                        <div class="col-lg-6 col-6">
                            <i class="bx bx-send"></i><b> Child Helpline : </b>1098
                        </div>

                        <div class="col-lg-6 col-6">
                            <i class="bx bx-send"></i><b> Ambulance No. : </b>108
                        </div>

                        <div class="col-lg-6 col-6">
                            <i class="bx bx-send"></i><b> CyberCrime Helpline : </b>1930
                        </div>

                        <div class="col-lg-6 col-6">
                            <i class="bx bx-send"></i><b> State Centralized call Center no. : </b>181
                        </div>

                        <!-- </div> -->
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let isHindi = false;

            function toggleLanguage() {
                const elementsToTranslate = document.querySelectorAll('[data-lang-en]');

                elementsToTranslate.forEach((element) => {
                    const englishText = element.getAttribute('data-lang-en');
                    const hindiText = element.getAttribute('data-lang-hi');

                    if (isHindi) {
                        element.textContent = englishText;
                    } else {
                        element.textContent = hindiText;
                    }
                });

                // Toggle language flag
                isHindi = !isHindi;

                // Log a message to the console
                console.log(`Language toggled. Hindi mode: ${isHindi}`);
            }

            const languageToggleBtn = document.getElementById('languageToggle');
            if (languageToggleBtn) {
                languageToggleBtn.addEventListener('click', toggleLanguage);
            }
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the button element by its ID
            var languageToggleBtn = document.getElementById('languageToggle');

            // Variable to track the button state
            var isLanguageToggled = false;

            // Function to toggle the button value
            function toggleButtonValue() {
                isLanguageToggled = !isLanguageToggled; // Toggle the state
                languageToggleBtn.textContent = isLanguageToggled ? 'English' : 'हिंदी';
            }

            // Add a click event listener to the button
            languageToggleBtn.addEventListener('click', toggleButtonValue);
        });
    </script>


</body>

</html>
