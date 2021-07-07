<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#" class="w3-button w3-black"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/Mickey0246/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/_damnguyen26_/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="#"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="#"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/damnguyen26"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="#"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    <a href="https://github.com/DamNguyen26"><i class="fa fa-github w3-hover-opacity"></i></a>
    <a href="https://mail.google.com"><i class="fa fa-google-plus w3-hover-opacity"></i></a>
    <a href="https://www.youtube.com"><i class="fa fa-youtube w3-hover-opacity"></i></a>
  </div>
  <p>Powered by <a href="https://www.facebook.com/Mickey0246/" target="_blank" class="w3-hover-text-green">Me</a></p>
  <p>If you are admin click <a href="includes/userLogin/index.php" target="_blank" class="w3-hover-text-green">here</a> to login</p>

</footer>

<script>
  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }
  // Toggle between showing and hiding the sidebar when clicking the menu icon
  var mySidebar = document.getElementById("mySidebar");

  function w3_open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
    } else {
      mySidebar.style.display = 'block';
    }
  }
  // Close the sidebar with the close button
  // dùng để sử dụng chức năng close trong thanh điều hướng thò thụt
  function w3_close() {
    mySidebar.style.display = "none";
  }
</script>

</html>