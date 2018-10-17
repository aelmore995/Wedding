</div><!-- /.content_div-->
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="/dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  setMenuSelected();
  $('#photo-scoller').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    arrows: false,
    slidesToShow: 4,
    pauseOnHover: false,
    centerMode: true,
    centerPadding: '11vw',
  });
})

function setMenuSelected(){
  let current_url = window.location.href;
  index = current_url.lastIndexOf("/");
  let current_page = current_url.substring(index+1, current_url.length);
  console.log(current_page);
  let page;
  if(current_page === ""){
    page = "index.php";
  } else {
    page = current_page;
  }

  page.replace('#', '');
  let menu_link = $('.nav-item').find('a[href="' + page + '"]');
  let menu_item = $(menu_link).parent();
  console.log(menu_item);
  $(menu_item).addClass("active");

}
</script>
</body>
</html>
