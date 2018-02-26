// window.onload = function () {
//     var fileUpload = document.getElementById("fileupload");
//     fileUpload.onchange = function () {
//         if (typeof (FileReader) != "undefined") {
//             var dvPreview = document.getElementById("dvPreview");
//             dvPreview.innerHTML = "";
//             var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
//             for (var i = 0; i < fileUpload.files.length; i++) {
//                 var file = fileUpload.files[i];
//                 if (regex.test(file.name.toLowerCase())) {
//                     var reader = new FileReader();
//                     reader.onload = function (e) {
//                         var img = document.createElement("IMG");
//                         img.height = "100";
//                         img.width = "100";
//                         img.src = e.target.result;
//                         dvPreview.appendChild(img);
//                     }
//                     reader.readAsDataURL(file);
//                 } else {
//                     alert(file.name + " is not a valid image file.");
//                     dvPreview.innerHTML = "";
//                     return false;
//                 }
//             }
//         } else {
//             alert("This browser does not support HTML5 FileReader.");
//         }
//     }
// };



//  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
//       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
//       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
//       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
//       ga('create', 'UA-58515343-1', 'auto');
//       ga('send', 'pageview');


//            function readURL(input) {
//             if (input.files && input.files[0]) {
//                 var reader = new FileReader();

//                 reader.onload = function (e) {
//                     $('#blah')
//                         .attr('src', e.target.result);
//                 };

//                 reader.readAsDataURL(input.files[0]);
//             }
//         }

