// * Developer Name: Praveen Kumar | Nitin Kumar
// * Author: Codingmstr.com | Trickuweb.Com
// * Link1: https://codingmstr.com 
// * Link2: https://trickuweb.com 
// * Facebook: https://www.facebook.com/procodingmaster
// * Youtube: https://www.youtube.com/channel/UC4h2TolnnyMoTCNVC9cxY-g
var wrap = $("#myaffix2");

wrap.on("scroll", function(e) {
    
  if (this.scrollTop > 1470) {
    wrap.removeClass("myaffix1");
    
  } else {
    wrap.addClass("myaffix1");
  }
  
});