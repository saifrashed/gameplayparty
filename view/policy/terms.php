<?php include './view/header.php'; ?>
<?php  
    while ($row = $content->fetch(PDO::FETCH_ASSOC)) {
        echo $row['pagina_content'];
    }
?>
<?php include './view/footer.php'; ?>

<!-- <h1>Terms and Conditions ("Terms")</h1>
<br>
<p>Last updated: October 02, 2019</p>
<br>
<p>Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the http://www.gameplayparty.nl website (the "Service") operated by GamePlayParty ("us", "we", or "our").</p>
<br>
<p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
<br>
<p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. The Terms and Conditions agreement  for GamePlayParty has been created with the help of <a href="https://www.termsfeed.com/">TermsFeed</a>.</p>
<br>
<h2>Links To Other Web Sites</h2>
<br>
<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by GamePlayParty.</p>
<br>
<p>GamePlayParty has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that GamePlayParty shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
<br>
<p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
<br>
<h2>Termination</h2>
<br>
<p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
<br>
<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
<br>
<h2>Governing Law</h2>
<br>
<p>These Terms shall be governed and construed in accordance with the laws of Netherlands, without regard to its conflict of law provisions.</p>
<br>
<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
<br>
<h2>Changes</h2>
<br>
<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 15 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
<br>
<p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
<br>
<h2>Contact Us</h2>
<br>
<p>If you have any questions about these Terms, please contact us.</p> -->