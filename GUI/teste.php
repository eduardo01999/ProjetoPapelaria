<div id="meus_campos">
    <input type="file" id="arquivo1">
    </div>
    <button onclick="inclui_campo()" >Add</button>
    
    
    <script>
    var aux = 1;
    function inclui_campo() {
    aux ++;
    
    var elemento = document.createElement("input");
    elemento.type = "file";
    var id = "arquivo"+aux;
    elemento.id = id;
    document.getElementById("meus_campos").appendChild(elemento);
    }
    
    </script>