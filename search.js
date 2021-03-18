$(function () {
    $('#myList a:last-child').tab('show')
})

function search() {
    $.get('https://my-json-server.typicode.com/Kusha25/endterm/shirts', function (resp, status, resp_obj) {
        console.log(status);
        console.log(resp);



        let name = $('#name').val();
	
		
        for (var i = 0; i < resp.length; i++) {
            $('#search1').html(function (ind, old_value) {
                if (name == resp[i].name) {
                    return "T-shirt name: " + resp[i].name;
                }
            })
			
            $('#search2').html(function (ind, old_value) {
                 if (name == resp[i].name) {
                    $('#search2').attr('src', resp[i].image);
                }
            })

            $('#search3').html(function (ind, old_value) {
                if (name == resp[i].name) {
                    return "T-shirt: " + resp[i].price;
                }
            })

            $('#search4').html(function (ind, old_value) {
                if (name == resp[i].name) {
                    return "T-shirt id: " + resp[i].number;
                }
            })

        }
    })
}