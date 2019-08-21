<script>
    $(document).ready(function(){

      var location = {
        "Mymensingh": ["Muktagachha","fulbaria","trishal","fulpur"],
        "Jamalpur" : ["sorishabari"]
      };

      $("#district").on("change",function(){
        var dis = $(this).val();
        var upa = location[dis];
        if (upa == null) {
          alert("no value found");
        }else{
          document.getElementById("thana").innerHTML = upa;
        }
      });
    });
  </script>