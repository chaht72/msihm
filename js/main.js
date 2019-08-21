 $(document).ready(function(){

      var location = {
        "Dhaka":{
          "Dhaka" : ["Adabor Thana", "Badda Thana", "Bangsal Thana", "Bimanbandar Thana", "Cantonment Thana",  "Chak Bazar Thana", "Dakshinkhan Thana",  "Darus Salam Thana",  "Demra Thana", "Dhanmondi Thana", "Gendaria Thana",  "Gulshan Thana",  "Hazaribagh Thana",  "Jatrabari Thana",  "Kadamtali Thana",  "Kafrul Thana",  "Kalabagan Thana",  "Kamrangirchar Thana", "Khilgaon Thana",  "khilkhet Thana",  "Kotwali Thana",  "Lalbagh Thana",  "Mirpur Thana",  "Mohammadpur Thana",  "Motijheel Thana", "Newmarket Thana",  "allabi Thana",  "Paltan Thana",  "Ramna Thana",  "Rampura Thana",  "Sabujbagh Thana", "Shah Ali Thana",  "Shahbag Thana",  "Sher-e-Bangla Nagar Thana",  "Shyampur Thana",  "Sutrapur Thana",  "Tejgaon Thana",  "Mohakhali Thana",  "Tejgaon Industrial Area Thana",  "Turag Thana",  "Uttara Thana",  "Uttar Khan Thana"],
          "Gazipur" : ["Mouna","Tongi"]
        },
        "Mymensingh":{
          "Mymensingh" : ["Ishwarganj","Gaffargaon","Gauripur","Trishal","Dhobaura","Nandail","Phulpur","Fulbaria","Bhaluka","Mymensingh Sadar","Muktagachha","Haluaghat"],
          "Jamalpur" : ["sorishabari"]
        },
      };
      // console.log(location);

      $.each(location, function(index, val) {
        var option = '<option value="'+index+'">'+index+'</option>';
        $("#division").append(option);
      });


      $("#division").on("change",function(){
        var division = $(this).val();
        var district = location[division];
        $("#district").html('<option value="">Select your District</option>');


      $.each(district, function(index, val) {
        var option = '<option value="'+index+'">'+index+'</option>';
        $("#district").append(option);
        console.log(option);
      });

        // console.log(district);
      });


      $("#district").on("change",function(){
        var district = $(this).val();
        var division = $('#division').val();
        var thana = location[division][district];
        $("#thana").html('<option value="">Select your Thana</option>');

        $.each(thana, function(index, val) {
        var option = '<option value="'+val+'">'+val+'</option>';
        $("#thana").append(option);
        console.log(option);
      });
      });
    });