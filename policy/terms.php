<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Terms and Conditions</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../assets/appointmentAssets/img/favicon.png" rel="icon">
  <link href="../assets/appointmentAssets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/appointmentAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/appointmentAssets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/appointmentAssets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/appointmentAssets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/appointmentAssets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/appointmentAssets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/appointmentAssets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style2.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <div class="logo mr-auto">
        <h1 class="text-light"><a href="../index.php">MCY Dental Clinic</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="active"><a href='../index.php'>Home</a></li>
          <?php
          if (isset($_SESSION["useruid"])) {
              # code...
              echo "<li class='drop-down'><a href=''> My Account | ". $_SESSION["useruid"] . "</a>";
              echo "<ul>";
              echo "<li><a href='../user/profile.php'>My Profile</a></li>";
              echo "<li><a href='../forms/appointment/index.php'>Set an Appointment</a></li>";
              echo "<li><a href='../user/history.php'>History</a></li>";
              echo "<li><a href='../forms/includes/logout.inc.php'>Log Out</a></li>";
              echo "</ul></li>";
          }
          else {
              # code...
              echo "<li><a href='../forms/signup.php'>REGISTER</a></li>";
              echo "<li><a href='../forms/login.php'>LOG IN</a></li>";
          }
         
      ?>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Terms of Service</h2>
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li>Terms of Service</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <p>
        <div class="inner align-items-center">
                <!-- [TERMS OF USE]<br>
