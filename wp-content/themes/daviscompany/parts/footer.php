<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copy">The Davis Companies | &copy; <?php echo date('Y'); ?> All Rights Reserved</div>
            </div>
            <div class="col-md-4">
                <div class="social">
                    <a target="_blank" href="https://www.linkedin.com/company/the-davis-companies_2/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<!-- navbar -->
<script>
    if(window.matchMedia('(min-width:768px)').matches) {
        $('.navbar .dropdown > a').click(function(){
            location.href = this.href;
    });
}
</script>

<script>
var num = 300; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        
        $('.navbar').addClass('fixed animated slideInDown');
		  
    } else {
       
        $('.navbar').removeClass('fixed animated slideInDown');
    }
});

</script>

<!-- Home Carousel --> 
<script>
    (function($) {
        $(document).ready(function() {
            $('.carousel-indicators li:nth-child(1)').addClass('active');
            $('.carousel-inner .carousel-item:nth-child(1)').addClass('active');
        });
    })(jQuery)
</script>

<script>
    $('.inner-text.align-bottom-right h1').html(function(_, existing) {
    var words = existing.trim().split(' ');
    words[0] = '<span class="firstword">' + words[0] + '</span>';
    words[words.length - 1] = '<span class="lastword">' + words[words.length - 1] + '</span>';
    return words.join(' ');
    });
</script>


</body>
</html>
