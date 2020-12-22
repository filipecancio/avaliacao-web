function primeroAndar(fun1,fun2,fun3){
    return ((fun2 * 2) + (fun3 * 4));
}
function segundoAndar(fun1,fun2,fun3){
    return ((fun1 * 2) + (fun3 * 2));
}
function terceiroAndar(fun1,fun2,fun3){
    return ((fun1 * 4) + (fun2 * 2));
}
function getSoma(fun1,fun2,fun3){
    var sm1 = primeroAndar(fun1,fun2,fun3);
    var sm2 = segundoAndar(fun1,fun2,fun3);
    var sm3 = terceiroAndar(fun1,fun2,fun3);
    console.log("Somatórios: 1-"+sm1+" 2-"+sm2+" 3-"+sm3)

    if(sm1<=sm2 && sm1<=sm3){
        return ['1º andar',sm1]
    }
    else if(sm2<=sm1 && sm2<=sm3){
        return ['2º andar',sm2]
    }
    else if(sm3<=sm1 && sm3<=sm2){
        return ['3º andar',sm3]
    }

}

function resultado(){
    var fun1 = document.getElementById("fun1").value;
    var fun2 = document.getElementById("fun2").value;
    var fun3 = document.getElementById("fun3").value;

    var resultado = getSoma(parseInt(fun1,10),parseInt(fun2,10),parseInt(fun3,10))

    var value = "Melhor localização: "+resultado[0]+"\n Tempo: "+resultado[1]+" min"
    alert(value);
}