By using this Service, you are agreeing to all the terms and conditions found below. If you do not agree with any of these terms, you are prohibited from accessing this site and using the Service offered. To confirm your agreement, you should click on the "I Agree" button at the end of this Agreement. If you do not so agree, you should click on the "I Do Not Agree" button at the end of this Agreement, in which case you reject the offered terms of use and will not be permitted to play games published and distributed by Smilegate Megaport. This Agreement becomes effective when you click on the "I Agree" button, and remains effective unless your membership is cancelled or terminated.<br>
<br>
[CHANGES TO THE TERMS]<br>
We may change these Terms of Use from time to time. You can review the most current version of these terms by clicking on the "Terms of Use" located at the bottom of the Website. You are responsible for checking these terms periodically for changes. If you continue to use the Website after we post the changes to these Terms of Use, you are signifying your acceptance of the new terms. &nbsp;This document was last updated on August.01, 2019<br>
<br>
[BASIC TERMS]<br>
1. You must be 13 years of age to use the Service.<br>
2. You are required to complete a registration form containing your first and last name, nationality, address, e-mail address, a user name and a password. In consideration of the use of the Service, you agree to provide true, accurate, current and complete information about yourself as submitted in any registration form on the Service. &nbsp;Processing of your personal information is primarily governed by our Privacy Policy.<br>
<br>
3. You acknowledge that Smilegate Megaport reserves the right to refuse to grant you a user name that is already in use, may be illegal, may be protected by trade-mark or other proprietary interest, is obscene or profane or otherwise determined by Smilegate Megaport, in its sole discretion, to be inappropriate.<br>
<br>
4. You are required to create an Account ID to identify yourself to Smilegate Megaport Staff. &nbsp;You may not select as your Account ID the name of another person, or a name which violates any third party's trademark right, copyright, or other proprietary right, or which Smilegate Megaport deems in its discretion to be vulgar or otherwise offensive.<br>
<br>
5. You are responsible for maintaining the confidentiality of your password and you are responsible for any harm resulting from your disclosure or allowing the disclosure of your password or from use by any person of your password to gain access to your Account and Account ID.<br>
<br>
6. You agree to keep your password confidential and to notify Smilegate Megaport if you believe that the security of your password has been compromised. You acknowledge that Smilegate Megaport does not protect you from the unauthorized use of your password.<br>
<br>
7. You are required to create a character in order to use the Service and choose a name for it. You may not select as your Character Name the name of another person, or a name which violates any third party's trademark right, copyright, or other proprietary right, or which may mislead other Members to believe you to be an employee of Smilegate Megaport, or which Smilegate Megaport deems at its sole discretion to be vulgar or otherwise offensive.<br>
<br>
8. You may form a guild with other players in the game. You may not select as your Guild Name the name of another person, or a name which violates any third party's trademark right, copyright, or other proprietary right, or which may mislead other Members to believe you to be an employee of Smilegate Megaport, or which Smilegate Megaport deems at its sole discretion to be vulgar or otherwise offensive.<br>
<br>
9. You agree that The Account that you use to access the Service, the characters you select, create and/or modify and any and all items that Smilegate Megaport stores in the server, and other data that the server or Account may have are owned solely by Smilegate Megaport.<br>
<br>
10. You acknowledge that the Service may be interrupted for reasons beyond the control of Smilegate Megaport, and Smilegate Megaport cannot guarantee that you will be able to access the Service or your Account whenever you may wish to do so.<br>
<br>
[GENERAL CONDITIONS]<br>
1. Smilegate Megaport shall have the right to suspend or terminate your right to use the Service and refuse to provide any current or future Service to you<br>
<br>
2. Smilegate Megaport reserves the right to refuse to grant you a user name that is already in use, may be illegal, may be protected by trade-mark or other proprietary interest, is obscene or profane or otherwise determined by &nbsp;Smilegate Megaport, in its sole discretion, to be inappropriate.<br>
<br>
3. Smilegate Megaport reserves the right to delete, or to change, any vulgar or otherwise offensive Account ID. You have sole liability for all activities conducted through your Account or under your Account ID. &nbsp;In the case of deletion of an Account ID, Smilegate Megaport shall implement reasonable and appropriate security measures to ensure that all personal information associated with the deleted Account ID are properly disposed.<br>
<br>
4. &nbsp;Smilegate Megaport reserves the right to delete, or alter any vulgar or otherwise offensive Character Name.<br>
<br>
5. Smilegate Megaport reserves the right to delete, or alter any vulgar or otherwise offensive Guild Name.<br>
<br>
6. If Smilegate Megaport terminates an Account, Smilegate Megaport may terminate any other Accounts that share the same member name, phone number, e-mail address, postal address, Internet Protocol address, or credit card number with the terminated Account. &nbsp;In the case of Termination of an Account, Smilegate Megaport shall implement reasonable and appropriate security measures to ensure that all personal information associated with the terminated Account are properly disposed.<br>
<br>
7. Smilegate Megaport reserves the right to interrupt the Service from time to time on a regularly scheduled basis or otherwise with or without prior notice in order to perform maintenance.<br>
<br>
[Unacceptable Conduct]<br>
The User may not engage in any conduct or communication while using the Services which is unlawful or which restricts or inhibits any other User from using or enjoying the Services. The User agrees to use the Services only for lawful purposes. Smilegate Megaport reserves the right to terminate the User's registered Smilegate Megaport Account if it determines, in its sole discretion that the User has engaged in unacceptable conduct. The list of prohibited conduct set forth in Subsection 2) below provides examples of unacceptable conduct, which list is not exhaustive, and [Smilegate Megaport reserves the right, but not the responsibility, to restrict conduct which Smilegate Megaport deems, in its sole discretion, to be harmful to individual users, damaging to the Services, or in violation of Smilegate Megaport's or any third party's rights. &nbsp;Smilegate Megaport may prohibit or delete conduct, communication or content transmitted on Smilegate Megaport services that are deemed to be in violation of applicable laws or is harmful to other user, the Smilegate Megaport service community or the rights of Smilegate Megaport in general. The User acknowledges, however, that communication over the Services often occurs in real-time and Smilegate Megaport cannot, and does not intend to, screen communication in advance.<br>
<br>
You are not allowed to use the Service to:<br>
- Harass, threaten or embarrass another User of the Services or to cause distress, unwanted attention or discomfort of such User, or any other person or entity. Smilegate Megaport does not condone harassment in any form and may suspend or terminate the Account of any User who harasses others. Personal attacks, such as those based on a person's race, national origin, ethnicity, religion, gender, lifestyle choice, disablement or other such affiliation, are strictly prohibited.<br>
<br>
- Post or transmit sexually explicit images, or point or reference to such images. Smilegate Megaport prohibits the transfer or posting of sexually explicit images or other content deemed offensive.<br>
<br>
- Transmit any unlawful, harmful, threatening, abusive, harassing, defamatory, vulgar, obscene, hateful, racially, ethnically or otherwise objectionable content. If the User engages in vulgar or abusive language online, even if masked by symbols or other characters, or engages in other impermissible behavior, the User may receive a warning, or be temporarily or permanently excluded from one or more games, bulletin boards, chat areas, or the User's registered Smilegate Megaport Account may be terminated immediately and the User may be subject to civil liability and/or prosecution by law enforcement authorities.<br>
<br>
- Scroll or carry out any action with a similar disruptive effect. "Scrolling" is defined as repeatedly causing the screen to roll faster than Users are able to type onto it.<br>
<br>
- Impersonate any person, including, but not limited to, &nbsp;Smilegate Megaport's employees, monitors or hosts. The User shall not hold himself or herself out or portray himself or herself as a Smilegate Megaport staff user or employee while engaging in all forms of online communication, including, but not limited to, user names, user profiles, voice, text or graphic chat, message postings or any form of communication on line. Impersonation of Smilegate Megaport staff shall be grounds for immediate Account termination.<br>
<br>
- Engage in "disruptive behavior" in chat areas, game areas, bulletin boards, or any other area of the Services. Disruptive behavior shall be deemed to include, but will not be limited to, conduct which purposefully interferes with the normal flow of dialogue in a Service area. Disruptive behavior shall also include, but not be limited to, commercial postings, solicitations and advertisements.<br>
<br>
- Post or transmit chain letters or pyramid marketing schemes. This type of material places an unnecessary load on the Services and is considered a nuisance by many users. Certain types of chain letters and pyramid schemes are also illegal. Such prohibited conduct includes, but is not limited to, the transmission of letters or messages which offer a product or service and which are based on the structure of a chain letter.<br>
<br>
- Post or transmit unsolicited advertising, promotional materials, or other forms of solicitation. Smilegate Megaport services are not to be used to send unsolicited advertising, promotional material, or other forms of solicitation to other users. The User may not use Smilegate Megaport Services to collect or "harvest" user names without the express permission of those users. Smilegate Megaport reserves the right to block and/or filter mass e-mail solicitations on or through the service.<br>
<br>
- Violate any operating rule, policy or guideline of any other online service. The User further agrees to abide by the rules of the User's Internet Service Provider.<br>
<br>
- Violate, intentionally or unintentionally, any applicable local, state, national or international law or regulation.<br>
<br>
- Modify any files that Smilegate Megaport does not specifically authorize the User to modify. Use of material, which is subject to the rights of any person or entity without the express permission of such rights holder, is prohibited, and will result in the termination of the User's registered Smilegate Megaport Account and possible civil and/or criminal liability.<br>
<br>
- Post to multiple bulletin boards at once and/or send multiple unsolicited e-mails to a single address, sometimes referred to as "spamming". Smilegate Megaport may take action on a User's Account if any of the following offenses is reported: (a) Posting a similar or identical message to more than 5 bulletin boards; (b) Sending unsolicited mail to more than 30 people or (c) Sending more than two (2) unsolicited e-mails to a single e-mail address. Repeated spamming will result in Account termination. In certain situations, the overall pattern of behavior on an Account or a set of linked Accounts may be determined to be disruptive or abusive, even if no one single act clearly violates any specific policy. In such cases, Smilegate Megaport reserves the right to determine what patterns of behavior are defined as "high-maintenance" or "disruptive" and may take action against the Account(s), ranging from a simple request to moderate the high-maintenance behavior, to total lockout of all linked Accounts.<br>
<br>
- Post any material on the Web Site that will infringe any copyright, trademark and any other intellectual property right(s) of any third person(s).<br>
<br>
- Violate, intentionally or unintentionally, any operating rule, policy or guideline of any game published by Smilegate Megaport. The User agrees to accept the decision of Smilegate Megaport staff regarding the handling of any violations he may have committed.<br>
<br>
[Privacy]<br>
The personal information you provide us during registration is used for our internal purposes only of Smilegate Megaport. We use the information we collect to learn what you like and to improve the Service. Except as otherwise expressly permitted by this Agreement or as otherwise authorized by you, or as required by applicable laws and regulations or by law enforcement authorities pursuant to a lawful process or order, we will not give any of your personal information to any third party without your express approval. Although we cannot guarantee the100% security of any of your private transmissions against unauthorized or unlawful interception or access by third parties, we nonetheless implemented reasonable and appropriate security measures aligned with relevant and applicable laws and regulations as well as industry-standard security measures to protect your personal information. If you request any technical support, you consent to our remote accessing and review of the computer you load the Software onto for purposes of support and debugging. You agree that we may communicate with you via e-mail and any similar technology for any purpose relating to the Service, the Software and any services or software which may in the future be provided by us or on our behalf. &nbsp;For more information regarding our Privacy Policy, you may visit <a href="http://www.gameclub.ph/Policy/Privacy">http://www.gameclub.ph/Policy/Privacy</a><br>
<br>
[Limitation of Liability]<br>
USER ACKNOWLEDGES THAT SMILEGATE MEGAPORT SHALL NOT ASSUME OR HAVE ANY LIABILITY FOR ANY ACTION BY SMILEGATE MEGAPORT OR ITS CONTENT PROVIDERS OR OTHER LICENSORS WITH RESPECT TO ANY CONDUCT, COMMUNICATION OR CONTENT OF THE SERVICES. SMILEGATE MEGAPORT SHALL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, WITHOUT LIMITATION, LOSS OF BUSINESS PROFITS, BUSINESS INTERRUPTION, LOSS OF BUSINESS INFORMATION OR ANY OTHER PECUNIARY LOSS) IN CONNECTION WITH THE SERVICES OR ANY PRODUCT PROVIDED BY SMILEGATE MEGAPORT. SMILEGATE MEGAPORT'S ENTIRE LIABILITY AND USER'S EXCLUSIVE REMEDY WITH RESPECT TO USE OF THE SERVICES AND ALL CONTENTS &amp; SOFTWARE DEVELOPED BY OR FOR SMILEGATE MEGAPORT SERVICES WHICH IS FOUND TO BE DEFECTIVE USING MEDIA CHOSEN BY SMILEGATE MEGAPORT SERVICES SHALL BE LIMITED TO AN AMOUNT EQUAL TO THE TOTAL AMOUNT PAID BY USER FOR THE DEFECTIVE SERVICE LESS AN AMOUNT EQUAL TO THE VALUE OF THE SERVICE FOR THE TIME THAT IT OPERATED PROPERLY. SMILEGATE MEGAPORT'S LIABILITY TO USER FOR ANY AND ALL BREACHES OF THIS AGREEMENT IS LIMITED SOLELY TO THE TOTAL CUMULATIVE AMOUNT PAID BY USER TO ACCESS AND USE THE SERVICES. You agree that &nbsp;Smilegate Megaport cannot be held responsible or liable for anything that occurs or results from accessing or subscribing to the Smilegate Megaport Service.<br>
<br>
[Parental Guidance]<br>
Parents may find the Service inappropriate for use by persons under the age of 13. While Smilegate Megaport may choose to monitor and take action upon inappropriate gameplay, chat or links to the Service, it is possible that at any time there may be language or other material accessible on or through the Service that may be inappropriate for children or offensive to some users of any age. Smilegate Megaport cannot ensure that other players will not provide content or access to content that parents or guardians may find inappropriate or that any user may find objectionable. Smilegate Megaport does not as a matter of policy pre-screen the content of the materials or communications transmitted by each player.<br>
<br>
[Ownership]<br>
The Account that you use to access the Service, the characters you select, create and/or modify and any and all items that Smilegate Megaport stores in the server, and other data that the server or Account may have are owned solely by Smilegate Megaport.<br>
<br>
[Indemnification]<br>
You agree to indemnify, defend and hold harmless Smilegate Megaport and its subsidiaries and affiliates and their respective directors, officers, shareholders, employees, agents, Service Provider Customers, clients and contractors from and against any loss, claim, demand, cost and expense (including reasonable legal fees) asserted by any third party due or arising from or in connection with your use of or conduct on the Service, your Content, your violation of the Terms of Agreement or of any rights of another User.<br>
&nbsp;<br>
[Intellectual Property]<br>
The Web Site contains copyrighted material, trademarks and other proprietary information including, without limitation, text, software, photographs, video, graphics, music and sound, and the entire contents of the Web Site and each area contained therein are copyrighted. Smilegate Megaport has been granted the exclusive license to market and operate in the Philippines. The User may not modify, publish, transmit, participate in the transfer or sale, create derivative works, or in any way exploit, any of the content contained on the Web Site (including, without limitation, content that the Website enables you to download) without the express written permission of Smilegate Megaport. In the event of any permitted copying, redistribution or publication of copyrighted material, no changes in or deletion of author attribution, trademark, legend or copyright notice shall be made. The downloading of copyrighted material is allowed by the User expressly for the User's own use. The User acknowledges that the content providers remain the owners of all materials posted on the Smilegate Megaport website, and that the User does not acquire any of those ownership rights by downloading copyrighted materials.<br>
<br>
[Entire agreement]<br>
These terms of use together with our End User License Agreement (EULA), constitute the entire agreement between you and us in relation to your use of our Service, and supersede all previous agreements in respect of your use of our Service.<br>
&nbsp; -->

