<!-- BACK TO TOP -->
<a href="javascript:void(0);" class="go2top" style="display: inline;"> <i class="fas fa-angle-up"></i> </a>

<script src="<?=base_url('/assets/plugins/jquery/3.3.1.min.js');?>"></script>
<script src="<?=base_url('/assets/plugins/bootstrap-4.3.1/js/bootstrap.min.js');?>"></script>
<script src="<?=base_url('/assets/plugins/masonry.pkgd.min.js');?>"></script>
<script src="<?=base_url('/assets/plugins/isotope.pkgd.min.js');?>"></script>
<script src="<?=base_url('/assets/scripts/application.js');?>"></script>
<script>
// init Isotope
var $grid = $('.card-deck').isotope({
  itemSelector: '.card',
  layoutMode: 'fitRows',
  // getSortData: {
  //   name: '.name',
  //   symbol: '.symbol',
  //   number: '.number parseInt',
  //   category: '[data-category]',
  //   weight: function( itemElem ) {
  //     var weight = $( itemElem ).find('.weight').text();
  //     return parseFloat( weight.replace( /[\(\)]/g, '') );
  //   }
  // }
});

// filter functions
var filterFns = {
//   // show if number is greater than 50
//   numberGreaterThan50: function() {
//     var number = $(this).find('.number').text();
//     return parseInt( number, 10 ) > 50;
//   },
};

// bind filter button click
$('#zipcodes').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

$('#ambiances').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

$('#rates').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

$('#tested').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

// bind sort button click
// $('#sorts').on( 'click', 'button', function() {
//   var sortByValue = $(this).attr('data-sort-by');
//   $grid.isotope({ sortBy: sortByValue });
// });

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
</script>
