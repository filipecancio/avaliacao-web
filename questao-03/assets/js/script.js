function getValores(valor){
    var result = {
        "reais50":0,
        "reais20":0,
        "reais10":0,
        "reais5":0,
        "reais2":0, 
        "reais1":0,       
    }
    while(valor >= 50){
        valor = valor - 50;
        result.reais50 ++;
    }
    while(valor >= 20){
        valor = valor - 20;
        result.reais20 ++;
    }
    while(valor >= 10){
        valor = valor - 10;
        console.log(valor)
        result.reais10 ++;
    }
    while(valor >= 5){
        valor = valor - 5;
        result.reais5 ++;
    }
    while(valor >= 2){
        valor = valor - 2;
        result.reais2 ++;
    }
    while(valor >= 1){
        valor = valor - 1;
        result.reais1 ++;
    }
    return result;
}

function resultado(){
    var valor = document.getElementById("valor").value;
    console.log(getValores(valor))
    valor = getValores(valor)
    if(valor.reais1){
        alert("Não aceitamos esse valor pois não temos troco de 1 real.")
    }else{
        if(valor.reais2){
            document.getElementById("2rcont").style.display = "flex";
            document.getElementById("2rimg").src = "./assets/png/cedula-02.png";
            document.getElementById("2rval").innerHTML = valor.reais2;
        }else{
            document.getElementById("2rcont").style.display = "none";
        }
        if(valor.reais5){
            document.getElementById("5rcont").style.display = "flex";
            document.getElementById("5rimg").src = "./assets/png/cedula-05.png";
            document.getElementById("5rval").innerHTML = valor.reais5;
        }else{
            document.getElementById("5rcont").style.display = "none";
        }
        if(valor.reais10){
            document.getElementById("10rcont").style.display = "flex";
            document.getElementById("10rimg").src = "./assets/png/cedula-10.png";
            document.getElementById("10rval").innerHTML = valor.reais10;
        }else{
            document.getElementById("10rcont").style.display = "none";
        }
        if(valor.reais20){
            document.getElementById("20rcont").style.display = "flex";
            document.getElementById("20rimg").src = "./assets/png/cedula-20.png";
            document.getElementById("20rval").innerHTML = valor.reais20;
        }else{
            document.getElementById("20rcont").style.display = "none";
        }
        if(valor.reais50){
            document.getElementById("50rcont").style.display = "flex";
            document.getElementById("50rimg").src = "./assets/png/cedula-50.png";
            document.getElementById("50rval").innerHTML = valor.reais50;
        }else{
            document.getElementById("50rcont").style.display = "none";
        }
    }

}