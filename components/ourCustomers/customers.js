function fetchCustomers() {
  fetch('updated_output.csv')
      .then(response => {
          if (!response.ok) {
            throw new Error("HTTP error " + response.status);
        }
        return response.text();
    })

    .then(response => response.text())
    .then(data => {
        let rows = data.split('\n');
        let htmlTags = '';
        for(let i = 1; i < rows.length; i++) { // Skip the header row
            let columns = rows[i].split(',');
            let client_name = columns[0];
            let img_src = columns[1];
            let img_alt = columns[2];
            let img_width = columns[3];
            let href = columns[4];
            htmlTags += '<div class="large-3 medium-3 small-12 columns clients" style="min-height:89px;padding-top:30px;">';
            htmlTags += '<a target="_blank" href="' + href + '">';
            htmlTags += '<img alt="' + img_alt + '" src="' + img_src + '" width="' + img_width + '">';
            htmlTags += '</a></div>';
        }
        document.getElementById('our-customers').innerHTML = htmlTags;
    });
  }

    fetchCustomers();

    export default fetchCustomers;