<!-- 
<h2 style="text-align: center;"><b>TERMS AND CONDITIONS</b></h2> -->
<p>Last updated: 2025-12-22</p>
<p>1. <b>Introduction</b></p>
<p>Welcome to <b>MCY Dental Clinic</b> (“Company”, “we”, “our”, “us”)!</p>
<p>These Terms of Service (“Terms”, “Terms of Service”) govern your use of our website located at <b>http://mcydentalclinic.epizy.com/forms/appointment/index.php</b> (together or individually “Service”) operated by <b>MCY Dental Clinic</b>.</p>
<p>Our Privacy Policy also governs your use of our Service and explains how we collect, safeguard and disclose information that results from your use of our web pages.</p>
<p>Your agreement with us includes these Terms and our Privacy Policy (“Agreements”). You acknowledge that you have read and understood Agreements, and agree to be bound of them.</p>
<p>If you do not agree with (or cannot comply with) Agreements, then you may not use the Service, but please let us know by emailing at <b>clinicmcydental@gmail.com</b> so we can try to find a solution. These Terms apply to all visitors, users and others who wish to access or use Service.</p>
<p>2. <b>Communications</b></p>
<p>By using our Service, you agree to subscribe to newsletters, marketing or promotional materials and other information we may send. However, you may opt out of receiving any, or all, of these communications from us by following the unsubscribe link or by emailing at clinicmcydental@gmail.com.</p>
<p>3. <b>Purchases</b></p><p>If you wish to purchase any product or service made available through Service (“Purchase”), you may be asked to supply certain information relevant to your Purchase including but not limited to, your credit or debit card number, the expiration date of your card, your billing address, and your shipping information.</p><p>You represent and warrant that: (i) you have the legal right to use any card(s) or other payment method(s) in connection with any Purchase; and that (ii) the information you supply to us is true, correct and complete.</p><p>We may employ the use of third party services for the purpose of facilitating payment and the completion of Purchases. By submitting your information, you grant us the right to provide the information to these third parties subject to our Privacy Policy.</p><p>We reserve the right to refuse or cancel your order at any time for reasons including but not limited to: product or service availability, errors in the description or price of the product or service, error in your order or other reasons.</p><p>We reserve the right to refuse or cancel your order if fraud or an unauthorized or illegal transaction is suspected.</p>
<p>4. <b>Contests, Sweepstakes and Promotions</b></p>
<p>Any contests, sweepstakes or other promotions (collectively, “Promotions”) made available through Service may be governed by rules that are separate from these Terms of Service. If you participate in any Promotions, please review the applicable rules as well as our Privacy Policy. If the rules for a Promotion conflict with these Terms of Service, Promotion rules will apply.</p>

