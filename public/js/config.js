var aid = "nada"

function envioCorreo(){
  alert( 'entro' );
    $.ajax({
       url: "enviocorreo",
       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       type: "post",
       data: {'aid' : aid} ,
       success: function (response) {
         alert("exito");
          // You will get response from your PHP page (what you echo or print)
       },
       error: function(jqXHR, textStatus, errorThrown) {
          alert(errorThrown);
       }
   });
}

var aid = "nada"

function envioCorreoHook(){
  alert( 'entro' );
    $.ajax({
       url: "webhook",
       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       type: "post",
       data: {"data": {
    "member_id": 264311,
    "type": "lead",
    "transaction_id": "37736000",
    "interval": "unique",
    "payment_method": "card",
    "email": "prue@prueba.com",
    "first_name": "prue",
    "last_name": "prue",
    "treatment": "Mr",
    "gender": "Female",
    "person_type": "Natural",
    "identification_type": "",
    "identification": "",
    "phone": "",
    "amount": "1.00",
    "currency": "COP",
    "conversion_amount": "1.00",
    "currency_organization": "COP",
    "country_name": "",
    "country": "",
    "state": "",
    "city": "",
    "street": "",
    "street_number": "",
    "rest_address": "",
    "zip_code": "",
    "time_zone": "",
    "language_code": "ES",
    "born_date": "",
    "URL": "https://localhost/",
    "campaign_name": "test",
    "campaign_id": 252,
    "form_name": "Form 8",
    "form_id": 1208,
    "timestamp": "2020-10-17T01:53:23.280Z",
    "organization": ""
  }} ,
       success: function (response) {
         alert("exito");
          // You will get response from your PHP page (what you echo or print)
       },
       error: function(jqXHR, textStatus, errorThrown) {
          alert(errorThrown);
       }
   });
}
