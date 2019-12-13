_ = _ || window.lodash
let zume = zumeCounters
let stats = zumeCounters.statistics

console.log(stats)

jQuery(document).ready(function($){

  // World Population
  let pop = $('#population-count-1')
  pop.html(stats.counter[1].calculated_population_year.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  setInterval(function() { // births
    stats.counter[1].calculated_population_year++;
    pop.html(stats.counter[1].calculated_population_year.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  }, stats.counter[1].births_interval);
  setInterval(function() { // deaths
    stats.counter[1].calculated_population_year--;
    pop.html(stats.counter[1].calculated_population_year.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  }, stats.counter[1].deaths_interval);

  // deaths without Christ
  let dwc = $('#deaths-without-christ-today-count-1')
  dwc.html(stats.counter[1].deaths_without_christ_today.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  setInterval(function() {
    stats.counter[1].deaths_without_christ_today++;
    dwc.html(stats.counter[1].deaths_without_christ_today.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  }, stats.counter[1].deaths_without_christ_interval);


  // Trainings
  let trainings = $('#trainings-needed-count-1')
  trainings.html(stats.counter[1].trainings_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  setInterval(function() {
    stats.counter[1].trainings_needed++;
    trainings.html(stats.counter[1].trainings_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  }, 5000);


  // Churches
  let churches = $('#churches-needed-count-1')
  churches.html(stats.counter[1].churches_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  setInterval(function() {
    stats.counter[1].churches_needed++;
    churches.html(stats.counter[1].churches_needed.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
  }, 7000);

  $('#churches-reported-count-1').html(stats.counter[1].churches_reported)
  $('#trainings-reported-count-1').html(stats.counter[1].trainings_reported)

  // Progress
  $('#live-trainings-reported-count-1').html(stats.counter[1].trainings_reported)
  $('#live-churches-reported-count-1').html(stats.counter[1].churches_reported)

})
