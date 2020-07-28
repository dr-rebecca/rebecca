function Collapse(a,b){
  var coll = document.getElementsByClassName(a);
  var i;
  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle(b);
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      } 
    });
  }
}
Collapse("collapse_faqs__content__button","active1")
// carousel

