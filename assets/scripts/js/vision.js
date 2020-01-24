jQuery(document).ready(function(){
  jQuery(window.location.hash).addClass('highlight-background-hover')

  // Top menu fix for all playbook entries making Resources active class.
  if ( window.location.pathname.split('/')[1] === 'playbook') {
    jQuery('.menu-item-98').addClass('active')
    jQuery('.menu-item-135').addClass('active')
  }

  // Top menu fix for all articles entries making Resources active class.
  if ( window.location.pathname.split('/')[1] === 'articles') {
    jQuery('.menu-item-98').addClass('active')
    jQuery('.menu-item-111').addClass('active')
  }

  // Top menu fix for all reports entries making Progress active class.
  if ( window.location.pathname.split('/')[1] === 'reports') {
    jQuery('.menu-item-31').addClass('active')
    jQuery('.menu-item-105').addClass('active')
  }

})

