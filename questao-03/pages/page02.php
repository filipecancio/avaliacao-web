<?php
    $result = array(
        [
            "reais50" => 0,
            "reais20" => 0,
            "reais10" => 0,
            "reais5" => 0,
            "reais2" => 0, 
            "reais1" => 0
        ]
    );

    $valor = filter_input(INPUT_POST, 'valor');

    while($valor >= 50){
        $valor = $valor - 50;
        $result['reais50'] = $result['reais50'] +1;
    }
    while($valor >= 20){
        if($valor != 23){
            if($valor != 21){
                $valor = $valor - 20;
                $result['reais20'] = $result['reais20'] +1;
            }else{
                break;
            }
        }else{
            break;
        }
    }
    while($valor >= 10){
        if($valor != 13){
            if($valor != 11){
                $valor = $valor - 10;
                $result['reais10'] = $result['reais10'] +1;
            }else{
                break;
            }
        }else{
            break;
        }
    }
    while($valor >= 5){
        if($valor % 2 != 0){
            $valor = $valor - 5;
            $result['reais5'] = $result['reais5'] +1;
        }else{
            break;
        }
    }
    while($valor >= 2){
        $valor = $valor - 2;
        $result['reais2'] = $result['reais2'] +1;
    }
    while($valor >= 1){
        $valor = $valor - 1;
        $result['reais1'] = $result['reais1'] +1;
    }

?>
<h1>Questão 03</h1>
    <a href="index.php">Voltar</a>
    <div class="sq-container-list">
        <?php if ($result['reais1'] == 0): ?>
            <?php if ($result['reais2'] > 0): ?>
                <div id="2rcont" class="sq-cedulas">
                <img id="2rimg" src="./assets/png/cedula-02.png"/>
                <div class="sq-qt"><p id="2rval"><?php echo $result['reais2']?></p><p>Cédula(s)</p></div>
            </div>
            <?php endif; ?>
            <?php if ($result['reais5'] > 0): ?>
                <div id="5rcont" class="sq-cedulas">
                    <img id="5rimg" src="./assets/png/cedula-05.png"/>
                    <div class="sq-qt"><p id="5rval"><?php echo $result['reais5']?></p><p>Cédula(s)</p></div>
                </div>
            <?php endif; ?>
            <?php if ($result['reais10'] > 0): ?>
                <div id="10rcont" class="sq-cedulas">
                    <img id="10rimg" src="./assets/png/cedula-10.png"/>
                    <div class="sq-qt"><p id="10rval"><?php echo $result['reais10']?></p><p>Cédula(s)</p></div>
                </div>
            <?php endif; ?>
            <?php if ($result['reais20'] > 0): ?>
                <div id="20rcont" class="sq-cedulas">
                    <img id="20rimg" src="./assets/png/cedula-20.png"/>
                    <div class="sq-qt"><p id="20rval"><?php echo $result['reais20']?></p><p>Cédula(s)</p></div>
                </div>
            <?php endif; ?>
            <?php if ($result['reais50'] > 0): ?>
                <div id="50rcont" class="sq-cedulas">
                    <img id="50rimg" src="./assets/png/cedula-50.png"/>
                    <div class="sq-qt"><p id="50rval"><?php echo $result['reais50']?></p><p>Cédula(s)</p></div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if ($result['reais1'] > 0): ?>
            <p>Não aceitamos esse valor pois não temos troco de 1 real.</p>
        <?php endif; ?>
    </div>