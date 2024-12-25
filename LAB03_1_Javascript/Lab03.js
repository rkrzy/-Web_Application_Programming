
   document.addEventListener("DOMContentLoaded", function() {
  
    var elements = Array.from(document.getElementById("select").querySelectorAll('*'));
    
      elements.forEach(function(node) {
   
         var newNode = document.createElement("SPAN");
         newNode.className = 'hoverNode';

    
         var t = document.createTextNode(node.tagName);
         newNode.appendChild(t);


         node.appendChild(newNode);

         newNode.addEventListener('click', function() {
            var msg = `
               Tag: ${node.tagName}
               Class: ${node.className}
               ID: ${node.id}
               innerHTML: ${node.innerHTML.trim()}
            `;
            alert(msg);
         });
      });
   });
