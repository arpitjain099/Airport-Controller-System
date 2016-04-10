
// When the form is submitted
$("#login_submit > form").submit(function(){  

// Hide 'Submit' Button
$('#login_submit').hide();

// 'this' refers to the current submitted form  
var str = $(this).serialize();  

// -- Start AJAX Call --

$.ajax({  
    type: "POST",
    url: "server/checkcredentials.php",  // Send the login info to this page
    data: str,  
    success: function(msg){  
   console.log(msg);
 

 if(msg == 'OK') // LOGIN OK?
 {   
 	document.getElementById('status').innerHTML="Login successful. ";
setTimeout('go_to_companies_page()', 3000); 
 }  
 else if (msg=='failed')// ERROR?
 {  
 	document.getElementById('status').innerHTML="Login credentials not found. Please try again.";
 } 
 else  
      document.getElementById('status').innerHTML="Server under heavy load. Please try again.";
 
   
 }  
   
  });  
  
// -- End AJAX Call --

return false;

}); // end submit event


function go_to_companies_page()
{
window.location = 'companies.php'; // Members Area
}