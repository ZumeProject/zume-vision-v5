/**
 * REST API
 */
window.zumeAPI = {

  send_report: ( data ) => makeRequest('POST', 'send_report', { data: data } ),

  get_population: ( data ) => makeRequest('POST', 'send_report', { data: data } ),

}
function makeRequest (type, url, data, base = 'zume/v4/') {
  const options = {
    type: type,
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    url: url.startsWith('http') ? url : `${restAPI.root}${base}${url}`,
    beforeSend: xhr => {
      xhr.setRequestHeader('X-WP-Nonce', restAPI.nonce);
    }
  }

  if (data) {
    options.data = JSON.stringify(data)
  }

  return jQuery.ajax(options)
}
function handleAjaxError (err) {
  if (_.get(err, "statusText") !== "abortPromise" && err.responseText){
    console.trace("error")
    console.log(err)
    // jQuery("#errors").append(err.responseText)
  }
}
jQuery(document).ajaxComplete((event, xhr, settings) => {
  if (_.get(xhr, 'responseJSON.data.status') === 401) {
    window.location.replace(restAPI.site_urls.login);
  }
}).ajaxError((event, xhr) => {
  handleAjaxError(xhr)
})


/**
 * Global Modals
 */
// function open_join_community() {
//   jQuery('#training-modal-content').empty().html(`
//       <div class="grid-y padding-top-1 grid-padding-y training">
//         <div class="cell"><h2 class="center"></h2></div>
//         <div class="cell center">
//         ${__('Which group are you leading?', 'zume')}<br>
//           <select onchange="check_group_selection(${_.escape( session_number )})" id="group_selection">${list}</select><br>
//           <div id="create_new_group"></div>
//         </div>
//         <div class="cell center margin-bottom-1" id="continue_button">
//           <button type="submit" class="center button large" onclick="continue_to_session(${_.escape( session_number )} )">${__('Continue', 'zume')}</button>
//         </div>
//       </div>
//     `)
//
//   jQuery('#reveal-modal').foundation('open')
// }
