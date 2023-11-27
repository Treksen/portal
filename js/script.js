let menu = document.querySelector('.header .menu');

document.querySelector('#menu-btn').onclick = () =>{
   menu.classList.toggle('active');
}

window.onscroll = () =>{
   menu.classList.remove('active');
}

document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
   inputNumber.oninput = () =>{
      if(inputNumber.value.length > inputNumber.maxLength) inputNumber.value = inputNumber.value.slice(0, inputNumber.maxLength);
   };
});

document.querySelectorAll('.parcels .details .thumb .small-images img').forEach(images =>{
   images.onclick = () =>{
      src = images.getAttribute('src');
      document.querySelector('.parcels .details .thumb .big-image img').src = src;
   }
});

document.querySelectorAll('.faq .box-container .box h3').forEach(headings =>{
   headings.onclick = () =>{
      headings.parentElement.classList.toggle('active');
   }
});


    function showUploadLink(documentType) {
        const fileUpload = document.getElementById("fileUpload");

        if (documentType === "KRA_Pin") {
            // Show file upload for KRA Pin
            fileUpload.setAttribute("accept", ".pdf,.jpg,.png");
            fileUpload.style.display = "block";
        } else if (documentType === "National_ID") {
            // Show file upload for National ID
            fileUpload.setAttribute("accept", ".pdf,.jpg,.png");
            fileUpload.style.display = "block";
        } else {
            fileUpload.style.display = "none";
        }
    }
    function registerDocument(selectedDocument) {
      if (selectedDocument !== 'Select_Document' && selectedDocument !== 'None') {
          // You can handle the registration logic here, for example, via AJAX to register the requested document for feedback
          // For demonstration purposes, an alert is used to notify about the registered document
          alert('Document Requested: ' + selectedDocument);
      }
  }


/////////////////////////pop up

let popup = document.getElementById(popup);
function openPoup(){
  popup.classList.add("open-popup");
}
  
function closePopup(){
  popup.classList.remove("open-popup");
}