<p>5. <b>Refunds</b></p><p>We issue refunds for Contracts within <b>30 days</b> of the original purchase of the Contract.</p>
<p>6. <b>Content</b></p><p>Content found on or through this Service are the property of MCY Dental Clinic or used with permission. You may not distribute, modify, transmit, reuse, download, repost, copy, or use said Content, whether in whole or in part, for commercial purposes or for personal gain, without express advance written permission from us.</p>
<p>7. <b>Prohibited Uses</b></p>
<p>You may use Service only for lawful purposes and in accordance with Terms. You agree not to use Service:</p>
<p>0.1. In any way that violates any applicable national or international law or regulation.</p>
<p>0.2. For the purpose of exploiting, harming, or attempting to exploit or harm minors in any way by exposing them to inappropriate content or otherwise.</p>
<p>0.3. To transmit, or procure the sending of, any advertising or promotional material, including any “junk mail”, “chain letter,” “spam,” or any other similar solicitation.</p>
<p>0.4. To impersonate or attempt to impersonate Company, a Company employee, another user, or any other person or entity.</p>
<p>0.5. In any way that infringes upon the rights of others, or in any way is illegal, threatening, fraudulent, or harmful, or in connection with any unlawful, illegal, fraudulent, or harmful purpose or activity.</p>
<p>0.6. To engage in any other conduct that restricts or inhibits anyone’s use or enjoyment of Service, or which, as determined by us, may harm or offend Company or users of Service or expose them to liability.</p>
<p>Additionally, you agree not to:</p>
<p>0.1. Use Service in any manner that could disable, overburden, damage, or impair Service or interfere with any other party’s use of Service, including their ability to engage in real time activities through Service.</p>
<p>0.2. Use any robot, spider, or other automatic device, process, or means to access Service for any purpose, including monitoring or copying any of the material on Service.</p>
<p>0.3. Use any manual process to monitor or copy any of the material on Service or for any other unauthorized purpose without our prior written consent.</p>
<p>0.4. Use any device, software, or routine that interferes with the proper working of Service.</p>
<p>0.5. Introduce any viruses, trojan horses, worms, logic bombs, or other material which is malicious or technologically harmful.</p>
<p>0.6. Attempt to gain unauthorized access to, interfere with, damage, or disrupt any parts of Service, the server on which Service is stored, or any server, computer, or database connected to Service.</p>
<p>0.7. Attack Service via a denial-of-service attack or a distributed denial-of-service attack.</p>
<p>0.8. Take any action that may damage or falsify Company rating.</p>
<p>0.9. Otherwise attempt to interfere with the proper working of Service.</p>
<p>8. <b>Analytics</b></p>
<p>We may use third-party Service Providers to monitor and analyze the use of our Service.</p>
<p>9. <b>No Use By Minors</b></p>
<p>Service is intended only for access and use by individuals at least eighteen (18) years old. By accessing or using Service, you warrant and represent that you are at least eighteen (18) years of age and with the full authority, right, and capacity to enter into this agreement and abide by all of the terms and conditions of Terms. If you are not at least eighteen (18) years old, you are prohibited from both the access and usage of Service.</p>
<p>10. <b>Accounts</b></p><p>When you create an account with us, you guarantee that you are above the age of 18, and that the information you provide us is accurate, complete, and current at all times. Inaccurate, incomplete, or obsolete information may result in the immediate termination of your account on Service.</p><p>You are responsible for maintaining the confidentiality of your account and password, including but not limited to the restriction of access to your computer and/or account. You agree to accept responsibility for any and all activities or actions that occur under your account and/or password, whether your password is with our Service or a third-party service. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.</p><p>You may not use as a username the name of another person or entity or that is not lawfully available for use, a name or trademark that is subject to any rights of another person or entity other than you, without appropriate authorization. You may not use as a username any name that is offensive, vulgar or obscene.</p><p>We reserve the right to refuse service, terminate accounts, remove or edit content, or cancel orders in our sole discretion.</p>
<p>11. <b>Intellectual Property</b></p>
<p>Service and its original content (excluding Content provided by users), features and functionality are and will remain the exclusive property of MCY Dental Clinic and its licensors. Service is protected by copyright, trademark, and other laws of  and foreign countries. Our trademarks may not be used in connection with any product or service without the prior written consent of MCY Dental Clinic.</p>
<p>12. <b>Copyright Policy</b></p>
<p>We respect the intellectual property rights of others. It is our policy to respond to any claim that Content posted on Service infringes on the copyright or other intellectual property rights (“Infringement”) of any person or entity.</p>
<p>If you are a copyright owner, or authorized on behalf of one, and you believe that the copyrighted work has been copied in a way that constitutes copyright infringement, please submit your claim via email to clinicmcydental@gmail.com, with the subject line: “Copyright Infringement” and include in your claim a detailed description of the alleged Infringement as detailed below, under “DMCA Notice and Procedure for Copyright Infringement Claims”</p>
<p>You may be held accountable for damages (including costs and attorneys’ fees) for misrepresentation or bad-faith claims on the infringement of any Content found on and/or through Service on your copyright.</p>
<p>13. <b>DMCA Notice and Procedure for Copyright Infringement Claims</b></p>
<p>You may submit a notification pursuant to the Digital Millennium Copyright Act (DMCA) by providing our Copyright Agent with the following information in writing (see 17 U.S.C 512(c)(3) for further detail):</p>
<p>0.1. an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright’s interest;</p>
<p>0.2. a description of the copyrighted work that you claim has been infringed, including the URL (i.e., web page address) of the location where the copyrighted work exists or a copy of the copyrighted work;</p>
<p>0.3. identification of the URL or other specific location on Service where the material that you claim is infringing is located;</p>
<p>0.4. your address, telephone number, and email address;</p>
<p>0.5. a statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law;</p>
<p>0.6. a statement by you, made under penalty of perjury, that the above information in your notice is accurate and that you are the copyright owner or authorized to act on the copyright owner’s behalf.</p>
<p>You can contact our Copyright Agent via email at clinicmcydental@gmail.com.</p>
<p>14. <b>Error Reporting and Feedback</b></p>
<p>You may provide us either directly at clinicmcydental@gmail.com or via third party sites and tools with information and feedback concerning errors, suggestions for improvements, ideas, problems, complaints, and other matters related to our Service (“Feedback”). You acknowledge and agree that: (i) you shall not retain, acquire or assert any intellectual property right or other right, title or interest in or to the Feedback; (ii) Company may have development ideas similar to the Feedback; (iii) Feedback does not contain confidential information or proprietary information from you or any third party; and (iv) Company is not under any obligation of confidentiality with respect to the Feedback. In the event the transfer of the ownership to the Feedback is not possible due to applicable mandatory laws, you grant Company and its affiliates an exclusive, transferable, irrevocable, free-of-charge, sub-licensable, unlimited and perpetual right to use (including copy, modify, create derivative works, publish, distribute and commercialize) Feedback in any manner and for any purpose.</p>
<p>15. <b>Links To Other Web Sites</b></p>
<p>Our Service may contain links to third party web sites or services that are not owned or controlled by MCY Dental Clinic.</p>
<p>MCY Dental Clinic has no control over, and assumes no responsibility for the content, privacy policies, or practices of any third party web sites or services. We do not warrant the offerings of any of these entities/individuals or their websites.</p>
<p>For example, the outlined <a href="https://policymaker.io/terms-and-conditions/">Terms of Use</a> have been created using <a href="https://policymaker.io/">PolicyMaker.io</a>, a free web application for generating high-quality legal documents. PolicyMaker’s <a href="https://policymaker.io/terms-and-conditions/">Terms and Conditions generator</a> is an easy-to-use free tool for creating an excellent standard Terms of Service template for a website, blog, e-commerce store or app.</p>
<p>YOU ACKNOWLEDGE AND AGREE THAT COMPANY SHALL NOT BE RESPONSIBLE OR LIABLE, DIRECTLY OR INDIRECTLY, FOR ANY DAMAGE OR LOSS CAUSED OR ALLEGED TO BE CAUSED BY OR IN CONNECTION WITH USE OF OR RELIANCE ON ANY SUCH CONTENT, GOODS OR SERVICES AVAILABLE ON OR THROUGH ANY SUCH THIRD PARTY WEB SITES OR SERVICES.</p>
<p>WE STRONGLY ADVISE YOU TO READ THE TERMS OF SERVICE AND PRIVACY POLICIES OF ANY THIRD PARTY WEB SITES OR SERVICES THAT YOU VISIT.</p>
<p>16. <b>Disclaimer Of Warranty</b></p>
<p>THESE SERVICES ARE PROVIDED BY COMPANY ON AN “AS IS” AND “AS AVAILABLE” BASIS. COMPANY MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THEIR SERVICES, OR THE INFORMATION, CONTENT OR MATERIALS INCLUDED THEREIN. YOU EXPRESSLY AGREE THAT YOUR USE OF THESE SERVICES, THEIR CONTENT, AND ANY SERVICES OR ITEMS OBTAINED FROM US IS AT YOUR SOLE RISK.</p>
<p>NEITHER COMPANY NOR ANY PERSON ASSOCIATED WITH COMPANY MAKES ANY WARRANTY OR REPRESENTATION WITH RESPECT TO THE COMPLETENESS, SECURITY, RELIABILITY, QUALITY, ACCURACY, OR AVAILABILITY OF THE SERVICES. WITHOUT LIMITING THE FOREGOING, NEITHER COMPANY NOR ANYONE ASSOCIATED WITH COMPANY REPRESENTS OR WARRANTS THAT THE SERVICES, THEIR CONTENT, OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE SERVICES WILL BE ACCURATE, RELIABLE, ERROR-FREE, OR UNINTERRUPTED, THAT DEFECTS WILL BE CORRECTED, THAT THE SERVICES OR THE SERVER THAT MAKES IT AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS OR THAT THE SERVICES OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE SERVICES WILL OTHERWISE MEET YOUR NEEDS OR EXPECTATIONS.</p>
<p>COMPANY HEREBY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, STATUTORY, OR OTHERWISE, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY, NON-INFRINGEMENT, AND FITNESS FOR PARTICULAR PURPOSE.</p>
<p>THE FOREGOING DOES NOT AFFECT ANY WARRANTIES WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.</p>
<p>17. <b>Limitation Of Liability</b></p>
<p>EXCEPT AS PROHIBITED BY LAW, YOU WILL HOLD US AND OUR OFFICERS, DIRECTORS, EMPLOYEES, AND AGENTS HARMLESS FOR ANY INDIRECT, PUNITIVE, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGE, HOWEVER IT ARISES (INCLUDING ATTORNEYS’ FEES AND ALL RELATED COSTS AND EXPENSES OF LITIGATION AND ARBITRATION, OR AT TRIAL OR ON APPEAL, IF ANY, WHETHER OR NOT LITIGATION OR ARBITRATION IS INSTITUTED), WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE, OR OTHER TORTIOUS ACTION, OR ARISING OUT OF OR IN CONNECTION WITH THIS AGREEMENT, INCLUDING WITHOUT LIMITATION ANY CLAIM FOR PERSONAL INJURY OR PROPERTY DAMAGE, ARISING FROM THIS AGREEMENT AND ANY VIOLATION BY YOU OF ANY FEDERAL, STATE, OR LOCAL LAWS, STATUTES, RULES, OR REGULATIONS, EVEN IF COMPANY HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. EXCEPT AS PROHIBITED BY LAW, IF THERE IS LIABILITY FOUND ON THE PART OF COMPANY, IT WILL BE LIMITED TO THE AMOUNT PAID FOR THE PRODUCTS AND/OR SERVICES, AND UNDER NO CIRCUMSTANCES WILL THERE BE CONSEQUENTIAL OR PUNITIVE DAMAGES. SOME STATES DO NOT ALLOW THE EXCLUSION OR LIMITATION OF PUNITIVE, INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE PRIOR LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU.</p>
<p>18. <b>Termination</b></p>
<p>We may terminate or suspend your account and bar access to Service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation, including but not limited to a breach of Terms.</p>
<p>If you wish to terminate your account, you may simply discontinue using Service.</p>
<p>All provisions of Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
<p>19. <b>Governing Law</b></p>
<p>These Terms shall be governed and construed in accordance with the laws of Philippines, which governing law applies to agreement without regard to its conflict of law provisions.</p>
<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service and supersede and replace any prior agreements we might have had between us regarding Service.</p>
<p>20. <b>Changes To Service</b></p>
<p>We reserve the right to withdraw or amend our Service, and any service or material we provide via Service, in our sole discretion without notice. We will not be liable if for any reason all or any part of Service is unavailable at any time or for any period. From time to time, we may restrict access to some parts of Service, or the entire Service, to users, including registered users.</p>
<p>21. <b>Amendments To Terms</b></p>
<p>We may amend Terms at any time by posting the amended terms on this site. It is your responsibility to review these Terms periodically.</p>
<p>Your continued use of the Platform following the posting of revised Terms means that you accept and agree to the changes. You are expected to check this page frequently so you are aware of any changes, as they are binding on you.</p>
<p>By continuing to access or use our Service after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use Service.</p>
<p>22. <b>Waiver And Severability</b></p>
<p>No waiver by Company of any term or condition set forth in Terms shall be deemed a further or continuing waiver of such term or condition or a waiver of any other term or condition, and any failure of Company to assert a right or provision under Terms shall not constitute a waiver of such right or provision.</p>
<p>If any provision of Terms is held by a court or other tribunal of competent jurisdiction to be invalid, illegal or unenforceable for any reason, such provision shall be eliminated or limited to the minimum extent such that the remaining provisions of Terms will continue in full force and effect.</p>
<p>23. <b>Acknowledgement</b></p>
<p>BY USING SERVICE OR OTHER SERVICES PROVIDED BY US, YOU ACKNOWLEDGE THAT YOU HAVE READ THESE TERMS OF SERVICE AND AGREE TO BE BOUND BY THEM.</p>
<p>24. <b>Contact Us</b></p>
<p>Please send your feedback, comments, requests for technical support by email: <b>clinicmcydental@gmail.com</b>.</p>
<p style="margin-top: 5em; font-size: 0.7em;">These <a href="https://policymaker.io/terms-and-conditions/">Terms of Service</a> were created for <b>http://mcydentalclinic.epizy.com/forms/appointment/index.php</b> by <a href="https://policymaker.io">PolicyMaker.io</a> on 2025-12-22.</p>

                </div>
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>MCY Dental Clinic</h3>
              <p>
                Buting<br>
                Pasig City,PH<br><br>
                <strong>Phone:</strong> +(02) 640 5536<br>
                <strong>Email:</strong> clinicmcydental@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#about">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#steps">How to appoint?</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#priorities">Priorities</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#portfolio">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#contact">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#services">Consultation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#services">Oral Prophylaxis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#services">Tooth Restoration</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#services">Tooth Extraction</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#services">Flouride Application</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#services">Prosthodontic Treatment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#services">Orthodontic Treatment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#services">Periodontic Rehab</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Have us subscribe on our newsletter!</p>
            <form action="../signup.php" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CRMS on MCY Dental Clinic</span></strong>. All Rights Reserved
      </div>
    
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/appointmentAssets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/appointmentAssets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/appointmentAssets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/appointmentAssets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/appointmentAssets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/appointmentAssets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/appointmentAssets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/appointmentAssets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/appointmentAssets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/appointmentAssets/js/main.js"></script>

  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>



</body>

</html>