
function select_state() {
	var a= document.getElementById('s1').value;

     if (a=='Dhaka') {
        
        var s1 = '<option>Dhaka</option><option>Gazipur </option><option>Kishoreganj </option><option>Manikganj </option><option>Munshiganj </option><option>Narayanganj </option><option>Narsingdi </option><option>Tangail </option><option>Faridpur  </option><option>Gopalganj  </option><option>Madaripur  </option><option>Rajbari </option><option>Shariatpur </option><option>Faridpur  </option>';

  }
  else if (true) {

var s1 = '<option>Bagerhat</option><option>Jhenaidah  </option><option>Meherpur  </option><option>Chuadanga </option><option>Khulna </option><option>Kushtia  </option><option>Narail</option><option>Jessore </option><option>Magura   </option><option>Satkhira   </option>';

  }

document.getElementById('sel2').innerHTML=s1;


}

