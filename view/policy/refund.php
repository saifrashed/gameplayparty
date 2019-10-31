<?php include './view/header.php'; ?>
<?php  
    while ($row = $content->fetch(PDO::FETCH_ASSOC)) {
        echo $row['pagina_content'];
    }
?>
<?php include './view/footer.php'; ?>


<!-- <h1>Returns and Refunds Policy</h1>
<br>

<p>Thank you for shopping at GamePlayParty.</p>
<br>
<p>Please read this policy carefully. This is the Return and Refund Policy of GamePlayParty. The Return and Refund Policy  for GamePlayParty has been created with the help of <a href="https://www.termsfeed.com/">TermsFeed</a>.</p>
<br>
<h2>Digital products</h2>
<br>
<p>We do not issue refunds for digital products once the order is confirmed and the product is sent.</p>
<br>
<p>We recommend contacting us for assistance if you experience any issues receiving or downloading our products.</p>
<br>
<h2>Contact us</h2>
<br>
<p>If you have any questions about our Returns and Refunds Policy, please contact us:</p>
<br>
<ul>
    <li>
        <p>By email: annuleer@gameplayparty.nl</p>
    </li>
</ul> -->