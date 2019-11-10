_ = _ || window.lodash

jQuery(document).ready(function(){
  let chart = jQuery('#main')

  chart.html(`
    <div class="grid-x white-section">
        <div class="cell center"><h2>Report Progress</h2></div>
        <div class="cell center">
            <form id="movement-report">
                <div class="grid-x">
                    <div class="cell"><input type="text" name="source" placeholder="source" value="chris@chasm.solutions" /></div>
                    <div class="cell"><input type="text" name="lat" placeholder="lat" value="35" /></div>
                    <div class="cell"><input type="text" name="lng" placeholder="lng" value="42" /></div>
                    <div class="cell"><input type="text" name="level" placeholder="level" value="place" /></div>
                    <div class="cell"><input type="text" name="church_count" placeholder="church_count" value="50" /></div>
                    <div class="cell"><input type="text" name="training_count" placeholder="training_count" value="10" /></div>
                    <div class="cell"><button type="button" class="button primary-button-hollow" onclick="submit_report()">Submit</button> </div>
                </div>
            </form>
        </div>
    </div>
  `)

  // listeners

})

function submit_report() {

  let form = {
    source: jQuery('#movement-report input[name$=source]').val(),
    lat: jQuery('#movement-report input[name$=lat]').val(),
    lng: jQuery('#movement-report input[name$=lng]').val(),
    level: jQuery('#movement-report input[name$=level]').val(),
    church_count: jQuery('#movement-report input[name$=church_count]').val(),
    training_count: jQuery('#movement-report input[name$=training_count]').val(),
  }
  console.log(form)

  window.zumeAPI.send_report( form ).done(function(data){
    console.log(data)
  })
}
