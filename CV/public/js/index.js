$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<4;i++) {
    next=next.next();
    if (!next.length) {
      next=$(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  }
});



// Perfect scrollbar
const myCustomScrollbar = document.querySelector('.my-custom-scrollbar');
const ps = new PerfectScrollbar(myCustomScrollbar);
const scrollbarY = myCustomScrollbar.querySelector('.ps.ps--active-y>.ps__scrollbar-y-rail');
  // myCustomScrollbar.onscroll = function () {
  //   scrollbarY.style.cssText = `top: ${this.scrollTop}px!important; height: 288px; right: ${-this.scrollLeft}px`;
  // }

const $myForm = $('#myForm');

$('#chat').on('click', function () {

  if ($myForm.hasClass('slim') || !$myForm.is(':visible')) {

    $myForm.css('display', 'block');
    $myForm.removeClass('slim');
  };
})

$('#closeButton').not('#toggle').on('click', function () {

  $myForm.hide();
})

$("#toggle").on('click', function () {

  $myForm.toggleClass('slim');
});

$('#chatEnVivo').on('click', function () {

  if ($myForm.hasClass('slim') || !$myForm.is(':visible')) {

    $myForm.css('display', 'block');
    $myForm.removeClass('slim');
  };
})

$('#closeButton').not('#toggle').on('click', function () {

  $myForm.hide();
})

$("#toggle").on('click', function () {

  $myForm.toggleClass('slim');
});


//Services logic

// buttons

const responsiveWerbsites = document.getElementById('responsive-websites')
const ecommerceWebsites = document.getElementById('ecommerce-websites')
const csmWebsites = document.getElementById('cms-websites')
const b2bPortals = document.getElementById('b2b-portals')
const b2cPortals = document.getElementById('b2c-portals')

//the magic

$('#b2b-portals-row').hide();
$('#b2c-portals-row').hide();
$('#responsive-websites-row').show();
$('#ecommerce-websites-row').hide();
$('#cms-websites-row').hide();


$(ecommerceWebsites).on('click', () => {
  $('#b2b-portals-row').hide();
  $('#b2c-portals-row').hide();
  $('#responsive-websites-row').hide();
  $('#ecommerce-websites-row').show();
  $('#cms-websites-row').hide();
})

$(csmWebsites).on('click', () => {
  $('#b2b-portals-row').hide();
  $('#b2c-portals-row').hide();
  $('#responsive-websites-row').hide();
  $('#ecommerce-websites-row').hide();
  $('#cms-websites-row').show();
})

$(responsiveWerbsites).on('click', () => {
  $('#b2b-portals-row').hide();
  $('#b2c-portals-row').hide();
  $('#responsive-websites-row').show();
  $('#ecommerce-websites-row').hide();
  $('#cms-websites-row').hide();
})

$(b2bPortals).on('click', () => {
  $('#b2b-portals-row').show();
  $('#b2c-portals-row').hide();
  $('#responsive-websites-row').hide();
  $('#ecommerce-websites-row').hide();
  $('#cms-websites-row').hide();
})

$(b2cPortals).on  ('click', () => {
  $('#b2b-portals-row').hide();
  $('#b2c-portals-row').show();
  $('#responsive-websites-row').hide();
  $('#ecommerce-websites-row').hide();
  $('#cms-websites-row').hide();
})


//carousel logic

const ecommerceCarousel = document.querySelector('.ecommerce-carousel')
const websiteCarousel = document.querySelector('.website-carousel')
const pricingEcommerceButton = document.getElementById('pricing-ecommerce-button')
const pricingWebsitesButton = document.getElementById('pricing-websites-button')

$(ecommerceCarousel).hide()

$(pricingEcommerceButton).on('click', () => {
  $(websiteCarousel).hide()
  $(ecommerceCarousel).show()
})

$(pricingWebsitesButton).on('click', () => {
  $(websiteCarousel).show()
  $(ecommerceCarousel).hide()
})


//experience logic

const researchButton = document.getElementById('research-button')
const ideateButton = document.getElementById('ideate-button')
const createButton = document.getElementById('create-button')
const colorButton = document.getElementById('color-button')
const revisionButton = document.getElementById('revision-button')
const finalizeButton = document.getElementById('finalize-button')

$('#ideate-row').hide()
$('#create-row').hide()
$('#color-row').hide()
$('#revision-row').hide()
$('#finalize-row').hide()


$(researchButton).on('click', () => {
  $('#research-row').show()
  $('#ideate-row').hide()
  $('#create-row').hide()
  $('#color-row').hide()
  $('#revision-row').hide()
  $('#finalize-row').hide()
})
$(ideateButton).on('click', () => {
  $('#research-row').hide()
  $('#ideate-row').show()
  $('#create-row').hide()
  $('#color-row').hide()
  $('#revision-row').hide()
  $('#finalize-row').hide()
})
$(createButton).on('click', () => {
  $('#research-row').hide()
  $('#ideate-row').hide()
  $('#create-row').show()
  $('#color-row').hide()
  $('#revision-row').hide()
  $('#finalize-row').hide()
})
$(colorButton).on('click', () => {
  $('#research-row').hide()
  $('#ideate-row').hide()
  $('#create-row').hide()
  $('#color-row').show()
  $('#revision-row').hide()
  $('#finalize-row').hide()
})
$(revisionButton).on('click', () => {
  $('#research-row').hide()
  $('#ideate-row').hide()
  $('#create-row').hide()
  $('#color-row').hide()
  $('#revision-row').show()
  $('#finalize-row').hide()
})
$(finalizeButton).on('click', () => {
  $('#research-row').hide()
  $('#ideate-row').hide()
  $('#create-row').hide()
  $('#color-row').hide()
  $('#revision-row').hide()
  $('#finalize-row').show()
})



const comprobar = () => {
  let nombre = document.getElementById('nombre').value
  let correo = document.getElementById('correo').value
  let telefono = document.getElementById('telefono').value
  let mensaje = document.getElementById('mensaje').value
  alert(`mi nombre es ==> ${nombre} 
        mi correo es ==> ${correo} 
        mi telefono es ==> ${telefono} 
        mi pregunta o consulta es ==> ${mensaje}` )
}

