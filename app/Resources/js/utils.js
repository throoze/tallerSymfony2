/*
 * Script con funciones útiles para todo el desarrollo. Se carga por default en
 * la plantilla base.
 */

/**
 * Prueba que un valor dado sea numérico, sin importar su tipo de origen.
 */
function isNumber(n) {
    //return !isNaN(parseFloat(n)) && isFinite(n) && (n - 0) == n && n.length > 0;
    return $.isNumeric(n);
}

function utils() {
    /**
     * Dice si el valor pasado como argumento es numérico
     */
    this.isNumber = function(n) {
        return $.isNumeric(n);
    };

    /**
     * Dice si un arreglo contiene un valor, devolviendo el índice donde se
     * encuentra. En caso de que no se encuentre, devuelve -1.
     */
    this.arrayContains = function(array, value) {
        if (value instanceof Object) {
            var i = 0;
            for (i=0; i < array.length; i++) {
                if (array[i] == value || array[i] === value || array[i].equals ||
                    array[i].equals(value) || (value instanceof Object &&
                        value.equals(array[i]))) {
                    return i;
                }
            }
            return -1;
        } else {
            return $.inArray(value, array);
        }
    };
}




// Creacion de la variable $_GET para acceder a los valores GET.
function getQueryParams(qs) {
    qs = qs.split("+").join(" ");
    var params = {},
        tokens,
        re = /[?&]?([^=]+)=([^&]*)/g;
    
    while (tokens = re.exec(qs)) {
        params[decodeURIComponent(tokens[1])]
            = decodeURIComponent(tokens[2]);
    }
    
    return params;
}

var $_GET = getQueryParams(document.location.search);
