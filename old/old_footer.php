<script>
   function go2(a)
   {
      switch(a)
      {
         case 'twitter' : window.location.replace("https://www.twitter.com"); break;
         case 'facebook' : window.location.replace("https://www.facebook.com"); break;
         case 'instagram' : window.location.replace("https://www.instagram.com"); break;
         default : return true;
      }
   }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<footer class="footer py-4">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-4 text-lg-start">Copyright &copy; 정주현</div>
         <div class="col-lg-4 my-3 my-lg-0">
            <a class="btn btn-dark btn-social mx-2" onclick="go2('twitter');"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" onclick="go2('facebook');"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark btn-social mx-2" onclick="go2('instagram');"><i class="fab fa-linkedin-in"></i></a>
         </div>
         <div class="col-lg-4 text-lg-end">
            <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
            <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
         </div>
      </div>
   </div>
</footer>