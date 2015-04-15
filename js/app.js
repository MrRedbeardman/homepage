var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $caption = $("<p></p>")

// add an image to overlay
$overlay.append($image);

// Add Caption
$overlay.append($caption);

// Add an overlay
$("body").append($overlay);
    
// Capture the click event on a link to an image
$("#imageGallery a").click(function(event){
    console.log("Click Heard");
  event.preventDefault();
  var imageLocation = $(this).attr("href");
  // Update overlay with the image linked in the link 
  $image.attr("src", imageLocation); 
 
  // Show the overlay.
  $overlay.show();
  
  // Get childs alt atribute and set caption
  
  var captionText = $(this).children("img").attr("alt");
  $caption.text(captionText);
 });



// When overlay is clicked
$overlay.click(function(){
  // Hide the overlay
$overlay.hide();
$overlay.finish();  
});

function sendGallery(){
    $('#main-content').load('inc/gallery.php');
    console.log('sendGallery'); 
}; 


    