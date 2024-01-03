</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/wow.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/smooth-scroll.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>dist/color-tab/js/main.js"></script>
<script src="<?php echo base_url(); ?>dist/preloader/js/classie.js"></script>
<script src="<?php echo base_url(); ?>dist/preloader/js/pathLoader.js"></script>
<script src="<?php echo base_url(); ?>dist/preloader/js/main.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.js"></script>
<script  type="text/javascript">
$(function() {
		$('a.rf[href*=#]:not([href=#])').each(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

				var targetId = $(this.hash), targetAnchor = $('[name=' + this.hash.slice(1) +']');
				var target = targetId.length ? targetId : targetAnchor.length ? targetAnchor : false;
				if (target) {
					var targetOffset = target.offset().top;
					$(this).click(function() {
						$(".navbar-nav li a").removeClass("active");
						// $(this).addClass('active');
						$('html, body').animate({scrollTop: targetOffset}, 800);
						return false;
					});
				}
			}
		});
	});


wow = new WOW(
	{
		animateClass: 'animated',
		offset:       100,
	}
);
wow.init();

var $temp = $("<input>");
var $url = $(location).attr('href');

$('#share').on('click', function() {
  $("#voting").text("Copied!").fadeIn().delay(3000).fadeOut();
  $("body").append($temp);
  $temp.val($url).select();
  document.execCommand("copy");
  $temp.remove();
})

$(document).ready(function() {
  $("#owl-home").owlCarousel({
      navigation : false, 
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay: 3000,
      autoHeight:false,
      pagination: true 
  });
  $("#nextowl-home").click(function(){
    $("#owl-home").trigger('owl.next');
  })
  $("#prevowl-home").click(function(){
    $("#owl-home").trigger('owl.prev');
  })
});

$(document).ready(function() {
  $("#owl-clients").owlCarousel({
      navigation : false, 
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:false,
      autoPlay: 3000,
      autoHeight:true,
      pagination: true 
  });
  $("#nextowl-clients").click(function(){
    $("#owl-clients").trigger('owl.next');
  })
  $("#prevowl-clients").click(function(){
    $("#owl-clients").trigger('owl.prev');
  })
});

// const $dropdown = $(".dropdown");
// const $dropdownToggle = $(".dropdown-toggle");
// const $dropdownMenu = $(".dropdown-menu");
// const showClass = "show";

// $(window).on("load resize", function() {
//   if (this.matchMedia("(min-width: 768px)").matches) {
//     $dropdown.hover(
//       function() {
//         const $this = $(this);
//         $this.addClass(showClass);
//         $this.find($dropdownToggle).attr("aria-expanded", "true");
//         $this.find($dropdownMenu).addClass(showClass);
//       },
//       function() {
//         const $this = $(this);
//         $this.removeClass(showClass);
//         $this.find($dropdownToggle).attr("aria-expanded", "false");
//         $this.find($dropdownMenu).removeClass(showClass);
//       }
//     );
//   } else {
//     $dropdown.off("mouseenter mouseleave");
//   }
// });

$(function () {
      $('#example2').DataTable({"lengthChange": false})
    })
  
  $('#jumlah_barang').on('input', function() {
    var jumlah = $('#jumlah_barang').val() * $('#hidden_harga').val();
    var output = parseInt(jumlah).toLocaleString();
    $('#mirror').text(output);
  });

  function hapusK(id){
    $.ajax({
      url: '<?=site_url('keranjang/hapus')?>',
      type: 'post',
      data: {idnya: id},
      success:function (response) {
        window.history.go(0);
      }
    })
  }

  function editK(val){
    $("#namaK"+val).prop('readonly', false);
    $("#emailK"+val).prop('readonly', false);
    $("#alamatK"+val).prop('readonly', false);
    $("#jumlahK"+val).prop('readonly', false);
  }

  function jumlahK(val){
    var jumlah = $('#jumlahK'+val).val() * $('#hidden_hargaK'+val).val();
    var output = parseInt(jumlah).toLocaleString();
    $('#totalK'+val).val('Rp '+ output);
    $('#hidden_total'+val).val(jumlah);
    var sum = 0;
    $('.hidden_total').each(function() {
        sum += parseInt($(this).val());
    });
    $('#semuaK').text('Rp ' + sum.toLocaleString());
  }

  function submitK(){
    $("#btnSubmit").prop('disabled', true);
    $("#btnSubmit").html('Menyimpan');
  }

    var sum = 0;
    $('.hidden_total').each(function() {
        sum += parseInt($(this).val());
    });
    $('#semuaK').text('Rp ' + sum.toLocaleString());




</script>
</html>