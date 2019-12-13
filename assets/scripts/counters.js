_ = _ || window.lodash
let zume = zumeCounters
let stats = zumeCounters.statistics

console.log(stats)

jQuery(document).ready(function($){

  // World Population
  let pop = $('#world-population-count')
  pop.html(stats.counter.world.calculated_population.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  setInterval(function() {
    stats.counter.world.calculated_population++;
    pop.html(stats.counter.world.calculated_population.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  }, 100.0987);

  // Trainings
  let trainings = $('#trainings-needed-count')
  trainings.html(stats.counter.world.trainings_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  setInterval(function() {
    stats.counter.world.trainings_needed++;
    trainings.html(stats.counter.world.trainings_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  }, 5000);


  // Churches
  let churches = $('#churches-needed-count')
  churches.html(stats.counter.world.churches_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  setInterval(function() {
    stats.counter.world.churches_needed++;
    churches.html(stats.counter.world.churches_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  }, 7000);

  // Progress
  $('#trainings-count').html(stats.counter.world.trainings_reported)
  $('#churches-count').html(stats.counter.world.churches_reported)

})
