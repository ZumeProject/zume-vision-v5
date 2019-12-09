_ = _ || window.lodash
let zume = zumeHome
let stats = zumeHome.statistics

console.log(stats)

jQuery(document).ready(function($){

  // World Population
  let pop = $('#world-population-count')
  pop.html(stats.world_population.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  setInterval(function() {
    stats.world_population++;
    pop.html(stats.world_population.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  }, 100.0987);

  // Trainings
  let trainings = $('#trainings-needed-count')
  trainings.html(stats.trainings_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  setInterval(function() {
    stats.trainings_needed++;
    trainings.html(stats.trainings_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  }, 5000);


  // Churches
  let churches = $('#churches-needed-count')
  churches.html(stats.churches_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  setInterval(function() {
    stats.churches_needed++;
    churches.html(stats.churches_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  }, 7000);

  // Progress
  $('#trainings-count').html(stats.trainings)
  $('#churches-count').html(stats.churches)

})
