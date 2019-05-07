function clicked() {
       if (confirm('Do you want to submit?')) {
           yourformelement.submit();
           
       } else {
           return false;
       }
    }


function printChecked(){
		var items=document.getElementsByName('classes');
		var selectedItems="";
		for(var i=0; i<items.length; i++){
			if(items[i].type=='checkbox' && items[i].checked==true)
                
				selectedItems+=items[i].value+"\n";
             document.getElementById("printarray").innerHTML = items[i];
		}
        selectedItems.toString()
		alert(selectedItems);
    document.getElementById("printarray").innerHTML = items[i];
    
	}	
