
function myFunction(){
  var input;
  var filter;
  var table;
  var tr;
  var td;
  var i;
  var txtValue;

  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  for (i=0; i < tr.length;i++){
    td = tr[i].getElementsByTagName("td")[1];
    if (td){
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1){
        tr[i].style.display = "";
      }
      else{
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction2(){
  var input;
  var filter;
  var table;
  var tr;
  var td;
  var i;
  var txtValue;

  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");

  for (i=0; i < tr.length;i++){
    td = tr[i].getElementsByTagName("td")[1];
    if (td){
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1){
        tr[i].style.display = "";
      }
      else{
        tr[i].style.display = "none";
      }
    }
  }
}
function myFunction3(){
  var input;
  var filter;
  var table;
  var tr;
  var td;
  var i;
  var txtValue;

  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable3");
  tr = table.getElementsByTagName("tr");

  for (i=0; i < tr.length;i++){
    td = tr[i].getElementsByTagName("td")[1];
    if (td){
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1){
        tr[i].style.display = "";
      }
      else{
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction4(){
  var input;
  var filter;
  var table;
  var tr;
  var td;
  var i;
  var txtValue;

  input = document.getElementById("myInput4");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable4");
  tr = table.getElementsByTagName("tr");

  for (i=0; i < tr.length;i++){
    td = tr[i].getElementsByTagName("td")[1];
    if (td){
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1){
        tr[i].style.display = "";
      }
      else{
        tr[i].style.display = "none";
      }
    }
  }
}
